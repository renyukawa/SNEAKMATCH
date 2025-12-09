
import { GoogleGenAI, Type, Modality } from "@google/genai";
import type { ClothingAnalysis, ShoeAnalysis, SearchResult } from "../types";

const CLOTHING_SYSTEM_PROMPT = "You are a clothing analysis model. Analyze the provided image of a garment and classify its primary item type, dominant color, and fabric texture. Respond ONLY with a JSON object conforming to the provided schema. Use simple, common English words for item_type, color, and fabric (e.g., cotton, silk, wool, leather, denim, linen, polyester).";
const SHOE_SYSTEM_PROMPT = "You are a shoe analysis model. Analyze the provided image of a shoe and classify its type (e.g., Sneakers, Boots, Heels, Sandals), dominant color, and material (e.g., Leather, Canvas, Mesh). Respond ONLY with a JSON object.";

const USER_QUERY = "Analyze this image and provide the classification.";

export async function analyzeClothing(base64Image: string, mimeType: string): Promise<ClothingAnalysis> {
  const ai = new GoogleGenAI({ apiKey: process.env.API_KEY });

  const textPart = { text: USER_QUERY };
  const imagePart = {
    inlineData: {
      mimeType: mimeType,
      data: base64Image
    }
  };

  try {
    const response = await ai.models.generateContent({
      model: 'gemini-2.5-flash',
      contents: { parts: [textPart, imagePart] },
      config: {
        systemInstruction: CLOTHING_SYSTEM_PROMPT,
        responseMimeType: "application/json",
        responseSchema: {
          type: Type.OBJECT,
          properties: {
            item_type: { type: Type.STRING },
            color: { type: Type.STRING },
            fabric: { type: Type.STRING }
          },
          required: ["item_type", "color", "fabric"]
        }
      }
    });

    const jsonText = response.text;
    if (!jsonText) {
      throw new Error("API returned an empty response text.");
    }
    
    return JSON.parse(jsonText) as ClothingAnalysis;

  } catch (error) {
    console.error("Error calling Gemini API:", error);
    if (error instanceof Error && error.message.includes('API key not valid')) {
       throw new Error('API ကီး (API Key) သည် မမှန်ကန်ပါ။ ကျေးဇူးပြု၍ API ကီးကို ပြန်စစ်ဆေးပါ သို့မဟုတ် ပံ့ပိုးပေးထားသော API ကီးကို အသုံးပြုပါ။');
    }
    throw new Error("အဝတ်အစား ခွဲခြမ်းစိတ်ဖြာမှု မအောင်မြင်ပါ");
  }
}

export async function analyzeShoe(base64Image: string, mimeType: string): Promise<ShoeAnalysis> {
  const ai = new GoogleGenAI({ apiKey: process.env.API_KEY });

  const textPart = { text: USER_QUERY };
  const imagePart = {
    inlineData: {
      mimeType: mimeType,
      data: base64Image
    }
  };

  try {
    const response = await ai.models.generateContent({
      model: 'gemini-2.5-flash',
      contents: { parts: [textPart, imagePart] },
      config: {
        systemInstruction: SHOE_SYSTEM_PROMPT,
        responseMimeType: "application/json",
        responseSchema: {
          type: Type.OBJECT,
          properties: {
            shoe_type: { type: Type.STRING },
            color: { type: Type.STRING },
            material: { type: Type.STRING }
          },
          required: ["shoe_type", "color", "material"]
        }
      }
    });

    const jsonText = response.text;
    if (!jsonText) {
        throw new Error("API returned an empty response text.");
    }

    return JSON.parse(jsonText) as ShoeAnalysis;

  } catch (error) {
    console.error("Error calling Gemini API for Shoes:", error);
    if (error instanceof Error && error.message.includes('API key not valid')) {
       throw new Error('API ကီး (API Key) သည် မမှန်ကန်ပါ။');
    }
    throw new Error("ဖိနပ် ခွဲခြမ်းစိတ်ဖြာမှု မအောင်မြင်ပါ");
  }
}

export async function searchSimilarShoes(base64Image: string, mimeType: string): Promise<SearchResult[]> {
  const ai = new GoogleGenAI({ apiKey: process.env.API_KEY });

  const textPart = { text: "Find similar shoes to this image available for sale online. Provide a list of products found." };
  const imagePart = {
    inlineData: {
      mimeType: mimeType,
      data: base64Image
    }
  };

  try {
    const response = await ai.models.generateContent({
      model: 'gemini-2.5-flash',
      contents: { parts: [textPart, imagePart] },
      config: {
        tools: [{ googleSearch: {} }]
      }
    });

    const chunks = response.candidates?.[0]?.groundingMetadata?.groundingChunks;
    const results: SearchResult[] = [];

    if (chunks) {
      chunks.forEach(chunk => {
        if (chunk.web?.uri && chunk.web?.title) {
          results.push({
            title: chunk.web.title,
            url: chunk.web.uri
          });
        }
      });
    }

    return results;

  } catch (error) {
    console.error("Error searching for shoes:", error);
    return []; // Return empty array on failure rather than blocking the UI
  }
}

export async function removeImageBackground(base64Image: string, mimeType: string, itemType: string): Promise<string> {
  const ai = new GoogleGenAI({ apiKey: process.env.API_KEY });

  const imagePart = {
    inlineData: {
      data: base64Image,
      mimeType: mimeType,
    },
  };
  
  const textPart = {
    text: `You are a precision image editor. Your sole task is to perfectly and accurately cut out the item identified as a '${itemType}' from the provided image. The output must be a PNG image where everything that is NOT the '${itemType}' is completely transparent. Ensure the cutout is clean, tight to the edges of the object, and does not include any background, shadows, or other objects.`,
  };

  try {
    const response = await ai.models.generateContent({
      model: 'gemini-2.5-flash-image',
      contents: {
        parts: [imagePart, textPart],
      },
      config: {
        responseModalities: [Modality.IMAGE],
      },
    });
    
    for (const part of response.candidates[0].content.parts) {
      if (part.inlineData) {
        return part.inlineData.data;
      }
    }

    throw new Error("No image data returned from background removal API.");

  } catch (error) {
    console.error("Error calling Gemini for background removal:", error);
    if (error instanceof Error && error.message.includes('API key not valid')) {
       throw new Error('API ကီး (API Key) သည် မမှန်ကန်ပါ။ ကျေးဇူးပြု၍ API ကီးကို ပြန်စစ်ဆေးပါ သို့မဟုတ် ပံ့ပိုးပေးထားသော API ကီးကို အသုံးပြုပါ။');
    }
    throw new Error("ဓာတ်ပုံနောက်ခံကို ဖယ်ရှား၍မရပါ");
  }
}