<!doctype html>
<html lang="ja">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('/css/login/confirm.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/reset.css')}}" rel="stylesheet">
    <title>確認画面</title>
</head>
 
<body>
  <div class="wrapp">
    <div class="border col-7">
        <br>
        <h2 class="text">確認画面</h2>
        <br>
        <div class="row">
            <div class="col-md">
                <form method="POST" action="/resist/confirm/complete" novalidate>
                @csrf
                <input type="hidden" name="name" value="{{$params['name']}}" require>
                <input type="hidden" name="email" value="{{$params['email']}}" require>
                <input type="hidden" name="password" value="{{$params['password']}}" require>
                    <div class="form-group">
                        <label>氏名：</label>
                        <p>{{$params['name']}}</p>
                    </div>
                    <div class="form-group">
                        <label>メールアドレス：</label>
                        <p>{{$params['email']}}</p>
                    </div>
                    <div class="row center-block text-center">
                        <div class="col-1">
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-outline-primary btn-block">登録</button>
                        </div>
                        <div class="col-5">
                            <button type="button" class="btn btn-outline-secondary btn-block" onclick="history.back();">戻る</button>
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
