<?php

class ProductoDAO {
    
	/*public function listar(){	
		try { 	
			$db = Conexion::getConexion();
			$stmt = $db->prepare("select * from producto");
			$stmt->execute();
			$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
			foreach($filas as $fila) {			
				$vo = new Producto();
				$vo->idProducto = $fila['id_producto'];
				$vo->nombre = $fila['nombre'];
				$vo->descripcion = $fila['descripcion'];
				$vo->precio = $fila['precio'];
				$vo->stock = $fila['stock'];
				$vo->importancia = $fila['importancia'];
				$vo->imagen = $fila['imagen'];
				$vo->id_categoria = $fila['id_categoria'];
				$objetos[] = $vo;
			}
			return $objetos;
			
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}		
    }
	
	public function buscarPorNombre($nombre){	
		try { 	
			$db = Conexion::getConexion();
			$stmt = $db->prepare("select * from producto where nombre like ?");
			$stmt->bindValue(1, "%$nombre%", PDO::PARAM_STR);
			$stmt->execute();
			$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);		
			$objetos = array();	
			foreach($filas as $fila) {			
				$vo = new Producto();
				$vo->idProducto = $fila['id_producto'];
				$vo->nombre = $fila['nombre'];
				$vo->descripcion = $fila['descripcion'];
				$vo->precio = $fila['precio'];
				$vo->stock = $fila['stock'];
				$vo->importancia = $fila['importancia'];
				$vo->imagen = $fila['imagen'];
				$vo->id_categoria = $fila['id_categoria'];
				$objetos[] = $vo;
			}
			return $objetos;
			
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}		
    }
	
	public function insertar($vo){
		try { 
			$db = Conexion::getConexion();			
			$stmt = $db->prepare("insert into producto (nombre, descripcion, precio, stock, importancia, imagen, id_categoria) values (?,?,?,?,?,?,?)");
			$datos = array($vo->nombre, $vo->descripcion, $vo->precio,
			               $vo->stock, $vo->importancia, $vo->imagen,
						   $vo->idCategoria);
			$db->beginTransaction();
			$stmt->execute($datos);
			$db->commit();
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}		
	}
	
	public function actualizar($vo){
		try { 
			$db = Conexion::getConexion();		
			$stmt = $db->prepare("update producto set nombre=?, descripcion=?, precio=?, stock=?, importancia=?, imagen=?, id_categoria=? where id_producto=?");
			$datos = array($vo->nombre, $vo->descripcion, $vo->precio, $vo->stock, $vo->importancia, $vo->imagen, $vo->idCategoria, $vo->idProducto);
			$db->beginTransaction();						
			$stmt->execute($datos);			
			$db->commit();
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}	
	}

	public function eliminar($id){
		try { 
			$db = Conexion::getConexion();  
			$stmt = $db->prepare("delete from producto where id_producto=?");
			$datos = array($id);
			$db->beginTransaction();			
			$stmt->execute($datos);			
			$db->commit();
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}	
	}	*/
}
