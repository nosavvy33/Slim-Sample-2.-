<?php

class CategoriaDAO {
    
	/*public function listar(){	
		try { 	
			$db = Conexion::getConexion();
			$stmt = $db->prepare("select * from categoria");
			$stmt->execute();
			$filas = $stmt->fetchAll(PDO::FETCH_ASSOC);			
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
