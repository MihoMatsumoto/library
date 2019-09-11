<?php
//src/Model/Table/usersTable.php

namespace App\Model\Table;

use Cake\Validation\Validator;
use Cake\ORM\Table;

class BooksInfoTable extends Table{

    // public function user_data_add($add_data){
    //     $add = $this->find()->insert([
    //         "name",
    //         "id",
    //         "password"
    //     ])->values([
    //         "name"->$add_data['name'],
    //         "id"->$add_data['id'],
    //         "password"->$add_data['password']
    //     ])->execute();

    //     return $add;
    // }
    public function initialize(array $config){
        $this->belongsTo('booksInfo');
    }
}