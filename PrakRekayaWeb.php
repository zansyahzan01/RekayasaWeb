<!-- Buat sebuah variabel yang berisi json, lalu decode variabel tersebut ke dalam bentuk PHP
Object dan PHP Array, kemudian akses nilai pada variabel hasil decode tersebut masingmasing. -->

<?php

    // Decode Php Object
     $jsonobj = '{"Peter":41,"Ben":43,"Joe":27}';
     $obj = json_decode($jsonobj);
     
     // mengakses nilai object
     echo $obj->Peter;
     echo $obj->Ben;
     echo $obj->Joe;
    
     echo "\r\n";

    // Decode Php Array
     $jsonobj = '{"Peter":41,"Ben":43,"Joe":27}';

     $arr = json_decode($jsonobj, true);
 
     // mengakses nilai array
     echo $arr["Peter"];
     echo $arr["Ben"];
     echo $arr["Joe"];
?>