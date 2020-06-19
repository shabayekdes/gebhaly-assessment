@extends('layouts.master')

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text">
                                <h3>Website Development
                                    Team with google skill</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text">
                                <h3>Website Development
                                    Team with google skill</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text">
                                <h3>Website Development
                                    Team with google skill</h3>
                                <p>Build Your Home Secure and Safe with Professional Touch</p>
                                <a href="services.html" class="boxed-btn3">Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- services_area_start -->
    <div class="services_area">
        <div class="container">
            <div class="row no-gutters">
            @foreach($services as $service)
                <div class="col-lg-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <h3>0{{$loop->iteration}}</h3>
                        </div>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                        <a href="JavaScript:void(0);" id="book_now_{{ $service->id }}" data-id="{{ $service->id }}" class="book_now mt-2"><i class="fas fa-cart-plus"></i> Book Now</a>
                        <p id="success-message-{{$service->id}}" class="text-success"></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- services_area_end -->

    <!-- chose_us_area start -->
    <div class="chose_us_area chose_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="chose_info">
                        <h3>Why Choose Us?</h3>
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/7ZoLCrv85Vc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="chose_info">
                        <p class="mb-3">
                            “Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single_area">
                                    <div class="icon">
                                        <i class="far fa-lightbulb"></i>
                                    </div>
                                    <h3>Website Development &amp; Design</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single_area">
                                    <div class="icon">
                                        <i class="fab fa-codepen"></i>
                                    </div>
                                    <h3>Mpbile Application &amp; Desktop</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chose_us_area end -->
@endsection

@push('scripts')
<script>
    $( document ).ready(function() {
        $( ".book_now" ).on( "click", function(e) {
            e.preventDefault();
            const el = $( this );
            const id = el.data('id');
            // to disable 
            $( this ).addClass('disabled-link');
            $( this ).find('i').removeClass();
            $( this ).find('i').addClass('fa fa-spinner fa-spin');

            let url = '/cart/' + id;

            $.ajax({
                method: "POST",
                url: url,
                data: { 
                    _token: "{{ csrf_token() }}" 
                }
                })
                .done(function( data ) {
                    el.removeClass('disabled-link');
                    el.find('i').removeClass();
                    el.find('i').addClass('fas fa-cart-plus');

                    $('#cart-count').text(data.count)
                    $('#success-message-' + id).text(data.message)

                    setTimeout(function(){ $('.text-success').text(' '); }, 9000);
                });

        });
    });
</script>
@endpush
