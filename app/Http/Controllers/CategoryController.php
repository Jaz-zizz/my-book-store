<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{
    // กำหนดโครงสร้างข้อมูลแบบหมวดหมู่สินค้าโดยใช้ตัวแปรคงที่ (Constant Array)
    const CATEGORIES = [
        'CT001' => [
            'code' => 'CT001', 
            'name' => 'PHP'
        ],
        'CT002' => [
            'code' => 'CT002', 
            'name' => 'JavaScript'
        ],
        'CT003' => [
            'code' => 'CT003', 
            'name' => 'Python'
        ],
    ];

    /**
     * Route: categories.list
     * Path: /categories
     */
    public function list(): View
    {
        return view('categories.list', [
            'categories' => self::CATEGORIES,
        ]);
    }

    /**
     * Route: categories.view
     * Path: /categories/{category}
     */
    public function view(string $categoryCode): View
    {
        // 1. ดึงข้อมูลหมวดหมู่ปัจจุบันที่เลือก
        $category = self::CATEGORIES[$categoryCode] ?? null;

        // 2. กรองสินค้าจาก ProductController ที่มี catCode ตรงกับหมวดหมู่นี้
        // อ้างอิงถึง ProductController::PRODUCTS ข้ามคลาสตามที่แลปแนะนำ
        $filteredProducts = array_filter(ProductController::PRODUCTS, function ($product) use ($categoryCode) {
            return $product['catCode'] === $categoryCode;
        });

        return view('categories.view', [
            'category' => $category,
            'products' => $filteredProducts,
        ]);
    }
}