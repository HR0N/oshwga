//https://api.telegram.org/bot5591524736:AAGXk3kxgnGrjpIeMvhMM_toBda5NQVTLnQ/sendMessage?chat_id=-533295490&text=приветмир
class Callback_us extends Class_father{
    constructor(elem) {
        super(elem);
        this.env = new Env();
        this.callback_us_modal = $(document).find('.callback_us_modal');
        this.btn_send_msg = this.callback_us_modal.find('.senMessage');
        this.thx_we_will_call_u = $(document).find('.thx_we_will_call_u');


        this.events();
    }
    create_message(){
        let name = this.callback_us_modal.find('.name').val();
        let phone = this.callback_us_modal.find('.phone').val();
        if(name.length > 2 && phone.length > 7){
            return `Имя: ${name} \n phone: ${phone}`;
        }else{return false;}
    }
    create_url(message){return `https://api.telegram.org/bot${this.env.bot_token()}/sendMessage?chat_id=${this.env.group_id()}&text=${message}`;}
    sendMessage(url, callback = ()=>{}){ /* используйте GET запрос в PHP*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: 'POST',
            url: url,
            cache: false,
            success: function (data) {
                callback(data);
            },
            error: function (data, textStatus, errorThrown) {
                console.log('ERROR_A-X');
            },
        });
    }

    events(){
        this.elem.on('click', ()=>{
            this.callback_us_modal.find('.name').val('');
            this.callback_us_modal.find('.phone').val('');
            this.thx_we_will_call_u.css({'display':'none'});
            this.callback_us_modal.find('.inputs').fadeIn(200);
            this.callback_us_modal.css({'display':'flex'});
            document.body.style.overflow = "hidden";
        });
        this.callback_us_modal.on('click', (e)=>{
            if($(e.target).parent().hasClass('close_modal')){
                document.body.style.overflow = "visible";
                this.callback_us_modal.fadeOut(200);
            }
        });
        this.btn_send_msg.on('click', ()=>{
            let message = this.create_message();
            let url = this.create_url(message);
            if(message){
                this.callback_us_modal.find('.inputs').fadeOut(0);
                this.thx_we_will_call_u.fadeIn(200);
                setTimeout(()=>{location.reload()}, 1500)
                this.sendMessage(url);
            }else{location.reload()}
        })
    }
}