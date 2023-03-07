@extends('layouts.app')

@php
    $tagsArray = explode(' ', $wishItem->tags);

    $createdAt = new \DateTime($wishItem->created_at);
    $createdAtString = $createdAt->format('Y M j');

    $updatedAt = new \DateTime($wishItem->updated_at);
    $updatedAtString = '';
    if($updatedAt !== $createdAt) {
        $updatedAtString .= $updatedAt->format('Y M j');
    }
@endphp

@section('content')
    <div class="wish-container">
        <h1 class="wish_name">{{$wishItem->name}}</h1>
        <div class="wish_main-info">
            <p class="wish_category">Category: {{$wishItem->category}}</p>
            <div class="wish_dates">
                <p>Created: {{$createdAtString}}</p>
                @if(!empty($updatedAtString))
                    <p>Updated: {{$updatedAtString}}</p>
                @endif
            </div>
        </div>
        <p class="wish_price">{{$wishItem->price}} &euro;</p>
        <div class="wish_store">
            @if(!is_null($wishItem->store_name))
                <p class="wish_store-name">{{$wishItem->store_name}}</p>
            @endif
            @if(!is_null($wishItem->store_url))
                <a href="{{$wishItem->store_url}}" class="wish_store-url" target="_blank"><i class="fa-solid fa-arrow-right"></i> Go to website</a>
            @endif
        </div>
        <p>Tags:</p>
        <div class="item_tags">
            @foreach($tagsArray as $tag)
                <p class="item_tag">{{$tag}}</p>
            @endforeach
        </div>
        @if(!is_null($wishItem->reflection))
            <p>Reflection:</p>
            <p class="wish_reflection">{{$wishItem->reflection}}</p>
        @endif
        <div class="wish_buttons">
            <a href="{{route('wishlist.edit', $wishItem->id)}}" class="button button--bigger wish_button">Edit</a>
            <form method="post" action="{{route('wishlist.update', $wishItem->id)}}" class="wish_button">
                @method('PUT')
                @csrf
                <input type="hidden" name="bought" value="1">
                <button type="submit" class="button--bigger wish-button_button">Bought it</button>
            </form>
            <form method="post" action="{{route('wishlist.update', $wishItem->id)}}" class="wish_button">
                @method('PUT')
                @csrf
                <input type="hidden" name="graveyard" value="1">
                <button type="submit" class="button--bigger wish-button_button">Don't want it anymore</button>
            </form>
        </div>
    </div>
@endsection
