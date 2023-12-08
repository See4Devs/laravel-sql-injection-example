<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('term');

        // Vulnerable SQL query
        $sql = "SELECT * FROM products WHERE name LIKE '%" . $searchTerm . "%'";

        $products = mysqli_query($conn, $sql);

        return view('products.search', compact('products'));
    }
}
