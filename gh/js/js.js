var swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



  function open(evt){
    const tabTarget = evt.currentTarget;
    const button = tabTarget.dataset.button;

    tabItem.forEach(function(item){
      item.classList.remove('tabs__btn-item-active');
    });

    tabTarget.classList.add('tabs__btn-item-active'); }
