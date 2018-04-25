<?php

/**
 * summary
 */
class Connect
{
    /**
     * summary
     */
    private $servername;
    private $username;
    private $password;
    private $database;   

    public function __construct()
    {

    	$this->servername = "localhost";
    	$this->username = "root";
    	$this->password = "";
    	$this->database = "drawing";        
        
    	mysqli_query(mysqli_connect($this->servername, $this->username, $this->password, $this->database), "set names 'utf8'");
    }

    public function nova_conexao(){
      $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
      return $conn;
  }

}

?>
