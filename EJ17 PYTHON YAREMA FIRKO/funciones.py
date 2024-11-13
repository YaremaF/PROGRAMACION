import bdd
from categoria import insertar_valor, ver_categorias, update_categoria, eliminar_categoria, insertar_valor1, ver_producto1, update_producto1, eliminar_categoria1, insertar_categoria_cliente, ver_cliente, update_cliente,eliminar_cliente
from categoria import insertar_peido_fechapedido, ver_pedido, update_pedido, eliminar_pedido
def mostrar_tablas():
    print("\nESTAS SON LAS TABLAS A LAS CUALES PUEDES ACCEDER")
    print("1. TABLA CATEGORIA")
    print("2. TABLA PRODUCTO")
    print("3. TABLA CLIENTE")
    print("4. TABLA PEDIDO")
    
def mostrar_menu():

    print("\n=== Gestión de Categorías ===")
    print("1. Crear nueva categoría")
    print("2. Leer categorías existentes")
    print("3. Actualizar una categoría")
    print("4. Eliminar una categoría")
    print("5. Salir")


def ejecutar_opcion(tabla,opcion):
    
    
    if tabla == 1:
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
    

    if tabla == 2:
        if opcion == 1:
            nombre = input("Ingrese el nombre del producto: ")
            insertar_valor1(nombre)
            print("Categoría creada exitosamente.")
            
        elif opcion == 2:
            categorias = ver_producto1()
            print("\nListado de Categorías:")
            for idproducto, nombre,idcategoria,medida,precio,stock in categorias:
                print(f"idproducto: {idproducto}, Nombre: {nombre}, Idcategoria:{idcategoria}, Medida: {medida}, Precio:{precio}, Stock:{stock}")
                
        elif opcion == 3:
            nombre = (input("Ingrese el nombre del producto a actualizar: "))
            nuevo_precio = int(input("Ingrese el nuevo precio del producto: "))
            update_producto1(nombre, nuevo_precio)
            print("Categoría actualizada exitosamente.")
            
        elif opcion == 4:
            nombre_producto = input("Ingrese el nombre del producto a eliminar: ")
            eliminar_categoria1(nombre_producto)
            print("Categoría eliminada exitosamente.")
            
        elif opcion == 5:
            print("Saliendo del programa. ¡Hasta pronto!")
            return False
        else:
            print("Opción no válida. Intente de nuevo.")
        return True
    
    if tabla == 3:
        if opcion == 1:
            nombre = input("Ingrese el nombre del cliente: ")
            insertar_categoria_cliente(nombre)
            print("Categoría creada exitosamente.")
            
        elif opcion == 2:
            categorias = ver_cliente()
            print("\nListado de Categorías:")
            for idcliente, cia,contacto,cargo,direccion,ciudad,region,cp,pais,tlf,fax in categorias:
                print(f"idcliente: {idcliente}, cia: {cia}, contacto:{contacto}, cargo: {cargo}, direccion:{direccion}, ciudad:{ciudad}, region: {region}, cp:{cp}, pais:{pais}, tlf:{tlf}, fax:{fax}")
                
        elif opcion == 3:
            idcliente = (input("Ingrese idcliente a actualizar: "))
            contacto = input("Ingrese el nuevo contacto: ")
            update_cliente(contacto, idcliente)
            print("Categoría actualizada exitosamente.")
            
        elif opcion == 4:
            nombre_cliente = input("Ingrese el contacto a eliminar: ")
            eliminar_cliente(nombre_cliente)
            print("Contacto eliminado exitosamente.")
            
        elif opcion == 5:
            print("Saliendo del programa. ¡Hasta pronto!")
            return False
        else:
            print("Opción no válida. Intente de nuevo.")
        return True
    
    if tabla == 4:
        if opcion == 1:
            idproducto = int(input("Ingrese el id del pedido: "))
            fecha = input("Ingrese la fecha del pedido: ")
            insertar_peido_fechapedido(fecha,idproducto)
            print("Categoría creada exitosamente.")
             
        elif opcion == 2:
            categorias = ver_pedido()
            print("\nListado de Categorías:")
            for idpedido, idcliente,fechapedido,fechaentrega in categorias:
                print(f"idpedido: {idpedido}, idcliente: {idcliente}, fechapedido:{fechapedido}, fechaentrega: {fechaentrega}")
                
        elif opcion == 3:
            idpedido = int(input("Ingrese idpedido a actualizar: "))
            fecha = input("Ingrese la nueva fecha del pedido: ")
            update_pedido(fecha, idpedido)
            print("Categoría actualizada exitosamente.")
            
        elif opcion == 4:
            idpedido = int(input("Ingrese el idpedido a eliminar: "))
            eliminar_pedido(idpedido)
            print("Pedido eliminado exitosamente.")
            
        elif opcion == 5:
            print("Saliendo del programa. ¡Hasta pronto!")
            return False
        else:
            print("Opción no válida. Intente de nuevo.")
        return True
    else:
        print("Opción no válida. Intente de nuevo.")
    return True