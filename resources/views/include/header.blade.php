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

                  

                   <h6><a href=" {{ route('login') }} ">Войти</a> |
                   <a href=" {{ route('register') }} ">Зарегистрироваться</a></h6>

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
               <li><a href=" {{ route('test') }} ">Тесты</a></li>
            </ul>
          </div>

        </div>
      </nav> 
    </div>
  </div>
</header>