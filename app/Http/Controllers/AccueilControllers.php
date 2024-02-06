<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AccueilControllers extends Controller{
    public function loadPageData(){
        $books = DB::table('books')
        ->select('books.*', 'categories.nom as categorieName', 'users.nom as userName')
        ->join('categories', 'books.categorieFK', '=', 'categories.id')
        ->join('users', 'books.bibliothecaireFK', '=', 'users.id')
        ->whereColumn('quantite', '>', 'reservedQte')
        ->orderBy('created_at')
        ->get();

        $categories = DB::table('categories')
        ->orderBy('created_at')
        ->get();

        return view('home', compact('books', 'categories'));
    }

    public function reserveBook($bookId){
        DB::beginTransaction();
        try {
            DB::Table('books')->whereid($bookId)->Increment('reservedQte');
            DB::table('reservations')->insert([
                'userFK' => Session::get('userID'),
                'bookFK' => $bookId,
                'returned' => false,
                'returned_at' => date('Y-m-d H:i:s', strtotime("+15 day"))
            ]);
            DB::commit(); // all good
        } catch (\Exception $e) {
            DB::rollback(); // something went wrong
        }

        return redirect('/Accueil');
        // return $bookId;
    }

    public function searchBookByName(Request $request){

        $books = DB::table('books')
        ->select('books.*', 'categories.nom as categorieName')
        ->join('categories', 'books.categorieFK', '=', 'categories.id')
        ->whereColumn('quantite', '>', 'reservedQte')
        ->where('titre', 'LIKE', '%' . $request->bookName . '%')
        ->orderBy('created_at')
        ->get();

        return view('exploreBooks', compact('books'));
    }

    public function searchBookByCategorieMeth1($categorieId){
        $books = DB::table('books')
        ->select('books.*', 'categories.nom  as categorieName')
        ->join('categories', 'books.categorieFK', '=', 'categories.id')
        ->whereColumn('quantite', '>', 'reservedQte')
        ->where('categorieFK', $categorieId)
        ->get();
        
        return view('exploreBooks', compact('books'));
    }
    
    public function searchBookByCategorieMeth2(Request $request){
        $books = DB::table('categories')
        ->select('books.*', 'categories.nom  as categorieName')
        ->join('books', 'categories.id', '=', 'books.categorieFK')
        ->whereColumn('quantite', '>', 'reservedQte')
        ->where('categories.nom', $request->categorieName)
        ->orderBy('created_at')
        ->get();
        
        return view('exploreBooks', compact('books'));
    }
}
