

import './bootstrap';
import '../css/app.css';

import { Datepicker, Dropdown,Toast ,Collapse, Modal, Ripple, Carousel, Input, Select, initTE } from 'tw-elements';
initTE({ Datepicker, Dropdown,Toast, Collapse, Modal, Input, Select, Carousel, Ripple });
window.Modal = Modal;
window.initTE = initTE;
window.Toast =  Toast;


// Toast.getInstance(document.getElementById('myToast')).update({
//     position: 'top-left',

//     });



    // const button = document.getElementById("criarbotao");
    // const myModalEl = document.getElementById("exampleModal");
    // const modal = new Modal(myModalEl);


    // button.onclick = function(){
    //     modal.hide();
    // };




