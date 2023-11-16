
package composite;
import java.util.Scanner;

public class Composite {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
         Scanner scanner = new Scanner(System.in);
        ProductoSimple pipocasimple = new ProductoSimple("Picoca simple", 5);
        ProductoSimple pipocamediana = new ProductoSimple("Picoca mediana", 8);
        ProductoSimple pipocagrande = new ProductoSimple("Picoca grande", 10);

        ProductoSimple sodasimple = new ProductoSimple("Soda simple ", 4);
        ProductoSimple sodamediana = new ProductoSimple("Soda mediana ", 6);
        ProductoSimple sodagrande = new ProductoSimple("Soda grande ", 8);
         
        ProductoCompuesto combo1 = new ProductoCompuesto("Combo1");
        combo1.addProducto(pipocasimple);
        combo1.addProducto(sodasimple);
        

        ProductoCompuesto combo2 = new ProductoCompuesto("Combo2");
        combo2.addProducto(pipocamediana);
        combo2.addProducto(sodamediana);
        
        ProductoCompuesto combo3 = new ProductoCompuesto("Combo3");
        combo3.addProducto(pipocagrande);
        combo3.addProducto(sodagrande);
        
        boolean running = true;
        while (running) {
            System.out.println("Ingrese el nombre del cliente:");
            String cliente = scanner.nextLine();

            System.out.println("Seleccione una opción:");
            System.out.println("1. Pipoca simple");
            System.out.println("2. Pipoca mediana");
            System.out.println("3. Pipoca grande");
            System.out.println("4. Soda simple");
            System.out.println("5. Soda mediana");
            System.out.println("6. Soda grande");
            System.out.println("7. Combo1 (soda simple + pipoca simple)");
            System.out.println("8. Combo2 (soda mediana + pipoca mediana)");
            System.out.println("9. Combo3 (soda grande + pipoca grande)");
            System.out.println("0. Salir");

            System.out.print("Opción: ");
            int opcion = Integer.parseInt(scanner.nextLine()); // Asumiendo que el usuario ingresa un número válido

            Venta ventaActual;
            
            switch (opcion) {
                case 1:
                    ventaActual = new Venta(4, cliente, 0);
                    ventaActual.addProducto(pipocasimple);
                    break;
                case 2:
                    ventaActual = new Venta(4, cliente, 0);
                    ventaActual.addProducto(pipocamediana);
                    break;
                case 3:
                    ventaActual = new Venta(4, cliente, 0);
                    ventaActual.addProducto(pipocagrande);
                    break;
                case 4:
                    ventaActual = new Venta(4, cliente, 0);
                    ventaActual.addProducto(sodasimple);
                    break;
                case 5:
                    ventaActual = new Venta(4, cliente, 0);
                    ventaActual.addProducto(sodamediana);
                    break;
                case 6:
                    ventaActual = new Venta(4, cliente, 0);
                    ventaActual.addProducto(sodagrande);
                    break;
                case 7:
                    ventaActual = new Venta(1, cliente, 1);
                    ventaActual.addProducto(combo1);
                    break;
                case 8:
                    ventaActual = new Venta(1, cliente, 2);
                    ventaActual.addProducto(combo2);
                    break;
                case 9:
                    ventaActual = new Venta(1, cliente,3);
                    ventaActual.addProducto(combo3);
                    break;
                case 0:
                    System.out.println("Saliendo del sistema...");
                    scanner.close();
                    return;
                default:
                    System.out.println("Opción no válida, intente de nuevo.");
                    continue;
            }
            
            ventaActual.imprimirVenta();
            running = false;
        }
    }
}

