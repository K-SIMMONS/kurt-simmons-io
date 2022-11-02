let toggled = false;
function handleMenu() {
  if(toggled === false){
    // when clicked
    toggled = true;
    document.querySelector('.custom-logo').style.visibility = 'hidden';
    document.getElementById('mobile-overlay').classList.add('mobile-overlay');
  }

  else{
    // when idle
    document.querySelector('.custom-logo').style.visibility = 'visible';
    document.getElementById('mobile-overlay').classList.remove('mobile-overlay')
    toggled = false;
  }
}