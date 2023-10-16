
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{asset('css/sanitize.css')}}" >
  <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <div class="contact-form__content">
    <div class="content-form__heading">
      <h2>お問い合わせ</h2>
    </div>
    <form class="form" action="/contact/confirm" method="post">
      @csrf
      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">お名前<span>※</span></li>
        </ul>
        <ul class="form__group-content-name">
          <li class="form__input-text-name">
            <input type="text" name="first-name" value="{{ old('first-name') }}"></br>
            <span>&emsp;例) 山田</span>
            <div class="error">
              @error('first-name')
              {{$message}}
            @enderror
          </div>
          </li>
          <li class="form__input-text-name">
            <input type="text" name="last-name" value="{{ old('last-name') }}"></br>
            <span>&emsp;例) 太郎</span>
            <div class="error">
              @error('last-name')
              {{$message}}
              @enderror
            </div>
          </li>
        </ul>
      </div>

      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">性別<span>※</span></li>
        </ul>
        <ul class="form__group-content">
          <li class="form__input-radio">
            <div>
              <input type="radio" name="gender_id" value="1" checked>
              <label>男性</label>
            </div>
            <div>
              <input type="radio" name="gender_id" value="2" >
              <label>女性</label>
            </div>
            <div class="error">
              @error('gender')
              {{$message}}
              @enderror
            </div>
          </li>
        </ul>
      </div>

      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">メールアドレス<span>※</span></li>
        </ul>
        <ul class="form__group-content">
          <li class="form__input-text">
            <input type="email" name="email" value="{{ old('email') }}">
          </li>
          <li class="form__input--example">
            <span>&emsp;例) test@example.com</span>
            <div class="error">
              @error('email')
              {{$message}}
              @enderror
            </div>
          </li>
        </ul>
      </div>

      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">郵便番号<span>※</span></li>
        </ul>
        <ul class="form__group-content">
          <li class="form__input-text-postcode">
            <label>〒</label>&emsp;&emsp;<input type="text" name="postcode" value="{{ old('postcode') }}">
          </li>
          <li class="form__input--example">
            <span>&emsp;&emsp;&emsp;&emsp;例) 123-4567</span>
            <div class="error">
              @error('postcode')
              {{$message}}
              @enderror
            </div>
          </li>
        </ul>
      </div>

      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">住所<span>※</span></li>
        </ul>
        <ul class="form__group-content">
          <li class="form__input-text">
            <input type="text" name="address" value="{{ old('address') }}">
          </li>
          <li class="form__input--example">
            <span>&emsp;例) 東京都渋谷区千駄ヶ谷1-2-3</span>
            <div class="error">
              @error('address')
              {{$message}}
              @enderror
            </div>
          </li>
        </ul>
      </div>

      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">建物名</li>
        </ul>
        <ul class="form__group-content">
          <li class="form__input-text">
            <input type="text" name="building_name" value="{{ old('building_name') }}">
          </li>
          <li class="form__input--example">
            <span>&emsp;例) 千駄ヶ谷マンション101</span>
          </li>
        </ul>
      </div>

      <div class="form__group">
        <ul class="form__group-title">
          <li class="form__label--item">ご意見<span>※</span></li>
        </ul>
        <ul class="form__group-content">
          <li class="form__input-text" value="{{ old('opinion') }}">
            <textarea name="opinion" ></textarea>
            <div class="error">
              @error('opinion')
              {{$message}}
              @enderror
            </div>
          </li>
        </ul>
      </div>

      <div class="form__button">
        <button class="form__button-submit" type="submit">確認</button>
      </div>
    </form>

  </div>