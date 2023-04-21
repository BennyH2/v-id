@component('mail::message')
# Welcome {{ $data['name'] }} to Generations A/V ID Creation Tool

Click the button below to direct yourself to the staff wizard.

@component('mail::button', ['url' => $url])
Go to Staff Wizard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
