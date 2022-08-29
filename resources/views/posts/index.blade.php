@include('crud.partials.header')

<section id="Posts">
    


    <div class="p-4">
        <div class="container-boutons">
        <div class="button-jaune btn-crud" id="button-2" onclick='location.href="{{ route('posts.create') }}"'>
                <div id="slide"></div>
                <a href="{{ route('posts.create') }}">AJOUTER UN ARTICLE</a>
            </div>

            <select name="categorie" id="categorie-select">
                <option value="All" selected>All</option>
                        @foreach ($categories as $key => $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                        @endforeach
            </select>
           
            
        </div>
        <div class="mt-2">
                @include('layouts.partials.messages')
        </div>

        <table class="table">
        <thead>
          <tr>
             <th width="5%">#</th>
             <th width="15%">Name</th>
             <th width="10%">Categorie</th>
             <th width="30%">Image</th>
             <th width="40%">Description</th>
             <th width="1%" colspan="3">Action</th>
          </tr>
        </thead>
            @foreach ($posts as $key => $post)
            @foreach ($categories as $key => $categorie)
                    @if($categorie->id == $post->categorie_id)
                    <tr class="{{$categorie->nom}}">
                    @endif
                @endforeach
                <th scope="row">{{ $post->id }}</th>
                <td class="titre">{{ $post->title }}</td>
                @foreach ($categories as $key => $categorie)
                    @if($categorie->id == $post->categorie_id)
                        <td class="categorie">{{ $categorie->nom }}</td>
                    @endif
                @endforeach
                
                <td class="image">
                    <img src="{{asset('images/posts/'.$post->images)}}" alt="">
                </td>
                <td class="descrition">
                    <p>{{$post->description}}</p>
                </td>
                <td class="actions"><a href="{{ route('posts.show', $post->id) }}" target="_blank"class="btn btn-warning btn-sm"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"/></svg></a></td>
                        <td class="actions"><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z"/></svg></a></td>
                        <td class="actions">
                            <form action="http://127.0.0.1:8000/posts/{{$post->id}}/delete" method="POST" accept-charset="UTF-8">
                                @csrf
                            <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-sm" type="submit" value=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM31.1 128H416V448C416 483.3 387.3 512 352 512H95.1C60.65 512 31.1 483.3 31.1 448V128zM111.1 208V432C111.1 440.8 119.2 448 127.1 448C136.8 448 143.1 440.8 143.1 432V208C143.1 199.2 136.8 192 127.1 192C119.2 192 111.1 199.2 111.1 208zM207.1 208V432C207.1 440.8 215.2 448 223.1 448C232.8 448 240 440.8 240 432V208C240 199.2 232.8 192 223.1 192C215.2 192 207.1 199.2 207.1 208zM304 208V432C304 440.8 311.2 448 320 448C328.8 448 336 440.8 336 432V208C336 199.2 328.8 192 320 192C311.2 192 304 199.2 304 208z"/></svg></button>
                            </form>
                        </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $posts->links() !!}
        </div>

    </div>
</section>
<script>
    var selectElem = document.getElementById('categorie-select');
    selectElem.addEventListener('change', function() {
    var index = selectElem.selectedIndex;
    var selectText = selectElem.options[index].text;
    console.log(selectElem.options[index].text);
    var pizza = document.getElementsByClassName('Pizza');
    var burger = document.getElementsByClassName('Burger');
    if(selectText === 'Pizza'){
        for (const element of pizza) {
            element.style.display = 'table-row';
        }
        for (const element of burger) {
            element.style.display = 'none';
        }
    }
    if(selectText === 'Burger'){
        for (const element of pizza) {
            element.style.display = 'none';
        }
        for (const element of burger) {
            element.style.display = 'table-row';
        }
    }
    if(selectText === 'All'){
        for (const element of pizza) {
            element.style.display = 'table-row';
        }
        for (const element of burger) {
            element.style.display = 'table-row';
        }
    }
    })
</script>