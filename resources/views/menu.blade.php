    @extends('layout.header_footer')
    @section('content')
      <hr />

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

      <hr />

      <div class="container">
        <div class="row">
          @foreach ($lists as $list)
          <div class="product col-md-4">
            <div class="wrap-product">
              <div class="depiction">
                <div class="img">
                  <a href="#">
                    <img src="/image/crispy-bacon-sandwich.jpg">
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
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
        <hr />
      @endsection
