<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
class User extends Entity{
    protected function _setPassword($password)
    {
        if (strlen($password)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($password);
        }
        
            // return (new DefaultPasswordHasher)->hash($password);
        
    }
    
}

?>
