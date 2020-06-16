jQuery(document).ready(function($) {

  const $menuItem = $('#menu-nav > li')
  $menuItem.on('hover', function() {
    const $this = $(this)
    $this.toggleClass('active')
  })

})


// const menuItem = document
//   .getElementById("menu-nav").
//   getElementsByClassName("menu-item-has-children")[0]

//   menuItem.addEventListener("mouseover", function( e ) {
//     console.log(e)
//   })

// console.log(menuItem)