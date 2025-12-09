
import React, { useState, useCallback, useEffect } from 'react';
import type { ClothingAnalysis, ShoeAnalysis, UploadedImage, AvatarStatus, ClothingTransform, Shoe, SearchResult } from './types';
import { analyzeClothing, analyzeShoe, removeImageBackground, searchSimilarShoes } from './services/geminiService';

// --- ITEM MAPPINGS ---
const ITEM_MAP_MY: Record<string, string> = {
    'shirt': 'ရှပ်အင်္ကျီ', 't-shirt': 'တီရှပ်', 'dress': 'ဂါဝန်', 'jacket': 'ဂျာကင်',
    'coat': 'ကုတ်အင်္ကျီ', 'top': 'အင်္ကျီ', 'sweater': 'ဆွယ်တာ', 'hoodie': 'Hoodie',
    'blouse': 'အင်္ကျီ', 'vest': 'ရင်ဖုံး', 'pants': 'ဘောင်းဘီ', 'shorts': 'ဘောင်းဘီတို',
    'gown': 'ဂါဝန်', 'skirt': 'စကတ်', 'jeans': 'ဂျင်းဘောင်းဘီ', 'leggings': 'လက်ဂင်း',
    'suit': 'ဝတ်စုံ', 'blazer': 'ဘလေဇာ', 'cardigan': 'ကာဒီဂန်', 'polo shirt': 'ပိုလိုရှပ်',
    'tank top': 'ကြိုးတစ်လုံးအင်္ကျီ', 'jumpsuit': 'တစ်ဆက်တည်းဝတ်စုံ', 'tracksuit': 'အားကစားဝတ်စုံ'
};

const SHOE_MAP_MY: Record<string, string> = {
    'sneakers': 'Sneakers', 'running': 'အားကစားဖိနပ်', 'boots': 'ဘွတ်ဖိနပ်', 
    'heels': 'ဒေါက်ဖိနပ်', 'sandals': 'ဖိနပ်အပါး', 'slippers': 'ကွင်းထိုး', 
    'loafers': 'ရှူးဖိနပ်', 'clogs': 'ကလော့ခ်', 'flats': 'ဖိနပ်အပြား', 'oxfords': 'ပွဲတက်ဖိနပ်'
};

// --- FABRIC MAPPINGS & DEFINITIONS ---
interface Fabric {
    id: string;
    name: string; // Myanmar name
    englishName: string;
    description: string;
}

const FABRICS: Fabric[] = [
    { id: 'cotton', name: 'ဝါဂွမ်း', englishName: 'Cotton', description: 'နူးညံ့သော ဝါဂွမ်းသား' },
    { id: 'silk', name: 'ပိုးသား', englishName: 'Silk', description: 'တောက်ပြောင်သော ပိုးသား' },
    { id: 'wool', name: 'သိုးမွှေး', englishName: 'Wool', description: 'နွေးထွေးသော သိုးမွှေး' },
    { id: 'leather', name: 'သားရေ', englishName: 'Leather', description: 'တောက်ပသော သားရေ' },
    { id: 'denim', name: 'ဂျင်း', englishName: 'Denim', description: 'ခိုင်ခံ့သော ဂျင်းသား' },
    { id: 'linen', name: 'ပိတ်သား', englishName: 'Linen', description: 'ပေါ့ပါးသော ပိတ်သား' },
    { id: 'polyester', name: 'ပိုလီစတာ', englishName: 'Polyester', description: 'ချောမွေ့သော ပိုလီစတာ' },
];

