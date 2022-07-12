@extends('layout.master')
@section('main')
<div class="section page-header products-header wf-section">
    <div class="container-fluid container-smaller">
      <div class="div-centering">
        <div class="tb-breadcrumbs">
          <!-- Breadcrumb NavXT 7.0.2 -->
          <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
              title="Go to Bluefilters." href="{{route('home')}}" class="home"><span property="name">Bluefilters</span></a>
            <meta property="position" content="1">
          </span><span class="bread-space">-</span><span property="itemListElement" typeof="ListItem"><span
              property="name" class="post post-page current-item">Sectors</span>
            <meta property="url" content="index.html">
            <meta property="position" content="2">
          </span>
        </div>
      </div>
      <div class="div-header-page">
        <h1 class="heading-section">Water filters in professional application</h1>
        <div class="div-page-header-rich">
          <div class="rich-main w-richtext">
            <h4>Water filters usually vary across sectors. The reason for that is different water characteristics
              required in each business for optimal results.</h4>
            <p>In HoReCa, it is essential to have tasty and limescale-free water for flavourful brewers and easy
              equipment maintenance. Soft water is a must in beauty and hair salons, as it gives a silky sensation to
              the skin and hair. The industry needs purified water for a smooth workflow, it allows to keep the machines
              in good condition and reduce downtimes.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section smaller-margin-top wf-section">
    <div class="container-fluid container-smaller">
      <div class="div-flex-offer-container">

        <div class="div-offer-item section-info-item">
          <div class="tb-subheading"></div>
          <h2 class="heading-section">Change your water - for better</h2>
          <div class="div-rich-excerpt-offer">
            <div class="excerpt-paragraph">
              <p>It is difficult to meet such specific business needs with one simple, versatile solution.</p>
              <p>Therefore, in Bluefilters Professional, we have developed individual water filter systems to deliver
                the best water for your sector, and the best performance in your field.</p>
            </div>
          </div>
        </div>


        <div class="div-offer-item first-item-flex">
          <a href="../sector/horeca-water-filters/index.html" class="a-offer-item w-inline-block">

            <img width="1024" height="405" src="../wp-content/uploads/2021/09/photo12-1024x405.jpg" class="img-offer-el"
              alt="Inside of a cosy restaurant." loading="lazy"
              srcset="https://bluefilters.com/wp-content/uploads/2021/09/photo12-1024x405.jpg 1024w, https://bluefilters.com/wp-content/uploads/2021/09/photo12-500x198.jpg 500w, https://bluefilters.com/wp-content/uploads/2021/09/photo12-768x304.jpg 768w, https://bluefilters.com/wp-content/uploads/2021/09/photo12-1536x607.jpg 1536w, https://bluefilters.com/wp-content/uploads/2021/09/photo12.jpg 1920w"
              sizes="(max-width: 1024px) 100vw, 1024px" />
            <div class="div-overlay-offer-item">
              <div class="tb-name-offer">HoReCa</div>
            </div>
          </a>
        </div>


        <div class="div-offer-item quarter-item">
          <a href="../sector/industrial-water-filters/index.html" class="a-offer-item w-inline-block">

            <img width="620" height="551" src="../wp-content/uploads/2021/09/photo04.jpg" class="img-offer-el"
              alt="Piping system in a manufacture plant." loading="lazy"
              srcset="https://bluefilters.com/wp-content/uploads/2021/09/photo04.jpg 620w, https://bluefilters.com/wp-content/uploads/2021/09/photo04-394x350.jpg 394w"
              sizes="(max-width: 620px) 100vw, 620px" />
            <div class="div-overlay-offer-item">
              <div class="tb-name-offer">Industry</div>
            </div>
          </a>
        </div>


        <div class="div-offer-item quarter-item">
          <a href="../sector/hair-salon-water-filters/index.html" class="a-offer-item w-inline-block">

            <img width="620" height="551" src="../wp-content/uploads/2021/09/photo05.jpg" class="img-offer-el"
              alt="Hair washing in a beauty saloon." loading="lazy"
              srcset="https://bluefilters.com/wp-content/uploads/2021/09/photo05.jpg 620w, https://bluefilters.com/wp-content/uploads/2021/09/photo05-394x350.jpg 394w"
              sizes="(max-width: 620px) 100vw, 620px" />
            <div class="div-overlay-offer-item">
              <div class="tb-name-offer">Beauty</div>
            </div>
          </a>
        </div>


        <div class="div-offer-item">
          <a href="../sector/office-water-filters/index.html" class="a-offer-item w-inline-block">

            <img width="1024" height="434" src="../wp-content/uploads/2021/09/photo06-1024x434.jpg" class="img-offer-el"
              alt="A woman pouring a glass of water form the water dispenser." loading="lazy"
              srcset="https://bluefilters.com/wp-content/uploads/2021/09/photo06-1024x434.jpg 1024w, https://bluefilters.com/wp-content/uploads/2021/09/photo06-500x212.jpg 500w, https://bluefilters.com/wp-content/uploads/2021/09/photo06-768x326.jpg 768w, https://bluefilters.com/wp-content/uploads/2021/09/photo06.jpg 1301w"
              sizes="(max-width: 1024px) 100vw, 1024px" />
            <div class="div-overlay-offer-item">
              <div class="tb-name-offer">Office</div>
            </div>
          </a>
        </div>


      </div>
    </div>
  </div>
@endsection