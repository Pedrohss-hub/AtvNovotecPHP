<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php 

        //Positivo ou Negativo
        echo "<p>Positivo ou Negativo<p>";
        $num = 10;
        if ($num < 0 ){
            echo "O número ".$num." é Negativo";
        } else if ($num > 0) {
            echo "O número ".$num." é Positivo";
        } else {
            echo "O número ".$num." é igual a Zero";
        }

        //Tabuada
        echo "<br><br>";
        echo "<p>Tabuada<p>";
        $num1 = 0;
        $num2 = 10;

        for($num1; $num1 <= $num2; $num1++){
            
            for($i = 1; $i <= 10; $i++){
                echo $num1." x ".$i." = ". $num1 * $i."<br>";
            }
            echo "<br>";
        }
        
        //Fatorar
        echo "<br><br>";
        echo "<p>Fatorar<p>";
        $num = 1000;
        $holdNum = [];

        for ($i = 2; $i <= $num; $i++){
            while ($num % $i == 0){
                $holdNum[] = $i;
                $num = $num/$i;
            }
        }

        echo implode(" * ",$holdNum);
        echo " =  ".array_product($holdNum);
        echo "<br>";

        //Par ou Ímpar
        echo "<br><br>";
        echo "<p>Par ou Ímpar<p>";
        $num = 10;
        
        if($num % 2 == 0){
            echo "$num é par";
        
        } else if ($num == 0){
            echo "$num é ímpar";

        } else {
            echo "$num é igual a 0";    
        }

        //Crescente
        echo "<br><br>";
        echo "<p>Crescente<p>";
        $num = [2,0,9,10,0,1,2,3,45,2];
        $holdNum = null;

        for($i = 0; $i < count($num); $i++){

            for($c = $i+1; $c < count($num); $c++){

                if ($num[$c] < $num[$i]){
                    $holdNum = $num[$i];
                    $num[$i] = $num[$c];
                    $num[$c] = $holdNum;
    
                }
            } 
        }

        $resp = implode(", ", $num);
        echo $resp;

        //Maior que
        echo "<br><br>";
        echo "<p>Maior que<p>";
        $num1 = 00;
        $num2 = 0;

        if ($num1 < $num2) {
            echo "$num1 é menor que $num2";

        } else if ($num1 > $num2){
            echo "$num1 é maior que $num2";

        } else {
            echo "$num1 é igual a $num2";

        }

        //Idade
        echo "<br><br>";
        echo "<p>Idade<p>";
        $name = "Souza";
        $born = 2018;
        $year = date("Y");

        $age = $year - $born;

        if ($age >= 18){
            echo "$name é maio de 18 e tem $age anos";

        } else{
            echo "$name é menor de 18 e tem $age anos";

        }

        //Mês
        echo "<br><br>";
        echo "<p>Mês<p>";
        $num = 12;

        if ($num >= 1 && $num <=12){
            $month = date('F', mktime(0,0,0,0, $num, 1));
            echo $month;

        } else{
            echo "valor inválido: $num";
        }

        //Conversor
        echo "<br><br>";
        echo "<p>Conversor<p>";
        $num = 1;

        echo "$num m é igual a ". ($num*100) ." cm";

        //Média
        echo "<br><br>";
        echo "<p>Média<p>";
        $nota = [10,9,8,2,0];

        $ind = count($nota);
        $sum = array_sum($nota);

        echo "A média é: ". $sum/$ind;

        //Celsius
        echo "<br><br>";
        echo "<p>Celsius<p>";
        $fahren = 20;
        $cel = number_format((5*($fahren-32)/9), 2);

        echo "$fahren °F é igual a $cel °";
        
        //Peso ideal
        echo "<br><br>";
        echo "<p>Peso Ideal<p>";
        $height = 1.7;

        echo $height."<br><br>";

        echo "Peso ideal para Homens: ". ((72.7*$height)-58) ."<br>";
        echo "Peso ideal para Mulhere: ". ((62.1*$height)-44.7) ."<br>";

        //Input
        echo "<br><br>";
        echo "<p>Input<p>";
        $num = 10;

        echo $num;

        //Divisores
        echo "<br><br>";
        echo "<p>Divisores<p>";
        $num = 19;
        $div = [];

        for ($i = 1; $i<= $num; $i++){
            if ($num % $i == 0){
                $div[] = $i;
            }

        }

        $rep = implode(", ", $div);
        echo $rep;

        //Pódio
        echo "<br><br>";
        echo "<p>Pódio<p>";
        $num = [2,0,9];
        $holdNum = null;
        

        for($i = 0; $i < count($num); $i++){

            for($c = $i+1; $c < count($num); $c++){

                if ($num[$c] < $num[$i]){
                    $holdNum = $num[$i];
                    $num[$i] = $num[$c];
                    $num[$c] = $holdNum;
    
                }
            } 
        }

        echo $num[count($num) -1]."<br>";

        $resp = implode(", ", $num);
        echo $resp;
    
    ?>

</body>
</html>