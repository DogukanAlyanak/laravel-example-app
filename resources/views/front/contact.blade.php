@extends("layouts.front")

@section("css")

@endsection

@section("content")

Contact Page
<hr>
<div class="col-8 mx-auto">
    <form action="{{ route("contact") }}" method="post">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

        <input type="text" class="forn-control" name="fullname">
        <br>
        <input type="email" class="forn-control" name="email">
        <br>
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
</div>
<hr>
<div class="col-8 mx-auto">
    {{-- <form action="{{ route("user", ['id' => 5, "name" => "aygun"]) }}" method="post"> --}}
    <form action="{{ route("user", ['id' => 5]) }}" method="post">
        @csrf
        <input type="text" class="forn-control" name="fullname">
        <br>
        <input type="email" class="forn-control" name="email">
        <br>
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
</div>
<hr>
<div class="col-8 mx-auto">
    Support Form
    <form action="{{ route('support-form.support') }}" method="post">
        @csrf
        <input type="text" class="forn-control" name="fullname">
        <br>
        <input type="email" class="forn-control" name="email">
        <br>
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
</div>
<hr>
<div class="col-8 mx-auto">
    Patch Kullanımı
    <form action="{{ route('user.update', ['id' => 9]) }}" method="post">
        @csrf
        @method("PATCH")
        {{-- {{ method_field("PATCH") }} --}}
        <input type="email" class="forn-control" name="email">
        <br>
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
</div>
<hr>
<div class="col-8 mx-auto">
    Put Kullanımı
    <form action="{{ route('user.updateAll', ['id' => 9]) }}" method="post">
        @csrf
        @method("PUT")
        <input type="text" class="forn-control" name="fullname">
        <br>
        <input type="email" class="forn-control" name="email">
        <br>
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
</div>
<hr>
<div class="col-8 mx-auto">
    Delete Kullanımı
    <form action="{{ route('user.delete', ['id' => 9]) }}" method="post">
        @csrf
        @method("DELETE")
        <button class="btn btn-success" type="submit">Gönder</button>
    </form>
</div>
@endsection

@section("js")

@endsection