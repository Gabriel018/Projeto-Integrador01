<?php

function aviso($msg){
    echo "
        <div class='msg aviso'>
            <h3> Avisos </h3>
            $msg
        </div>
        ";
}

function erro($msg){
    echo "
        <div class='msg erro'>
            <h3> Erros </h3>
            $msg
        </div>
        ";
}

function alerta($msg){
    echo "
        <div class='msg alerta'>
            <h3> Alertas </h3>
            $msg
        </div>
        ";
}