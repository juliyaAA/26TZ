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
        return $this->name = $_POST['name'];
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


