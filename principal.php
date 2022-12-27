<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Quantos Bytes?</title>
  <link href="css/estilo.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 
  <!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'pt-BR'}
</script>
</head>
<body>
<!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=644055225677644&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?
//Declaração de variáveis via método post, dados obtidos da página "index.php"
$sono=$_POST['sono'];
$idade=$_POST['idade'];
$nome=$_POST['nome'];
$fuma=$_POST['fuma'];
$exercicio=$_POST['exercicio'];
$bebida=$_POST['bebida'];
$drogas=$_POST['drogas'];
$leitura=$_POST['leitura'];
$hobby=$_POST['hobby'];

//Pontos Inicialmente terá o valor de 10
$pontos=10;
$bytes=0;

/*Adiciona pontuação*/
// Fuma?
if($fuma=="s"){
	$pontos=$pontos-3;
	} 
	else{
	if($fuma=="n"){
		$pontos=$pontos+3;
	}
}
// Bebe?
if($bebida=="simmuito"){
	$pontos=$pontos - 2;
	}
	else{
		if($bebida=="sim"){
			$pontos=$pontos - 1;
		}
		else{
			if($bebida=="nao"){
			  $pontos=$pontos+2;
				}
		}
}
// Numero de Horas dormidas
if($sono=="oito"){
	$pontos=$pontos+2;
	}
	else{
		if($sono=="menos8")
			$pontos=$pontos-1;
		else{
			if($sono=="mais8"){
				$pontos=$pontos+2;
			}
		
	}
}
//Tem algum Hobbie?
if($hobby=="cruzadas"){
	$pontos=$pontos+4;
	}
	else{
	if($hobby=="ler"){
		$pontos=$pontos+3;
		}else{
		$pontos=$pontos+1;
		}
}
//Pratica alguma tividade física?
if($exercicio=="sim3"){
	$pontos=$pontos+1;
	}
	else{
	   if($exercicio=="sim7"){
		   $pontos=$pontos+2;
	   }else{
		   if($exercicio=="nao"){
			   $pontos=$pontos-1;
	   }
	   }
}
//Usa Drogas?
if($drogas=="sim"){
	$pontos=$pontos-5;
	}
	else{
	   if($drogas=="asvezes"){
		   $pontos=$pontos-2;
	   }else{
		   if($drogas=="nao"){
			   $pontos=$pontos+2;
	   }
	   }
}

//Frequência de Leitura
if($leitura=="1livro"){
	$pontos=$pontos+2;
	}
	else{
	   if($leitura=="3livros"){
		   $pontos=$pontos+2;
	   }else{
		   if($leitura=="5livros"){
			   $pontos=$pontos+6;
	   		}
	 		  else{
				  if($leitura=="naoleio"){
					  $pontos=$pontos;
			  }
			  }
	   }
}

$bytes=((1024*$idade/8)*$pontos)*10;

?> 
// fim de PHP


<center>
<div id="msgfinal"><img src="icorar.png" alt="Quantos Bytes" ><br>
<? 

print "<h3><center>".$nome." seu cerebro é do tamanho de um HD de : ".($bytes/1024)." TeraBytes</center></h3>";

?>

<!-- Posicione esta tag onde você deseja que o botão +1 apareça. -->
	<div class="g-plusone" data-annotation="inline" data-width="300"></div>

		<div class="fb-like" data-href="http://www.ltecnologia.com.br/apps/qb/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

		</div>
	<div id="msg2">O cérebro humano contém aproximadamente 100 bilhões de neurônios. Cada um desses neurônios são capazes de fazer mais de 1000 conexões, ou seja, 1000 potenciais neurônios, que fazem o trabalho de armazenar dados e informações. Multiplicando cada um desses 100 bilhões de neurônios por aproximadamente 1.000 conexões, você tem mais ou menos 100 trilhões de pontos de informação, ou mais ou menos 100 terabytes de informação. Todas as perguntas efetuadas aqui foram baseadas nesses dados, e de acordo com as informações abaixo.

</div>

</center>

</body>
</html>
