<?php

	
		
	class PruebaDAO{
			public function insertar($vo){
				try{
				$db = Conexion::getConexion();
				$stmt = $db->prepare("insert into prueba (nombre,apellido, direccion, telefono) values (:nombre,:apellido,:direccion,:telefono)");
				);
				$stmt->bindValue(':nombre', $vo->nombre, PDO::PARAM_STR);
				$stmt->bindValue(':apellido', $vo->apellido, PDO::PARAM_STR);
				$stmt->bindValue(':direccion', $vo->direccion, PDO::PARAM_STR);
				$stmt->bindValue(':telefono', intval($vo->telefono), PDO::PARAM_INT);

				$stmt->execute();
			}catch(PDOException $e){
				echo $e->getMessage();
			}
		}
	}




				/*
				//FORMA CON ?s
				$stmt = $db->prepare("insert into prueba (nombre,apellido,direccion,telefono) values(?,?,?,?)");
			$datos = array($vo->nombre, $vo->apellido, $vo->direccion,
			               $vo->telefono);
			$db->beginTransaction();
			$stmt->execute($datos);
			$db->commit();
			echo 'INSERCION EXITOSA';*/