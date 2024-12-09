import { Inter, Lusitana } from 'next/font/google';
import localFont from 'next/font/local';

 
export const inter = Inter({ subsets: ['latin'] });
export const lusitana = Lusitana({ subsets: ['latin'], weight: "400" });
export const fuenteX = localFont({ src: './superArena.ttf'});