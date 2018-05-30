<?php
class Koneksi {
    private $server = "localhost";
    private $username = "id4905174_ghina";//root
    private $password = "14bismillah";//""
    private $db = "id4905174_ghina";

    function getKoneksi(){
        return new mysqli($this->server, $this->username,$this->password, $this->db);
    }
}
?>