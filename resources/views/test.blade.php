<h1>Hello, User!</h1>

@if(Auth::check())
    <p>Secret text</p>
    {{ Auth::user()->email }}
@endif

@auth()
    <p>Secret text2</p>
    {{ Auth::user()->name }}
@endauth