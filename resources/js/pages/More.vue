<template>
    <div>
        <nav class="nav-bar">
            <div class="nav-bar__wrapper">
                <div class="nav-item">
                    <h5 class="nav-item__title">More</h5>
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
        <header class="profile" v-if="isLoggedIn">
            <div class="profile__wrapper">
                <div class="profile__picture">
                    <div class="pict-image">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/61fDgbpVHBL._SY679_.jpg" alt="profile picture"/>
                    </div>
                </div>
                <h6 class="profile__title">Alphonse Elric</h6>
                <a class="profile__button" href="/edit-profile"><svg width="10" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M.527 6.336a.512.512 0 0 0-.148.29L.007 9.264a.639.639 0 0 0 .628.735.538.538 0 0 0 .08 0l2.674-.333a.512.512 0 0 0 .303-.154l5.622-5.645A2.253 2.253 0 0 0 9.345.658 2.235 2.235 0 0 0 7.74 0C7.14.006 6.566.255 6.15.69L.527 6.335zm2.566 2.32l-2.001.255.28-1.97 4.7-4.721L7.79 3.944 3.093 8.656zM8.596 3.14l-.077.077-1.724-1.723.077-.077A1.21 1.21 0 0 1 8.2 1.145c.457.19.754.637.752 1.133 0 .323-.128.633-.356.862z" fill="#FFF" fill-rule="nonzero"/></svg> Edit Profil</a>
            </div>
        </header>
        <header class="profile" v-else>
            <div class="profile__wrapper">
                <div class="profile__picture">
                    <div class="pict-image">
                        <img src="../../../public/profile_placeholder.png" alt="profile picture"/>
                    </div>
                </div>
                <h6 class="profile__title">Daftar sekarang untuk mendapatkan akses studio acara NET. favoritmu.</h6>
                <a class="profile__button profile__button--filled" href="/signup">Daftar</a>
            </div>
        </header>
        <div class="button-stack">
            <a class="button-stack__button" href="/kebijakanPrivasi">
                <span>Kebijakan Privasi</span>
                <svg width="9" height="16"><path d="M.38 2.393a1.498 1.498 0 0 1 0-1.995 1.346 1.346 0 0 1 1.911 0L8.62 7.006c.508.561.508 1.434 0 1.996l-6.328 6.577c-.537.561-1.373.561-1.91 0-.508-.53-.508-1.434 0-1.964l5.402-5.611L.381 2.393z" fill="#FFF" fill-rule="evenodd"/></svg>
            </a>
            <a class="button-stack__button" href="/syaratKetentuan">
                <span>Syarat dan Ketentuan</span>
                <svg width="9" height="16"><path d="M.38 2.393a1.498 1.498 0 0 1 0-1.995 1.346 1.346 0 0 1 1.911 0L8.62 7.006c.508.561.508 1.434 0 1.996l-6.328 6.577c-.537.561-1.373.561-1.91 0-.508-.53-.508-1.434 0-1.964l5.402-5.611L.381 2.393z" fill="#FFF" fill-rule="evenodd"/></svg>
            </a>
        </div>
        <div class="button-stack" v-show="isLoggedIn === true">
            <a class="button-stack__button button-stack__button--red" href="/">
                <span>Keluar</span>
                <svg width="9" height="16"><path d="M.38 2.393a1.498 1.498 0 0 1 0-1.995 1.346 1.346 0 0 1 1.911 0L8.62 7.006c.508.561.508 1.434 0 1.996l-6.328 6.577c-.537.561-1.373.561-1.91 0-.508-.53-.508-1.434 0-1.964l5.402-5.611L.381 2.393z" fill="#FFF" fill-rule="evenodd"/></svg>
            </a>
        </div>
        <footer class="copyright">
            <small>&copy; 2019 PT. NETMEDIATAMA TELEVISI INDONESIA</small>
        </footer>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isLoggedIn: true
            }
        }
    }
</script>

<style lang="scss" scoped>
    .copyright {
        position: relative;
        margin-top: 32px;
        padding-right: 20px;
        padding-left: 20px;

        small {
            display: block;
            font-size: 0.687rem;
            font-weight: 100;
            text-align: center;
            color: #9F9F9F;
        }
    }
</style>
