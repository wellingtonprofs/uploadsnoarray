<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload de vários arquivos com PHP</title>



<style>
	.no-js .inputfile + label {
    display: none;
}


.js .inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
	
}
.inputfile + label {
    cursor: pointer;
    padding: 0.95rem 2.25rem; 
	border: 1px solid #383838;
}

.inputfile-1 + label, img {
    width: 23px;
    height: 23px;
	padding-left: 20px;
}
.inputfile-1 + label, span{
	text-align: left;
	padding-left: 10px;

}
</style>




</head>

<body>


<h1>Upload de vários arquivos com PHP</h1>

<form action="action.php" method="POST" enctype="multipart/form-data">

<input type="file" name="arquivo[]" id="file-1" class="inputfile inputfile-1" />
<label for="file-1"><img src="imagem.png" /><span>Imagen</span></label>

<label>Tipo:</label>

<select class="form-control" id="cars" name="nome[]" require="require">

<option value="Graficos">Graficos</option>

<option value="Diversos">Diversos</option>

<option value="Impressao">Impressão</option>

</select>

<input type="file" name="arquivo[]" id="file-2" class="inputfile inputfile-1" />
<label for="file-2"><img src="imagem.png" /><span>Imagen</span></label>

<label>Tipo:</label>

<select class="form-control" id="cars" name="nome[]" require="require">

<option value="Graficos">Graficos</option>

<option value="Diversos">Diversos</option>

<option value="Impressao">Impressão</option>

</select>

<input type="file" name="arquivo[]" id="file-3" class="inputfile inputfile-1" />
<label for="file-3"><img src="imagem.png" /><span>Imagen</span></label>

<label>Tipo:</label>

<select class="form-control" id="cars" name="nome[]" require="require">

<option value="Graficos">Graficos</option>

<option value="Diversos">Diversos</option>

<option value="Impressao">Impressão</option>

</select>

<input type="file" name="arquivo[]" id="file-4" class="inputfile inputfile-1" />
<label for="file-4"><img src="imagem.png" /><span>Imagen</span></label>

<label>Tipo:</label>

<select class="form-control" id="cars" name="nome[]" require="require">

<option value="Graficos">Graficos</option>

<option value="Diversos">Diversos</option>

<option value="Impressao">Impressão</option>

</select>

<input type="file" name="arquivo[]" id="file-5" class="inputfile inputfile-1" />
<label for="file-5"><img src="imagem.png" /><span>Imagen</span></label>

<label>Tipo:</label>

<select class="form-control" id="cars" name="nome[]" require="require">

<option value="Graficos">Graficos</option>

<option value="Diversos">Diversos</option>

<option value="Impressao">Impressão</option>

</select>

<br >
<br >
<br >
<br >
	
<button type="submit" value="Enviar">Enviar</button>

</form>


					
		<script>
     'use strict';
		;( function ( document, window, index )
		{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;


		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;

		});

		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
       }( document, window, 0 ));

    (function(e,t,n){var r=e.querySelectorAll("html")[0];
		r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})
		(document,window,0);



    </script>
		
</body>
</html>

