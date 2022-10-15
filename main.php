<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="wrapper">
            <header><?php require_once 'header.php'; ?></header>
            <div class="container">
                <h1><?php echo $articleTitle; ?></h1>
                <div class="data">
                    <div class="myImg">
                        <?php  echo '<img src="/images/php.jpg">'; ?>                    
                    </div>

                    <div class="fullname">
                        <p>Меня зовут <?php echo $name, ' ' . $surname, '<br>город', ' ', $city; ?></p> 
                        <p>Мне <?php echo $age; ?> лет</p>
                        <p>Мы научились создавать переменные</p>
                        <p>Изучили простые операции с ними</p>
                    </div>
                </div>

                <div class="knowledge">        
                        <?php require_once 'knowledge.php'; ?>
                        <?php echo $a, ' ', $b, ' ', $c; ?>
                        <br>             
                        <?php
                            $a = 10;
                            $b = 20;
                            $c = $a + $b;
                            
                            echo $c;
                        ?>
                        <br>                
                        <?php echo $d; ?> 
                </div>

                <div class="article">
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                        Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                    </p>
                </div>
            </div>
            <footer><?php require_once 'footer.php'; ?></footer>
        </div>
    </body>
</html>