<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Layout;
use Livewire\Component;


class CreateBook extends Component
{

    public $title;
    public $author;
    public $rating;



    public function save()
    {
        Book::create([
        'title' => $this->title,
        'author' => $this->author,
        'rating' => $this->rating
        ]);

        $this->redirect('/', navigate: true);


    }



    #[Layout('components.layouts.second')]
    public function render()
    {
        return view('livewire.create-book');
    }
}
