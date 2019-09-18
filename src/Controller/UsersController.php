<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\Auth\DefaultPasswordHasher;

class UsersController extends AppController{

    //ユーザー表示
    public function index(){
        
       
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

                return $this->redirect($this->Auth->redirectUrl());
            }else{
            $this->Flash->error('ユーザー名またはパスワードが不正です。');
            }
        }
       
    }
    public function functionList(){
       


    }
    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
}
    
?>