<?php
class Context{
    
    public $db;
    private $filehandler;

    function __construct($directory)
    {
        $this->filehandler = new JsonFileHandler($directory,"configuration");
        $configuration = $this->filehandler->ReadConfiguration();
        $this->db = new mysqli("localhost","root","","proyecto_final"); //Msi1997809

        if($this->db->connect_error){
            
            exit('Error connecting to database');
        }
    }
}

?>