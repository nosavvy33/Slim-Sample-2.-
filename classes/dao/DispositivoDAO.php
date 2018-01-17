<?php

class DispositivoDAO {
    	
	/*public function insertar($vo){
		try { 
			$db = Conexion::getConexion();			
			$stmt = $db->prepare("insert into dispositivo (usuario, codigo_gcm) values (?,?)");
			$datos = array($vo->usuario, $vo->codigoGCM);
			$db->beginTransaction();
			$stmt->execute($datos);
			$db->commit();
		} catch (PDOException $e) {
			$db->rollback();
			$mensaje  = '<b>Consulta inválida:</b> ' . $e->getMessage() . "<br/>";
			$mensaje .= '<b>Consulta: </b>' . $sql;
			die($mensaje);
		}		
	}*/
}
?>	