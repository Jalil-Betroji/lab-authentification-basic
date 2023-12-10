<?php
 namespace App\Repositories;

 use App\Models\User;
 use App\Repositories\AppBaseRepository;

 class UserRepository extends AppBaseRepository {
    public function __construct(User $user){
        $this->model = $user;
    }
    protected $fieldUser = [
        'name',
        'email',
        'password'
    ];
    public function getFieldData():array{
        return $this->fieldUser;
    }
    public function model():string{
        return User::class;
    }
 }