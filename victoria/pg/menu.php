<!-- Меню сайту -->
    
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: absolute;
  display: inline-block;
  padding: 10px;
  right: 10px;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 10px;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>



<div class = "vmenu"> <!-- Область меню -->
    <!-- Фоновий прямокутник для обасті меню з прозорістю-->
    <div class = "vmenu_fon"></div> 
    <!-- Зона логотипу -->
    <div class = "vmenu_panel_0">
        <img class = "vlogo" src="img/logo.png" alt="">
        VICTORIA
        <!-- <img class = "logo"  src="img/victoria1.png" alt="Victoria" > -->
    </div>
    <!-- Зона клавіш -->
    <div class = "vmenu_panel_1">
        <!--
        <button id = "1" onclick="myFunction(this.id)" clas = "btnmenu" type="button">HOME</button>
        <button id = "2" onclick="myFunction(2)" clas = "btnmenu" type="button">GALERY</button>
        <button id = "3" onclick="myFunction(3)" clas = "btnmenu" type="button">ABOUT</button>
        <button id = "4" onclick="myFunction(4)" clas = "btрnmenu" type="button">CONTACT</button>
-->
        <div class="dropdown">
        <button class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <div class="dropdown-content">
            <a href="#" id = "1" onclick="myFunction(this.id)">HOME</a>
            <a href="#" id = "2" onclick="myFunction(this.id)">GALERY</a>
            <a href="#" id = "3" onclick="myFunction(this.id)">ABOUT</a>
            <a href="#" id = "4" onclick="myFunction(this.id)">CONTACT</a>
        </div>
        </div>

    </div>
</div>

<!-- зона скріпта тут будемо програмувати дії -->
<script type="text/javascript"> 
      
    function myFunction(indx){ // код кнопок меню
        if (indx == 1) { $("#vpg").load("pg/main.php"); }
        if (indx == 2) { $("#vpg").load("pg/galery.php"); }
        if (indx == 3) { $("#vpg").load("pg/about.php"); }
        if (indx == 4) { $("#vpg").load("pg/contact.php"); }
    };

</script>