
export interface ClothingAnalysis {
  item_type: string;
  color: string;
  fabric: string;
}

export interface ShoeAnalysis {
  shoe_type: string;
  color: string;
  material: string;
}

export interface SearchResult {
  title: string;
  url: string;
}

export interface UploadedImage {
  base64: string;
  mimeType: string;
  url: string;
}

export type AvatarStatus = 'idle' | 'loading' | 'presenting';

export interface ClothingTransform {
  x: number;
  y: number;
  scale: number;
}

export interface Shoe {
  id: string;
  name: string;
  imageUrl: string;
}