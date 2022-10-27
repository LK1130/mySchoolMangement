<template>
    <apexcharts :type="type" :options="chartOptions" :series="series" :class="class">
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

.chartV2 {
    width: 40em;
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
    
    .chartV2 {
        width: 25em;
    }
}



</style>
