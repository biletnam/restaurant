
@extends('layout.header_footer')
@section('content')
<hr>

<div class="container category_menu">
  <div class="row navbar-collapse collapse">
    <ul class="filter-cats">
      <li><a href="#">All</a></li>
      <li><a href="#">Appetizers</a></li>
      <li><a href="#">Breakfast</a></li>
      <li><a href="#">Lunch</a></li>
      <li><a href="#">Dinner</a></li>
      <li><a href="#">Beverages</a></li>
    </ul>
  </div>
</div>

<hr>

<div class="container">
  <div class="row">
    @foreach ($lists as $list)
    <div class="product col-md-4">
      <div class="wrap-product">
        <div class="depiction">
          <div class="img">
            <a href="#">
              <img src="/image/{{$list->image}}">
            </a>
          </div>
          <div class="name">
            <a href="#">{{$list->name}}</a>
          </div>
        </div>
        <div class="complement">
          <div class="wrap-ingredients">
            <div class="ingredients">
              <center>
              @foreach ($ingredients as $ingredient)
                @if ($ingredient->menu_id == $list->id)
                  @foreach ($names as $name)
                    @if ($name->id == $ingredient->ingredient_id)
                      <a href="#">{{$name->ingredient}} </a>
                    @endif
                  @endforeach
                @endif
              @endforeach
              </center>
            </div>
            <hr>
            <hr>
          </div>
          <div class="price">
            <span>${{$list->price}}</span>
            <form method="post" action="/waiter">
              {{csrf_field()}}

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Order</th>
                      <th>Quantity</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="vertical-align: middle;">
                        <input class="form-control" size="5" type="text" value="{{$order->id}}" name="order" >
                        <input class="form-control" type="hidden" value="{{$list->id}}" name="dish">
                      </td>
                      <td style="vertical-align: middle;">
                        <select class="form-control" name="quantity">
                          <option value="1" selected>1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                        </select>
                      </td>
                      <td><button type="submit" class="btn btn-primary">Add</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <form action="/total" method="post">
    {{csrf_field()}}
    <button name="order" type="submit" class="btn btn-primary" value="{{$order->id}}">Order</button>
  </form>
</div>
<hr />
@endsection
