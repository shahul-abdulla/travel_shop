<div class="col-md-4 reviews-list align-center">
    <div class="list-rv-detail">
        <p class="mar-0"><i class="fa fa-quote-left mar-right-10"></i>{{ $testmonial->description }}</p>
    </div>
    <div class="rev-author mar-top-40">
        <div class="rev-image">
            @if ($testmonial->image != '')
            <img src="{{ asset('storage/'.$testmonial->image)}}" alt="image">
        @endif        </div>
        <div class="rev-content mar-left-20">
            <h4 class="mar-bottom-5">{{ $testmonial->name }}</h4>
            <p class="mar-bottom-5">{{ $testmonial->designation }}</p>
            <ul class="list-inline">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
        </div>
    </div>
</div>
