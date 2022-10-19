<template>
    <apexcharts type="line" :options="chartOptions" :series="series" class="chart">
    </apexcharts>
</template>

<script>
import VueApexCharts from "vue3-apexcharts";

export default {
    name: 'Chart',
    components: {
        apexcharts: VueApexCharts,
    }
}
</script>

<style>
.chart {
    width: 500px;
    height: 350px;
}

@media screen and (max-width: 765px) {
    .chart {
        width: 400px;
        height: 250px;
    }
}
</style>
