<?php

class UsuarioDAO {
    
	/*public function listar(){	
		try { 	
			$db = Conexion::getConexion();
			$stmt = $db->prepare("select * from usuario");
			$stmt->execute();
			$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
			foreach($filas as $fila) {			
				$vo = new Usuario();
				$vo->idUsuario 	= $fila['id_usuario'];
				$vo->clave 		= $fila['clave'];
				$vo->nombres 	= $fila['nombres'];
				$vo->paterno 	= $fila['paterno'];
				$vo->materno 	= $fila['materno'];
				$vo->correo 	= $fila['correo'];
				$vo->direccion 	= $fila['direccion'];
				$vo->telefono 	= $fila['telefono'];
				$vo->estado 	= $fila['estado'];
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

    public function buscarPorID($id){	
		try { 	
			$db = Conexion::getConexion();
			$stmt = $db->prepare("select * from categoria where id_categoria = ?");
			$stmt->bindValue(1, "$id", PDO::PARAM_INT);
			$stmt->execute();
			$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);		
			$objetos = array();	
			foreach($filas as $fila) {			
				$vo = new Categoria();
				$vo->idCategoria = $fila['id_categoria'];
				$vo->nombre = $fila['nombre'];
				$vo->descripcion = $fila['descripcion'];
				$objetos[] = $vo;
			}
			return $objetos;
			
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}		
    }*/
}
?>
