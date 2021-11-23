 if (!(sessionStorage.getItem("mckeck")) == true) {
     sessionStorage.setItem('mckeck', 1);
 }


 if (sessionStorage.getItem("mckeck") == '1') {
     loadmondel();
     sessionStorage.setItem('mckeck', 2);

 }

 // window.onbeforeunload = function() {
 //     localStorage.removeItem("mckeck");
 //     return '';
 // };

 window.onbeforeunload = () => {
     localStorage.setItem('mckeck', 2);
 }


 function loadmondel() {
     document.getElementById('always-open-1-divid').style.display = 'block'
 }
 modal_opened = document.getElementById('always-open-1-divid');

 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
     if (event.target == modal_opened) {
         modal_opened.style.display = "none";
     }
 }

 /////////////////////////////////////////////////////

 var TxtType = function(el, toRotate, period) {
     this.toRotate = toRotate;
     this.el = el;
     this.loopNum = 0;
     this.period = parseInt(period, 10) || 2000;
     this.txt = '';
     this.tick();
     this.isDeleting = false;
 };

 TxtType.prototype.tick = function() {
     var i = this.loopNum % this.toRotate.length;
     var fullTxt = this.toRotate[i];

     if (this.isDeleting) {
         this.txt = fullTxt.substring(0, this.txt.length - 1);
     } else {
         this.txt = fullTxt.substring(0, this.txt.length + 1);
     }

     this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

     var that = this;
     var delta = 200 - Math.random() * 100;

     if (this.isDeleting) {
         delta /= 2;
     }

     if (!this.isDeleting && this.txt === fullTxt) {
         delta = this.period;
         this.isDeleting = true;
     } else if (this.isDeleting && this.txt === '') {
         this.isDeleting = false;
         this.loopNum++;
         delta = 500;
     }

     setTimeout(function() {
         that.tick();
     }, delta);
 };

 window.onload = function() {
     var elements = document.getElementsByClassName('typewrite');
     for (var i = 0; i < elements.length; i++) {
         var toRotate = elements[i].getAttribute('data-type');
         var period = elements[i].getAttribute('data-period');
         if (toRotate) {
             new TxtType(elements[i], JSON.parse(toRotate), period);
         }
     }
     // INJECT CSS
     var css = document.createElement("style");
     css.type = "text/css";
     css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #334}";
     document.body.appendChild(css);
 };