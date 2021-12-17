@extends('website.Master')

@section('content')

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Articles</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @forelse (articleCategories() as $key=>$category)
                        <li data-filter=".category{{ $category->id }}">{{ $category->name }}</li>
                        @empty

                        @endforelse
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @forelse (myArticles() as $key=>$article)
                <div class="col-lg-4 col-md-6 portfolio-item category{{ $article->category_id }}">
                    <div class="portfolio-wrap">
                        <img src="{{  $article->files->count()>0 ? asset('project_files/articleResource/'.$article->files[0]->name) : asset('website/assets/img/portfolio/portfolio-3.jpg') }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $article->title}}</h4>
                            <p>{{ $article->category->name }}</p>
                            <div class=" portfolio-links">
                                <a href="{{ $article->files->count()>0 ? asset('project_files/articleResource/'.$article->files[0]->name) : asset('website/assets/img/portfolio/portfolio-3.jpg')  }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox"
                                    title="{{ $article->title }}"><i class="bx bx-plus"></i></a>
                                <a href="{{  route('detailsPage',$article->id)}}" class="portfolio-details-lightbox"
                                    data-glightbox="type: external" title="Portfolio Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse


            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection