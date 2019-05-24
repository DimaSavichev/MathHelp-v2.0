@extends("layouts.main")

@section("heading","Площадь треугольника")

@section("description","Вычисляет площадь треугольника по трём его сторонам")

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

