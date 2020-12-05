<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical records</title>
    <link rel="stylesheet" href="../CSS/medical_record.css">
</head>
<body>
    <div id="container">
        <div id="title">Medical records for </div>
        <div id="content">
            <div class="back"><a href="javascript:history.go(-1)" style="color: black;"><span></span>Back</a></div>
            <p>
            <?php
            include("../functions.php");
            function getMedicalHistory($animalID){
                $sql = "SELECT date, description FROM event_log WHERE event_type='medical' AND animal_id=" . $animalID . ";";
                return constructQuery($sql);
            }
            $q = getMedicalHistory(4);
            while ($row = $q->fetch()):
	            echo implode(" | ", $row)."<br>";
            endwhile;
            ?>
            </p>
        </div>
    </div>
    <script src="../JS/myTools.js"></script>
    <script src="../JS/medical_record.js"></script>
</body>
</html>