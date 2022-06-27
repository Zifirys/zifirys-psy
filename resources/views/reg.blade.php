@extends('headerFooter')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="col-lg-2"></div>

          <div class="col-lg-8">

            <form class="reg">
            <div class="form-group">
              <input type="name" placeholder="Ваше имя пользователя" class="form-control input-lg">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Ваш пароль" class="form-control input-lg">
            </div>
            <div class="form-group">
              <input type="email" placeholder="Ваша почта" class="form-control input-lg">
            </div>
            <button class="btn btn-lg btn-default pull-right">отправить</button>
          </form>

           
          </div>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>


@endsection