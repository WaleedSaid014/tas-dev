@component('mail::message')
# Rest Account

Welcome {{$data['data']->name }} <br> The body of your message.

@component('mail::button', ['url' => url('supervisor/rest/password/'.$data['token'])])
Click here to rest password
@endcomponent

Or<br>
copy this link <br><a target="_blank" href="{{ url('supervisor/rest/password/'.$data['token']) }}">  {{ url('supervisor/rest/password/'.$data['token'])}}</a>
Thanks,<br>
for use Website
{{ config('app.name') }}
@endcomponent
