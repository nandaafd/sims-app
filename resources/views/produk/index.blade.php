@extends('layout.main')
@section('content')
    <form action="{{url('/logout')}}" method="post">
        @csrf @method('post')
        <button type="submit">logout</button>
    </form>
@endsection