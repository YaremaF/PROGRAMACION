'''
lista_canciones = []
primera_cancion = input("Escribe la canción que quieres agregar ")
while primera_cancion != "fin":
    
    lista_canciones.append(primera_cancion)
    primera_cancion = input("Escribe la siguiente canción que quieres agregar ")
print("Tu lista de reproducción: ")
for i in lista_canciones:
   print (i) 
seleccion = lista_canciones[int(input("Ingresa el número de la canción que quieres reproducir:") )- 1]
print("Reproduciendo la canción", seleccion)

agenda = {}
nombre_contacto = input("Escibe el nombre ")
numero_contacto = input("Escribe el número de teléfono ")
while nombre_contacto != "fin":
    
    agenda[nombre_contacto] = {numero_contacto}
    nombre_contacto = input("Inserta el nombre ")
    numero_contacto = input("Inserta el número ")
print(agenda)    
nombre_busqueda = input("Ingresa el nombre del contacto que deseas buscar: ")
print ("El número de teléfono de ",nombre_busqueda,"es",  agenda [nombre_busqueda])


itinerario = ("Madrid", "Barcelona", "Valencia", "Sevilla")
print("El itinerario de viaje es: ")
for i in itinerario:
    print(i)
    
posicion = int(input(("Ingresa la posición para saber qué ciudad visitarás:" )))   
ciudad = itinerario [ posicion - 1]  

print("En la posición", posicion, "visitarás", ciudad)   

asignatura = ""
calificación = float ()
contador_asignaturas = 0
boletin = {}
suma_notas = 0
while asignatura != "fin":

    asignatura = input("Escribe el nombre de la asignatura ")
    if asignatura != "fin":
        calificación = float ( input("Escribe la calificación de la asignatura "))
            
        boletin [asignatura] = calificación
        contador_asignaturas = contador_asignaturas + 1
        suma_notas = suma_notas + calificación
for asignatura, calificación in boletin.items():
    print(asignatura, ":", calificación)

print("La calificación media de todas las asignaturas es ", suma_notas / contador_asignaturas ) 
'''''''''



producto = ""
total_precio = 0.0
total_cals = 0
cal = ()
precio = ()
pedido = []
menu = {}
menu[producto] = (precio, cal)
menu = {
    "Zumo": (1.55, 60),
    "Té": (1.0, 0),
    "Bocadillo de jamon": (4, 20),
    "Napolitana": (2.5, 220)
}



while producto != "fin":

    producto = input("Dime lo que vas a querer ")

    if producto == "fin":
        break
         
    if producto in menu :
        precio, cal = menu[producto]
        total_precio += precio
        total_cals += cal
        pedido.append(producto)
print("Tu pedido:")        
for i in pedido:
    print ("-", i )

print("El total a pagar es de: ", total_precio,"€")

print("El total de calorías es de: ", total_cals,"cal")













