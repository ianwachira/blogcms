<?php
    ini_set('display_errors', 1);          // Show errors for debugging
    
    
    $firstName = "Jane";                        // String type variable 
    $lastName = "Doe";                          // String type variable 
    $age = 35;                                  // Integer type variable 
    $married = true;                            // Boolean type variable 
    $childrenNames = array("Alice", "Bob");     // Array type variable 

    $fullName = $firstName . " " . $lastName;   
    $dogYears = $age/7;                        
    $isAdult = $dogYears > 4;
    $isSettled = $isAdult and $maarried;

?>

