<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrowing;
use App\Models\User;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('library', compact('books'));
    }

    public function borrow(Request $request, Book $book)
    {
        // Cek apakah buku tersedia untuk dipinjam
        if ($book->available) {
            // Buat entri peminjaman
            $borrowing = new Borrowing();
            $borrowing->user_id = $request->user()->id;
            $borrowing->book_id = $book->id;
            $borrowing->borrowed_at = now();
            $borrowing->save();

            // Update status buku menjadi "borrowed"
            $book->available = false;
            $book->save();

            return redirect()->back()->with('success', 'Book borrowed successfully.');
        } else {
            return redirect()->back()->with('error', 'Book is not available for borrowing.');
        }
    }
    public function history()
    {
        $user = User::findOrFail(auth()->user()->id);
        $borrowings = $user->borrowings()->with('book')->get();

        return view('history', compact('borrowings'));
    }

    public function returnBook(Borrowing $borrowing)
    {
        // Set tanggal pengembalian buku
        $borrowing->returned_at = now();
        $borrowing->save();

        // Ubah status buku menjadi tersedia
        $book = $borrowing->book;
        $book->available = true;
        $book->save();

        return redirect()->back()->with('success', 'Book returned successfully.');
    }
}
