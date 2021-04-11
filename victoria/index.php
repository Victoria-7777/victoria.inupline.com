<!-- Версія V0.01 01/01/2021 -->
<!-- t. SERHII BILOUS --> 

<!DOCTYPE html>
<html>
  <head> <!-- Прихована зона сайту, для браузерів і роботів -->
    <title>Victoria</title> <!-- Заголовок сторінки видно в назві закладки -->
    <meta name="application-name" content="InUpLine Service" /> <!-- Інформація для пошукових сервісів, application-назва сервісу або програми якщо сайт створенно для того-->
    <meta name="description" content="Сайт візитка про мене victoria" /> <!-- Інформація для пошукових сервісів, description-Опис сайту або програми -->
    <meta name="keywords" content="victoria.inupline.com, gatos, @Victoria_B251, Victoria minecraft, Victoria.inuple@gmail.com" /> <!-- Інформація для пошукових сервісів, keywords-ключові слова які асоціюються із сайтом або програмою -->
    <meta charset="utf-8"> <!-- Кодування символів, щоб не було ірогліфів -->
    <meta name="robots" content="index, follow"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon.ico"> <!-- Іконка сайту -->

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="victoria" />
    <meta itemprop="description" content="victoria about" />
    <meta itemprop="image" content="https://victoria.inupline.com/img/logo.png" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="" />
    <meta name="twitter:title" content="InUpLine Service" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:creator" content="РЩДФ ЬУ ДДФЬЩ МШСЕЩКШФ " />
    <meta name="twitter:image" content="https://victoria.inupline.com/img/victoria.png" />

    <!-- Open Graph data -->
    <meta property="og:title" content="InUpLine Service" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://victoria.inupline.com" />
    <meta property="og:image" content="https://victoria.inupline.com/img/victoria.png" />
    <meta property="og:description" content="" />
    
    <!-- Ззовнішні бібліотеки та фраймворки -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  
    <!-- STYLE -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- Java Script -->
    <script type="text/javascript" src="js/main.js"></script>    <!-- START SBFRAME -->

  </head> <!-- закриваємо шапку -->

  <body class="fonImg"> <!-- Видима зона сайту, тут відображається інформація для користувача -->


    <div id = "vpg">
      <!-- зона сторінки -->
    </div>

    <div id = "vmenu">
      <!-- зона меню -->
    </div>
    
    <!-- зона скріпта тут будемо програмувати дії -->
    <script type="text/javascript"> 
      // У цій зоні коментар починається з подвійних косих
      // зона авто заванатаження 
      // Порядок виставляєво в порядку строк
      $("#vmenu").load("pg/menu.php");  // завантажеться першим
      $("#vpg").load("pg/main.php");    // завантажеться другим

      // Важливо код завершувати з ; (крапкою з комою)
    </script>
    
  </body> <!-- закриваємо тіло -->
</html> <!-- закриваємо сторінку, кінець -->