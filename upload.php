<!0DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload de vários arquivos com PHP</title>


<style>

/* Esconde o input */
input[type='file'] {
  display: none
}

/* Aparência que terá o seletor de arquivo */
label {
  background-color: #3498db;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  margin: 10px;
  padding: 6px 20px
}

</style>




</head>

<body>
<h1>Upload de vários arquivos com PHP</h1>

<form action="action.php" method="POST" enctype="multipart/form-data">
<p><input type="file" name="arquivo[]" /></p>
<p><input type="file" name="arquivo[]" /></p>
<p><input type="file" name="arquivo[]" /></p>
<p><input type="file" name="arquivo[]" /></p>
<p><input type="file" name="arquivo[]" /></p>
<p><input type="submit" value="Enviar" /></p>



<label for='selecao-arquivo'>Selecionar um arquivo &#187;</label>
<input id='selecao-arquivo' type='file'>




</form>


</body>
</html>