<?php
namespace App\Controller;
use App\Controller\AppController;
 use Cake\ORM\TableRegistry;
 use Cake\Auth\DefaultPasswordHasher;

class FollowsController extends AppController{
     //フォロー
     public function follow(){
        //sessionからid取り出し
        $session = $this->request->getSession();
        $userId = $session->read('Auth.User.user_id');

        //クエリ取り出し
        $info= $this->request->getQuery('user_id');

        //フォローしているか判定
        $find = $this->Follows->find()->where([
            'user_id'=>$userId,
            'follower_id'=>$info
        ])->first();

        $followsTable = TableRegistry::getTableLocator()->get('follows');

        $follow;


        //新規フォロー
        if(empty($find)){

            $follow = $followsTable->newEntity();
            var_dump($follow);
            $follow->user_id = $userId;
            $follow->follower_id = $info;
            $follow->is_follow = true;

        }
        //フォロー情報更新
        else{

            $find = $find->toArray();
            // var_dump($find);
            $followId = $find['id'];

            //$followにIDに応じたEntityを代入
            $follow = $followsTable->get($followId);
            var_dump($follow);

            if($find['is_follow'] == true){
                $follow->is_follow = false;

            }else if($find['is_follow'] == false){
                $follow->is_follow = true;
            }

        }
        $followsTable->save($follow);



        $this->redirect(['controller'=>'Users','action'=>'search_userlist']);
    }
}

?>