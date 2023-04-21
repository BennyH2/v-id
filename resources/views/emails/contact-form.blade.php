@component('mail::message')
# New Contact Form Submission

**Name:** {{ $name }}

**Email:** {{ $email }}

**Phone:** {{ $phone }}

**Date:** {{ $date }}

**City:** {{ $city }}

**State:** {{ $state }}

**Message:**

{{ $message }}

@endcomponent
