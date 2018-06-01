<?php

class DataBaseConnection {
    private $mysqli;

    public function __construct($serwer, $user, $pass, $baza) {
        $this->mysqli = new mysqli($serwer, $user, $pass, $baza);

        if ($this->mysqli->connect_errno) {
            printf("Nie udało sie połączenie z serwerem: %s\n");
            exit();
        }

        if ($this->mysqli->set_charset("utf8")) {
        }
    }
    function __destruct() {
        $this->mysqli->close();
    }

    public function select($sql, $fields) {
        $content = "";
        $res = $this->mysqli->query($sql);
        $countFields = count($fields);
        $countRows = $res->num_rows;
        $content = "<table>";
        while($row = $res->fetch_object()){
            $content .= "<tr>";
            for( $i = 0; i < $countFields; $i++)
            {
                $p = $fields[$i];
                $content.="<td>" . $row->$p . "</td>";
            }
            $content = "</tr>";
        }
        $content .= "<table>";
        $res->close();

        return $content;
    }
    public function insert($sql) {
        $this->mysqli->query($sql);
    }
    public function delete($sql) {
        $this->mysqli->query($sql);
    }
}
