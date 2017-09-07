@extends('layouts.master')

@section('content')
    <div class="row" style="background-color:white">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Product
                </div>
                <div class="panel-body">
                    
                    <form method="post" action="/product/{{$product->id}}">
                        {{method_field('PUT')}}
                            {{csrf_field()}}
                        
                        <div class="form-group">
                        <label for='content'>Product Name</label>
                        <input name="name" class="form-control" rows="3" style="resize:none" value="{{$product->name}}">
                        </div>
                      
                        <div class="form-group">
                            <label for='post_on'>Price</label>
                            <input type="text" name="amount" class="form-control" value="{{$product->amount}}">
                        </div>
                        <input type="submit" class="btn btn-success pull-right" value="Edit">
                    </form>
                    
                
                </div>
                </div>
            
        
        </div>
            

    </div>
@endsection