<?php
    include("./functions.php");
    is_authorized(["root"]);

?>

<?php
    echo "r-home";
    echo "<br>";
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];

?>