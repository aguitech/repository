<?php
    $world = _("World");

    $str = <<<EOF
    <p>Hello</p>
    <p>Hello</p>
    <p>Hello</p>
    <pre>
    <p>Hello</p>
    <p>$world</p>
    </pre>
EOF;
echo $str;
    echo "<br />";
    echo htmlspecialchars($str);
    echo "<br />";
    
    function validar_str($str_field){
        
        if(strpos($str_field, "<pre>") !== false ) {
            return "si tiene pre";
        }
        
        
    }
    
    echo validar_str($str);
    
    
?>