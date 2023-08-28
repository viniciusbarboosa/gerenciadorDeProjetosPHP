<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function checarLogin(){
        $ci = get_instance();
        $usuarioLogado = $ci->session->userdata("user");

        if(!$usuarioLogado){
           redirect("login"); 
        }
    }