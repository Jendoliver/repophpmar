<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de Formulario de Alta</title>
    </head>
    <body>
        Introduce seis números:
        <form method="POST">
            <p><input type="number" name="numero1" placeholder="Número 1">
            <p><input type="number" name="numero2" placeholder="Número 2">
            <p><input type="number" name="numero3" placeholder="Número 3">
            <p><input type="number" name="numero4" placeholder="Número 4">
            <p><input type="number" name="numero5" placeholder="Número 5">
            <p><input type="number" name="numero6" placeholder="Número 6">
            <p><input type="submit">
        </form>
        <?php
        if(!empty($_POST))
        {
            $a = array((int)$_POST["numero1"], (int)$_POST["numero2"], (int)$_POST["numero3"], (int)$_POST["numero4"], (int)$_POST["numero5"], (int)$_POST["numero6"]);
            $npares = 0;
            $suma = 0;
            for($i=0;$i<count($a);$i++)
            {
                $num = $a[$i];
                $suma += $num;
                if($num%2==0)
                    $npares++;
            }
            $media = $suma / count($a);
            echo "Suma: $suma<br> Media: $media<br> Número de pares: $npares";
        }
        ?>
    </body>
</html>