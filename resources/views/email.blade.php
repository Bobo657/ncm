@isset($msg['name'])
<p> Name :  {{ $msg['name'] }}</p> 
@endisset
<p> Email: {{ $msg['email'] }}</p>
@isset($msg['subject'] )
<p> Subject : {{ $msg['subject'] }}</p>
@endisset
<p> Phone Number :   {{ $msg['number'] }}</p>
<p> Message : {{ $msg['message'] }}</p>

