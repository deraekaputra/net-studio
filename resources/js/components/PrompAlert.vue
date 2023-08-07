<template>
    <!-- Alert -->
        <div class="alert" v-show="alertBox">
            <div class="alert__inner">
                <div class="alert-box">
                    <svg width="61px" height="64px" viewBox="0 0 61 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g id="More" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"> <g id="3-More-(Edit-Profile)----success" transform="translate(-158.000000, -321.000000)"> <g id="alert-box"> <g id="alert-box-/-content" transform="translate(20.000000, 258.000000)"> <g id="alert-content" transform="translate(85.000000, 60.000000)"> <g id="Group" transform="translate(50.000000, 0.000000)"> <g id="feather-check-circle"> <g id="Icon" transform="translate(3.000000, 4.000000)"> <g id="Icon-Group" transform="translate(0.500000, 0.750000)"> <circle id="Oval" fill="#F3F3F3" cx="29.5" cy="33.25" r="29"></circle> <path d="M57,25.72 L57,28.25 C56.9930365,40.4288861 48.9763084,51.1525857 37.2972191,54.6057277 C25.6181299,58.0588696 13.0588323,53.4188584 6.43012649,43.2019324 C-0.198579283,32.9850065 0.682374475,19.6250072 8.59525404,10.3669484 C16.5081336,1.10888961 29.5679598,-1.84180547 40.6925,3.115" id="Icon-Path" stroke="#383838" stroke-width="4"></path> <polyline id="Icon-Path" stroke="#6DD400" stroke-width="6" points="57 6.25 29.5 33.7775 21.25 25.5275"></polyline> </g> </g> </g> </g> </g> </g> </g> </g> </g></svg>
                    <h4>Edit Profil Berhasil</h4>
                    <p>Iya apa tidak? hayo?</p>
                    <div class="">
                        <button class="confirmation-button--primary" type="button" @click="showBottomSheet('confirmation')">Konfirmasi</button>
                        <button class="confirmation-button--secondary" type="button" @click="handleCancelAlert">Batal</button>
                    </div>
                </div>
            </div>
        </div>
</template>