<?php

require_once("Controller.php");

// Represents home page
class OverviewController extends Controller {
    
    // Render "Home" view
    
    public function show($page) {
        $this->render("Overview");
    }
    
} 