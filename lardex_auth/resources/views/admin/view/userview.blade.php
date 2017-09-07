@extends('layouts.master')
@section('content')
<div class="right_col" role="main">
          <div class="">
           

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                      
                     @foreach($users as $user)
            <footer>
                 {{$user->name}}
          <div class="pull-right">
             
            <a href="/user/{{$user->id}}/edit"><button class="btn btn-success">Edit</button></a>
              @if(!($user->name==Auth::user()->name))
              <form method="post" action="/user/{{$user->id}}" class="pull-right" style="margin-left:25px">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
              @endif
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