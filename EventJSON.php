<?php

    /**
     * WDV341 JSON-Event-Object Assignment
     * Jeremy Brannen
     * This page will crete a new Event object
     *      It will access the events table from the database
     *      It will create and load an event object with data from the database
     *      It will the convert the event object into a JSON object
     *      It will echo "return" the JSON object to the calling program
     * 
     *      The program will return one event from the wdv341_events table
     */

     // access the Event class file
    require "Event.php";

     // access the database
    require "dbConnect.php";

    $outputObjArray = []; // empty array to hold event objects

    try{
        $sql = "SELECT events_id, events_name, events_description, events_description, events_presenter, events_time, events_date FROM wdv341_events WHERE events_id = 1";   //sql command as a string variable formats time and date in sql
        $stmt = $conn->prepare($sql);           // prepare the statement
        $stmt->execute();                     
        
        // foreach row in the $stmt load the object
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {    
            
            // create an Event object
            $outputObj = new Event();

            $outputObj->setEventId($row['events_id']);
            $outputObj->setEventName($row['events_name']);
            $outputObj->setEventDescription($row['events_description']);
            $outputObj->setEventPresenter($row['events_presenter']);
            $outputObj->setEventTime($row['events_time']);
            $outputObj->setEventDate($row['events_date']);
        
            // add the object to an array
            array_push($outputObjArray, $outputObj);
        }

         // convert the array to JSON object and echo it in the respose object
        echo(json_encode($outputObjArray));   

    }   // end try

    catch(PDOException $e){
        echo "Errors: " . $e->getMessage();
    }   // end catch
?>
<!-- HTML is for homework and repo link purposes only -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatable" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>PHP-JSON Event Object</title>
        <!--Jeremy Brannen-->
        <script>

        </script>
        <style>
           .text-center{
               text-align: center;
           } 
        </style>
    </head>

    <body>

    <h1></h1>
    <h2></h2>

    <footer>

        <p class="text-center">
            <a target="_blank"href="https://github.com/jrbrannen/JSON-Event-Object-PHP.git">GitHub Repo Link</a> <!--  GitHub Repo Link -->
        </p>

        <p class="text-center">
            <a href="../../wdv341.php">PHP Homework Page</a>    <!-- Homework page link -->
        </p>
        </footer>

    </body>

</html>