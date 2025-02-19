@extends('layouts.app')

@section('content')

<div>
    <h1>Confirm</h1>
</div>
<form action="/user/thanks" method="POST" class="form">
    @csrf
    <table>
        <tr>
            <th>お名前</th>
            <td>
                <span>
                    {{ $contact['first_name'] }} {{ $contact['last_name'] }}
                </span>
            </td>
        </tr>
        <tr>
            <th>性別</th>
            <td>
                @switch( $contact['gender'] )
                    @case(1)
                        <span>男</span>
                        @break
                    @case(2)
                        <span>女</span>
                        @break
                    @case(3)
                        <span>その他</span>
                        @break
                    @default
                        <span>エラー</span>
                @endswitch
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                <span>{{ $contact['email'] }}</span>
            </td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td>
                <span>{{ $contact['tel'] }}</span>
            </td>
        </tr>
        <tr>
            <th>住所</th>
            <td>
                <span>{{ $contact['address'] }}</span>
            </td>
        </tr>
        <tr>
            <th>建物名</th>
            <td>
                <span>{{ $contact['building'] }}</span>
            </td>
        </tr>
        <tr>
            <th>お問い合わせの種類</th>
            <td>
                <span>{{ $contact['categry'] }}</span>
            </td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>
                <span>{{ $contact['detail'] }}</span>
            </td>
        </tr>
    </table>
    <div>
        <button type="submit">送信</button>
        {{-- <a href="./index">修正</a> --}}
    </div>
    <input type="hidden" name='category_id' value="{{ $contact['categry'] }}">
    <input type="hidden" name='first_name' value="{{ $contact['first_name'] }}">
    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
    <input type="hidden" name='gender' value="{{ $contact['gender'] }}">
    <input type="hidden" name='email' value="{{ $contact['email'] }}">
    <input type="hidden" name='tel' value="{{ $contact['tel'] }}">
    <input type="hidden" name='address' value="{{ $contact['address'] }}">
    <input type="hidden" name='building' value="{{ $contact['building'] }}">
    <input type="hidden" name='detail' value="{{ $contact['detail'] }}">
</form>
@endsection