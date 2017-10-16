@component('mail::message')

# Introduction

The body of your message.

-one

-two

-three

@component('mail::button', ['url' => ' https://laracasts.com'])

Start Browsing

@endcomponent

@component('mail::panel', ['url' => ''])

Lorem ipsum doler eit amat

@endcomponent
Thanks,<br>

{{ config('app.name') }}

@endcomponent
