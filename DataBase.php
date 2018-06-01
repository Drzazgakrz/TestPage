<?php

class DataBase {
    private $mysqli;

    public function __construct($serwer, $user, $pass, $baza) {
        $this->mysqli = new mysqli($serwer, $user, $pass, $baza);

        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n", $this->mysqli->connect_error);
            exit();
        }

        if ($this->mysqli->set_charset("utf8")) {
        }
    }
    function __destruct() {
        $this->mysqli->close();
    }

    public function select($sql) {
        $res = $this->mysqli->query($sql);
        return $res;
    }
    public function insert($sql) {
        $this->mysqli->query($sql);
    }
    public function delete($sql) {
        $this->mysqli->query($sql);
    }
}
?>