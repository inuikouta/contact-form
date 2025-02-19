@extends('layouts.app')

@section('content')
<form class="form" action="/logout" method="POST">
    @csrf
    <button>ログアウト</button>
</form>
@endsection