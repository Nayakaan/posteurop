export class MobileMenu {
  constructor() {
    this.buttonToggle = document.querySelector('#burger-menu');
    this.mobileMenu = document.querySelector('.m-menu')
    this.html = document.querySelector('html');

    this.subMenuButton = document.querySelectorAll('.m-menu--has-children .m-menu__cta');

    this.btnCloseSubMenu = document.querySelectorAll('.js-close-submenu')

    this.events();
  }

  events() {
    this.buttonToggle.addEventListener('click', () => this.toggleMobileMenu())

    this.subMenuButton.forEach((link) => {
      link.addEventListener('click', (e) => this.openSubMenu(e))
    })

    this.btnCloseSubMenu.forEach((link) => {
      link.addEventListener('click', () => this.closeSubMenu())
    })
  }

  toggleMobileMenu() {
    this.buttonToggle.classList.toggle('menu-active')
    this.mobileMenu.classList.toggle('m-menu--active')
    this.html.classList.toggle('no-scroll')
  }

  openSubMenu(e) {
    const parent = e.currentTarget.parentElement;
    parent.classList.add('m-menu__sub--active');
  }

  closeSubMenu() {
    const activeMenus = document.querySelectorAll('.m-menu__sub--active')
    activeMenus.forEach((menu) => {
      menu.classList.remove('m-menu__sub--active')
    })
  }
}
