
@include('layouts.header')

<main id="Index">
    <section class="bandeau">
        <img src="{{asset('/images/bandeau-home.png')}}" alt="">
        <img class="border-bandeau"src="{{asset('/images/border-bandeau.png')}}" alt="image d'un hamburger tester par marc's">
        <div class="titre-head">
                    <img src="{{asset('/images/head-titre.svg')}}" alt="bandeau pour le titre de marc's">
                    <h1>A TASTE OF MARC'S</h1>
        </div>
    </section>

    <section class="categorie">
        <div class="container-categorie">  
            <a class="une-categorie"><img src="{{asset('images/cat-burger.png')}}" alt="image de la categorie burger"><span>BURGER</span></a>
            <a class="une-categorie"><img src="{{asset('images/cat-pizza.png')}}" alt="image de la categorie pizza"><span>PIZZA</span></a>
        </div>
        <div class="background-categorie">
            <img class="pizza" src="{{asset('images/pizza.png')}}" alt="image de fond de pizza">
            <img class="legumes" src="{{asset('images/legumes.png')}}" alt="image de fond de legumes">
            <img class="frite" src="{{asset('images/frite.png')}}" alt="image de fond de frites">
        </div>
    </section>

    <section class="blog">
        <div><img class="svg-border-top" src="{{asset('images/svg-blog-top.svg')}}" alt="image de bordure de la partie blog"></div>
            <div class="container-slider"style="background-image:url('{{asset('images/background-blog.png')}}');">
            <div class="items">
                <?php $count = 0; ?>
            @foreach ($posts as $key => $post)
                {{$count = $count + 1; }}
                @if($count==1)
                    <!-- UNE CARD -->
                    <div class="item active" onclick="location.href='{{ route('posts.show', $post->id) }}'">
                @elseif($count==5)
                    <div class="item prev" onclick="location.href='{{ route('posts.show', $post->id) }}'">
                @elseif($count==2)
                    <div class="item next" onclick="location.href='{{ route('posts.show', $post->id) }}'">
                @else
                    <div class="item" onclick="location.href='{{ route('posts.show', $post->id) }}'">
                @endif
                    <img class="wave" src="{{asset('images/wave-blog-item.svg')}}" alt="image de vgue degrader orange">
                    <div class="container-shapes">
                        <img src="{{asset('images/shape-item-left.png')}}" alt="image de quote blanc">
                        <img src="{{asset('images/shape-item.png')}}" alt="image de quote blanc">
                    </div>
                    <img src="{{asset('images/posts/'.$post->images)}}" alt="{{$post->images}}">
                    <p class="post-title">{{$post->title}}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, illo.</p>
                </div>
                <!-- UNE CARD -->

            @endforeach
                <div class="button-container">
                    <div class="button"><img src="{{asset('images/icons/angle-left-solid.svg')}}" alt="icon de fleche vers la gauche"></div>
                    <div class="button"><img src="{{asset('images/icons/angle-right-solid.svg')}}" alt="icon de fleche vers la droite"></div>
                </div>
            </div>
            </div>
        <!-- <div><img class="svg-border-bottom" src="{{asset('images/svg-blog.svg')}}" alt=""></div> -->
    </section>

    <section class="about">
        <div class="container-about-image"><img src="{{asset('images/burger-about.png')}}" alt="image d'un burger pour la partie a propos"></div>
        <div class="container-about-texte">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum maxime ut modi magni nulla quia distinctio repellendus, eaque unde iste culpa assumenda voluptate, illum molestias. Nostrum sed enim qui corrupti.
            Eius accusamus optio quis sequi consectetur consequuntur, saepe mollitia veniam eaque porro aliquam ullam libero ea aliquid, quam est vel reprehenderit illum nulla explicabo repellendus fugiat enim consequatur rem. Nulla?
            Odio suscipit ex eligendi iure provident officia atque, nemo cumque a saepe quia. Assumenda illum soluta explicabo debitis, voluptas quibusdam nostrum libero recusandae neque provident dicta itaque delectus, cumque obcaecati!
            Animi fugit consequuntur recusandae possimus alias dolorem quidem corporis illum? Voluptas saepe totam nesciunt, sequi, inventore nam rem fuga magni corrupti tempora animi neque pariatur optio natus sed molestiae. Consequatur?
            Quia ut praesentium est labore tempore, molestiae itaque ducimus animi, culpa natus aut corrupti rem, rerum laboriosam tempora recusandae at harum facilis nam autem sint ipsa eveniet aspernatur! Cum, eum.
            Animi quisquam, accusantium laudantium, quaerat repellendus ipsa, dolorum at rem tenetur aliquam dolore corrupti explicabo quia eveniet non perferendis. Inventore omnis vero deleniti aliquid earum quibusdam, repellat quae minima dignissimos.
            A reiciendis excepturi corrupti maiores odio deserunt reprehenderit deleniti velit fuga. Harum ullam totam, sequi quis suscipit veritatis sit vero iste, soluta, animi atque! Expedita, laborum. Sequi repudiandae aspernatur molestias.
            Aliquid autem, impedit consectetur nulla neque dolorem alias debitis reiciendis modi asperiores, eos quidem quaerat tempore cumque itaque ipsam laborum similique porro voluptatibus quam eligendi assumenda, voluptatum adipisci nemo! Ipsa?
            Numquam dignissimos quasi distinctio tenetur nemo eum beatae aliquid at illum id a cupiditate odit optio adipisci cumque, quibusdam illo iste iure! Iste cumque libero provident tenetur! Illo, accusamus debitis.
            Dicta suscipit omnis fugiat harum laboriosam rem, sed, debitis inventore distinctio id ratione. Vitae numquam eos, illo minima, esse sequi maiores, vero rerum quos eaque ut. Natus aspernatur nulla modi.</p>
            <div onclick="location.href='/contact'" class="button-jaune" id="button-2">
                <div id="slide"></div>
                <a href="/contact">NOUS CONTACTER <img class="icon"src="{{asset('images/icons/right-long-solid.svg')}}" alt="icon de fleche vers la droite"></a>
            </div>
        </div>
    </section>
</main>

<script>
    const slider = document.querySelector(".items");
		const slides = document.querySelectorAll(".item");
		const button = document.querySelectorAll(".button");

		let current = 0;
		let prev = 4;
		let next = 1;

		for (let i = 0; i < button.length; i++) {
			button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
		}

		const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

		const gotoNext = () => current < 4 ? gotoNum(current + 1) : gotoNum(0);

		const gotoNum = number => {
			current = number;
			prev = current - 1;
			next = current + 1;

			for (let i = 0; i < slides.length; i++) {
				slides[i].classList.remove("active");
				slides[i].classList.remove("prev");
				slides[i].classList.remove("next");
			}

			if (next == 5) {
				next = 0;
			}

			if (prev == -1) {
				prev = 4;
			}

			slides[current].classList.add("active");
			slides[prev].classList.add("prev");
			slides[next].classList.add("next");
		}
</script>

@include('layouts.footer')