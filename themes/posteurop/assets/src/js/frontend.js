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
import { MembersFilters } from './modules/membersFilters'
import { HeavyCarousel } from './swiper/swiper'

/**
 * Add here your JavasScript code
 */
window.addEventListener('DOMContentLoaded', () => {
  const selectDropdown = document.querySelector('.js-members-select');
  const membersAccordion = document.querySelector('.our-members__grid')
  const swiperWrapper = document.querySelector('.swiper-wrapper')


  const searchBar = new SearchBar();
  const mobileMenu = new MobileMenu();

  if (membersAccordion) {
    const membersCards = new MembersCards();
  }

  if (selectDropdown) {
    const membersFilters = new MembersFilters(selectDropdown);
  }

  if (swiperWrapper) {
    const heavyCarousel = new HeavyCarousel();
  }
});

