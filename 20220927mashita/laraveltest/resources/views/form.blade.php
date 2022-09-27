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

<body>
  <div class="container">
    <div class="form">
      <h1 class="form-title ttl">お問い合わせ</h1>
      <div class="form-body">
        <form action="/form" method="post">
          @csrf
          <div class="form-item">
            <div class="form-item-label">お名前<span class="form-item-required">※</span></div>
            <div class="form-item-input">
              <div class="form-item-input-name">
                <input type="text" name="familyname" value="{{ old('familyname') }}">
                <p class="example">例) 山田</p>
                @error('familyname')
                <tr>
                  <th>Error</th>
                  <td>{{$message}}</td>
                </tr>
                @enderror
              </div>
              <div class="form-item-input-name">
                <input type="text" name="name" value="{{ old('name') }}">
                <p class="example">例) 太郎</p>
                @error('name')
                <tr>
                  <th>Error</th>
                  <td>{{$message}}</td>
                </tr>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-item">
            <div class="form-item-label">性別<span class="form-item-required">※</span></div>
            <div class="form-item-input">
              <input type="radio" name="gender" value="1" checked>
              <span class="gender-option">男性</span>
              <input type="radio" name="gender" value="2">
              <span class="gender-option">女性</span>
            </div>
            <!-- checkedの保持出来ない -->
          </div>
          <div class="form-item">
            <div class="form-item-label">メールアドレス<span class="form-item-required">※</span></div>
            <div class="form-item-input">
              <input type="text" name="email" value="{{ old('email') }}">
              <p class="example">例) test@example.com</p>
              @error('email')
              <tr>
                <th>Error</th>
                <td>{{$message}}</td>
              </tr>
              @enderror
            </div>
          </div>
          <div class="form-item">
            <div class="form-item-label">郵便番号<span class="form-item-required">※</span></div>
            <div class="form-item-input">
              <span>〒</span>
              <input type="text" name="postcode" value="{{ old('postcode') }}">
              <p class="example">例) 123-4567</p>
              @error('postcode')
              <tr>
                <th>Error</th>
                <td>{{$message}}</td>
              </tr>
              @enderror
            </div>
          </div>
          <div class="form-item">
            <div class="form-item-label">住所<span class="form-item-required">※</span></div>
            <div class="form-item-input">
              <input type="text" name="address" value="{{ old('address') }}">
              <p class="example">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
              @error('address')
              <tr>
                <th>Error</th>
                <td>{{$message}}</td>
              </tr>
              @enderror
            </div>
          </div>
          <div class="form-item">
            <div class="form-item-label">建物名</div>
            <div class="form-item-input">
              <input type="text" name="building_name" value="{{ old('building_name') }}">
              <p class="example">例) 千駄ヶ谷マンション101</p>
            </div>
          </div>
          <div class="form-item">
            <div class="form-item-label">ご意見<span class="form-item-required">※</span></div>
            <div class="form-item-input">
              <textarea class="form-option" name="option" cols="20" rows="6">{{ old('option') }}</textarea>
              @error('option')
              <tr>
                <th>Error</th>
                <td>{{$message}}</td>
              </tr>
              @enderror
            </div>
          </div>
        <input type="submit" value="確認" class="btn btn-form">
        </form>
      </div>
    </div>
  </div>

  <script>
    
  </script>
</body>
</html>
