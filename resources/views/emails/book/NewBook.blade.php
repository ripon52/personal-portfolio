@component('mail::message')
# Introduction

Book Information is : {{ $book }}

@component('mail::button', ['url' => ''])
View Book
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
