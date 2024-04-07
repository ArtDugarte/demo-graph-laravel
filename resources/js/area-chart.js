import ApexCharts from "apexcharts";
import es from "apexcharts/dist/locales/es.json";

let charts = document.querySelectorAll("#area-chart");

charts.forEach((chart) => {

    //Hacer JSON.pare del dataset series
    let series = JSON.parse(chart.dataset.series);

    //Hacer JSON.pare del dataset categories
    let categories = JSON.parse(chart.dataset.categories);

    let options = {
        series,
        colors: ["#13b256", "#EED818", "#96C93D", "#003333", "#6E807A"],
        chart: {
            locales: [es],
            defaultLocale: "es",
            height: 350,
            type: "area",
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "straight",
            width: 2,
        },
        grid: {
            borderColor: "#f1f5f9",
            yaxis: {
                lines: {
                    show: true,
                },
            },
        },
        xaxis: {
            type: "datetime",
            tickPlacement: "on",
            categories,
            labels: {
                datetimeUTC: true,
                format: "MMM yyyy",
                hideOverlappingLabels: false,
                rotateAlways: true,
                rotate: -45,
                minHeight: 45,
                style: {
                    fontSize: "10px",
                    fontWeight: 700,
                    fontFamily: "Open Sans, Nunito, sans-serif",
                    colors: "#9ca3af",
                    margin: "100px",
                },
            },
        },
        yaxis: {

            labels: {
                style: {
                    fontSize: "10px",
                    fontWeight: 700,
                    fontFamily: "Open Sans, Nunito, sans-serif",
                    colors: "#9ca3af",
                },
            },
        },
        tooltip: {
            x: {
                format: "MMMM yyyy",
            },
        },
        legend: {
            position: "bottom",
            fontFamily: "Open Sans, Nunito, sans-serif",
            offsetY: 10,
            itemMargin: {
                vertical: 15,
                horizontal: 10,
            }

        },
        noData: {
            text: "Loading data...",
            style: {
                color: "#9ca3af",
                fontSize: "14px",
                fontFamily: "Open Sans, Nunito, sans-serif",
            }
        }
    };

    //En el elemento chart renderzar el area chart
    let apexCharts = new ApexCharts(chart, options);

    apexCharts.render();
})


