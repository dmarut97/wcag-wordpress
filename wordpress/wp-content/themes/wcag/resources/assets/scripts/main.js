// import external dependencies
import 'jquery';




// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
import AOS from 'aos';
jQuery(document).ready(function () {
  AOS.init({disable: 'mobile'})
});

jQuery(window).load(function () {
  AOS.init({disable: 'mobile'});
  let scrollRef = 0
  window.addEventListener('scroll', function () {
    scrollRef <= 10 ? scrollRef++ : AOS.refresh()
  })
});
