@include('layouts.header')

<main id="blog">
    <section class="container-card-blog">
        <img class="draw burger" src="{{asset('images/burger-blanc.svg')}}" alt="">
        <img class="draw pizza" src="{{asset('images/pizza-blanc.svg')}}" alt="">
        <img class="draw tomate" src="{{asset('images/tomates-blanc.svg')}}" alt="">
        <img class="draw salade" src="{{asset('images/salade-blanc.png')}}" alt="">
        <!-- <div class="btn-tri">
            <span>ALL</span>
            @foreach ($categories as $key => $categorie)
                <span id="btn-{{ $categorie->nom }}">{{ $categorie->nom }}</span>
            @endforeach
        </div> -->
        <div class="container-blog">
            @foreach ($posts as $key => $post)
            <!-- UNE CARD -->
                        <div class="item" onclick="location.href='{{ route('posts.show', $post->id) }}'">
                
                    
                        <img class="wave" src="{{asset('images/wave-blog-item.svg')}}" alt="">
                        <div class="container-shapes">
                            <img src="{{asset('images/shape-item-left.png')}}" alt="">
                            <img src="{{asset('images/shape-item.png')}}" alt="">
                        </div>
                        <img src="{{asset('images/posts/'.$post->images)}}">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->description}}</p>
                    
                </div>
                    <!-- UNE CARD -->
            @endforeach
        </div>
        
        <div class="pagination-container">
            {{$posts->links()}}
        </div>
    </section>
</main>

@include('layouts.footer')