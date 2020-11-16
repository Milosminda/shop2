$('.back-to-top').on('click', function () {
	$('html, body').animate({scrollTop: 0}, 1000);
});

var template = $('#template').html();
var detailTemplate = $('#detailTemplate').html();
var recTemplate = $('#recTemplate').html();
var mainRow = $('#mainRow');
var recRow = $('#recRow');
var detailedRow = $('#detailedRow');
var title = new RegExp('{{title}}', 'g');
var model = new RegExp('{{model}}', 'g');
var imgSrc = new RegExp('{{imgSrc}}', 'g');
var price = new RegExp('{{price}}', 'g');
var collections = $('[data-collection]');

window.onload = function () {
	collections.parent().removeClass('active');
	$.ajax({
		url : 'shop.json',
		method : 'get',
		dataType : 'json'
	})
	.done(function (res) {
		displayCollections(res);
		// randomDisplay(res);
		var products = $('[data-product]');
		products.on('click', function () {
			displayDetailed.call(this, res);
		});
		collections.on('click', function () {
			displayCollections.call(this, res);
			var products = $('[data-product]');
			products.on('click', function () {
				displayDetailed.call(this, res);
			});
		});
	});
};
function displayCollections(res) {
	mainRow.html('');
	event.preventDefault();
	var col = $(this).data('collection');
	if (col === 'male' || col === 'female') {
		collections.parent().removeClass('active');
		var colFilter = res.filter(function (el) {
			return el.colection === col;
		});
		displayProduct(colFilter);
	} else if (col === 'newCol' || col === 'popular' || col === 'action') {
		collections.parent().removeClass('active');
		$(this).parent().addClass('active');
		var collectionFilter = res.filter(function (el) {
			//console.log(el.imgSrc);
			return el[col];
		});
		displayProduct(collectionFilter);
	} else {
		if (template) {
			displayProduct(res);
		}
	}
}
function displayProduct(filter) {
	var text = '';
	filter.forEach(function (e) {
		text = template.replace(imgSrc, e.imgSrc)
									 .replace(title, e.productTitle)
									 .replace(model, e.model)
									 .replace(price,  e.price);
		mainRow.append(text);
		//console.log(e.imgSrc);
	});
	// randomDisplay(filter);
}
function displayDetailed(res) {
	var text = '';
	event.preventDefault();
	var colProduct = $(this).data('product');
	var filter = res.filter(function (el) {
		return el.imgSrc === colProduct;
	});
		filter.forEach(function (e) {
		text = template.replace(imgSrc, e.imgSrc)
									 .replace(title, e.productTitle)
									 .replace(model, e.model)
									 .replace(price,  e.price);
	if (e.imgSrc === colProduct) {
			detailedRow.append(text);
			window.location.assign('detailed.html?title=' + e.productTitle + '&model=' + e.model +
			 '&imgSrc=' + e.imgSrc + '&price=' + e.price, '_self');
		}
	});
}
function showDetailed() {
	var urlParams = new URLSearchParams(window.location.search);
	detailTemplate = detailTemplate
			.replace(title, urlParams.get('title'))
			.replace(model, urlParams.get('model'))
			.replace(price, urlParams.get('price'))
			.replace(imgSrc, urlParams.get('imgSrc'));

	detailedRow.prepend(detailTemplate);
	//detailedRow.append(detailTemplate);
	// console.log(urlParams.get('title'));
	// console.log(urlParams.get('model'));
	// console.log(urlParams.get('price'));
	// console.log(urlParams.get('imgSrc'));
}
function randomDisplay(res) {
	var text = '';
	var rand = [];
	for (var i = 0; i < res.length; i++) {
		var r = Math.floor(Math.random() * res.length);
		rand.push(res[r]);
	}
	var randPop = rand.slice(0,3);
	randPop.forEach(function (e) {
		text = recTemplate.replace(imgSrc, e.imgSrc)
											.replace(title, e.productTitle)
											.replace(model, e.model)
											.replace(price, e.price);
		recRow.append(text);
	});
}
