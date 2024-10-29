<main>
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">Tour Grid</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home')}}" >Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Packages</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- tour list starts -->
    <section class="list">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 pull-right">
                    <div class="trend-box">
                        <div class="row ">
                            @if($packages->isNotEmpty())
                             @foreach( $packages as $package)
                            <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
                                <div class="trend-item">
                                    @if($package->offer)
                                    <div class="ribbon ribbon-top-left"><span>{{ $package->offer }}% OFF</span></div>
                                    @endif
                                    <div class="trend-image">
                                        <img src="{{ asset('storage/'.$package->image) }}" alt="image">
                                        <div class="trend-price">
                                            <p class="price">From <span>{{ $package->price }} <span></p>
                                            </div>
                                    </div>
                                    <div class="trend-content">
                                        <p><i class="flaticon-location-pin"></i> {{ $package->location }}</p>
                                        <h4><a wire:navigate href="{{ route('packagedetail', ['slug' => $package->slug ])}}">{{ $package->package_name}}</a></h4>
                                        <div class="rating mar-bottom-15">
                                            @if ($package->reviews <= 35)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @elseif ($package->reviews <= 60)
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            @endif
                                        </div>
                                        <span class="mar-left-5">{{ $package->reviews }} Reviews</span>
                                        <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $package->date_time }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
</main>