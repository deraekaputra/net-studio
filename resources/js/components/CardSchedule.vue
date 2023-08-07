<template>
    <div class="schedule-card" :class="[ live ? 'schedule-card--live' : '']" @click="$emit('click')">
        <div class="schedule-card__date-time">
            <h4 class="meta__title">{{ date }}</h4>
            <span class="meta__subtitle">{{ day }}, {{ time }}</span>
        </div>
        <div class="schedule-card__meta">
            <div class="schedule-card__title">
                <h4 class="meta__title">{{ title }}</h4>
                <span class="schedule-card__live-badge" v-if="live">LIVE</span>
            </div>
            <span class="meta__subtitle">{{ seats }} Kursi Tersedia</span>
            <div class="schedule-card__studio">
                <div class="studio-badge" style="background-image: linear-gradient(45deg, #D6EBEE 0%, #018ABE 100%);" v-if="studio === 'A'">
                    <span class="studio-badge__top">Studio</span>
                    <span class="studio-badge__bottom">A</span>
                </div>
                <div class="studio-badge" style="background-image: linear-gradient(45deg, #FFDD94 0%, #FA897B 100%);" v-else-if="studio === 'B'">
                    <span class="studio-badge__top">Studio</span>
                    <span class="studio-badge__bottom">B</span>
                </div>
                <div class="studio-badge" style="background-image: linear-gradient(45deg, #CCABD8 0%, #8474A1 100%);" v-else-if="studio === 'C'">
                    <span class="studio-badge__top">Studio</span>
                    <span class="studio-badge__bottom">C</span>
                </div>
                <div class="studio-badge" style="background-image: linear-gradient(45deg, #018ABE 0%, #02457A 100%);" v-else-if="studio === 'D'">
                    <span class="studio-badge__top">Studio</span>
                    <span class="studio-badge__bottom">D</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['live', 'date', 'day', 'time', 'title', 'seats', 'studio']
    }
</script>
