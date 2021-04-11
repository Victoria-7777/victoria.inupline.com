<!-- Сторінка контактів -->

<style>
  /*grren_leaves.jpg*/ 
  .loginbox {
    position:absolute;
    left: 35%;
    top: 15%;
    width: 400px;
    height: 60%;
    background-color: rgba(245, 245, 245, 0.6);
  }

  body {font-family: Arial, Helvetica, sans-serif;}
form {
  border: 3px solid #f1f1f1;
  background-color: #191919; 
  }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.logfon {
  width: 100%;
  height: 140%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<img class = "logfon" src="/img/grren_leaves.jpg" alt="">
<div class = "loginbox"> 
<div id = "loginfo">Login Form</div>

<form id = "frmLogin" action="" class = "frmFon" method="post">
  <div class="imgcontainer">
    <img src="/img/logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" id = "uname" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" id = "psw" placeholder="Enter Password" name="psw" required>
        
    <button type="button" onclick="login()">Login</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="exit()" class="cancelbtn">Exit</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
    
</div>

<script>
// 
let username = "admin"; // змінна нік користувача
let pass = "123456"; // пароль

let element = document.getElementById('uname');
let element1 = document.getElementById('psw');
let loginfo = document.getElementById('loginfo');

  
$("#frmLogin").submit(function() {
  return false; // Вимикаємо перезавантаження сторінки для кнопки збереження
});

function login() {
  // || - або
  // & - і
  if (element.value == username & element1.value == pass)  {
    //document.getElementById('loginfo').innerHTML = '<h2>правильно</h2>';
    window.location.href = 'https://victoria.inupline.com/admin/panel.php';
  } else {
    document.getElementById('loginfo').innerHTML = '<h2>невірно</h2>';
  }}

function exit() {
  window.location.href = 'https://victoria.inupline.com';
}

</script>