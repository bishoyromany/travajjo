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
                'title' => 'To You',
                'class' => 'to-you default-design',
                'cats' => [
                    [
                        'name' => 'Fashion Jewelry',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Beauty Products',
                        'icon' => 'fashion.png'
                    ],
                    [
                        'name' => 'Clothing',
                        'icon' => 'cloth.png'
                    ],
                    [
                        'name' => 'Organic Foods',
                        'icon' => 'organic.png'
                    ],
                    [
                        'name' => 'Perfume',
                        'icon' => 'perfume.png'
                    ],
                ]
            ],
            [
                'title' => 'To Your Surroundings',
                'class' => 'to-your-surroundings default-design',
                'cats' => [
                    [
                        'name' => 'Paintings',
                        'icon' => 'paint.png'
                    ],
                    [
                        'name' => 'Crockery',
                        'icon' => 'crock.png'
                    ],
                    [
                        'name' => 'Home Decor',
                        'icon' => 'home.png'
                    ],
                    [
                        'name' => 'Office Decor',
                        'icon' => 'office.png'
                    ],
                    [
                        'name' => 'Esential Oils',
                        'icon' => 'oil.png'
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

        return redirect()->back()->with('success', ['Thanks , for sharing your request . We will get back to you soon with the requested catalogs']);
    }
}
