<?php

Class Pessoa{
	    private $pdo;
	    public function __construct($dbname, $host ,$user, $senha){

	    	try {
	    		$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
	    	} catch (PDOException $e) {
	    		echo "ERRO NO BANCO".$e->getMessage();
	    		exit();
	    	}
	    	catch(Exception $e){
	    		echo "ERRO generico".$e->getMessage();

	    	}
	    }
               
	 public function buscarDados()
	 {
	 	  $res = array();

	 	$cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome ");
	 	$res =$cmd->fetchALL(PDO::FETCH_ASSOC);
	 	return $res;
	 }   
	 public function CadastrarPessoa($nome,$telefone,$email){


	 	$cmd =$this->pdo->prepare("SELECT id FROM pessoa WHERE emai = :e");
	 	$cmd->bindValue(":e",$email);
	 	$cmd->execute();
	 	if ($cmd -> rowCount()>0) {
	 		return false;

	 	} else {
	 		$cmd= $this ->pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES(:n, :t, :e)");
	 		$cmd->bindValue(":n",$nome);
	 		$cmd->bindValue(":t",$telefone);
	 		$cmd->bindValue(":e",$email);
	 		$cmd->execute();
	 		return true;
	 	}


	 }
	}

  ?>