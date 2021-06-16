<?php
# salva o nome do arquivo
$nome = $_FILES['arquivo']['name'];

# array com os tipos de arquivos permitidos
$permitidos = ['image/jpeg', 'image/jpg', 'image/png'];

# verifica se o tipo do arquivo está dentro do array dos tipos permitidos
if (in_array($_FILES['arquivo']['type'], $permitidos)) {
    # move o arquivo da área temporária para a pasta arquivos
    move_uploaded_file($_FILES['arquivo']['name'], 'arquivos/' . $nome);
    
    echo "<br><br>" . "Arquivo salvo com sucesso!";
} else {
    echo "<br><br>" . "Arquivo não permitido!";
}