function renderFamiliesMembersChart() {
    if($('#families_members_chart').length == 0) return false;

    var chart = new Chart($('#families_members_chart')[0].getContext('2d'), {
        type: 'bar',
        data: {
            labels: ['Red', 'Green', 'Blue'],
            datasets: [
                {
                    label: '# of Colors',
                    data: [10, 20, 30],
                    backgroundColor: [
                        'rgba(255, 0, 0, 1)',
                        'rgba(0, 255, 0, 1)',
                        'rgba(0, 0, 255, 1)'
                    ]
                }
            ]
        },
        options: {
            scales: {
                yAxes: [
                    {
                        ticks: { beginAtZero: true }
                    }
                ]
            }
        }
    });

    return chart;
}
