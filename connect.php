<?php

function debug($string) {
    echo '<pre>';
    var_dump($string);
    echo '</pre>';
}

class QueryBilder {
    public $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=lesson', 'root', 'root');

    }

    function getAll($table) {
        
        $sql = "SELECT * FROM $table";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}





