<?php

// protege contra SQL injection
	function DBEscape($dados){
		
		$link =DBConnect();
		
		
		if(!is_array($dados))
			
			$dados =mysqli_real_escape_string($link, $dados);
		else{
			$arr =$dados;
			foreach($arr as $key =>$value){
				$key =mysqli_real_escape_string($link, $key);
				$value=mysqli_real_escape_string($link, $value);
				$dados[$key]=$value;
				
			}
		}
		DBClose($link);
		return $dados;
	}



// fechamento de conexao
	function DBClose($link){
		@mysqli_close($link)or die(mysqli_error($link));
		
	}


//Abertura de conexao 
function DBConnect(){
	$link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE)or die(mysqli_connect_error());
	mysqli_set_charset($link, DB_CHARSET) or die(mysqli_error($link));
	
	return $link;
}



?>