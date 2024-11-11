from categoria import insertar_valor, ver_categorias, update_categoria, eliminar_categoria

def mostrar_menu():
    print("\n=== Gestión de Categorías ===")
    print("1. Crear nueva categoría")
    print("2. Leer categorías existentes")
    print("3. Actualizar una categoría")
    print("4. Eliminar una categoría")
    print("5. Salir")

def ejecutar_opcion(opcion):
    if opcion == 1:
        nombre = input("Ingrese el nombre de la nueva categoría: ")
        insertar_valor(nombre)
        print("Categoría creada exitosamente.")
        
    elif opcion == 2:
        categorias = ver_categorias()
        print("\nListado de Categorías:")
        for idcategoria, nombre in categorias:
            print(f"ID: {idcategoria}, Nombre: {nombre}")
            
    elif opcion == 3:
        idcategoria = int(input("Ingrese el ID de la categoría a actualizar: "))
        nuevo_nombre = input("Ingrese el nuevo nombre de la categoría: ")
        update_categoria(idcategoria, nuevo_nombre)
        print("Categoría actualizada exitosamente.")
        
    elif opcion == 4:
        idcategoria = int(input("Ingrese el ID de la categoría a eliminar: "))
        eliminar_categoria(idcategoria)
        print("Categoría eliminada exitosamente.")
        
    elif opcion == 5:
        print("Saliendo del programa. ¡Hasta pronto!")
        return False
    else:
        print("Opción no válida. Intente de nuevo.")
    return True
