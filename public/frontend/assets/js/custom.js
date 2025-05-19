(function ($) {
	"use strict";

	document.querySelectorAll('.header-hamburger_burger_holder__tOCQw').forEach(burger => {
		burger.addEventListener('click', function () {
		  document.querySelectorAll('.comp-header_main_header_container__fB_W0').forEach(header => {
			header.classList.toggle('comp-header_active__nxkGN');
		  });
	
		  document.querySelectorAll('.header-flyout-menu_flyout_menu_container__tcC_d').forEach(menu => {
			menu.classList.toggle('header-flyout-menu_is_active__NQ4_G');
		  });
		  document.querySelectorAll('.comp-header_theme_selector_container__z3mks').forEach(menu => {
			menu.classList.toggle('comp-header_active__nxkGN');
		  });
	
		  document.querySelectorAll('.header-hamburger_burger_holder__tOCQw').forEach(hamburger => {
			hamburger.classList.toggle('header-hamburger_is_active__x3sIj');
		  });
		});
	  });


	  const serviceImgItem = document.querySelectorAll(".insight-wrap .single-insight");

	  function followImageCursor(event, serviceItem) {
		const rect = serviceItem.getBoundingClientRect();
		const image = serviceItem.children[1]; // Assuming this is the image to move
	
		const imageWidth = image.offsetWidth;
		const imageHeight = image.offsetHeight;
	
		// Position cursor relative to the service item, then subtract half of image size to center it
		const x = event.clientX - rect.left - imageWidth / 2;
		const y = event.clientY - rect.top - imageHeight / 2;
	
		image.style.transform = `translate(${x}px, ${y}px)`;
	}
	
	serviceImgItem.forEach((item) => {
		item.addEventListener("mousemove", (event) => {
			followImageCursor(event, item);
		});
	});
	
	// function followImageCursor(event, serviceImgItem) {
	// 	const contentBox = serviceImgItem.getBoundingClientRect();
	// 	const dx = event.clientX - contentBox.x;
	// 	const dy = event.clientY - contentBox.y;
	// 	serviceImgItem.children[1].style.transform = `translate(${dx}px, ${dy}px)`;
	// }

	// serviceImgItem.forEach((item, i) => {
	// 	item.addEventListener("mousemove", (event) => {
	// 	setInterval(followImageCursor(event, item), 100);
	// 	});
	// });


	document.addEventListener("DOMContentLoaded", () => {
		const teamCards = document.querySelectorAll('.insight-wrap .single-insight');
	  
		teamCards.forEach(card => {
		  const heading = card.querySelector('.insight-wrap .single-insight .insight-title-wrap h3');
		  const content = card.querySelector('.insight-content');
	  
		  heading.addEventListener('click', () => {
			const isActive = content.classList.contains('active');
	  
			// Close all others
			document.querySelectorAll('.insight-content').forEach(el => {
			  el.classList.remove('active');
			  el.style.height = '0px';
			});
	  
			// Toggle this one
			if (!isActive) {
			  content.classList.add('active');
			  content.style.height = content.scrollHeight + 'px';
			}
		  });
		});
	  });
	

}(jQuery));


