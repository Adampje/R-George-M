<?php
    include("./functions.php");
    is_authorized(["ober", "root", "moderator", "admin"]);

?>

<?php
    echo "o-home";
    echo "<br>";
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];

?>