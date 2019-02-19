<?php 

include "biblioteca/simplehtmldom_1_8_1/simple_html_dom.php";
// ini_set('max_execution_time', 500); //300 seconds = 5 minutes

// ini_set('memory_limit', '-1');

class Crawler {

    function BuscaDadosLink($link){
        
        return   $html = file_get_html($link);
        exit;
    
    }
}

?>