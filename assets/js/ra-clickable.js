document.addEventListener('click', function (event) {
	const wrapper = event.target.closest('.ra-clickable-wrapper');
	if (!wrapper) return;

	const url = wrapper.getAttribute('data-ra-url');
	const target = wrapper.getAttribute('data-ra-target') || '_self';

	if (!url) return;

	window.open(url, target);
});
