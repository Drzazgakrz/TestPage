<?php
require_once "DataBase.php";
class UserModel
{
    private $dbConnector,$userName,$userSurname,$userAddress, $userMobile, $userCity;

    public function __construct($userName,$userSurname,$userAddress,$userMobile,$userCity)
    {
        $this->dbConnector = new DataBase("localhost:3306", "root","","testpage");
        $this->userName = $userName;
        $this->userSurname = $userSurname;
        $this->userAddress = $userAddress;
        $this->userMobile = $userMobile;
        $this->userCity = $userCity;

    }

    public function insertUserToDB(){
        $SQLQuery = "INSERT INTO Users (user_name,user_surname, user_address,user_mobile, user_city) VALUES 
          ('$this->userName','$this->userSurname','$this->userAddress',$this->userMobile,'$this->userCity')";
        $this->dbConnector->insert($SQLQuery);
        $countingUsersQuery = "SELECT COUNT(*) FROM Users;";
        $usersCount = $this->dbConnector->select($countingUsersQuery)->fetch_array();
        echo "<h2> Jesteś użytkownikiem numer ".$usersCount[0]." w naszym serwisie Dziękujemy!";
    }
}