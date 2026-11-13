/* One wheel gesture = one section on desktop. Tall sections remain scrollable. */
(() => {
  'use strict';
  const sections = [...document.querySelectorAll('body:has(.We__have) .anchor')];
  if (!sections.length) return;
  const desktop = matchMedia('(min-width: 901px) and (pointer: fine)');
  const reduced = matchMedia('(prefers-reduced-motion: reduce)');
  let locked = false, unlockAt = 0, wheelSum = 0, lastWheel = 0;
  function nearestIndex() {
    const y = window.scrollY;
    let best = 0, distance = Infinity;
    sections.forEach((el,i) => { const d=Math.abs(el.getBoundingClientRect().top); if(d<distance){distance=d;best=i;} });
    return best;
  }
  function wheel(e) {
    if (!desktop.matches || e.ctrlKey || e.defaultPrevented) return;
    if (e.target.closest('input,textarea,select,[contenteditable="true"],.swiper')) return;
    const now=performance.now();
    if(now-lastWheel>240) wheelSum=0;
    lastWheel=now;
    if(locked){e.preventDefault();return;}
    wheelSum+=e.deltaY * (e.deltaMode===1?16:e.deltaMode===2?innerHeight:1);
    if(Math.abs(wheelSum)<30) {e.preventDefault();return;}
    const direction=Math.sign(wheelSum);wheelSum=0;
    const idx=nearestIndex(), current=sections[idx];
    const top=current.getBoundingClientRect().top;
    const bottom=current.getBoundingClientRect().bottom;
    const tall=current.offsetHeight>innerHeight+16;
    // Allow ordinary scrolling through a section that is taller than the viewport.
    if(tall && ((direction>0 && bottom>innerHeight+8) || (direction<0 && top< -8))) return;
    const next=Math.max(0,Math.min(sections.length-1,idx+direction));
    if(next===idx) return;
    e.preventDefault();
    locked=true;unlockAt=now+800;
    sections[next].scrollIntoView({behavior:reduced.matches?'instant':'smooth',block:'start'});
    setTimeout(()=>{locked=false;wheelSum=0;},850);
  }
  window.addEventListener('wheel',wheel,{passive:false});
  window.addEventListener('keydown',e=>{
    if(!desktop.matches || /^(INPUT|TEXTAREA|SELECT)$/.test(document.activeElement?.tagName||''))return;
    const dir=['ArrowDown','PageDown'].includes(e.key)?1:['ArrowUp','PageUp'].includes(e.key)?-1:0;
    if(!dir||locked)return;
    e.preventDefault();locked=true;
    sections[Math.max(0,Math.min(sections.length-1,nearestIndex()+dir))].scrollIntoView({behavior:reduced.matches?'instant':'smooth'});
    setTimeout(()=>locked=false,850);
  });
})();
