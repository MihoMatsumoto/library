<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\Http\ServerRequest;
 use Cake\Routing\Router;

class BooksInfoController extends AppController{

    public function index(){

    }
    public function insert(){


          // セッションにバリデーションエラーを保持したエンティティが保存されていないか調査
        $session = $this->request->getSession();
         $error= $session->read('ValidationError');

          // エンティティはきちんと削除
        $session->consume('ValidationError');
  
          // TemplateにUserエンティティを送る
          $this->set('ValidationError',$error);
          
        
    }

    public function compInsert(){
       if($this->request->is('post')){
                $session = $this->request->getSession();

            //年月・ユーザーID取得
            $userId = $this->request->session()->read('Auth.User.user_id');
            $year =$this->request->getData('yearMonth.year');
            $month = $this->request->getData('yearMonth.month');
            $yearMonth = $year.'-'.$month;

            $booksInfoTable = TableRegistry::getTableLocator()->get('booksInfo');
            $entiey = $booksInfoTable->newEntity($this->request->getData());

            //エラーなし処理（保存・値セット）
            if(!$entiey->errors()){
            $entiey->user_id = $userId;
            $entiey->year_month = $yearMonth;
            $booksInfoTable->save($entiey);
            
            $this->set(compact('entiey'));
            
            //エラーがある場合（登録ページに遷移、エラーをsessionにセット）
            }else{
                $session->write('ValidationError', $entiey);
                return $this->redirect(['action'=>'insert']);
            }


       }
   
        
    }
    public function searchKeyword(){

    }
    public function keyResult(){
        if($this->request->is('post')){
            $key = $this->request->getData('key');
            $userId = $this->request->session()->read('Auth.User.user_id');
            $data = '';
            //キーワードが未入力
            if(empty($key)){
            $data= $this->BooksInfo->find()->where(['user_id '=>$userId]);
            }
            //キーワード入力
            $data= $this->BooksInfo->find()->where(['user_id '=>$userId,'OR'=>[["title like "=>'%'.$key.'%'],["author like "=>'%'.$key.'%'],["publisher like "=>'%'.$key.'%'],["year_month like "=>'%'.$key.'%']]]);
            
            $this->set('datas',$data);
            //検索結果が無い場合
            if($data->isEmpty()){
                
                $error ='検索結果はありません';
                $this->set('err',$error);
            }
        }
        

    }
    public function searchDetail(){
        // $session=$this->request->getSession();
        // $msg=$session->read('msg');
        // $session->consume('msg');
        // $this->set('msg',$msg);
        


    }
    public function DetailResult(){
    if($this->request->is('post')){
        $session=$this->request->getSession();
        $session->consume('msg');

        $userId = $this->request->session()->read('Auth.User.user_id');
        $year =$this->request->getData('yearMonth.year');
        $month = $this->request->getData('yearMonth.month');
        $yearMonth = $year.'-'.$month;
        $title = $this->request->getData('title');
        $author=$this->request->getData('author');
        $publisher=$this->request->getData('publisher');
        $error='';
        if(!empty($year)||!empty($month)||!empty($title)||!empty($author)||!empty($publisher)){

        $data= $this->BooksInfo->find()->where(['user_id '=>$userId,["title like "=>'%'.$title.'%'],["author like "=>'%'.$author.'%'],["publisher like "=>'%'.$publisher.'%'],["year_month like "=>'%'.$yearMonth.'%']]);

        $this->set('datas',$data);

        if($data->isEmpty()){
            $error ='検索結果はありません';
            $this->set('err',$error);
        }
    }else{
        $session = $this->request->getSession();
        $error ='いづれか入力してください';
        $session->write('msg',$error);
        $this->redirect(['action'=>'searchDetail']);
    }

       
        }
    }
    


}