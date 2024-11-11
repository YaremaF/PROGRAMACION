from bdd import conectar

def insertar_valor (nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO categoria (nombre) VALUES (%s)"
    cursor.execute(consulta, (nombre))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def ver_categorias():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM categoria")
    categorias = cursor.fetchall()
    cursor.close()
    conexion.close()
    return categorias

def update_categoria(idcategoria, nuevo_nombre):
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
    cursor.execute (consulta,(idcategoria))
    conexion.commit()
    cursor.close()
    conexion.close()
    
###PRODUCTO   
def insertar_valor (nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO nombre (nombre) VALUES (%s)"
    cursor.execute(consulta, (nombre))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def ver_producto():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM producto")
    producto = cursor.fetchall()
    cursor.close()
    conexion.close()
    return producto

def update_producto(idproducto, nuevo_nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE producto SET nombre = %s WHERE idproducto = %s"
    cursor.execute(consulta, (nuevo_nombre, idproducto))

    conexion.commit()
    cursor.close()
    conexion.close()
    
def eliminar_categoria(idproducto):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "DELETE FROM categoria WHERE idproducto = %s"
    cursor.execute (consulta,(idproducto))
    conexion.commit()
    cursor.close()
    conexion.close()