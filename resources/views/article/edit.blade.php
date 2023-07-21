<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">
                    Modifica Articolo: {{$article->title}}
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">

                <livewire:article-edit-form
                    articleId='{{$article->id}}'
                />

            </div>
        </div>
    </div>

</x-layout>