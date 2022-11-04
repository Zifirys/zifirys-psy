@extends('yield.base')

@section('title', 'Статьи')


@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="col-lg-2"></div>

          <div class="col-lg-8">

            <form action="" role="search">
              <div class="form-group">
                <div class="input-group"> 
                  <div class="input-group-btn">
                    <a href="create" class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-pencil"></i></a>
                  </div>       
                  <input type="search" class="form-control input-lg" placeholder="поиск по названию">
                  <div class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </div>
            </form>

            <section class="articles">
              <a href="#"><h3>заголовок статьи</h3>
              <p>текст статьи</p>
              </a>
            </section>

            <section class="articles">
              <a href="#"><h3>ОКР</h3>
              <p>Обсесси́вно-компульси́вное расстро́йство (окр, невро́з навя́зчивых состоя́ний) — психическое расстройство. Может иметь хронический, прогрессирующий или эпизодический характер</p>
              </a>
            </section>

            <section class="articles">
              <a href="#"><h3>Симптомы ОКР</h3>
              <p>1.мизофобии (когда присутствует навязчивых страх загрязнения с вытекающими последствиями и поведением человека); <br> 2.навязчивые сомнения (когда человек постоянно испытывает сомнения в отношении того, выключил ли он утюг, газ, свет, закрыты ли краны с водой); <br> 3.навязчивый счет или что-либо, связанное с цифрами (складывание цифр, повторение номеров определенное количество раз и пр.); <br> 4.навязчивые мысли в отношении «симметрии» (может проявляться в одежде, расположении предметов интерьера и пр.).</p>
              </a>
            </section>

          </div>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>

@endsection
