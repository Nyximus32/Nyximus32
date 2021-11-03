<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
        if(isset($_POST['calcTax'])){
            
            $weight=$_POST['weight'];
            //$type=$_POST['vehicle'];

            if(!empty($weight)){
                
                if(isset($_POST['motorcycle'])){

                }
                else if(isset($_POST['car'])){

                }
                else if(isset($_POST['truck'])){

                }
                else{
                    echo"You have not selected the type of vechicle!";
                }
             
            }
            else{
                echo"You have not filled in the weight!";
            }
        }
        
        
        
        ?>
        
        
        <form action="index.php" method="post">
        <h1>Calculate Road Tax</h1>
        <hr>
        <p>Enter weigh of the vehicle in kilograms:</p>
        <input type="text" name="weight"><br><br>
        <input type="radio" id="motorcycle" name="vehicle" value="Motorcycle">
        <label for="motorcycle">Motorcycle</label><br>
        <input type="radio" id="car" name="vehicle" value="Car">
        <label for="car">Car</label><br>
        <input type="radio" id="truck" name="vehicle" value="Truck">
        <label for="truck">Truck</label>
        <br>
        <br>
        <input type="submit" value="Calculate Tax" name="calcTax">
        </form>
        <?php
        /* ASS 1
        $date="11/10/2021";
        $period;
        
        list($day,$month,$year)= explode("/", $date);
        
        
        switch ($month) {
    case 1:
        $month="January";
        break;
    case 2:
        $month="February";
        break;
    case 3:
        $month="March";
        break;
    case 4:
        $month="April";
        break;
    case 5:
        $month="May";
        break;
    case 6:
        $month="June";
        break;
    case 7:
        $month="July";
        break;
    case 8:
        $month="August";
        break;
    case 9:
        $month="September";
        break;
    case 10:
        $month="October";
        break;
    case 11:
        $month="November";
        break;
    case 12:
        $month="December";
        break;
}

        if($month=="January" || $month=="February" || $month=="December"){
            $period=" in the winter period.";
        }
        if($month=="March" || $month=="April" || $month=="May"){
            $period=" in the spring period.";
        }
        if($month=="June" || $month=="July" || $month=="August"){
            $period=" in the summer period.";
        }
        if($month=="September" || $month=="October" || $month=="November"){
            $period=" in the autumn period.";
        }
        
    echo"The person was born on: $day $month $year $period"
         */
        
        
        
        
        /* ASS 3
        for($x=0;$x<=5;$x++){
            
            for ($xi=1;$xi<=$x;$xi++){
                echo "O";
            }
            echo "Y";
            
            for ($xin=4;$xin>=$x;$xin--){
                echo "O";
            }
            echo"<br>";
        }
        
        for($a=0;$a<=4;$a++){
            
            for ($b=3;$b>=$a;$b--){
                echo "O";
            }
            echo "Y";
            
            for ($c=0;$c<=$a;$c++){
                echo "O";
            }
            echo"<br>";
        }
        */


        ?>
    </body>
</html>
