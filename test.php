<?php
  //! La sintaxis de PHP es horrible xD
  // print("Hola Mundo");
  $contacts = ["Pepe", "Antonio", "Nate"]; 
  
  foreach($contacts as $contact){
    //   print("<div>$contact</div>" . PHP_EOL);
    // }
    ?>
    <?php if ($contact != "Pepe") { ?>
      <div><p><?= $contact ?></p></div>
    <?php } ?>
  <?php } ?>
