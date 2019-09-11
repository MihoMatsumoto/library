<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController{

    //ユーザー表示
    public function index(){
        // $this->User = TableRegistry::getTableLocator()->get('users');
        // $users = $this->Users->find()->all();
        // $this->set('users',$users);

        
       
    }
    public function login(){
     $this->viewBuilder()->autoLayout(false);  // レイアウトをOFFにする
    // $this->set("sampleText","サンプルページです。");
        ///
        if ($this->request->is('post')) {
        var_dump($this->request->data['password']); 
        $password=$this->request->data['password'];
       
            $user = $this->Auth->identify();
            print_r($user);
            if ($user) {
                $this->Auth->setUser($user);
                // return $this->redirect($this->Auth->redirectUrl());
                // ['controller'=>'Users','action'=>'functionList']

                return $this->redirect($this->Auth->redirectUrl());
            }else{
            $this->Flash->error('ユーザー名またはパスワードが不正です。');
            }
        }
       
    }
    public function functionList(){
        // $id = $this->request->query("id");
        // $pass = $this->request->query("password");
        // print_r($id);
        // print_r($pass);
        
        // $this->set('users',$this->Users->find('all',['conditions'=>['id'=>$id]]));
        // $findDate = $this->Users->find('all',['conditions'=>['id'=>$id]]);
        // print_r($findDate);
        // return $this->redirect(['controller'=>'users','action'=>'functionList']);



    }
    

    



    //新規ユーザー登録
    // public function index($msg = null){

    // }
    // public function userAdd(){
    //     //TableRegistry:テーブルクラスのインスタンスを取得する
    //     $this->user = TableRegistry::getTableLocator()->get("users");
    //     $add_data = $this->request->getData();//viewのフォームに入植された値を取得

    //     if($this->user->user_data_add($add_data)){//登録
    //         //登録成功した場合のみ、メッセージを渡し、indexへリダイレクト
    //         $this->redirect(['action'=>'index','追加完了！']);
    //     }
    // }
}


?>