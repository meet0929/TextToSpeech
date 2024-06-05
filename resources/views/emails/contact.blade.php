<x-mail::message>

<!-- <x-mail::button :url="''">
Button Text
</x-mail::button> -->

New Contact Form Submission

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Subject:** {{ $data['subject'] }}  

**Message:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
