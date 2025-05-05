package conectaBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

public class Tablas {
	public static void informacion(Connection miConexion) {

		try {	
			//2. CREAR OBJETO STATEMENT
			Statement miStatement = miConexion.createStatement();
			//3. EJECUTAR SQL
	        ResultSet miResultset = miStatement.executeQuery("SELECT * FROM Peliculas");
			
			//4. RECORRER EL RESULTSET
				System.out.println("Estos son los datos de la tabla PELICULAS");
				
				while(miResultset.next()) {
					//USAMOS EL PRINTF PARA QUE MUESTRE LA INFORMACIÓN BIEN
	                System.out.printf("ID de la película: %-5d Nombre: %-20s Actor Principal: %-20s Año de estreno: %-10d Es apto para menores?: %-10b%n",
	                        miResultset.getInt("IdPelicula"), 
	                        miResultset.getString("Nombre"), 
	                        miResultset.getString("ActorPrincipal"), 
	                        miResultset.getInt("AnioEstreno"),
	                        miResultset.getBoolean("AptoParaMenores"));
	            }
	            System.out.println();
		
			//3. EJECUTAR SQL
				ResultSet miResultset2=miStatement.executeQuery("SELECT * FROM Generos");
				
			//4. RECORRER EL RESULTSET
				System.out.println("Estos son los datos de la tabla GENEROS");
				while(miResultset2.next()) {
					//USAMOS EL PRINTF PARA QUE MUESTRE LA INFORMACIÓN BIEN
	                System.out.printf("ID de la película: %-5s Género Principal: %-20s Género Secundario: %-20s%n", 
	                        miResultset2.getString("IdPelicula"), 
	                        miResultset2.getString("GeneroPrincipal"), 
	                        miResultset2.getString("GeneroSecundario"));
				}
			} catch (Exception e) {
	            System.out.println("ERROR TRATANDO DE MOSTRAR LAS TABLAS");
	            e.printStackTrace();
	        }
	}
	
	//CREAMOS MENÚ PARA USARLO EN PRINCIPAL
	public static void menu() {
        System.out.println("--- MENU DE ACCIONES ---");
        System.out.println("PULSA 1 PARA VER LA INFORMACIÓN DE LAS TABLAS");
        System.out.println("PULSA 2 PARA SALIR");
		
	}
}
