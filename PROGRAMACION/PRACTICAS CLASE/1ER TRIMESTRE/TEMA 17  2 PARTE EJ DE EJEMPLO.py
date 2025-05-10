import utilidades

texto = input("Escribe el texto ")

print("Texto en mayúsculas: ", utilidades.convertir_a_mayusculas(texto))
print("texto en minúsculas: ", utilidades.convertir_a_minusculas(texto))

if utilidades.es_palindromo(texto):
    print("El texto es un palindromo")
else:
    print("El texto no es un palindromo")
    





