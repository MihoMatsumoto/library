<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        


        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');


        $this->loadComponent('Auth',[
            //送信されたフォームデータのキーとログイン処理の紐づけの設定
            'loginAction'=>[
                'controller'=>'Users',
                'action'=>'login'
            ],
            'authenticate'=>[
                'Form'=>[
                    // 'userModel' => 'users',
                    'fields'=>[
                        'username'=>'user_id',
                        'password'=>'password'
                    ]
                ]
            ],
            'loginRedirect' => [
                'controller'=>'Users',
                'action'=>'index'
            ],
            // 'storage'=>'Session',
            // コントローラーで isAuthorized を使用します
            // 'authorize' => ['Controller'],
             // 未認証の場合、直前のページに戻します
             'unauthorizedRedirect' => $this->referer()
        ]);
        $this->Auth->allow(['display','view','index']);
        // ['display','index','view']
    }
    public function beforeFilter(Event $event) {

        parent::beforeFilter($event);
        //値を変更する
        $this->Auth->allow('index');
        $this->Auth->config('authError', false);
        
        }
}
