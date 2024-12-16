import Image from "next/image";
import EstadoFactura from "./ui/EstadoFactura";
import { lusitana, inter, fuenteX } from '@/app/ui/fonts';
export default function Home() {
  return (
    <main>
      <div>Hello world!</div>
      <EstadoFactura estado="pagada" />
      <EstadoFactura estado="pendiente" />
      <EstadoFactura estado="facturado" />
      <p className={`${inter.className} antialiased`}>Chapter 3 - Font 1</p>
      <p className={`${lusitana.className} antialiased`}>Chapter 3 - Font 2</p>
      <p className={`${fuenteX.className} antialiased`}>Chapter 3 - Font 3</p>
      
      <Image 
        src="/2.jpg"
        width={1000}
        height={760}
        className="hidden md:block"
        alt="image desktop version"
      />
       <Image 
        src="/3.jpg"
        width={560}
        height={620}
        className="block md:hidden"
        alt="image mobile version"
      />
    </main>
  );
}
