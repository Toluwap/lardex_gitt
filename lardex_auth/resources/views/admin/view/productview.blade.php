@extends('layouts.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                     @foreach($products as $product)
            <footer>
                <div class="col-md-5">{{$product->name}} <div class="pull-right">{{$product->amount}}</div></div>
          <div class="pull-right">
             
            <a href="/product/{{$product->id}}/edit"><button class="btn btn-success">Edit</button></a>
              <form method="post" action="/product/{{$product->id}}" class="pull-right" style="margin-left:25px">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
          </div>
          <div class="clearfix"></div>
        </footer>
        @endforeach
                    
                    <div class="clearfix"></div>
                  </div>
                  
        <!-- /page content -->

        <!-- footer content -->
    <!-- /footer content -->
      </div>
    </div>
              </div>
            </div>
          </div>
@endsection