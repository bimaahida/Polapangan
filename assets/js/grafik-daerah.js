var ctx = document.getElementById("chart_perdaerah");
var label_value = [];
var data_value = [];
for (let i = 0; i < data_perkecamatan.length; i++) {
    label_value.push(data_perkecamatan[i].kecamatan);
    data_value.push(data_perkecamatan[i].data);
}

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: label_value,
        datasets: [
            {
            label: "Data Per Daerah ",
            data: data_value,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }
    ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});