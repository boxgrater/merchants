 <div class="page-header">
    <h1>{{ $merchant->name }}</h1>
  </div>

 <div id="merchant-reps" class="col-sm-12">
   <div class="panel panel-primary">
   
   <div class="panel-heading">
     <h2 class="panel-title">Reps</h2>
     <div class="pull-right"><a class="btn btn-info btn-sm" href="{{ route('merchantreps.create', ['merchant_id'=>$merchant->id]) }}"><span class="fa fa-plus"></span> Add Rep</a></div>
     <div class="clearfix"></div>
   </div>

   <ul class="list-group">
     @foreach($merchant->reps as $rep)
     <li class="list-group-item">{{ $rep->first }} {{ $rep->last }} <a href="{{ route('merchantreps.edit', ['id'=>$rep->id]) }}">Edit</a></li>
     @endforeach
   </ul>
 </div>
 </div>

  <div id="merchant-products" class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">Products</h2>
      </div>
      <ul class="list-group">
        @foreach($merchant->products as $product)
        <li class="list-group-item"><a href="{{ route('products.show', ['id'=> $product->id]) }}">{{ $product->description }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>


  