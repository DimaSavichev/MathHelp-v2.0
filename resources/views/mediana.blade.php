@extends("layouts.main")

@section("heading","Формула медианы")

@section("description","Вычисляет длину медианы треугольника по трём его сторонам")

@section("answer")
    @if (($a != "") and ($b != "") and ($c != ""))
        {{$res}}
    @endif
@endsection

@section("form")
    <form>
        @csrf
        <input type="text" name="a" value="{{ $a }}"/>
        <input type="text" name="b" value="{{ $b }}"/>
        <input type="text" name="c" value="{{ $c }}"/>
        <input type="submit">
    </form>
@endsection

