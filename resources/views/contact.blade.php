@include('layouts.header')

<main id='Contact'>

<section class="contact-bandeau">
        <img src="{{asset('/images/bandeau-contact.png')}}" alt="">
        <div class="titre-head">
                    <img src="{{asset('/images/head-titre.svg')}}" alt="">
                    <h1>CONTACT</h1>
        </div>
    </section>
<section class="contact-formulaire">
    <div class="container-image">
        <img src="{{asset('/images/contact-visuel.png')}}" alt="">
    </div>
    <div class="container-formulaire">
    <div class="container">

<div class="row mt-5 mb-5">

    <div class="col-10 offset-1 mt-5">

        <div class="card">

            <div class="card-body">



                @if(Session::has('success'))

                    <div class="alert alert-success">

                        {{Session::get('success')}}

                    </div>

                @endif

             

                <form method="POST" action="{{ route('contact.store') }}" id="contactUSForm">

                    {{ csrf_field() }}

                      

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <p>Email :</p>

                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">

                                @if ($errors->has('email'))

                                    <span class="text-danger">{{ $errors->first('email') }}</span>

                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <p>Objet :</p>

                                <input type="text" name="subject" class="form-control" placeholder="Objet" value="{{ old('subject') }}">

                                @if ($errors->has('subject'))

                                    <span class="text-danger">{{ $errors->first('subject') }}</span>

                                @endif

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <p>Message :</p>

                                <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>

                                @if ($errors->has('message'))

                                    <span class="text-danger">{{ $errors->first('message') }}</span>

                                @endif

                            </div>  

                        </div>

                    </div>

             

                    <button type="submit" style="width:215px;margin:auto;" class="button-jaune" id="button-2">
                        <div id="slide"></div>
                        <span>ENVOYER</span>
                        <svg style="width:20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="fleche" d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z"/></svg>
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

</div>
    </div>
</section>
<section class="contact-map">
<div class=""><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=washigton,white%20house&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
</section>

   

</main>

@include('layouts.footer')