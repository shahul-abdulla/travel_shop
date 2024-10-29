<main>
    <section class="breadcrumb-outer text-center">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white">Gallery</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- Gallery starts -->
<section class="content gallery">
    <div class="container">
            <div class="row blog-main">
                @if($galleryimages->isNotEmpty())
                @foreach($galleryimages as $gallery)
                <div class="col-md-4 col-xs-12 mansonry-item">
                    <div class="gallery-item">
                        <div class="gallery-image">
                            <img src="{{ asset('storage/'.$gallery->image_path) }}" alt="image">
                        </div>
                        <div class="gallery-content">
                            <ul>
                                <li><a href="{{ asset('storage/'.$gallery->image_path) }}" data-lightbox="gallery" data-title="{{$gallery->title}}"><i class="fa fa-eye"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-link"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
    </div>
</section>
</main>