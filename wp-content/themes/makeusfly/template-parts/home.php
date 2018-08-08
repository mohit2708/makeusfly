<?php /* Template Name: Home Page */ 
get_header(); ?>


<section class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-md-offset-6 col-sm-offset-3">
                <form action="https://www.makeusfly.com/flight-list" method="GET" accept-charset="utf-8" id="valid_form" class="form-horizontal ">
                    <div class="form-air-sticket bg-white">
                        <ul class="menu-tag-form">
                            <li class="choose"><label class="tripradio"><input class="trip_btn" type="radio" name="trip" value="round_trip" checked="checked"><span>Round Trip</span></label></li>
                            <li><label class="tripradio"><input class="trip_btn" type="radio" name="trip" value="one_way"><span>One Way</span></label></li>
                        </ul>
                        <!--<ul class="menu-tag-form">
                            <li class="choose"><a href="javascript:void()" title="">Round Trip</a></li>
                            <li><a href="javascript:void()" title="">One way</a></li>
                        </ul> -->
                        <div class="form-content">
                            <div class="inner-box-tab" style="display: block;">
                                <div class="input-info-search">
                                    <div class="row search-address">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                        <input type="text" id="origin" name="originF" placeholder="Origin" class="form-control">
                                                        <input type="hidden" name="origin" id="origin_hidden" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                        <input type="text" id="destination" name="destinationF" placeholder="Destination" class="form-control">
                                                        <input type="hidden" name="destination" id="destination_hidden" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row search-address">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" id="departure_date" name="departure_date" placeholder="Depart Date" class="form-control" autocomplete="off">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="input-group date">
                                                        <input type="text" id="return_date" name="return_date" placeholder="Return Date" class="form-control" autocomplete="off">
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <span class="spncavity">Cavity:</span>
                                            <div class="checkbox-ver-1">
                                                <label class="newradiobox">
                                                    <input type="radio" id="economy-class" value="ECONOMY" name="travel_class" checked="checked">
                                                    <span>Economy Class</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-ver-1">
                                                <label class="newradiobox">
                                                    <input type="radio" id="business-class" value="BUSINESS" name="travel_class">
                                                    <span>Business Class</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-ver-1">
                                                <label class="newradiobox">
                                                    <input type="radio" id="first-class" value="FIRST" name="travel_class">
                                                    <span>First Class</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select name="adult" class="form-control nor">
                                                        <option value="1">01 Adults</option>
                                                        <option value="2">02 Adults</option>
                                                        <option value="3">03 Adults</option>
                                                        <option value="4">04 Adults</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select name="children" class="form-control nor">
                                                        <option value="0">00 Children</option>
                                                        <option value="1">01 Children</option>
                                                        <option value="2">02 Children</option>
                                                        <option value="3">03 Children</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <select name="infants" class="form-control nor">
                                                        <option value="0">00 Infants</option>
                                                        <option value="1">01 Infants</option>
                                                        <option value="2">02 Infants</option>
                                                        <option value="3">03 Infants</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="newcheckbox">
                                                <input type="checkbox" id="agree" name="agree">
                                                <span>Find the cheapest flight</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group marbotm-0">
                                        <div class="col-sm-12 center">
                                            <button type="submit" id="submit" class="btn-theme btn">FIND FLIGHTS</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer-search">
                            <div class="note">
                                <h6>NOTE:</h6>
                                <ul>
                                    <li>For Vietjet air and Jetstar Pacific, please book within 24 hours.</li>
                                    <!-- <li>Before departure, please contact 1900 69 69 69.</li> -->
                                    <li>Phone support: <a href="#" title="">+1-888-338-1833</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="support-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="media supprtbox">
                    <div class="media-left media-middle">
                        <div class="icon">
                            <img src="https://www.makeusfly.com/public/assets/img/icon-1.png">
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <h4>Live 24/7
                        Support <br>
                        : +1-888-338-1833
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media supprtbox">
                    <div class="media-left media-middle">
                        <div class="icon">
                            <img src="https://www.makeusfly.com/public/assets/img/icon-2.png">
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <h4>Special Offers on
                        over 500 Airlines</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media supprtbox">
                    <div class="media-left media-middle">
                        <div class="icon">
                            <img src="https://www.makeusfly.com/public/assets/img/icon-3.png">
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <h4>
                        Big Savings +
                        Great Coupon Codes</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="media supprtbox">
                    <div class="media-left media-middle">
                        <div class="icon">
                            <img src="https://www.makeusfly.com/public/assets/img/icon-4.png">
                        </div>
                    </div>
                    <div class="media-body media-middle">
                        <h4>Free cancellation<br>within 24 hrs</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="top-deal-area bg-default">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-default">
                    <h3>TODAY'S <span>TOP DEALS</span><span class="icon"><img src="https://www.makeusfly.com/public/assets/img/icon_title.png" alt=""></span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel owl-theme deal-slider" id="deal-slider">
                    <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/alaska/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/alaska-airlines" title="">Up to 30% with Alaska Airlines</a>
                                </h6>
                                <p>Book an Alaska Airlines flight with us for any destination of your choice and save big on your air tickets!!</p>
                                <a href="https://www.makeusfly.com/alaska-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/american/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/american-airlines" title="">Up to 30% with American Airlines</a>
                                </h6>
                                <p>Book an American Airlines flight with us for any destination of your choice and get huge discounts!! Hurry!</p>
                                <a href="https://www.makeusfly.com/american-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/united/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/united-airlines" title="">Up to 30% with United Airlines</a>
                                </h6>
                                <p>Book a flight with United Airlines with us for any destination of your choice and get cheap air tickets!!</p>
                                <a href="https://www.makeusfly.com/united-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/delta/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/delta-airlines" title="">Up to 30% with Delta Airlines</a>
                                </h6>
                                <p>Book a Delta Airlines flight with us for any destination of your choice and get air tickets at cheaper rates!!</p>
                                <a href="https://www.makeusfly.com/delta-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/spirit/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/spirit-airlines" title="">Up to 30% off with Spirit Airlines!</a>
                                </h6>
                                <p>Book an Spirit Airlines flight to any destination of your choice with your Mastercard card &amp; save big.</p>
                                <a href="https://www.makeusfly.com/spirit-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/frontier/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/frontier-airlines" title="">Up to 30% with Frontier Airlines</a>
                                </h6>
                                <p>Book a Frontier Airlines flight with us for any destination of your choice and get huge discounts!!</p>
                                <a href="https://www.makeusfly.com/frontier-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/jetblue/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/jetblue-airlines" title="">Up to 30% with Jet Blue Airlines</a>
                                </h6>
                                <p>Book a Jet Blue flight with us for any destination of your choice and get huge discounts!!</p>
                                <a href="https://www.makeusfly.com/jetblue-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/air_canada/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/air-canada" title="">Up to 30% with Air Canada</a>
                                </h6>
                                <p>Book a flight for Air Canada with us for any destination of your choice and get a chance to save big!!</p>
                                <a href="https://www.makeusfly.com/air-canada" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/british_airways/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/british-airways" title="">Up to 30% with British Airways</a>
                                </h6>
                                <p>Book a British Airways flight with us for any destination of your choice and get exclusive discounts!!</p>
                                <a href="https://www.makeusfly.com/british-airways" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/lufthansa/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/lufthansa" title="">Up to 30% with Lufthansa</a>
                                </h6>
                                <p>Book a Lufthansa flight with us for any destination of your choice and save huge!!</p>
                                <a href="https://www.makeusfly.com/lufthansa" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/turkish_airlines/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/turkish-airlines" title="">Up to 30% with Turkish Airlines</a>
                                </h6>
                                <p>Book a Turkish Airlines flight with us for any destination of your choice and avail heavy discounts!!</p>
                                <a href="https://www.makeusfly.com/turkish-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/virgin_america/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/virgin-america" title="">Up to 30% with Virgin America</a>
                                </h6>
                                <p>Book a Virgin America flight with us for any destination of your choice and save huge!!</p>
                                <a href="https://www.makeusfly.com/virgin-america" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/virgin_atlantic/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/virgin-atlantic" title="">Up to 30% with Virgin Atlantic</a>
                                </h6>
                                <p>Book a Virgin Atlantic flight with us for any destination of your choice and get huge discounts on your air tickets!!</p>
                                <a href="https://www.makeusfly.com/virgin-atlantic" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/sun_country/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/sun-country-airlines" title="">Up to 30% with Sun Country Airlines</a>
                                </h6>
                                <p>Book a Sun Country Airlines flight with us for any destination of your choice and get amazing discounts!!</p>
                                <a href="https://www.makeusfly.com/sun-country-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/air_france/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/air-france" title="">Up to 30% with Air France</a>
                                </h6>
                                <p>Book an Air France flight at the least possible rate with us for any destination of your choice and save big!!</p>
                                <a href="https://www.makeusfly.com/air-france" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                     <div class="item">
                        <div class="topDealbox">
                            <div class="dealimg">
                                <img src="https://www.makeusfly.com/public/assets/img/hawaiian/1.jpg" alt="">
                            </div>
                            <div class="deal-content">
                                <h6>
                                <a href="https://www.makeusfly.com/hawaiian-airlines" title="">Up to 30% with Hawaiian Airlines</a>
                                </h6>
                                <p>Book a Hawaiian flight with us for any destination of your choice and get huge discounts!!</p>
                                <a href="https://www.makeusfly.com/hawaiian-airlines" title="">VIEW DETAILS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="booknow">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="booktiktcolum">
                    <h3>Book your air tickets online <span> @ Highly Affordable Prices</span></h3>
                    <h4>Toll Free Number <span><i class="fa fa-phone"></i> +1-888-338-1833</span></h4>
                    <p><a href="#" class="btn btnbook">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tickets-area bg-default">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-default ver-1">
                    <h3>Popular Routes  <span>With Us</span><span class="icon"><img src="https://www.makeusfly.com/public/assets/img/icon_title.png" alt=""></span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel owl-theme ticket-slider" id="ticket-slider">
                    <div class="item">
                        <div class="ticket-container">
                            <div class="ticket-item">
                                <div class="logo-ticket">
                                    <img src="https://www.makeusfly.com/public/assets/img/destinations/chicago-cancun/front.jpg" alt="" width="166">
                                </div>
                                <div class="ticket-content">
                                    <h6>
                                    <a href="https://www.makeusfly.com/chicago-to-cancun" title="">Chicago To Cancun</a>
                                    </h6>
                                    <div class="meta">
                                        <p class="date">August 29, 2018</p>
                                        <p class="price"><a href="https://www.makeusfly.com/chicago-to-cancun" class="btn btn-theme">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-item">
                                <div class="logo-ticket">
                                    <img src="https://www.makeusfly.com/public/assets/img/destinations/hartford-raleighdurham/front.jpg" alt="" width="166">
                                </div>
                                <div class="ticket-content">
                                    <h6>
                                    <a href="https://www.makeusfly.com/hartford-to-raleigh-durham" title="">Hartford - Raleigh Durham</a>
                                    </h6>
                                    <div class="meta">
                                        <p class="date">August 28, 2018</p>
                                        <p class="price"><a href="https://www.makeusfly.com/hartford-to-raleigh-durham" class="btn btn-theme">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticket-container">
                            <div class="ticket-item">
                                <div class="logo-ticket">
                                    <img src="https://www.makeusfly.com/public/assets/img/destinations/houston-cancun/front.jpg" alt="" width="166">
                                </div>
                                <div class="ticket-content">
                                    <h6>
                                    <a href="https://www.makeusfly.com/houston-to-cancun" title="">Houston - Cancun</a>
                                    </h6>
                                    <div class="meta">
                                        <p class="date">March 29, 2018</p>
                                        <p class="price"><a href="https://www.makeusfly.com/houston-to-cancun" class="btn btn-theme">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-item">
                                <div class="logo-ticket">
                                    <img src="https://www.makeusfly.com/public/assets/img/destinations/losangeles-Phoenix/front.jpg" alt="" width="166">
                                </div>
                                <div class="ticket-content">
                                    <h6>
                                    <a href="https://www.makeusfly.com/los-angeles-to-phoenix" title="">Los Angeles- Phoenix</a>
                                    </h6>
                                    <div class="meta">
                                        <p class="date">March 29, 2018</p>
                                        <p class="price"><a href="https://www.makeusfly.com/los-angeles-to-phoenix" class="btn btn-theme">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ticket-container">
                            <div class="ticket-item">
                                <div class="logo-ticket">
                                    <img src="https://www.makeusfly.com/public/assets/img/destinations/miami-providenciales/front.jpg" alt="" width="166">
                                </div>
                                <div class="ticket-content">
                                    <h6>
                                    <a href="https://www.makeusfly.com/miami-to-providenciales" title="">Miami - Providenciales</a>
                                    </h6>
                                    <div class="meta">
                                        <p class="date">March 29, 2018</p>
                                        <p class="price"><a href="https://www.makeusfly.com/miami-to-providenciales" class="btn btn-theme">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-item">
                                <div class="logo-ticket">
                                    <img src="https://www.makeusfly.com/public/assets/img/destinations/philadelphia-malwaukee/front.jpg" alt="" width="166">
                                </div>
                                <div class="ticket-content">
                                    <h6>
                                    <a href="https://www.makeusfly.com/philadelphia-to-milwaukee" title="">Philadelphia - Malwaukee</a>
                                    </h6>
                                    <div class="meta">
                                        <p class="date">March 29, 2018</p>
                                        <p class="price"><a href="https://www.makeusfly.com/philadelphia-to-milwaukee" class="btn btn-theme">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="topdestini-us">
    <div class="container">
        <!-- <div class="row">
            <div class="col-sm-12 text-center">
                <div class="title-default ver-1">
                    <h3>NECESSARY <span>INFOMATION</span><span class="icon"><img src="img/icon_title.png" alt=""></span></h3>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href="https://www.makeusfly.com/flights-to-paris">
                <div class="topdestini-container center">
                    <div class="image-topdestini">
                        <img src="https://www.makeusfly.com/public/assets/img/destinations/paris/front.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="topdestini-content">
                        <h6>Flights to Paris</h6>                       
                        <p>Intelligent Booking System with no Refund Policy.</p>
                    </div>
                </div>
                </a> 
            </div>
            
            <div class="col-sm-6 col-md-3">
                <a href="https://www.makeusfly.com/flights-to-new-york">
                <div class="topdestini-container center">
                    <div class="image-topdestini">
                        <img src="https://www.makeusfly.com/public/assets/img/destinations/newyork/front.jpg" class="rounded-circle" alt="">
                        
                    </div>
                    <div class="topdestini-content">
                        <h6>Flights to New York </h6>
                        <p>Safe Online Bookings with Convenient Payment Options.</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="https://www.makeusfly.com/flights-to-las-vegas">
                <div class="topdestini-container center">
                    <div class="image-topdestini">
                        <img src="https://www.makeusfly.com/public/assets/img/destinations/lasvegas/front.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="topdestini-content">
                         <h6>Flights to Las Vegas</h6>
                        <p>Fly to International Destinations with Cheap Flight Tickets.</p>
                    </div>
                </div>
                </a> 
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="https://www.makeusfly.com/flights-to-miami">
                <div class="topdestini-container center">
                    <div class="image-topdestini">
                        <img src="https://www.makeusfly.com/public/assets/img/destinations/miami/front.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="topdestini-content">
                        <h6>Flights to Miami</h6>                      
                        <p>Travel Abroad with our Intelligent & Secure Booking System Online.</p>
                    </div>
                </div>
                </a>  
            </div>
            
        </div>
    </div>
