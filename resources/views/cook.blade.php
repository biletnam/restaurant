
@extends('layout.header_footer')
@section('content')
<div style="width: 300px; margin: 50px auto;">

  <h1>This is cook page</h1>

  <br>

  <form method="post" action="/cook">
    {{csrf_field()}}

    <div class="table-responsive">

      <table class="table">
        <thead>
          <tr>
            <th>Order#</th>
            <th>Dish</th>
            <th>Quantity</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          @foreach ($orders as $order)
          <tr>
            <td style="vertical-align: middle;">{{$order->order}}</td>
            <td style="vertical-align: middle;">{{$order->name}}</td>
            <td style="vertical-align: middle;">{{$order->quantity}}</td>
            <td>
              <button type="submit" class="btn btn-primary pull-right" name="done" value="{{$order->id}}">
                Done
              </button>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>

    </div>

  </form>
</div>
@endsection
