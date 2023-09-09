var images = [
	"images/img\ \(1\).jpg",
	"images/img\ \(5\).jpg",
	"images/img\ \(6\).jpg",
	"images/img\ \(8\).jpg",
	"images/img\ \(10\).jpg",
	"images/img\ \(11\).jpg",
	"images/img\ \(12\).jpg",
	"images/img\ \(17\).jpg",
	"images/img\ \(19\).jpg",
	"images/img\ \(20\).jpg",
	"images/img\ \(22\).jpg",
	"images/img\ \(23\).jpg",
	"images/img\ \(25\).jpg",
	"images/img\ \(26\).jpg"

];

// Select a random image from the array
var randomIndex = Math.floor(Math.random() * images.length);
var randomImage = images[randomIndex];

// Set the background image of the div to the selected image
var randomImageDiv = document.getElementById("random-image");
randomImageDiv.style.backgroundImage = "url('" + randomImage + "')";

// Add animation class to the element
randomImageDiv.classList.add("animate");
