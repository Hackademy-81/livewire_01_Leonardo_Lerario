<div>
    <input type="text" wire:model='search '>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">titolo</th>
            <th scope="col">sottotitolo</th>
            <th scope="col">body</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->body}}</td>
            <td>
                <button class="btn btn-danger" wire:click='deleteArticle({{$article->id}})' >Elimina</button>
                <a href="{{route('article.edit', $article->id)}}" class="btn btn-warning">Modifica</a>
            </td>
        </tr>
            @endforeach

        </tbody>
      </table>
</div>
