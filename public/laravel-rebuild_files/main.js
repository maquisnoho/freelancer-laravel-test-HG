$(document).ready(function () {
	$('.accordion-container').each(function () {
		const $container = $(this);
		const mode = $container.data('accordion-mode'); // 'multi' or 'single'

		$container.find('.accordion__trigger').on('click', function () {
			const $trigger = $(this);
			const $accordion = $trigger.closest('.accordion');
			const $content = $accordion.find('.accordion__content');
			
			const isOpen = $accordion.hasClass('is-open');

			if (mode === 'single') {
				// Close all others first
				$container.find('.accordion').not($accordion).each(function () {
					$(this).removeClass('is-open').find('.accordion__content').slideUp(200);
				});
			}

			if (isOpen) {
				$accordion.removeClass('is-open');
				$content.slideUp(200);
			} else {
				$accordion.addClass('is-open');
				$content.slideDown(200);
			}
		});
		
		$('.accordion.is-open .accordion__content').show();
	});
	
	
	
	const toggleBtn = document.querySelector('.site-header__toggle');
	const closeBtn  = document.querySelector('.site-header__mobile-close');
	const mobileNav = document.querySelector('.site-header__mobile-nav');
	const body      = document.body;
	
	toggleBtn.addEventListener('click', () => {
		mobileNav.classList.toggle('is-open');
		body.classList.toggle('nav-open');
	});
	
	closeBtn.addEventListener('click', () => {
		mobileNav.classList.remove('is-open');
		body.classList.remove('nav-open');
	});
	
	document.querySelectorAll('.site-header__menu--mobile a').forEach(link => {
		link.addEventListener('click', () => {
			mobileNav.classList.remove('is-open');
			body.classList.remove('nav-open');
		});
	});
});