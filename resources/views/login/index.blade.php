@extends('yield.base')


@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-2"></div>

          <div class="col-lg-8 col-md-8">

          <form action="" class="" method="post">

            <div class="form-group">
              <input name="name" id="name" type="name" placeholder="Ваше имя пользователя" class="form-control input-lg">
            </div>
            <div class="form-group">
              <input name="password" id="password" type="password" placeholder="Ваш пароль" class="form-control input-lg">
            </div>
            <button type="submit" class="btn btn-lg btn-default pull-right">войти</button>
            <div class="forget"><h4><a href=" {{ route('recover') }}">Забыли пароль?</a></h4></div>
          </form>

          </div>
        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>

@endsection