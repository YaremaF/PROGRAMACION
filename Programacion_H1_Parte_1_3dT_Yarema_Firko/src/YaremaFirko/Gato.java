package YaremaFirko;

//Creamos la clase hija Gato (de Animal) con 1 atributo adicional.
public class Gato extends Animal{
	Boolean testLeucemia;
	
	//Creamos el constructor de Gato para instanciar y mediante super llamamos a la clase Animal y usando su constructor creamos una instancia de Perro.
	public Gato(String numeroChip, String nombre, int edad, String raza, boolean adoptado, Boolean testLeucemia) {
		super(numeroChip,nombre, edad, raza, adoptado);
		this.testLeucemia = testLeucemia;
	}
	
	//Creamos un método mostrar para mostrar los datos de las instancias creadas.
	public void mostrar() {
		System.out.println("Gato - numero de chip: " + numeroChip + ", Nombre: " + nombre +
	               ", Edad: " + edad + ", Raza: " + raza + ", Test de leucemia hecho o no: " + testLeucemia);
	};
}
