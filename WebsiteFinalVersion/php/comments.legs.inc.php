<?php
function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO commentsLegs (uid, date, message) VALUES ('$uid', '$date', '$message')";
        $result = $conn->query($sql);
        //header("location: ../~cen4010_fa21_g13/legs.php");
    }
}

function getComments($conn) {
    $sql = "SELECT * FROM commentsLegs";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<center><div class='comment-box' ><p>";
        echo $row ['uid']."<br>";
        echo $row ['date']."<br><br>";
        echo nl2br($row ['message']);
        echo "</p></div></center>";

    }    
}