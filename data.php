<?php
// Get data from form 
$ambience = $_POST['ambience'];
$hygiene = $_POST['hygiene'];
$hospitality = $_POST['hospitality'];
$comment = $_POST['msg'];
$food=$_POST['food'];
$rating=$_POST['rating'];

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO feedback (ambience, hygiene, hospitality, food, rating, comment) VALUES (?, ?, ?, ?,  ?, ?)");
    $stmt->bind_param("iiiiis", $ambience, $hygiene, $hospitality,$food,$rating, $comment);
    $execval = $stmt->execute();
    
    if ($execval) {
        // Feedback added successfully
    } else {
        // Error in adding feedback
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cont {
            border-style: solid;
            border-radius: 5px;
            margin-top: 150px;
            margin-left: 500px;
            margin-right: 350px;
        }
        #mncont{
            padding-left: 10px;
        }
    </style>
</head>
<body>
    <div id="cont">
        <h1>Feedback added successfully!</h1>
        <div id='mncont'>
        <h3>Check-in Experience: <?php echo $ambience; ?></h3>
        <h3>Staff Service: <?php echo $hygiene; ?></h3>
        <h3>Housekeeping: <?php echo $hospitality; ?></h3>
        <h3>Restaurant food : <?php echo $food; ?></h3>
        <h3>Overall Hotel Rating: <?php echo $food; ?></h3>
        <h3>Comment: <?php echo $comment; ?></h3>
        </div>
    </div>
</body>
</html>