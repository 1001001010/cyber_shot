<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class BasketController extends Controller
{
    public function index() {
        $basketItems = Basket::with('product')->where('user_id', Auth::id())->get();

        // Подсчет общей стоимости всех товаров в корзине
        $totalPrice = $basketItems->sum(function ($item) {
            return $item->product->price;
        });

        return view('basket', [
            'basketItems' => $basketItems,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function upload(Request $request)
    {
        $request->validate([
           'product' => 'required',
        ]);
        $product = Product::where('article', $request->product)->first();
        if ($product) {
            Basket::create([
                'product_id' => $product->id,
                'user_id' => Auth::id()
            ]);
        }

        return redirect(route('basket.index'));
    }
}
