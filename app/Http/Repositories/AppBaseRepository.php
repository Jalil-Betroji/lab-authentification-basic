<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AppBaseRepository {
    protected $model;
    public function __construct(Model $model){
        $this->model = $model;
    }
    abstract public function getFieldData():array;
    abstract public function model():string;

    public function store($validatedData){
        $this->model->create($validatedData);
    }
}