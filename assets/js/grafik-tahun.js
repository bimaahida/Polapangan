var ctx = document.getElementById("chart_pertahub");
var label_value = [];
var data_value = [];
var data_predic =[];
for (let i = 0; i < data_pertahun.length; i++) {
    label_value.push(data_pertahun[i].tahun);
    data_value.push(data_pertahun[i].data);
    if (i < 4) {
        data_predic.push(null);   
    }
}
for (let i = 0; i < predic.length; i++) {
    data_predic.push(predic[i].data);
}
label_value.push(2019);
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: label_value,
        datasets: [
            {
                label: 'Data Pola Pangan',
                data: data_value,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255,99,132,1)',
                borderWidth: 1
            },
            {
                label: 'Data Pola Pangan Predic',
                data: data_predic,
                backgroundColor: 'rgba(82, 179, 217, 0.2)',
                borderColor: 'rgba(82, 179, 217,1)',
                borderWidth: 1
            },
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