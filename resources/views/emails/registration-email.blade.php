@component('mail::message')
# Registration Confirmation

## Congratulations {{ $user->name }}!

You have joined our site and now have access to the following benefits:

* create your ads easily
* transparency and trust to fellow buyer
* update your ads easily

@component('mail::button', ['url' =>  $url])
Visit Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::panel', ['url' => ''])
You can update or edit your ads by visiting your account <a href="{{ config('app.url') }}/account/info">here</a>.
@endcomponent

@endcomponent


