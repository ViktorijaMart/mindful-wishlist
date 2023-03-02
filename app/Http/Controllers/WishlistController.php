<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Services\WishlistService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct(private WishlistService $wishlistService)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlistToShow = $this->wishlistService->showWishlist(Wishlist::all()->toArray());

        return view('wishlist.wishlist', ['wishlist' => $wishlistToShow]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('wishlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $wishItem = new Wishlist();
        $wishItem->user_id = Auth::user()->id;
        $wishItem->name = $request->name;
        $wishItem->price = $request->price;
        $wishItem->store_name = $request->store_name;
        $wishItem->store_url = $request->store_url;
        $wishItem->category = $request->category;
        $wishItem->tags = $this->wishlistService->getTags($request->toArray());
        $wishItem->reminder = null;
        $wishItem->reflection = $request->reflection;
        $wishItem->save();

        return redirect()->intended(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wishlist $wishlist)
    {
        //
    }
}
