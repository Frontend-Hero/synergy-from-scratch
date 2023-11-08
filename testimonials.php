<style>

 #testimonials-area {
        background: var(--primary-color);
        padding: 70px 50px 70px 90px;
        transition: all 0.3s ease;
    }
        #testimonials-area * {
            color: #fff;
        }

        #testimonial-thumbnails-wrapper {
            height: 100%;
            position: relative;
        }
            #testimonial-thumbnails-navigation {
                position: absolute;
                right: -70px;
                width: 225px;
                height: 225px;
                top: 50%;
                transform: translateY(-50%);
                z-index: 1;
            }

            #testimonial-thumbnails-navigation span {
                background: var(--light-grey);
                display: block;
                right: 0;
                bottom: 0;
                position: absolute;
                width: 35px;
                height: 35px;
                cursor: pointer;
                transition: all 0.3s ease;
                z-index: 1;
                font-weight: bold;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 1.3rem;
            }
            #testimonial-thumbnails-navigation span:hover {
                background: var(--grey);
                color: #fff;

            }
            #testimonial-thumbnails-navigation span.prev {
                right: 36px;
            }

            figcaption p {
                margin: 0;
                font-weight: bold;
            }
            figcaption p.job-role {
                font-weight: normal;
                opacity: 0.6;
            }

            #testimonials blockquote {
                position: relative;
                padding-left: 30px;
            }
            #testimonials blockquote:before {
                content: "\e67f";
                color: var(--secondary-color);
                width: 20px;
                height: 20px;
                position: absolute;
                left: 0px;
                font-family: 'themify';
            }

            figcaption {
                margin-left: 30px;
            }


            @media only screen and (max-width: 850px) {

                #testimonials .span-4 {
                    display: none;
                }
                #testimonials-area {
                    grid-column: span 12;
                    padding: 25px 25px 25px 20px;
                }


            }



            



















  
  
.slick-slider
{
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
</style>
    

    <section id="testimonials">
        <div class="wrapper">
            <h2 class="text-align-center">What our clients are saying</h2>
            <div class="grid-row gap">
                <div class="span-4">
                    
                    <div id="testimonial-thumbnails-wrapper">
                   
                        <div id="testimonial-thumbnails-navigation">
                            <div id="testimonial-thumbnails">
                                                        
                                <div class="thumbnail">
                                    <img src="" alt="Testimonial photo of...">	
                                </div>
                                                                
                                <div class="thumbnail">
                                    <img src="" alt="Testimonial photo of...">	
                                </div>
                                                            
                            </div>
                        </div>
                    </div>
                </div>







              
                <div id="testimonials-area" class="span-8">
                
                    <figure class="quote">
                        <blockquote>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium 
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati 
                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi,
                            id est laborum et dolorum fuga. </p>
                        </blockquote>
                        <figcaption>
                            <p class="author">Robert Hicilucum</p>
                            <p class="job-role">Managing Director </p>
                        </figcaption>
                    </figure>
                    
                    
                    <figure class="quote">
                        <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.&nbsp;</p>
                        </blockquote>
                        <figcaption>
                            <p class="author">Susan Berkway</p>
                            <p class="job-role">Web Strategist</p>
                        </figcaption>
                    </figure>

                </div>
            </div>
        </div>
    </section>

    
    



    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    
    const testimonialsSlider = jQuery('#testimonials-area');
    const testimonialsThumbnailSlider = jQuery('#testimonial-thumbnails');
    
    testimonialsSlider.slick({
        appendArrows: jQuery('#testimonial-thumbnails-navigation'),
        prevArrow: '<span class="prev ti-angle-left"></span>',
        nextArrow: '<span class="next ti-angle-right"></span>',
        asNavFor: testimonialsThumbnailSlider,
        //adaptiveHeight: true,
        fade: true
    });
    
    testimonialsThumbnailSlider.slick({ 
        asNavFor:testimonialsSlider,
        fade: true,
        arrows: false
    });
    </script>
    
