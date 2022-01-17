@component('mail::message')
    # **Nouvelle demande de contact !**

    - Coordonnées du demandeur
    Nom: {{ $name }}
    Prénom:{{ $LastName }}
    Email: {{ $email }}

    - Message:
    {{ $message  }}





@endcomponent