const SHOES: Shoe[] = [
    { id: 'sneakers', name: 'Sneakers', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNjAiPjxwYXRoIGQ9Ik05NSw0NSBDOTUsNDAgODUsMzAgNzUsMzAgQzY1LDMwIDYwLDM1IDUwLDM1IEM0MCwzNSAzNSwzMCAyNSwzMCBDMTUsMzAgNSw0MCA1LDQ1IEM1LDUwIDE1LDYwIDUwLDYwIEM4NSw2MCA5NSw1MCA5NSw0NSBaIiBmaWxsPSIjRjNGNEZGIiBzdHJva2U9IiNENUQ1RDUiIHN0cm9rZS13aWR0aD0iMiIvPjxwYXRoIGQ9Ik0yNSwzMCBMMzUsNDUgTDY1LDQ1IEw3NSwzMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjRDVENUQ1IiBzdHJva2Utd2lkdGg9IjIiLz48bGluZSB4MT0iNDAiIHkxPSI0NSIgeDI9IjQwIiB5Mj0iNTUiIHN0cm9rZT0iI0Q1RDVENSIgc3Ryb2tlLXdpZHRoPSIyIi8+PGxpbmUgeDE9IjUwIiB5MT0iNDUiIHgyPSI1MCIgeTI9IjU1IiBzdHJva2U9IiNENUQ1RDUiIHN0cm9rZS13aWR0aD0iMiIvPjxsaW5lIHgxPSI2MCIgeTE9IjQ1IiB4Mj0iNjAiIHkyPSI1NSIgc3Ryb2tlPSIjRDVENUQ1IiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNOSw0NSBDMTUsNDIgMjAsNDIgMjUsNDUiIGZpbGw9Im5vbmUiIHN0cm9rZT0iI0Q1RDVENSIgc3Ryb2tlLXdpZHRoPSIyIi8+PC9zdmc+` },
    { id: 'running', name: 'အားကစား', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNjAiPjxwYXRoIGQ9Ik05OCw0NSBDOTgsMzUgODUsMjUgNzAsMjUgQzYwLDI1IDU1LDMwIDQ1LDMwIEMzNSwzMCAzMCwyNSAyMCwyNSBDMTAsMjUgMiwzNSAyLDQ1IEMyLDU1IDEwLDYwIDUwLDYwIEM5MCw2MCA5OCw1NSA5OCw0NSBaIiBmaWxsPSIjRkY1NzIyIiBzdHJva2U9IiNFNjRBMTkiIHN0cm9rZS13aWR0aD0iMiIvPjxwYXRoIGQ9Ik0zMCw0MCBMNjAsNDAiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iNCIvPjwvc3ZnPg==` },
    { id: 'hightops', name: 'လည်ရှည်', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgODAiPjxwYXRoIGQ9Ik04NSw3NSBDOTUsNzUgOTUsNjUgOTUsNTUgTDk1LDQwIEM5NSwzMCA4NSwzMCA3NSwzMCBDNjUsMzAgNjAsMzUgNTAsMzUgQzQwLDM1IDM1LDIwIDI1LDIwIEMxNSwyMCA1LDMwIDUsNTAgQzUsNjUgMTUsNzUgNTAsNzUgQzcwLDc1IDgwLDc1IDg1LDc1IFoiIGZpbGw9IiM5QzI3QjAiIHN0cm9rZT0iIzdCMUZBMiIgc3Ryb2tlLXdpZHRoPSIyIi8+PGxpbmUgeDE9IjIwIiB5MT0iMzAiIHgyPSI0MCIgeTI9IjQwIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjIiLz48bGluZSB4MT0iMjAiIHkxPSI0MCIgeDI9IjQwIiB5Mj0iNTAiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMiIvPjwvc3ZnPg==` },
    { id: 'boots', name: 'ဘွတ်ဖိနပ်', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgODAiPjxwYXRoIGQ9Ik04NSw3NSBDOTUsNzUgOTgsNjAgOTgsNTAgQzk4LDQwIDkwLDMwIDgwLDMwIEM3MCwzMCA2NSwzNSA1NSwzNSBDNDUsMzUgNDAsMzAgMzAsMzAgQzIwLDMwIDEwLDQwIDUsNTAgQzAsNjAgMCw3NSAxNSw3NSBMODUsNzUgWiIgZmlsbD0iIzc4MzUwRiIgc3Ryb2tlPSIjNDUxQTAzIiBzdHJva2Utd2lkdGg9IjIiLz48cmVjdCB4PSIxNSIgeT0iMTAiIHdpZHRoPSIyMCIgaGVpZ2h0PSI2NSIgZmlsbD0iIzc4MzUwRiIgc3Ryb2tlPSIjNDUxQTAzIiBzdHJva2Utd2lkdGg9IjIiLz48bGluZSB4MT0iMjUiIHkxPSIyMCIgeDI9IjI1IiB5Mj0iNjUiIHN0cm9rZT0iI0ZDRDNERCIgc3Ryb2tlLXdpZHRoPSIxIiBzdHJva2UtZGFzaGFycmF5PSI0IDQiLz48L3N2Zz4=` },
    { id: 'heels', name: 'ဒေါက်ဖိနပ်', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgODAiPjxwYXRoIGQ9Ik05NSw1MCBDOTUsNDUgODUsMzUgNzUsMzUgQzY1LDM1IDYwLDQwIDUwLDQwIEM0MCw0MCAzNSwzNSAyNSwzNSBDMTUsMzUgNSw0NSA1LDUwIEw1LDYwIEw5NSw2MCBMOTUsNTAgWiIgZmlsbD0iI0RDMjYyNiIgc3Ryb2tlPSIjQjkxQzFDIiBzdHJva2Utd2lkdGg9IjIiLz48cGF0aCBkPSJNNSw1MCBDMTAsMzAgMzAsMjAgNTAsMjAgQzcwLDIwIDkwLDMwIDk1LDUwIiBmaWxsPSJub25lIiBzdHJva2U9IiNEQzI2MjYiIHN0cm9rZS13aWR0aD0iNCIvPjxyZWN0IHg9IjY1IiB5PSI2MCIgd2lkdGg9IjEwIiBoZWlnaHQ9IjIwIiBmaWxsPSIjQjkxQzFDIiB0cmFuc2Zvcm09InJvdGF0ZSgtNSA3MCA3MCkiLz48L3N2Zz4=` },
    { id: 'oxfords', name: 'ပွဲတက်', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNjAiPjxwYXRoIGQ9Ik05NSw0NSBDOTUsNDAgODUsMzAgNzUsMzAgQzY1LDMwIDYwLDM1IDUwLDM1IEM0MCwzNSAzNSwzMCAyNSwzMCBDMTUsMzAgNSw0MCA1LDQ1IEM1LDUwIDE1LDYwIDUwLDYwIEM4NSw2MCA5NSw1MCA5NSw0NSBaIiBmaWxsPSIjMjEyMTIxIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIvPjxjaXJjbGUgY3g9IjQwIiBjeT0iMzUiIHI9IjEuNSIgZmlsbD0iIzU1NSIvPjxjaXJjbGUgY3g9IjUwIiBjeT0iMzgiIHI9IjEuNSIgZmlsbD0iIzU1NSIvPjwvc3ZnPg==` },
    { id: 'loafers', name: 'ရှူးဖိနပ်', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNjAiPjxwYXRoIGQ9Ik05NSw0NSBDOTUsNDAgODUsMzAgNzUsMzAgQzY1LDMwIDYwLDM1IDUwLDM1IEM0MCwzNSAzNSwzMCAyNSwzMCBDMTUsMzAgNSw0MCA1LDQ1IEM1LDUwIDE1LDYwIDUwLDYwIEM4NSw2MCA5NSw1MCA5NSw0NSBaIiBmaWxsPSIjNzk1NTQ4IiBzdHJva2U9IiM1RDQwMzciIHN0cm9rZS13aWR0aD0iMiIvPjxwYXRoIGQ9Ik0yNSwzMiBMNzUsMzIiIHN0cm9rZT0iIzVENDAzNyIgc3Ryb2tlLXdpZHRoPSIyIiBmaWxsPSJub25lIi8+PC9zdmc+` },
    { id: 'sandals', name: 'ဖိနပ်အပါး', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNTAiPjxwYXRoIGQ9Ik05NSwzNSBDOTUsMzAgODUsMjAgNzUsMjAgQzY1LDIwIDYwLDI1IDUwLDI1IEM0MCwyNSAzNSwyMCAyNSwyMCBDMTUsMjAgNSwzMCA1LDM1IEM1LDQwIDE1LDUwIDUwLDUwIEM4NSw1MCA5NSw0MCA5NSwzNSBaIiBmaWxsPSIjRkZEN0M0IiBzdHJva2U9IiNENkEyODUiIHN0cm9rZS13aWR0aD0iMS41Ii8+PHBhdGggZD0iTTIwLDM1IEMzMCwxNSA3MCwxNSA4MCwzNSIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjNzgzNTBGIiBzdHJva2Utd2lkdGg9IjMiLz48cGF0aCBkPSJNNDAsMjUgQzQ1LDE1IDU1LDE1IDYwLDI1IiBmaWxsPSJub25lIiBzdHJva2U9IiM3ODM1MGYiIHN0cm9rZS13aWR0aD0iMyIvPjwvc3ZnPg==` },
    { id: 'clogs', name: 'ကလော့ခ်', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNjAiPjxwYXRoIGQ9Ik05NSw0NSBDOTUsMzAgODUsMTUgNTAsMTUgQzIwLDE1IDUsMzAgNSw0NSBDNSw1NSAxNSw2MCA1MCw2MCBDODUsNjAgOTUsNTUgOTUsNDUgWiIgZmlsbD0iIzhCQzM0QSIgc3Ryb2tlPSIjNjg5RjM4IiBzdHJva2Utd2lkdGg9IjIiLz48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIzIiBmaWxsPSJ3aGl0ZSIvPjxjaXJjbGUgY3g9IjQ1IiBjeT0iMjUiIHI9IjMiIGZmlsbD0id2hpdGUiLz48Y2lyY2xlIGN4PSI2MCIgY3k9IjMwIiByPSIzIiBmaWxsPSJ3aGl0ZSIvPjwvc3ZnPg==` },
    { id: 'slippers', name: 'ကွင်းထိုး', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNTAiPjxwYXRoIGQ9Ik05NSwzNSBDOTUsMzAgODUsMjAgNzUsMjAgQzY1LDIwIDYwLDI1IDUwLDI1IEM0MCwyNSAzNSwyMCAyNSwyMCBDMTUsMjAgNSwzMCA1LDM1IEM1LDQwIDE1LDUwIDUwLDUwIEM4NSw1MCA5NSw0MCA5NSwzNSBaIiBmaWxsPSIjMDNBOUY0IiBzdHJva2U9IiMwMjg4RDEiIHN0cm9rZS13aWR0aD0iMiIvPjxwYXRoIGQ9Ik0zMCwyNSBRNTAsNSA3MCwyNSIgc3Ryb2tlPSIjRkZGRkZGIiBzdHJva2Utd2lkdGg9IjQiIGZpbGw9Im5vbmUiLz48L3N2Zz4=` },
    { id: 'flats', name: 'ဖိနပ်အပြား', imageUrl: `data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgNjAiPjxwYXRoIGQ9Ik05NSw0NSBDOTUsNDAgODUsMzAgNzUsMzAgQzY1LDMwIDYwLDM1IDUwLDM1IEM0MCwzNSAzNSwzMCAyNSwzMCBDMTUsMzAgNSw0MCA1LDQ1IEM1LDUwIDE1LDYwIDUwLDYwIEM4NSw2MCA5NSw1MCA5NSw0NSBaIiBmaWxsPSIjMTExODIzIiBzdHJva2U9IiM0QjU1NjMiIHN0cm9rZS13aWR0aD0iMSIvPjxwYXRoIGQ9Ik0yMCw0NSBDMzAsMzAgNzAsMzAgODAsNDUgQzcwLDQyIDMwLDQyIDIwLDQ1IFoiIGZpbGw9IiMxMTE4MjMiIHN0cm9rZT0iIzRCNTg2MyIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9zdmc+` },
];

