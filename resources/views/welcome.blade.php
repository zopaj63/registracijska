<h1>Welcome blade</h1>
<p>Uspješna/neuspješna registracija o čemu svjedoče poruke ispod:</p>

@if(session("success"))
    {{session("success")}}
@elseif(session("error"))
    {{session("error")}}
@endif


