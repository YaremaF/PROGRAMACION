import numpy as np
##importamos random para la creación del ID
import random 

##Este e el registro de usuarios hecho con anterrioridad
registro_usuarios = {
    'Juan': '1',
    'Alicia': '2',
    'Luisa': '3',
    'Hugo': '4'
}

##creamos un dccionario con los productos que se pueden comnprar 
nombre = ""
precio = 0.0
idproducto = ""
menu={}
menu[idproducto]=(nombre,precio)
menu = {
    1: ("Camiseta",20),
    2: ("Sudadera",40),
    3: ("Chaqueta",55),
    4: ("Zapatillas",110.05),
    5: ("Salir")
}

##en este diccionario guardaremos los pedidos generados
lista_pedidos = {}

##creamos la funcion inicio o registro en donde se podrá registrar o iniciar sesión para luego poder hacer compras o visualizar usuarios
def inicio_o_registro():
    proceso = "si"
    
    while proceso != "no":
        terminar = "no"
        ##hacemos un while para poder registrar/iniciar usuario
        while terminar != "si":
            print("1-Registrarse")
            print("2-Iniciar sesión")
            registro_or_inicio = None
            ##un while en el caso de que lo escrito no entra en el rango que se pide
            while registro_or_inicio not in [1,2]:
                registro_or_inicio = int(input("Elige 1 para registro o 2 para inicio "))
            ## si la opción es 1 se registrará al usuario    
            if registro_or_inicio == 1:
                registro = False
                while registro != True:
                    ##aquí si el nombre del usuario existe en el sistema no se le permitirá crearlo
                    nombre_registro = input("Escribe el nombre ")
                    while nombre_registro in registro_usuarios:
                        registro = False
                        print("El usuario existe en el sistema")
                        nombre_registro = input("Escribe otro nombre")
                    contraseña_registro = input("Escribe la contraseña ")
                    registro = True
                    print("El usuario se registró")
                ##guardamos el usuariop en el sistema y le pedimos el inicio de la sesión
                registro_usuarios[nombre_registro] = contraseña_registro
                registro_or_inicio = 2
            ##si la opción es 2 iremos al inicio del usuario
            if registro_or_inicio == 2:
                inicio = False
                while inicio != True:
                    nombre1 = input("Escribe el nombre de usuario ")
                    contraseña = input("Escribe la contraseña del usuario ")
                    ## le pedimos el nombre y la contraseña y si el nombre aparece en el sistema nos aseguramos que la contraseña sea la mimsa que tiene agregada
                    if nombre1 in registro_usuarios and registro_usuarios[nombre1] == contraseña:
                        print("Usuario correcto")
                        terminar = "si"
                    else:
                        print("Usuario incorrecto") 
                    inicio = True
        ##aquí el usuario puede decir si quiere ver los uusarios registrados 
        visualizar = input("Escribe 'si' si deseas visualizar a los clientes registrados o 'no' si por el contratio no quieres ")
        while visualizar not in ("si","no"):
            visualizar = input("Escribelo bien porfavor, escribe 'si' si deseas visualizar a los clientes registrados o 'no' si por el contratio no quieres ")
        if visualizar == "si":
            for usuario in registro_usuarios.items():
                print(f"Usuario:{usuario}")


        ##le preguntamos is quiere hacer una compra, en el caso de que no quiera direcatemente salimos de la función
        eleccion2 = input("Escribe 'si' si deseas hacer una compra'no' si por el contratio no quieres ")
        while eleccion2 not in ("si","no"):
            eleccion2 = input("Escribe 'si' si deseas hacer una compra'no' si por el contratio no quieres ")
        if eleccion2 == "no":
             proceso = "no"
             break
        ##enseñamos el menu de posible compras
        print("Menú de productos:")
        for (nombre, precio) in menu.items():
            print(f"{idproducto} {nombre} - {precio}")

        eleccion = int
        total = 0
        
        ##si la eleccion es 5 se guardan los articulos que quiere comprar y finaliza la compra
        while eleccion != 5:
            eleccion = int(input("Elige que del 1 al 4 que producto quieres comprar, o si quieres salir escribe un 5 "))
            ##una vez seleccionado la opción 5 generamos un id del pedido el cual no puede estar en la lista de pedidos
            if eleccion == 5:
                print("Gracias por comprar")
                
                id_pedido = random.randint(1,1000) 
                while id_pedido in lista_pedidos:
                    id_pedido = random.randint(1, 1000)
                ##enseñamos los datos del pedido
                print(f"Tu número de pedido es: {id_pedido} y tu total de compra es de: {total} euros")
                lista_pedidos[id_pedido] = (nombre1, total)
                break     
        
            elif eleccion in menu:
                cargo = menu[eleccion][1]
                total = total + cargo
            else:
                print("Escribe un número válido")
        continuar = "no"
        ##le preguntamos si quiere hacer otra compra o salir del todo, si elige hacer otra compra tiene la posibilidad de inicair sesión con otro usuario o registrarse
        while continuar != "si":
            seguir_salir = int(input("Escribe un 1 si quieres hacer otro pedido o un 2 si ya te quieres salir del todo "))
            if seguir_salir == 1:
                proceso = "si"
                continuar = "si"
            elif seguir_salir == 2:
                proceso = "no"
                continuar = "si"
            else:
                print("Escribe un número válido")
         
    ##enseñamos la lista de todos los pedidos generados
    print("\nLista de pedidos completos:")
    for id_pedido, (nombre_cliente, total_cliente) in lista_pedidos.items():
        print(f"Pedido ID {id_pedido}: Nombre usuario {nombre_cliente} - Total: ${total_cliente}")

##creamos la funcion para que pueda revisar la informacion del pedido
def revisar_pedidos():
    ##si el ID que ingrsa está en la lista de pedidos entonces le mostramos la información registrada de este
    seguimiento = int(input("Si quieres revisar tu pedido, por favor ingrse el ID de este "))
    if seguimiento in lista_pedidos:
        nombre_cliente, total_cliente = lista_pedidos[seguimiento]
        print(f"Pedido ID {seguimiento}: Nombre usuario {nombre_cliente} - Total: ${total_cliente}")
    else:
        print("El ID no está registrado en el sistema")
