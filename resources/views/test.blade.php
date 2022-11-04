@extends('yield.base')

@section('title', 'Тесты')


@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-2"></div>

          <div class="col-lg-8 col-md-8">

            <form action="" role="search">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-sunglasses"></i></button>
                  </div>            
                  <input type="search" class="form-control input-lg" placeholder="поиск по названию">
                  <div class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
              </div>
            </form>

            <section>
              <span class="col-lg-6 col-md-6 tests">
                <a href="">
                  <img src="assets/img/apple.jpeg" alt="apple">
                  <h3>Какое ты яблоко?</h3>
                </a>
              </span>
              <span class="col-lg-6 col-md-6 tests">
                <a href="">
                  <img src="assets/img/winks.jpeg" alt="apple">
                  <h3>Какая ты феечка?</h3>
                </a>
              </span>
            </section>

            <section>
              <span class="col-lg-6 col-md-6 tests">
                <a href="">
                  <img src="assets/img/king.jpg" alt="apple">
                  <h3>Какая ты книга Стивена Кинга?</h3>
                </a>
              </span>
              <span class="col-lg-6 col-md-6 tests">
                <a href="">
                <img src="assets/img/metro.jpg" alt="apple">
                <h3>Кто ты из вселенно метро?</h3>
                </a>
              </span>
            </section>

          </div>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>

@endsection