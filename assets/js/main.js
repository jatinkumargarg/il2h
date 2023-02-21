/**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }
  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

   /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

 /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20
    }

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
 let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 40) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }


      /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })
  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)





    // const rangeWrapper = document.querySelectorAll('.rangeWrapper');
    // console.log(rangeWrapper)
    // for (const element of rangeWrapper) {
      
    //   let plus = document.querySelector(` .plus`),
    //     minus = document.querySelector(` .minus`),
    //     num = document.querySelector(` .num`);
    //     let a = 1;

    //         plus.addEventListener("click", ()=>{
    //   a++;
    //   // a = (a < 10) ? "0" + a : a;
    //   num.innerText = a;
    // });

    //             minus.addEventListener("click", ()=>{
    //   if(a > 1){
    //     a--;
    //     // a = (a < 10) ? "0" + a : a;
    //     num.innerText = a;
    //   }
    // });

    // }

    // let a = 1;

    // document.querySelectorAll('.plus').forEach(item => {
    //   item.addEventListener('click', event => {
    //     // console.log(this)
    //     // item.addEventListener("click", ()=>{
    //       let num = item.parentElement.children[1].textContent;

    //        console.log( parseInt(num))
    //       // a++;
    //       // a = (a < 10) ? "0" + a : a;
    //       num.innerText = `${parseInt(num) + 1}` ;

    //     // });

    //   })
    // })


 


 // Change option selected
const label = document.querySelector('.dropdown__filter-selected')
const options = Array.from(document.querySelectorAll('.dropdown__select-option'))

options.forEach((option) => {
  option.addEventListener('click', () => {
    label.textContent = option.textContent
  })
})

// Close dropdown onclick outside
document.addEventListener('click', (e) => {
  const toggle = document.querySelector('.dropdown__switch')
  const element = e.target

  if (element == toggle) return;

  const isDropdownChild = element.closest('.dropdown__filter')    
  
  if (!isDropdownChild) {
    toggle.checked = false
  }
});


$('.closeSearchWrap').click(function(){

    $('.searchCampWrap ').toggleClass('show');
});