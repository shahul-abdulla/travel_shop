<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">Blog</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- blog starts -->
    <section class="blogmain blog-fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="blog-list">
                        @if ($articles->isNotEmpty())
                            @foreach ($articles as $index => $article)
                                @if ($index % 2 == 0)
                                    <div class="blog-full mar-bottom-30">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12 blog-height">
                                                <div class="blog-image">
                                                    <a wire:navigate
                                                        href="{{ route('blogDetail', ['slug' => $article->slug]) }}"
                                                        style="background-image: url({{ asset('storage/' . $article->image) }}"></a>
                                                    <div class="b-date"><a wire:navigate
                                                            href="{{ route('blogDetail', ['slug' => $article->slug]) }}"
                                                            class="white">
                                                            <strong<a wire:navigate
                                                                href="{{ route('blogDetail', ['slug' => $article->slug]) }}"
                                                                class="white">
                                                                <strong>{{ $article->created_at->format('d') }}</strong>
                                                                {{ $article->created_at->format('M Y') }}
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="blog-content">
                                                    <h3 class="blog-title"><a wire:navigate
                                                            href="{{ route('blogDetail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                                    </h3>
                                                    <p> {{ $article->content }}</p>
                                                    <div class="para-content">
                                                        <span class="mar-right-20"><a wire:navigate
                                                                href="{{ route('blogDetail', ['slug' => $article->slug]) }}"><i
                                                                    class="fa fa-user mar-right-5"></i>{{ $article->auther }}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="blog-full mar-bottom-30">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="blog-content">
                                                    <h3 class="blog-title"><a wire:navigate
                                                            href="{{ route('blogDetail', ['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                                    </h3>
                                                    <p>{{ $article->content }}</p>
                                                    <div class="para-content">
                                                        <span class="mar-right-20"><a wire:navigate
                                                                href="{{ route('blogDetail', ['slug' => $article->slug]) }}"><i
                                                                    class="fa fa-user mar-right-5"></i>
                                                                {{ $article->auther }}</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 blog-height">
                                                <div class="blog-image">
                                                    <a wire:navigate
                                                        href="{{ route('blogDetail', ['slug' => $article->slug]) }}"
                                                        style="background-image: url({{ asset('storage/' . $article->image) }}"></a>
                                                    <div class="b-date"><a wire:navigate
                                                            href="{{ route('blogDetail', ['slug' => $article->slug]) }}"
                                                            class="white">
                                                            <strong<a wire:navigate
                                                                href="{{ route('blogDetail', ['slug' => $article->slug]) }}"
                                                                class="white">
                                                                <strong>{{ $article->created_at->format('d') }}</strong>
                                                                {{ $article->created_at->format('M Y') }}
                                                        </a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="col-12">
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
