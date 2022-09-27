<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<!-- セッションで得たデータを表示したい -->
<body>
  <div class="container">
    <div class="confirm">
      <h1 class="confirm-title ttl">内容確認</h1>
      <form action="/confirm" method="post">
        @csrf
        <table>
          <tr class="confirm-item">
            <th>お名前</th>
            <td>{{ $input["familyname"] }} {{$input["name"]}}</td>
          </tr>
          <tr class="confirm-item">
            <th>性別</th>
            <td>@if('{{ $input["gender"] }}===1')
              男性
              @else
              女性
              @endif
            </td>
          </tr>
          <tr class="confirm-item">
            <th>メールアドレス</th>
            <td>{{ $input["email"] }}</td>
          </tr>
          <tr class="confirm-item">
            <th>郵便番号</th>
            <td>{{ $input["postcode"] }}</td>
          </tr>
          <tr class="confirm-item">
            <th>住所</th>
            <td>{{ $input["address"] }}</td>
          </tr>
          <tr class="confirm-item">
            <th>建物名</th>
            <td>{{ $input["building_name"] }}</td>
          </tr>
          <tr class="confirm-item">
            <th>ご意見</th>
            <td>{{ $input["option"] }}</td>
          </tr>
      </table>
      <input type="submit" value="送信" class="btn confirm-btn">
      <input type="submit" name="back" value="修正する" class="comfirm-modify">
      </form>
    </div>
  </div>
</body>
</html>