<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('/js/app.js')}}" defer></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/home/home.css') }}" rel="stylesheet">
    <title>ホーム画面</title>
</head>
<body>
  <main>
    <!-- タスク一覧画面 -->
    <div class="container">
        @if(session('login_success'))
          <div class="alert alert-success">
              {{ session('login_success')}}
          </div>
        @endif
        @if(session('del_msg'))
          <div class="alert alert-success">
              {{ session('del_msg')}}
          </div>
        @endif
      <div class="row">
       <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
           <div class="panel-body">
            <a href="#" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
           </div>
           <div class="list-group">
            @foreach($folders as $folder)
              <a href="" class="list-group-item">
                {{ $folder->title }}
              </a>
            @endforeach
           </div>
        </nav>
       </div>
       <div class="column col-md-8">
        <!-- ここにタスクが表示される -->
       </div>
      </div>
      <div class="mt-5">
          <h3>プロフィール</h3>
          <ul>
              <li>名前：{{Auth::user()->name}}</li>
              <li>メールアドレス：{{Auth::user()->email}}</li>
          </ul>
      </div>
      <div class="box">
        @foreach($users as $user)
            <ul id="profile">
                <li>{{$user->id}}</li>
                <li>{{$user->name}}</li>
                <li>{{$user->email}}</li>
                <a href="home/detail/{{$user->id}}" class="">詳細</a>
                <a href="home/{{$user->id}}" class="">削除</a>
            </ul>
        @endforeach
      </div>
    </div>
  </main>
    
</body>
</html>