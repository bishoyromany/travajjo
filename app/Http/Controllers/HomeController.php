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
                        'name' => 'Fashion Jewelry2',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry3',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry4',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry5',
                        'icon' => 'jew.png'
                    ],
                ]
            ],
            [
                'title' => 'To Your Surroundings',
                'class' => 'to-your-surroundings default-design',
                'cats' => [
                    [
                        'name' => 'Fashion Jewelry6',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry7',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry8',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry9',
                        'icon' => 'jew.png'
                    ],
                    [
                        'name' => 'Fashion Jewelry10',
                        'icon' => 'jew.png'
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
