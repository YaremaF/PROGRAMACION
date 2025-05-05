package conectaBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;
import java.util.Scanner;


public class Principal1 {
    public static void main(String[] args) {
    	
    	Scanner scanner = new Scanner(System.in);
    	//LLAMAMOS AL MENÚ
    	Tablas.menu();
    	
    	//DECLARAMOS OPCIÓN DEL MENÚ
    	int accion = scanner.nextInt();
    	scanner.nextLine();
    	
    	//1. CREAR CONEXIÓN
        Connection miConexion = Conexion.getConexion();
        
        //CREAMOS UN WHILE HASTA SALIR
        while(accion != 3) {
        	//SI ES 1 ENSEÑAMOS LOS DATOS DE LAS TABLAS
            if (accion == 1) {
            	Tablas.informacion(miConexion);
            }
            
            //SI ES 2 SALIMOS DEL SISTEMA
            if (accion == 2) {
            	System.out.println("Saliendo del sistema");
            	break;
            }
            
            //MOSTRAMOS EL MENÚ Y PEDIMOS QUE INSERTE OTRA OPCIÓN
            Tablas.menu();
        	
        	accion = scanner.nextInt();
        	scanner.nextLine();
        }


    }
    
}
