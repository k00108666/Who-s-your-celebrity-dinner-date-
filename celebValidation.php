<?php

/**
 * Created by PhpStorm.
 * User: Seamy
 * Date: 5/21/2016
 * Time: 11:27 PM
 */
class celebValidation
{

    public function validate() {

        $age = (isset($_POST['age']) ? $_POST['age'] : null);
        $ageVal = is_int($age);
        
        $valid = false;
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && (isset($_POST['name']) ? $_POST['name'] : null) && (isset($_POST['age']) ? $_POST['age'] : null) && $ageVal = true){
            
            $valid = true;
            
            
        }
        
        return $valid;
        
        
    }
    



}