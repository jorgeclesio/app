<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	// $con = mysql_connect( 'localhost', 'root', '' ) ;
	// mysql_select_db( 'transp', $con );

$con = mysql_connect ("mysql.hostinger.com.br","u726199258_dmttg","jcss2008") or die ("Err SERVER");
mysql_select_db ("u726199258_dmtt",$con) or die ("Err BD"); 
date_default_timezone_set('America/Belem'); 

	
// header('Content-Type: text/html; charset=utf-8');
// mysql_query("SET NAMES 'utf8'");
// mysql_query('SET character_set_connection=utf8');
// mysql_query('SET character_set_client=utf8');
// mysql_query('SET character_set_results=utf8');
	
	$cod = mysql_real_escape_string( $_REQUEST['artigo'] );
	$cidades = array();

		 $date = date ("d-m-Y H:i:s") ;
		$gerar = "INSERT INTO log_paginas (operador,data,pagina,link,termo_infra,ref) VALUES ('INTERNAUTA-LEI','$date','LEI','$_SERVER[SERVER_NAME]$_SERVER[SCRIPT_NAME]?$_SERVER[QUERY_STRING]','$cod','$_SERVER[HTTP_REFERER]')"; mysql_query ($gerar, $con) or die ("Er log.");



	$sql = "SELECT * FROM codigo_transp WHERE artigo_codigo='$cod' or codigo like '%$cod%'";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
	
		$cidades[] = array(
			'mod' => $row['mod'],
			'artigo_codigo' => $row['artigo_codigo'],
			'artigo' => $row['codigo'],
			'infracao_1' => $row['infracao_1'],
			'infracao_2' => $row['infracao_2'],
			'infracao_3' => $row['infracao_3'],
			'infracao_4' => $row['infracao_4'],
			'pontos' => $row['pontos'],
			'ufm' => $row['ufm']*11.31,
			'ufm1' => $row['ufm'],

			'espaco' => ' - ',

		);
	}
	echo( json_encode( $cidades ) );