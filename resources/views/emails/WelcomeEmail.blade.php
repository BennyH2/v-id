@component('mail::message')
# Welcome To {{ config('app.name') }} {{ $data['name'] }}!

Click the button below to reset your password.

@component('mail::button', ['url' => url('admin/password/reset/' . $data['token'])])
Reset Password
@endcomponent

If you did not request a password reset, please ignore this email. This password reset is only valid for the next 60 minutes.

Thanks,<br>
{{ config('app.name') }}

@component('mail::subcopy')
If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser: [{{ url('admin/password/reset/' . $data['token']) }}]({{ url('admin/password/reset/' . $data['token']) }})
@endcomponent
@endcomponent