<TITLE>TRANSPORTE DE PARAUAPEBAS</TITLE>
<html manifest="demo.appcache">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="jquery-mobile-145.css">
<link rel="stylesheet" href="stilo.css">
<script src="js/jquery-1.11.2.js"></script> 
<script src="js/jquery-mobile-145.js"></script>
 <script src="js/t1.js"></script>   

 <script  src="https://maps.googleapis.com/maps/api/js"></script> 
    
<link rel="SHORTCUT ICON" href="favicon.png"/>
<link href="favicon.png" rel="icon"/>

<link rel="apple-touch-icon" sizes="10x10" href="favicon.png"/>	
<meta name="viewport" content="width=device-width, user-scalable=no">

</head>

<style type="text/css">
			.carregando{
				color:#666;
				display:none;
			}
			#principal
			{
			margin:0 auto;
			}
</style>	

<style>
tr
{text-align:center;}
table{border-collapse: collapse; font-size:12px;}
.tabela tr:nth-child(even){background-color:#f1f1f1;}
.tabela tr:nth-child(odd){background-color:#fff; }
.tabela th {background-color:#c9c9c9; }

tr { border-bottom: 1px solid lightgray; padding:2px; }

td {    border-right: 1px solid lightgray;}
</style>

<div id="principal">
                                                            
            <div data-role="page" id="rotas" style="background: url('fundo.jpg') center center; background-size:cover;">
            <div data-role="header">
                <h1>PARAUAPEBAS </h1>
           <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
            </div>
            <div  class="ui-content" >
                <center><img src="simbolo.png" width="135px"><BR>
<!-- <div style="height:100px; width:100%; margin:-15px;margin-rigth:-15px;position:absolute;  background: url('fundo_app.jpg') center  no-repeat; box-shadow: 4px 3px 5px #999999;"></div> -->
            <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR><BR> -->
                 <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:35px; " data-transition="flip">Destinos</a>
                <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:35px; " data-transition="slide">Sua Integração</a></center>
                    <div data-role="content" class="ui-shadow">	
                        Abaixo você pode visitar as rotas que compõem o transporte municipal ☟.

                                <div data-role="collapsible">
                                    <h2>Todas as rotas...</h2>
                                      <ul data-role="listview" data-inset="true">
                                        <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - RODOVIARIA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                        <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                        <li><a href="#rotas-a1">A001<p>LIBERDADE - CIDADE NOVA</p></a></li>
                                        <li><a href="#rotas-a2">A002<p>NOVA CARAJÁS - SHOPPING - W TORRES - AMAZONIA - NOVO BRASIL</p></a></li>
                                        <li><a href="#rotas-a3">A003<p>ESTAÇÃO MINÉRIOS - HABITAR FELIZ - JARDIM TROPICAL</p></a></li>
                                        <li><a href="#rotas-a4">A004<p>ESTAÇÃO MINÉRIOS - HABITAR FELIZ</p></a></li>
                                        <li><a href="#rotas-a5">A005<p>ESTAÇÃO SHOPPING - UFRA</p></a></li>
                                        <li><a href="#rotas-ib1">IB001<p>VS 10 - DA PAZ - RIO VERDE</p></a></li>
                                        <li><a href="#rotas-ib2">IB002<p>HABITAR FELIZ - ALTAMIRA - PREFEITURA - RODOVIÁRIA</p></a></li>
                                        <li><a href="#rotas-c1">C001<p>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</p></a></li>
                                        <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                        </ul>
                                </div>

                                <div data-role="collapsible">
                                    <h2>Local/Integrações...</h2>
                                      <ol data-role="listview" >
                                        <li>TERMINAL RODOVIÁRIO, <p>Beira Rio</p> </li>
                                        <li>HABITAR FELIZ, <p>PA-160</p> </li>
                                        <li>PORTARIA VALE, <p>Cidade Nova</p></li>
                                        <li>RUA F, <p>Cidade Nova, Loja morenta</p></li>
                                        <li>SOL POENTE, <p>Entre: Claudio Coutinho e Santa Marta</p></li>
                                        <li>RUA MARABÁ, <p>Entre: São Francisco e Santa Maria</p></li>
                                        <li>PARTAGE SHOPPING, <p>Nova Carajás</p></li>
                                        <li>BAIRRO DOS MINÉRIOS, <p>Av. Principal</p></li>
                                      </ol>
                                </div>
                    </div>
            </div>
                <div data-role="footer" class="ui-footer-fixed ">
                <h5>©</h5>
                </div>
            </div>    
                    
    

                            <div data-role="page" id="local">
                            <div data-role="header">
                                <h1>ONDE VOCÊ ESTÁ?</h1>
                            <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                            </div>
                <div  class="ui-content">
                <div style="height:100px; width:100%; margin:-15px;margin-rigth:-15px;position:absolute;  background: url('fundo_app.jpg') center center;"></div>

                            <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR><BR> -->
                                <div data-role="content" class="ui-shadow" >
                                <!-- <a href="#rotas" data-rel="close" class="ui-btn ui-btn-inline ui-btn-icon-left ui-shadow ui-corner-all ui-btn-a ui-icon-grid"  style="padding:5px; padding-left:40px; ">Início</a>-->
                                <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left">Destinos</a><BR><BR>
                                Veja o destino de cada rota de acordo sua Integração. <BR><B>Em qual integração você está?</B>.            		
                    
                                    <div data-role="collapsible" >
                                        <h2>RODOVIÁRIA</h2>
                                          <ul data-role="listview" data-inset="true" >
                                            <li><a href="#rotas-t1">T001<p>CIDADE NOVA→UNIÃO→RIO VERDE→DA PAZ</p></a></li>
                                            <li><a href="#rotas-c1">C001<p>DA PAZ→RIO VERDE→CIDADE NOVA→ALTAMIRA</p></a></li>
                                            <li><a href="#rotas-c2">C002 <p>PREFEITURA→P.DOS CARAJÀS→MINERIOS→ALTAMIRA</p></a></li>
                                            <li><a href="#rotas-ib2">IB002<p>PREFEITURA→ALTAMIRA→HABITAR FELIZ</p></a></li>
                                          </ul>
                                    </div>                                    
                                    
                                    <div data-role="collapsible">
                                        <h2>HABITAR FELIZ</h2>
                                          <ul data-role="listview" data-inset="true" >
                                            <li><a href="#rotas-c1">C001<p>MINERIOS→BEIRA RIO→DA PAZ→UNIÃO→CIDADE NOVA</p></a></li>
                                            <li><a href="#rotas-c2">C002 <p>ALTAMIRA→CIDADE NOVA→RIO VERDE→DA PAZ→GUANABARA→BEIRA RIO</p></a></li>
                                            <li><a href="#rotas-ib2">IB002<p>ALTAMIRA→PREFEITURA→RODOVIÁRIA</p></a></li>
                                            <li><a href="#rotas-a3">A003<p>JARDIM TROPICAL</p></a></li>
                                            <li><a href="#rotas-a4">A004<p>MINÉRIOS</p></a></li>
                                          </ul>
                                    </div>
                                    
                                    <div data-role="collapsible">
                                        <h2>PORTARIA VALE</h2>
                                          <ul data-role="listview" data-inset="true">
                                            <li><a href="#rotas-c1">C001<p>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</p></a></li>
                                            <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                            <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - RODOVIARIA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                            <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                            <li><a href="#rotas-a1">A001<p>LIBERDADE - CIDADE NOVA</p></a></li>
                                          </ul>
                                    </div>                                   
                                    
                                    <div data-role="collapsible">
                                        <h2>RUA F</h2>
                                          <ul data-role="listview" data-inset="true">
                                            <li><a href="#rotas-c1">C001<p>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</p></a></li>
                                            <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                            <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - RODOVIARIA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                            <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                          </ul>
                                    </div>                                   
                                    
                                    <div data-role="collapsible">
                                        <h2>RUA SOL POENTE</h2>
                                          <ul data-role="listview" data-inset="true">
                                            <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                            <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - RODOVIARIA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                            <li><a href="#rotas-ib1">IB001<p>VS 10 - DA PAZ - RIO VERDE</p></a></li>
                                          </ul>
                                    </div>   
                                    
                                    <div data-role="collapsible">
                                        <h2>RUA MARABÁ</h2>
                                          <ul data-role="listview" data-inset="true">
                                            <li><a href="#rotas-c1">C001<p>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</p></a></li>
                                            <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                            <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                            <li><a href="#rotas-ib1">IB001<p>VS 10 - DA PAZ - RIO VERDE</p></a></li>
                                          </ul>
                                    </div>   
                                    
                                    <div data-role="collapsible">
                                        <h2>SHOPPING</h2>
                                          <ul data-role="listview" data-inset="true">
                                            <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - RODOVIARIA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                            <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                            <li><a href="#rotas-a2">A002<p>NOVA CARAJÁS - SHOPPING - W TORRES - AMAZONIA - NOVO BRASIL</p></a></li>
                                            <li><a href="#rotas-a5">A005<p>ESTAÇÃO SHOPPING - UFRA</p></a></li>
                                          </ul>
                                    </div>    
                                    
                                    <div data-role="collapsible">
                                        <h2>MINÉRIOS</h2>
                                          <ul data-role="listview" data-inset="true">
                                            <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - RODOVIARIA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                            <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                            <li><a href="#rotas-a3">A003<p>ESTAÇÃO MINÉRIOS - HABITAR FELIZ - JARDIM TROPICAL</p></a></li>
                                            <li><a href="#rotas-a4">A004<p>ESTAÇÃO MINÉRIOS - HABITAR FELIZ</p></a></li>
                                            <li><a href="#rotas-c1">C001<p>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</p></a></li>
                                            <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                          </ul>
                                    </div>

                                </div>

                            </div>
                                <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                <h5>©</h5>
                                </div>
                            </div>    


                
                
                
                

            <div data-role="page" id="casos">
            <div data-role="header">
                <h1>DICAS - SOLUÇÕES</h1>
            <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
            </div>

            <div  class="ui-content">
             <div style="height:100px; width:100%; margin:-15px;margin-rigth:-15px;position:absolute;  background: url('fundo_app.jpg') center center;"></div> 

            <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR><BR> -->
                    <div data-role="content">
                         <!-- <a href="#rotas" data-rel="close" class="ui-btn ui-btn-inline ui-btn-icon-left ui-shadow ui-corner-all ui-btn-a ui-icon-grid" style="padding:5px; padding-left:40px; ">Início</a> -->
                        <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  >Sua Integração</a><BR><BR>
			Descubra como chegar ao seu destino☟.            		
                        <div class="ui-bar-c ui-corner-all ui-shadow" >
                                <form class="ui-filterable">
                                <input id="autocomplete-input" data-type="search" placeholder="Em que bairro você está?">
                                </form>
                 <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#autocomplete-input" data-inset="true">
                <li><a href="#caso-1">RIO VERDE ⇆ MINÉRIOS<p>C001,C002</p></a></li>
				<li><a href="#caso-1">DA PAZ ⇆ ALTAMIRA<p>C001,C002</p></a></li>
				<li><a href="#caso-1">ALTAMIRA ⇆ CIDADE NOVA<p>C001,C002</p></a></li>
				<li><a href="#caso-1">HABITAR FELIZ ⇆ RIO VERDE<p>C001,C002</p></a></li>
				<li><a href="#rotas-c2">GUANABARA → MINÉRIOS<p>C002</p></a></li>
				<li><a href="#rotas-c2">UNIÃO → GUANABARA<p>C002</p></a></li>~
				<li><a href="#rotas-c1">UNIÃO → ALTAMIRA<p>C001</p></a></li>
				<li><a href="#rotas-c1">DA PAZ → UNIÃO<p>C001</p></a></li>
				<li><a href="#rotas-c2">GUANABARA → PREFEITURA<p>C002</p></a></li>
				<li><a href="#rotas-c1">PREFEITURA → RIO VERDE<p>C001</p></a></li>
				<li><a href="#rotas-c1">PREFEITURA → UNIÃO<p>C001</p></a></li>
				<li><a href="#rotas-c2">PREFEITURA → MINÉRIOS<p>C002</p></a></li>
				<li><a href="#rotas-c1">MINÉRIOS → PREFEITURA<p>C001</p></a></li>
				<li><a href="#rotas-c1">MINÉRIOS → RODOVIÁRIA<p>C001</p></a></li>
                                </ul>
                        </div>
                    </div>

            </div>
                <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                <h5>©</h5>
                </div>
            </div>    
                        
                        

                        
                        
                        
            <div data-role="page" id="rotas-t1" >
            <div data-role="panel" id="myPanel" data-position="right"> 
                    <h2>Nomeclaturas</h2>
                <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                  <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
            </div> 	
            <div data-role="panel"  id="menu"> 
            <h2>Navegue</h2>
                 <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
             <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
            </div> 

            <div data-role="header">
                <h1>ITINERÁRIO: T001</h1>
            <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
       
            </div>
                   
            <div  class="ui-content">
            <!-- <a href="#rotas" data-rel="close" class="ui-btn ui-btn-inline ui-btn-icon-left ui-shadow ui-corner-all ui-btn-a ui-icon-grid">Início</a> -->
            <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
            <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                
            <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                    <div data-role="content">	

                        <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                <div id="map-canvas">   <div id="clique" onclick="initialize();">Clique aqui para exibir o mapa</div></div>
                        </div>
                    </div>
                <div data-role="content">	
                    <B>MINÉRIOS - CIDADE JARDIM - PREFEITURA - CIDADE NOVA - RIO VERDE - DA PAZ</B>
            </div>
            </div>
                <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                <h5>©</h5>
                </div>
            </div>                        
                                
                        
                                    <div data-role="page" id="rotas-t2"  >
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: T002</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-t2"> 
                                                           <div id="clique" onclick="initialize2();">Clique aqui para exibir o mapa</div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>                                    
                                            
                                            
                                    
                                            
                                            
                                            
                                            
                                    <div data-role="page" id="rotas-a1">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: A001</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-a1">  <div id="clique" onclick="initialize3();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>LIBERDADE - CIDADE NOVA</B>
                                    </div>
                                                        <div data-role="collapsible">
                                                            <h2>Todas as rotas...</h2>
                                                              <ul data-role="listview" data-inset="true">
                                                                <li><a href="#rotas-t1">T001<p>MINÉRIOS - CIDADE JARDIM - PREFEITURA - CIDADE NOVA - RIO VERDE - DA PAZ</p></a></li>
                                                                <li><a href="#rotas-t2">T002<p>MINÉRIOS - CIDADE JARDIM - DA PAZ - RIO VERDE - CIDADE NOVA</p></a></li>
                                                                <li><a href="#rotas-a1">A001<p>LIBERDADE - CIDADE NOVA</p></a></li>
                                                                <li><a href="#rotas-a2">A002<p>NOVA CARAJÁS - SHOPPING - W TORRES - AMAZONIA - NOVO BRASIL</p></a></li>
                                                                <li><a href="#rotas-a3">A003<p>ESTAÇÃO MINÉRIOS - HABITAR FELIZ - JARDIM TROPICAL</p></a></li>
                                                                <li><a href="#rotas-a4">A004<p>ESTAÇÃO MINÉRIOS - HABITAR FELIZ</p></a></li>
                                                                <li><a href="#rotas-a5">A005<p>ESTAÇÃO SHOPPING - UFRA</p></a></li>
                                                                <li><a href="#rotas-ib1">IB001<p>VS 10 - DA PAZ - RIO VERDE</p></a></li>
                                                                <li><a href="#rotas-ib2">IB002<p>HABITAR FELIZ - ALTAMIRA - PREFEITURA - RODOVIÁRIA</p></a></li>
                                                                <li><a href="#rotas-c1">C001<p>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</p></a></li>
                                                                <li><a href="#rotas-c2">C002 <p>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</p></a></li>
                                                                </ul>
                                                        </div>
                                        
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>
                                          
                                            
                                            
                                    <div data-role="page" id="rotas-a2">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: A002</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-a2">  <div id="clique" onclick="initialize4();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>NOVA CARAJÁS - SHOPPING - W TORRES - AMAZONIA - NOVO BRASIL</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>                                   
                                            
     
                                            
                                    
                                    <div data-role="page" id="rotas-a3">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: A003</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-a3">  <div id="clique" onclick="initialize5();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>ESTAÇÃO MINÉRIOS - HABITAR FELIZ - JARDIM TROPICAL</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>




                                            
                                    
                                    <div data-role="page" id="rotas-a4">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: A004</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-a4">  <div id="clique" onclick="initialize6();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>ESTAÇÃO MINÉRIOS - HABITAR FELIZ</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>




                                            
                                    
                                    <div data-role="page" id="rotas-a5">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: A005</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-a5">  <div id="clique" onclick="initialize7();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>ESTAÇÃO SHOPPING - UFRA</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>






                                            
                                    
                                    <div data-role="page" id="rotas-ib1">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: IB001</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-ib1">  <div id="clique" onclick="initialize8();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>VS 10 - DA PAZ - RIO VERDE</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>






                                            
                                    
                                    <div data-role="page" id="rotas-ib2">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: IB002</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-ib2">  <div id="clique" onclick="initialize9();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>HABITAR FELIZ - ALTAMIRA - PREFEITURA - RODOVIÁRIA</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>






                                            
                                    
                                    <div data-role="page" id="rotas-c1">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: C001</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-c1">  <div id="clique" onclick="initialize10();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>MINÉRIOS - BEIRA RIO - BAIRRO DA PAZ - CIDADE NOVA - ALTAMIRA</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>






                                            
                                    
                                    <div data-role="page" id="rotas-c2">
                                    <div data-role="panel" id="myPanel" data-position="right"> 
                                            <h2>Nomeclaturas</h2>
                                        <p><b>Siglas que aparecem na primeira coluna da consulta.</b></p>
                                        <p><small><b>F/C</b>=Fretamento/Coletivo<BR><b>TA</b>=Táxi<BR><b>MT</b>=Moto-Táxi <BR> <b>CL</b>=Coletivo <BR> <b>TE</b>=Transp. Escolar <BR> <b>MF</b>=Moto-Frete <BR>                                                                  <b>X</b>=Clandestino <BR> </small> </p>
                                          <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left">Fechar</a>
                                    </div> 	
                                    <div data-role="panel"  id="menu"> 
                                    <h2>Navegue</h2>
                                         <a href="#inicio" class="ui-btn ui-shadow">Consultar Infração</a>
                                        <!-- <a href="#page_cat" class="ui-btn ui-shadow">Conmsultar CAT</a>-->
                                     <a href="#page_cat" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ">Fechar</a>
                                    </div> 

                                    <div data-role="header">
                                        <h1>ITINERÁRIO: C002</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow" style="padding:3px;">
                                                        <div id="map-c2">  <div id="clique" onclick="initialize11();">Clique aqui para exibir o mapa</div></div>
                                                </div>
                                            </div>
                                        <div data-role="content">	
                                            <B>MINÉRIOS - ALTAMIRA - CIDADE NOVA - RIO VERDE - GUANABARA - BEIRA RIO</B>
                                    </div>
                                    </div>
                                        <div data-role="footer" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>


                                    

                                    <div data-role="page" id="caso-1">
                                    <div data-role="header">
                                        <h1>ITINERÁRIO: C002</h1>
                                    <!--<a href="#page" class="ui-btn-left ui-icon-home ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all" data-transition="slide">Início</a>-->
                                        <a href="#rotas" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-btn-icon-notext" data-transition="slide">Início</a>
                                    </div>
                                    <BR>

                                    <div  class="ui-content">
                                    <a href="#casos" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-icon-search ui-btn-icon-left" style="padding:5px; padding-left:33px; ">Destinos</a>
                                    <a href="#local" data-rel="close" class="ui-btn ui-btn-inline ui-shadow ui-corner-all ui-btn-a ui-icon-location ui-btn-icon-left "  style="padding:5px; padding-left:33px; ">Sua Integração</a>                                         <BR>
					               <small>Nós temos vários casos pré definidos para sua melhor decisão.</small>
                                    <!-- <a href="#menu" class="ui-btn ui-icon-bullets  ui-btn-inline ui-btn-icon-left  ui-shadow ui-corner-all">Menu</a><BR> -->
                                            <div data-role="content">	
                                                <div class="ui-bar-c ui-corner-all ui-shadow"  style="padding:1px; margin:-10;">
                                                        <div id="caso1">  <div id="clique" onclick="caso1();">Clique aqui para exibir o mapa</div></div>
						<small><small>! Pressione sobre a linha para identificá-la.</small></small>
						</div>                                          
                                            </div>
                                        <div data-role="content">	
						
                                            <B>C001, C002</B><BR>
					Nesta solução você poderá ter acesso direto a vários bairro da cidade  através das linhas Circulares. Fique atento de onde você está embarcando.

                                    </div>
                                    </div>
                                        <div data-role="footer" data-position="fixed" class="ui-footer ui-bar-inherit ui-footer-fixed slideup">
                                        <h5>©</h5>
                                        </div>
                                    </div>
</div>
</html>