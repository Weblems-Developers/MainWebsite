{{-- layout serves as the base template for all pages --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        
        {{-- for ajax post calls  CSRF token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Weblems</title>
        
        {{------------------------------------- style sheet files----------------------------------}}
        <link rel="stylesheet" types ="text/css" href="/css/main/styles.css" />
        {{-- to use with bootstrap styling--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        {{-- use bootstrap icons --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        {{-- use the boxicons in the services section --}}
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        {{-- for slide in animation via data-aos --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        {{-- to use with swiper slider --}}
        <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
        />
        {{-- ionoicons inside the footer --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

        {{------------------------------------- javascript files----------------------------------}}
        {{-- to use with bootstrap --}}
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        {{-- for slide in animation via data-aos --}}
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        {{-- js for swiper slider --}}
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        {{-- js for pure counter --}}
        <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    </head>
    <body>

        {{-- import the navigation bar --}}
        {{-- imported with the header tag wrapped --}}
        @include('partials.main._navigationBar')
            
        {{-- this is body where anything can be shown --}}
        {{-- search results, default listings, and etc --}}
        {{$slot}}
        
        {{-- the footer section --}}
        @include('partials.main._footer')

        <script>
            AOS.init();
            /**
            * Template Name: eNno - v4.10.0
            * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            */
            (function() {
            "use strict";

                /**
                 * Easy selector helper function
                 */
                const select = (el, all = false) => {
                    el = el.trim()
                    if (all) {
                    return [...document.querySelectorAll(el)]
                    } else {
                    return document.querySelector(el)
                    }
                }

                /**
                 * Easy event listener function
                 */
                const on = (type, el, listener, all = false) => {
                    let selectEl = select(el, all)
                    if (selectEl) {
                    if (all) {
                        selectEl.forEach(e => e.addEventListener(type, listener))
                    } else {
                        selectEl.addEventListener(type, listener)
                    }
                    }
                }

                /**
                 * Easy on scroll event listener 
                 */
                const onscroll = (el, listener) => {
                    el.addEventListener('scroll', listener)
                }

                /**
                 * Navbar links active state on scroll
                 */
                let navbarlinks = select('#navbar .scrollto', true)
                const navbarlinksActive = () => {
                    let position = window.scrollY + 200
                    navbarlinks.forEach(navbarlink => {
                    if (!navbarlink.hash) return
                    let section = select(navbarlink.hash)
                    if (!section) return
                    if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                        navbarlink.classList.add('active')
                    } else {
                        navbarlink.classList.remove('active')
                    }
                    })
                }
                window.addEventListener('load', navbarlinksActive)
                onscroll(document, navbarlinksActive)

                /**
                * Scrolls to an element with header offset
                */
                const scrollto = (el) => {
                    let header = select('#header')
                    let offset = header.offsetHeight

                    if (!header.classList.contains('header-scrolled')) {
                    offset -= 16
                    }

                    let elementPos = select(el).offsetTop
                    window.scrollTo({
                    top: elementPos - offset,
                    behavior: 'smooth'
                    })
                }

                /**
                * Toggle .header-scrolled class to #header when page is scrolled
                */
                let selectHeader = select('#header')
                if (selectHeader) {
                    const headerScrolled = () => {
                    if (window.scrollY > 100) {
                        selectHeader.classList.add('header-scrolled')
                    } else {
                        selectHeader.classList.remove('header-scrolled')
                    }
                    }
                    window.addEventListener('load', headerScrolled)
                    onscroll(document, headerScrolled)
                }

                /**
                * Back to top button
                */
                let backtotop = select('.back-to-top')
                if (backtotop) {
                    const toggleBacktotop = () => {
                    if (window.scrollY > 100) {
                        backtotop.classList.add('active')
                    } else {
                        backtotop.classList.remove('active')
                    }
                    }
                    window.addEventListener('load', toggleBacktotop)
                    onscroll(document, toggleBacktotop)
                }

                /**
                * Mobile nav toggle
                */
                on('click', '.mobile-nav-toggle', function(e) {
                    select('#navbar').classList.toggle('navbar-mobile')
                    this.classList.toggle('bi-list')
                    this.classList.toggle('bi-x')
                })

                /**
                * Mobile nav dropdowns activate
                */
                on('click', '.navbar .dropdown > a', function(e) {
                    if (select('#navbar').classList.contains('navbar-mobile')) {
                    e.preventDefault()
                    this.nextElementSibling.classList.toggle('dropdown-active')
                    }
                }, true)

                /**
                * Scrool with ofset on links with a class name .scrollto
                */
                on('click', '.scrollto', function(e) {
                    if (select(this.hash)) {
                    e.preventDefault()

                    let navbar = select('#navbar')
                    if (navbar.classList.contains('navbar-mobile')) {
                        navbar.classList.remove('navbar-mobile')
                        let navbarToggle = select('.mobile-nav-toggle')
                        navbarToggle.classList.toggle('bi-list')
                        navbarToggle.classList.toggle('bi-x')
                    }
                    scrollto(this.hash)
                    }
                }, true)

                /**
                * Scroll with ofset on page load with hash links in the url
                */
                window.addEventListener('load', () => {
                    if (window.location.hash) {
                    if (select(window.location.hash)) {
                        scrollto(window.location.hash)
                    }
                    }
                });

                /**
                * Initiate glightbox 
                */
                const glightbox = GLightbox({
                    selector: '.glightbox'
                });

                /**
                * Porfolio isotope and filter
                */
                window.addEventListener('load', () => {
                    let portfolioContainer = select('.portfolio-container');
                    if (portfolioContainer) {
                    let portfolioIsotope = new Isotope(portfolioContainer, {
                        itemSelector: '.portfolio-item'
                    });

                    let portfolioFilters = select('#portfolio-flters li', true);

                    on('click', '#portfolio-flters li', function(e) {
                        e.preventDefault();
                        portfolioFilters.forEach(function(el) {
                        el.classList.remove('filter-active');
                        });
                        this.classList.add('filter-active');

                        portfolioIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                        });

                    }, true);
                    }

                });

                /**
                * Initiate portfolio lightbox 
                */
                const portfolioLightbox = GLightbox({
                    selector: '.portfolio-lightbox'
                });

            })()
        </script>
    </body>
</html>
