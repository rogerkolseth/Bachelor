<?php

require_once("Controller.php");

// Represents home page
class OverviewController extends Controller {
    
    // Render "Home" view
    
    public function show($page) {
        $dummytest = $GLOBALS["dummy"];
        $dummy = $dummytest->getAll();
        $data = array(
            "dummy" => $dummy,            
        );
        
        return $this->render("overview", $data) ;
    }
    
} 