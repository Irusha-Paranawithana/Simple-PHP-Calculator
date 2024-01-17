

<html>
    <head>
        <title>Calculator</title>
    </head>

    <body>
        <form method="POST" action="calculator.php">
        Number 1:<input type="text" name="num1">
        <br><br>
        Number 2:<input type="text" name="num2">
        <br><br><br><br>

        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="*">
        <input type="submit" name="sub" value="/">
        </form>

        <?php
            class Operations{
                function add($num1,$num2){
                $sum = $num1+$num2;
    
                echo $sum;
                }
    
                function sub($num1,$num2){
                $sum = $num1-$num2;
    
                echo $sum;
                }
    
                function mul($num1,$num2){
                $sum = $num1*$num2;
    
                echo $sum;
                }
    
                function div($num1,$num2){
                $sum = $num1/$num2;
    
                echo $sum;
                }
    
            }

            $obj = new Operations();
          

            if(isset($_POST['sub'])){
                
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];

                $operator=$_POST['sub'];

               
                if($operator=="+"){
                    $obj->add($num1,$num2);
                }

                elseif($operator=="-"){
                    $obj->sub($num1,$num2);
                }

                elseif($operator=="*"){
                    $obj->mul($num1,$num2);
                }

                elseif($operator=="/"){
                    $obj->div($num1,$num2);
                }
                else{
                    echo "Invalid";
                }

            }


        ?>
        
    </body>
</html>



















