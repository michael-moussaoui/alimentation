const ctx = document.getElementById("myChart");

new Chart(ctx, {
	type: "doughnut",
	data: {
		labels: ["Big Mac", "Pizza", "Sushi", "Tacos"],
		datasets: [
			{
				label: "",
				data: [400, 250, 1200, 1550],
				borderWidth: false,
				hoverOffset: 20,
				backgroundColor: [
					"#06d6a0",
					"#ff5400",
					"#bf0603",
					"#2d6a4f",
					"#918450",
				],
			},
		],
	},
	options: {
		responsive: true,
		cutout: "90%",
		plugins: {
			legend: false,
		},
		layout: {
			padding: 20,
		},
	},
});
