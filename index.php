<!DOCTYPE html>
<html>

<body>

    <h2 style="text-align:center;">Tower of Hanoi</h2>

    <?php
    include_once 'TowerOfHanoi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numDisks = $_POST["numDisks"];

        $tower = new TowerOfHanoi($numDisks);

        echo "<div style='display:flex; flex-direction:column-reverse;'>\n";
        $tower->solve();
        echo "</div>\n";
    }
    ?>

    <div style="justify-content: center; display:flex;">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            Number of disks: <input type="number" name="numDisks">
            <input type="submit" value="Send">
        </form>
    </div>

</body>

</html>