<?php
include "lib.php";
	/**
	 * summary
	 */
	class Verify
	{
	    /**
	     * summary
	     */
	    private $action;
	    
	    public function __construct()
	    {
	    	if (empty($_GET)) {
	    		echo "O que quer de mim, amigo?";
	    		return;
	    	}
	    	$this->action = $_GET["a"];
	    	// echo $this->action;
	    	switch ($this->action) {
	    		case 'register':
		    		$result = register();
		    		if($result)
		    			header("location: ../index.php");
		    		break;
	    		case sha1('login'):
		    		$result = login();
		    		echo ($result)? 1 : 0;
		    		break;
	    		case 'email':
		    		$result = verify_email();
		    		echo ($result)? 1 : 0;
		    		break;
	    		case 'delete-drawing':
		    		$result = delete_drawing($_POST);
		    		echo ($result)? 1:0;
		    		break;
		    	case sha1("update_user"):
		    		if (update_user($_POST))
		    			header("location: ../admin.php?page=".sha1("configuracoes"));
		    		break;
	    		default:
	    			echo "Alguma coisa errada, meu amigo";
	    			break;
	    	} 
	    }
	}

	$verify = new Verify();

	?>
