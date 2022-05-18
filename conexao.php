<?php 

try {


	$pdo = new PDO("mysql:dbname=crudpod;hostname=localhost","root","");

	
} catch (PDOException $e) {
	
   echo "Erro com o Banco de Dados".$e->getMessage();

}
 catch(Exception $e){
   echo "Erro genereico ".$e->getMessage();
 }
//-----------------------------------------------//

//$res=$pdo -> prepare("INSERT INTO pessoa(nome, telefone, email) Values (:n, :t, :e)");
//$res-> bindValue (":n","Matete");
//$res-> bindValue (":t","942875970");
//$res-> bindValue (":e","matete@gmail.com");
//$res -> execute();

//$res = $pdo -> prepare("DELETE FROM pessoa WHERE id= :id");
//$id =2;
//$res ->bindValue(":id",$id);
//$res-> execute();

//$cmd =$pdo -> prepare("UPDATE pessoa");
//$cmd -> bindValue(":e","agusto@gmnail.com");
//$cmd -> bindValue(":id",1);
//$cmd-> execute();


//$cmd =$pdo ->prepare("SELECT FROM pessoa WHERE id = :id");
//$cmd -> bindValue(":id",1);
//$cmd->execute();
//$res=$cmd -> fetch();

//print_r($res);


?>