<?php
@session_start();

//error_reporting(E_ALL);
//ini_set('display_errors', '0');

//session_start();

$usr_temporal = 0;

//echo($_SESSION['login']);
$url = "index.php";
$url = "/sdm_login_03.php";

if(isset($_SESSION['login'])){
	//header("location index.php");
	//echo "IS SET";

	if($_SESSION['login']=="outt"){
		//echo "NOT NOT NOT";
		//header("location: index.php");
		//echo "bye";

		/*
		echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; 
        exit;
        */
	}

	if(isset($_SESSION['nombre'])){
		$login_usuario = $_SESSION['nombre'];
	}
	if(isset($_SESSION['id_login'])){
		$id_login = $_SESSION['id_login'];
	}


}else{
	//header("location: index.php");
	//echo "NOT NOT NOT";
	//header("location: index.php");
	//header("location: /sdm_login_03.php");
}




/////usuario temporal

	function getRealIP(){

        if (isset($_SERVER["HTTP_CLIENT_IP"])){

            return $_SERVER["HTTP_CLIENT_IP"];

        }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

            return $_SERVER["HTTP_X_FORWARDED_FOR"];

        }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){

            return $_SERVER["HTTP_X_FORWARDED"];

        }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){

            return $_SERVER["HTTP_FORWARDED_FOR"];

        }elseif (isset($_SERVER["HTTP_FORWARDED"])){

            return $_SERVER["HTTP_FORWARDED"];

        }else{

            return $_SERVER["REMOTE_ADDR"];

        }
    }   



    ////////USUARIO TEMPORAL

    if( !isset($_SESSION['login']) ) {


    	
    	$usr_ip = getRealIP();
    	$usr_agent = $_SERVER['HTTP_USER_AGENT'];
    	$usr_tmp = 1;

    	
    	//echo "IP: ".$usr_ip."<br>";
    	//echo "Agent ".$usr_agent;


		 $DB_USER='pluralmk_admin'; 
		 $DB_PASS='plur4l4dm1n'; 
		 $DB_HOST='127.0.0.1';
		 $DB_NAME='pluralmk_db';
		 
		 $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
		 
		 $mysqli->query("SET NAMES 'utf8'");


		$sq = "SELECT * FROM `usuario` WHERE ip LIKE '$usr_ip' AND web_agent = '$usr_agent' LIMIT 1";
		//echo $sq;
		
		$resultt = $mysqli->query($sq);
		$conttcc = 0;
		 while ($rowt = $resultt->fetch_row()){
	  	    $usr_tmp_idu = $rowt[0];
	        $usr_tmp_nombre = $rowt[1];
	        
			$conttcc++;
		}
		if($conttcc>0){
			//echo "YA EXISTE USUARIO TEMPORAL <br>";
			
			$usr_temporal = 1;

		}else{
			//echo "NO ESXISTE USAURIO <br>";
			
			$sql = "INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `pass`, `extra`, `estatus`, `fecha_alta`, `datos`, `confirmacion`, `temporal`, `ip`, `web_agent`, `valor_extra`)
			 VALUES (NULL, '', '', '', '', '0', '0', now(), '0', '0', '1', '$usr_ip', '$usr_agent', '0');";

			

			 //echo $sql;

			 $resultt = $mysqli->query($sql);



			 $sq = "SELECT * FROM `usuario` WHERE ip LIKE '$usr_ip' AND web_agent = '$usr_agent' LIMIT 1";
			//echo $sq;
			$resultt = $mysqli->query($sq);
			$conttcc = 0;
			 while ($rowt = $resultt->fetch_row()){
		  	    $usr_tmp_idu = $rowt[0];
		        $usr_tmp_nombre = $rowt[1];
		        
				$conttcc++;
			}

			$usr_temporal = 1;


		}

		 

	}




	//echo "ID usuario temporal: ".$usr_tmp_idu;




?>