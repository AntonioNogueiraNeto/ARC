<style>
    .header-background {
        width: 100%;
        height: 100vh;
        object-fit: contain;
        position: relative;
       margin-block-start: 50px;
    }

    .backgroundfoto {
        width: 100%;
        height: 100%;

    }

    @media screen and (max-width: 700px) {
        .header-background {
            width: 100%;
            height: auto;
            object-fit: cover;
            position: relative;
            top: 0;
            left: 0;
        }

        .why-us {
            padding: 0 0 30px 0;
            position: relative;
            z-index: 3;
            display: flex;
            justify-content: space-between;
            height: 900px;

        }


    }

    @media screen and (min-width: 900px) {
        .header-background {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            position: relative;
            top: 0;
            left: 0;
        }




    }

    @media screen and (min-width: 1100px) {}


    @media screen and (min-width: 1300px) {
        .header-background {
            width: 100%;
            height: 100vh;
            object-fit: cover;
            position: relative;
            top: 0;
            left: 0;
        }

    }
</style>

<div class="header-background" id="heroo">
    <img class="backgroundfoto" src="assets/img/hero/teste.png" alt="">
</div>