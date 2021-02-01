<?php
include('cabecalho.php');
include("funcoes.php");

$url = "https://pokeapi.co/api/v2/pokemon/";
 
if(!empty($_POST["complemento"])){
    $complemento = strtolower($_POST["complemento"]);
    $ch = curl_init($url.$complemento); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
    $pokemon = json_decode(curl_exec($ch));

    if(!empty($pokemon)){ 
        abre_card();
            content_image($pokemon->name,$pokemon->id);
            content_text($pokemon->name,$pokemon->types,$pokemon->height,$pokemon->weight);  
        fecha_card(); 
    }
    else{
       mensagem("Pokemon Inexistente",""); 
    }
}
else{
    mensagem("Digite uma entrada valida","");
}

?>
</html>