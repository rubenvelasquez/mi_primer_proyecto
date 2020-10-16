<?php
  
 function main_menu()
   {
       return array(
           array(
               'title' => 'login',
               'url' => base_url(),

           ),
           array(
            'title' => 'registro',
            'url' => base_url('index.php/registro'),

           ),
        );
   }