<?php
    // test the Event class

    require 'Event.php';    // get access to the class

    // create a new object

    $newEvent = new Event();   

    // test name setter
    $newEvent->setEventId(1);
    $newEvent->setEventName("WDV341");
    $newEvent->setEventDescription("Midterm Test");
    $newEvent->setEventPresenter("Jeremy");
    $newEvent->setEventDate("October 20, 2021");
    $newEvent->setEventTime("11:00 AM");
    
    // test name getter
    echo $newEvent->getEventId() . "</br>";    
    echo $newEvent->getEventName() . "</br>";  
    echo $newEvent->getEventDescription() . "</br>";
    echo $newEvent->getEventPresenter() . "</br>";
    echo $newEvent->getEventDate() . "</br>";
    echo $newEvent->getEventTime() . "</br>";

?>