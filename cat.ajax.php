<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

$con = mysql_connect ("mysql.hostinger.com.br","u726199258_dmttg","jcss2008") or die ("Err SERVER");
mysql_select_db ("u726199258_dmtt",$con) or die ("Err BD"); 
date_default_timezone_set('America/Belem'); 

	$n_cat = mysql_real_escape_string( $_REQUEST['n_cat'] );

	$cidades = array();

		 $date = date ("d-m-Y H:i:s") ;
		$gerar = "INSERT INTO log_paginas (operador,data,pagina,link,termo_infra,ref) VALUES ('INTERNAUTA-LEI','$date','CAT','$_SERVER[SERVER_NAME]$_SERVER[SCRIPT_NAME]?$_SERVER[QUERY_STRING]','$n_cat','$_SERVER[HTTP_REFERER]')"; mysql_query ($gerar, $con) or die ("Er log.");

	$sql = "SELECT * FROM cat WHERE n_cat= '$n_cat' or placa = '$n_cat' ";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
	
		$cidades[] = array(
			'n_cat' => $row['n_cat'],
			'data_emissao_cat' => $row['data_emissao_cat'],
			'autorizatario' => $row['autorizatario'],
			'placa' => $row['placa'],
			'ano_alvara' => $row['ano_alvara'],
			'bd' => $row['bd'],
			'mod_abrev' => $row['mod_abrev'],
			'id_cooperado' => $row['id_cooperado'],
			'permissao_coop' => $row['permissao_coop'],
			'cooperativa' => $row['cooperativa'],
			'cod_extra' => $row['cod_extra'],
			'espaco' => ' - ',
		);
	}
	echo( json_encode( $cidades ) );