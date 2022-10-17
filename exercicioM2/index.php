 <?php

     require_once './class/Evento.php';
     require_once './class/Palestra.php';
     require_once './class/Ministrante.php';

 $ministrante = new Ministrante("João", "Mestrado");

 print_r($ministrante->getMinistrante());
