<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display:flex; flex-direction:row;">
        <div>
            <h3>1-D Indexed Array</h3>
            <?php

            $fruits = array("apple", "banana", "grapes", "mango", "papaya"); //gets array using index of an array
            echo "$fruits[2]";

            echo "<br><br>Sequential array<br>";                //display array in a sequence

            echo "//for loop";                                  //count() funcn counts the array elements
            for ($i = 0; $i < count($fruits); $i++) {
                echo "<br>$fruits[$i]";
            }
            #while-next loop   
            //due to next() 1st element is omitted so to print that ele current() is called in whilenext loop
            echo "<br><br>//while-next looop<br>";
            $fruit = current($fruits);                               //current()funcn points the current ele of array  
            echo "$fruit";
            while ($fruit = next($fruits)) {                         //next() funcn points the next element of array
                echo "<br>$fruit";
            }
            #foreach loop
            echo "<br><br>//foreach loop";
            foreach ($fruits as $fruit) {
                echo "<br>$fruit";
            }
            ?>
        </div>
        <div style="width:20%;">
            <h3>Associative Array</h3>
            <?php
            //in associative array , there is key and value ,key acts as index and value as that's value
            $weather = array("sun" => "hot", "mon" => "cold", "tue" => "mild", "wed" => "hot");
            echo $weather["sun"];
            #foreach loop
            echo "Sequential Array<br><br>//foreachloop<br>";
            foreach ($weather as $key => $value) {
                echo "weather on $key is $value <br>";
            }

            #forloop
            echo "<br>//for loop";
            $days = array_keys($weather);            //array_keys() fucn returns keys of an array
            $temp = array_values($weather);           //array_values()funcn returns values of an array

            for ($i = 0; $i < count($weather); $i++) {
                echo "<br>$days[$i]=$temp[$i]";
            }
            #print_r
            echo "<br><br>//using print_r ";
            echo "<br>";
            print_r($weather);                      //print_r prints human readable form of variable
            echo "<br>";
            print_r($days);
            echo "<br>";
            print_r($temp);
            ?>

        </div>
        <div style="width:30%;">
            <h3>Multidimensional Array</h3>
            <?php
            $superheros = array(
                "Superman" => array("name" => "kent clark", "Gf" => "random"),     //array define 
                "Batman" => array("name" => "bruce Wyane", "gf" => "lois Lane"),
                "Spiderman" => array("name" => "peter", "gf" => "mary jain")
            );
            print_r($superheros);                                                      //display using print_r
            echo "<br><br>//Using Loop<br>";
            $keys = array_keys($superheros);            //always use array_keys() funcn when dealing with key and value
            $values = array_values($superheros);
            for ($i = 0; $i < count($superheros); $i++) {         //this loop displays the keys under 1st array
                echo "$keys[$i]<br>";
                foreach ($superheros[$keys[$i]] as $key => $value) {   //this loop displays key and values of 2nd array
                    echo " - $key = $value<br>";
                }
            }

            ?>
            <h3>Implode - Explode</h3>
            <p>
                implode - returns string from ale of array <br>
                explode - returns array from string<br>
                is_array() - takes variable and checks whether it is an array or not<br>
                in_array() - two parameters to search value in an array<br>
                sizeof() - no of ele in an array
            </p>
        </div>
        <div>
            <h3>Sorting</h3>
            <ol type="1" style="padding-left:25px;">

                <li>sort() - sort in ascending order
                </li>
                <li>rsort() - sort in descending order
                </li>
                <li>asort() - ascending acc. to value
                </li>
                <li>ksort() - ascending acc. to key
                </li>
                <li>arsort() - descending acc. to value
                </li>
                <li>krsort() - descending acc. to key
                </li>
            </ol>
            </p>
            <?php
            $numbers = array(2, 4, 6, 1, 3, 5);
            echo "original Array<br>";
            print_r($numbers);

            sort($numbers);             //sort
            echo "<br>//Sort<br>";
            print_r($numbers);

            //rsort
            echo "<br>//rsort<br>";
            rsort($numbers);
            print_r($numbers);

            //asort
            echo "<br>//asort<br>";
            asort($numbers);
            print_r($numbers);

            //ksort         
            echo "<br>//ksort<br>";
            ksort($numbers);
            print_r($numbers);

            //arsort
            echo "<br>//arsort<br>";
            arsort($numbers);
            print_r($numbers);

            //krsort
            echo "<br>//krsort<br>";
            krsort($numbers);
            print_r($numbers);

            ?>
        </div>

    </div>
    <style>
        * {

            padding-left: 3px;
            font-size: 18px;


        }

        div {
            border: 1px solid black;
        }

        h3 {

            text-decoration-line: underline;
            text-decoration-color: rgb(241, 22, 7);
        }
    </style>
</body>

</html>