    //Script Graph 
    
    const data = {
        data: [60, 10, 60],

        labels: [
            'Demandes',
            'A livrer',
            'Livrés'
        ],

        datasets: [{
            label: 'Reporting des livraisons',
            data: [60, 10, 60],
            backgroundColor: [
                '#00c292',
                '#efae2c',
                '#1f699a'
            ],
            hoverOffset: 18,
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );