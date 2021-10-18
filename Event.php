<?php


// The class used to descibe the properties and methods available to the events
// from the events table

class Event{
    
    // comments
    // properties
    public $eventId;
    public $eventName;
    public $eventDescription;
    public $eventPresenter;
    public $eventTime;
    public $eventDate;

    
    // constructor method - skip
    // setters and getters

    function setEventId($inId){
        $this->eventId = $inId;
    }

    function getEventId(){
        return $this->eventId;
    }

    function setEventName($inName){
        $this->eventName = $inName;
    }

    function getEventName(){
        return $this->eventName;
    }
    
    function setEventDescription($inDescription){
        $this->eventDescription = $inDescription;
    }

    function getEventDescription(){
        return $this->eventDescription;
    }
    public function getEventPresenter()
    {
        return $this->eventPresenter;
    }
 
    public function setEventPresenter($inEventPresenter)
    {
        $this->eventPresenter = $inEventPresenter;

        return $this;
    }  

    public function getEventTime()
    {
        return $this->eventTime;
    }

    public function setEventTime($ineventTime)
    {
        $this->eventTime = $ineventTime;

        return $this;
    }
 
    public function getEventDate()
    {
        return $this->eventDate;
    }

    public function setEventDate($ineventDate)
    {
        $this->eventDate = $ineventDate;

        return $this;
    }
    
    // processing methods


}// end of Event class definition


?>