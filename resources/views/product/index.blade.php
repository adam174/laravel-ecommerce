@extends('layouts.app')


@section('content')

<!-- Page Content -->
 

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
