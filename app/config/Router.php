<?php
//==================================
//  ROUTAS UTILIZADOR DE NAVEGÇÃO
//==================================
$this->get('/','PagesController@home');
$this->get('/home','PagesController@home');


//==================================
//  ROUTAS  DE ENVIO UTILIZADOR 
//==================================
$this->get('/submit-email','SubscreverController@insert');
$this->get('/submit-sms','FaleConoscoController@insert');