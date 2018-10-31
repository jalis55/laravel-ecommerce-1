@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="container">
                   
                 <img src="cinqueterre.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236">
                
                </div>
                   <?php
                   $id=Auth::user()->id;
                    $user_order=DB::table('orders')->where('user_id',$id)->get();

                   ?>
                   Total orders:{{count($user_order)}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
