import EstadoFactura from "./ui/EstadoFactura";
export default function Home() {
  return (
    <main>
      <div>Hello world!</div>
      <EstadoFactura estado="pagada" />
      <EstadoFactura estado="pendiente" />
      <EstadoFactura estado="facturado" />
    </main>
  );
}
