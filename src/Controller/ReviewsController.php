<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\Auth\DefaultPasswordHasher;

class ReviewsController extends AppController{
    public function index(){
        if($this->request->is('post')){
            //レビュー新規作成
            $session = $this->request->getSession();
            $userId = $session->read('Auth.User.user_id');

            $created = date("Y/m/d");

            $book_id = $this->request->getData('book_id');
            echo $book_id;
            $this->request->getData();

            $reviewsTable = TableRegistry::getTableLocator()->get('reviews');
            $entity = $reviewsTable->newEntity($this->request->getData());
            $entity->user_id = $userId;
            $entity->created = $created;
            var_dump($entity);

            $reviewsTable->save($entity);


        }
        $this->redirect(['controller'=>'BooksInfo','action'=>'detailBooksInfo',$book_id]);

    }
    public function search(){

        $this->Reviews->find()->where([
            'book_id'=>$book_id
        ]);

    }
}

?>