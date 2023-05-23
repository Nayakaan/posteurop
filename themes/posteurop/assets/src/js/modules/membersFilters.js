export class MembersFilters {
  constructor() {
    this.selectDropdown = document.querySelector('.js-members-select');
    this.allMembers = document.querySelectorAll('.our-members__li')
    this.events();
  }

  events() {
    this.selectDropdown.addEventListener('change', () => {
      [...this.allMembers].map(member => {
        member.classList.remove('our-members__li--hide')
        if (!member.dataset.categories.includes(this.selectDropdown.value)) {
          member.classList.add('our-members__li--hide')
        }
      })
    })
  }

}
