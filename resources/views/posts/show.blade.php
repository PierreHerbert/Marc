@include('layouts.header')

<main id="Posts-show">
    <!-- <div class="bg-light p-4 rounded">
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
       

    </div> -->

    <section class="head-posts">
        <img class="background"src="{{asset('/images/head-posts.png')}}" alt="">
        <div>
            <img class="img-post" src="{{asset('images/posts/'.$post->images)}}" alt="">
            <div class="titre-head-posts">
                <img src="{{asset('/images/head-titre.svg')}}" alt="">
                <h1>{{ $post->title }}</h1>
            </div>
        </div>
    </section>
    <section class="post-body">
        <p>{!! $post->body !!}</p>
    </section>
</main>

@include('layouts.footer')