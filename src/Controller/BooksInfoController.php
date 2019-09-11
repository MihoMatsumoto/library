<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\Http\ServerRequest;

class BooksInfoController extends AppController{

    public function index(){

    }
    public function insert(){
        
        
    }
    // public function compInsert(){

    // }
    public function compInsert(){
       if($this->request->is('post')){
            $userId = $this->request->session()->read('Auth.User.user_id');
            $data = $this->request->getData();

            
            $year =$this->request->getData('yearMonth.year');
            $month = $this->request->getData('yearMonth.month');
            $yearMonth = $year.'-'.$month;
            

            $booksInfoTable = TableRegistry::getTableLocator()->get('booksInfo');
            $bookInfo = $booksInfoTable->newEntity($data);

            $bookInfo->user_id = $userId;
            
            $bookInfo->year_month = $yearMonth;
            $booksInfoTable->save($bookInfo);
            

            $this->set('info',$bookInfo);



       }
   
        
    }


}