</section>
<section class="infomation-area flex">
    <div class="two-column bg-infomation">
        <div class="necessary-infomation">
            <div class="title-default ver-1">
                <h3>Necessary  <span>Information</span><span class="icon"><img src="https://www.makeusfly.com/public/assets/img/icon_title.png" alt=""></span></h3>
            </div>
            <ul class="list-infomation">
                <li>
                    <span class="fa fa-circle-o"></span> A Pre-flight medical certificate is mandatory for passengers who travel on airplanes. In the absence of which, passengers will not be allowed to fly.
                </li>
                <li><span class="fa fa-circle-o"></span> Passengers should know how to distinguish between fake flight tickets and real flight tickets.</li>
                <li><span class="fa fa-circle-o"></span> Passengers must know how to handle lost tickets.</li>
                <li><span class="fa fa-circle-o"></span> Pack liquids tightly and pack them in your luggage. Carrying items with a carry-on may not be allowed while boarding an aircraft.</li>
                <li><span class="fa fa-circle-o"></span> Airlines have airport shuttle facilities with applicable fees.</li>
                <li><span class="fa fa-circle-o"></span> Bus Routes go from downtown Ho Chi Minh City to Tan Son Naht Airport and vice versa.</li>
                <li><span class="fa fa-circle-o"></span> The Bus Routes go from Central Hanoi to Noi Bai Airport and vice versa.</li>
                <li><span class="fa fa-circle-o"></span> The Baggage and carry bag are checked before boarding the aircraft. Passengers are requested not to hold up the security lines.</li>
                <li><span class="fa fa-circle-o"></span> We do offer flights at special rates for the elderly and senior citizens.</li>
                <li><span class="fa fa-circle-o"></span> Do not carry smelly food to the airplane. Passengers are requested to have their food plates within the space provided and avoid messing around.</li>
                <li><span class="fa fa-circle-o"></span> Ticket prices for children, senior citizens, and disabled are applicable.</li>
            </ul>
        </div>
    </div>
    <div class="two-column">
        <div class="payment-safery">
            <div class="title-default ver-1">
                <h3>Easy Payment <span>: Safety</span><span class="icon"><img src="https://www.makeusfly.com/public/assets/img/icon_title.png" alt=""></span></h3>
            </div>
            <ul class="list-payment">
                <li class="payment-item left">
                    <div class="icon">
                        <img src="https://www.makeusfly.com/public/assets/img/payment_1.png" alt="">
                        <span>01</span>
                    </div>
                    <div class="payment-content">
                        <h6 class="title">
                        CASH PAYMENT AT THE OFFICE
                        </h6>
                        <p>After successfully placing the order and receiving a confirmation message for your bookings, please visit the ticket office to make complete payments and receive the tickets. Alteration in any form, if any, will not be considered.</p>
                    </div>
                </li>
                <li class="payment-item right">
                    <div class="icon">
                        <img src="https://www.makeusfly.com/public/assets/img/payment_2.png" alt="">
                        <span>02</span>
                    </div>
                    <div class="payment-content">
                        <h6 class="title">
                        ONLINE PAYMENT SYSTEM: SAFE & SECURE
                        </h6>
                        <p>Passengers can make payment for the flight tickets immediately online. There will be various options like credit card payment, bank transfer, debit card payment, payment via net banking, etc on our website.</p>
                    </div>
                </li>
                <li class="payment-item left">
                    <div class="icon">
                        <img src="https://www.makeusfly.com/public/assets/img/payment_3.png" alt="">
                        <span>03</span>
                    </div>
                    <div class="payment-content">
                        <h6 class="title">
                        PAYMENT AT YOUR CHOSEN ADDRESS
                        </h6>
                        <p>Passengers can choose a location to meet our staff executive for receiving the tickets and making the complete payment. Passengers can pay in cash or by card to our staff executive at the address selected by them.</p>
                    </div>
                </li>
                <li class="payment-item right">
                    <div class="icon">
                        <img src="https://www.makeusfly.com/public/assets/img/payment_4.png" alt="">
                        <span>04</span>
                    </div>
                    <div class="payment-content">
                        <h6 class="title">
                        PAYMENT BY TRANSFER OF FUNDS
                        </h6>
                        <p>Passengers also get the option to do a bank transfer directly to our accounts via ATM card or internet banking. It is a 100% safe, easy, and time saving method. Tickets can be collected post the transfer is done.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>





<?php get_footer(); ?>