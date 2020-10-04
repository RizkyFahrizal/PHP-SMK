<?php 

class DB{

    // Properti
    public $host="127.0.0.1";
    private $user="root";
    private $password="";
    private $database="dbrestoran";

    // Method
    public function __construct()
    {
        echo " functionconstruct";
    }
    public function selectData()
    {
        echo "select data";
    }   
    public function tampil()
    {
        $this->selectData();
    }   

    public function getDatabase()
    {
        return $this->database;
    }
    public static function insertData()
    {
        echo "static function";
    }
}
    DB::insertData();
    echo "<br>";
    $db =new DB;
    echo "<br>";
    $db->selectData();
    echo "<br>";
    echo $db->host;
    echo "<br>";
    echo $db->getDatabase();
    echo "<br>";
    echo $db->tampil();
?>