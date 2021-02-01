<?php

     function abre_card(){ ?>
        <section class="container">
            <div class="columns features">
                <div class="column is-half is-offset-one-quarter">
                    <div class="card">                          
<?php 
     }

     function fecha_card(){?>
                    </div>
                </div>
            </div>
        </section>
<?php     
     }

     function content_image($nome,$id){?>
        <div class="card-image has-text-centered">
            <figure class="image">
                <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/<?=$id.'.png'?>" alt="<?=$nome?>" class="">
            </figure>
        </div>
<?php
     }

     function content_text($nome,$tipo,$tamanho,$peso){?>
        <div class="card-content has-text-centered">
            <div class="content">
                <h4><b><?=$nome?></b></h4>
                <p><b>Tipo:</b> <?php 
                            for($i=0;$i<count($tipo);$i++)
                                echo $tipo[$i] -> type -> name .' ';
                        ?>
                </p>  
                <p><b>Tamanho:</b> <?=$tamanho/10?> m</p>
                <p><b>Peso:</b> <?=$peso/10?> Kg</p>
            </div>
        </div>
<?php
     }

     function mensagem($texto,$aviso){
        abre_card();?>
           <div class="card-content has-text-centered">
            <div class="content">
                <h4><?=$texto?></h4>
                <p><?=$aviso?></p>         
<?php
        fecha_card();
     }

?>