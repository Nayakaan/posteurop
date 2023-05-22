import Swiper, { Navigation, Autoplay, Pagination } from 'swiper';

Swiper.use([Navigation, Autoplay, Pagination]);

export class HeavyCarousel {
  constructor() {
    this.heavyGallery;
    this.events();
  }

  events() {
    this.companies = new Swiper('.u-carousel__container', {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: '.u-carousel__pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.u-carousel__next',
        prevEl: '.u-carousel__prev'
      },
    })
  }
}
