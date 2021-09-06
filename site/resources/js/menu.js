const burger = {
    btn: null,
    nav: null,
    isOpen: null,

    init() {
        this.btn = document.querySelector('#burgerBtn')
        this.isOpen = false
        this.event()
    },

    event() {
        this.btn.addEventListener('click', this.showMenu)
    },

    showMenu() {
        this.nav = document.querySelector('.header nav')
        if (!this.isOpen) {
            this.nav.classList.add('open')
            this.isOpen = true
        } else {
            this.nav.classList.remove('open')
            this.isOpen = false
        }
    }
}

burger.init();

