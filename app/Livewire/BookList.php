<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\Attributes\Title;

class BookList extends Component
{


    public $term = '';



    public function delete(Book $book){

        $book->delete();

    }

    #[Title('Book List - Home')]
    public function render()
    {

        if ($this->term) {

            return view('livewire.book-list', [
                'books' => Book::where('title', 'LIKE', "%{$this->term}%")->get(),
            ]);

        }


        return view('livewire.book-list', [
            'books' => Book::all()
        ]);
    }
}
