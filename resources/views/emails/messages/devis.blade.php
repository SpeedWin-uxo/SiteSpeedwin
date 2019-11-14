@component('mail::message')
# Bonjour SpeedWin
# Sujet: Demande de Devis
 - {{ $devis['name'] }}


  @component('mail::panel')
 #Je m'appelle
 {{ $devis['name'] }}
 #Mon Numéro est
  {{ $devis['phone'] }}
  #Je veux avoir un devis pour le services
   {{ $devis['service'] }}
  @endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcompone
