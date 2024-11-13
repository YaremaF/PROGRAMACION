from bdd import conectar

def insertar_valor(nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO categoria (categoria) VALUES (%s)"
    cursor.execute(consulta, (nombre,))
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
    consulta = "UPDATE categoria SET categoria = %s WHERE idcategoria = %s"
    cursor.execute(consulta, (nuevo_nombre, idcategoria,))
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
    
###PRODUCTO   
def insertar_valor1 (nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO producto (nombre) VALUES (%s)"
    cursor.execute(consulta, (nombre,))
    conexion.commit()
    cursor.close()
    conexion.close()
 
def ver_producto1():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM producto")
    producto = cursor.fetchall()
    cursor.close()
    conexion.close()
    return producto

def update_producto1(precio, nombre_producto):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE producto SET precio = %s WHERE nombre = %s"
    cursor.execute(consulta, (nombre_producto, precio,))

    conexion.commit()
    cursor.close()
    conexion.close()
    
def eliminar_categoria1(nombre_producto):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "DELETE FROM producto WHERE nombre = %s"
    cursor.execute (consulta,(nombre_producto,))
    conexion.commit()
    cursor.close()
    conexion.close()
    
###CLIENTES 
def insertar_categoria_cliente(nombre):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO cliente (contacto) VALUES (%s)"
    cursor.execute(consulta,(nombre,))
    conexion.commit()
    cursor.close()
    conexion.close()
    
def ver_cliente():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM cliente")
    producto = cursor.fetchall()
    cursor.close()
    conexion.close()
    return producto
    
def update_cliente(contacto,idcliente):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE cliente SET contacto = %s WHERE idcliente = %s"
    cursor.execute(consulta, (contacto,idcliente,))
    conexion.commit()
    cursor.close()
    conexion.close()

def eliminar_cliente(nombre_cliente):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "DELETE FROM cliente WHERE contacto = %s"
    cursor.execute (consulta,(nombre_cliente,))
    conexion.commit()
    cursor.close()
    conexion.close()

    ###PEDIDOS
def insertar_peido_fechapedido(fecha_pedido,idproducto):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "INSERT INTO pedido (fechapedido) VALUES (%s)"
    cursor.execute(consulta,(fecha_pedido,))

    idpedido = cursor.lastrowid
    conexion.commit()
    consulta2 = "INSERT INTO detalle (idpedido,idproducto) VALUES (%s,%s)"

    cursor.execute(consulta2,(idpedido,idproducto))
    print(idpedido,idproducto)
    conexion.commit()
    cursor.close()
    conexion.close()
    
def ver_pedido():
    conexion = conectar()
    cursor = conexion.cursor()
    cursor.execute("SELECT * FROM pedido")
    pedido = cursor.fetchall()
    cursor.close()
    conexion.close()
    return pedido
    
def update_pedido(fecha_pedido,idpedido):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "UPDATE pedido SET fechapedido = %s WHERE idpedido = %s"
    cursor.execute(consulta, (fecha_pedido,idpedido,))
    conexion.commit()
    cursor.close()
    conexion.close()

def eliminar_pedido(idpedido):
    conexion = conectar()
    cursor = conexion.cursor()
    consulta = "DELETE FROM pedido WHERE idpedido = %s"
    cursor.execute (consulta,(idpedido,))
    conexion.commit()
    cursor.close()
    conexion.close()