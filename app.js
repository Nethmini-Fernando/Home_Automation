const hamburger = document.querySelector('.web_head .navigation-bar .navigation-list .hamburger');
const mobile_menu = document.querySelector('.web_head .navigation-bar .navigation-list ul');
const menu_item = document.querySelectorAll('.web_head .navigation-bar .navigation-list ul li a');
const web_head = document.querySelector('.web_head.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

function validateform(){  

var password=document.myform.password.value;  
  
if (password==null || password==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
