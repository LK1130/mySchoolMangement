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
    width: 30em;
}

@media screen and (max-width: 765px) {
    .chart {
        width: 22em;
    }
}
</style>
