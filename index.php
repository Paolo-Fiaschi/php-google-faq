<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>faq</title>
    <?php
        require_once "faq.php";
        function printNumberFaq($faq){
            count($faq);
            return  count($faq);
        };

    ?>
</head>
<body>
    <header>
        <div class="headerContainer">
            <div class="logo">
                <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="logo">
                <h2 class="privacy">Privacy e termini</h2>
            </div>
            <div class="menu">
                <ul class="menuList">
                    <li><a href="">Introduzione</a></li>
                    <li><a href="">Norme sulla privacy</a></li>
                    <li><a href="">Termini di servizio</a></li>
                    <li><a href="">Tecnologie</a></li>
                    <li class="faqMenu"><a href="">Domande frequenti</a></li>
                </ul>
                <ul>
                    <li><a href="">Account Google</a></li>
                </ul>
            </div>
         </div>
    </header>
    <main class = "container">
        <?php 

            // $numeroFaq = 0;
            foreach ($faq as $questionAnswer) {
                
                $question = $questionAnswer['question'];
                $answer = $questionAnswer['answer'];

                echo "<div><h2 class='question'>" . $question . "</h2 class='question'>" . "<p>" . $answer. "</p></div>";
                // $numeroFaq ++;
            }
      
            echo "<h2 class='question'>Numero faq totali: " . printNumberFaq($faq) . "</h2>";
        
        ?>
    </main>
    <footer>
        <div class="footerContainer">
            <ul class="footerList">
                <li><a href="">Google</a></li>
                <li><a href="">Tutto su Google</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Termini</a></li>
            </ul>
            <div class="language">
                <select name="" id="changeLanguage">
                    <option value="">Italiano</option>
                    <option value="">English</option>
                    <option value="">Deutsch</option>
                    <option value="">Espanol</option>
                    <option value="">Francais</option>
                </select>
            </div>

        </div>
    </footer>
</body>
</html>