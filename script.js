const toggleBtn = document.querySelector('toggle_btn')
         const toggleBtnIcon = document.querySelector('toggle_btn i')
         const toggleBtn = document.querySelector('.dropdown_menu')

          toggleBtn.onclick = function () {
          dropDownMenu.classList.toggle ('open')
          const isOpen = dropDownMenu.classList.contains('open')

          toggleBtnIcon.classList= isOpen 
          ? 'fa-solid fa-xmark'
          : 'fa-solid fa-bars'
         }
         // external js: flickity.pkgd.js