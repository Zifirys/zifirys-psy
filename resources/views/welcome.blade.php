@extends('headerFooter')

@section('content')

<main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <section class="col-lg-3 col-md-3">
            <div class="panel">
              <div class="panel-heading">
                <div class="sidebar-header"><p>Телефон доверия</p></div>
                <div class="panel-body"><a href="tel tel:8-800-2000-122">8-800-2000-122</a></div>
              </div>
            </div>
          </section>


          <section class="col-lg-8 col-md-8 ">
            <h1 class="">Немного о сайте</h1>

            <section class="page-one">
              <h3>Статьи</h3>
              <p>На сайте есть раздел с статьями. <br>Авторизовавшиеся пользователи могут не только прочитать их, но и написать свои.</p>
              <a href="articles" class="btn btn-default pull-right">Перейти</a>
            </section>

            <section class="page-one">
              <h3>Тесты</h3>
              <p>Помимо статей на сайте имеются тесты. <br>Не стоит воспринимать их серьезно, они созданы ислючительно для развлечения.</p>
              <a href="test" class="btn btn-default pull-right">Перейти</a>
            </section>

            <section class="page-one">
              <h3>Мы</h3>
              <p>Если у вас возникли неполадки, тогда просим вас обратиться к нам.</p>
              <a href="mailto:zifirys@mail.ru" class="btn btn-default pull-right">Написать письмо</a>
            </section>
          </section>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>

@endsection