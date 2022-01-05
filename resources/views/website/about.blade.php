@extends('website.Master')

@section('content')



<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <p>{{ profile()->about }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('project_files/picture/'.user()->avatar) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <h3>Database Expert</h3>
                    <p class="fst-italic">

                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-rounded-right"></i>
                                    <strong>Birthday:</strong>{{ \Carbon\Carbon::parse(profile()->dob)->format('d M Y')}}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong>
                                    {{ profile()->website }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong>
                                    {{ profile()->website }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>City:</strong>Chattogram</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong>
                                    {{ profile()->degree }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong>
                                    {{ profile()->email }}
                                </li>
                                <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row skills-content">


                @forelse (skills() as $skill)
                <div class="col-lg-6">

                    <div class="progress">
                        <span class="skill">{{ $skill->name}} <i class="val">{{ $skill->percentage}}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage}}"
                                aria-valuemin="100" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                @empty

                @endforelse

            </div>

        </div>
    </section>
    <!-- End Skills Section -->

     <!-- Experience Start -->
     <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Experience</h2>
            </div>

            @forelse (experiences() as $experience)
                <div class="row skills-content mb-3" style="border: 1px solid rgba(0,0,0,0.2); padding:10px;">

                        <div class="col-lg-4">
                            <h2 class="text-success">{{ $experience->organization }}</h2>
                        </div>

                        <div class="col-lg-6 text-right" style="text-align:right">
                            <h4>{{ $experience->designation }}</h4>
                            
                            <p><i> {{ $experience->body }}  </i></p>
                        </div>

                        <div class="col-lg-2">
                            <p class="text-danger"><i> {{ $experience->join_date }} to {{ $experience->left_date }} </i></p>  </i></p>
                        </div>
                </div>

            @empty

            @endforelse

        </div>
    </section>
    <!-- Experience End -->

    <!-- Certification Start -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Certifications</h2>
            </div>

            <div class="row skills-content">
                @forelse (graduations() as $graduation)
                <div class="col-lg-6">
                    <h2 class="text-center">{{ $graduation->certificate->name }} ,Certification</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Title: <strong class="text-right" style="float: right;"> {{ $graduation->title }} </strong></li>
                        <li class="list-group-item">Institute: <strong class="text-right" style="float: right;"> {{ $graduation->institute }} </strong></li>
                        <li class="list-group-item">Session: <strong class="text-right" style="float: right;"> {{ $graduation->session }} </strong></li>
                        <li class="list-group-item">Passing Year: <strong class="text-right" style="float: right;"> {{ $graduation->passing_year }} </strong></li>
                        <li class="list-group-item">Comments: <strong class="text-right" style="float: right;"> {{ $graduation->notes }} </strong></li>
                    </ul>
                </div>
                @empty

                @endforelse
            </div>

        </div>
    </section>
    <!-- Certification End -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Facts</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('website/assets') }}/img/testimonials/testimonials-1.jpg"
                                class="testimonial-img" alt="">
                            <h3>{{ user()->name }}</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ profile()->about }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('project_files/picture/'.user()->avatar) }}" class="testimonial-img"
                                alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('website/assets') }}/img/testimonials/testimonials-3.jpg"
                                class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('website/assets') }}/img/testimonials/testimonials-4.jpg"
                                class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('website/assets') }}/img/testimonials/testimonials-5.jpg"
                                class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->



@endsection