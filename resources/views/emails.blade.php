<x-mail::message>
    # Contact Enquiry

    Name: {{ $first_name }} {{ $last_name }}  
    Email: {{ $email }}  
    Phone: {{ $phone }}  
    Message:  
    {{ $comments }}

    {{ config('app.name') }}
</x-mail::message>