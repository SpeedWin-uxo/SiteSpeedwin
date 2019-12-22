@component('mail::message')
# Bonjour SpeedWin
# Sujet: Demande d'emploi
 - {{ $postule['name'] }}


  @component('mail::panel')
 #Je suis
 {{  $postule['name'] }}
 #Mon Numéro est
  {{  $postule['num'] }}
  #Je veux postuler pour l'offre
   {{  $postule['offre'] }}
  @endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcompone
