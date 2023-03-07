@extends('layouts.app')

@section('content')
    <div class="dashboard_container">
        <a href="{{route('wishlist.create')}}" class="button button--bigger dashboard_add">Add new wish</a>
        <div class="dashboard_yearly-summary">
            <p>This year you've saved: <span>{{$savedAmount}}</span> &euro;</p>
            <p>This year you've spent: <span>{{$spentAmount}}</span> &euro;</p>
        </div>
        <div class="pause-list_container">
            <h1 class="pause-list_title">Pause list</h1>
            <div class="pause-list">
                @if(!empty($pauseList))
                    @foreach($pauseList as $item)
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
                                <form method="post" action="{{route('wishlist.update', $item['id'])}}" class="wish_button">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="pause-add" value="1">
                                    <button type="submit" class="button--bigger wish-button_button">Yes</button>
                                </form>
                                <form method="post" action="{{route('wishlist.update', $item['id'])}}" class="wish_button">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="graveyard" value="1">
                                    <button type="submit" class="button--bigger wish-button_button">No</button>
                                </form>
                                <form method="post" action="{{route('wishlist.update', $item['id'])}}" class="wish_button">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="bought" value="1">
                                    <button type="submit" class="button--bigger wish-button_button">Already bought it</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="no-show">No items to show</p>
                @endif
            </div>
        </div>
    </div>
@endsection
