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
        $password=$this->request->data['password'];

            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }else{
            // $this->Flash->error('ユーザー名またはパスワードが不正です。');
            $this->Flash->set('ユーザー名またはパスワードが不正です。',['key'=>'err']);
            }
            $hasher = new DefaultPasswordHasher();

            var_dump($hasher->hash($password));
        }

    }
    public function functionList(){



    }
    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
    public function lists(){

    }
    //ユーザー一覧取得
    public function searchUserlist(){
        $infos=$this->Users->find()->order(['id'=>'ASC']);
        $this->set(compact('infos'));

        $session = $this->request->getSession();
        $session->read('Auth.Users.user_id');
        $this->set('id',$session->read('Auth.Users.user_id'));

    }

}

?>