
<!--usar POST para enviar arquivos
encypte - define como formulario agrega conteudo para enviar o arquivo
usar o input - envia o arquivo e seus dados para o superglobal $_FILES
-->


<form method="POST" action="recebedor.php" enctype="multipart/form-data">
     <input type="file" name="arquivo">
     <input type="submit" value="Enviar">

</form>