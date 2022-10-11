<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="event1.css">
    <title>Document</title>
</head>
<body>
<?php include ('../navbar/header.php');?>
<form method="POST">
<div class="id"><input type="int" name="studentid" placeholder="ENTER STUDENTID" style=" text-align: center"></div> 
    <div class="events">
    <div class="cricket">
        <img src="http://localhost/new/img/cricket.jpeg">
        <input type="checkbox" name="Events[]" value="Cricket"><label>Cricket</label>
    </div>
    <div class="football">
        <img src="http://localhost/new/img/football.png">
        <input type="checkbox" name="Events[]" value="Football"><label>Football</label> 
    </div>
    <div class="Table Tennis">
        <img src="http://localhost/new/img/TT.jpg">
        <input type="checkbox" name="Events[]" value="Table Tennis"><label>Table Tennis</label>
    </div>
    <div class="Carrom">
        <img src="http://localhost/new/img/carrom.jpeg">
        <input type="checkbox" name="Events[]" value="Carrom"><label>Carrom</label>
    </div>
    <div class="Chess">
        <img src="http://localhost/new/img/chess.png">
        <input type="checkbox" name="Events[]" value="Chess"><label>Chess</label>
    </div>
    <div class="Dance">
        <img src="http://localhost/new/img/dance.jpeg">
        <input type="checkbox" name="Events[]" value="Dance"><label>Dance</label>
    </div>
    <div class="Singing">
        <img src="http://localhost/new/img/singing.png">
        <input type="checkbox" name="Events[]" value="Singing"><label>Singing</label> 
    </div>
    <div class="Drama">
        <img src="http://localhost/new/img/drama.png">
        <input type="checkbox" name="Events[]" value="Drama"><label>Drama</label>
    </div>
    <div class="Elucation">
        <img src="http://localhost/new/img/elucation.jpeg">
        <input type="checkbox" name="Events[]" value="Elucation"><label>Elucation</label>
    </div>
    <div class="StoryTelling">
        <img src="http://localhost/new/img/story.png">
        <input type="checkbox" name="Events[]" value="StoryTelling"><label>StoryTelling</label>
    </div>
    </div>
    <div class="save"> 
    <button type="submit" name="save">SUBMIT</button>
    </div>
    <div class="update">
    <a href="http://localhost/new/navbar/updateevent.php"><label name="update">Update Events</label></a>
    </div>
</form>
<?php include ('../navbar/footer.html');?>
</body>
</html>
<?php                        
$con = mysqli_connect("localhost","root","","database");

if(isset($_POST['save']))
{
    $Events = $_POST['Events'];
    $alldata=implode(",",$Events);
    $id=$_POST['studentid'];
    $query = "INSERT INTO events(STUDENTID,EVENTS) VALUES ('$id','$alldata')";
    $query_run = mysqli_query($con, $query);
    if($query_run==1){
        echo'<script>alert("Data Enter Successfully")</script>';
    }
    else{
        echo'<script>alert("Some Thing Went Wrong")</script>';
    }
}
?>