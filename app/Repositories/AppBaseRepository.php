<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AppBaseRepository {
    protected $model;
     public function __construct(Model $model){
        $this->model = $model;
     }
     abstract function getFieldData():array;
     abstract function model():string;
    public function store($validatedData){
        $user = $this->model->create($validatedData);
        return $user;
    }
}