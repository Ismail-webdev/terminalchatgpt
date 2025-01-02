<?php

$answers = ["...", "Hello, How are you"];

echo "Terminal chatgpt for basic maths: 'Say Hello to Start' \n";
$prompt = strtolower(trim(fgets(STDIN)));

if($prompt == "hello"){
    foreach($answers as $ans){
        sleep(2);
         echo $ans."\n";  
    } 
    echo "Do you want to perform some basic maths? (Yes/No)\n";
    $wantto = strtolower(trim(fgets(STDIN)));
    if($wantto == "yes"){
        echo "Great! Let's start.\n";
    echo "Enter your First Number \n";
    $first = trim(fgets(STDIN));
    echo "Enter your Second Number \n";
    $second = trim(fgets(STDIN));
    

    echo "What you want to do with these numbers (Sum,Sub,Multi).\n";
    $action = strtolower(trim(fgets(STDIN)));
    
    switch ($action) {
        case 'sum':
            if(is_numeric($first) && is_numeric($second)) {
                $sum = $first + $second;
                echo "The Sum of your values is $sum\n";
            }else {
                echo "Invalid input! Please enter numeric values.\n";
            }
            break;
        case 'sub':
                if(is_numeric($first) && is_numeric($second)) {
                    $sub = $first - $second;
                    echo "The Subtraction of your values is $sub\n";
                }else {
                    echo "Invalid input! Please enter numeric values.\n";
                }
                break;

        case 'multi':
                if(is_numeric($first) && is_numeric($second)) {
                    $multi = $first * $second;
                    echo "The Multiplication of your values is $multi\n";
                }else {
                    echo "Invalid input! Please enter numeric values.\n";
                }
                break;

        default:
         echo "Invalid Action! Please choose 'Sum', 'Sub', or 'Multi'.\n";
        break;
    }
}
elseif($wantto == "no"){
    echo "Okay! Goodbye. Next Time!\n";
}
else{
    echo "Invalid input! Please enter 'Yes' or 'No'.\n";    
} 
}else {
    echo "Unrecognized command. Please say 'Hello' to start.\n";
}

?>