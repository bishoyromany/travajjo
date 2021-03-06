<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats = [
            [
                'title' => 'For You',
                'class' => 'to-you default-design',
                'cats' => [
                    [
                        'name' => 'Fashion Jewelry',
                        'icon' => 'ic-fashion-jewelry.svg'
                    ],
                    [
                        'name' => 'Beauty Products',
                        'icon' => 'ic-beauty-product.svg'
                    ],
                    [
                        'name' => 'Clothing',
                        'icon' => 'ic-clothings.svg'
                    ],
                    [
                        'name' => 'Organic Foods',
                        'icon' => 'ic-organic-food.svg'
                    ],
                    [
                        'name' => 'Perfumes',
                        'icon' => 'ic-perfume.svg'
                    ],
                ]
            ],
            [
                'title' => 'For Your Surroundings',
                'class' => 'to-your-surroundings default-design',
                'cats' => [
                    [
                        'name' => 'Paintings',
                        'icon' => 'ic-paintings.svg'
                    ],
                    [
                        'name' => 'Crockery',
                        'icon' => 'ic-crockery.svg'
                    ],
                    [
                        'name' => 'Home Decor',
                        'icon' => 'ic-home-decor.svg'
                    ],
                    [
                        'name' => 'Office Decor',
                        'icon' => 'ic-office-decor.svg'
                    ],
                    [
                        'name' => 'Essential Oils',
                        'icon' => 'ic-essential-oils.svg'
                    ],
                ]
            ],
        ];

        return view('home')->with(['cats' => $cats]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'cats' => 'required|array'
        ]);

        $request->merge(['cats' => json_encode($request->cats)]);

        Guest::create($request->only('email', 'cats'));

        return redirect()->back()->with('success', ['Thanks you! for sharing your details. We will reach out to you with the requested catalogue.']);
    }
}
