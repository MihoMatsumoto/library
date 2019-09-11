<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;

class BooksInfoController extends AppController{

    public function index(){

    }
    public function insert(){
        
    }
    public function compInsert(){

    }
    public function submit(){
        $title= $this->request->query('title');
        echo $title;
    }


}