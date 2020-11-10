// button ripple
const onClick = event => {
  const button = event.target;

  const appendRipple = document.createElement('div');
  appendRipple.classList.add('ripple');

  const size = button.offsetWidth * 2 + 'px';
  appendRipple.style.height = appendRipple.style.width = size;

  const x = event.clientX - button.offsetLeft - button.offsetWidth;
  const y = event.clientY - button.offsetTop - button.offsetWidth;

  appendRipple.style.left = x + 'px';
  appendRipple.style.top = y + 'px';

  button.appendChild(appendRipple);

  setTimeout(() => {
    button.removeChild(appendRipple);
  }, 600);
};

document.querySelectorAll('.btn-ripple').forEach(button => {
  button.addEventListener('click', onClick);
});

//page scroll
$('.page-scroll').not('[href="#"]').not('[href="#0"]').click(function(event) {
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top -90
        }, 1250, 'easeInOutExpo' );
      }
    }
  });

//paralax
//tentang
// $(window).on('load', function() {
//   $('.tentang .dkiri').addClass('timbul');
//   $('.jumbotron .log').addClass('timbul');
// })

// $(window).scroll(function() {
//   var wscroll = $(this).scrollTop();

//   $('.jumbotron .log').css({
//     'transform' : 'translate(0px, '+ wscroll/6 +'%)'
//   });

//   $('.jumbotron .a').css({
//     'transform' : 'translate(0px, '+ wscroll/12 +'%)'
//   });

//   $('.jumbotron .b').css({
//     'transform' : 'translate(0px, '+ wscroll/18 +'%)'
//   });

//   $('.jumbotron .c').css({
//     'transform' : 'translate(0px, '+ wscroll/24 +'%)'
//   });

//   $('.jumbotron .d').css({
//     'transform' : 'translate(0px, '+ wscroll/30 +'%)'
//   });

//   $('.jumbotron .e').css({
//     'transform' : 'translate(0px, '+ wscroll/36 +'%)'
//   });

//   $('.jumbotron .f').css({
//     'transform' : 'translate(0px, '+ wscroll/42 +'%)'
//   });

//   $('.jumbotron .g').css({
//     'transform' : 'translate(0px, '+ wscroll/-200 +'%)'
//   });

//   if (wscroll > $('.kajian').offset().top - 250 ) {
//     $('.kajian .col-sm-2.text-center').each(function(i) {
//       setTimeout(function() {
//         $('.kajian .col-sm-2.text-center').eq(i).addClass('muncul');
//       }, 300 * i);
//     });
//   }

// });
//akhir paralax

// fetch('https://corona.lmao.ninja/v2/countries/indonesia')
//       .then((response)=>{
//         return response.json();
//       })
//       .then((data)=>{
//         document.getElementById("negara").innerHTML = data.country;

//         document.getElementById("kasus").innerHTML = data.cases;
//         document.getElementById("kasushariini").innerHTML = data.todayCases;
//         document.getElementById("positif").innerHTML = data.active;

//         document.getElementById("mati").innerHTML = data.deaths;
//         document.getElementById("matihariini").innerHTML = data.todayDeaths;

//         document.getElementById("sembuh").innerHTML = data.recovered;
//         document.getElementById("sembuhhariini").innerHTML = data.todayRecovered;

//         document.getElementById("test").innerHTML = data.tests;
//       })

// ripple button
// const Button = document.querySelectorAll('.btn-ripple');
//   Button.forEach(button => {
//     button.addEventListener('click', function(e){
//       let x = e.clientX - e.target.offsetLeft;
//       let y = e.clientY - e.target.offsetTop;

//       let Ripple = document.createElement('span');

//       Ripple.style.left = x + 'px';
//       Ripple.style.top = y + 'px';
//       this.appendChild(Ripple);

//       setTimeout(() => {
//         Ripple.remove()
//       },1000)
//     })
//   })
