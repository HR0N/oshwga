class Class_father {
    constructor(elem) {
        this.elem = $(elem);
    }
    find(selector){
        return this.elem.find(selector);
    }
}