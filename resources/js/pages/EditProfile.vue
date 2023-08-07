<template>
    <div>
         <nav class="nav-bar">
            <div class="nav-bar__wrapper">
                <div class="nav-item">
                    <a class="nav-item__logo" href="/">
                        <svg width="9" height="17">
                            <path d="M8.6192921 2.5425063c.5076105-.5958554.5076105-1.5235511 0-2.1200534-.5369755-.5632705-1.3730002-.5632705-1.9105587 0l-6.3280255 7.0219c-.5076105.5958553-.5076105 1.523551 0 2.1200533l6.3280255 6.9887023c.5369755.5958553 1.3730002.5958553 1.9105587 0 .5076105-.5632706.5076105-1.5235511 0-2.0868557L3.216552 8.5042944l5.4027401-5.9617881z" fill="#FFF" fill-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <div class="nav-item">
                    <h6 class="nav-item__title">Edit Profil</h6>
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
        <form class="edit-profile" action="/">
            <header class="profile">
                <div class="profile__wrapper">
                    <div class="profile__picture">
                        <div class="pict-image">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/61fDgbpVHBL._SY679_.jpg" alt="profile picture"/>
                        </div>
                    </div>
                    <button class="profile__button" type="button">
                        <svg width="10" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M.527 6.336a.512.512 0 0 0-.148.29L.007 9.264a.639.639 0 0 0 .628.735.538.538 0 0 0 .08 0l2.674-.333a.512.512 0 0 0 .303-.154l5.622-5.645A2.253 2.253 0 0 0 9.345.658 2.235 2.235 0 0 0 7.74 0C7.14.006 6.566.255 6.15.69L.527 6.335zm2.566 2.32l-2.001.255.28-1.97 4.7-4.721L7.79 3.944 3.093 8.656zM8.596 3.14l-.077.077-1.724-1.723.077-.077A1.21 1.21 0 0 1 8.2 1.145c.457.19.754.637.752 1.133 0 .323-.128.633-.356.862z" fill="#FFF" fill-rule="nonzero"/></svg>
                        Ganti Foto Profil
                        <input class="input-file" type="file" accept="image/*"/>
                    </button>
                </div>
            </header>
            <div class="edit-profile__meta">
                <div class="form-input">
                    <div class="form-input__wrapper">
                        <input class="form-input__field" type="text" placeholder="Nama lengkap" value="Alphonse Elric">
                        <span class="form-input__placeholder">Nama lengkap</span>
                    </div>
                </div>
                <div class="form-input">
                    <div class="form-input__wrapper">
                        <input class="form-input__field" type="tel" placeholder="0812-XXXX-XXXX" value="081210006969" @keypress="restrictChars">
                        <span class="form-input__placeholder">Nomor seluler</span>
                    </div>
                </div>
                <div class="form-input">
                    <div class="form-input__wrapper">
                        <input class="form-input__field" type="email" placeholder="Alamat email">
                        <span class="form-input__placeholder">Alamat email</span>
                    </div>
                </div>
                <button class="edit-profile__submit" type="submit">Simpan</button>
                <a class="action__submit action__submit--failed" style="color:#fff; text-align-center; margin-top: 16px;" @click="handleEditProfile">
                    Show Alert
                </a>
            </div>
        </form>
        <div class="alert" v-show="alertBox">
            <div class="alert__inner">
                <div class="alert-box">
                    <svg width="61px" height="64px" viewBox="0 0 61 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="More" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"> <g id="3-More-(Edit-Profile)----success" transform="translate(-158.000000, -321.000000)"> <g id="alert-box"> <g id="alert-box-/-content" transform="translate(20.000000, 258.000000)"> <g id="alert-content" transform="translate(85.000000, 60.000000)"> <g id="Group" transform="translate(50.000000, 0.000000)"> <g id="feather-check-circle"> <g id="Icon" transform="translate(3.000000, 4.000000)"> <g id="Icon-Group" transform="translate(0.500000, 0.750000)"> <circle id="Oval" fill="#F3F3F3" cx="29.5" cy="33.25" r="29"></circle> <path d="M57,25.72 L57,28.25 C56.9930365,40.4288861 48.9763084,51.1525857 37.2972191,54.6057277 C25.6181299,58.0588696 13.0588323,53.4188584 6.43012649,43.2019324 C-0.198579283,32.9850065 0.682374475,19.6250072 8.59525404,10.3669484 C16.5081336,1.10888961 29.5679598,-1.84180547 40.6925,3.115" id="Icon-Path" stroke="#383838" stroke-width="4"></path> <polyline id="Icon-Path" stroke="#6DD400" stroke-width="6" points="57 6.25 29.5 33.7775 21.25 25.5275"></polyline> </g> </g> </g> </g> </g> </g> </g> </g> </g></svg>
                    <h4>Edit Profil Berhasil</h4>
                    <p>Iya apa tidak? hayo?</p>
                    <div class="">
                        <button class="confirmation-button--primary" type="button" @click="showBottomSheet('confirmation')">Konfirmasi</button>
                        <button class="confirmation-button--primary" type="button" @click="handleCancel">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                condition: true,
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
            handleEditProfile() {
                if (this.alertBox == false) {
                    this.alertBox = true,
                    setTimeout(() => this.alertBox = false, 3000);
                }
            }
        },

        
    }
</script>

<style lang="scss" scoped>
    .edit-profile {
        &__meta {
            position: relative;
            margin-top: 16px;
            padding-right: 20px;
            padding-left: 20px;
        }

        &__submit {
            display: block;
            position: relative;
            width: 100%;
            padding: 10px;
            margin-top: 40px;
            background-color: var(--white);
            border: none;
            border-radius: 4px;
            outline: none;
            font-size: 0.812rem;
            font-weight: bold;
            color: #0D0D0D;
        }
    }

    .profile {
        background-color: transparent;

        &__button {
            margin-top: 24px;
            .input-file {
                position: absolute;
                top: 0;
                right: 0;
                width: 100%;
                height: 100%;
                opacity: 0;
            }
        }
    }
</style>
