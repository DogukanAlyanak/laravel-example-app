@extends("layouts.front")

@section("css")

@endsection

@section("content")
<br>



Yaş :     {{ $agfhhgge ?? "gelmedi" }}
<br>
Yaş :     {{ $age ?? $person->age }}
<br>
2.Değer : {{ $age ?? @$person->age }}
<br>
3.Değer : {{ $age ?? @$person->aa }}

<hr>
@if (isset($person) && isset($person->age))
    @switch($person->age)
        @case(10)
                Çocuk
        @break
        @case(20)
            Genç
        @break
        @default
            Yaşlandın
    @endswitch
@else
    Gelmedi
@endif
<hr>
@myDatetime("2024-03-30 12:12:12");
<hr>




@endsection
@section("js")
@endsection