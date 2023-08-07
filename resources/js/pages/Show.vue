<template>
    <div>
        <nav class="nav-bar" :class="[ isScroll ? '' : 'nav-bar--transparent' ]">
            <div class="nav-bar__wrapper">
                <div class="nav-item">
                    <a class="nav-item__logo" href="/">
                        <svg width="9" height="17">
                            <path d="M8.6192921 2.5425063c.5076105-.5958554.5076105-1.5235511 0-2.1200534-.5369755-.5632705-1.3730002-.5632705-1.9105587 0l-6.3280255 7.0219c-.5076105.5958553-.5076105 1.523551 0 2.1200533l6.3280255 6.9887023c.5369755.5958553 1.3730002.5958553 1.9105587 0 .5076105-.5632706.5076105-1.5235511 0-2.0868557L3.216552 8.5042944l5.4027401-5.9617881z" fill="#FFF" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <div class="nav-item">
                    <h6 class="nav-item__title">Ini Talkshow</h6>
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
        <header class="header">
            <div class="header__background">
                <div class="background">
                    <div class="background__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
                </div>
            </div>
            <div class="header__image" style="background-image:url('http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg');"></div>
            <div class="header__meta">
                <h3 class="meta__title">Ini Talkshow</h3>
                <h6 class="meta__subtitle">Talkshow, Comedy</h6>
                <div class="meta__description" :class="[ descExpanded ? 'meta__description--is-expanded' : '' ]">
                    <span>Ini Talk Show adalah program talk show yang dikemas dengan suasana santai, membahas isu-isu hangat yang ada di masyarakat dengan cara sederhana. Di program ini juga akan memperlihatkan suasana rumah dan karakter-karakter yang ada di rumah tersebut. Dengan peran Sule sebagai Host, Andre Taulany sebagai Consultant-Host, didukung oleh Yurike sebagai Mama Sule, Sas Widjanarko sebagai Om Sule, Maya Septha sebagai Asisten Rumah Tangga, dan Haji Bolot sebagai Pak RT.</span>
                </div>
            </div>
            <button class="header__expander" type="button" @click="toggleExpand">
                <span>{{ descExpanded ? 'Sembunyikan detail acara' : 'Baca detail acara' }}</span>
                <svg width="10" height="5" v-if="descExpanded">
                    <path d="M8.504408 4.788496L4.997474 1.786973 1.49044 4.788496c-.331356.282005-.896227.282005-1.227563 0-.350503-.298644-.350503-.763102 0-1.061422L4.373879.211504c.350883-.282005.896587-.282005 1.24709 0l4.130529 3.51557c.331336.298644.331336.763102 0 1.061422-.350883.282005-.896587.282005-1.24709 0z" fill="#FFF" fill-rule="evenodd"/>
                </svg>
                <svg width="10" height="5" v-else>
                    <path d="M8.504408.211504c.350503-.282005.896207-.282005 1.24709 0 .331336.29832.331336.762778 0 1.061422l-4.130529 3.51557c-.350503.282005-.896207.282005-1.24709 0L.262877 1.272926c-.350503-.29832-.350503-.762778 0-1.061422.331336-.282005.896207-.282005 1.227563 0l3.507034 3.001523L8.504408.211504z" fill="#FFF" fill-rule="evenodd"/>
                </svg>
            </button>
        </header>
        <div class="shows">
            <div class="shows__header">
                <div class="header-item header-item--is-active">
                    <h6 class="header-title">Jadwal Acara</h6>
                </div>
            </div>
            <div class="shows__content">
                <div class="shows__list">
                    <div class="list-item">
                        <card-schedule
                            date="30 Mei"
                            day="Minggu"
                            time="19:00"
                            title="Episode 200"
                            seats="20"
                            studio="A"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            live="true"
                            date="31 Mei"
                            day="Senin"
                            time="20:00"
                            title="Ada Sule Mau Kasih Kejutan Buat Andre"
                            seats="10"
                            studio="C"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="1 Jun"
                            day="Selasa"
                            time="19:00"
                            title="Episode 201"
                            seats="60"
                            studio="A"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="2 Jun"
                            day="Rabu"
                            time="19:00"
                            title="Episode 202"
                            seats="60"
                            studio="B"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="3 Jun"
                            day="Kamis"
                            time="19:00"
                            title="Episode 203"
                            seats="80"
                            studio="C"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="4 Jun"
                            day="Jum'at"
                            time="19:00"
                            title="Episode 204"
                            seats="80"
                            studio="A"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            live="true"
                            date="5 Jun"
                            day="Sabtu"
                            time="19:00"
                            title="Ada Andre Mau Kasih Kejutan Buat Sule"
                            seats="100"
                            studio="D"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="6 Jun"
                            day="Minggu"
                            time="20:00"
                            title="Episode 205"
                            seats="60"
                            studio="A"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="7 Jun"
                            day="Senin"
                            time="19:00"
                            title="Episode 206"
                            seats="60"
                            studio="B"
                            @click="showBottomSheet"
                        />
                    </div>
                    <div class="list-item">
                        <card-schedule
                            date="8 Jun"
                            day="Selasa"
                            time="19:00"
                            title="Episode 207"
                            seats="60"
                            studio="C"
                            @click="showBottomSheet"
                        />
                    </div>
                </div>
            </div>
        </div>
        <transition name="bottom-sheet">
            <div class="bottom-sheet" v-show="isBottomSheetVisible">
                <div class="bottom-sheet__overlay" @click.self="closeBottomSheet">
                    <div class="bottom-sheet__content" :class="[ isBottomSheetVisible ? 'bottom-sheet__content--is-open' : '' ]" role="dialog" aria-labelledby="bottomSheetTicket" aria-describedby="bottomSheetTicket">
                        <div class="bottom-sheet__wrapper">
                            <div class="studio-badge" style="background-image: linear-gradient(45deg, #D6EBEE 0%, #018ABE 100%);">
                                <span class="studio-badge__top">Studio</span>
                                <span class="studio-badge__bottom">A</span>
                            </div>
                            <button class="sheet__close" type="button" aria-label="Close bottom sheet" @click="closeBottomSheet">
                                <svg width="24" height="24">
                                    <g fill="none" fill-rule="evenodd">
                                        <path d="M3.74928424.3655862c-1.13342756 0-1.59921469.08994765-2.08066982.34743267-.41290594.22082451-.73477104.54268961-.95559555.95559555-.25748502.48145513-.34743266.94724226-.34743266 2.08066982V20.2507158c0 1.1334275.08994764 1.5992147.34743266 2.0806698.22082451.4129059.54268961.734771.95559555.9555955.48145513.2574851.94724226.3474327 2.08066982.3474327H20.2507158c1.1334275 0 1.5992147-.0899476 2.0806698-.3474327.4129059-.2208245.734771-.5426896.9555955-.9555955.2574851-.4814551.3474327-.9472423.3474327-2.0806698V3.74928424c0-1.13342756-.0899476-1.59921469-.3474327-2.08066982-.2208245-.41290594-.5426896-.73477104-.9555955-.95559555-.4814551-.25748502-.9472423-.34743266-2.0806698-.34743266H3.74928424z" stroke="#0D0D0D" stroke-width=".73117241"/>
                                        <path d="M17.6654727 6.33453799c-.4462006-.44605065-1.1852703-.44605065-1.6321483 0l-4.0332628 4.03190771-4.03326288-4.03190771c-.44620058-.44605065-1.18527033-.44605065-1.63214828 0-.44620059.44605066-.44620059 1.18487208 0 1.63159987l4.03326286 4.03190764-4.03326286 4.0319077c-.44620059.4460506-.44620059 1.1848721 0 1.6315999C6.56557125 17.8923963 6.85782462 18 7.15069379 18c.29225338 0 .58512254-.1076068.81604335-.3384469L12 13.6296454l4.0332629 4.0319077c.2309208.2308432.5231741.3384469.8160433.3384469.2922534 0 .5851226-.1076068.8160434-.3384469.4462005-.4460507.4462005-1.1848721 0-1.6315999l-4.0332629-4.0319077 4.0332629-4.03190764c.4462005-.44665084.4462005-1.18487207 0-1.63159987h.0001231z" fill="#0D0D0D" fill-rule="nonzero"/>
                                    </g>
                                </svg>
                            </button>
                            <div class="sheet__content" v-if="sheetStep === 0">
                                <div class="sheet__header">
                                    <div class="header__wrapper">
                                        <h3 class="show-title">Ini Talkshow</h3>
                                        <span class="show-subtitle">Episode 200</span>
                                    </div>
                                </div>
                                <div class="sheet__info">
                                    <div class="info__wrapper">
                                        <div class="info__list">
                                            <div class="list-item">
                                                <svg width="20" height="20">
                                                    <path d="M13.9130237 0h4.9398936c.2852785 0 .5608023.11028075.76207.30802773.2032237.19582428.3165587.4639278.3165587.74153293v4.79917929c0 .57990853-.4826344 1.04955579-1.0786237 1.04955579h-4.9398986c-.5959694 0-1.0786237-.46962779-1.0786237-1.04955579V1.04956066C12.8344.46965212 13.3170343 0 13.9130237 0zm0 13.0940524h4.9398936c.2852785 0 .5608023.1102807.76207.3080277.2032237.1958243.3166546.4639278.3166546.7415329v4.7991793c.00186.2795278-.11148.5495297-.3127477.7472767-.2031987.197747-.4787225.309931-.7659719.309931h-4.9398986c-.2872245 0-.5627483-.112184-.7659719-.309931-.2012678-.1977713-.3146058-.4677683-.3127476-.7472767V14.143613c0-.5799085.4827301-1.0495606 1.0787195-1.0495606zm-12.83428171 0h4.97896254c.28527351 0 .5608023.1102807.76207002.3080277.20322368.1958243.31665466.4639278.31665466.7415329v4.7991793c.00186.2795278-.11148004.5495297-.31274776.7472767C6.62048279 19.887816 6.344959 20 6.05770953 20H1.07874199c-.28722447 0-.56274825-.112184-.76597192-.309931-.20126773-.1977713-.31460576-.4677683-.31274758-.7472767V14.143613c0-.5799085.48273011-1.0495606 1.0787195-1.0495606zm0-13.0940524h4.97896254c.28527351 0 .5608023.11028075.76207002.30802773.20322368.19582428.31655871.4639278.31655871.74153293v4.79917929c0 .57990853-.48263435 1.04955579-1.07862373 1.04955579H1.07874199c-.59596938 0-1.07862373-.46962779-1.07862373-1.04955579V1.04956066C.00011826.46965212.4827526 0 1.07874199 0zm7.8082413 2.96642863c0-.57990854.48263434-1.04956066 1.07861872-1.04956066.28527349 0 .56080229.11028075.76206999.30802773.2032237.19582427.3165587.4639278.3165587.74153293v2.8825547c0 .57990853-.4826543 1.04955579-1.07862369 1.04955579-.59596937 0-1.07862372-.46962779-1.07862372-1.04955579v-2.8825547zM13.535914 11.0991116c-.5959693 0-1.0786237-.4696473-1.0786237-1.0495558C12.4572903 9.46964725 12.9399246 9 13.535914 9h1.3991294c.5959694 0 1.0786237.46964725 1.0786237 1.0495558 0 .5799085-.4826343 1.0495558-1.0786237 1.0495558H13.535914zm3.9863329 0c-.5959693 0-1.0786237-.4696473-1.0786237-1.0495558C16.4436232 9.46964725 16.9262575 9 17.5222469 9h1.3991294C19.5173456 9 20 9.46964725 20 10.0495558c0 .5799085-.4826343 1.0495558-1.0786237 1.0495558h-1.3991294zM1.07862373 9.00029206L9.86408952 9c.65656878 0 1.18807688.51718441 1.18807688 1.1560593v6.6778851c0 .5799085-.4826544 1.0495558-1.07862373 1.0495558-.59596938 0-1.07862373-.4696278-1.07862373-1.0495558v-5.7345408H1.07862373C.48265435 11.0994036 0 10.6297564 0 10.0498478c0-.57990849.48263434-1.04955574 1.07862373-1.04955574z" fill="#606060" fill-rule="nonzero"/>
                                                </svg>
                                                <div class="list-meta">
                                                    <h6 class="list-title">Check-in menggunakan handphone</h6>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <svg width="20" height="20">
                                                    <path d="M9.07429474 16.0937047L6.21071579 13.17497c-.14720421-.1500374-.14720421-.3646176 0-.5146593L7.39 11.437351c.1472-.1500417.35772211-.1500417.50492632 0l1.43174736 1.4593459 2.75831582-2.8323001c.1472-.1500417.3577221-.1500417.5049263 0l1.1998316 1.2229597c.1472042.1500374.1472042.3646176 0 .5146593l-4.21052635 4.2916889c-.1472.1500418-.3577221.1500418-.50492631 0zM16.7155579 1.9311313h-.0001895C18.5263158 1.9311313 20 3.4332224 20 5.2571902v11.3948633C20 18.4979089 18.5262316 20 16.7153684 20H3.26315789C1.47368421 20 0 18.497823 0 16.6520535V5.2571902c0-1.8239678 1.47368421-3.3260589 3.26315789-3.3260589h.7779579v1.0511204c0 .96563.75823158 1.7384774 1.7056 1.7384774s1.7056-.7728474 1.7056-1.7384774V1.9311313h5.07326311v1.0511204c0 .96563.7582316 1.7384774 1.7056 1.7384774.9473685 0 1.7056-.7728474 1.7056-1.7384774V1.9311313h.778779zm1.5789474 14.7209222l.0009684-8.6052655H1.70578947v8.6052655c0 .901083.69406316 1.6093833 1.5575579 1.6093833H16.7155579c.8840421 0 1.5789474-.7292438 1.5789474-1.6093833zM5.74776716 3.8415766c-.46301053 0-.84211158-.3864237-.86431579-.8801396V.8801396C4.88345137.3864237 5.26256716 0 5.74694611 0c.48437894 0 .86349473.4082255.86349473.8801396l.00082232 2.0812974c0 .4937159-.40050527.8801396-.86349474.8801396h-.00000126zm8.50484334 0c-.4843789 0-.8626724-.3864237-.8634947-.8801396V.8801396c0-.4937159.3791158-.8801396.8634947-.8801396.484379 0 .8634948.4082255.8634948.8801396V2.961437c0 .4937159-.4005053.8801396-.8634948.8801396z" fill="#606060" fill-rule="nonzero"/>
                                                </svg>
                                                <div class="list-meta">
                                                    <h6 class="list-title">Minggu, 30 Mei 2019</h6>
                                                    <span class="list-subtitle">19:00</span>
                                                </div>
                                            </div>
                                            <div class="list-item">
                                                <svg width="20" height="20">
                                                    <path d="M19.8331455 18.703747C20.2357966 19.232398 19.8641136 20 19.2050618 20H.79469227c-.62291654 0-1.0032028-.696079-.67281788-1.231647l3.35803236-8.446571c.27875677-.452701.76746215-.727475 1.29400762-.727475h1.61406251c.13594238.218077.28049239.438767.43450022.662941.94296262 1.371211 1.95735447 2.482476 2.47788693 3.023292l.23574066.244248c.25468272.265168.67541691.263426.92921861-.002617l.2340227-.24599c.5722266-.600014 1.8429091-2.008784 2.889987-3.681874h.8483404c.4732213 0 .9197476.222494 1.2088344.602801l4.1866377 8.506639zM14.2346664 4.836732c-.0002238 2.917893-3.5491966 6.783818-4.23663954 7.505196-.690945-.717024-4.2331119-4.502671-4.2331119-7.519934C5.76491496 2.11789 7.62608336 0 9.99978891 0c2.37559979 0 4.23659479 2.117801 4.23487749 4.836732zm-6.06741253-.286095c.03526308.956904.81563227 1.74892 1.7585949 1.786428 1.04535993.040998 1.90574413-.803376 1.90832533-1.853589-.000859-1.026656-.8216453-1.858813-1.83431911-1.859686v-.005233c-1.03674789 0-1.87217903.872264-1.83260112 1.93208z" fill="#606060" fill-rule="nonzero"/>
                                                </svg>
                                                <div class="list-meta">
                                                    <h6 class="list-title">Graha Mitra, Jl. Jend. Gatot Subroto Kav. 21, Karet-Semanggi, Jakarta Selatan 12980</h6>
                                                    <span class="list-subtitle">Lihat alamat</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sheet__action">
                                    <div class="action__wrapper">
                                        <div class="action__ticket" @click="handleOrder(+1)">
                                            <span class="ticket__info">Jumlah Tiket</span>
                                            <div class="ticket__count">
                                                <span class="ticket__number" style="color: #018ABE;">{{ value_radio }} Tiket</span>
                                                <svg width="8" height="14">
                                                    <path d="M.338407 2.0938287c-.451209-.4907044-.451209-1.2546891 0-1.7459263.477312-.4638699 1.220445-.4638699 1.698274 0l5.624912 5.7827411c.451209.4907044.451209 1.2546891 0 1.7459263l-5.624912 5.7554019c-.477311.4907044-1.220444.4907044-1.698274 0-.451209-.4638699-.451209-1.2546891 0-1.718587l4.802436-4.9098481L.338407 2.0938287z" fill="#DEDEDE" fill-rule="evenodd"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <button class="action__submit" type="button" style="background-color: #018ABE;" @click="handleOrder(+2)">Lanjutkan</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sheet__content" v-else-if="sheetStep === 1">
                                <div class="sheet__header">
                                    <div class="header__wrapper">
                                        <button class="header__back" type="button" @click="handleOrder(-1)">
                                            <svg width="9" height="16">
                                                <path d="M8.61929208 2.39294708L3.21655197 8.0040418l5.40274011 5.611255c.50761056.530169.50761056 1.4339624 0 1.9640994-.53755845.5608051-1.3735832.5608051-1.91055864 0L.38070792 9.0017941c-.50761056-.5614139-.50761056-1.43453931 0-1.99534434l6.32802552-6.608847c.53755845-.53013701 1.37358319-.53013701 1.91055864 0 .50761056.56141391.50761056 1.43453928 0 1.99534432z" fill="#0D0D0D" fill-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <h6 class="header__title">Jumlah Tiket</h6>
                                    </div>
                                </div>
                                <div class="sheet__form">
                                    <div class="form__wrapper">
                                        <div class="form__list">
                                            <ticket-item
                                                label="1 Tiket"
                                                v-model="value_radio"
                                                v_value="1"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="2 Tiket"
                                                v-model="value_radio"
                                                v_value="2"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="3 Tiket"
                                                v-model="value_radio"
                                                v_value="3"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="4 Tiket"
                                                v-model="value_radio"
                                                v_value="4"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="5 Tiket"
                                                v-model="value_radio"
                                                v_value="5"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="6 Tiket"
                                                v-model="value_radio"
                                                v_value="6"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="7 Tiket"
                                                v-model="value_radio"
                                                v_value="7"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="8 Tiket"
                                                v-model="value_radio"
                                                v_value="8"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="9 Tiket"
                                                v-model="value_radio"
                                                v_value="9"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="10 Tiket"
                                                v-model="value_radio"
                                                v_value="10"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                            <ticket-item
                                                label="> 10 Tiket"
                                                v-model="value_radio"
                                                v_value="> 10"
                                                primaryColor="#018ABE"
                                                secondaryColor="#D6EBEE"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="sheet__footer">
                                    <div class="footer__wrapper">
                                        <button class="footer__submit" type="button" style="background-color: #018ABE;" @click="handleOrder(-1)">Selesai</button>
                                    </div>
                                </div>
                            </div>
                            <div class="sheet__content" v-else-if="sheetStep === 2">
                                <div class="sheet__header">
                                    <div class="header__wrapper">
                                        <button class="header__back" type="button" @click="handleOrder(-2)">
                                            <svg width="9" height="16">
                                                <path d="M8.61929208 2.39294708L3.21655197 8.0040418l5.40274011 5.611255c.50761056.530169.50761056 1.4339624 0 1.9640994-.53755845.5608051-1.3735832.5608051-1.91055864 0L.38070792 9.0017941c-.50761056-.5614139-.50761056-1.43453931 0-1.99534434l6.32802552-6.608847c.53755845-.53013701 1.37358319-.53013701 1.91055864 0 .50761056.56141391.50761056 1.43453928 0 1.99534432z" fill="#0D0D0D" fill-rule="evenodd"/>
                                            </svg>
                                        </button>
                                        <h6 class="header__title">Form Pemesanan</h6>
                                    </div>
                                </div>
                                <div class="sheet__form">
                                    <div class="form__wrapper">
                                        <div class="form__list">
                                            <div class="form__header">
                                                <span class="form__title">Ini Talkshow (Episode 200)</span>
                                                <span class="form__subtitle">Minggu, 30 Mei 2019 &bull; 19:00</span>
                                            </div>
                                            <div class="form__input">
                                                <h6>Alamat Email</h6>
                                                <div class="input">
                                                    <label>Tiket 1</label>
                                                    <input type="email" placeholder="example@email.com (Optional)" />
                                                </div>
                                                <span>*E-ticket akan dikirimkan melalui email yang tercantum dalam bentuk PDF.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sheet__footer">
                                    <div class="footer__wrapper">
                                        <div class="footer__ticket">
                                            <span>Jumlah Tiket</span>
                                            <span>{{ value_radio }} Tiket</span>
                                        </div>
                                        <button class="footer__order" type="button" @click="handleOrderTicket">
                                            <svg width="14" height="14" v-show="isLoading === false">
                                                <path d="M13.157968.4734051l.000037-.0001877c.423584-.5101939 1.13454.230185.713081.7374514-2.354779 2.8340563-4.710466 5.667925-7.066153 8.5019813-.170995.2059954-.541374.1986579-.71379 0-.997747-1.146421-1.995277-2.2937241-2.992879-3.440952-.432812-.4984839.278853-1.237399.71379-.7374514.876321 1.0073642 1.75188 2.0145032 2.628146 3.0217173 2.239256-2.6938735 4.478512-5.3886854 6.717768-8.0825589zm-.837904 4.5427096l-.000073-.0000375c-.193701-.6436209.781197-.9163111.972772-.2771002.876412 2.9196297-.038326 6.0959984-2.441421 7.9264249C6.66854 15.8513226.586475 12.9915567.040139 7.6997044-.553097 1.951911 5.551092-1.83347398 10.303516.9153842c.566916.3284068.057471 1.2285978-.509445.900191C7.154663.2886341 3.7837.953517 2.038958 3.564632.543263 5.8034276.717111 8.8806926 2.443397 10.9303259c1.72122 2.0437408 4.665783 2.6389827 7.005122 1.410385 2.618956-1.3759304 3.726523-4.476653 2.871545-7.3245962z" fill="#FFF" fill-rule="nonzero"/>
                                            </svg>
                                            {{ isLoading ? '' : 'Pesan Tiket' }}
                                            <svg xmlns="http://www.w3.org/2000/svg" version="1" width="14" height="14" viewBox="0 0 128 128" style="margin-right: 0;" v-show="isLoading === true">
                                                <g><path d="M59.6 0h8v40h-8V0z" fill="#fff"/><path d="M92.19 6.374l6.928 4-20 34.641-6.929-4 20-34.64zM117.226 28.19l4 6.928-34.641 20-4-6.929 34.64-20zM128 59.6v8H88v-8h40zM121.626 92.19l-4 6.928-34.641-20 4-6.929 34.64 20z" fill="#fff" fill-opacity=".2"/><path d="M99.81 117.226l-6.928 4-20-34.641 6.929-4 20 34.64z" fill="#fff" fill-opacity=".3"/><path d="M68.4 128h-8V88h8v40z" fill="#fff" fill-opacity=".4"/><path d="M35.81 121.626l-6.928-4 20-34.641 6.929 4-20 34.64z" fill="#fff" fill-opacity=".5"/><path d="M10.774 99.81l-4-6.928 34.641-20 4 6.929-34.64 20z" fill="#fff" fill-opacity=".6"/><path d="M0 68.4v-8h40v8H0z" fill="#fff" fill-opacity=".7"/><path d="M6.374 35.81l4-6.928 34.641 20-4 6.929-34.64-20z" fill="#fff" fill-opacity=".8"/><path d="M28.19 10.774l6.928-4 20 34.641-6.929 4-20-34.64z" fill="#fff" fill-opacity=".9"/><animateTransform attributeName="transform" type="rotate" values="0 64 64;30 64 64;60 64 64;90 64 64;120 64 64;150 64 64;180 64 64;210 64 64;240 64 64;270 64 64;300 64 64;330 64 64" calcMode="discrete" dur="1080ms" repeatCount="indefinite"/></g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            <div class="sheet__content" v-else-if="sheetStep === 3">
                                <div class="sheet__header">
                                    <div class="header__wrapper">
                                        <h6 class="header__title">Pemesanan Tiket Berhasil</h6>
                                    </div>
                                </div>
                                <div class="sheet__form">
                                    <div class="form__wrapper">
                                        <div class="form__status">
                                            <svg width="203" height="169">
                                                <g fill-rule="nonzero" fill="none"><path d="M117.51 22.48c-12.944-.45-25.272-4.628-37.044-9.2C68.694 8.708 57.034 3.642 44.4 1.22 36.274-.338 26.98-.558 20.434 3.798c-6.302 4.2-8.338 11.43-9.432 18.146-.824 5.052-1.308 10.37.948 15.098 1.568 3.284 4.348 6.044 6.272 9.19 6.694 10.944 1.962 24.44-5.29 35.126-3.4 5.014-7.35 9.8-9.976 15.132-2.626 5.332-3.84 11.45-1.542 16.894 2.276 5.4 7.702 9.448 13.58 12.298 11.938 5.79 26 7.446 39.722 8.384 30.366 2.078 60.892 1.178 91.338.278 11.268-.334 22.584-.672 33.668-2.414 6.156-.968 12.51-2.502 16.98-6.21 5.672-4.706 7.078-12.674 3.276-18.576-6.376-9.898-24-12.356-28.462-22.978-2.452-5.848.066-12.36 3.632-17.784 7.648-11.632 20.466-21.838 21.14-35.134.464-9.132-5.698-18.278-15.226-22.6-9.986-4.528-23.836-3.96-31.2 3.538-7.59 7.72-20.922 10.69-32.352 10.294z" fill="#0D0D0D" opacity=".1"/><ellipse fill="#0D0D0D" opacity=".1" cx="96.898" cy="156.398" rx="60.794" ry="8.224"/><rect fill="#000" x="128.76" y="58.164" width="1.772" height="14.604" rx=".458"/><rect fill="#000" x="69.874" y="46.722" width="1" height="4.808" rx=".458"/><rect fill="#000" x="69.838" y="55.526" width="1.12" height="8.368" rx=".458"/><rect fill="#000" x="69.856" y="66.822" width="1.066" height="8.44" rx=".458"/><rect fill="#000" x="70.436" y="30.834" width="59.28" height="120.478" rx="7.798"/><path d="M121.354 33.964h-6.8v.818a3.876 3.876 0 0 1-3.878 3.876H89.05a3.876 3.876 0 0 1-3.878-3.876v-.818h-6.366a4.708 4.708 0 0 0-4.708 4.708v104.794a4.708 4.708 0 0 0 4.708 4.708h42.548c2.6 0 4.708-2.108 4.708-4.708V38.68a4.708 4.708 0 0 0-4.708-4.716z" fill="#FFF"/><rect fill="#E6E8EC" x="94.358" y="34.432" width="8.278" height="1.68" rx=".774"/><circle fill="#E6E8EC" cx="104.842" cy="35.272" r="1"/><path d="M166.24 33.55s-16.84-1.016-14.856 10.784c0 0-.4 2.086 1.496 3.032 0 0 .03-.874 1.728-.576a7.9 7.9 0 0 0 1.83.088 3.812 3.812 0 0 0 2.236-.914s4.734-1.956 6.574-9.692c0 0 1.362-1.688 1.308-2.122l-2.842 1.214s.972 2.05.2 3.754c0 0-.092-3.68-.638-3.6-.11.016-1.476.71-1.476.71s1.67 3.57.41 6.166c0 0 .478-4.4-.932-5.908l-2 1.168s1.952 3.688.628 6.698c0 0 .34-4.616-1.05-6.414l-1.812 1.414s1.834 3.634.716 6.13c0 0-.146-5.372-1.108-5.778 0 0-1.586 1.4-1.828 1.972 0 0 1.256 2.64.476 4.032 0 0-.478-3.58-.87-3.6 0 0-1.58 2.372-1.744 4 0 0 .068-2.418 1.362-4.224 0 0-1.528.262-2.42 1.252 0 0 .246-1.676 2.81-1.824 0 0 1.306-1.8 1.654-1.908 0 0-2.548-.214-4.094.472 0 0 1.36-1.582 4.562-.862l1.79-1.462s-3.356-.458-4.78.048c0 0 1.638-1.4 5.262-.38l1.948-1.164s-2.862-.616-4.566-.4c0 0 1.8-.97 5.138.082l1.4-.626s-2.096-.412-2.71-.478c-.614-.066-.646-.234-.646-.234a7.27 7.27 0 0 1 3.938.438s2.956-1.102 2.906-1.288zM148.966 28.302s-7.6-.458-6.712 4.874c0 0-.178.942.676 1.37 0 0 .014-.4.782-.262.273.046.55.06.826.04.373-.025.728-.17 1.01-.416 0 0 2.14-.884 2.972-4.38 0 0 .614-.762.59-.958l-1.284.548s.438.926.094 1.696c0 0-.042-1.662-.288-1.624-.05 0-.668.322-.668.322s.756 1.614.186 2.786c0 0 .216-1.988-.422-2.67l-.904.536s.882 1.666.284 3.026c0 0 .154-2.086-.474-2.898l-.818.64s.828 1.642.324 2.77c0 0-.068-2.428-.502-2.612 0 0-.716.632-.826.892 0 0 .568 1.2.216 1.822 0 0-.216-1.618-.4-1.626 0 0-.714 1.072-.788 1.8a3.904 3.904 0 0 1 .616-1.908 2.152 2.152 0 0 0-1.094.566s.112-.758 1.27-.824c0 0 .6-.814.748-.864 0 0-1.152-.096-1.85.214 0 0 .614-.714 2.06-.39l.8-.66s-1.518-.2-2.16.022c0 0 .74-.632 2.378-.172l.88-.526s-1.294-.278-2.064-.178c0 0 .814-.438 2.322.036l.63-.282s-.948-.186-1.226-.216-.292-.106-.292-.106c.6-.1 1.217-.03 1.78.2 0 0 1.352-.504 1.328-.588z" fill="#FFF"/><ellipse fill="#2B2B2C" opacity=".1" cx="173.034" cy="154.868" rx="5.386" ry="1"/><ellipse fill="#2B2B2C" opacity=".1" cx="18.418" cy="162.336" rx="5.386" ry="1"/><ellipse fill="#2B2B2C" opacity=".1" cx="39.252" cy="167.218" rx="5.386" ry="1"/><ellipse fill="#ACACAC" cx="161.244" cy="164.62" rx="8.042" ry="1.36"/><path d="M164.57 162.396c.367-.3.634-.703.766-1.158.1-.458-.096-1-.536-1.178-.492-.188-1.018.154-1.416.498-.398.344-.856.738-1.378.664.546-.494.793-1.24.65-1.962a.826.826 0 0 0-.182-.4c-.272-.292-.768-.168-1.094.064-1.04.73-1.33 2.144-1.336 3.414-.106-.458-.016-.936-.02-1.4-.004-.464-.13-1-.528-1.246a1.588 1.588 0 0 0-.8-.188c-.468-.018-.988.03-1.308.372-.4.424-.292 1.136.052 1.6.344.464.87.762 1.354 1.084a3 3 0 0 1 .966.922c.03.053.054.108.072.166h2.922a8.212 8.212 0 0 0 1.816-1.252z" fill="#ACACAC"/><path d="M39.53 144.854s1.1 1.438-.506 3.6-2.93 4-2.4 5.354c0 0 2.424-4.03 4.4-4.086 1.976-.056.676-2.444-1.494-4.868z" fill="#F2F2F2"/><path d="M39.53 144.854c.096.14.171.291.224.452 1.924 2.26 2.95 4.37 1.1 4.422-1.722.05-3.788 3.13-4.284 3.908.016.06.036.118.058.178 0 0 2.424-4.03 4.4-4.086 1.976-.056.672-2.45-1.498-4.874z" fill="#000" opacity=".1"/><path d="M41.572 146.686c0 .506-.056.916-.126.916s-.126-.41-.126-.916.07-.268.14-.268.112-.238.112.268z" fill="#3ACC6C"/><path d="M42.274 147.29c-.444.242-.832.388-.864.326-.032-.062.298-.308.742-.55.444-.242.27-.066.302 0 .032.066.264-.018-.18.224z" fill="#3ACC6C"/><path d="M33.728 144.854s-1.1 1.438.506 3.6 2.93 4 2.4 5.354c0 0-2.422-4.03-4.4-4.086-1.978-.056-.68-2.444 1.494-4.868z" fill="#F2F2F2"/><path d="M33.728 144.854a1.8 1.8 0 0 0-.226.452c-1.924 2.26-2.948 4.37-1.1 4.422 1.724.05 3.79 3.13 4.286 3.908-.016.06-.036.12-.06.178 0 0-2.422-4.03-4.4-4.086-1.978-.056-.674-2.45 1.5-4.874z" fill="#000" opacity=".1"/><path d="M31.684 146.686c0 .506.058.916.128.916s.126-.41.126-.916-.07-.268-.14-.268-.114-.238-.114.268z" fill="#3ACC6C"/><path d="M30.984 147.29c.444.242.83.388.864.326.034-.062-.3-.308-.744-.55-.444-.242-.268-.066-.302 0-.034.066-.262-.018.182.224z" fill="#3ACC6C"/><path d="M32.034 153.626s3.072-.096 4-.754c.928-.658 4.726-1.448 4.954-.39.228 1.058 4.618 5.258 1.15 5.286-3.468.028-8.06-.54-8.984-1.102-.924-.562-1.12-3.04-1.12-3.04z" fill="#ACACAC"/><path d="M42.198 157.4c-3.468.028-8.06-.54-8.984-1.102-.702-.43-.984-1.968-1.078-2.676h-.102s.2 2.476 1.118 3.04c.918.564 5.516 1.13 8.984 1.102 1 0 1.346-.364 1.328-.892-.14.324-.522.522-1.266.528z" fill="#000" opacity=".2"/><circle fill="#FFF" cx="100.438" cy="92.552" r="11.214"/><path d="M115.172 91.074a14.988 14.988 0 1 1-14.988-14.988c8.278 0 14.988 6.71 14.988 14.988zm-16.72 7.934L109.57 87.89a.966.966 0 0 0 0-1.368l-1.368-1.358a.964.964 0 0 0-1.366 0l-9.068 9.068-4.234-4.244a.97.97 0 0 0-1.368 0l-1.368 1.376a.97.97 0 0 0 0 1.368l6.286 6.284a.966.966 0 0 0 1.368 0v-.008z" fill="#09B920"/></g>
                                            </svg>
                                            <h6>Tiket berhasil dikirim ke email yang tercantum</h6>
                                            <span>Klik tombol di bawah untuk melihat tiket yang dipesan</span>
                                        </div>
                                    </div>
                                </div>
                               <div class="sheet__action">
                                    <div class="action__wrapper">
                                        <a class="action__submit action__submit--success" href="/ticket">Lihat Tiket</a>
                                    </div>
                                </div>
                            </div>




                            <div class="sheet__content" v-else-if="sheetStep === 4">
                                <div class="sheet__header">
                                    <div class="header__wrapper">
                                        <h6 class="header__title">Pemesanan Tiket Gagal</h6>
                                    </div>
                                </div>
                                <div class="sheet__form">
                                    <div class="form__wrapper">
                                        <div class="form__status">
                                            <svg width="203px" height="169px" viewBox="0 0 203 169" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="Show-Details" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="6-Show-Details-(Ticket-Order-Failed)" transform="translate(-86.000000, -459.000000)" fill-rule="nonzero"> <g id="Ticket-Sheet" transform="translate(0.000000, 322.000000)"> <g id="Sheet-Content" transform="translate(20.000000, 137.000000)"> <g id="undraw_order_confirmed_1m3v" transform="translate(66.000000, 0.000000)"> <path d="M117.510011,22.480002 C104.566009,22.030002 92.2380082,17.8520016 80.4660072,13.2800012 C68.6940061,8.70800078 57.0340051,3.64200033 44.400004,1.22000011 C36.2740032,-0.33800003 26.9800024,-0.55800005 20.4340018,3.79800034 C14.1320013,7.99800072 12.0960011,15.2280014 11.002001,21.944002 C10.1780009,26.9960024 9.69400087,32.3140029 11.9500011,37.0420033 C13.5180012,40.3260036 16.2980015,43.0860039 18.2220016,46.2320041 C24.9160022,57.1760051 20.1840018,70.6720063 12.9320012,81.3580073 C9.53200085,86.3720077 5.5820005,91.1580082 2.95600026,96.4900086 C0.33000003,101.822009 -0.884000079,107.94001 1.41400013,113.38401 C3.69000033,118.784011 9.11600082,122.832011 14.9940013,125.682011 C26.9320024,131.472012 40.9940037,133.128012 54.7160049,134.066012 C85.0820076,136.144012 115.60801,135.244012 146.054013,134.344012 C157.322014,134.010012 168.638015,133.672012 179.722016,131.930012 C185.878017,130.962012 192.232017,129.428012 196.702018,125.720011 C202.374018,121.014011 203.780018,113.04601 199.978018,107.14401 C193.602017,97.2460087 175.978016,94.7880085 171.516015,84.1660075 C169.064015,78.318007 171.582015,71.8060064 175.148016,66.3820059 C182.796016,54.7500049 195.614017,44.544004 196.288018,31.2480028 C196.752018,22.116002 190.590017,12.9700012 181.062016,8.64800077 C171.076015,4.12000037 157.226014,4.68800042 149.862013,12.1860011 C142.272013,19.9060018 128.940012,22.876002 117.510011,22.480002 Z" id="Path" fill="#0D0D0D" opacity="0.1"></path> <ellipse id="Oval" fill="#0D0D0D" opacity="0.1" cx="96.8980087" cy="156.398014" rx="60.7940054" ry="8.22400074"></ellipse> <rect id="Rectangle" fill="#000000" x="128.760012" y="58.1640052" width="1.77200016" height="14.6040013" rx="0.458000041"></rect> <rect id="Rectangle" fill="#000000" x="69.8740062" y="46.7220042" width="1" height="4.80800043" rx="0.458000041"></rect> <rect id="Rectangle" fill="#000000" x="69.8380062" y="55.526005" width="1.1200001" height="8.36800075" rx="0.458000041"></rect> <rect id="Rectangle" fill="#000000" x="69.8560062" y="66.822006" width="1.0660001" height="8.44000075" rx="0.458000041"></rect> <rect id="Rectangle" fill="#000000" x="70.4360063" y="30.8340028" width="59.2800053" height="120.478011" rx="7.7980007"></rect> <path d="M121.354011,33.964003 L114.55401,33.964003 L114.55401,34.7820031 C114.55401,35.8103289 114.145373,36.796508 113.418049,37.5234566 C112.690725,38.2504052 111.704336,38.6585341 110.67601,38.6580035 L89.050008,38.6580035 C88.0216823,38.6585341 87.0352925,38.2504052 86.3079688,37.5234566 C85.5806452,36.796508 85.1720075,35.8103289 85.1720076,34.7820031 L85.1720076,33.964003 L78.806007,33.964003 C76.2058502,33.964003 74.0980066,36.0718466 74.0980066,38.6720035 L74.0980066,143.466013 C74.0980066,144.714652 74.5940267,145.912151 75.476948,146.795072 C76.3598694,147.677993 77.5573677,148.174013 78.806007,148.174013 L121.354011,148.174013 C123.954168,148.174013 126.062018,146.06617 126.062018,143.466013 L126.062018,38.6800035 C126.064135,37.4299786 125.569053,36.230424 124.685901,35.3457717 C123.80275,34.4611193 122.604038,33.964003 121.354011,33.964003 Z" id="Path" fill="#FFFFFF"></path> <rect id="Rectangle" fill="#E6E8EC" x="94.3580084" y="34.4320031" width="8.27800074" height="1.68000015" rx="0.774000069"></rect> <circle id="Oval" fill="#E6E8EC" cx="104.842009" cy="35.2720032" r="1"></circle> <path d="M166.240013,33.5500023 C166.240013,33.5500023 149.400012,32.5340022 151.384012,44.3340032 C151.384012,44.3340032 150.984012,46.4200034 152.880012,47.3660035 C152.880012,47.3660035 152.910012,46.4920034 154.608012,46.7900035 C155.212535,46.8902105 155.826664,46.9197423 156.438013,46.8780035 C157.262721,46.8237889 158.047471,46.5030104 158.674013,45.9640034 L158.674013,45.9640034 C158.674013,45.9640034 163.408013,44.0080032 165.248013,36.2720025 C165.248013,36.2720025 166.610013,34.5840024 166.556013,34.1500023 L163.714013,35.3640024 C163.714013,35.3640024 164.686013,37.4140026 163.914013,39.1180028 C163.914013,39.1180028 163.822013,35.4380025 163.276013,35.5180025 C163.166013,35.5340025 161.800013,36.2280025 161.800013,36.2280025 C161.800013,36.2280025 163.470013,39.7980028 162.210013,42.3940031 C162.210013,42.3940031 162.688013,37.9940027 161.278013,36.4860025 L159.278013,37.6540027 C159.278013,37.6540027 161.230013,41.342003 159.906013,44.3520033 C159.906013,44.3520033 160.246013,39.7360028 158.856013,37.9380027 L157.044013,39.3520028 C157.044013,39.3520028 158.878013,42.9860031 157.760013,45.4820034 C157.760013,45.4820034 157.614013,40.1100029 156.652013,39.7040028 C156.652013,39.7040028 155.066012,41.104003 154.824012,41.676003 C154.824012,41.676003 156.080013,44.3160032 155.300012,45.7080034 C155.300012,45.7080034 154.822012,42.1280031 154.430012,42.108003 C154.430012,42.108003 152.850012,44.4800033 152.686012,46.1080034 C152.686012,46.1080034 152.754012,43.6900032 154.048012,41.884003 C154.048012,41.884003 152.520012,42.1460031 151.628012,43.1360031 C151.628012,43.1360031 151.874012,41.460003 154.438012,41.312003 C154.438012,41.312003 155.744012,39.5120028 156.092013,39.4040028 C156.092013,39.4040028 153.544012,39.1900028 151.998012,39.8760028 C151.998012,39.8760028 153.358012,38.2940027 156.560013,39.0140028 L158.350013,37.5520026 C158.350013,37.5520026 154.994012,37.0940026 153.570012,37.6000026 C153.570012,37.6000026 155.208012,36.2000025 158.832013,37.2200026 L160.780013,36.0560025 C160.780013,36.0560025 157.918013,35.4400025 156.214013,35.6560025 C156.214013,35.6560025 158.014013,34.6860024 161.352013,35.7380025 L162.752013,35.1120024 C162.752013,35.1120024 160.656013,34.7000024 160.042013,34.6340024 C159.428013,34.5680024 159.396013,34.4000024 159.396013,34.4000024 C160.723914,34.1785728 162.087219,34.330205 163.334013,34.8380024 C163.334013,34.8380024 166.290013,33.7360023 166.240013,33.5500023 Z" id="Path" fill="#FFFFFF"></path> <path d="M148.966012,28.3020018 C148.966012,28.3020018 141.366011,27.8440018 142.254011,33.1760023 C142.254011,33.1760023 142.076011,34.1180023 142.930011,34.5460024 C142.930011,34.5460024 142.944011,34.1460023 143.712011,34.2840023 C143.984799,34.3299118 144.262065,34.3433387 144.538011,34.3240024 C144.91107,34.2993395 145.2658,34.1532329 145.548012,33.9080023 L145.548012,33.9080023 C145.548012,33.9080023 147.688012,33.0240022 148.520012,29.5280019 C148.520012,29.5280019 149.134012,28.7660019 149.110012,28.5700018 L147.826012,29.1180019 C147.826012,29.1180019 148.264012,30.044002 147.920012,30.814002 C147.920012,30.814002 147.878012,29.1520019 147.632012,29.1900019 C147.582012,29.1900019 146.964012,29.5120019 146.964012,29.5120019 C146.964012,29.5120019 147.720012,31.1260021 147.150012,32.2980022 C147.150012,32.2980022 147.366012,30.310002 146.728012,29.6280019 L145.824012,30.164002 C145.824012,30.164002 146.706012,31.8300021 146.108012,33.1900023 C146.108012,33.1900023 146.262012,31.1040021 145.634012,30.292002 L144.816012,30.9320021 C144.816012,30.9320021 145.644012,32.5740022 145.140012,33.7020023 C145.140012,33.7020023 145.072012,31.2740021 144.638012,31.0900021 C144.638012,31.0900021 143.922011,31.7220021 143.812011,31.9820021 C143.812011,31.9820021 144.380011,33.1820023 144.028011,33.8040023 C144.028011,33.8040023 143.812011,32.1860022 143.628011,32.1780022 C143.628011,32.1780022 142.914011,33.2500023 142.840011,33.9780023 C142.875744,33.2992215 143.08808,32.6415319 143.456011,32.0700022 C143.043987,32.1480474 142.663742,32.3447738 142.362011,32.6360022 C142.362011,32.6360022 142.474011,31.8780021 143.632011,31.8120021 C143.632011,31.8120021 144.232011,30.9980021 144.380011,30.9480021 C144.380011,30.9480021 143.228011,30.852002 142.530011,31.1620021 C142.530011,31.1620021 143.144011,30.448002 144.590011,30.772002 L145.390012,30.112002 C145.390012,30.112002 143.872011,29.912002 143.230011,30.134002 C143.230011,30.134002 143.970011,29.5020019 145.608012,29.962002 L146.488012,29.4360019 C146.488012,29.4360019 145.194012,29.1580019 144.424011,29.2580019 C144.424011,29.2580019 145.238012,28.8200019 146.746012,29.2940019 L147.376012,29.0120019 C147.376012,29.0120019 146.428012,28.8260019 146.150012,28.7960019 C145.872012,28.7660019 145.858012,28.6900018 145.858012,28.6900018 C146.458406,28.5901241 147.074752,28.6593765 147.638012,28.8900019 C147.638012,28.8900019 148.990012,28.3860018 148.966012,28.3020018 Z" id="Path" fill="#FFFFFF"></path> <ellipse id="Oval" fill="#2B2B2C" opacity="0.1" cx="173.034015" cy="154.868014" rx="5.38600048" ry="1"></ellipse> <ellipse id="Oval" fill="#2B2B2C" opacity="0.1" cx="18.4180016" cy="162.336015" rx="5.38600048" ry="1"></ellipse> <ellipse id="Oval" fill="#2B2B2C" opacity="0.1" cx="39.2520035" cy="167.218015" rx="5.38600048" ry="1"></ellipse> <ellipse id="Oval" fill="#ACACAC" cx="161.244014" cy="164.620015" rx="8.04200072" ry="1.36000012"></ellipse> <path d="M164.570015,162.396015 C164.936526,162.096313 165.203599,161.692567 165.336015,161.238014 C165.436015,160.780014 165.240015,160.238014 164.800015,160.060014 C164.308015,159.872014 163.782015,160.214014 163.384015,160.558014 C162.986015,160.902014 162.528015,161.296014 162.006014,161.222014 C162.552491,160.727733 162.799282,159.982803 162.656015,159.260014 C162.63258,159.112693 162.569688,158.974467 162.474015,158.860014 C162.202015,158.568014 161.706014,158.692014 161.380014,158.924014 C160.340014,159.654014 160.050014,161.068014 160.044014,162.338015 C159.938014,161.880014 160.028014,161.402014 160.024014,160.938014 C160.020014,160.474014 159.894014,159.938014 159.496014,159.692014 C159.250463,159.560238 158.974557,159.4954 158.696014,159.504014 C158.228014,159.486014 157.708014,159.534014 157.388014,159.876014 C156.988014,160.300014 157.096014,161.012014 157.440014,161.476014 C157.784014,161.940014 158.310014,162.238015 158.794014,162.560015 C159.181195,162.790869 159.511374,163.106009 159.760014,163.482015 C159.789978,163.534566 159.81412,163.590228 159.832014,163.648015 L162.754015,163.648015 C163.412897,163.314247 164.023739,162.893116 164.570015,162.396015 L164.570015,162.396015 Z" id="Path" fill="#ACACAC"></path> <path d="M39.5300035,144.854013 C39.5300035,144.854013 40.6300036,146.292013 39.0240035,148.454013 C37.4180033,150.616013 36.0940032,152.454014 36.6240033,153.808014 C36.6240033,153.808014 39.0480035,149.778013 41.0240037,149.722013 C43.0000038,149.666013 41.7000037,147.278013 39.5300035,144.854013 Z" id="Path" fill="#F2F2F2"></path> <path d="M39.5300035,144.854013 C39.6259154,144.993184 39.7013515,145.145403 39.7540036,145.306013 C41.6780037,147.566013 42.7040038,149.676013 40.8540037,149.728013 C39.1320035,149.778013 37.0660033,152.858014 36.5700033,153.636014 C36.5860033,153.696014 36.6060033,153.754014 36.6280033,153.814014 C36.6280033,153.814014 39.0520035,149.784013 41.0280037,149.728013 C43.0040038,149.672013 41.7000037,147.278013 39.5300035,144.854013 Z" id="Path" fill="#000000" opacity="0.1"></path> <path d="M41.5720037,146.686013 C41.5720037,147.192013 41.5160037,147.602013 41.4460037,147.602013 C41.3760037,147.602013 41.3200037,147.192013 41.3200037,146.686013 C41.3200037,146.180013 41.3900037,146.418013 41.4600037,146.418013 C41.5300037,146.418013 41.5720037,146.180013 41.5720037,146.686013 Z" id="Path" fill="#3ACC6C"></path> <path d="M42.2740038,147.290013 C41.8300037,147.532013 41.4420037,147.678013 41.4100037,147.616013 C41.3780037,147.554013 41.7080037,147.308013 42.1520038,147.066013 C42.5960038,146.824013 42.4220038,147.000013 42.4540038,147.066013 C42.4860038,147.132013 42.7180038,147.048013 42.2740038,147.290013 Z" id="Path" fill="#3ACC6C"></path> <path d="M33.728003,144.854013 C33.728003,144.854013 32.6280029,146.292013 34.2340031,148.454013 C35.8400032,150.616013 37.1640033,152.454014 36.6340033,153.808014 C36.6340033,153.808014 34.2120031,149.778013 32.2340029,149.722013 C30.2560027,149.666013 31.5540028,147.278013 33.728003,144.854013 Z" id="Path" fill="#F2F2F2"></path> <path d="M33.728003,144.854013 C33.6317894,144.993302 33.5557064,145.145468 33.502003,145.306013 C31.5780028,147.566013 30.5540027,149.676013 32.4020029,149.728013 C34.1260031,149.778013 36.1920032,152.858014 36.6880033,153.636014 C36.6716155,153.696504 36.6515788,153.755946 36.6280033,153.814014 C36.6280033,153.814014 34.2060031,149.784013 32.2280029,149.728013 C30.2500027,149.672013 31.5540028,147.278013 33.728003,144.854013 Z" id="Path" fill="#000000" opacity="0.1"></path> <path d="M31.6840028,146.686013 C31.6840028,147.192013 31.7420028,147.602013 31.8120028,147.602013 C31.8820029,147.602013 31.9380029,147.192013 31.9380029,146.686013 C31.9380029,146.180013 31.8680028,146.418013 31.7980028,146.418013 C31.7280028,146.418013 31.6840028,146.180013 31.6840028,146.686013 Z" id="Path" fill="#3ACC6C"></path> <path d="M30.9840028,147.290013 C31.4280028,147.532013 31.8140028,147.678013 31.8480028,147.616013 C31.8820029,147.554013 31.5480028,147.308013 31.1040028,147.066013 C30.6600027,146.824013 30.8360028,147.000013 30.8020028,147.066013 C30.7680028,147.132013 30.5400027,147.048013 30.9840028,147.290013 Z" id="Path" fill="#3ACC6C"></path> <path d="M32.0340029,153.626014 C32.0340029,153.626014 35.1060031,153.530014 36.0340029,152.872014 C36.9620033,152.214014 40.7600036,151.424014 40.9880037,152.482014 C41.2160037,153.540014 45.6060041,157.740014 42.1380038,157.768014 C38.6700035,157.796014 34.078003,157.228014 33.154003,156.666014 C32.2300029,156.104014 32.0340029,153.626014 32.0340029,153.626014 Z" id="Path" fill="#ACACAC"></path> <path d="M42.1980038,157.400014 C38.7300035,157.428014 34.1380031,156.860014 33.214003,156.298014 C32.5120029,155.868014 32.2300029,154.330014 32.1360029,153.622014 L32.0340029,153.622014 C32.0340029,153.622014 32.2340029,156.098014 33.152003,156.662014 C34.070003,157.226014 38.6680035,157.792014 42.1360038,157.764014 C43.1360039,157.764014 43.4820039,157.400014 43.4640039,156.872014 C43.3240039,157.196014 42.9420038,157.394014 42.1980038,157.400014 Z" id="Path" fill="#000000" opacity="0.2"></path> <circle id="Oval" fill="#FFFFFF" cx="100.438009" cy="92.5520083" r="11.214001"></circle> <path d="M115.17201,94.0740081 C115.17201,100.136089 111.520301,105.601258 105.919669,107.921116 C100.319037,110.240974 93.8724299,108.958664 89.5858916,104.672126 C85.2993532,100.385587 84.0170434,93.9389806 86.3369013,88.3383483 C88.6567591,82.7377161 94.1219283,79.0860068 100.184009,79.0860068 C108.461654,79.0860068 115.17201,85.7963636 115.17201,94.0740081 Z" id="Shape" fill="#F14B4B"></path> <g id="ion-close-sharp" transform="translate(89.000000, 82.000000)"> <g id="Icon" transform="translate(5.000000, 5.000000)" fill="#FFFFFF"> <polygon id="Icon-Path" points="13.5000002 1.72891259 11.9510877 0.180000067 6.84000015 5.29108763 1.72891259 0.180000067 0.180000067 1.72891259 5.29108763 6.84000015 0.180000067 11.9510877 1.72891259 13.5000002 6.84000015 8.38891267 11.9510877 13.5000002 13.5000002 11.9510877 8.38891267 6.84000015"></polygon> </g> <rect id="ViewBox" x="0" y="0" width="23.6800003" height="23.6800003"></rect> </g> </g> </g> </g> </g> </g> </svg>
                                            <h6>Pemesanan tiket Gagal</h6>
                                            <span>Klik tombol di bawah untuk mengulangi</span>
                                        </div>
                                    </div>
                                </div>
                               <div class="sheet__action">
                                    <div class="action__wrapper">
                                        <a class="action__submit action__submit--failed" @click="handleOrderTicketTry">
                                            Coba Lagi
                                        </a>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    import CardSchedule from '../components/CardSchedule.vue'
    import TicketItem from '../components/TicketItem.vue'

    export default {
        data() {
            return {
                isScroll: false,
                descExpanded: false,
                isBottomSheetVisible: false,
                sheetStep: 0,
                value_radio: '1',
                isLoading: false,
                condition: false,
            }
        },

        components: {
            CardSchedule,
            TicketItem
        },

        methods: {
            handleScroll() {
                if (window.scrollY > 40) {
                    this.isScroll = true;
                } else {
                    this.isScroll = false;
                }
            },
            toggleExpand() {
                this.descExpanded = !this.descExpanded;
            },
            showBottomSheet() {
                this.isBottomSheetVisible = true;
            },
            closeBottomSheet() {
                this.isBottomSheetVisible = false;
            },
            handleOrder(stepCount) {
                this.sheetStep = this.sheetStep += stepCount;
            },
            handleOrderTicket() {
                this.isLoading = true;
                if (this.condition == true) {
                    setTimeout(() => this.sheetStep = 3, 3000);
                 } else {
                    setTimeout(() => this.sheetStep = 4, 3000);
                 }
            },
            handleOrderTicketTry() {
                this.sheetStep = 0;
            }
        },

        watch: {
            isBottomSheetVisible: function(value) {
                var className = 'bottom-sheet--is-open';
                if (value) {
                    document.body.classList.add(className);
                } else {
                    document.body.classList.remove(className);
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
