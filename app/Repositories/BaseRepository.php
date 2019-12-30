<?php
namespace App\Repositories;
/**
 * 
 */
class BaseRepository
{
	protected $model;
	
	public function create($data)
	{
		return $this->model->create($data);
	}

	public function update($data, $id)
	{	
		dd($data);
		return $this->model->where('id',$id)->update($data);
	}
}

?>