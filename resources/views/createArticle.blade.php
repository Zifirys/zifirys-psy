@extends('yield.base')

@section('title', 'Создание статьи')


@section('content')

  <main>
    <div class="wrapper">
      <div class="container">
        <div class="row">

          <div class="col-lg-2"></div>

          <div class="col-lg-8">

            <form class="create" method="post" action="create">
              <div class="form-group">
                <p>Тема/название</p><input type="name" class="form-control input-lg">
                <p><textarea name="text"></textarea></p>
              </div>
              <button class="btn btn-lg btn-default pull-right">восстановить</button>
            </form>

           
          </div>

        </div>
      </div>
    </div>
  </main>

@endsection