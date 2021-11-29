<main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            @forelse ($article->files as $key => $value)
                            <div class="swiper-slide">
                                <img src="{{asset('project_files/articleResource/'.$value->name) }}" alt="">
                            </div>
                            @empty

                            @endforelse

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $article->category->name }}</li>
                            <li><strong>Project date</strong>: {{ $article->datetime }}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ $article->title }}</h2>
                        <p>
                            {{ $article->body }}
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->