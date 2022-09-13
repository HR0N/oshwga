class Header extends Class_father{
    constructor(elem) {
        super(elem);
        this.dropdown = $(document).find('.dropdown');

        this.events();
    }

    events(){
        this.dropdown.on('click', (e)=>{
            let dropdown_menu = $(e.target).find('.dropdown-menu');
            if($(dropdown_menu).hasClass('dropdown-show')){
                $(dropdown_menu).removeClass('dropdown-show');
            }else{$(dropdown_menu).addClass('dropdown-show');}
        });

        $(document).on('scroll', ()=>{
            if($(window).scrollTop() > 150){$(this.elem).addClass('min_header');}
            else{$(this.elem).removeClass('min_header');}
        })
    }
}