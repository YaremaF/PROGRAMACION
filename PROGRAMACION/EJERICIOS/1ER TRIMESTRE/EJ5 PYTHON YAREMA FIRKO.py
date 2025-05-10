

1
def suma(asumar):
    return asumar + 5
numero = int
lista_numeros = []

while numero != "fin":
    numero = (input("Escribe los números de la lista"))
    if numero == "fin":
        break
    lista_numeros.append(int(numero))


resultado = map(suma,lista_numeros)
print(list(resultado))

2
def atitulo(titulo):
       return titulo.title()
lista_frases = []
frase = str
while frase != "fin":
    frase = (input("Escribe las frases de la lista"))
    if frase == "fin":
        break
    lista_frases.append(frase)



cambio = map(atitulo,lista_frases)
print(list(cambio))

3
def multiplica2(multi):
    return multi * 2
numero = int
lista_numeros = []

while numero != "fin":
    numero = (input("Escribe los números de la lista"))
    if numero == "fin":
        break
    lista_numeros.append(int(numero))



resultado = map(multiplica2,lista_numeros)
print(list(resultado))
4
def redondeo(numero):
    return round(numero,0)

numero = float
lista_numeros = []

while numero != "fin":
    numero = (input("Escribe los números de la lista"))
    if numero == "fin":
        break
    lista_numeros.append(float(numero))

'''
resultado = map(redondeo, lista_numeros)
print(list(resultado))

def longitud(loquesea):
    return len(loquesea)
lista_palabras = []
palabra = str
while palabra != "fin":
    palabra = (input("Escribe las palabras de la lista"))
    if palabra == "fin":
        break
    lista_palabras.append(palabra)

largo = map(longitud, lista_palabras)
print(list(largo))
'''
