<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
</style>

<div class="container">


<br/>
{{-- <a href="{{ route('orders.pdfview',['download'=>'pdf']) }}">Download PDF</a> --}}

<h3>Your order information</h3>
<table>
    <tr>
        <th>No</th>
        <th>Tracking number</th>
        <th>Date</th>
        <th>Shipping Address</th>
        <th>Shipping City</th>
        <th>Shipping ZIP</th>
        <th>Shipping Country</th>
    </tr>
    <tr>
        {{-- <td>{{ $order->id }}</td>
        <td>{{ $order->tracking_number }}</td>
        <td>{{ $order->customer->firstname}}</td>
        <td>{{ $order->phone }}</td> --}}
    </tr>
    {{-- @endforeach --}}
</table>
</div>

</body>
</html>

