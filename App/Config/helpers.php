<?php 

// define routes 
function url($url='')
{
    echo BURL.$url;
}

// redirect
function redirect($url)
{
    return  BURL.$url;
}