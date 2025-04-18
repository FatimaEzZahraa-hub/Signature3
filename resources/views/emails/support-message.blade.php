@component('mail::message')
# Nouveau message de support

**Nom :** {{ $name }}  
**Email :** {{ $email }}  
**Sujet :** {{ $subject }}

**Message :**  
{{ $message }}

@component('mail::button', ['url' => 'mailto:' . $email])
Répondre à l'utilisateur
@endcomponent

Merci,  
L'équipe de support EduTrustSign
@endcomponent 