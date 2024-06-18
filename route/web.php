<?php
$routes=[
    '/'=> 'webcontroller#index',
   // '/post'=>'postcontroller#index',

   '/activity'=>'webcontroller#activitypage',
   '/about'=>'webcontroller#aboutpage',
   
   '/newsletter'=>'webcontroller#newletterpage',
   '/login'=>'webcontroller#loginpage',
   '/register'=>'webcontroller#registerpage',
   '/vision'=>'webcontroller#visionpage',
   '/contact'=>'webcontroller#contactpage',
   '/entrance'=>'webcontroller#entrancelistspage',
   '/adrequirement'=>'webcontroller#adrequirementpage',
   '/adfee'=>'webcontroller#adfeepage',
   '/CU'=>'webcontroller#CUpage',
   


];
return $routes;