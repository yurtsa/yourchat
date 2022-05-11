
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

body {
    background: url("https://your-chat.ru/control/login/Simple/images/bg1.jpg");
    margin: 0;
  }
    </style>
  </head>
  <body background="https://your-chat.ru/control/login/Simple/images/bg1.jpg">
    <div id="main">
        <div id="logo"><h1>Your Chat</h1></div>
        <div id="menu">
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link disabled" href="#">О чате</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Правила</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Помощь</a></li>
            <li class="nav-item"><a class="nav-link disabled" href="#">Контакты</a></li> 
          </ul>
        </div>
        <div id="img"></div>
        <div id="enter">
            <p class="slogan">Наш классический текстовый чат даёт возможность завести новых друзей и обмениваться хорошими 
            моментами с другими людьми.</p>
             <input onclick="getLogin();" type="button" value="Войти" class="btn btn-primary btn-lg">
            <p onclick="getRegistration();"><small>Не зарегистрированы?<br>Зарегистрируйтесь сейчас! </small></p>

        </div>
        <div id="footer">
          <div id="lfooter"></div>
          <div id="rfooter"></div>
        </div>
    </div>




<script data-cfasync="false" src="js/function_login.js<?php echo $bbfv; ?>"></script>
<script data-cfasync="false" src="js/function_active.js<?php echo $bbfv; ?>"></script>
  </body>
  