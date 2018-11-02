var ctx = document.getElementById("chart_perjenis");
var label_value = ["Blimbing", "Lowokwaru", "Kedungkandang","Klojen","Sukun"];
var jenis_value = ["Padi - Padian","Umbi - Umbian","Pangan Hewani","Minyak dan Lemak","Buah/Biji Berminyak","Kacang-kacangan","Gula","Sayur dan Buah"];
var data_padi = [];
var data_umbi = [];
var data_hewani = [];
var data_lemak = [];
var data_minyak = [];
var data_kacang = [];
var data_gula = [];
var data_buah = [];
console.log(data_perjenis);

for (let a = 0; a < jenis_value.length; a++) {
    for (let b = 0; b < data_perjenis.length; b++) {
        if (data_perjenis[b].jenis_pangan == "Padi - Padian") {
            data_padi.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Umbi - Umbian") {
            data_umbi.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Pangan Hewani") {
            data_hewani.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Minyak dan Lemak") {
            data_lemak.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Buah/Biji Berminyak") {
            data_minyak.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Gula") {
            data_gula.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Kacang-kacangan") {
            data_kacang.push(data_perjenis[b].data);
        }
        if (data_perjenis[b].jenis_pangan == "Sayur dan Buah") {
            data_buah.push(data_perjenis[b].data);
        }
    }
}

console.log(data_padi);
console.log(data_umbi);
var myChart = new Chart(ctx, {
    type: 'bar',
    labels: label_value,
    data: {
        labels: label_value,
        datasets: [
            {
                label: "Padi - padian",
                backgroundColor:'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255,99,132,1)',
                borderWidth: 1,
                data: data_padi,
            },
            {
                label: "Umbi - umbian",
                backgroundColor:'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: data_umbi,
            },
            {
                label: "Pangan Hewani",
                backgroundColor:'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1,
                data: data_hewani,
            },
            {
                label: "Minyak dan Lemak",
                backgroundColor:'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                data: data_lemak,
            },
            {
                label: "Buah/Biji Berminyak",
                backgroundColor:'rgba(153, 102, 255, 0.2)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1,
                data: data_minyak,
            },
            {
                label: "Kacang-kacangan",
                backgroundColor:'rgba(135, 211, 124, 0.2)',
                borderColor: 'rgba(135, 211, 124,1)',
                borderWidth: 1,
                data: data_kacang,
            },
            {
                label: "Gula",
                backgroundColor:'rgba(82, 179, 217, 0.2)',
                borderColor: 'rgba(82, 179, 217,1)',
                borderWidth: 1,
                data: data_gula,
            },
            {
                label: "Sayur dan Buah",
                backgroundColor:'rgba(239, 72, 54, 0.2)',
                borderColor: 'rgba(239, 72, 54,1)',
                borderWidth: 1,
                data: data_buah,
            },
            
        ]
    },
    options: {
        barValueSpacing: 20,
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});