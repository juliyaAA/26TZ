<?php

class UserData 
{   
    private $phone ;
    public $name;
    
    public function isOk() 
    {
        return $this->name || $this->phone  ? true : false;
    }
    public function saveData() 
    {
        $this->name = $_POST['name'];
        $this->phone = $_POST['phone'];
    }
   
}
$userData = new UserData();
$userData->saveData();

if ($userData->isOk())
 {
    header('location: /thanks.php?name=' .  $userData->name);
} else {
    header('location: /');
}


