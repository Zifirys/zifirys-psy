@extends('yield.base')

@section('title', 'Регистрация')

@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="col-lg-2"></div>

          <div class="col-lg-8">


          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li> {{ $error }} </li>
                @endforeach
              </ul>
            </div>
          @endif


          <form action=" {{ route('register_form') }} " class="reg" method="post">

            @csrf

            <div class="form-group">
              <input name="name" id="name" type="name" placeholder="Ваше имя пользователя" class="form-control input-lg">
            </div>
            <div class="form-group">
              <input name="password" id="password" type="password" placeholder="Ваш пароль" class="form-control input-lg">
            </div>
            <div class="form-group">
              <input name="email" id="email" type="email" placeholder="Ваша почта" class="form-control input-lg">
            </div>
            <button type="submit" class="btn btn-lg btn-default pull-right">отправить</button>
          </form>

           
          </div>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>


@endsection