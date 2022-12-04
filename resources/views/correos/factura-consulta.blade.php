@component('mail::message')
# Notificacion de su factura de la consulta
 
Le recordamos que el paciente {{$paciente->nombre}} ya tiene disponible su factura de la consulta

@component('mail::button', ['url', route('paciente/show', $paciente)])
Ver factura 
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
