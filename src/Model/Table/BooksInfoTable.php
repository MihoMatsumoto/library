<?php
//src/Model/Table/usersTable.php

namespace App\Model\Table;

use Cake\Validation\Validator;
use Cake\ORM\Table;

class BooksInfoTable extends Table{

    
    public function initialize(array $config){
        $this->table('booksinfo');
    }
}