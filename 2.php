<html>
    <head>
        <title>1</title>
        <?php
        $a = $_POST['t1'];
        $b = $_POST['t2'];
        $c = $a+$b;
        ?>    
    </head>
    <body>
        <form method="post">
            no.1<input type="text" name = 't1'><br>
            no.2<input type="text" name = 't2'><br>
            <input type="text" value="<?php echo $c;?>">
            <button>submit</button><br>
            result:<?php echo $c;?>
        </form>
    </body>
</html>