<div class="col-md-4">
    <div class="why-us-item text-center">
        <div class="why-us-icon">
            <i class="{{ empty($service->icon_class)? 'flaticon-price' : $service->icon_class}}"></i>
        </div>
        <div class="why-us-content">
            <h3><a href="#">{{ $service->title }}</a></h3>
            <p class="mar-0">{{ $service->short_desc }}</p>
        </div>
    </div>
</div>