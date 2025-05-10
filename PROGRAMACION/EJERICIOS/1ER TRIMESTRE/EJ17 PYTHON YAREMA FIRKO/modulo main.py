from funciones import mostrar_menu, ejecutar_opcion,mostrar_tablas
def main():
    continuar = True
    while continuar:
        mostrar_tablas()
        mostrar_menu() 
        try:
            tabla = int(input("Seleccione una opcióna: "))
            opcion = int(input("Seleccione una opción: "))
            continuar = ejecutar_opcion(tabla,opcion)  
        except ValueError:
            print("Error: Debe ingresar un número válido.")
    
if __name__ == "__main__":
    main()
 