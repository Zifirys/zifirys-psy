<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zifirys</title>
    <link href="{{ asset('../bootstrap/app.php') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    
  <header>
    <div class="container-fluid">
      <div class="row">
       <nav role="navigation" class="navbar navbar-inverse">
          <div class="container">

            <div class="navbar-header header">
              <div class="container">       
                <div class="row row-header">
                  <div class="col-lg-12">
                    <h1>ZIFIRYS</h1>

                    <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Вход 
                      <span class="caret"></span>
                      </button>

                      <ul class="dropdown-menu">
                        <form action="" role="form">
                          <div class="form-group">                
                            <label><span>Имя пользователя</span><input type="text" class="input-enter-1 form-control input-md" required></label>
                          </div>  
                          <div class="form-gruop">
                            <label><span>Ваш пароль</span><input type="password" class="input-enter-2 form-control input-md" required></label>
                          </div>
                          <label><input type="checkbox" checked value="on"><span>Запомнить</span></label>
                          <button type="submit" class="btn btn-default btn-enter">Войти</button>
                          <label><a href="recover">Забыли пароль?</a><br><a href="reg">Зарегистрироваться</a></label>
                        </form>
                      </ul>
                    </div>

                    <p>По вопросам "zifirys@mail.ru"</p>

                  </div>
                </div>
              </div>

              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle"> 
                <span class="sr-only">Toggle navigation</span>
                <!-- сколько черточек будет на кнопке -->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              <ul class="nav nav-pills">
                <li><a href="/public">Главная</a></li>
                <li><a href="articles">Статьи</a></li>
                <li><a href="test">Тесты</a></li>
              </ul>
            </div>

          </div>
       </nav> 
      </div>
    </div>
  </header>

 @yield('content')

  <footer>
      <div class="container text-center">
        <span class="footer"><a href="/public">Главная</a></span>
        <span class="footer"><a href="articles">Статьи</a></span>
        <span class="footer"><a href="test">Тесты</a></span>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>