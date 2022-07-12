@include('crud.partials.header')

<section id="Posts">
    <div class="bg-light p-4 rounded">
        <div class="container-show">
            <div class="show-texte">
                <div>
                    <h1>{{ $post->title }}</h1>
                </div>
                <div>
                @foreach ($categories as $key => $categorie)
                    @if($categorie->id == $post->categorie_id)
                    <p>{{$categorie->nom}}</p>
                    @endif
                @endforeach
                </div>
                <div class="post-body">
                {!! $post->body !!}
                </div>
            </div>
            <div class="show-image">
                <img src="{{asset('images/posts/'.$post->images)}}" alt="">
            </div>
        </div>
       

    </div>
    <div class="mt-4">
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Éditer</a>
        <a href="{{ route('posts.index') }}" class="btn btn-default">Retour</a>
    </div>
</section>