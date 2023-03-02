<?php

namespace App\Services;

class WishlistService
{
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
