import numpy as np

registro_usuarios = {
    'Juan': '1',
    'Alicia': '2',
    'Luisa': '3',
    'Hugo': '4'
}
def registrar_usuario ():
    terminar = "no"
    while terminar != "si":
        nombre = input("Escribe el nombre de usuario ")
        contraseña = input("Escribe la contraseña del usuario ")
        if nombre in registro_usuarios and registro_usuarios[nombre] == contraseña:
            print("Usuario correcto")
            terminar = "si"
        else:
            print("Usuario incorrecto")
    


    








