const slider3 = document.querySelector('.items23');
let isDown2 = false;
let startX2;
let scrollLeft2;
slider3.addEventListener('mousedown', (e) => {
  isDown2 = true;
  slider3.classList.add('active')
  startX2 = e.pageX - slider3.offsetLeft;
  scrollLeft2 = slider3.scrollLeft2;
});
slider3.addEventListener('mouseleave', () => {
  isDown2 = false;
  slider3.classList.remove('active')

});
slider3.addEventListener('mouseup', () => {
  isDown2 = false;
  slider3.classList.remove('active')

});
slider3.addEventListener('mousemove', (e) => {
  if (!isDown2) return;
  e.preventDefault();
  const x2 = e.pageX - slider3.offsetLeft;
  const walk = (x2 - startX2) * 3;
  slider3.scrollLeft2 = scrollLeft2 - walk;

});