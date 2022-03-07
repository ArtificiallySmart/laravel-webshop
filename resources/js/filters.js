document.querySelector("#placeorder").addEventListener("click", showCart)

function showCart() {
	console.log('ik heb geklikt')
	document.querySelector("#cart").classList.toggle("hidden")
}

let galleryProducts = document.querySelectorAll('.gallery_product');

let filterButton = document.querySelectorAll('.filter-button');
let filterAll = document.querySelector('#filter-all');

filterAll.addEventListener('click', function () {
    galleryProducts.forEach(photo => {
        photo.style.display = 'block';
    });
});

filterButton.forEach(button => {
    button.addEventListener('click', function () {
        // attribute from button
        let categoryFromButton = this.getAttribute('category');
        console.log(categoryFromButton)

        galleryProducts.forEach(prod => {
            // attribute form picture
            if (prod.getAttribute('category') == categoryFromButton) {
                prod.style.display = 'block';
            } else {
                prod.style.display = 'none';
            }
        });
    });
});