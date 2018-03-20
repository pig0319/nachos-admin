$(document).ready(function(){
	$.ajax({
		url: "charts-trial/salesData.php",
		method: "GET",
		success: function(data){
			console.log(JSON.parse(data));
			var data = JSON.parse(data);
			
			var sum = [];
			var date = [];

			for(var i in data){
				sum.push(data[i].total);
				date.push(data[i].month);
			}

			var chartdata = {
				labels: date,
				datasets : [
					{
						label: 'Summary of Orders',
						backgroundColor: 'rgba(128,42,42)',
						borderColor: 'rgba(200,200,200,0.75)',
						hoverBackgroundColor: 'rgba(198,113,113,1)',
						hoverBorderColor: 'rgba(128,42,42)',
						data: sum
					}
				]
			};

			var ctx = $("#myCanvasBarGraph");

			var barGraph = new Chart(ctx,{
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data){
			console.log(data);	
		}
	});

});
