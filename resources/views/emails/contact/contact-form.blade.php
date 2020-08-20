@component('mail::message')

        # New message from your website!

    {{$data['name']}} ({{$data['email']}}) sent you a message!


    {{$data['message']}}

@endcomponent
