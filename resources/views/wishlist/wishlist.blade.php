@extends('layouts.app')

@section('content')
    <div class="pause-list">
        @foreach($wishlist as $item)
            <div class="pause-item">
                <p class="pause-item_category">{{ucfirst($item['category'])}}</p>
                <p class="pause-item_name">{{$item['name']}}</p>
                <p class="pause-item_price">{{$item['price']}} &euro;</p>
                <div class="pause-item_store">
                    @if(!is_null($item['store_name']))
                        <p class="pause-item_store-name">{{$item['store_name']}}</p>
                    @endif
                    @if(!is_null($item['store_url']))
                        <a href="{{$item['store_url']}}" class="pause-item_store-url" target="_blank"><i class="fa-solid fa-arrow-right"></i> Go to website</a>
                    @endif
                </div>
                <div class="item_tags">
                    @php
                        $tagsArray = explode(' ', $item['tags'])
                    @endphp
                    @foreach($tagsArray as $tag)
                        <p class="item_tag">{{$tag}}</p>
                    @endforeach
                </div>
                <div class="pause-item_buttons">
                    <a href="{{route('wishlist.show', $item['id'])}}" class="button">More Info</a>
                    <button>Bought it</button>
                    <button>No longer want it</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
