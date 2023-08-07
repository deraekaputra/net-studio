<template>
    <div>
        <nav class="nav-bar">
            <div class="nav-bar__wrapper">
                <div class="nav-item">
                    <a class="nav-item__logo" href="/">
                        <svg width="79" height="17">
                            <path d="M72.1203761 13.5234731c-.0036686 1.9016515 1.5310977 3.4717979 3.3982313 3.4765151 1.9310303.0049072 3.4760803-1.5272479 3.4813788-3.452359.0053297-1.9354005-1.5344842-3.5009563-3.4417804-3.4993416-1.8908989.0016146-3.4341305 1.56163-3.4378297 3.4751855zm3.155358-8.8365727c0-.3371724.013544-.6532278-.0026337-.9677003-.0414792-.8064274-.2340465-1.5737239-.6605964-2.264183C74.0606062.5615897 73.2561959.0151174 72.2146978.0123947 64.8368025-.0069175 57.4588135.0021054 50.0808868.0021054h-.1721878v4.6852065h9.6563732v12.0573119h5.828331V4.6869004h9.8823309zm-48.599769 12.0708937h21.5877764v-4.6697884H32.5100018v-1.3680646h15.7528618V6.028751H32.5112559v-1.35195H48.260669V.0106534H26.6759651v16.7471407zM.0000712.2072581c0 4.2471675-.0005329 8.4943033.0013169 12.7414708.0001254.2580239.0042639.5177257.0321676.7738183.0910789.8354907.42492 1.5502009 1.0808764 2.0866689.7648436.6254625 1.6688295.8788957 2.629093.9303105.6565835.0351736 1.3162395.0121255 1.9745161.0141201.0344876.0001266.0689754-.0089596.1202053-.016083V5.9495709c.0894173.0753176.1530001.1281888.2158617.1819463.849025.7262026 1.6978305 1.4526585 2.5469182 2.1788294 3.2527877 2.7818453 6.5052618 5.5641022 9.7610908 8.3423067.0677526.05781.1745078.0973842.2631726.0976058 2.0794841.0053821 4.1589682.0042424 6.2384836.0038308.0554312 0 .110831-.0051605.1672341-.0079781V.0105901h-5.8231888v10.346693c-.0659342-.0511616-.1071627-.0804465-.1454754-.113214C15.1117122 6.8659196 11.1610185 3.4878018 7.2125508.1070562c-.0903892-.0773755-.1782388-.107167-.2944625-.1070087C4.6766374.0028336 2.4351551.0021054.1937041.0021054H.0000712v.2051527z" fill="#FFF" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <div class="nav-item">
                    <button class="nav-item__options" type="button">
                        <svg width="4" height="17">
                            <path d="M2 17c-1.104569 0-2-.9060904-2-2.0238095 0-1.1177192.895431-2.0238095 2-2.0238095 1.104569 0 2 .9060903 2 2.0238095C4 16.0939096 3.104569 17 2 17zm0-6.4761905c-1.104569 0-2-.9060904-2-2.0238095s.895431-2.0238095 2-2.0238095c1.104569 0 2 .9060904 2 2.0238095s-.895431 2.0238095-2 2.0238095zM2 4.047619c-1.104569 0-2-.9060903-2-2.0238095C0 .9060904.895431 0 2 0c1.104569 0 2 .9060904 2 2.0238095C4 3.1415287 3.104569 4.047619 2 4.047619z" fill="#FFF" fill-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="sign">
            <div class="sign__wrapper">
                <h6 class="sign__title">Berikut adalah password barumu.</h6>
                <span class="sign__error" v-show="isError" v-if="errorType === 'empty'">Nomor seluler tidak boleh kosong</span>
                <span class="sign__error" v-show="isError" v-else-if="errorType === 'notRegistered'">Nomor seleler belum terdaftar</span>
                <div class="sign__input">
                    <div class="form-input">
                        <div class="form-input__wrapper">
                            <input class="form-input__field input-password-view" v-model="message" type="text" value="08871ok1lo" disabled :class="[ isError ? 'form-input__field--error' : ''  ]" @keypress="restrictChars">
                            <button class="button-copy" @click="copyPassword">
                                <svg width="19px" height="22px" viewBox="0 0 19 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Sign-Up-/-Sign-In" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="ic-outline-content-copy" transform="translate(-2.000000, -1.000000)" fill-rule="nonzero">
                                            <g id="Icon" fill="#FFFFFF">
                                                <path d="M16,1 L4,1 C2.9,1 2,1.9 2,3 L2,17 L4,17 L4,3 L16,3 L16,1 Z" id="Icon-Path"></path>
                                                <path d="M8,7 L8,21 L19,21 L19,7 L8,7 Z M8,5 L19,5 C20.1045695,5 21,5.8954305 21,7 L21,21 C21,22.1045695 20.1045695,23 19,23 L8,23 C6.8954305,23 6,22.1045695 6,21 L6,7 C6,5.8954305 6.8954305,5 8,5 Z" id="Icon-Shape"></path>
                                            </g>
                                            <rect id="ViewBox" x="0" y="0" width="24" height="24"></rect>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>            
                </div>
            </div>
        </div>

        <div class="alert" v-show="alertBox">
            <div class="alert__inner">
                <div class="alert-box">
                    <svg width="61px" height="64px" viewBox="0 0 61 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="More" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"> <g id="3-More-(Edit-Profile)----success" transform="translate(-158.000000, -321.000000)"> <g id="alert-box"> <g id="alert-box-/-content" transform="translate(20.000000, 258.000000)"> <g id="alert-content" transform="translate(85.000000, 60.000000)"> <g id="Group" transform="translate(50.000000, 0.000000)"> <g id="feather-check-circle"> <g id="Icon" transform="translate(3.000000, 4.000000)"> <g id="Icon-Group" transform="translate(0.500000, 0.750000)"> <circle id="Oval" fill="#F3F3F3" cx="29.5" cy="33.25" r="29"></circle> <path d="M57,25.72 L57,28.25 C56.9930365,40.4288861 48.9763084,51.1525857 37.2972191,54.6057277 C25.6181299,58.0588696 13.0588323,53.4188584 6.43012649,43.2019324 C-0.198579283,32.9850065 0.682374475,19.6250072 8.59525404,10.3669484 C16.5081336,1.10888961 29.5679598,-1.84180547 40.6925,3.115" id="Icon-Path" stroke="#383838" stroke-width="4"></path> <polyline id="Icon-Path" stroke="#6DD400" stroke-width="6" points="57 6.25 29.5 33.7775 21.25 25.5275"></polyline> </g> </g> </g> </g> </g> </g> </g> </g> </g></svg>
                    <h4>Password Berhasil Disalin</h4>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import VueClipboard from 'vue-clipboard2'
    Vue.use(VueClipboard)

    export default {
        data() {
            return {
                isError: false,
                errorType: '',
                message: 'ArY4W19uN4',
                alertBox: false,
            }
        },

         methods: {
            restrictChars($event) {
                if ($event.charCode === 0 || /\d/.test(String.fromCharCode($event.charCode))) {
                    return true
                } else {
                    $event.preventDefault();
                }
            },
            copyPassword: function () {
                let currentObj = this;
                this.$copyText(this.message).then(function (e) {
                    currentObj.alertBox = true,
                    setTimeout(() => currentObj.alertBox = false, 3000);
                }, function (e) {
                    alert('Can not copy')
                    console.log(e)
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    .sign {
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        align-content: center;
        position: relative;
        height: 100vh;

        &__wrapper {
            order: 0;
            flex: 0 1 auto;
            align-self: auto;
            position: relative;
            width: 100%;
            padding-right: 20px;
            padding-left: 20px;
        }

        &__title {
            margin: 0;
            font-weight: bold;
            text-align: center;
            color: var(--white);
        }

        &__error {
            display: block;
            margin-top: 40px;
            font-size: 0.75rem;
            text-align: center;
            color: #E50A0A;
        }

        &__input {
            position: relative;
            margin-top: 40px;
        }

        &__button {
            display: block;
            position: relative;
            width: 100%;
            padding: 10px;
            margin-top: 64px;
            background-color: var(--white);
            border: none;
            border-radius: 4px;
            outline: none;
            font-size: 0.812rem;
            font-weight: bold;
            color: #0D0D0D;
        }

        &__link {
            display: block;
            margin-top: 32px;
            font-size: 0.875rem;
            text-align: center;
            color: var(--white);

            a {
                text-decoration: underline;
                color: var(--white);
            }
        }
    }
</style>
