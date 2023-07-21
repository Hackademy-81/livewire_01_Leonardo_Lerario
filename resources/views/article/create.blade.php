<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">
                   Crea il tuo 
                   Articolo
                </h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                {{-- <h1>Counter</h1>
                <p id="counter">1</p>
                <button id="increment" class="btn btn-primary">+</button> --}}
                <livewire:article-form/>

            </div>
        </div>
    </div>
    {{-- <script>
        window.addEventListener('DOMContentLoaded', ()=> {
            let btn = document.querySelector('#increment');
            let countValue = document.querySelector('#counter').innerHTML;
            btn.addEventListener('click', ()=> {
                let counterElement = document.querySelector('#counter')
                counterElement.innerHtml = countValue++;
            })
        })
    </script> --}}

</x-layout>