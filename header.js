class Header extends Class_father{
    constructor(elem) {
        super(elem);

        this.events();
    }

    events(){
        $(document).on('scroll', ()=>{
            if($(window).scrollTop() > 50){$(this.elem).addClass('min_header');}
            else{$(this.elem).removeClass('min_header');}
        })
    }
}