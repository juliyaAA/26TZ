<?php

class UserData
{
    public $phone;
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
    public function validatePhone()
    {
        if(!preg_match("/^[0-9]{10,11}+$/", $_POST['phone'])) 
            echo ("Телефон задан в неверном формате");
     
    // Добавляем восьмерку к номеру телефону, если мы рассылаем по России.
     
        $_POST['phone'] = "8".$_POST['phone'];
     
    // Проверить первой цифры номера
     
        $first = substr($_POST['phone'], "0",1);
        if($first != 8) echo ("Ваш номер телефон начинается не на восьмерку");
        
        exit();
    }
}
$userData = new UserData();
$userData->saveData();
$userData->validatePhone();

if ($userData->isOk()) {
    header(
        'location: /thanks.php?name='
            .  $userData->name . '&phone='
            . $userData->phone
    );
} else {
    header('location: /');
}
