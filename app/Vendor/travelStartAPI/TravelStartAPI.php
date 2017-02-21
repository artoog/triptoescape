<?php


public class TravelStartAPI{
    
    
    private $flightSessionID;
    private $apiServiceLink = "https://testapi.travelstart.com/ts-ext-services/flight-service?wsdl"; 
    
   function __construct() {
       print "In BaseClass constructor\n";
   }
    
    
    public function getAvailability()
    {
    }
    
    
    public function sell()
    {
    }
    
    public function AddPassengers()
    {
    }
    
    public function AddContacts()
    {
    }
    
    public function AddPayments(){
    }
    
    public function commitBooking(){
    }
    
    
    
    
    public function __destruct() {
       print "Destroying " . $this->name . "\n";
   }
    
    
}







?>