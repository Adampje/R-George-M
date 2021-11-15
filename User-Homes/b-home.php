<?php
    include("./functions.php");
    is_authorized(["barman", "root", "moderator", "admin"]);

?>

<?php
    echo "b-home";
    echo "<br>";
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];

?>