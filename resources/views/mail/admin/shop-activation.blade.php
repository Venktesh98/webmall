@component('mail::message')
# Shop Activation Request.Please accept the Request 

Here are the details

Shop Name: {{ $shop->name }}
<br>
Shop Owner: {{$shop->owner->name}}

@component('mail::button', ['url' => url('/admin/shops')])
Manage Shops
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
