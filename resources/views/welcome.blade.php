@extends('layout')
@section('title', 'Homepage')
@section('content')
<section class="page_slider">
    <div class="flexslider">
        <ul class="slides">
            <li class="ds cover-image">
                <img src="/images/slide01.jpg" alt="img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer">
                                        
                                        <h2 class="text-capitalize intro_featured_word">
                                            Your international supply chain trader
                                        </h2>
                                       
                                    </div>
                                </div> <!-- eof .intro_layers -->
                            </div> <!-- eof .intro_layers_wrapper -->
                        </div> <!-- eof .col-* -->
                    </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
            </li>
            <li class="ds cover-image">
                <img src="/images/slide02.jpg" alt="img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer">
                                        <h2 class="text-capitalize intro_featured_word">
                                            Trade simplified 
                                        </h2>
                                    </div>
                                </div> <!-- eof .intro_layers -->
                            </div> <!-- eof .intro_layers_wrapper -->
                        </div> <!-- eof .col-* -->
                    </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
            </li>
            <li class="ds cover-image">
                <img src="/images/slide03.jpg" alt="img">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer">
                                        <h2 class="text-capitalize intro_featured_word">
                                            Energy & Commodities at its best
                                        </h2>
                                    </div>
                                </div> <!-- eof .intro_layers -->
                            </div> <!-- eof .intro_layers_wrapper -->
                        </div> <!-- eof .col-* -->
                    </div><!-- eof .row -->
                </div><!-- eof .container-fluid -->
            </li>


        </ul>
    </div> <!-- eof flexslider -->
</section>

