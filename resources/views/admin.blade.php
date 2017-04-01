@extends('layout.header_footer')
@section('content')
<div style="width: 300px; margin: 50px auto;">
  <form method="post" action="{{ route('adminStore') }}">
    {{csrf_field()}}

    <label>Name
      <input type="text" name="name" placeholder="name">
    </label>

    <br>

    <label>Price
      <input type="text" name="price" placeholder="price">
    </label>

    <br>

    <label>Category
      <select name='category'>
        <option value="0">All</option>
        <option value="1">Appetizers</option>
        <option value="2">Breakfast</option>
        <option value="3">Lunch</option>
        <option value="4">Dinner</option>
        <option value="5">Beverages</option>
      </select>
    </label>

    <br>

    <label>Weight
      <input type="text" name="weight">
    </label>

    <br>

    <input type="submit" value="Create">
  </form>
</div>
@endsection
