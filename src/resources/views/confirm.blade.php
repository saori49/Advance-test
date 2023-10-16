<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{asset('css/sanitize.css')}}" >
  <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
</head>
<body>
  <div class="confirm__content">
    <div class="confirm__heading">
      <h2>内容確認</h2>
    </div>
    <form class="form" action="/thanks" method="post">
      @csrf
      <div class="confirm-table">
        <table class="confirm-table__inner">
          <tr class="confirm-table__row">
            <th class="confirm-table__header">お名前</th>
            <td class="confirm-table__text">
              <div class="name-wrap">
                <input type="text" name="first-name" value="{{$contact['first-name']}} " readonly>
                <input type="text" name="last-name" value="{{$contact['last-name']}} " readonly>
              </div>
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">性別</th>
            <td class="confirm-table__text">
              <input type="radio" name="gender" value="{{$contact['gender_id']}}" readonly>
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">メールアドレス</th>
            <td class="confirm-table__text">
              <input type="email" name="email" value="{{$contact['email']}}" readonly>
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">郵便番号</th>
            <td class="confirm-table__text">
              <input type="text" name="postcode" value="{{$contact['postcode']}}" readonly>
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">住所</th>
            <td class="confirm-table__text">
              <input type="text" name="address" value="{{$contact['address']}}" readonly>
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header">建物名</th>
            <td class="confirm-table__text">
              <input type="text" name="building_name" value="{{$contact['building_name']}}" readonly>
            </td>
          </tr>

          <tr class="confirm-table__row">
            <th class="confirm-table__header" >ご意見</th>
            <td class="confirm-table__text">
              <textarea name="opinion"> {{$contact['opinion']}} </textarea>
            </td>
          </tr>
        </table>
      </div>
    </form>
      <div class="form__button-wrap">
        <form  class="form__button-inner-submit" action="/thanks" method="post">
          @csrf
          <button class="form__button-submit" type="submit" >送信</button>
        </form>
        <form class="form__button-inner-redirect" action="/" method="post">
          @csrf
          <button class="form__button-redirect"  type="submit">修正する</button>
        </form>
      </div>
  </div>
</body>

