package YaremaFirko;

//Creamos la clase hija Perro (de Animal) con 1 atributo adicional.
public class Perro extends Animal{
	String tamanio;
	
	//Creamos el constructor de Perro para instanciar y mediante super llamamos a la clase Animal y usando su constructor creamos una instancia de Perro.
	public Perro(String numeroChip, String nombre, int edad, String raza, boolean adoptado, String tamanio) {
		super(numeroChip,nombre, edad, raza, adoptado);
		this.tamanio = tamanio;
	}

	//Creamos un método mostrar para mostrar los datos de las instancias creadas.
	public void mostrar() {
		System.out.println("Perro - numero de chip: " + numeroChip + ", Nombre: " + nombre +
	               ", Edad: " + edad + ", Raza: " + raza + ", Tamaño: " + tamanio);
	};
}
