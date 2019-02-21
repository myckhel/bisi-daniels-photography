@component('mail::message')
# Attendance Marked Notice

The attendance for {{explode(' ', $event->event_edate)[0]}} has been marked successfully.

Attendance: {{ $attendance->attendance ? 'Attending' : 'Not Attending' }}

@component('mail::button', ['url' => $url])
View History
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
