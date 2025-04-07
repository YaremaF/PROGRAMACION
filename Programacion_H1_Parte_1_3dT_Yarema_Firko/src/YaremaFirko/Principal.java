package YaremaFirko;
import java.util.ArrayList;
import java.util.Scanner;

//Creamos la clase principal.
public class Principal {
	
	//Creamos el public static void para que se haga al iniciar esta clase.
	public static void main(String[] args) {
		
		//Creamos un array list llamada animales de "Animal" porque este contiene tanto Gato como Perro.
		ArrayList<Animal> animales = new ArrayList<>();
		Scanner scanner = new Scanner(System.in);
		
		//Inserté estos dos ejemplos para ir usandolos en las pruebas que vaya haciendo y usarlos para ver si los métodos funcionan correctamente.
		animales.add(new Perro("P1", "Toby", 5, "Pitbull", true, "pequeño"));
		animales.add(new Gato("G1", "Mushka", 3, "Común europeo", true, true));
		
		//Le pedimos al usuario si va a querer insertar un animal o va a querer visualizar alguno mediante un código proporcionado.
		System.out.println("Pulsa 1 si quieres dar de alta a algún animal, pulsa 2 si quieres ver los datos de algún animal");
		int accion = scanner.nextInt();
		scanner.nextLine();
		
		//En el caso de que inserte 1 significa que el usuario quiere insertar algún animal.
		if(accion == 1) {
			
			//Preguntamos si va a querer insertar un perro pulsando 1 o si va a querer insertar un gato pulsando 2.
			System.out.println("Pulsa 1 si quieres añadir un Perro o pulsa 2 si quieres añadir un Gato");
		    int tipo = scanner.nextInt();
		    //Al ser int tenemos que poner esto para que no hayan errores.
		    scanner.nextLine();
			
		    //Pedimos que inserte el número del chip.
			System.out.println("Introduce el número del chip");
			String numeroChip = scanner.nextLine();
			
			//Creamos el atributo de seguir. 
			Boolean seguir = false;
			
			//Creamos un For each en el cual Animal es el tipo y "a" es la variable, animales es el ArrayList.
			// con esto logramos que la variable a recorra todos los elementos del ArrayList animales.
			for (Animal a : animales) {
				
				String resultado = a.getNumeroChip();
				System.out.println(resultado);
				//Con == no funciona para comparar cadenas de texto, tengo que usar .equals el cual si compara cadenas de texto.
				if(resultado.equals(numeroChip)) {
					System.out.println(numeroChip);
					System.out.println("El código que has introducido ya existe");
					//Si el chip se repite asignamos a seguir true que significa que el chip existe.
					seguir = true;
					break;
				}
				System.out.println("El código está disponible");
				
			}
			//Si seguir es false significa que el chip no se repite y podemos seguir tomando los datos para insertar al animal.
			//Si es true significa que el chip se repite y no vamos a tomar los datos.
			if(seguir == false) {
			       System.out.println("Escribe el nombre ");
			       String nombre = scanner.nextLine();
			       
			       System.out.println("Escribe la edad ");
			       int edad = scanner.nextInt();
			       scanner.nextLine();
			       
			       System.out.println("Escribe la raza ");
			       String raza = scanner.nextLine();
			       
			       System.out.println("Dime si está adoptado ");
			       Boolean adoptado = scanner.nextBoolean();
			       scanner.nextLine();
			       
			       //Un bucle para crear un Perro o Gato dependiendo de la elección del usuario.
			       if (tipo == 1) {
			    	   System.out.println("Escribe el tamaño del perro ");
				       String tamanio = scanner.nextLine();
				       
				       animales.add(new Perro(numeroChip, nombre, edad, raza, adoptado, tamanio));
				     
			       }else if(tipo == 2) {
			    	   System.out.println("Escribe si el gato se hizo el test de leucemia");
			    	   Boolean testLeucemia = scanner.nextBoolean();
			    	   
			    	   animales.add(new Gato(numeroChip, nombre, edad, raza, adoptado, testLeucemia));
			       }
			       
			       //Creamos otro bucle for each en el cual la variable de animal va a recorrer animales y va a imprimir todos sus datos.
			       for (Animal a : animales) {
			    	  a.mostrar();
			       }
			}
			//Este bucle se activa si el usuario pulsó 2 cuando quiso buscar un animal por su código.
		}else if(accion == 2) {
				//Pedimos que código quiere que le busquemos
				System.out.println("Escribe el código del animal a buscar");
				String buscarCodigo = scanner.nextLine();

					//Creamos otro for each en el cual a se va a recorrer los elementos animales.
			       for (Animal a : animales) {
			    	   
						String resultado1 = a.getNumeroChip();
						System.out.println(resultado1);
						
						//En el caso de que en algún momento cuando la a se está recorriendo el array y el codigo a buscar sea igual a la "a" mostramos todos los datos de ese elemnto del array.
						if(resultado1.equals(buscarCodigo)) {
							a.mostrar();
						}else {
							System.out.println("El código proporcionado del animal no existe");
						}
			       }
				
			}
		
		}
		

	       /**
		 */
	

}