const POSITION_ADJUST_AMOUNT = 10; // pixels
const SCALE_ADJUST_AMOUNT = 0.05; // 5%

// --- HELPER COMPONENTS ---

const LoadingSpinner: React.FC = () => (
    <div className="ml-3 flex space-x-1">
        <span className="loading-dot w-2 h-2 bg-indigo-200 rounded-full"></span>
        <span className="loading-dot w-2 h-2 bg-white rounded-full"></span>
        <span className="loading-dot w-2 h-2 bg-indigo-200 rounded-full"></span>
    </div>
);

interface ImageUploaderProps {
  label: string;
  onImageSelect: (image: UploadedImage) => void;
  previewUrl: string | null;
  onClear: () => void;
}

const ImageUploader: React.FC<ImageUploaderProps> = ({ label, onImageSelect, previewUrl, onClear }) => {
    const handleFileChange = (event: React.ChangeEvent<HTMLInputElement>) => {
        const file = event.target.files?.[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = () => {
            const base64 = reader.result?.toString().split(',')[1];
            if (base64) {
                onImageSelect({
                    base64,
                    mimeType: file.type,
                    url: URL.createObjectURL(file)
                });
            }
        };
        reader.readAsDataURL(file);
    };

    return (
        <div className="p-5 bg-gray-50 rounded-lg border border-gray-200">
            <label htmlFor={`imageUpload-${label}`} className="block text-lg font-medium text-gray-700 mb-2">
                {label}
            </label>
            <input 
                type="file" 
                id={`imageUpload-${label}`} 
                accept="image/*" 
                className="w-full p-3 border border-indigo-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500 bg-white cursor-pointer" 
                onChange={handleFileChange} 
            />
            
            {previewUrl && (
                <div className="relative mt-4 w-full h-48 bg-gray-200 rounded-lg flex items-center justify-center overflow-hidden">
                    <img src={previewUrl} className="object-cover h-full w-full" alt="ရွေးချယ်ထားသောပုံ" />
                    <button 
                        onClick={onClear} 
                        className="absolute top-2 right-2 bg-black bg-opacity-50 text-white rounded-full p-1.5 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-white"
                        aria-label="Clear image"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            )}
        </div>
    );
};

interface AvatarProps {
  status: AvatarStatus;
  clothing: ClothingAnalysis | null;
  clothingImageUrl: string | null;
  transform: ClothingTransform;
  selectedShoe: Shoe | null;
  selectedFabric: string;
}

const Avatar: React.FC<AvatarProps> = ({ status, clothing, clothingImageUrl, transform, selectedShoe, selectedFabric }) => {
    const lowerCaseItemType = clothing?.item_type.toLowerCase().trim() || '';
    const displayItem = ITEM_MAP_MY[lowerCaseItemType] || clothing?.item_type || '';
    const fabricName = FABRICS.find(f => f.id === selectedFabric)?.name || selectedFabric;

    const isDress = ['dress', 'gown', 'jumpsuit'].includes(lowerCaseItemType);
    const isPants = ['pants', 'shorts', 'jeans', 'leggings', 'tracksuit'].includes(lowerCaseItemType);
    const isSkirt = ['skirt'].includes(lowerCaseItemType);
    const isTop = !isDress && !isPants && !isSkirt;

    // --- Dynamic Styles for Clothing ---
    const clothingStyle: React.CSSProperties = clothingImageUrl ? {
        backgroundImage: `url(${clothingImageUrl})`,
        backgroundSize: `${transform.scale * 100}%`,
        backgroundPosition: `calc(50% + ${transform.x}px) ${transform.y}px`,
        backgroundRepeat: 'no-repeat',
    } : {};

    const shoeStyle: React.CSSProperties = selectedShoe ? {
        backgroundImage: `url(${selectedShoe.imageUrl})`,
        backgroundSize: 'contain',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        backgroundColor: 'transparent',
    } : {};

    const leftShoeStyle: React.CSSProperties = { ...shoeStyle, transform: 'scaleX(-1)' };
    
    // --- Helper for Texture Overlay ---
    const getTextureOverlay = () => {
        let style: React.CSSProperties = {};
        
        switch (selectedFabric) {
            case 'silk':
                style = {
                    background: 'linear-gradient(135deg, rgba(255,255,255,0) 30%, rgba(255,255,255,0.4) 50%, rgba(255,255,255,0) 70%)',
                    mixBlendMode: 'soft-light',
                    backgroundSize: '200% 200%',
                };
                break;
            case 'wool':
                style = {
                    backgroundImage: `url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.3'/%3E%3C/svg%3E")`,
                    mixBlendMode: 'multiply',
                };
                break;
            case 'leather':
                style = {
                    background: 'linear-gradient(180deg, rgba(255,255,255,0.2) 0%, rgba(0,0,0,0.1) 100%)',
                    mixBlendMode: 'overlay',
                    filter: 'contrast(1.2) brightness(1.1)',
                };
                break;
            case 'denim':
                 style = {
                    backgroundImage: `repeating-linear-gradient(45deg, rgba(0,0,0,0.05) 0px, rgba(0,0,0,0.05) 1px, transparent 1px, transparent 4px)`,
                    mixBlendMode: 'multiply',
                };
                break;
             case 'linen':
                 style = {
                    backgroundImage: `url("data:image/svg+xml,%3Csvg width='4' height='4' viewBox='0 0 4 4' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h4v4H0z' fill='none'/%3E%3Cpath d='M0 0h2v2H0zm2 2h2v2H2z' fill='rgba(0,0,0,0.05)'/%3E%3C/svg%3E")`,
                    mixBlendMode: 'multiply',
                };
                break;
             case 'polyester':
                style = {
                    background: 'rgba(255,255,255,0.05)',
                    mixBlendMode: 'overlay',
                };
                break;
            default: // Cotton or others
                return null;
        }

        return <div className="absolute inset-0 w-full h-full pointer-events-none" style={style}></div>;
    };

    const skinClass = "bg-gradient-to-br from-stone-100 via-stone-200 to-stone-300 shadow-[inset_0_-2px_4px_rgba(0,0,0,0.05)]";
    const skinBorder = "border border-stone-300/40";
    const avatarContainerClasses = `absolute inset-0 ${status === 'presenting' ? 'runway-walk' : status === 'idle' ? 'idle-float' : ''}`;
    const headClasses = `absolute top-0 left-1/2 transform -translate-x-1/2 w-16 h-16 sm:w-20 sm:h-20 rounded-full z-30 ${skinClass} ${skinBorder} ${status !== 'loading' ? 'head-tilt' : ''}`;

    return (
        <div className="relative w-32 h-64 sm:w-48 sm:h-80 mb-4">
             <div className="absolute bottom-[-10px] left-1/2 transform -translate-x-1/2 w-20 sm:w-28 h-4 bg-black/10 blur-md rounded-full"></div>

            <div id="avatarContainer" className={avatarContainerClasses}> 
                <div className={headClasses}>
                    <div className="absolute top-[35%] left-[28%] w-1 h-1.5 bg-stone-400/60 rounded-full"></div>
                    <div className="absolute top-[35%] right-[28%] w-1 h-1.5 bg-stone-400/60 rounded-full"></div>
                    <div className="absolute bottom-[28%] left-1/2 transform -translate-x-1/2 w-3 h-1 border-b border-stone-400/50 rounded-full"></div>
                </div>

                <div id="mannequinNeck" className={`absolute top-11 sm:top-14 left-1/2 transform -translate-x-1/2 w-6 sm:w-8 h-4 sm:h-5 z-10 ${skinClass}`}></div>
                
                <div id="mannequinLeftArm" className={`absolute top-14 sm:top-18 left-0 sm:left-2 w-8 sm:w-10 h-24 sm:h-32 rounded-full z-5 ${skinClass} ${skinBorder}`}></div>
                <div id="mannequinRightArm" className={`absolute top-14 sm:top-18 right-0 sm:right-2 w-8 sm:w-10 h-24 sm:h-32 rounded-full z-5 ${skinClass} ${skinBorder}`}></div>

                {status !== 'loading' && clothing && isDress ? (
                     <div 
                        id="mannequinDress" 
                        className="absolute top-12 sm:top-16 left-1/2 transform -translate-x-1/2 w-28 sm:w-36 h-52 sm:h-64 z-10" 
                        style={{ 
                            clipPath: 'polygon(20% 0, 80% 0, 100% 100%, 0% 100%)', 
                            ...clothingStyle,
                            backgroundColor: clothingImageUrl ? 'transparent' : undefined
                        }}
                    >
                        {!clothingImageUrl && <div className={`w-full h-full ${skinClass}`}></div>}
                        {getTextureOverlay()}
                    </div>
                ) : (
                    <>
                        <div 
                            id="mannequinTorso" 
                            className={`absolute top-12 sm:top-16 left-1/2 transform -translate-x-1/2 w-28 sm:w-36 h-28 sm:h-36 z-10 ${skinClass}`} 
                            style={{ clipPath: 'polygon(20% 0, 80% 0, 100% 100%, 0% 100%)', ...(isTop ? clothingStyle : {}) }}
                        >
                            {isTop && getTextureOverlay()}
                        </div>
                        
                        <div 
                            id="mannequinLeftLeg" 
                            className={`absolute top-40 sm:top-52 right-[calc(50%+1px)] sm:right-[calc(50%+2px)] w-11 sm:w-15 h-16 sm:h-[72px] z-10 ${skinClass}`}
                            style={isPants || isSkirt ? clothingStyle : {}}
                        >
                             {(isPants || isSkirt) && getTextureOverlay()}
                        </div>
                        <div 
                            id="mannequinRightLeg" 
                            className={`absolute top-40 sm:top-52 left-[calc(50%+1px)] sm:left-[calc(50%+2px)] w-11 sm:w-15 h-16 sm:h-[72px] z-10 ${skinClass}`}
                            style={isPants || isSkirt ? clothingStyle : {}}
                        >
                             {(isPants || isSkirt) && getTextureOverlay()}
                        </div>
                    </>
                )}

                <div id="mannequinLeftFoot" className="absolute bottom-0 right-[calc(50%+1px)] sm:right-[calc(50%+2px)] w-11 sm:w-15 h-8 sm:h-10 z-20" style={leftShoeStyle}></div>
                <div id="mannequinRightFoot" className="absolute bottom-0 left-[calc(50%+1px)] sm:left-[calc(50%+2px)] w-11 sm:w-15 h-8 sm:h-10 z-20" style={shoeStyle}></div>
            </div>
            <p id="descriptionText" className="absolute -bottom-16 left-0 right-0 text-center text-sm text-gray-500 mt-2 px-2">
                {clothing ? `ဝတ်ဆင်ထားသည်: ${displayItem} (${clothing.color}, ${fabricName})` : 'ခွဲခြမ်းစိတ်ဖြာမှုရလဒ်ကို စောင့်ဆိုင်းနေပါသည်...'}
            </p>
        </div>
    );
};

interface ClothingControlsProps {
    onPositionChange: (axis: 'x' | 'y', direction: 1 | -1) => void;
    onScaleChange: (direction: 1 | -1) => void;
    onReset: () => void;
}

const ClothingControls: React.FC<ClothingControlsProps> = ({ onPositionChange, onScaleChange, onReset }) => (
    <div className="mt-4 pt-4 border-t border-indigo-200 w-full">
        <h3 className="text-lg font-medium text-gray-700 mb-3 text-center">၃။ ဝတ်စုံကို ညှိပါ</h3>
        <div className="grid grid-cols-3 gap-2 max-w-xs mx-auto">
            <div></div>
            <button onClick={() => onPositionChange('y', -1)} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Move up"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5 15l7-7 7 7" /></svg></button>
            <div></div>

            <button onClick={() => onPositionChange('x', -1)} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Move left"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15 19l-7-7 7-7" /></svg></button>
            <button onClick={onReset} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Reset"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 4v5h5M20 20v-5h-5M4 4l16 16" /></svg></button>
            <button onClick={() => onPositionChange('x', 1)} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Move right"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" /></svg></button>

            <button onClick={() => onScaleChange(-1)} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Scale down"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM13 10H7" /></svg></button>
            <button onClick={() => onPositionChange('y', 1)} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Move down"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" /></svg></button>
            <button onClick={() => onScaleChange(1)} className="p-2 bg-white rounded-md border shadow-sm hover:bg-gray-100 flex justify-center items-center" aria-label="Scale up"><svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v6m3-3h-6" /></svg></button>
        </div>
    </div>
);

interface FabricSelectorProps {
    selectedFabric: string;
    onFabricSelect: (fabricId: string) => void;
}

const FabricSelector: React.FC<FabricSelectorProps> = ({ selectedFabric, onFabricSelect }) => (
    <div className="mt-4 pt-4 border-t border-indigo-200 w-full">
        <h3 className="text-lg font-medium text-gray-700 mb-3 text-center">၄။ အထည်သား (Texture)</h3>
        <div className="flex space-x-2 overflow-x-auto pb-2 -mx-2 px-2 no-scrollbar">
            {FABRICS.map((fabric) => (
                <button
                    key={fabric.id}
                    onClick={() => onFabricSelect(fabric.id)}
                    className={`flex-shrink-0 px-3 py-2 rounded-lg text-sm font-medium transition-colors border ${
                        selectedFabric === fabric.id 
                        ? 'bg-indigo-600 text-white border-indigo-600' 
                        : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-50'
                    }`}
                >
                    {fabric.name}
                </button>
            ))}
        </div>
    </div>
);

interface ShoeSelectorProps {
    shoes: Shoe[];
    selectedShoe: Shoe | null;
    onShoeSelect: (shoe: Shoe) => void;
}

const ShoeSelector: React.FC<ShoeSelectorProps> = ({ shoes, selectedShoe, onShoeSelect }) => (
    <div className="mt-4 pt-4 border-t border-indigo-200 w-full">
        <h3 className="text-lg font-medium text-gray-700 mb-3 text-center">၅။ ဖိနပ်များ</h3>
        <div className="flex space-x-3 overflow-x-auto pb-2 -mx-2 px-2 no-scrollbar items-center">
            {shoes.map((shoe) => (
                <button
                    key={shoe.id}
                    onClick={() => onShoeSelect(shoe)}
                    className={`flex-shrink-0 w-24 h-24 rounded-lg flex flex-col items-center justify-center p-1 border-2 transition-all duration-200 ${selectedShoe?.id === shoe.id ? 'border-indigo-500 scale-105 bg-indigo-100' : 'border-gray-300 bg-white hover:border-indigo-300'}`}
                    aria-label={`Select ${shoe.name}`}
                >
                    <img src={shoe.imageUrl} alt={shoe.name} className="w-16 h-12 object-contain" />
                    <span className="text-xs mt-2 text-gray-600 font-medium text-center">{shoe.name}</span>
                </button>
            ))}
        </div>
    </div>
);

interface SearchResultsProps {
  results: SearchResult[];
}

const SearchResults: React.FC<SearchResultsProps> = ({ results }) => {
  if (results.length === 0) return null;
  
  return (
    <div className="mt-6 pt-4 border-t border-indigo-200 w-full">
      <h3 className="text-lg font-medium text-gray-700 mb-3 text-center">အင်တာနက်တွင် တွေ့ရှိရသော တူညီနိုင်သည့် ဖိနပ်များ</h3>
      <div className="grid gap-2">
        {results.map((result, idx) => (
          <a 
            key={idx} 
            href={result.url} 
            target="_blank" 
            rel="noopener noreferrer"
            className="block p-3 bg-white border border-gray-200 rounded-lg hover:bg-indigo-50 transition shadow-sm"
          >
            <div className="text-sm font-semibold text-indigo-700 truncate">{result.title}</div>
            <div className="text-xs text-gray-500 truncate">{result.url}</div>
          </a>
        ))}
      </div>
    </div>
  );
};


// --- MAIN APP COMPONENT ---

function App() {
  const [activeTab, setActiveTab] = useState<'clothing' | 'shoe'>('clothing');
  
  // Clothing State
  const [uploadedImage, setUploadedImage] = useState<UploadedImage | null>(null);
  const [analysisResult, setAnalysisResult] = useState<ClothingAnalysis | null>(null);
  const [processedImageUrl, setProcessedImageUrl] = useState<string | null>(null);
  const [clothingTransform, setClothingTransform] = useState<ClothingTransform>({ x: 0, y: 0, scale: 1 });
  const [selectedFabric, setSelectedFabric] = useState<string>('cotton');

  // Shoe State
  const [uploadedShoeImage, setUploadedShoeImage] = useState<UploadedImage | null>(null);
  const [shoeAnalysisResult, setShoeAnalysisResult] = useState<ShoeAnalysis | null>(null);
  const [customShoes, setCustomShoes] = useState<Shoe[]>([]);
  const [selectedShoe, setSelectedShoe] = useState<Shoe>(SHOES[0]);
  const [shoeSearchResults, setShoeSearchResults] = useState<SearchResult[]>([]);

  // Global UI State
  const [isLoading, setIsLoading] = useState(false);
  const [message, setMessage] = useState<{ text: string; type: 'success' | 'error' | 'info' } | null>(null);
  const [avatarStatus, setAvatarStatus] = useState<AvatarStatus>('idle');

  useEffect(() => {
    let timer: ReturnType<typeof setTimeout>;
    if (avatarStatus === 'presenting') {
      timer = setTimeout(() => setAvatarStatus('idle'), 2000);
    }
    return () => clearTimeout(timer);
  }, [avatarStatus]);

  const handleTransformReset = useCallback(() => {
    setClothingTransform({ x: 0, y: 0, scale: 1 });
  }, []);

  const handleImageSelect = useCallback((image: UploadedImage) => {
    setUploadedImage(image);
    setAnalysisResult(null);
    setProcessedImageUrl(null);
    setMessage(null);
    handleTransformReset();
    setSelectedFabric('cotton');
  }, [handleTransformReset]);

  const handleShoeImageSelect = useCallback((image: UploadedImage) => {
      setUploadedShoeImage(image);
      setShoeAnalysisResult(null);
      setShoeSearchResults([]);
      setMessage(null);
  }, []);

  const handleClearImage = useCallback(() => {
      setUploadedImage(null);
      setAnalysisResult(null);
      setProcessedImageUrl(null);
      setMessage(null);
      setAvatarStatus('idle');
      handleTransformReset();
      setSelectedFabric('cotton');
  }, [handleTransformReset]);
  
  const handleClearShoeImage = useCallback(() => {
      setUploadedShoeImage(null);
      setShoeAnalysisResult(null);
      setShoeSearchResults([]);
      setMessage(null);
  }, []);

  const handleAnalyzeAndDress = async () => {
    if (!uploadedImage) {
      setMessage({ text: 'ကျေးဇူးပြု၍ အဝတ်အစား ဓာတ်ပုံတစ်ပုံကို ဦးစွာတင်ပါ', type: 'error' });
      return;
    }
    
    setIsLoading(true);
    setAvatarStatus('loading');
    setMessage(null);
    setProcessedImageUrl(null);
    handleTransformReset();

    try {
      setMessage({ text: 'အဝတ်အစားအမျိုးအစားကို ခွဲခြမ်းစိတ်ဖြာနေပါသည်...', type: 'info' });
      const result = await analyzeClothing(uploadedImage.base64, uploadedImage.mimeType);
      setAnalysisResult(result);
      
      const detectedFabric = result.fabric?.toLowerCase() || '';
      const matchedFabric = FABRICS.find(f => detectedFabric.includes(f.englishName.toLowerCase()))?.id || 'cotton';
      setSelectedFabric(matchedFabric);

      setMessage({ text: 'ခွဲခြမ်းစိတ်ဖြာပြီးပါပြီ။ နောက်ခံကို ဖယ်ရှားနေပါသည်...', type: 'info' });
      const processedImageBase64 = await removeImageBackground(uploadedImage.base64, uploadedImage.mimeType, result.item_type);
      setProcessedImageUrl(`data:image/png;base64,${processedImageBase64}`);
      
      setMessage({ text: `ခွဲခြမ်းစိတ်ဖြာမှု အောင်မြင်ပါသည်: အမျိုးအစား "${result.item_type}"၊ အရောင် "${result.color}"၊ အထည်သား "${result.fabric}"`, type: 'success'});
      setAvatarStatus('presenting');
    } catch (error) {
      const errorMessage = error instanceof Error ? error.message : 'An unknown error occurred.';
      setMessage({ text: errorMessage, type: 'error' });
      setAvatarStatus('idle');
    } finally {
      setIsLoading(false);
    }
  };

  const handleAnalyzeAndWearShoe = async () => {
    if (!uploadedShoeImage) {
        setMessage({ text: 'ကျေးဇူးပြု၍ ဖိနပ် ဓာတ်ပုံတစ်ပုံကို ဦးစွာတင်ပါ', type: 'error' });
        return;
    }

    setIsLoading(true);
    setShoeSearchResults([]);
    setMessage({ text: 'ဖိနပ်အမျိုးအစားကို ခွဲခြမ်းစိတ်ဖြာနေပါသည်...', type: 'info' });

    try {
        // Run analysis and search in parallel
        const [analysisResult, searchResults] = await Promise.all([
            analyzeShoe(uploadedShoeImage.base64, uploadedShoeImage.mimeType),
            searchSimilarShoes(uploadedShoeImage.base64, uploadedShoeImage.mimeType)
        ]);
        
        setShoeAnalysisResult(analysisResult);
        setShoeSearchResults(searchResults);
        
        setMessage({ text: 'ဖိနပ်နောက်ခံကို ဖယ်ရှားနေပါသည်...', type: 'info' });
        // Use 'shoe' as a generic hint if specific type fails, or use detected type
        const processedBase64 = await removeImageBackground(uploadedShoeImage.base64, uploadedShoeImage.mimeType, 'shoe');
        
        const myanmarName = SHOE_MAP_MY[analysisResult.shoe_type.toLowerCase()] || analysisResult.shoe_type;

        const newShoe: Shoe = {
            id: `custom-${Date.now()}`,
            name: myanmarName,
            imageUrl: `data:image/png;base64,${processedBase64}`
        };

        setCustomShoes(prev => [newShoe, ...prev]);
        setSelectedShoe(newShoe);

        setMessage({ text: `ဖိနပ်ထည့်သွင်းမှု အောင်မြင်ပါသည်: ${myanmarName} (${analysisResult.color})`, type: 'success' });
        setAvatarStatus('presenting');

    } catch (error) {
        const errorMessage = error instanceof Error ? error.message : 'An unknown error occurred.';
        setMessage({ text: errorMessage, type: 'error' });
    } finally {
        setIsLoading(false);
    }
  };

  const handlePositionChange = (axis: 'x' | 'y', direction: 1 | -1) => {
    setClothingTransform(prev => ({
        ...prev,
        [axis]: prev[axis] + (POSITION_ADJUST_AMOUNT * direction)
    }));
  };

  const handleScaleChange = (direction: 1 | -1) => {
    setClothingTransform(prev => ({
        ...prev,
        scale: Math.max(0.1, prev.scale + (SCALE_ADJUST_AMOUNT * direction)) 
    }));
  };
  
  const handleShoeSelect = (shoe: Shoe) => {
    setSelectedShoe(shoe);
  };
  
  const handleFabricSelect = (fabricId: string) => {
      setSelectedFabric(fabricId);
  };
  
  const displayShoes = [...customShoes, ...SHOES];

  return (
    <div className="w-full max-w-4xl bg-white rounded-xl card p-6 sm:p-10">
      <h1 className="text-3xl font-bold text-center text-indigo-700 mb-6">
          ✨ အဝတ်အစား ဓာတ်ပုံခွဲခြမ်းစိတ်ဖြာရေး
      </h1>
      <p className="text-center text-gray-600 mb-8">
          သင့်အဝတ်အစား သို့မဟုတ် ဖိနပ် ဓာတ်ပုံကို တင်လိုက်ပါ။ AI က ခွဲခြမ်းစိတ်ဖြာပြီး Character ကို အလိုအလျောက် ဝတ်ဆင်ပေးပါလိမ့်မယ်။
      </p>

      <div className="flex flex-col lg:flex-row gap-8">
        {/* Left Panel: Upload and Controls */}
        <div className="lg:w-1/2 space-y-6">
            
          {/* Tab Switcher */}
          <div className="flex p-1 space-x-1 bg-gray-100 rounded-xl">
              <button 
                onClick={() => setActiveTab('clothing')}
                className={`w-full py-2.5 text-sm font-medium leading-5 rounded-lg transition-all duration-200 ${activeTab === 'clothing' ? 'bg-white shadow text-indigo-700' : 'text-gray-500 hover:text-gray-700'}`}
              >
                  အဝတ်အစား
              </button>
              <button 
                onClick={() => setActiveTab('shoe')}
                className={`w-full py-2.5 text-sm font-medium leading-5 rounded-lg transition-all duration-200 ${activeTab === 'shoe' ? 'bg-white shadow text-indigo-700' : 'text-gray-500 hover:text-gray-700'}`}
              >
                  ဖိနပ်
              </button>
          </div>

          {activeTab === 'clothing' ? (
              <>
                 <ImageUploader label="၁။ အဝတ်အစား ဓာတ်ပုံတင်ရန်" onImageSelect={handleImageSelect} previewUrl={uploadedImage?.url || null} onClear={handleClearImage} />
                 
                 <button 
                    onClick={handleAnalyzeAndDress}
                    className="w-full bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 transition duration-300 disabled:bg-indigo-400 flex items-center justify-center"
                    disabled={!uploadedImage || isLoading}
                  >
                    {isLoading ? (
                      <>
                        <span>ခွဲခြမ်းစိတ်ဖြာနေပါသည်...</span>
                        <LoadingSpinner />
                      </>
                    ) : (
                      <span>👗 အဝတ်အစား ဝတ်ဆင်ပါ</span>
                    )}
                  </button>
              </>
          ) : (
              <>
                 <ImageUploader label="၁။ ဖိနပ် ဓာတ်ပုံတင်ရန်" onImageSelect={handleShoeImageSelect} previewUrl={uploadedShoeImage?.url || null} onClear={handleClearShoeImage} />

                 <button 
                    onClick={handleAnalyzeAndWearShoe}
                    className="w-full bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 transition duration-300 disabled:bg-indigo-400 flex items-center justify-center"
                    disabled={!uploadedShoeImage || isLoading}
                  >
                    {isLoading ? (
                      <>
                        <span>ခွဲခြမ်းစိတ်ဖြာနေပါသည်...</span>
                        <LoadingSpinner />
                      </>
                    ) : (
                      <span>👟 ဖိနပ် ဝတ်ဆင်ပါ</span>
                    )}
                  </button>
              </>
          )}

          {message && (
            <div className={`mt-4 p-4 text-sm rounded-lg border border-l-4 ${
              message.type === 'success' ? 'bg-green-100 border-green-400 text-green-700' :
              message.type === 'error' ? 'bg-red-100 border-red-400 text-red-700' :
              'bg-blue-100 border-blue-400 text-blue-700'
            }`} role="alert">
              {message.text}
            </div>
          )}
        </div>

        {/* Right Panel: Avatar Display */}
        <div className="lg:w-1/2 p-6 bg-indigo-50 rounded-xl flex flex-col items-center justify-center min-h-[300px]">
            <h2 className="text-xl font-semibold text-indigo-700 mb-4">
                ၂။ ဒစ်ဂျစ်တယ် Avatar (Character)
            </h2>
            <Avatar 
                status={avatarStatus} 
                clothing={analysisResult} 
                clothingImageUrl={processedImageUrl || null} 
                transform={clothingTransform} 
                selectedShoe={selectedShoe} 
                selectedFabric={selectedFabric}
            />
            {processedImageUrl && !isLoading && (
              <>
                <ClothingControls 
                    onPositionChange={handlePositionChange} 
                    onScaleChange={handleScaleChange} 
                    onReset={handleTransformReset}
                />
                <FabricSelector selectedFabric={selectedFabric} onFabricSelect={handleFabricSelect} />
              </>
            )}
            <ShoeSelector 
                shoes={displayShoes} 
                selectedShoe={selectedShoe} 
                onShoeSelect={handleShoeSelect} 
            />
            <SearchResults results={shoeSearchResults} />
        </div>
      </div>
    </div>
  );
}

export default App;