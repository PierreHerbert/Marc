@include('crud.partials.header')

<section id="Posts">
    


    <div class="bg-light p-4 rounded">
        <div class="container-boutons">
            
            <select name="categorie" id="categorie-select">
                <option value="All" selected>All</option>
                        @foreach ($categories as $key => $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                        @endforeach
            </select>
            <div class="button-jaune btn-crud" id="button-2">
                <div id="slide"></div>
                <a href="{{ route('posts.create') }}">AJOUTER UN ARTICLE</a>
            </div>

            
        </div>
        <div class="mt-2">
                @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="5%">No</th>
             <th width="10%">Name</th>
             <th width="10%">Categorie</th>
             <th width="30%">Image</th>
             <th width="25%">Description</th>
             <th width="20%" colspan="3">Action</th>
          </tr>
            @foreach ($posts as $key => $post)
            @foreach ($categories as $key => $categorie)
                    @if($categorie->id == $post->categorie_id)
                    <tr class="{{$categorie->nom}}">
                    @endif
                @endforeach
                <td class="numero">{{ $post->id }}</td>
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
                <td class="actions">
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show', $post->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
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