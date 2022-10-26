<template>
    <apexcharts :options="chartOptions" :series="series" class="chart">
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
    width: 27em;
}

@media screen and (max-width: 400px) {
    .chart {
        width: 14em;
    }
}

@media screen and (max-width: 765px) {
    .chart {
        width: 19em;
    }
}
</style>
