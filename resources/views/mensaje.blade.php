@component('mail::message')
# {{ $mensaje->nombre }} le ha mandado un mensaje a la pagina

El mensaje era:

## Asunto: {{ $mensaje->asunto }}

{{ $mensaje->mensaje}}


Gracias,<br>
{{ config('app.name') }}
@endcomponent