<section class="ds text-sm-left text-center container-px-0 c-gutter-0">
    <div class="container-fluid">
        <div class="row service-v2">
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="#chemicals">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-refinery"></i>
                        </div>
                    </a>
                    <a href="#chemicals">
                        <h5>
                            Chemicals and Aromatic
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="#liquid">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-tank"></i>
                        </div>
                    </a>
                    <a href="#liquid">
                        <h5>
                            Liquid Gas and Feedstock
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="#oil">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-oil"></i>
                        </div>
                    </a>
                    <a href="#oil">
                        <h5>
                           Oil and Petroleum
                        </h5>
                    </a>                   
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="#fertilizers">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-extraction"></i>
                        </div>
                    </a>
                    <a href="#fertilizers">
                        <h5>
                           Fertilizers
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="#food">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-oil-tanker"></i>
                        </div>
                    </a>
                    <a href="#food">
                        <h5>
                           Food
                        </h5>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2   ">
                <div class="icon-box service-single with-icon layout2 ds text-center">
                    <a class="link-icon" href="#bitumen">
                        <div class="icon-styled  fs-50">
                            <i class="ico ico-pipe"></i>
                        </div>
                    </a>
                    <a href="#bitumen">
                        <h5>
                           Bitumen
                        </h5>
                    </a>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 text-center">
                <h2 class="special-heading text-center">
                    <span class="text-capitalize">
                        welcome!
                    </span>
                </h2>
                <div class="divider-30"></div>
                <a class="btn btn-gradient big-btn" href="/about_us">See More</a>
            </div>
            <div class="col-12 col-lg-9 text-center">
                <div class="divider-35 hidden-above-lg"></div>
                <div class="divider--5"></div>
                <p class="excerpt">
                    Welcome to NCM Trading where development is constant. Since inception we have concentrated on developing and formalizing business relationships with our strategically partners and clients.
                </p>
                <p>
                    NCM Trading, by experience is one of the leading independent Energy and Commodities Trading houses globally. We provide, manage and execute sustainable trade and logistics solutions putting quality and safety at paramount when moving physical energy and bulk materials from source to final destination.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
    <div class="cover-image s-cover-left">
        <img src="/images/services/service1.jpg" alt="01">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col-lg-6">

            </div>
            <div class="col-xs-12 col-12 col-lg-6" id="chemicals">
                <div class="content-center">
                    <h2 class="special-heading numeric text-sm-left text-center">
                        <span class="text-capitalize">
                            Chemicals and Aromatic
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>
                        We take advantage of our team’s comprehensive knowledge of the Chemical and Aromatic specialty industry and extensive networking with major producers regionally and globally to ensure NCM WORLDWIDE TRADING is able to supply the Chemical and Aromatic products that meet your demands. Below are some of our products 
                    </p>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <div class="row">
                        <div class="col-xs-12 col-12 col-lg-6">
                            <h6 class="mb-1">Chemicals</h6>
                            <ul class="list-styled">
                                <li>Methanol </li>
                                <li>Di Ethylene Glycol (DEG)</li> 
                                <li>Mono Ethylene Glycol (MEG)</li>
                                <li>Tri Ethylene Glycol (TEG) </li>  
                                <li>Linear Alkyl Benzene (LAB) </li>  
                                <li>PTA/TDI/Crystal Melamine </li>  
                                <li>Epoxy Resins/Acetic Acid </li>  
                                <li>Sodium Carbonate Heavy/Light  </li> 
                                <li>Caustic Soda/MTBE  </li> 
                                <li>Vinyl Chloride Monomer (VCM)  </li> 

                            </ul>
                        </div>
                        <div class="col-xs-12 col-12 col-lg-6">
                            <h6 class="mb-1">Aromatic</h6>
                            <ul class="list-styled">
                                <li>Benzene  </li>
                                <li>Ortho-Xylene </li>
                                <li>Para Xylene </li> 
                                <li>Mixed-Xylene </li>  
                                <li>Toluene </li>
                            </ul>
                        </div>
                    </div>
                    <div class="divider--10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
    <div class="cover-image s-cover-right">
        <img src="/images/services/petroleum.jpg" alt="01">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col-lg-6" id="oil">
                <div class="content-center">
                    <h2 class="special-heading numeric text-sm-left text-center">
                        <span class="text-capitalize">
                            Oil and Petroleum
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>
                        NCM is one of the key players in crude oil and petroleum industry in the world. We offtake these products from source and producers available and manage its trading, storing, financing and supply to our clients. Among our list of activities in trade and commodities, below are other oil products we deal on:
                    </p>
                    <div class="divider-45 hidden-below-lg"></div>
                    <h6 class="mb-1">Crude/Petroleum:  </h6>
                        <ul class="list-styled">
                           
                            <li>Crude Oil</li>
                            <li>Gas Oil / Gasoline </li>
                            <li>Fuel Oil 380CST - 280CST - HSFO 180 </li> 
                            <li>Naphtha (Light & Heavy)  </li>
                            <li>Condensate  </li>
                            <li>Base Oil SN 100 - 150 - 350 - SN 500 - 600 - SN650 - SN900 </li> 
                            <li>Heavy/Light RPO  </li>
                            <li>Kerosene </li> 
                            <li>Solvent 402</li>
                        </ul>
                </div>
            </div>
            <div class="col-xs-12 col-12 col-lg-6">
            </div>
        </div>
    </div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
    <div class="cover-image s-cover-left">
        <img src="/images/services/fertilizers.jpg" alt="01">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col-lg-6">

            </div>
            <div class="col-xs-12 col-12 col-lg-6" id="fertilizers">
                <div class="content-center">
                    <h2 class="special-heading numeric text-sm-left text-center">
                        <span class="text-capitalize">
                           Fertilizers
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>Our team experts go extra miles working closely with the logistic departments to ensure quality and safety in sourcing and making available different types of fertilizers.  We are particular about the quality of products we provide which makes us source them from notable plants and producers with long history of high quality reputation.</p>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <ul class="list-styled">
                        <li>Urea  46% Prilled/Granulated </li>  
                        <li>Sulphur Lump/Granulated  </li>  
                        <li>Di-Ammonium Phosphate (DAP) </li>   
                        <li>Anhydrous Liquid Ammonia</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
    <div class="cover-image s-cover-right">
        <img src="/images/services/food.jpg" alt="01">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col-lg-6"  id="food">
                <div class="content-center">
                    <h2 class="special-heading numeric text-sm-left text-center">
                        <span class="text-capitalize">
                            Food
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>NCM understands the implication of the word ‘you are what we eat’ which makes us take the food section very seriously. We offer a wide range of food including but not limited to Rice, Sugar, Edible oil and Flour. We have a seasoned army of food experts with years of experience and achievements who ensure safety and quality while sourcing and before moving them to the end user.
                    </p>
                    <div class="divider-45 hidden-below-lg"></div>
                    
                        <ul class="list-styled">
                            <li>Rice</li>
                            <li>Sugar: white/brown/cane/beet</li>
                            <li>Edible Oil</li>
                            <li>Flour</li>
                        </ul>
                </div>
            </div>
            <div class="col-xs-12 col-12 col-lg-6">


            </div>
        </div>
    </div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
    <div class="cover-image s-cover-left">
        <img src="/images/services/liquid_gas.jpg" alt="01">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col-lg-6">

            </div>
            <div class="col-xs-12 col-12 col-lg-6" id="liquid">
                <div class="content-center">
                    <h2 class="special-heading numeric text-sm-left text-center">
                        <span class="text-capitalize">
                           Liquid Gas And Feedstock
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>LIQUID GAS AND FEEDSTOCK:   
                        NCM trade desk covers a wide range of products in the liquid gas and feedstock market. Knowing they a volatile and highly flameable products, our management and logistics team ensure safety to the best of our ability to enable successful deliveries at all times. 
                    </p>
                    <div class="divider-50 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <ul class="list-styled">
                        <li>LPG  Propane: Butane C3:C4 50:50 - 40:60 - 30:70 </li>   
                            <li>Heavy End </li>      
                            <li>Ethylene </li>      
                            <li>Pentane Plus (C5+) </li>      
                            <li>Raffinate (C6-Non Aromatic) </li>      
                            <li>1,3 Butadiene </li>      
                            <li>C4-Raffinate</li>       
                            <li>C6-C9 Non-Aromatic </li>   
                            <li>Polypropylene - PI 080 </li>      
                            <li>Propylene </li>      
                            <li>Ethylene Dichloride</li>       
                            <li>Ethane </li>   
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
    <div class="cover-image s-cover-right">
        <img src="/images/services/bitumen.jpg" alt="01">
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-12 col-lg-6" id="bitumen">
                <div class="content-center">
                    <h2 class="special-heading numeric text-sm-left text-center">
                        <span class="text-capitalize">
                            Bitumen
                        </span>
                    </h2>
                    <div class="divider-45 hidden-below-lg"></div>
                    <div class="divider-30 hidden-above-lg"></div>
                    <p>
                        NCM Worldwide Trading has secured an extensive global network of well-known major producers, as well as a healthy portfolio of End Users. Our team of professionals come with over 20years related experience. We can offer bitumen all grades on bulk or containerized shipments, packed in new or reconditioned steel drums. We focus on our customer’s requirements; our aim is to deliver the highest quality products on time every time.
                    </p>
                    <div class="divider-45 hidden-below-lg"></div>
                    <h6 class="mb-1">Bitumen all Grades   </h6>
                        <ul class="list-styled">
                            <li>Penetration Bitumen 60-70 </li> 
                            <li>Penetration Bitumen 85-100 </li> 
                            <li>Penetration Bitumen 40-50</li>  
                            <li>Penetration Bitumen 50-70 </li> 
                            <li>Penetration bitumen 30-40 </li> 
                            <li>Penetration Bitumen 100-120 </li> 
                            <li>Oxidized Bitumen 85-25</li>  
                            <li>Oxidized Bitumen 90-15 </li> 
                            <li>Cutback Bitumen MC250</li>
                        </ul>
                </div>
            </div>
           
        </div>
    </div>
</section>

<section class="ds call-to-action text-center  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="special-heading text-center">
                    <span class="text-capitalize big">
                        NCM Worldwide Trading can make available products through a wide range of sources on FOB/CFR basis 
                    </span>
                </h2>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <a class="btn btn-darkgrey big-btn" href="/trading">See More</a>
            </div>
        </div>
    </div>
</section>

<section class="ls map-section s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-160 s-pb-lg-130 s-pb-md-90 s-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="special-heading">
                    <span class="text-capitalize">
                        Worldwide Trading 
                    </span>
                </h2>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>
                <p class="special-heading">
                    <span>
                        We focus strictly on principal to principal transactions to ensure timely delivery of information and commodity. Our experienced compliance team is dedicated to ensuring NCM Worldwide Trading offers a risk-free trading platform to all our customers. Direct access to products has provided a solid foundation and enabled NCM Worldwide Trading to be your trusted international chain trader.
                    </span>
                </p>
                <div class="divider-45 hidden-below-lg"></div>
                <div class="divider-30 hidden-above-lg"></div>

            </div>
            <div class="col-lg-6">
                <div class="divider-40 hidden-above-lg"></div>
                <div id="map-vector"></div>
            </div>
        </div>
    </div>
</section>

@endsection