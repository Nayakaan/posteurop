/**
 * SASS
 */
import '../sass/frontend.scss';

/**
 * JavaScript
 */
import './modules/skip-link-focus-fix';

import { SearchBar } from './modules/searchBar';
import { MobileMenu } from './modules/mobileMenu';
import { MembersCards } from './modules/membersCards'
import { HeavyCarousel } from './swiper/swiper'

/**
 * Add here your JavasScript code
 */
window.addEventListener('DOMContentLoaded', () => {
  const searchBar = new SearchBar();
  const mobileMenu = new MobileMenu();
  const heavyCarousel = new HeavyCarousel();
  const membersCards = new MembersCards();
});

