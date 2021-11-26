<?php
    include("./functions.php");
    is_authorized(["begeleider", "root", "moderator", "admin"]);

?>

<?php
    echo "begeleider-home";
    echo "<br>";
    echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
    echo "<hr>";
    echo "Mijn id is: " . $_SESSION["id"];

?>