<?php
/**/
class Claves_Model
{
	//Variables
	private $pdo;
	private $orm;

	function __construct()
	{
		try
		{	
			$this->pdo = new PDO('mysql:host=localhost;dbname=proyecto_final', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->orm = new NotORM($this->pdo);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}



/*	public function listar()
	{		
		try
		{
			$result = array();
			// $stm = $this->pdo->prepare('SELECT * FROM alumnos');
			// $stm->execute();
			// foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
			// 	$alm = new Alumno();

			// 	$alm->__SET('id', $r->id);
			// 	$alm->__SET('nombre', $r->nombre);
			// 	$alm->__SET('apellidos', $r->apellidos);
			// 	$alm->__SET('telefono', $r->telefono);

			// 	$result[] = $alm;
			// }
			// return $result;

			$listar = $this->orm->alumnos();
			foreach ($listar as $r) {
				$alm = new Alumno();

				$alm->__SET('id', $r['id']);
				$alm->__SET('nombre', $r['nombre']);
				$alm->__SET('apellidos', $r['apellidos']);
				$alm->__SET('telefono', $r['telefono']);

				$result[] = $alm;
			}
			return $result;

		} 
		catch(PDOException $e) 
		{
			die($e->getMessage());
		}
	}


	public function Eliminar($id)
	{
		try{
			$eliminar = $this->orm->alumnos[$id];
			$eliminar->delete();
			//$stm = $this->pdo->prepare('DELETE FROM alumnos WHERE id = ?');
			//$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}*/

	public function insertar_claves($lote, $keys)
	{
		try{
			$insertar = $this->orm->claves();
			foreach ($keys as $k) { 
				$insertar->insert(array("nombre" => $lote, "clave" => $k, "ref_tipo_clave" => 1));
			}

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

/*	public function Obtener($id)
	{
		try{

			$obtener = $this->orm->alumnos()->where('id',$id);

			//$stm = $this->pdo->prepare("SELECT * FROM alumnos where id = ?");
			//$stm->execute(array($id));
			//$r = $stm->Fetch(PDO::FETCH_OBJ);

			foreach ($obtener as $r) {
				$alm = new Alumno();

				$alm->__SET('id', $r['id']);
				$alm->__SET('nombre', $r['nombre']);
				$alm->__SET('apellidos', $r['apellidos']);
				$alm->__SET('telefono', $r['telefono']);
			}
			return $alm;

		} catch (Exception $e)
		{
			die($e->getMessage());
		}

	}


	public function Actualizar(Alumno $data)
	{
		try{
			//$stm = $this->pdo->prepare("UPDATE alumnos SET nombre = ?, apellidos = ?, telefono = ?  WHERE id = ?");
			//$stm->execute(array($data->__GET('nombre'),$data->__GET('apellidos'),$data->__GET('telefono'),$data->__GET('id')));
			$añadir = $this->orm->alumnos()->where('id',$data->__GET('id'));
			$añadir->update(array("nombre" => $data->__GET('nombre'), "apellidos" => $data->__GET('apellidos'), "telefono" => $data->__GET('telefono')));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
*/	
}

