@component('mail::message', ['color' => 'red'])
# New Event Notice

Hello,

Will you attend the {{$event->name}} on: {{$event->event_edate}}


@component('mail::button', ['url' => $url.'?attendance=1', 'color' => 'success'])
Will Attend
@endcomponent

@component('mail::button', ['url' => $url.'?attendance=0', 'color' => 'red'])
Will not Attend
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
