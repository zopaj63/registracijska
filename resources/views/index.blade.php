<h3>Registrirani korisnici</h3>
<ol>
    @foreach($korisniks as $korisnik)
    <li>
        <b>Ime:</b> {{$korisnik->name}} :::
        <b>E-mail:</b> {{$korisnik->email}} :::
        <b>Datum:</b> {{$korisnik->created_at}}
        <hr>
    </li>
    @endforeach
</ol>
<br>

<!--povratak na formu-->
<a href="{{route('register')}}">Registracijska forma</a>
