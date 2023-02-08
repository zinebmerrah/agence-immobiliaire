const toggler = document.querySelector("button.card-toggler");
toggler.addEventListener("click", () => {
	var left_card = document.querySelector(".card-left");
	var right_card = document.querySelector(".card-right");
	var card = document.querySelector(".card");

	left_card.classList.toggle("col-md-4");
	right_card.classList.toggle("col-md-8");
	card.classList.toggle("max-400");
});

