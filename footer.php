<style>
#footer-primary {
    background: var(--primary-color);
    padding-top: 4rem;
    padding-bottom: 4rem;
}
    #footer-primary h4 {
        color: #fff;
    }
    #footer-primary p,
    #footer-primary a {
       color: #ffffffb5;
       text-decoration: none;
       transition: all 0.2s ease-in-out;
    }
    

    /** 
    * Quick contact
    */
    .quick-contact-info {
    }
        .quick-contact-info li {
            border-bottom: 0px none !important;
            margin-bottom: 1.7rem;
        }
            .quick-contact-info a {
                display: flex;
                align-items: center;
            }
            .quick-contact-info span {
                background: var(--secondary-color);
                min-height: 35px;
                min-width: 35px;
                color: #fff;
                font-size: 1.5rem;
                text-align: center;
                line-height: 31px;
                border-radius: 100px;
                border: 2px solid #fff;
                margin-right: 1.5rem;
            }


    /** 
    * Footer menus
    */
    #footer-primary nav.menu {

    }
        #footer-primary nav.menu li:not(:last-child) {
            border-bottom: 1px solid #ffffff36;
        }
            #footer-primary nav.menu a {
                padding: 1.3rem 0;
                display: block;
            }
            #footer-primary li a:hover {
                color: #fff;
            }

    
    /** 
    * Footer newsletter
    */
    .newsletter {
        display: flex;
    }
        .newsletter input {
            border: 0;
            font-size: 1.5rem;
            border-radius: var(--bor-rad) 0 0 var(--bor-rad);
        }
        .newsletter button {
            text-indent: -99999px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            padding: 0;
            width: 50px;
            
        }
        .newsletter button::after {
            text-indent: 0;
        }

    @media only screen and (max-width: 850px) {

        #footer-primary {
        }

        #footer-primary .span-3 {
            grid-column: span 4;
        }
        .newsletter-footer {
            display: none;
        }

    }

    @media only screen and (max-width: 700px) {

        #footer-primary .span-3 {
            grid-column: span 6;
        }
        #footer-primary .get-in-touch-footer {
            grid-column: span 12;
        }

    }

</style>

<footer id="footer-primary">
        <div class="wrapper">
            <div class="grid-row gap">
                <div class="get-in-touch-footer span-3">
                    <h4>Get in Touch</h4>
                    <p>Lorem ipsum dolor sit amet, consecte adipisicing 
                    elit, sed do eiusmod tempor incididunt.</p>

                    <div class="quick-contact-info">
                        <ul>
                            <li>
                                <a href="tel:020 1234 789">
                                    <span class="ti-mobile"></span>
                                    020 1234 789
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ti-email"></span>
                                    hello@example.com
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="ti-skype"></span>
                                    skypesynergy
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="our-services-footer span-3">
                    <h4>Our Services</h4>
                    <nav class="menu">
                        <ul>
                            <li><a href="">Accounting</a></li>
                            <li><a href="">Audit</a></li>
                            <li><a href="">Business Planning</a></li>
                            <li><a href="">Corporate Finance</a></li>
                            <li><a href="">Payroll</a></li>
                            <li><a href="">VAT</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="site-navigation-footer span-3">
                    <h4>Site Navigation</h4>
                    <nav class="menu">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Pricing</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="newsletter-footer span-3">
                    <h4>Stay Connected</h4>
                    <p>Nam auctor iaculis mauris, non ullamcorper leo.</p>

                    <form class="newsletter">
                        <input type="text" placeholder="Email address">
                        <button class="btn btn-with-arrow">Submit</button>
                    </form>

                </div>

            </div>
        </div>
    </footer>
