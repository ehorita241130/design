window.addEventListener('load', 
  function(){
    const $button = document.querySelector('.toggle-menu-button');
    const $menu = document.querySelector('.header-site-menu');
    function toggleIsShow(){
      if( $menu.classList.contains('is-show') ){
        $menu.classList.remove('is-show');
      }
      else{
        $menu.classList.add('is-show');
      }
    }
    $button.addEventListener('click', toggleIsShow);
  }
);
