print("Yarema Firko")
with open('mi_archivo.txt', 'w') as archivo:
    archivo.write( '¡Hola, bienvenidos al curso de Python!')
archivo.close()

print("<=====================>")
print("<=====================>")

print("Yarema Firko")
with open('frase.txt.','w') as archivo:
    archivo.write('Esta es mi frase')
    archivo.close()

with open('frase.txt','r') as archivo:
    contenido = archivo.read()
    print(contenido)
    archivo.close()
    
print("<=====================>")
print("<=====================>")

print("Yarema Firko")
with open('notas.txt','w') as archivo:
    archivo.write('La primera línea\n')
    archivo.write('La segunda línea\n')
    archivo.write('La tercera línea\n')
    archivo.close()

print("<=====================>")
print("<=====================>")

print("Yarema Firko")
with open('alumnos.txt', 'w') as archivo:
    archivo.write('Adrián Herrero\n')
    archivo.write('Ana Bosque\n')
    archivo.write('Laura García\n')
    archivo.write('Lucía Rojo\n')
    archivo.write('Hugo Crespo\n')
    archivo.close()

with open('alumnos.txt', 'r') as archivo:
    lineas = archivo.readlines()
    for linea in lineas:
        print (linea.strip())
    archivo.close()

print("<=====================>")
print("<=====================>")

print("Yarema Firko")
with open ('diario.txt', 'w') as archivo:
    archivo.write ('Aquí vamos a añadir cosas\n')
    archivo.close()

frase_añadir = input ("Escribe la frase que quieres añadir")

with open ('diario.txt', 'a') as archivo:
    archivo.write(frase_añadir + '\n')
    archivo.close()





























