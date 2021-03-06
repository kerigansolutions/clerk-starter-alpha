@extends('layouts.main')

@section('content')
@if (have_posts())
    @while (have_posts())
        {{ the_post() }}
                
        <kma-slider class="slider-container"></kma-slider>
        @include('partials.buttongallery')
        <main id="content" class="sizable">
            <div class="container">

                <div class="row align-items-center justify-content-center py-5">
                    <div class="col-lg-10">
                        <article class="front">
                            <div class="content-area pl-md-4">
                                {{ the_content() }}
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </main>

    @endwhile
@else
    @include('pages.404')
@endif
@endsection