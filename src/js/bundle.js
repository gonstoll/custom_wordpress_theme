import 'bootstrap';
import AOS from 'aos';
import LazyLoad from 'lazyload';
import '@fortawesome/fontawesome-free/js/all';

jQuery(document).ready($ => {

    // Animate on scroll
    AOS.init();

    // LazyLoad
    let images = document.querySelectorAll(".lazyload");
    new LazyLoad(images);
    
});