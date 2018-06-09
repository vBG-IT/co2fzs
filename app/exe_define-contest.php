<?php
    if(isset($_POST["login"])){
        $contest_name = $_POST["contest-name"];
        $start_time = $_POST["start-time"];
        $end_time = $_POST["end-time"];
        
        $start_time = mktime($start_time);
        echo "<script>alert(".$contest_name."); </script>"
        echo "<script>alert(".$start_time."); </script>"

        $statement = $PDO->prepare("INSERT INTO contest (name, day_first, day_last) VALUE (:name, :dayfirst, :daylast)");
        $statement->bindParam(":name", $contest_name);
        $statement->bindParam(":dayfirst", $start_time);
        $statement->bindParam(":daylast", $end_time);
	    $statement->execute();
    }
?>