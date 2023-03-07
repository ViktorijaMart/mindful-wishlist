<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Services\WishlistService;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(private WishlistService $wishlistService)
    {

    }

    public function index(): View
    {
        $userId = Auth::user()->id;

        $userWishlist = Wishlist::all()->where('user_id', $userId)->toArray();

        $pauseList = $this->wishlistService->getPauseList($userWishlist);
        $savedAmount = $this->wishlistService->getSavedAmount($userWishlist);
        $spentAmount = $this->wishlistService->getSpentAmount($userWishlist);

        return view('dashboard', ['pauseList' => $pauseList, 'savedAmount' => $savedAmount, 'spentAmount' => $spentAmount]);
    }
}
