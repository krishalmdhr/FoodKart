@component('mail::message')
# Invoice Paid

Thanks for the purchase

Here is your receipt:

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $item)
        <tr>
            <td scope="row">{{$item->name}}</td>
            <td scope="row">{{$item->pivot->quantity}}</td>
            <td scope="row">{{$item->pivot->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

Total: {{$order->grand_total}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
