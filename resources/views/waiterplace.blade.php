
@extends('layout.header_footer')
@section('content')
<div style="width: 300px; margin: 50px auto;">

  <h1>This is waiterplace page</h1>

  <br>

  <form method="post" action="/waiterplace">
    {{csrf_field()}}

    <div class="table-responsive">
      <table class="table">
        <!-- <thead>
          <tr>
            <th>Order</th>
            <th>Dish</th>
            <th>Quantity</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="1" style="height: 50px;width: 50px;">1</button></td>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="2" style="height: 50px;width: 50px;">2</button></td>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="3" style="height: 50px;width: 50px;">3</button></td>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="4" style="height: 50px;width: 50px;">4</button></td>
          </tr>
          <tr>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="5" style="height: 50px;width: 50px;">5</button></td>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="6" style="height: 50px;width: 50px;">6</button></td>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="7" style="height: 50px;width: 50px;">7</button></td>
            <td style="vertical-align: middle;"><button type="submit" class="btn btn-primary" name="place" value="8" style="height: 50px;width: 50px;">8</button></td>
          </tr>
        </tbody>
      </table>

    </div>

  </form>
</div>

<div style="width: 300px; margin: 50px auto;">

  <h1>Ready dishes</h1>

  <br>

  <form method="post" action="/archive">
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
              <button type="submit" class="btn btn-primary pull-right" name="archive" value="{{$order->id}}">
                Archive
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
