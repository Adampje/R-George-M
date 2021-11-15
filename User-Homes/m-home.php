<?php
    include("./functions.php");
    is_authorized(["admin", "root", "moderator"]);

?>

<?php
    echo "m-home";
    echo "<br>";
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];

?>