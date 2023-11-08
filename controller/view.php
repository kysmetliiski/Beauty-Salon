<?php 

class view 
{
    public function render( $template, $array = false )
    {
        if ( $array )
            extract( $array );
       
        include("view/".$template );
    }
}


?> 