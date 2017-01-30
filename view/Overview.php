   
<?php
$results = $GLOBALS["dummy"];

?>

<div id="main-wrapper">
      <?php foreach($results as $results): ?>        
        <?php echo "ID: " . $results['ID'] . ",  Brukernavn: " .$results['brukernavn'] . ",  Info: " .$results['tekst'];  ?><br>


    <?php endforeach; ?>
    </div>
    