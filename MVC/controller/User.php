<?php

require '/model/UserModel.php';

class User{

    public function List(){

        $UserModel = new UserModel();
        $data = $UserModel->ListUSers();

    
        require 'view/UserList.php';

        echo "<pre>";
        print_r($data);

    }
}
?>