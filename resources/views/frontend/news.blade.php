@extends('layout.master')
@section('main')
<div class="section page-header wf-section">
    <div class="container-fluid container-smaller">
      <div class="div-centering">
        <div class="tb-breadcrumbs">
          <!-- Breadcrumb NavXT 7.0.2 -->
          <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
              title="Go to Bluefilters." href="{{route('home')}}" class="home"><span property="name">Bluefilters</span></a>
            <meta property="position" content="1">
          </span><span class="bread-space">-</span><span property="itemListElement" typeof="ListItem"><span
              property="name" class="post post-page current-item">News</span>
            <meta property="url" content="index.html">
            <meta property="position" content="2">
          </span>
        </div>
      </div>
      <div class="div-header-page">
        <h1 class="heading-section">News & blog</h1>
        <div class="div-page-header-rich">
          <div class="rich-main w-richtext">
            <p>If you want to know more about innovative water filters, you are in the right place.</p>
            <p>We will keep you up-to-date with news and events from the water treatment industry. Watch this space for
              tips and advice on water filtration for various sectors, including HoReCa, beauty, office &amp; public and
              industry &amp; manufacture.</p>
            <p>Do you want to share a story or suggest an industry-related case? Let us know, we&#8217;d love to hear
              from you!</p>
          </div>
        </div>
      </div>
      <div class="div-news-categories">
        <a href="index.html" class="a-category-news active-category">all</a>
        <a href="../category/experts-zone/index.html" class="a-category-news">Expert's zone</a>
        <a href="../category/fair/index.html" class="a-category-news">Fair</a>
        <a href="../category/horeca/index.html" class="a-category-news">HoReCa</a>
        <a href="../category/office/index.html" class="a-category-news">Office</a>
      </div>
      <div class="div-flex-articles">

        <!--fwp-loop-->

        <div class="div-item-article">
          <div class="div-content-article">
            <div class="div-top-news">
              <a href="../hydration-safety-in-a-workplace/index.html" class="a-photo-article w-inline-block">
                <img width="500" height="263" src="../wp-content/uploads/2022/04/hydration-in-a-workplace-500x263.jpg"
                  class="img-article" alt="A portrait of a businessman in loft office holding a glass of water-"
                  loading="lazy"
                  srcset="https://bluefilters.com/wp-content/uploads/2022/04/hydration-in-a-workplace-500x263.jpg 500w, https://bluefilters.com/wp-content/uploads/2022/04/hydration-in-a-workplace-1024x538.jpg 1024w, https://bluefilters.com/wp-content/uploads/2022/04/hydration-in-a-workplace-768x404.jpg 768w, https://bluefilters.com/wp-content/uploads/2022/04/hydration-in-a-workplace.jpg 1210w"
                  sizes="(max-width: 500px) 100vw, 500px" /> </a>
              <div class="tb-date-article">29.04.2022</div>
              <h6 class="h6-article-name"><strong>Hydration safety in a workplace &#8211; why does it matter?</strong>
              </h6>
            </div>
            <div class="div-margin-button-more-news">
              <a href="../hydration-safety-in-a-workplace/index.html" class="button blue-button w-button">Read more<span
                  class="span-arrow-right blue-arrow"> </span></a>
            </div>
          </div>
        </div>

        <div class="div-item-article">
          <div class="div-content-article">
            <div class="div-top-news">
              <a href="../five-reasons-to-give-up-on-serving-water-in-plastic-bottles/index.html"
                class="a-photo-article w-inline-block">
                <img width="500" height="263"
                  src="../wp-content/uploads/2022/01/five-reasons-to-give-up-on-serving-water-in-plastic-bottles-500x263.jpg"
                  class="img-article" alt="" loading="lazy"
                  srcset="https://bluefilters.com/wp-content/uploads/2022/01/five-reasons-to-give-up-on-serving-water-in-plastic-bottles-500x263.jpg 500w, https://bluefilters.com/wp-content/uploads/2022/01/five-reasons-to-give-up-on-serving-water-in-plastic-bottles-1024x538.jpg 1024w, https://bluefilters.com/wp-content/uploads/2022/01/five-reasons-to-give-up-on-serving-water-in-plastic-bottles-768x404.jpg 768w, https://bluefilters.com/wp-content/uploads/2022/01/five-reasons-to-give-up-on-serving-water-in-plastic-bottles.jpg 1210w"
                  sizes="(max-width: 500px) 100vw, 500px" /> </a>
              <div class="tb-date-article">19.01.2022</div>
              <h6 class="h6-article-name"><strong>5 reasons to give up on serving water in plastic bottles.</strong>
              </h6>
            </div>
            <div class="div-margin-button-more-news">
              <a href="../five-reasons-to-give-up-on-serving-water-in-plastic-bottles/index.html"
                class="button blue-button w-button">Read more<span class="span-arrow-right blue-arrow"> </span></a>
            </div>
          </div>
        </div>

        <div class="div-item-article">
          <div class="div-content-article">
            <div class="div-top-news">
              <a href="../trade-fairs-2021-summary/index.html" class="a-photo-article w-inline-block">
                <img width="500" height="290"
                  src="../wp-content/uploads/2022/03/hoga-2021-bluefilters-professional-trade-fairs-500x290.jpg"
                  class="img-article" alt="" loading="lazy"
                  srcset="https://bluefilters.com/wp-content/uploads/2022/03/hoga-2021-bluefilters-professional-trade-fairs-500x290.jpg 500w, https://bluefilters.com/wp-content/uploads/2022/03/hoga-2021-bluefilters-professional-trade-fairs.jpg 620w"
                  sizes="(max-width: 500px) 100vw, 500px" /> </a>
              <div class="tb-date-article">15.12.2021</div>
              <h6 class="h6-article-name"><strong>Trade fairs in 2021 &#8211; a summary of business events</strong></h6>
            </div>
            <div class="div-margin-button-more-news">
              <a href="../trade-fairs-2021-summary/index.html" class="button blue-button w-button">Read more<span
                  class="span-arrow-right blue-arrow"> </span></a>
            </div>
          </div>
        </div>

        <div class="div-item-article">
          <div class="div-content-article">
            <div class="div-top-news">
              <a href="../a-guide-to-water-filters-for-espresso-machines/index.html"
                class="a-photo-article w-inline-block">
                <img width="500" height="333"
                  src="../wp-content/uploads/2021/11/barista-makes-coffee-with-filtered-water-500x333.jpg"
                  class="img-article" alt="barista-at-work-in-a-coffee-shop" loading="lazy"
                  srcset="https://bluefilters.com/wp-content/uploads/2021/11/barista-makes-coffee-with-filtered-water-500x333.jpg 500w, https://bluefilters.com/wp-content/uploads/2021/11/barista-makes-coffee-with-filtered-water-768x512.jpg 768w, https://bluefilters.com/wp-content/uploads/2021/11/barista-makes-coffee-with-filtered-water.jpg 954w"
                  sizes="(max-width: 500px) 100vw, 500px" /> </a>
              <div class="tb-date-article">05.11.2021</div>
              <h6 class="h6-article-name"><strong>A guide to water filters for espresso machines.</strong></h6>
            </div>
            <div class="div-margin-button-more-news">
              <a href="../a-guide-to-water-filters-for-espresso-machines/index.html"
                class="button blue-button w-button">Read more<span class="span-arrow-right blue-arrow"> </span></a>
            </div>
          </div>
        </div>

        <div class="div-item-article">
          <div class="div-content-article">
            <div class="div-top-news">
              <a href="../busy-fall-trade-fairs-schedule/index.html" class="a-photo-article w-inline-block">
                <img width="500" height="263"
                  src="../wp-content/uploads/2021/10/bluefilters-professional-trade-fairs-2021-500x263.jpg"
                  class="img-article" alt="A group of business people standing in a halllway and talking."
                  loading="lazy"
                  srcset="https://bluefilters.com/wp-content/uploads/2021/10/bluefilters-professional-trade-fairs-2021-500x263.jpg 500w, https://bluefilters.com/wp-content/uploads/2021/10/bluefilters-professional-trade-fairs-2021-1024x538.jpg 1024w, https://bluefilters.com/wp-content/uploads/2021/10/bluefilters-professional-trade-fairs-2021-768x404.jpg 768w, https://bluefilters.com/wp-content/uploads/2021/10/bluefilters-professional-trade-fairs-2021.jpg 1210w"
                  sizes="(max-width: 500px) 100vw, 500px" /> </a>
              <div class="tb-date-article">11.10.2021</div>
              <h6 class="h6-article-name"><strong>Busy fall &#8211; Bluefilters&#8217; trade fairs schedule.</strong>
              </h6>
            </div>
            <div class="div-margin-button-more-news">
              <a href="../busy-fall-trade-fairs-schedule/index.html" class="button blue-button w-button">Read more<span
                  class="span-arrow-right blue-arrow"> </span></a>
            </div>
          </div>
        </div>

        <div class="div-item-article">
          <div class="div-content-article">
            <div class="div-top-news">
              <a href="../water-softeners-for-commercial-dishwashers/index.html" class="a-photo-article w-inline-block">
                <img width="500" height="263"
                  src="../wp-content/uploads/2021/10/water-softener-for-commercial-dishwashers-500x263.jpg"
                  class="img-article" alt="A man standing next to a opened dishwasher in a restaurant kitchen."
                  loading="lazy"
                  srcset="https://bluefilters.com/wp-content/uploads/2021/10/water-softener-for-commercial-dishwashers-500x263.jpeg 500w, https://bluefilters.com/wp-content/uploads/2021/10/water-softener-for-commercial-dishwashers-1024x538.jpeg 1024w, https://bluefilters.com/wp-content/uploads/2021/10/water-softener-for-commercial-dishwashers-768x404.jpeg 768w, https://bluefilters.com/wp-content/uploads/2021/10/water-softener-for-commercial-dishwashers.jpeg 1210w"
                  sizes="(max-width: 500px) 100vw, 500px" /> </a>
              <div class="tb-date-article">06.10.2021</div>
              <h6 class="h6-article-name"><strong>Why should you use water softener for commercial dishwashers?</strong>
              </h6>
            </div>
            <div class="div-margin-button-more-news">
              <a href="../water-softeners-for-commercial-dishwashers/index.html"
                class="button blue-button w-button">Read more<span class="span-arrow-right blue-arrow"> </span></a>
            </div>
          </div>
        </div>

      </div>
      <div class="div-pagination">
        <div class="facetwp-facet facetwp-facet-pagination facetwp-type-pager" data-name="pagination" data-type="pager">
        </div>
      </div>
    </div>
  </div>
@endsection