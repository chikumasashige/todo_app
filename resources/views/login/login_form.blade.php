<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('/js/app.js')}}" defer></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/login/login.css') }}" rel="stylesheet">
    <title>ログイン</title>
</head>
  <body class="text-center">
    
<main class="form-signin">
  <form action=""></form>
  <form action="/" method="POST" novalidate>
    @csrf
    <img class="mb-4" src="../image/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">ログイン</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('login_errors'))
              <div class="alert alert-danger">
                  {{ session('login_errors')}}
              </div>
    @endif

    <label for="inputEmail" class="visually-hidden">メールアドレス</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="メールアドレス">
    <label for="inputPassword" class="visually-hidden">パスワード</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="パスワード">

    <button class="w-100 btn btn-lg btn-primary" type="submit">サインイン</button>
    <div class="resist">
      <a href="resist">新規登録</a>
    </div>  
  </form>
</main>


    
  </body>
</html>
