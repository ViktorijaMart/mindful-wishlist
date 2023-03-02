<?php

namespace App\Services;

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
