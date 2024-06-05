<x-mail::message>

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

Subscription Cancellation Request:

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Reason:** {{ $data['subject'] }}  

**Message:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
