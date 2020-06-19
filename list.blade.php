<section>
        <div class="container-fluid">
            <div class="home-sub-banner">
                <div class="offset- sub-banner-row pb-0 rounded">
                    <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                        <div class="your-class carousel-inner">
                            <div class="p-3  carousel-item active container-fluid">
                                <p> As a multi-national company in search of specific market insights spanning
                                    different
                                    sectors and platforms, Market Data Forecast helped us in obtaining great
                                    research
                                    information that met our needs.</p>
                                <p class="text-right font-weight-bold client-testimonial" style="margin-bottom: 2%;">─ Afrat Spalding, Mtime,
                                    Vice
                                    President, Media</p>
                            </div>
                            <div class="p-3 carousel-item container-fluid" >
                                <p> Thank you for the kind support of your team !!! I have received the final
                                    report,
                                    and the report is really helpful for me. Moreover, I will contact you, if I have
                                    any
                                    new need for market research materials, of course. Thank you again.</p>
                                <p class="text-right font-weight-bold client-testimonial" style="margin-bottom: 2%;">─ Kim, Heon-Mo (Terry,
                                    金宪模)
                                </p>
                            </div>
                            <div class="p-3 carousel-item container-fluid" >
                                <p> We have worked on several projects with Market Data Forecast over the past two
                                    years. Much of the research we requested was customization and difficult to
                                    find.
                                    Yet they managed to get us what we want and how we wanted it. </p>
                                <p class="text-right font-weight-bold client-testimonial" style="margin-bottom: 2%">─ Brian Moore, Vice
                                    President,
                                    NICCA USA, Inc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="client-list">
    <div class="container-fluid">
        <div class="container col-12">
            <div class="row row-eq-height"> 
            @if($clients != "")
                @foreach($clients as $clientsData)
                    <div class="col-md-2 col-sm-2 col-xs-2 col-6 border  client-list-card ml-md-4 my-md-4 mx-sm-2 my-sm-2 zoom">
                        <div class="client-images img-fluid">
                            <img class="w-100 h-100" src="{{URL::asset('images'.'/'.$clientsData->client_image)}}" alt="client-logo" align=middle>
                        </div>
                    </div>
                @endforeach
            @endif
            </div>    
        </div>
    </div>
</section>
