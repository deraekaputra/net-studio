<template>
    <div>
        <top-alert></top-alert>
        <nav class="nav-bar" :class="[ isScroll ? '' : 'nav-bar--transparent' ]">
            <div class="nav-bar__wrapper">
                <div class="nav-item">
                    <router-link class="nav-item__logo" :to="{ name: 'home' }">
                        <svg width="79" height="17">
                            <path d="M72.1203761 13.5234731c-.0036686 1.9016515 1.5310977 3.4717979 3.3982313 3.4765151 1.9310303.0049072 3.4760803-1.5272479 3.4813788-3.452359.0053297-1.9354005-1.5344842-3.5009563-3.4417804-3.4993416-1.8908989.0016146-3.4341305 1.56163-3.4378297 3.4751855zm3.155358-8.8365727c0-.3371724.013544-.6532278-.0026337-.9677003-.0414792-.8064274-.2340465-1.5737239-.6605964-2.264183C74.0606062.5615897 73.2561959.0151174 72.2146978.0123947 64.8368025-.0069175 57.4588135.0021054 50.0808868.0021054h-.1721878v4.6852065h9.6563732v12.0573119h5.828331V4.6869004h9.8823309zm-48.599769 12.0708937h21.5877764v-4.6697884H32.5100018v-1.3680646h15.7528618V6.028751H32.5112559v-1.35195H48.260669V.0106534H26.6759651v16.7471407zM.0000712.2072581c0 4.2471675-.0005329 8.4943033.0013169 12.7414708.0001254.2580239.0042639.5177257.0321676.7738183.0910789.8354907.42492 1.5502009 1.0808764 2.0866689.7648436.6254625 1.6688295.8788957 2.629093.9303105.6565835.0351736 1.3162395.0121255 1.9745161.0141201.0344876.0001266.0689754-.0089596.1202053-.016083V5.9495709c.0894173.0753176.1530001.1281888.2158617.1819463.849025.7262026 1.6978305 1.4526585 2.5469182 2.1788294 3.2527877 2.7818453 6.5052618 5.5641022 9.7610908 8.3423067.0677526.05781.1745078.0973842.2631726.0976058 2.0794841.0053821 4.1589682.0042424 6.2384836.0038308.0554312 0 .110831-.0051605.1672341-.0079781V.0105901h-5.8231888v10.346693c-.0659342-.0511616-.1071627-.0804465-.1454754-.113214C15.1117122 6.8659196 11.1610185 3.4878018 7.2125508.1070562c-.0903892-.0773755-.1782388-.107167-.2944625-.1070087C4.6766374.0028336 2.4351551.0021054.1937041.0021054H.0000712v.2051527z" fill="#FFF" fill-rule="evenodd"/>
                        </svg>
                    </router-link>
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
        <div class="spotlight">
            <div class="spotlight__wrapper">
                <div class="spotlight__content">
                    <div class="spotlight__meta">
                        <div class="meta__item">
                            <h4 class="text-white">MIN</h4>
                            <h6 class="text-white">30 Mei 2019</h6>
                        </div>
                        <div class="meta__item">
                            <h4 class="text-white">Studio A</h4>
                            <h5 class="text-white">19:00</h5>
                            <a class="spotlight__button" href="/show">
                                <span>Lihat Acara</span>
                                <svg width="14" height="10">
                                    <path d="M13.7257591 5.65282874C13.9088447 5.46947588 14 5.25185406 14 4.99993878c0-.25191529-.0911471-.46636164-.2742409-.64252275L9.6677411.27583336C9.4925808.09168459 9.2793685 0 9.0289279 0c-.2504406 0-.4668344.09167643-.6491206.27583336-.1759536.17617743-.2639335.39062787-.2639335.64252274 0 .25189488.0879758.46954527.2639335.65288997l2.5054204 2.51037742H.9130541c-.2504609 0-.4668344.09167643-.6491206.27583336C.0879799 4.53363428 0 4.74808472 0 4.99997959c0 .25189488.0879758.46954527.2639335.65288997.1822943.17697538.3986597.26546613.6491206.26546613h9.9721736L8.3798073 8.4391212c-.1759536.1761774-.2639335.3906278-.2639335.6425227s.0879758.4695453.2639335.65289C8.5621016 9.9115092 8.778467 10 9.0289279 10c.2504608 0 .4636691-.0884867.6388132-.2654661l4.058018-4.08170516z" fill="#0D0D0D" fill-rule="nonzero"/>
                                </svg>
                            </a>
                        </div>
                        <div class="meta__item">
                            <h4 class="text-white">20</h4>
                            <h6 class="text-white">Sisa Kursi</h6>
                        </div>
                    </div>
                    <div class="spotlight__background" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                </div>
            </div>
        </div>
        <div class="lolomo">
            <div class="lomo-row">
                <h6 class="text-white">Cari berdasarkan Studio</h6>
                <div class="lomo">
                    <a class="studio-card" href="/studio" style="background-image: linear-gradient(-70deg, #D6EBEE 0%, #018ABE 100%);">
                        <div style="background-image: linear-gradient(-70deg, #D6EBEE 0%, #018ABE 100%);"></div>
                        <span class="studio-title">Studio</span>
                        <span class="studio-initial">A</span>
                    </a>
                    <a class="studio-card" href="/studio" style="background-image: linear-gradient(-70deg, #FFDD94 0%, #FA897B 100%);">
                        <div style="background-image: linear-gradient(-70deg, #FFDD94 0%, #FA897B 100%);"></div>
                        <span class="studio-title">Studio</span>
                        <span class="studio-initial">B</span>
                    </a>
                    <a class="studio-card" href="/studio" style="background-image: linear-gradient(-70deg, #CCABD8 0%, #8474A1 100%);">
                        <div style="background-image: linear-gradient(-70deg, #CCABD8 0%, #8474A1 100%);"></div>
                        <span class="studio-title">Studio</span>
                        <span class="studio-initial">C</span>
                    </a>
                    <a class="studio-card" href="/studio" style="background-image: linear-gradient(-70deg, #018ABE 0%, #02457A 100%);">
                        <div style="background-image: linear-gradient(-70deg, #018ABE 0%, #02457A 100%);"></div>
                        <span class="studio-title">Studio</span>
                        <span class="studio-initial">D</span>
                    </a>
                </div>
            </div>
            <div class="lomo-row">
                <h6 class="text-white">Acara di Studio A</h6>
                <div class="lomo">
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="lomo-row">
                <h6 class="text-white">Acara di Studio B</h6>
                <div class="lomo">
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="lomo-row">
                <h6 class="text-white">Acara di Studio C</h6>
                <div class="lomo">
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="lomo-row">
                <h6 class="text-white">Acara di Studio D</h6>
                <div class="lomo">
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                    <a class="show-card" href="/show">
                        <div class="show-card__cover">
                            <div class="show-card__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                        </div>
                        <div class="show-card__meta">
                            <div class="meta-item">
                                <span class="meta-item__date">Kamis, 30 Mei 2019</span>
                                <span class="meta-item__time">19:00</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-item__count">20</span>
                                <span class="meta-item__left">Sisa Kursi</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isScroll: false
            }
        },

        methods: {
            handleScroll() {
                if (window.scrollY > 200) {
                    this.isScroll = true
                } else {
                    this.isScroll = false
                }
            }
        },

        created() {
            window.addEventListener('scroll', this.handleScroll);
        },

        destroyed() {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>
