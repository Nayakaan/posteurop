export class SearchBar {
  constructor() {
    this.searchBar = document.querySelector('.u-menu__search');
    this.searchButton = document.querySelector('.js-search-button');
    this.events();
  }

  events() {
    this.searchButton.addEventListener('click', this.toggleSearchBar.bind(this))
  }

  toggleSearchBar() {
    this.searchBar.classList.toggle('u-menu__search--active')
  }
}
