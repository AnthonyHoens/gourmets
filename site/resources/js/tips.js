const tips = {
    el: null,

    init() {
        this.el = document.querySelectorAll('.tips__list');
        this.changeSize()
        this.event()
    },

    event() {
        window.addEventListener('resize', this.changeSize)
    },

    changeSize() {
        this.el = document.querySelectorAll('.tips__list');
        this.el.forEach(e => {
            e.style.height = e.offsetWidth + 'px';
        })
    }
}
tips.init()
