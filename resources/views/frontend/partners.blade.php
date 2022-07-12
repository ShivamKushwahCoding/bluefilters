@extends('layout.master')
@section('main')
    <div class="section page-header page-target-group-single wf-section">
        <div class="container-fluid container-smaller rel-z-index">
            <div class="div-centering">
                <div class="tb-breadcrumbs white-bradcrumbs">
                    <!-- Breadcrumb NavXT 7.0.2 -->
                    <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                            title="Go to Bluefilters." href="{{route('home')}}" class="home"><span
                                property="name">Bluefilters</span></a>
                        <meta property="position" content="1">
                    </span><span class="bread-space">-</span><span property="itemListElement" typeof="ListItem"><span
                            property="name" class="post post-page current-item">Partners</span>
                        <meta property="url" content="index.html">
                        <meta property="position" content="2">
                    </span>
                </div>
            </div>
        </div>
        <div class="div-section-cont">
            <img width="1920" height="718" src="../wp-content/uploads/2021/11/bg-header-partners-1-1.png"
                class="img-page-header-partners" alt="" loading="lazy"
                srcset="https://bluefilters.com/wp-content/uploads/2021/11/bg-header-partners-1-1.png 1920w, https://bluefilters.com/wp-content/uploads/2021/11/bg-header-partners-1-1-1024x383.png 1024w, https://bluefilters.com/wp-content/uploads/2021/11/bg-header-partners-1-1-500x187.png 500w, https://bluefilters.com/wp-content/uploads/2021/11/bg-header-partners-1-1-768x287.png 768w, https://bluefilters.com/wp-content/uploads/2021/11/bg-header-partners-1-1-1536x574.png 1536w"
                sizes="(max-width: 1920px) 100vw, 1920px" />
            <div class="div-overlay-partners">
                <div class="container-fluid container-smaller rev-01">
                    <div class="div-header-page half-header">
                        <h1 class="heading-section">Partners</h1>
                        <div class="div-page-header-rich">
                            <div class="rich-main w-richtext">
                                <p>Bluefilters Professional water filtration systems are available worldwide.</p>
                                <p>If you are looking for solutions customized to your business needs or you are interested
                                    in
                                    collaboration, please contact one of our listed partners or send your request via the
                                    form below.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="a-link-abs-arrow w-inline-block"><img
                    src="../wp-content/themes/wp_bluefilters/images/arrow-down-yellow-circle.svg" loading="lazy"
                    alt="" class="img-arrow-bottom">
                <div class="div-play-anim"></div>
            </a>
        </div>
    </div>

    <!-- COUNTRIES LIST -->
    <div class="div-partners" id="next">
        <div class="container-fluid container-smaller">

            <div class="div-partners-lead">
                <p>If you are looking for a distributor located in your area, please find a list of contact details below.
                    You
                    can also get in touch with us via a contact form. We would be happy to assist you with whatever you
                    need.<br />
                </p>
            </div>

            <!-- <div class="div-products-flex">
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="52" src="../wp-content/uploads/2021/11/img-albania.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="89" /> Albania
                </div>
                <div class="div-partners-cnt">
                  <p><strong>BlueFilters ALBANIA</strong><br />
                    Str: “Tedor Keko”, Kompleksi Romario pranë ish-Doganës, kati I dytë , Tiranë Shqipëri<br />
                    Cel :+355 692 050 564/2<br />
                    Tel : +335 (0) 44 519845<br />
                    <a href="mailto:info@blue-filters.al">info@blue-filters.al</a>
                  </p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="52" src="../wp-content/uploads/2021/11/img-albania.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="89" /> Albania
                </div>
                <div class="div-partners-cnt">
                  <p><strong>BlueFilters ALBANIA</strong><br />
                    Autostrada Dr-Tr Km 0, Durres, Albania<br />
                    tel. +355 694 401 442<br />
                    <a href="mailto:bluefilters.dr@gmail.com">bluefilters.dr@gmail.com</a>
                  </p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="52" src="../wp-content/uploads/2021/11/img-albania.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="89" /> Albania
                </div>
                <div class="div-partners-cnt">
                  <p><strong>BlueFilters ALBANIA</strong><br />
                    Autostrada Dr-Tr Km 0, Durres, Albania<br />
                    tel. +355 694 401 442<br />
                    <a href="mailto:bluefilters.dr@gmail.com">bluefilters.dr@gmail.com</a>
                  </p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="53" src="../wp-content/uploads/2021/11/img-belarus.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="53" width="89" /> Belarus
                </div>
                <div class="div-partners-cnt">
                  <p><strong>Bluefilters Ltd</strong><br />
                    Gromova Str. 28-320<br />
                    Minsk, Belarus, BY 220051</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="90" height="52" src="../wp-content/uploads/2021/11/img-bulgaria.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="90" /> Bulgaria
                </div>
                <div class="div-partners-cnt">
                  <p><strong>Bluefilters Bulgaria</strong><br />
                    Dobri Voinikov 53<br />
                    1164 Sofia</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="90" height="52" src="../wp-content/uploads/2021/11/img-canada.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="90" /> Canada
                </div>
                <div class="div-partners-cnt">
                  <p><strong>Kent Water Purification Systems</strong><br />
                    145 Traders Blvd E, Unit #31<br />
                    Mississauga, ON L4Z 3L3, Canada<br />
                    Phone: 1-888-622-3092<br />
                    <a href="mailto:info@kentwater.ca">info@kentwater.ca</a><br />
                    www.kentwater.ca
                  </p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="90" height="52" src="../wp-content/uploads/2021/11/img-greece.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="90" /> Greece
                </div>
                <div class="div-partners-cnt">
                  <p><strong>Water Shop</strong><br />
                    Evangelia Passa,<br />
                    Ermoupolis,<br />
                    Syros Island</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="59" src="../wp-content/uploads/2022/02/Flag_of_India-e1644333590653.png"
                    class="attachment-full size-full" alt="" loading="lazy" /> India
                </div>
                <div class="div-partners-cnt">
                  <p><strong>VAARIYA BEVERAGE PVT LTD.</strong><br />
                    2-WHITE HOUSE<br />
                    opp: best high school bhirvnath road<br />
                    Ahemdabad Maninagar, pin; 380008</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="91" height="52" src="../wp-content/uploads/2021/11/img-kosovo-1.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="91" /> Kosovo
                </div>
                <div class="div-partners-cnt">
                  <p><strong>Xheni Vata BLUE Filters</strong><br />
                    Cel : +355 69 637 3993</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="91" height="52" src="../wp-content/uploads/2021/11/img-latvia.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="91" /> Latvia
                </div>
                <div class="div-partners-cnt">
                  <p><strong>SIA &#8220;Bluefilters Latvija&#8221;</strong><br />
                    Upeņu iela 17-37D<br />
                    Rīga, LV- 1084<br />
                    Latvia</p>
                  <p>tel. +37128101606</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="52" src="../wp-content/uploads/2021/11/img-russia.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="89" /> Russia
                </div>
                <div class="div-partners-cnt">
                  <p><strong>Gorizia Co. LTD, St.</strong><br />
                    Petersburg, Kanonersky ostrov, 3,<br />
                    korp. 1, liter E, office 1</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="90" height="52" src="../wp-content/uploads/2021/11/img-ukraine.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="90" /> Ukraine
                </div>
                <div class="div-partners-cnt">
                  <p><strong>TOV &#8220;AV Filter&#8221;</strong><br />
                    Buchmy str.5<br />
                    02152 Kiev<br />
                    Ukraine</p>
                </div>

              </div>
            </div>
            <div class="div-product-item">
              <div class="div-content-product-loop">
                <div class="div-partners-name">
                  <img width="89" height="52" src="../wp-content/uploads/2021/11/img-uzbekistan.svg"
                    class="attachment-full size-full" alt="" loading="lazy" height="52" width="89" /> Uzbekistan
                </div>
                <div class="div-partners-cnt">
                  <p><strong>LLC Premium Tea Group</strong><br />
                    Tashkent,<br />
                    Mustaqillik str., 59 AUZBEKISTAN</p>
                </div>

              </div>
            </div>

          </div> -->
        </div>
    </div>



    <!-- CONTACT -->

    <div class="section page-header wf-section div-partners-form">
        <div class="container-fluid container-smaller">

            <div class="div-header-page">
                <div class="div-centering">
                    <h1 class="heading-section">Become our partner</h1>
                </div>
            </div>

            <div class="div-contact-cont">
                <div class="div-contact-details-col">
                    <div class="rich-main w-richtext p-richtext">
                        If you would like to become a Bluefilters Professional provider in your country, please contact us
                        directly
                        and we will get back to you with a partnership offer. </div>

                    <div class="tb-title-contact">Headquarters</div>
                    <div class="divider-contact"></div>
                    <div class="tb-details-contact">Bluefilters GmbH<br />
                        Messingweg 43<br />
                        D-48308 Senden<br />
                        Germany</div>
                </div>
                <div class="div-form-contact-item no-margins-form">
                    <div class="tb-title-contact">Contact form</div>
                    <div class="divider-contact"></div>
                    <div class="div-contact-form-block no-margin-top">
                        <div role="form" class="wpcf7" id="wpcf7-f2080-o1" lang="pl-PL" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="https://bluefilters.com/partners/#wpcf7-f2080-o1" method="post"
                                class="wpcf7-form init wpcf7-acceptance-as-validation" novalidate="novalidate"
                                data-status="init">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="2080" />
                                    <input type="hidden" name="_wpcf7_version" value="5.5.6" />
                                    <input type="hidden" name="_wpcf7_locale" value="pl_PL" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f2080-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                                    <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                                </div>
                                <div class="div-textfield">
                                    <div class="tb-label-tfield">Full name</div>
                                    <p><span class="wpcf7-form-control-wrap Yourname"><input type="text"
                                                name="Yourname" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                                id="Yourname" aria-required="true" aria-invalid="false"
                                                placeholder="Your name" /></span>
                                    </p>
                                </div>
                                <div class="div-textfield">
                                    <div class="tb-label-tfield">Phone number</div>
                                    <p><span class="wpcf7-form-control-wrap YourPhoneNumber"><input type="text"
                                                name="YourPhoneNumber" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field w-input"
                                                id="YourPhoneNumber" aria-required="true" aria-invalid="false"
                                                placeholder="Your Phone Number" /></span>
                                    </p>
                                </div>
                                <div class="div-textfield">
                                    <div class="tb-label-tfield">E-mail</div>
                                    <p><span class="wpcf7-form-control-wrap YourE-mail"><input type="email"
                                                name="YourE-mail" value="" size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email text-field w-input"
                                                id="YourE-mail" aria-required="true" aria-invalid="false"
                                                placeholder="Your E-mail" /></span>
                                    </p>
                                </div>
                                <div class="div-textfield">
                                    <div class="tb-label-tfield">Select your country</div>
                                    <p><span class="wpcf7-form-control-wrap Yourcountry"><select name="Yourcountry"
                                                class="wpcf7-form-control wpcf7-select select-field contact-form-select w-select"
                                                id="Yourcountry" aria-invalid="false">
                                                <option value="Select...">Select...</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="British Virgin Islands">British Virgin Islands</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo - Brazzaville">Congo - Brazzaville</option>
                                                <option value="Congo - Kinshasa">Congo - Kinshasa</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Côte D’Ivoire">Côte D’Ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands">Falkland Islands</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard &amp; McDonald Islands">Heard &amp; McDonald Islands
                                                </option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong SAR China">Hong Kong SAR China</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle Of Man">Isle Of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau SAR China">Macau SAR China</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="North Korea">North Korea</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territories">Palestinian Territories</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Réunion">Réunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="São Tomé &amp; Príncipe">São Tomé &amp; Príncipe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia &amp; South Sandwich Islands">South Georgia
                                                    &amp; South Sandwich
                                                    Islands</option>
                                                <option value="South Korea">South Korea</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St. Barthélemy">St. Barthélemy</option>
                                                <option value="St. Kitts &amp; Nevis">St. Kitts &amp; Nevis</option>
                                                <option value="St. Lucia">St. Lucia</option>
                                                <option value="St. Martin">St. Martin</option>
                                                <option value="St. Pierre &amp; Miquelon">St. Pierre &amp; Miquelon
                                                </option>
                                                <option value="St. Vincent &amp; Grenadines">St. Vincent &amp; Grenadines
                                                </option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard &amp; Jan Mayen">Svalbard &amp; Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Wallis &amp; Futuna">Wallis &amp; Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select></span>
                                    </p>
                                </div>
                                <div class="div-textfield">
                                    <div class="tb-label-tfield">Message</div>
                                    <p><span class="wpcf7-form-control-wrap Yourmessage">
                                            <textarea name="Yourmessage" cols="40" rows="10"
                                                class="wpcf7-form-control wpcf7-textarea text-field textarea w-input" id="Yourmessage" aria-invalid="false"
                                                placeholder="Your message..."></textarea>
                                        </span>
                                    </p>
                                </div>
                                <div class="div-textfield">
                                    <span class="wpcf7-form-control-wrap acceptance-98"><span
                                            class="wpcf7-form-control wpcf7-acceptance"><span
                                                class="wpcf7-list-item"><label><input type="checkbox"
                                                        name="acceptance-98" value="1" aria-invalid="false"
                                                        id="acceptance-98" /><span class="wpcf7-list-item-label">We handle
                                                        and store your data to
                                                        proces your request. By sending it via the contact form you agree to
                                                        our privacy and cookie
                                                        policy.</span></label></span></span></span>
                                </div>
                                <div class="div-textfield button-textfield"><button id='submit'
                                        class='button w-button'>Send message
                                        <span class="span-arrow-right"> </span></button></div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
