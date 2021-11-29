@extends('website.Master')

@section('content')

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Resources</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @forelse (resourceCategories() as $key=>$category)
                        <li data-filter=".category{{ $category->category_id }}">{{ $category->category->name }}</li>
                        @empty
                        <li data-filter="*" class="filter-active">No Resources</li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @forelse (myResources() as $key=>$article)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{asset('project_files/articleResource/'.$article->files[0]->name) }}"
                            class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{ $article->title}}</h4>
                            <p>{{ $article->category->name }}</p>
                            <div class=" portfolio-links">
                                <a href="{{ asset('project_files/articleResource/'.$article->files[0]->name) }}"
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
                <div class="col-lg-12">No Resources Found.</div>
                @endforelse


            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection