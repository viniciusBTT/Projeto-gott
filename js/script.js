const botaoMenu = document.querySelector('.icone'); /*nav h2 a */
const menu = document.querySelector('.menu'); /* nav ul*/

botaoMenu.addEventListener('click', function(event) {
    event.preventDefault(); // Previne o comportamento padrão do navegador
    menu.classList.toggle("menu-aberto");

    if (menu.classList.contains('menu-aberto') ){
        botaoMenu.innerHTML = "&times;"; 
    } else {
        botaoMenu.innerHTML = "&equiv;";
    }
});

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';



const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args) {
      const context = this;
      const later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      const callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };


/*função da lodash para gerar atraso na execução de funções*/
function animeScroll(){
  const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
  target.forEach(function(elemento){
    if((windowTop) > elemento.offsetTop){
      elemento.classList.add(animationClass);
    }
    else
    {
      elemento.classList.remove(animationClass);
    }
  })
}

animeScroll();


if(target.length) {
    window.addEventListener('scroll', debounce(function(){
      animeScroll();
    }, 20
    ));

    /*
var anos_ex = 2;
    var clientes = 0;

    var anos = false;
    var clientes_ = false;
    const myInterval = setInterval(function() {
        if (anos_ex <= 20) {
            document.getElementByid('anos').innerHTML = anos_ex ;
            anos_ex += 2;
        } else {
            anos = true;
        }

        if (clientes <= 280) {
            document.getElementByid('clientes').innerHTML = clientes;
            clientes += 28;
        } {
            clientes_ = true;
        }
    }, 100);

    if (anos & clientes_) {
        clearInterval(myInterval);
    }*/
}
