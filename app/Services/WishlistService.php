<?php

namespace App\Services;

use App\Models\Wishlist;

class WishlistService
{
    public function showWishlist(array $wishlist): array
    {
        $wishlistToShow = [];

        foreach ($wishlist as $item) {
            if(is_null($item['reminder']) && $item['bought'] === 0 && $item['graveyard'] === 0) {
                $wishlistToShow[] = $item;
            }
        }

        return $wishlistToShow;
    }

    public function update(array $request, string $id): void
    {
        $wishItem = Wishlist::findOrFail($id);

        if(array_key_exists('name', $request) && !is_null($request['name'])) {
            $wishItem->name = $request['name'];
        }

        if(array_key_exists('price', $request) && !is_null($request['price'])) {
            $wishItem->price = $request['price'];
        }

        if(array_key_exists('store_name', $request) && !is_null($request['store_name'])) {
            $wishItem->store_name = $request['store_name'];
        }

        if(array_key_exists('store_url', $request) && !is_null($request['store_url'])) {
            $wishItem->store_url = $request['store_url'];
        }

        if(array_key_exists('category', $request) && !is_null($request['category'])) {
            $wishItem->category = $request['category'];
        }

        if(array_key_exists('reflection', $request) && !is_null($request['reflection'])) {
            $wishItem->reflection = $request['reflection'];
        }

        if(array_key_exists('bought', $request)) {
            $wishItem->bought = 1;
        }

        if(array_key_exists('graveyard', $request)) {
            $wishItem->graveyard = 1;
        }

        $wishItem->save();
    }

    public function getTags(array $request): string
    {
        $tags = [];

        if($request['afford'] === 'yes') {
            $tags[] = 'affordable';
        } else {
            $tags[] = 'expensive';
        }

        if($request['rent'] === 'yes') {
            $tags[] = 'rent';
        }

        if(array_key_exists('high-quality', $request)) {
            $tags[] = 'high-quality';
        }

        if(array_key_exists('low-quality', $request)) {
            $tags[] = 'low-quality';
        }

        if(array_key_exists('healthy', $request)) {
            $tags[] = 'healthy';
        }

        if(array_key_exists('sustainable', $request)) {
            $tags[] = 'sustainable';
        }

        return implode(' ', $tags);
    }
}
