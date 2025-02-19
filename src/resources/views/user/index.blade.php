@extends('layouts.app')

@section('content')
<div class="title">
    <h2>Contact</h2>
</div>
@foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
<form action="/user/confirm" method="POST" class="form">
    @csrf
    <table>
        <tr>
            <th>お名前<span>※</span></th>
            <td>
                <input type="text" name="first_name" placeholder="例 山田" value="{{ old('first_name') }}">
                <input type="text" name="last_name" placeholder="例 太郎" value="{{ old('last_name') }}">
            </td>
        </tr>
        <tr>
            <th>性別<span>※</span></th>
            <td>
                <div>
                    <input type="radio" id="male" name="gender" value="1" checked="checked">
                    <label for="male">男性</label>
                </div>
                <div>
                    <input type="radio" id="woman" name="gender" value="2">
                    <label for="woman">女性</label>
                </div>
                <div>
                    <input type="radio" id="others" name="gender" value="3">
                    <label for="others">その他</label>
                </div>
            </td>
        </tr>
        <tr>
            <th>メールアドレス<span>※</span></th>
            <td>
                <input type="email" name="email" placeholder="例 test@example.com" value="{{ old('email') }}">
            </td>
        </tr>
        <tr>
            <th>電話番号<span>※</span></th>
            <td>
                <input type="text" name="phone[0]" maxlength="5" placeholder="080" value="{{ old('phone[0]') }}">
                -
                <input type="text" name="phone[1]" maxlength="5" placeholder="1234" value="{{ old('phone[1]') }}">
                -
                <input type="text" name="phone[2]" maxlength="5" placeholder="5678" value="{{ old('phone[2]') }}">
            </td>
        </tr>
        <tr>
            <th>住所<span>※</span></th>
            <td>
                <input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷区1-2-3" value="{{ old('address') }}">
            </td>
        </tr>
        <tr>
            <th>建物名</th>
            <td>
                <input type="text" name="building" placeholder="例 千駄ヶ谷マンション101" value="{{ old('building') }}">
            </td>
        </tr>
        <tr>
            <th>お問い合わせの種類<span>※</span></th>
            <td>
                <select name="categry" id="categrys">
                    <option value="">選択してください</option>
                    @foreach($items as $item)
                    <option value="{{ $item->id }}">{{ $item->content }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <th>お問い合わせ内容<span>※</span></th>
            <td>
                <input type="text" name="detail" placeholder="お問い合わせ内容をご記載下さい" value="{{ old('detail') }}">
            </td>
        </tr>
        <tr>
            <td>
                <button>確認画面</button>
            </td>
        </tr>
    </table>
</form>
@endsection