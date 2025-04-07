package YaremaFirko;

//Creamos la clase animal con sus atributos correspondientes.
public abstract class Animal {
	String numeroChip;
	String nombre;
	int edad;
	String raza;
	Boolean adoptado;
	
	//Creamos un constructor para que las clases hijas lo puedan usar y así que puedan crear instancias.
	// ya que al ser Animal una clase abstracta, no puede hacer instancias directamente.
	
	public Animal(String numeroChip, String nombre, int edad, String raza, Boolean adoptado){
		this.numeroChip = numeroChip;
		this.nombre = nombre;
		this.edad = edad;
		this.raza = raza;
		this.adoptado = adoptado;
	}
	
	//Creamos un método mostrar el cual usaremos en las clases hijas para mostrar los datos de cada una.
	public void mostrar() {
		
	};
	
	//Creamos el método getNumeroChip para que nos devuelva el numero del Chip para usarlo en otros lados.
	public String getNumeroChip() {
		return numeroChip;
	}
}
