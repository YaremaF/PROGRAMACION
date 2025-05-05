package conectaBD;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Statement;

public class Conexion {
	public static Connection getConexion(){
		//CREAMOS OBJETO DE CONEXION
		Connection miConexion = null;
		
		try {

		//1. CREAR CONEXIÓN
			miConexion=DriverManager.getConnection("jdbc:mysql://localhost:3307/cine_YaremaFirko", "root", "");
			
		//2. CREAR OBJETO STATEMENT
			Statement miStatement = miConexion.createStatement();
		}catch(Exception e) {
			System.out.println("NO SE CONECTA!!");
			e.printStackTrace();
		}
		//DEVOLVEMOS LA CONEXION
		return miConexion;
	}
}
