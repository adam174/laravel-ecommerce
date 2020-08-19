@extends('layouts.app')


@section('content')

<!-- Page Content -->
  <div class="container-fluid">
    <h2> {{ $categoryName ?? null }} Products </h2>
    <div class="row">

      <div class="col-lg-3">

        <div class="list-group">
            <a href="/products" class="list-group-item">Tous les produits</a> 
            @foreach ($categories as $category)
        <a href="?category_id={{$category->id}}" class="list-group-item">{{$category->name}}</a> 
            @endforeach
         

        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
 @foreach ($products as $product)

        @include('product._single_product')
    @endforeach
        
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
