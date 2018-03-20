$(document).ready(function(){
	$.ajax({
		url: "charts-trial/monthlyReservations.php",
		method: "GET",
		success: function(data){
			console.log(JSON.parse(data));
			var data = JSON.parse(data);
			
			var month = [];
			var count = [];

			for(var i in data){
				count.push(data[i].res);
				month.push(data[i].month_name);
			}

			var chartdata = {
				labels: month,
				datasets : [
					{
						label: 'Monthly Reservations',
						backgroundColor: 'rgba(128,42,42)',
						borderColor: 'rgba(200,200,200,0.75)',
						hoverBackgroundColor: 'rgba(198,113,113,1)',
						hoverBorderColor: 'rgba(128,42,42)',
						data: count
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