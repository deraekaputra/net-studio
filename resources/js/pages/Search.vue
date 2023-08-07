<template>
    <div>
        <nav class="nav-bar">
            <div class="nav-bar__wrapper">
                <div class="nav-item--odd">
                    <div class="nav-item__search">
                        <form>
                            <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.2092565.0011761C4.6379855-.029705 3.1145904.548607 1.9591877 1.6135006.8039288 2.6793285.10589 4.1494293.0112655 5.7168373c-.0955696 1.567408.4197539 3.1113396 1.4382209 4.3071978 1.0184671 1.1968405 2.4604778 1.9538581 4.0241213 2.1138808 1.5646989.1590788 3.1304051-.2919696 4.3690391-1.2585977l4.0054122 3.9770911c.286704.2142891.6877249.1862157.9407046-.0673748.2539152-.2526586.2820267-.6531705.0674605-.9395105l-3.9821459-4.000328c.9294552-1.1687646 1.3941828-2.6379791 1.305171-4.1275317-.088074-1.4897443-.7242555-2.8943029-1.7848898-3.9452304C9.2814717.6674502 7.7812951.0311204 6.2092565.0011761zM9.362976 9.3699783c-.8732322.876819-2.0603444 1.3690086-3.2980669 1.3690086-1.2377225 0-2.4247387-.4922136-3.2980668-1.3690086-.8816752-.8637154-1.3754498-2.0474522-1.3670067-3.2816632 0-1.6684523.8910297-3.2105154 2.3386292-4.0453643 1.4475995-.834849 3.2297069-.8347053 4.6772584 0 1.4475515.8347052 2.3386292 2.3768402 2.3386292 4.0453643-.0009369 1.2370857-.5022176 2.4207027-1.3913764 3.2816632z" fill="#A5A5A5" fill-rule="nonzero"/>
                            </svg>
                            <input type="search" placeholder="Cari Acara" value="ini talkshow">
                        </form>
                    </div>
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
        <header class="search-header">
            <h6 class="search-header__title">Hasil pencarian</h6>
            <h4 class="search-header__keyword">"ini talkshow"</h4>
        </header>
        <div class="shows">
            <div class="shows__content">
                <a class="show-block" href="/show">
                    <img class="show-block__image" src="http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg" alt="ini talkshow"/>
                    <div class="show-block__meta">
                        <h6 class="show-block__title">Ini Talkshow</h6>
                        <div class="show-block__date-time">
                            <span class="date">Kamis, 30 Mei 2019</span>
                            <span class="time">19:00</span>
                        </div>
                    </div>
                </a>
                <a class="show-block" href="/show">
                    <img class="show-block__image" src="http://cdn.netmedia.co.id/ott/image/2016/07/21/5745722c06451.jpg" alt="ini talkshow"/>
                    <div class="show-block__meta">
                        <h6 class="show-block__title">Ini Talkshow</h6>
                        <div class="show-block__date-time">
                            <span class="date">Jum'at, 31 Mei 2019</span>
                            <span class="time">20:00</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
</script>

<style lang="scss" scoped>
    .nav-item__search {
        form {
            height: 100%;
        }
    }

    .search-header {
        position: relative;
        width: 100%;
        padding-top: 24px;
        padding-right: 20px;
        padding-left: 20px;
        margin-top: 45px;

        &__title {
            margin: 0;
            text-align: center;
            color: var(--white);
        }

        &__keyword {
            margin: 0;
            margin-top: 8px;
            font-weight: bold;
            text-align: center;
            color: var(--white);
        }
    }

    .shows__content {
        margin-bottom: 74px;
        padding-right: 20px;
        padding-left: 20px;
    }
</style>
