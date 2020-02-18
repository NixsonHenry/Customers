
@extends('layouts.app')


@section('title', 'Details for ' . $customer->name)
    

@section('content')

    <div class="container">

        <div class="row my-1"> 
            <div class="col-12">
                <h1>Details for {{ $customer->name }}</h1>
                <p><a class="btn btn-info" href="/customers/{{ $customer->id }}/edit">Edit Customer</a></p>

                <form action="/customers/{{ $customer->id }}" method="POST">
                  @method("DELETE")
                  @csrf

                  <button class="btn btn-danger" type="submit">Delete Customer</button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
            <p><strong>Name: </strong>{{ $customer->name }}</p>
            <p><strong>Email: </strong>{{ $customer->email }}</p>
            <p><strong>Company: </strong>{{ $customer->company->name }}</p>
            </div>
        </div>


       

    </div>

@endsection



