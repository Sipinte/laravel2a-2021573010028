<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\Http;

class BookSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$response = Http::get('https://www.googleapis.com/books/v1/volumes?q=programming'); // Ubah kueri pencarian sesuai


if ($response->ok()) {
$books = $response->json()['items'];

foreach ($books as $bookData) {
$book = new Book();
$book->title = $bookData['volumeInfo']['title'] ?? 'Unknown Title';
$book->author = $bookData['volumeInfo']['authors'][0] ?? 'Unknown Author';
$book->image = $bookData['volumeInfo']['imageLinks']['thumbnail'] ?? 'default.jpg'; // Ganti dengan nama file gambar yang sesuai
$book->description = $bookData['volumeInfo']['description'] ?? 'Unknown description';
$book->save();
}
}
}
}
