<h1>Welcome blade</h1>
<p>Uspješna/neuspješna registracija o čemu svjedoče poruke ispod:</p>

@if(session("succes"))
    {{session("succes")}}
@elseif(session("error"))
    {{session("error")}}
@endif

<h3>Registrirani korisnici</h3>
<ol>
    @foreach($korisniks as $korisnik)
    <li>
        {{$korisnik->name}}
        {{$korisnik->email}}
        <hr>
    </li>
    @endforeach
</ol>

