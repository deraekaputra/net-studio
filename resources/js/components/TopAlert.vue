<template>
    <div class="topAlert">
        <div class="topAlert__inner">

            <svg width="24px" height="21px" viewBox="0 0 24 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Homepage" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                    <g id="0-Homepage-(Default)" transform="translate(-19.000000, -70.000000)" stroke="#FFFFFF" stroke-width="2">
                        <g id="alert" transform="translate(0.000000, 44.000000)">
                            <g id="Group" transform="translate(20.000000, 18.000000)">
                                <g id="alert-triangle" transform="translate(0.000000, 9.000000)">
                                    <path d="M9.29,1.86 L0.82,16 C0.464641628,16.6153996 0.462519934,17.3731469 0.81442652,17.9905269 C1.16633311,18.6079069 1.81941202,18.9921898 2.53,19 L19.47,19 C20.180588,18.9921898 20.8336669,18.6079069 21.1855735,17.9905269 C21.5374801,17.3731469 21.5353584,16.6153996 21.18,16 L12.71,1.86 C12.3474343,1.26228132 11.6990862,0.897255995 11,0.897255995 C10.3009138,0.897255995 9.65256566,1.26228132 9.29,1.86 Z" id="Path"></path>
                                    <path d="M11,7 L11,11" id="Path"></path>
                                    <path d="M11,15 L11.01,15" id="Path"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>

            <p>Silahkan verifikasi email anda. <br/>
            <a href="#">Klik disni</a> untuk kirim ulang verfikasi email.</p>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style lang="scss" scoped>
    .topAlert {
        position: fixed;
        background: red;
        z-index: 100;
        width: 100%;
        &__inner {
            padding: 20px;
            p {
                margin: 0px;
                font-weight: bold;
                color: #fff;
                font-size: 12px;
                a {
                    color: #fff !important;
                    text-decoration: underline;
                }
            }
            svg {
                display: inline-block;
                float: left;
                margin-right: 20px;
                margin-top: 10px;
            }
        }
    }
</style>