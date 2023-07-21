<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleForm extends Component
{   
    public $title;
    public $subtitle;
    public $body;

    protected $rules = [
        'title' => 'required|min:6',
        'subtitle' => 'required|min:6',
        'body' => 'required|min:15',

    ];

    protected $message = [

        'title.required' => 'il titolo è richiesto',
        'subtitle.required' => 'il sottotitolo è richiesto',
        'body.required' => 'il corpo è richietso',
        'title.min' => 'e troppo corto',
        'subtitle.min' => 'e troppo corto',
        'body.min' => 'e troppo corto',

    ];

    public function render()
    {
        return view('livewire.article-form');
    }

    // public function updatedTitle(){
    //     $this->validateOnly('title');
    // }

    // public function updatedSubtitle(){
    //     $this->validateOnly('subtitle');
    // }

    // public function updatedBody(){
    //     $this->validateOnly('body');
    // }

    public function updated($propertyName){
        $this->validateOnly('$propertyName');
    }

    public function save(){
        $this->validate();


        Article::create(
            [
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'body' => $this->body,

            ]
        );

        $this->reset();
    }


}
