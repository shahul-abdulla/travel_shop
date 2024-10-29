<main>
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">{{ $packagedetail->location }} </h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a wire:navigate href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $packagedetail->package_name }}</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- tour detail starts -->
    <section class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="single-content">
                        <div class="single-full-title section-border">
                            <div class="single-title">
                                <h2>{{ $packagedetail->detail_heading }}</h2>
                                <p><i class="flaticon-location-pin"></i> {{ $packagedetail->location }}</p>

                            </div>
                        </div>
                        <div class="tour-includes">
                            <ul>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>Duration :
                                    {{ $packagedetail->date_time }}</li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>Date : {{ $packagedetail->date }}
                                </li>
                                <li><i class="fa fa-map-signs" aria-hidden="true"></i> Pickup & Drop :
                                    {{ $packagedetail->pickup }}</li>
                            </ul>
                        </div>
                        <div class="description mar-bottom-30">

                            <div class="itinerary mar-bottom-30">
                                <h3>Itinerary</h3>
                                @if ($packagedetail->days->isNotEmpty())
                                    @foreach ($packagedetail->days as $index => $packagedays)
                                        <div class="itinerary-item">
                                            <button type="button" class="btn btn-info" data-toggle="collapse"
                                                data-target="#it{{ $index }}">
                                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                            </button>
                                            <p class="mar-bottom-0"><span>{{ $packagedays->day }}</span> -
                                                {{ $packagedays->title }}</p>
                                            <div id="it{{ $index }}"
                                                class="collapse {{ $index === 0 ? 'show' : '' }} itinerary-para">
                                                {{ $packagedays->day_activity }}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="col-md-6 mar-top-40 mar-bottom-40">
                                <h4>Inclusions</h4>
                                <ul>
                                    @if (!empty($packagedetail->tour_includes))
                                        @foreach ($packagedetail->tour_includes as $include)
                                            <li><i class="fa fa-close"></i> {{ $include }}</li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                            <div class="col-md-6 mar-top-40 mar-bottom-40">
                                <h4>Exclusions</h4>
                                <ul>
                                    @if (!empty($packagedetail->price_exclude))
                                        @foreach ($packagedetail->price_exclude as $exclude)
                                            <li><i class="fa fa-check"></i> {{ $exclude }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="description mar-bottom-30 col-md-12">
                            <h3>Terms and Conditions</h3>
                            <p class="text-danger mar-top-40"><strong>ADDITIONAL NOTE - </strong>Seating will be auto
                                assigned by the airline based on availability at the time of check in. <strong>If you
                                    wish to book your SEATS in advance,</strong> We can-pre book your seats before 72
                                Hrs (Additional Charges Apply). </p>

                            <h3 class="mar-top-40">Payment Policy</h3>
                            <ul class="expect">
                                <li><i class="fa fa-circle"></i> First payment- AED750 Non-refundable deposit + VFS
                                    Appointment fee( 110 per pax )</li>
                                <li><i class="fa fa-circle"></i> 45% payment need to be made while collecting sharing
                                    documents for visa processing at embassy. </li>
                                <li><i class="fa fa-circle"></i> Final payment needs to be done before 30 days before
                                    departure after all adjustments of initial and second payments made earlier.</li>
                            </ul>


                            <h3 class="mar-top-40">Offer Policies</h3>
                            <ul class="expect">
                                <li><i class="fa fa-circle"></i> Consulate Visa fees is included in the package and will
                                    be adjusted in the final payment. Visa
                                    fees to be deducted from final payment for an Adult is <strong>350 AED</strong> ,
                                    child between 6 – 12 yrs is <strong>160
                                        AED</strong>, and child below 5 doesn’t have a payment at VFS however from our
                                    side we will give a
                                    <strong>100 AED</strong> per child for the mentioned category.
                                </li>
                                <li><i class="fa fa-circle"></i> Travel Insurance for travel dates will be included in
                                    the package for those who hold valid UAE
                                    residence visa. and this is by default issued for everybody and if anybody wants to
                                    exclude the
                                    insurance will not get a deduction from the payment. </li>
                                <li><i class="fa fa-circle"></i> Visa assistance we generally charge AED 250 per person,
                                    As part of this offer we are
                                    providing this as completely free of cost.</li>
                            </ul>


                            <h3 class="mar-top-40">Visa Note</h3>
                            <ul class="expect">
                                <li><i class="fa fa-circle"></i> As we are staying a greater number of days in
                                    Switzerland, we must apply visa from
                                    Switzerland Embassy. </li>
                                <li><i class="fa fa-circle"></i> The VFS appointments are first come first serve basis
                                    of payment and cannot hold or
                                    prebook without initial payment. Somehow, we can help you if you facing any issue
                                    with
                                    obtaining premium appointments with additional charges directly to us or can be paid
                                    directly at VFS and this is totally excluded from package. The premium needs to be
                                    booked if
                                    in case normal appointments can’t be obtained.</li>
                            </ul>

                            <h3 class="mar-top-40">Visa Rejection</h3>
                            <ul class="expect">
                                <li><i class="fa fa-circle"></i> Visa Rejection and Approval is not in our hand as
                                    travel agent we will provide you all the
                                    supporting documents for the visa’s after still Rejection happen above mentioned
                                    Cancellation policy will apply.</li>
                                <li><i class="fa fa-circle"></i> In case of any rejection or refusal of visa, second
                                    appearing or filing for an appeal at embassy
                                    there will be another consulate fees which will not included in the package and if
                                    more
                                    number of appointments booked also will be chargeable. </li>
                            </ul>


                            <h3 class="mar-top-40">Cancellation Policy</h3>
                            <ul class="expect">
                                <li><i class="fa fa-circle"></i> Deposit is non refundable once booked (AED750) PP </li>
                                <li><i class="fa fa-circle"></i> If cancelled within 60days of departure 25 %
                                    cancellation fee on the tour cost (AED1750) PP</li>
                                <li><i class="fa fa-circle"></i> If cancelled between of departure 35days to 20days 50 %
                                    cancellation fee on the tour cost (AED3500) PP </li>
                                <li><i class="fa fa-circle"></i> If cancelled within 20days 100 % Cancellation will
                                    apply </li>
                                <li><i class="fa fa-circle"></i> If you cancel before 20days due to health issue with
                                    valid proof only service fee of AED550 +
                                    visa fee will be charged rest all will be refunded or given as credit note to use in
                                    future
                                    depending on suppliers approval.</li>
                                <li><i class="fa fa-circle"></i> Group tour always have minimum participation which is
                                    60% if there is less numbers, we as
                                    travel agent would force to cancel the tour and money paid to us will be refunded to
                                    you if
                                    there is anything which paid from our end like appointment fee, visa fee, insurance
                                    etc Will be
                                    deducted or we wil provide you customized package with additional cost</li>
                            </ul>


                            <h3 class="mar-top-40">Form of payment</h3>
                            <ul class="expect">
                                <li><i class="fa fa-circle"></i> Cash </li>
                                <li><i class="fa fa-circle"></i> Bank Transfer </li>
                                <li><i class="fa fa-circle"></i> Credit card / Payment link with charges</li>
                                <li><i class="fa fa-circle"></i> Cheque</li>
                            </ul>

                            <p class="mar-top-20"><strong>Note: </strong>If paying via credit card or payment link there
                                will be transaction fee</p>
                        </div>


                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="list-sidebar">


                        <div class="sidebar-item">
                            <div class="sidebar-contact text-center">
                                <i class=" fa fa-phone-alt"></i>
                                <h3><span>Book</span> by phone</h3>
                                <a href="tel:+971 55 945 46 85" class="phone">+971 55 945 46 85</a>
                                <small>Monday to Friday 9.00am - 18:00pm</small>
                                <a href="whatsapp://send?text=Hi, Can i get more details?&phone=+971559454685"
                                    class="biz-btn mar-top-40">For more details</a>
                            </div>
                        </div>

                        <div class="sidebar-item">
                            <h3>Map</h3>
                            <div style="width: 100%;">
                                <iframe
                                    src="{{ $packagedetail->location_map ?? 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14433.611276729005!2d55.326804!3d25.2570314!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d4c3e297591%3A0xa018702fbe4940e9!2sTravelshop%20(Arooha%20Leisure%20Tours%20%26%20Travels)!5e0!3m2!1sen!2sin!4v1727510651764!5m2!1sen!2sin' }}"
                                    width="100%" 
                                    height="600" 
                                    style="border:0;" 
                                    allowfullscreen 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                            
                        </div>

                        <h3 class="mar-top-40">Highlights</h3>
                        @if ($packagedetail->highlightimage->isNotEmpty())
                            @foreach ($packagedetail->highlightimage as $images)
                                <div class="sidebar-item">
                                    <img src="{{ asset('storage/' . $images->image_path) }}" alt="">
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.itinerary-item button');

            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    // Close all other collapses
                    buttons.forEach(btn => {
                        const collapseDiv = btn.nextElementSibling;
                        if (collapseDiv && collapseDiv.classList.contains('collapse')) {
                            collapseDiv.classList.remove('show');
                        }
                    });

                    // Open the clicked one
                    const targetId = this.getAttribute('data-target');
                    const targetDiv = document.querySelector(targetId);
                    targetDiv.classList.toggle('show');
                });
            });
        });
    </script>
</main>
