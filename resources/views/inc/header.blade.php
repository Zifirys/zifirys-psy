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
                        <label><a href=" {{ route('recover') }} ">Забыли пароль?</a><br><a href=" {{ route('register') }} ">Зарегистрироваться</a></label>
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
              <li><a href=" {{ route('home') }} ">Главная</a></li>
              <li><a href=" {{ route('article') }} ">Статьи</a></li>
               <li><a href=" {{ route('tests') }} ">Тесты</a></li>
            </ul>
          </div>

        </div>
      </nav> 
    </div>
  </div>
</header>