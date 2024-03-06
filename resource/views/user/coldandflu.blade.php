@extends('user.app')
    
    @section('title','coldandflu')

    @section('content')
    @foreach($data as $products2)
    <div class="item d-inline-block ml-3 py-3">
    <div class="card-doctor">
        <div class="header">
            <img src="{{ asset('storage/products2/' .$products2->image) }}" alt="{{ $products2->name }}" style="height:300px"/>
        </div>
        <div class="body">
            <p class="text-xl mb-0">{{$products2->name}}</p>
            <span class="text-sm text-grey">{{$products2->category}}</span>
        </div>
        <div class="footer">
            <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
    </div>
</div>
            @endforeach
    @endsection