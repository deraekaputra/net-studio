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
                <h6 class="sign__title">Kode verifikasi berhasil terkirim ke<br/>0812-****-**26</h6>
                <span class="sign__error" v-show="isError" v-if="errorType === 'empty'">Kode verifikasi tidak boleh kosong</span>
                <span class="sign__error" v-show="isError" v-else-if="errorType === 'wrong'">Kode verifikasi salah</span>
                <div class="sign__input">
                    <div class="form-input form-input--splited">
                        <div class="form-input__wrapper">
                            <input
                                :id="generateInputId(index)"
                                :ref="generateInputId(index)"
                                type="text"
                                placeholder="-"
                                maxlength="1"
                                class="form-input__field"
                                :class="[ isError ? 'form-input__field--error' : ''  ]"
                                v-model="inputValues[index]"
                                @keypress="restrictChars"
                                @keyup="handleInputFocus(index)"
                                @paste.prevent="handlePastedValues"
                                @input="returnFullString()"
                                contenteditable="true"
                                :key="index"
                                v-for="(input, index) in length"
                            />
                        </div>
                    </div>
                </div>
                <button class="sign__button" type="button">Lanjut</button>
                <span class="sign__link">Tidak mendapatkan kode? {{ isWaiting ? '00:' + countDown : '' }} <a href="/verification" v-if="!isWaiting">Kirim ulang</a></span>
                <span class="sign__info" v-if="isWaiting">Mohon menunggu 30 detik untuk mengirim ulang kode verifikasi</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                length: 6,
                inputValues: [],
                allowPaste: true,
                isWaiting: true,
                countDown: 30,
                isError: false,
                errorType: ''
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
            generateInputId(index) {
                return `vc_${index + 1}`;
            },
            handleInputFocus(index) {
                if (this.inputValues[index] && this.inputValues[index] !== '' && index < this.length - 1) {
                    const [nextInput] = this.$refs[`vc_${index + 2}`];
                    nextInput.focus();
                } else if (index > 0 && (!this.inputValues[index] || this.inputValues[index] === '')) {
                    const [previusInput] = this.$refs[`vc_${index}`];
                    previusInput.focus();
                }
            },
            handlePastedValues(event) {
                if (this.allowPaste) {
                    const pastedValue = event.clipboardData.getData('text/plain');
                    const splitValues = pastedValue.split('');
                    const _this = this;
                    for (let i = 0; i < this.length; i++) {
                        _this.updateInputValue(i, splitValues[i]);
                    }
                    const [lastInput] = this.$refs[`vc_${this.length}`];
                    lastInput.focus();
                }
            },
            updateInputValue(index, value) {
                this.$set(this.inputValues, index, value);
            },
            returnFullString() {
                this.$emit('input', this.inputValues.join(''));
            },
            countDownTimer() {
                if (this.isWaiting === true) {
                    setTimeout(() => {
                        this.countDown -= 1;
                        if (this.countDown < 10) {
                            this.countDown = '0' + this.countDown;
                        }
                        this.countDownTimer();
                        if (this.countDown <= 0) {
                            this.isWaiting = false;
                        }
                    }, 1000);
                }
            }
        },

        created() {
           this.countDownTimer();
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

        &__info {
            display: block;
            margin-top: 16px;
            font-size: 0.75rem;
            text-align: center;
            color: var(--white);
        }
    }
</style>
