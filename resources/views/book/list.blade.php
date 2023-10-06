<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ブログ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ブログ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="#">ブログ一覧 <span class="sr-only"></span></a>
          <a class="nav-item nav-link" href="#">ブログ投稿</a>
        </div>
      </div>
    </nav>
    </header>
    <br>
    <div class="container">
    <div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>日付</th>
              <th>タイトル</th>
              <th></th>
          </tr>
          <tr>
              <td>1</td>
              <td>2020/06/30</td>
              <td>テスト</td>
              <td></td>
          </tr>
      </table>
  </div>
</div>
    </div>
    <footer class="footer bg-dark  fixed-bottom">
    <div class="container text-center">
    <span class="text-light">©︎福のプログラミング講座</span>
</div>
    </footer>
</body>

</html>