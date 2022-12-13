<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //1 punto
        $paragrafo = '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit vero, laborum architecto dolores, 
        amet expedita dicta esse ipsa eum quae accusantium ea sunt quam qui omnis rerum! Officia, expedita adipisci!';
        //stampare a schermo
        echo $paragrafo;
    ?>

    <div>
        <p>
            <?php echo $paragrafo ?>
        </p>
    </div>

    <div>
        <span>
            il paragrafo è lungo:
            <?php 
                echo strlen($paragrafo)
            ?>
        </span>
    </div>

    <div>
        <!-- ?censura= val sarà da scrivere nel url del browser -->
        <?php 
            if( empty($_GET['censura']) ){
                echo 'non hai una parola da censurare ancora';
            } else {
                $paragrafoModificato = str_replace( '$_GET['censura']', '***', $paragrafo );
                echo $paragrafoModificato;
            }
        ?>
    </div>
</body>
</html>