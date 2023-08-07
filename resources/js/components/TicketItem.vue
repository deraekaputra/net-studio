<template>
    <div class="ticket__item" @click="$emit('input', v_value)" :style="[ value === v_value ? { 'backgroundColor' : secondaryColor, 'borderColor' : secondaryColor } : {} ]">
        <span :style="[ value === v_value ? { 'color' : primaryColor } : {} ]">{{ label }}</span>
        <svg width="19" height="14" v-if="value === v_value">
            <path d="M17.645514.0010396c-.338443.0104056-.660309.1560839-.895698.4058348-3.232918 3.3128743-6.693637 7.1084349-9.924014 10.4575373L2.215071 6.9832089c-.260821-.2614418-.617055-.3993084-.982207-.3797958-.363881.0208112-.703595.1964043-.936412.4851504-.231559.287454-.3346.662062-.283721 1.0327675.052165.3694069.251916.6997886.553444.9117963l5.537045 4.6617055c.517812.4370349 1.274856.400607 1.750684-.0832448 3.501367-3.5871823 7.300432-7.7887109 10.748382-11.3212847.38932-.3849903.505109-.9742299.29263-1.48149-.212473-.5085588-.708677-.8298502-1.249385-.8077404l-.000017-.0000333z" v-bind:fill="primaryColor" fill-rule="nonzero"/>
        </svg>
    </div>    
</template>

<script>
    export default {
        props: {
            value: {},
            v_value: {},
            label: {
                type: String,
                default: ''
            },
            primaryColor: {
                type: String,
                default: ''
            },
            secondaryColor: {
                type: String,
                default: ''
            }
        }
    }
</script>
