   
<?php
$results = $GLOBALS["dummy"];
?>

<div id="main-wrapper">
    <?php foreach ($results as $results): ?>        
        <?php echo "ID: " . $results['ID'] . ",  Brukernavn: " . $results['brukernavn'] . ",  Info: " . $results['tekst']; ?><br>


    <?php endforeach; ?>


    <br> <br>
    
    <?php
    $dbConn = new PDO('mysql:host=localhost;dbname=tafjord;charset=utf8mb4', 'root', 'Tafjord123');
    $display = new Dummy($dbConn);
    $getRow = $display->getAll();?>
    <?php foreach ($getRow as $getRow): ?>        
    <?php echo "ID: " . $getRow['ID'] . ",  Brukernavn: " . $getRow['brukernavn'] . ",  Info: " . $getRow['tekst']; ?><br>
    <?php endforeach; ?>

    
    <b>Opprett ny brukerting</b>

    <form action="?page=addDummy" method="post">
        ID:<br>
        <input type="int" name="ID" value=""><br>
        Brukernavn:<br>
        <input type="text" name="brukernavn" value=""><br>
        Info:<br>
        <input type="text" name="tekst" value=""><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
