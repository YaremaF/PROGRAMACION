from bdd import conectar
def crear_categoria(nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO categoria (nombre) VALUES (%s)"
    cursor.execute(consulta, (nombre,))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def leer_categorias():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM categoria")
    categorias = cursor.fetchall()
    cursor.close()
    conexion.close()
    return categorias

def actualizar_categoria(idcategoria, nuevo_nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE categoria SET nombre = %s WHERE idcategoria = %s"
    cursor.execute(consulta, (nuevo_nombre, idcategoria))
    conexion.commit()
    cursor.close()
    conexion.close()

def eliminar_categoria(idcategoria):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "DELETE FROM categoria WHERE idcategoria = %s"
    cursor.execute(consulta, (idcategoria,))
    conexion.commit()
    cursor.close()
    conexion.close()