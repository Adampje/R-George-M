<?php
    include("./functions.php");
    is_authorized(["docent", "root", "moderator"]);

?>

<?php
    echo "k-home";
    echo "<br>";
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];

?>