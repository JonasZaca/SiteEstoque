<?php
	
	 //verifica email
	 
	function DBVerificaemail($table, $params = null, $fields = 'emailacesso'){
		$table = DB_PREFIX.'_'.$table;
		$params = ($params)? " {$params}" : null;
		$query  = "SELECT {$fields} FROM {$table}{$params}";
		$result = DBExecute($query);
		
		
		// return 0 é igual a não possui na tabela 
		//return 1 ou superior possui na tabela 
		//
		if(!mysqli_num_rows($result)){
			return 0;
		}else{
		 return 1;
		}
			
	}
	
	
	
	//deleta registros
	
	function DBDelete($table, $where = null){
		$table = DB_PREFIX.'_'.$table;
		$where = ($where) ? " WHERE {$where}" : null;
	$query = "DELETE FROM {$table}{$where}";
		
		return DBExecute($query);
		
		
	}
	
	
	
	//altera registros
	function DBUpdate($table, array $data, $where = null){
		foreach($data as $key => $value){
			$fields[] = "{$key} = '{$value}'";
		}
		$fields = implode(', ', $fields);
		$table = DB_PREFIX.'_'.$table;
		$where = ($where) ? " WHERE {$where}" : null;
		
		$query="UPDATE {$table} SET {$fields}{$where}";
		return DBExecute($query);	
	}



	//ler registros
	
	function DBRead($table, $params = null, $fields = '*'){
		$table = DB_PREFIX.'_'.$table;
		$params = ($params)? " {$params}" : null;
		
		$query  = "SELECT {$fields} FROM {$table}{$params}";	
		$result = DBExecute($query);
		
		if(!mysqli_num_rows($result))
			return false;
	else{
		while ($res = mysqli_fetch_assoc($result)){
				$data[] = $res;
		}
		return $data;
	}
	
			
}



	// gravar registros
	
	function DBCreate($table, array $data){
		$table = DB_PREFIX.'_'.$table;
		$data  = DBEscape($data);
		$fields = implode(', ', array_keys($data));
		$values = "'".implode("', '", $data)."'";
		
		$query = "INSERT INTO {$table} ({$fields} )VALUE ({$values})";
		
 		return DBExecute($query);
			
	}
	
		//executar querys abre e fecha banco de dados
		
		function DBExecute($query){
			$link =DBConnect();
			$result =@mysqli_query($link, $query)or die(mysqli_error($link));
			
			DBClose($link);
		return $result;
	
		}
?>