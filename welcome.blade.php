@extends('parent')

@section('title', 'ISTEC')

@section('content')
    <section class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/home-images/banner/ban1.jpg); " class="overlay"
                style="background: rgb(0,0,0,11%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">Votre Futur est notre priorité</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/home-images/banner/ban2.jpg); " class="overlay"
                style="background: rgb(0,0,0,11%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">L'éducation c'est la vie</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            <li style="background-image: url(images/home-images/banner/ban3.jpg);" class="overlay"
                style="background: rgb(0,0,0,11%);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="probootstrap-slider-text text-center">
                                <h1 class="probootstrap-heading probootstrap-animate">Aider chacun de nos étudiants est un
                                    réel bonheur</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="probootstrap-section probootstrap-section-colored " style="background:#f4a105;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h2>Bienvenue</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="probootstrap-flex-block">
                        <div class="probootstrap-text probootstrap-animate">
                            <h3>&Aacute; propos d'ISTEC</h3>
                            <p>Une formation académique pour l'obtention d'un diplôme universitaire suivie d'un corps
                                professoral dynamique, une direction jeune et compétente pour les études, l'étudiant a donc
                                tous les atouts pour réussir.</p>
                            <p><a href="/about" class="btn btn-primary">En apprendre plus</a></p>
                        </div>
                        <div class="probootstrap-image probootstrap-animate">
                            <a href="{{ asset('videos/presentation.mp4') }}" class="btn-video" controle loop
                                autoplay><i class="icon-play3"></i><img
                                    src="{{ asset('images/home-images/about/accueil.jpg') }}"
                                    style="width: 100%; height: 100%; "></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-users2" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                +<span class="js-counter" data-from="0"
                                    data-to="{{ App\Models\Students\Student::active()->count() }}" data-speed="2000"
                                    data-refresh-interval="50">1</span>
                            </span>
                            <span class="probootstrap-counter-label">&Eacute;tudiants inscrits</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-user-tie" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                <span class="js-counter" data-from="0"
                                    data-to="{{ App\Models\Teacher::active()->count() }}" data-speed="2000"
                                    data-refresh-interval="50">1</span>
                            </span>
                            <span class="probootstrap-counter-label">Professeurs certifiés</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block visible-xs-block"></div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
                    <div class="probootstrap-counter-wrap">
                        <div class="probootstrap-icon">
                            <i class="icon-library" style="color:#f4a105;"></i>
                        </div>
                        <div class="probootstrap-text">
                            <span class="probootstrap-counter">
                                <span class="js-counter" data-from="0" data-to="90" data-speed="2000"
                                    data-refresh-interval="50">1</span>%
                            </span>
                            <span class="probootstrap-counter-label">Pourcentage de réussite</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section"
        style="background-image: url(images/home-images/point_fort.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center section-heading probootstrap-animate">
                    <h2 class="mb0">Points forts</h2>
                </div>
            </div>
        </div>
        <div class="probootstrap-tab-style-1">
            <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
                <li class="active"><a data-toggle="tab" href="#featured-news" aria-expanded="true">Actualités à la
                        une</a>
                </li>
                <li class=""><a data-toggle=" tab" href="#upcoming-events" aria-expanded="false">Evènements à
                        venir</a></li>
            </ul>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="featured-news" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl1">
                                        @foreach (App\Models\Events\News::published()->latest()->limit(6)->get()
        as $news)
                                            <div class="item">
                                                <a href="{{ route('news.show', $news->slug) }}"
                                                    class="probootstrap-featured-news-box">
                                                    <figure class="probootstrap-media"><img
                                                            src="{{ !is_null($news->getFirstMedia('news')) ? $news->getFirstMedia('news')->getUrl() : asset('images/images-news/default.jpg') }}"
                                                            alt="{{ $news->title }}" class="img-responsive"
                                                            style="height: 282px">
                                                    </figure>
                                                    <div class="probootstrap-text">
                                                        <h3>{{ $news->title }}</h3>
                                                        <span class="probootstrap-date"><i
                                                                class="icon-calendar"></i>{{ \Carbon\Carbon::parse($news->start_date)->locale('fr')->locale('LLL') }}
                                                            -
                                                            {{ \Carbon\Carbon::parse($news->due_date)->locale('fr')->locale('LLL') }}
                                                        </span>
                                                        <span class="probootstrap-location"><i
                                                                class="icon-location"></i>{{ $news->getLocation() }}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="/news" class="btn btn-primary">Voir toutes les actualités</a></p>
                                </div>
                            </div>
                        </div>

                        <div id="upcoming-events" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel" id="owl2">
                                        @foreach (App\Models\Events\News::published()->upcoming()->limit(6)->get()
        as $news)
                                            @if ($news->checkIfDateIsAFutureDate($news->due_date))
                                                <div class="item">
                                                    <a href="{{ route('news.show', $news->slug) }}"
                                                        class="probootstrap-featured-news-box">
                                                        <figure class="probootstrap-media"><img
                                                                src="{{ !is_null($news->getFirstMedia('news')) ? $news->getFirstMedia('news')->getUrl() : asset('images/images-news/default.jpg') }}"
                                                                alt="{{ $news->title }}" class="img-responsive"
                                                                style="height: 282px">
                                                        </figure>
                                                        <div class="probootstrap-text">
                                                            <h3>{{ $news->title }}</h3>
                                                            <span class="probootstrap-date"><i
                                                                    class="icon-calendar"></i>{{ \Carbon\Carbon::parse($news->start_date)->locale('fr')->locale('LLL') }}
                                                                -
                                                                {{ \Carbon\Carbon::parse($news->due_date)->locale('fr')->locale('LLL') }}
                                                            </span>
                                                            <span class="probootstrap-location"><i
                                                                    class="icon-location"></i>{{ $news->getLocation() }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p><a href="/news" class="btn btn-primary">Voir toutes les actualités</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Quelques unes de nos specialités</h2>
                    <p class="lead">
                        Istec vous propose une multitude de filières Industrielles et Comptables.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                        @foreach (App\Models\Formations\Formation::active()->inRandomOrder()->limit(2)->get()
        as $formation)
                            <div class="image">
                                <div class="image-bg">
                                    <img src="{{ !is_null($formation->getFirstMedia('formations')) ? $formation->getFirstMedia('formations')->getUrl() : asset('images/home-images/expertise.jpg') }}"
                                        alt="{{ $formation->name }}">
                                </div>
                            </div>
                            <div class="text">
                                <h3>{{ $formation->name }}</h3>
                                <p>
                                    {!! Str::length($formation->description) > 70 ? Str::substr($formation->description, 0, 69) . '...' : $formation->description !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                        @foreach (App\Models\Formations\Formation::active()->inRandomOrder()->limit(2)->get()
        as $formation)
                            <div class="image">
                                <div class="image-bg">
                                    <img src="{{ !is_null($formation->getFirstMedia('formations')) ? $formation->getFirstMedia('formations')->getUrl() : asset('images/home-images/expertise.jpg') }}"
                                        alt="{{ $formation->name }}">
                                </div>
                            </div>
                            <div class="text">
                                <h3>{{ $formation->name }}</h3>
                                <p>
                                    {!! Str::length($formation->description) > 70 ? Str::substr($formation->description, 0, 69) . '...' : $formation->description !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Rencontrez nos enseignants qualifiés</h2>
                    <p class="lead">"Se réunir est un début, rester ensemble est un progres, travailler ensemble
                        est la réussite"</p>
                </div>
            </div>
            <div class="row">
                @foreach (App\Models\Teacher::active()->limit(4)->get()
        as $teacher)
                    <div class="col-md-3 col-sm-6">
                        <div class="probootstrap-teacher text-center probootstrap-animate">
                            <figure class="media">
                                <img src="{{ !is_null($teacher->getFirstMedia('teachers')) ? $teacher->getFirstMedia('teachers')->getUrl() : $teacher->createAvatar($teacher->name) }}"
                                    alt="{{ $teacher->name }}" style="width: 100%; height: 100%;"
                                    class="img-responsive">
                            </figure>
                            <div class="text">
                                <h3>{{ $teacher->name }}</h3>
                                <p>{{ $teacher->position }}</p>
                                <ul class="probootstrap-footer-social">
                                    @foreach ($teacher->user->socials as $social)
                                        <li class="{{ $social->name }}"><a href="{{ $social->url }}"><i
                                                    class="icon-{{ $social->name }}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><a href="/teachers" class="btn btn-primary">Voir tous les enseignants</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
                    <h2>Témoignages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="{{ asset('images/home-images/romuald.jpg') }}"
                                        style="width: 100%; height: 100%;">
                                </figure>
                                <quote class="quote">&ldquo;... J'ai acquis beaucoup de compétences dans le
                                    domaine de
                                    l'entrepreunariat et du developpement web a l'ISTEC. Je suis euphorique car je peux deja
                                    voler de mes propres ailes dans multiples dommaines, je remercie le cadre
                                    administratifs et les enseignants de nous avoir donné le meilleur de l'enseignement
                                    tout le long de mon apprenstissage. Merci ISTEC &rdquo; <br> <cite
                                        class="author">
                                        &mdash; <span>Touko Romuald</span></cite></quote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="{{ asset('images/home-images/Adrien.jpg') }}"
                                        style="width: 100%; height: 100%;">
                                </figure>
                                <quote class="quote">&ldquo;J’ai obtenu beaucoup de bagages intellectuels dans le
                                    domaine du
                                    developpement web à ISTEC. Ainsi, je me sens compétent pour apporter mon aide à la
                                    professionnalisation des industries de technologie. Nous avons eu la chance d’avoir des
                                    enseignants qualifiés qui nous ont tenu durant notre periode d'étude. Une expérience
                                    inoubliable. &rdquo; <br> <cite class="author"> &mdash;<span>Tedom
                                            Adrien</span></cite>
                                </quote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure>
                                    <img src="{{ asset('images/home-images/junior.jpg') }}"
                                        style="width: 100%; height: 100%;">
                                </figure>
                                <quote class="quote">&ldquo;Les professeurs d'ISTEC m'ont aidé à améliorer mes
                                    compétences
                                    et à développer une certaine autonomie dans l'apprentissage. Cette université n'est peut
                                    être pas parfaite mais grâce à elle, j'ai maintenant confiance en mes compétences et
                                    qualités de programmeur/développeur ! (^_^).
                                    &rdquo; <br> <cite class="author">&mdash; <span>Junior Ledoux</span></cite>
                                </quote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- partie des partenaires -->
    <section class="probootstrap-section probootstrap-bg probootstrap-section-colored"
        style="background-color:#ED0000;padding:24px; ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">

                </div>
            </div>
            <h1 style="text-align:center;font-size:40px;color:#FFFFFF"><b>Nos partenaires</b></h1>
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                        @foreach (App\Models\Configs\Partner::query()->active()->get()
        as $partner)
                            <div class="item">
                                <figure>
                                    <img src="{{ !is_null($partner->getFirstMedia('partners')) ? $partner->getFirstMedia('partners')->getUrl() : asset('images/images-partners/dschang.jpg') }}"
                                        alt="{{ $partner->name }}" style="width: 55%; height: 205px;margin:auto">
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probootstrap-cta" style="background: #f4a105;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez votre admission maintenant!
                    </h2>
                    <a href="https://app.orema.cm/welcome/1e61ffca-3b25-40e6-bf67-46f101ffb600" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate"
                        data-animate-effect="fadeInLeft">S'inscrire</a>
                </div>
            </div>
        </div>
    </section>
@endsection
