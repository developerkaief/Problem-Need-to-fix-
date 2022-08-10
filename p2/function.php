<?php


function hat ( $type = 'l', $txt= null){
    $text_type = null;
    $txt = null;
    return $text_type;
        switch ($type){
        case 'u':
            $text_type = 'uppercase';
            break;
            case 'l';
            $text_type = 'lowercase';
            break;
            default:
            $text_type = 'lowercase';
            break;
    }
}

echo "<span style = 'text-transform:{$text_type};'> {$txt}</span>";


?>