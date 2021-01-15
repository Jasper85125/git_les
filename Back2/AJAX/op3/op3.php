<html>
<head>
    <title>opdracht3</title>
    <script src="op3.js"></script>
</head>
<body>
    <?php
    require '../config.php';

    $query = "select * from ajax_meubels";
    $result = mysqli_query($mysqli, $query);
    while ($row = mysqli_fetch_array($result)) {

        $naam = $row['naam'];
        $anr = $row['artikelnr'];

        echo "<img src='meubels/" . $naam . ".jpg' onclick='zoekOp(" . $anr . ")'/> <br>";
    }
    ?>

    <div id="info">

    </div>

</body>
</html>

