@component('mail::message')
# Bonjour SpeedWin

 - {{ $data['name'] }}


  @component('mail::panel')
 {{ $data['msg'] }}
  @endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
