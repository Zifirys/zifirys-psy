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
                <input type="email" placeholder="Ваша почта" class="form-control input-lg">
              </div>
              <button class="btn btn-lg btn-default pull-right">восстановить</button>
            </form>

           
          </div>

        </div>
      </div>

      <div class="clear"></div>

    </div>
  </main>

@endsection