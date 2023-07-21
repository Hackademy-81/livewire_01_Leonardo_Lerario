<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleEditForm extends Component
{

    public $title;
    public $subtitle;
    public $body;
    public $articleId;

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
        return view('livewire.article-edit-form');
    }

    public function mount($articleId){
        $article = Article::findOrFail($articleId);
        $this->articleId= $articleId;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
        
    }

    public function updateArticle(){
        $article = Article::findOrFail($this->articleId);
        $article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,

        ]);
        return redirect()->route('article.index');
    }
}
