<?php


function heading ($title = null, $type = 'h1', $align = 'center', $ff = 'Roboto',
$color = '#000'){
        return " <{$type} style ='text-align:{$align}; font-family:{$ff}; 
        color:$color;'>{$title}</{$type}>";
}



// 2nd heading function 


function hd2 ( $title = null, $type = 'h2', $align = 'center' , $ff = 'impact',
$color = '#000'){
    return "<{$type} style = 'text-align': {$align}; font-family:{$ff};
    color:$color;'><$title> </{$type}>";

}


?>