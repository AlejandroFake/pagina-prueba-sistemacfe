<?php 

	function clean($word){
	
		$word = str_replace("<","&lt;",$word);
		$word = str_replace(">","&gt;",$word);
		$word = str_replace("\'","'",$word);
		$word = str_replace('\"',"&quot;",$word);
		$word = str_replace("\\\\","\\",$word);
		$word = str_replace("'", " ", $word);
		$word = str_replace('"', ' ', $word);
		$word = str_replace('`', ' ', $word);
		$word = str_replace('´', ' ', $word);
		$word = str_replace(';', ' ', $word);
		$word = str_replace(':', ' ', $word);
		$word = str_replace('\\', ' ', $word);
		$word = str_replace('/', ' ', $word);
		$word = str_replace('=', ' ', $word);
		$word = str_replace('#', ' ', $word);
		$word = str_replace('*', ' ', $word);
		$word = str_replace('%', ' ', $word);
		$word = str_replace('[', ' ', $word);
		$word = str_replace(']', ' ', $word);
		$word = str_replace('$', '$ ', $word);
		  
		return $word;
	
	}

?>