<x-app-layout>
    <div style="color: white;">
        <h1>Užsakymų sarašas</h1>
        <ul>
            @foreach($orders as $order)
            <li>{{ $order->user_id }}</li>
            <li>{{ $order->name }}</li>
            <li>{{ $order->surname }}</li>
            <li>{{ $order->address }}</li>
            <li>{{ $order->created_at }}</li>
            <li>{{ $order->updated_at }}</li>
            <br>
            
            @endforeach
        </ul>
    </div>

</x-app-layout>