 /*viaraveis de contagem*/
 var anos_cont = 2;
 var clientes_cont = 0;
 /*capiturando os contadores*/
 const ano = document.getElementById('anoP');
 const cliente =  document.getElementById('clienteP')

 var ano_full = false;
 var cliente_full = false;

/*Fim da variaveis do contador*/ 


const botaoMenu = document.querySelector('.icone'); /*nav h2 a */
const menu = document.querySelector('.menu'); /* nav ul*/

botaoMenu.addEventListener('click', function(event)
 {
    event.preventDefault(); // Previne o comportamento padrão do navegador
    menu.classList.toggle("menu-aberto");

    if (menu.classList.contains('menu-aberto') )
    {
        botaoMenu.innerHTML = "&times;"; 
    } 
    else 
    {
        botaoMenu.innerHTML = "&equiv;";
    }
});

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';


  /*função da lodash para gerar atraso na execução de funções*/
  const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args)
   {
      const context = this;
      const later = function ()
      {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };

      const callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  };


  /* */
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
    if((windowTop) > ano.offsetTop){
      contador();
    }
  }

  /*gatilhos para as animações */
  animeScroll();
  if(target.length) {
    window.addEventListener('scroll', debounce(function(){
      animeScroll();
    }, 20
    ));
  }

  function contador(){
    /*Função para repetir o codigo ate que seja Interrompido*/
    
    const myInterval = setInterval(function() 
    {
      if (anos_cont <= 20) {
        ano.innerHTML =  anos_cont +"+" ;
        anos_cont += 1;
      } else {
        ano_full = true; 
      }

      if (clientes_cont <= 280) {
        cliente.innerHTML =  clientes_cont  +"+" ;
        clientes_cont += 14;
      } {
          clientes_full = true;
      }
    }, 100);/*delay de 100ms*/

    /* interrempa o interval quando anos e cliente*/
    if (ano_full & cliente_full)
    {
      
      clearInterval(myInterval);
    }
  }
  