<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\CategoryController;

class ProductController extends Controller
{
    const PRODUCTS = [
        'BK001' => [
            'code' => 'BK001',
            'catCode' => 'CT001',
            'name' => 'Programming PHP',
            'description' => <<<'EOT'
Why is PHP the most widely used programming language on the web?
This updated edition teaches everything you need to know to create
effective web applications using the latest features in PHP 7.4.
You’ll start with the big picture and then dive into:
language syntax
programming techniques
and other details
using examples that illustrate both correct usage and common idioms.
EOT
        ],

        'BK002' => [
            'code' => 'BK002',
            'catCode' => 'CT002',
            'name' => 'JavaScript: The Definitive Guide',
            'description' => <<<'EOT'
JavaScript is the programming language of the web and is used by more
software developers today than any other programming language.
For nearly 25 years this best seller has been the go-to guide for
JavaScript programmers.
EOT
        ],

        'BK003' => [
            'code' => 'BK003',
            'catCode' => 'CT001',
            'name' => 'Learning PHP, MySQL & JavaScript',
            'description' => <<<'EOT'
Build interactive, data driven websites with the potent combination of
open source technologies and web standards.
PHP
MySQL
JavaScript
CSS
HTML5
EOT
        ],

        'BK004' => [
            'code' => 'BK004',
            'catCode' => 'CT003',
            'name' => 'Python Crash Course, 2nd Edition',
            'description' => <<<'EOT'
In the first half of the book, you'll learn basic programming concepts,
such as variables, lists, classes, and loops.
EOT
        ],
    ];


    public function list(): View
    {
        return view('products.list', [
            'products' => self::PRODUCTS,
        ]);
    }


    public function view(string $productCode): View
    {
        return view('products.view', [
            'product' => self::PRODUCTS[$productCode],
        ]);
    }
}
