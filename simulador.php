<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Quantos Bytes?</title>
  <link href="css/estilo_perguntas.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta property="og:image" content="http://www.ltecnologia.com.br/apps/qb/mind.png" />
  <div id="cabecalho"><img src="header.png" width="800" height="200" alt=""/></div>
</head>

<body>
  <center>
<form action="principal.php" method="post">
<p>
  <label for="nome"><span><strong>Seu Nome:</strong></span></label>
  <span>
  <input name="nome" type="text" required id="textfield">
  </span></p>
<p>
  <strong><span>
  <span >Qual sua Idade?</strong>
  <input name="idade" type="text" required value="" size="5" maxlength="3" />
  Anos</p>
<p><strong>Quantas horas de sono por noite ?</strong> </p>


<div id="horas">
  <input name="sono" type="radio" required id="radio" value="oito">
  8 horas
  <input name="sono" type="radio" required id="radio2" value="menos8">
  Menos que 8 horas
  <input name="sono" type="radio" required="required" id="radio9" value="mais8">
  Mais que 8 horas
</div>

<p><strong>Você fuma?  </strong></p>

<div id="fuma">
  <input type="radio" name="fuma" id="radio7" value="s">
  Sim
  <label for="fuma"> </label>
  <input type="radio" name="fuma" id="radio8" value="n">
  <label for="fuma">Não </label>
</div>

<p><strong>Pratica alguma atividade física?  </strong></p>
<div id="fisica">
  <input name="exercicio" type="radio" required id="radio3" value="sim3">
  <label for="radio3">Sim, 3x por semana</label>
  <input name="exercicio" type="radio" required id="radio4" value="sim7">
  <label for="radio4">Sim, todos os dias  </label>
  <input type="radio" name="exercicio" id="radio10" value="n">
  Não pratico nada
</div>

<p><strong>Consome bebida alcoolica?</strong></p>
<div id="bebida">
  <input type="radio" name="bebida" id="radio11" value="simmuito">
  <label for="bebida">Sim, bastante! </label>
  <input type="radio" name="bebida" id="radio5" value="sim">
  Sim, socialmente
  <input type="radio" name="bebida" id="radio6" value="nao">
  Não bebo
</div>

<p ><strong>Utiliza algum tipo de droga alucinógena?</strong></p>
<div id="drogas">
  <input type="radio" name="drogas" id="radio12" value="sim">
  <label for="drogas">Sim! </label>
  <input type="radio" name="drogas" id="radio13" value="asvezes">
  Ás vezes
  <input type="radio" name="drogas" id="radio14" value="nao">
  Não!
</div>

<p><strong>Em um mês quantos livros consegue ler?</strong></p>
<div id="livros">
  <input type="radio" name="leitura" id="radio15" value="1livro">
  1 livro
  <input type="radio" name="leitura" id="radio17" value="3livros">
  <label for="leitura">3 livros
    <input type="radio" name="leitura" id="radio18" value="5livros">
    5 livros 
  </label>
  <input type="radio" name="leitura" id="radio16" value="naoleio">
  <label for="leitura">Não gosto de ler </label>
</div>

<p><strong>O que você prefere fazer?</strong></p>
<div id="hobby">  <input type="radio" name="hobby" id="radio19" value="cruzadas">
  Palavras cruzadas
  <input type="radio" name="hobby" id="radio20" value="ler">
  Ler um livro
  <input type="radio" name="hobby" id="radio21" value="tv">
  Assistir TV
  <input type="radio" name="hobby" id="radio22" value="internet">
  Navergar na internet</p>
</div>
<input type="submit" name="enviar" value="Quantos Bytes?" />
</form>
</center>
</body>
</html>
