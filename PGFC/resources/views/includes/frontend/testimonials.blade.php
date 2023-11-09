<!-- Testimonials Sections Start Here-->
<div class="testimonial-section pb-100">
    <div class="container">
        <h3 class="title-bg">Testimonials</h3>
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="rs-carousel owl-carousel" data-loop="true" data-items="1"
                    data-margin="0" data-autoplay="true" data-autoplay-timeout="6000" data-smart-speed="2000"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="1"
                    data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1"
                    data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1"
                    data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1"
                    data-md-device-nav="false" data-md-device-dots="false">

                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial">
                            <div class="testimonial-profile">
                                <a href="{{ url($testimonial->photo) }}" target="_blank" rel="noopener noreferrer">
                                    <img src="{{ url($testimonial->photo) }}" alt="{{ $testimonial->name }}"
                                        width="100px">
                                </a>
                            </div>
                            <div class="testimonial-content">
                                <h3 class="testimonial-title">{{ $testimonial->name }}</h3>
                                <span class="testimonial-post">{{ $testimonial->position }}</span>
                                <div class="client-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $testimonial->rate)
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        @endif
                                    @endfor
                                </div>                                
                                <p class="testimonial-description">"
                                    {{ $testimonial->description }} "
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Sections End Here-->