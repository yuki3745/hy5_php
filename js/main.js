'use strict';

// ヘッダー
// menu
{
  const spMenu = document.querySelector('.sp-menu');
  const burgers = document.querySelectorAll('.burger')
  const open = document.getElementById('open');
  const close = document.getElementById('close');
  const lists = document.querySelectorAll('.sp-menu ul li');

  burgers.forEach(burger => {
    burger.addEventListener('click', () => {
    spMenu.classList.toggle('show');
    open.classList.toggle('show');
    close.classList.toggle('show');
    });
  });

  lists.forEach(list => {
    list.addEventListener('click', () => {
      spMenu.classList.toggle('show');
      open.classList.toggle('show');
      close.classList.toggle('show');
    });
  });
}

{
function onScrollCallback(entries){
  entries.forEach(entry => {
    if(!entry.isIntersecting){
      header.classList.add('scrolled');
      toTop.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
      toTop.classList.remove('scrolled');
    }
  });
}

const header = document.querySelector('header.sp');
const toTop = document.getElementById('to_top');
const onScrollObserver = new IntersectionObserver(onScrollCallback);
onScrollObserver.observe(document.getElementById('target'));

toTop.addEventListener('click', e => {
  e.preventDefault();

  window.scrollTo({
    top: 0,
    behavior: 'smooth',
  });
});
}

// 事業内容
{
  const services = document.querySelectorAll('.service');
  const details = document.querySelectorAll('.detail');

  for (let i = 0; i < services.length; i++) {

  services[i].addEventListener('mouseover', () => {
    details[i].classList.add('appear');
    });

  services[i].addEventListener('mouseleave', () => {
    details[i].classList.remove('appear');
    });
  }
}

// 企業理念
{
  const dts = document.querySelectorAll('dt');

  dts.forEach(dt => {
    dt.addEventListener('click', ()=> {
      dt.parentNode.classList.toggle('appear');

      dts.forEach(el => {
        if(dt !== el){
          el.parentNode.classList.remove('appear')
        };
      });
    });
  });
}