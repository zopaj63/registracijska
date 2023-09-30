<h1>Welcome blade</h1>
@if(session("succes"))
    {{session("succes")}}
@elseif(session("error"))
    {{session("error")}}
@endif

