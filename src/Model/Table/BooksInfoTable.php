<?php
//src/Model/Table/usersTable.php

namespace App\Model\Table;

use Cake\Validation\Validator;
use Cake\ORM\Table;
use Cake\Log\Log;
use Cake\I18n\FrozenDate;

class BooksInfoTable extends Table{

    
    public function initialize(array $config){
        $this->table('booksinfo');
    }
    public function validationDefault(Validator $validator){

        $validator
        ->notEmpty('title','題名は必須項目です。入力してください。')
        
        ->notBlank('title','題名は必須項目です。入力してください。')
        ->add('title','blunkCheck',['rule'=>['custom','/[^　]+/'],
            'message'=>'題名は必須項目です。入力してください。'
        ]);

        $validator
        ->allowEmpty('yearMonth')
        ->add('yearMonth','month',[
            'rule'=>function($value){
                

                Log::debug($value);
                Log::debug($value['year']);
                $year = $value['year'];
                $month = $value['month'];
                $date = $year.'-'.$month.'-'.'1'.' 00:00:00';
                Log::debug($date);

                return (new FrozenDate($date))->isPast();
            }
            ,
            'message'=>'未来日は入力不可です。'
        ]);
        return $validator;
    }
    public function month($value,$context){
        // \Cake\Log\Log::debug($value);

        return (bool) preg_match('/[^　]+/',$value);
    }

}