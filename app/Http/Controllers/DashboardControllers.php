<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DashboardControllers extends Controller{
    public function loadPageData(){
        $books = DB::table('books')
        ->select('books.*', 'categories.nom as categorieName', 'users.nom as userName')
        ->join('categories', 'books.categorieFK', '=', 'categories.id')
        ->join('users', 'books.bibliothecaireFK', '=', 'users.id')
        ->orderBy('created_at')
        ->get();

        $categories = DB::table('categories')->orderBy('created_at')->get();

        $reservations = DB::table('reservations')
        ->select('reservations.*', 'books.titre as bookTitle', 'users.nom as userName', 'users.email as userEmail')
        ->join('books', 'reservations.bookFK', '=', 'books.id')
        ->join('users', 'reservations.userFK', '=', 'users.id')
        ->where('returned', false)
        ->whereNot('bookFK', null)
        ->orderBy('created_at')->get();

        return view('dashboard', compact('books', 'categories', 'reservations'));
    }

    public function addCategorie(Request $request){
        if ($request->has('image')) {
            $file = $request->image;
            $fileName = 'Categorie' . uniqid() . date('d-m-Y_H-i-s') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('image/Categories'), $fileName);
            $CategorieImgDBPath = '/image/Categories/' . $fileName;
        }else $CategorieImgDBPath = '/image/Categories/defaultCategorieImg.png';

        DB::table('categories')
        ->insertOrIgnore([
            'nom' => $request->nom,
            'image' => $CategorieImgDBPath
        ]);

        return redirect('/Dashboard');
    }

    public function addBook(Request $request){
        if ($request->has('image')) {
            $file = $request->image;
            $fileName = 'BookCover' . uniqid() . date('d-m-Y_H-i-s') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('image/BookCovers'), $fileName);
            $BookCoverDBPath = '/image/BookCovers/' . $fileName;
        }else $BookCoverDBPath = '/image/BookCovers/defaultBookCover.png';
        
        DB::table('books')->insert([
            'titre' => $request->titre,
            'auteur' => $request->auteur,
            'editeur' => $request->editeur,
            'image' => $BookCoverDBPath,
            'description' => $request->description,
            'quantite' => $request->quantite,
            'reservedQte' => 0,
            'bibliothecaireFK' => Session::get('userID'),
            'categorieFK' => $request->categorie
        ]);
    
        return redirect('/Dashboard');
    }

    public function cancelBookReservation ($bookId, $reservationID){
        DB::beginTransaction();
        try {
            DB::table('books')->whereid($bookId)->decrement('reservedQte');
            DB::table('reservations')->whereid($reservationID)
            ->update([
                'returned' =>true,
            ]);
            DB::commit(); // all good
        } catch (\Exception $e) {
            DB::rollback(); // something went wrong
        }

        return redirect('/Dashboard');
    }

    public function deleteBook($bookId){
        DB::table('books')->whereid($bookId)->delete();
        
        return redirect('/Dashboard');
    }

        
}
