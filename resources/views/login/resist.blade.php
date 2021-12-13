
<!doctype html>
<html lang="ja">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('/css/login/resist.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/reset.css')}}" rel="stylesheet">
    <title>新規登録画面</title>
</head>
 
<body>
  <div class="wrapp">
    <div class="border col-7">
        <br>
        <h2 class="text">新規登録</h2>
        <br>
        <div class="row">
            <div class="col-md">
                <form method="POST" action="/resist/confirm" novalidate>
                @csrf
                    <div class="form-group">
                        <label>氏名：</label>
                        @error('name')
                         <p class="alert" >{{ $message }}</p>
                        @enderror
                        <input name="name" type="text" class="form-control" placeholder="山田太郎" value="{{ old('name') }}" require>
                    </div>
                    <div class="form-group">
                        <label>メールアドレス：</label>
                        @error('email')
                         <p class="alert" >{{ $message }}</p>
                        @enderror
                        <input name="email" type="text" class="form-control" placeholder="test@co.jp" value="{{ old('email') }}"  require>
                    </div>
                    <div class="form-group">
                        <label>パスワード：</label>
                        @error('password')
                         <p class="alert" >{{ $message }}</p>
                        @enderror
                        <input name="password" type="password" class="form-control" require>
                    </div>
                    <div class="form-group">
                        <label>確認用パスワード：</label>
                        @error('password_confirmation')
                         <p class="alert" >{{ $message }}</p>
                        @enderror
                        <input name="password_confirmation" type="password" class="form-control" require>
                    </div>
                    <div class="row center-block text-center">
                        <div class="col-1">
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-outline-primary btn-block">確認</button>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-outline-secondary btn-block" onclick="location.href='/'">戻る</button>
                        </div>

                        </div>
                        <div class="col-1">
                    </div>
                    <br>
                </form>
            </div>
        </div>

    </div>
  </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
 
</html>
