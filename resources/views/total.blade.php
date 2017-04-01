
@extends('layout.header_footer')
@section('content')
<div style="width: 300px; margin: 50px auto;">

  <h1>This is total page</h1>
  <center>Order# {{$order->id}}</center>

  <br>

  <form method="post" action="/totalorder">
    {{csrf_field()}}

    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>Dish</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($dishes as $dish)
          <tr>
            <td style="vertical-align: middle;">{{$dish->name}}</td>
            <td style="vertical-align: middle;">{{$dish->quantity}}</td>
            <td style="vertical-align: middle;">{{$dish->price}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>

    <a href="/waiter" class="btn btn-primary">Back</a>
    <button type="submit" class="btn btn-primary pull-right" name="order" value="{{$order->id}}">Total order</button>

  </form>
</div>
@endsection
