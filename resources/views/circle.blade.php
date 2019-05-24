@extends("layouts.main")

@section("heading","Площадь круга")

@section("description","Вычисляет площадь круга по его радиусу")

@section("answer")
    @if ($r != "")
        {{$r*pi()}}
    @endif
@endsection

@section("form")
    <form>
        @csrf
        <input type="text" name="r" value="{{ $r }}"/>
        <input type="submit">
    </form>
@endsection

