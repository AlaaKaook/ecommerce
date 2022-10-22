@php
$total = 0;
$subtotal = 0;
@endphp


@if (session('cart'))


    @foreach (session('cart') as $id => $details)
        <tr>
            <div class="row">
                <td>
                    <h3 class="nomargin">{{ $details['name'] }}</h3>
                </td>

                <td data-th="image">
                    <img src="{{ asset('producte_img/' . $details['image']) }}" alt="image prod" width="150"
                        height="75">
                </td>



                <td data-th="Subtotal">
                    <h4>count pieces : $ {{ $details['original_price'] * $details['quantity'] }}</h4>
                </td>
                <td data-th="Quantity">
                    <h4>Quantity : {{ $details['quantity'] }}</h4>
                </td>
                <td><a href="{{ route('remove_item', $id) }}" class="btn btn-danger">Delete Item</a></td>

                <hr>
            </div>
        </tr>
        @php $total += $details['original_price'] * $details['quantity']; @endphp
    @endforeach
    <tr>
        <h3> The Total Price : </h3>
        <td>
            <h4>$ {{ $total }}</h4>
        </td>
        <form action="{{ route('checkout') }}" method="GET">
            <td><button type="submit" class="btn btn-info">Check Out</button></td>
        </form>

        <hr>
    </tr>
@endif
