<?php

include '../conn.php';

/**
 * summary
 */
class Database
{
    /**
     * summary
     */
    private $action;
    public function __construct()
    {
    	if (empty($_GET)) {
    		echo "O que quer de mim, meu caro?";
    		return;
    	}
    	$this->action = $_GET["action"];

    	switch ($this->action) {
    		case "create_table_user":
	    		$this->create_table_user();
	    		break;
    		case "create_table_drawings":
	    		$this->create_table_drawings();
	    		break;
	    	case "drop_tables":
	    		$this->drop_tables();
	    		break;
    		default:
    			echo "Tem alguma coisa errada, amigo";
    		break;
    	}
    }

    function create_table_user(){
    	$table = "CREATE TABLE user(";
    	$table .= "id INT 	UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,";
    	$table .= "name 	VARCHAR(255) NOT NULL,";
    	$table .="email 	VARCHAR(255) NOT NULL,";
    	$table .= "senha 	VARCHAR(255) NOT NULL";
    	$table .= ");";

    	$conexao = new Connect();
    	$conn = $conexao->nova_conexao();

    	$result = mysqli_query($conn, $table);
    	echo ($result)? "Sucesso - - user are created " : "wrong --  " . mysqli_error($conn);
    	mysqli_close($conn);

    }

    function create_table_drawings(){
    	$table2 = "CREATE TABLE drawings(";
    	$table2 .= "id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,";
    	$table2 .= "added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,";
    	$table2 .= "author INT NOT NULL REFERENCES user(id) ON UPDATE CASCADE ON DELETE SET NULL,";
    	$table2 .= "file VARCHAR(255) NOT NULL,";
        $table2 .= "title VARCHAR(255) NOT NULL,";
    	$table2 .= "dtAlteracoes longtext NOT NULL";
    	$table2 .= ");";

    	$conexao = new Connect();
    	$conn = $conexao->nova_conexao();

    	$result = mysqli_query($conn, $table2);
    	echo ($result)? "Sucesso - - drawings are created " : "wrong --  " . mysqli_error($conn);
    	mysqli_close($conn);
    }


    function drop_tables(){
    	$drop = "DROP table user, drawings;";	

    	$conexao = new Connect();
    	$conn = $conexao->nova_conexao();

    	$result = mysqli_query($conn, $drop);
    	echo ($result)? "Sucesso - - tables are dropped " : "wrong --  " . mysqli_error($conn);	
    	mysqli_close($conn);
    }
}
$database = new Database();
?>
