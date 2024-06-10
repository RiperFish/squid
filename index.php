<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <title>Squidsociety</title>
    <link rel="stylesheet" href="style.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="poppins-regular bg-gray-100">
    <header class="animate__animated animate__slideInDown ">
        <div class="container">
            <div class="header_content">
                <div class="flex-between icons_container">
                    <a style="height: 42px;" href="/"><img src="img/logo.svg" alt="Squidsociety" srcset=""></a>
                    <div class="hamburger_menu flex pointer">
                        <img src="img/icon_ham_menu.svg" srcset="" height="42" width="42">
                    </div>
                    <div class="close_menu flex-centered fe- pointer">
                        <img src="img/icon_close.svg" srcset="" height="24" width="24">
                    </div>

                </div>
                <nav class="menu">
                    <ul>
                        <li><a href="#our_approach">Our Approach</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#our_team">Team</a></li>
                    </ul>
                    <a href="#contact_us" class="btn">
                        Grow with Us
                        <img src="img/arrow_right.svg" alt="">
                    </a>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div id="section_hero">
                <div class="hero_content">
                    <div class="content_top animate__animated animate__fadeIn animate__slow">
                        <h1 class="headline"> <!-- animate__delay-2s -->
                            Empowering your projects in <span class="colored-accent">Technology, AI and
                                E-Commerce</span>
                        </h1>
                        <p class="subheadline">
                            At SquidSociety, we are passionate about the future of technology, AI, and e-commerce. We
                            specialize in developing companies in these dynamic sectors, enabling them to unlock their
                            potential and driving growth and value creation in an ever-changing environment.
                        </p>
                        <a href="#mission" id="icon_arrow" class="z-999"> <img src="img/icon_arrow_scroll.svg"></a>
                    </div>
                    <div class="services">
                        <div class="service animate__animated animate__bounceInUp animate__slow ">
                            <!-- <img src="img/icon_tech.svg" alt="" class="service_icon"> -->
                            <svg class="service_icon" width="114" height="115" viewBox="0 0 114 115" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M31.0488 29.4982V15.4377L55.6342 25.3594V40.5224C55.6342 40.8879 55.7781 41.2384 56.0342 41.4968C56.2904 41.7553 56.6378 41.9005 57 41.9005C57.3623 41.9005 57.7097 41.7553 57.9658 41.4968C58.222 41.2384 58.3659 40.8879 58.3659 40.5224V25.3594L82.9512 15.4377V29.4982C82.9512 29.8637 83.0951 30.2142 83.3513 30.4727C83.6074 30.7311 83.9548 30.8763 84.317 30.8763C84.6793 30.8763 85.0267 30.7311 85.2829 30.4727C85.539 30.2142 85.6829 29.8637 85.6829 29.4982V13.4035C85.6833 13.1281 85.6016 12.8589 85.4484 12.6309C85.2953 12.403 85.0777 12.2267 84.824 12.125L57.5069 1.10098C57.1822 0.966339 56.8178 0.966339 56.4931 1.10098L29.176 12.125C28.9223 12.2267 28.7048 12.4029 28.5516 12.6309C28.3984 12.8589 28.3167 13.1281 28.3171 13.4035V29.4982C28.3171 29.8637 28.461 30.2142 28.7172 30.4727C28.9733 30.7311 29.3207 30.8763 29.6829 30.8763C30.0452 30.8763 30.3926 30.7311 30.6487 30.4727C30.9049 30.2142 31.0488 29.8637 31.0488 29.4982ZM33.36 13.4046L57 3.86237L80.6398 13.4044L57 22.9446L33.36 13.4046ZM82.9512 96.5258V100.663L58.3659 110.586V85.5018C58.3659 85.1363 58.222 84.7858 57.9658 84.5273C57.7097 84.2689 57.3623 84.1237 57 84.1237C56.6378 84.1237 56.2904 84.2689 56.0342 84.5273C55.7781 84.7858 55.6342 85.1363 55.6342 85.5018V110.586L31.0488 100.663V96.5258C31.0488 96.1603 30.9049 95.8098 30.6487 95.5513C30.3926 95.2929 30.0452 95.1477 29.6829 95.1477C29.3207 95.1477 28.9733 95.2929 28.7172 95.5513C28.461 95.8098 28.3171 96.1603 28.3171 96.5258V101.596C28.3167 101.872 28.3984 102.141 28.5516 102.369C28.7048 102.597 28.9224 102.773 29.1761 102.875L56.4931 113.899C56.8178 114.034 57.1822 114.034 57.5069 113.899L84.824 102.875C85.0777 102.773 85.2953 102.597 85.4484 102.369C85.6016 102.141 85.6833 101.872 85.6829 101.596V96.5258C85.6829 96.1603 85.539 95.8098 85.2829 95.5513C85.0267 95.2929 84.6793 95.1477 84.317 95.1477C83.9548 95.1477 83.6074 95.2929 83.3513 95.5513C83.0951 95.8098 82.9512 96.1603 82.9512 96.5258ZM1 46.4758V79.5482C0.99962 79.8236 1.08131 80.0928 1.23449 80.3208C1.38766 80.5488 1.60525 80.7251 1.85898 80.8267L29.176 91.8495C29.5008 91.9841 29.8651 91.9841 30.1898 91.8495L57 81.0312L83.8102 91.8495C84.135 91.9841 84.4992 91.9841 84.824 91.8495L112.141 80.8267C112.395 80.7251 112.612 80.5488 112.765 80.3208C112.919 80.0928 113 79.8236 113 79.5482V46.4758C113 46.2004 112.919 45.9312 112.765 45.7033C112.612 45.4753 112.395 45.2991 112.141 45.1975L84.824 34.1733C84.4992 34.0388 84.135 34.0388 83.8102 34.1733L57 44.9929L30.1898 34.1733C29.865 34.0388 29.5008 34.0388 29.176 34.1733L1.85898 45.1975C1.60527 45.2991 1.38771 45.4753 1.23453 45.7033C1.08136 45.9312 0.999642 46.2004 1 46.4758ZM85.6829 58.4318L110.268 48.5102V78.613L85.6829 88.5368V58.4318ZM60.6772 46.4768L84.3171 36.9347L107.957 46.4768L84.3171 56.017L60.6772 46.4768ZM58.3659 48.51L82.9512 58.4318V88.5368L58.3659 78.613V48.51ZM31.0488 58.4318L55.6342 48.51V78.613L31.0488 88.5368V58.4318ZM6.04306 46.4768L29.6829 36.9347L53.3229 46.4769L29.6829 56.017L6.04306 46.4768ZM3.73171 48.51L28.3171 58.4318V88.5368L3.73171 78.613V48.51Z"
                                    fill="white" stroke="#171717" stroke-width="2" />
                            </svg>

                            <h3 class="service_title">
                                Technology
                            </h3>
                            <p class="service_desc">
                                Our projects revolutionize technological standards by introducing innovative solutions
                                and cutting-edge technologies
                            </p>
                        </div>
                        <div class="service animate__animated animate__bounceInUp animate__slow ">
                            <!--  <img src="img/icon_ai.svg" alt="" class="service_icon"> -->
                            <svg class="service_icon" width="114" height="114" viewBox="0 0 114 114" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.8536 10.5292C22.8535 10.7086 22.8888 10.8862 22.9574 11.052C23.026 11.2178 23.1266 11.3684 23.2535 11.4952C23.3803 11.6221 23.5309 11.7227 23.6967 11.7913C23.8624 11.8599 24.0401 11.8952 24.2195 11.8951H34.1913L40.8552 30.1713C40.9135 30.342 41.0057 30.499 41.1262 30.6332C41.2467 30.7673 41.393 30.8757 41.5564 30.9519C41.7199 31.0281 41.897 31.0706 42.0772 31.0767C42.2574 31.0828 42.437 31.0525 42.6052 30.9876C42.7738 30.9265 42.9288 30.8327 43.0612 30.7117C43.1936 30.5906 43.3007 30.4446 43.3765 30.282C43.4524 30.1195 43.4953 29.9436 43.503 29.7643C43.5108 29.5851 43.483 29.4062 43.4214 29.2377L36.4294 10.0623C36.3338 9.79877 36.1593 9.57112 35.9298 9.41028C35.7002 9.24944 35.4266 9.16324 35.1463 9.16337H24.2195C24.0401 9.16327 23.8624 9.19852 23.6967 9.26713C23.5309 9.33573 23.3803 9.43633 23.2535 9.56318C23.1266 9.69003 23.026 9.84063 22.9574 10.0064C22.8888 10.1721 22.8535 10.3498 22.8536 10.5292ZM91.1471 10.5292C91.1472 10.3498 91.1119 10.1721 91.0433 10.0064C90.9747 9.8406 90.8741 9.69001 90.7472 9.56316C90.6204 9.43631 90.4697 9.3357 90.304 9.2671C90.1382 9.1985 89.9606 9.16326 89.7812 9.16337H78.8544C78.5741 9.16326 78.3005 9.24947 78.0709 9.4103C77.8413 9.57114 77.6669 9.79878 77.5712 10.0623L70.5792 29.2377C70.5176 29.4062 70.4899 29.5851 70.4976 29.7643C70.5053 29.9436 70.5483 30.1195 70.6242 30.2821C70.7 30.4446 70.8072 30.5906 70.9396 30.7117C71.0719 30.8327 71.2269 30.9265 71.3955 30.9876C71.5637 31.0525 71.7433 31.0828 71.9235 31.0767C72.1037 31.0706 72.2809 31.0281 72.4443 30.9519C72.6077 30.8757 72.754 30.7673 72.8745 30.6332C72.995 30.499 73.0872 30.342 73.1456 30.1713L79.8094 11.8951H89.7812C89.9606 11.8952 90.1383 11.8599 90.304 11.7913C90.4698 11.7227 90.6204 11.6221 90.7473 11.4952C90.8741 11.3684 90.9747 11.2178 91.0433 11.052C91.1119 10.8863 91.1472 10.7086 91.1471 10.5292ZM43.4214 84.7305C43.483 84.562 43.5107 84.3831 43.503 84.2039C43.4953 84.0246 43.4524 83.8487 43.3765 83.6861C43.3007 83.5236 43.1936 83.3776 43.0612 83.2565C42.9288 83.1354 42.7739 83.0416 42.6052 82.9806C42.437 82.9156 42.2574 82.8853 42.0772 82.8915C41.897 82.8976 41.7199 82.94 41.5564 83.0163C41.393 83.0925 41.2467 83.2009 41.1262 83.335C41.0057 83.4692 40.9135 83.6262 40.8552 83.7969L34.1913 102.073H24.2195C23.8572 102.073 23.5098 102.217 23.2537 102.473C22.9975 102.729 22.8536 103.077 22.8536 103.439C22.8536 103.801 22.9975 104.149 23.2537 104.405C23.5098 104.661 23.8572 104.805 24.2195 104.805H35.1463C35.4266 104.805 35.7002 104.719 35.9298 104.558C36.1594 104.397 36.3338 104.169 36.4294 103.906L43.4214 84.7305ZM113 10.561C113 8.66998 112.439 6.82147 111.389 5.24917C110.338 3.67688 108.845 2.45142 107.098 1.72778C105.351 1.00414 103.428 0.814804 101.574 1.18372C99.719 1.55264 98.0154 2.46324 96.6783 3.80038C95.3412 5.13751 94.4306 6.84112 94.0617 8.69577C93.6928 10.5504 93.8821 12.4728 94.6058 14.2199C95.3294 15.9669 96.5549 17.4601 98.1272 18.5107C99.6995 19.5612 101.548 20.122 103.439 20.122C105.974 20.1189 108.404 19.1106 110.196 17.3182C111.989 15.5258 112.997 13.0957 113 10.561ZM110.268 10.561C110.268 11.9117 109.868 13.232 109.117 14.3551C108.367 15.4782 107.3 16.3535 106.052 16.8704C104.805 17.3873 103.431 17.5226 102.107 17.259C100.782 16.9955 99.5651 16.3451 98.61 15.39C97.6549 14.4349 97.0044 13.2181 96.7409 11.8933C96.4774 10.5685 96.6126 9.19541 97.1295 7.94752C97.6464 6.69964 98.5218 5.63306 99.6449 4.88265C100.768 4.13224 102.088 3.73172 103.439 3.73173C105.25 3.7334 106.986 4.45345 108.266 5.73381C109.547 7.01418 110.267 8.75025 110.268 10.561ZM1 10.561C0.999994 12.4519 1.56071 14.3005 2.61128 15.8728C3.66185 17.4451 5.15508 18.6705 6.90212 19.3942C8.64916 20.1178 10.5716 20.3072 12.4262 19.9382C14.2809 19.5693 15.9845 18.6587 17.3216 17.3216C18.6587 15.9845 19.5693 14.2809 19.9382 12.4262C20.3072 10.5716 20.1178 8.64918 19.3941 6.90214C18.6705 5.1551 17.445 3.66189 15.8727 2.61132C14.3004 1.56075 12.4519 1.00001 10.5609 1.00002C8.02617 1.00311 5.59611 2.01142 3.80375 3.80377C2.0114 5.59613 1.00309 8.02619 1 10.561ZM3.73171 10.561C3.73172 9.21026 4.13222 7.88988 4.88263 6.76682C5.63305 5.64375 6.69964 4.76845 7.94753 4.25157C9.19542 3.73469 10.5686 3.59945 11.8933 3.86296C13.2181 4.12648 14.4349 4.7769 15.39 5.73199C16.3451 6.68709 16.9955 7.90396 17.259 9.22871C17.5225 10.5535 17.3873 11.9266 16.8704 13.1745C16.3535 14.4224 15.4781 15.4889 14.3551 16.2393C13.232 16.9897 11.9116 17.3903 10.5609 17.3903C8.75022 17.3886 7.01412 16.6685 5.73375 15.3882C4.45338 14.1078 3.73336 12.3717 3.73171 10.561ZM113 103.439C113 101.548 112.439 99.6996 111.389 98.1273C110.338 96.5549 108.845 95.3295 107.098 94.6058C105.351 93.8822 103.428 93.6928 101.574 94.0617C99.7191 94.4306 98.0154 95.3412 96.6783 96.6784C95.3412 98.0155 94.4306 99.7191 94.0617 101.574C93.6928 103.428 93.8821 105.351 94.6058 107.098C95.3294 108.845 96.5549 110.338 98.1272 111.389C99.6995 112.439 101.548 113 103.439 113C105.974 112.997 108.404 111.989 110.196 110.196C111.989 108.404 112.997 105.974 113 103.439ZM110.268 103.439C110.268 104.79 109.868 106.11 109.117 107.233C108.367 108.356 107.3 109.232 106.052 109.748C104.804 110.265 103.431 110.401 102.107 110.137C100.782 109.874 99.565 109.223 98.6099 108.268C97.6548 107.313 97.0044 106.096 96.7409 104.771C96.4774 103.447 96.6126 102.073 97.1295 100.826C97.6464 99.5777 98.5218 98.5111 99.6449 97.7607C100.768 97.0103 102.088 96.6098 103.439 96.6098C105.25 96.6114 106.986 97.3315 108.266 98.6119C109.547 99.8923 110.267 101.628 110.268 103.439ZM1 103.439C1.00001 105.33 1.56075 107.179 2.61133 108.751C3.66191 110.323 5.15512 111.549 6.90216 112.272C8.64921 112.996 10.5716 113.185 12.4263 112.816C14.2809 112.447 15.9845 111.537 17.3216 110.2C18.6588 108.862 19.5693 107.159 19.9382 105.304C20.3072 103.45 20.1178 101.527 19.3941 99.7801C18.6705 98.0331 17.445 96.5399 15.8727 95.4893C14.3004 94.4388 12.4519 93.878 10.5609 93.878C8.02616 93.8811 5.59607 94.8895 3.80371 96.6818C2.01135 98.4742 1.00306 100.904 1 103.439ZM3.73171 103.439C3.7317 102.088 4.13223 100.768 4.88263 99.6449C5.63304 98.5218 6.6996 97.6465 7.94748 97.1296C9.19537 96.6127 10.5685 96.4775 11.8933 96.741C13.218 97.0045 14.4349 97.6549 15.39 98.61C16.3451 99.5651 16.9955 100.782 17.259 102.107C17.5225 103.431 17.3873 104.805 16.8704 106.052C16.3535 107.3 15.4781 108.367 14.3551 109.117C13.232 109.868 11.9116 110.268 10.5609 110.268C8.75023 110.267 7.01416 109.547 5.7338 108.266C4.45343 106.986 3.73339 105.25 3.73171 103.439ZM91.1471 103.439C91.1472 103.26 91.1119 103.082 91.0433 102.916C90.9747 102.75 90.8741 102.6 90.7473 102.473C90.6204 102.346 90.4698 102.246 90.304 102.177C90.1383 102.108 89.9606 102.073 89.7812 102.073H79.8094L73.1456 83.7969C73.0872 83.6263 72.995 83.4692 72.8745 83.335C72.754 83.2009 72.6077 83.0925 72.4443 83.0163C72.2809 82.9401 72.1037 82.8976 71.9235 82.8915C71.7433 82.8853 71.5637 82.9156 71.3955 82.9806C71.2269 83.0416 71.0719 83.1354 70.9395 83.2565C70.8072 83.3776 70.7 83.5236 70.6242 83.6861C70.5483 83.8487 70.5053 84.0246 70.4976 84.2038C70.4899 84.3831 70.5176 84.562 70.5792 84.7305L77.5712 103.906C77.6668 104.169 77.8413 104.397 78.0709 104.558C78.3005 104.719 78.574 104.805 78.8544 104.805H89.7812C89.9606 104.805 90.1382 104.77 90.304 104.701C90.4697 104.633 90.6204 104.532 90.7472 104.405C90.8741 104.278 90.9747 104.128 91.0433 103.962C91.1119 103.796 91.1472 103.618 91.1471 103.439ZM57.5069 85.5828L84.824 74.6574C85.0777 74.5567 85.2952 74.382 85.4484 74.156C85.6015 73.93 85.6833 73.6632 85.6829 73.3902V40.6098C85.6833 40.3368 85.6015 40.07 85.4484 39.844C85.2952 39.618 85.0777 39.4433 84.824 39.3426L57.5069 28.4157C57.1821 28.2824 56.8178 28.2824 56.4931 28.4157L29.176 39.3426C28.9223 39.4433 28.7047 39.618 28.5516 39.844C28.3984 40.07 28.3167 40.3368 28.3171 40.6098V73.3902C28.3167 73.6632 28.3984 73.93 28.5516 74.156C28.7047 74.382 28.9223 74.5567 29.176 74.6574L56.4931 85.5828C56.8178 85.7162 57.1821 85.7162 57.5069 85.5828ZM31.0488 42.626L55.6342 52.4601V82.2994L31.0488 72.4645V42.626ZM80.64 40.6108L57 50.0667L33.36 40.6108L57 31.1528L80.64 40.6108ZM58.3658 52.4601L82.9511 42.626V72.4645L58.3658 82.2994V52.4601Z"
                                    fill="white" stroke="#171717" stroke-width="2" />
                            </svg>

                            <h3 class="service_title">
                                AI
                            </h3>
                            <p class="service_desc">
                                We create intelligent systems that help companies automate processes and make strategic
                                decisions based on data.
                            </p>
                        </div>
                        <div class="service animate__animated animate__bounceInUp animate__slow ">
                            <!-- <img src="img/icon_ecom.svg" alt="" class="service_icon"> -->
                            <svg class="service_icon" width="114" height="114" viewBox="0 0 114 114" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M113 46.0732V13.2926C113 13.0193 112.919 12.7522 112.766 12.5258C112.613 12.2994 112.395 12.1242 112.141 12.0229L84.824 1.09605C84.4982 0.967982 84.136 0.967982 83.8102 1.09605L56.4931 12.0229C56.2393 12.1242 56.0217 12.2994 55.8685 12.5258C55.7154 12.7522 55.6338 13.0193 55.6342 13.2926V29.6829C55.6342 30.0451 55.7781 30.3926 56.0343 30.6487C56.2904 30.9048 56.6378 31.0488 57.0001 31.0488C57.3623 31.0488 57.7097 30.9048 57.9659 30.6487C58.222 30.3926 58.3659 30.0451 58.3659 29.6829V15.3116L82.9512 25.1457V54.9812L58.3659 45.1502V40.6097C58.3659 40.2475 58.222 39.9001 57.9659 39.6439C57.7097 39.3878 57.3623 39.2439 57.0001 39.2439C56.6378 39.2439 56.2904 39.3878 56.0343 39.6439C55.7781 39.9001 55.6342 40.2475 55.6342 40.6097V46.0732C55.6338 46.3465 55.7154 46.6136 55.8685 46.84C56.0217 47.0664 56.2393 47.2416 56.4931 47.343L83.8102 58.2698C84.136 58.3979 84.4982 58.3979 84.824 58.2698L112.141 47.343C112.395 47.2416 112.613 47.0665 112.766 46.8401C112.919 46.6137 113 46.3465 113 46.0732ZM107.956 13.2913L84.3171 22.7469L60.6778 13.2913L84.3171 3.83845L107.956 13.2913ZM110.268 45.1502L85.683 54.9812V25.1457L110.268 15.3116V45.1502ZM1 67.9269V100.707C0.999574 100.981 1.08123 101.248 1.23438 101.474C1.38753 101.701 1.60512 101.876 1.85898 101.977L29.1761 112.904C29.5018 113.032 29.864 113.032 30.1898 112.904L57.507 101.977C57.7608 101.876 57.9784 101.701 58.1316 101.474C58.2847 101.248 58.3663 100.981 58.3659 100.707V67.9269C58.3663 67.6535 58.2847 67.3864 58.1315 67.16C57.9784 66.9336 57.7608 66.7584 57.507 66.657L35.6532 57.9176C35.3167 57.7842 34.9409 57.7897 34.6084 57.933C34.2759 58.0763 34.0138 58.3456 33.8796 58.6819C33.7454 59.0181 33.75 59.3939 33.8925 59.7267C34.0349 60.0596 34.3036 60.3224 34.6395 60.4574L53.322 67.9255L29.6829 77.381L6.0439 67.9255L24.7264 60.4574C25.0623 60.3224 25.331 60.0596 25.4735 59.7267C25.6159 59.3939 25.6205 59.0181 25.4863 58.6819C25.3521 58.3456 25.09 58.0763 24.7575 57.933C24.425 57.7897 24.0492 57.7842 23.7126 57.9176L1.85898 66.657C1.60512 66.7584 1.38752 66.9336 1.23438 67.16C1.08123 67.3864 0.999583 67.6535 1 67.9269ZM31.0488 79.7799L55.6342 69.9458V99.7844L31.0488 109.615V79.7799ZM3.73171 69.9458L28.3171 79.7799V109.615L3.73171 99.7844V69.9458ZM31.0488 67.9269V36.5122H70.6585C71.0208 36.5122 71.3682 36.3683 71.6244 36.1122C71.8805 35.856 72.0244 35.5086 72.0244 35.1464C72.0244 34.7841 71.8805 34.4367 71.6244 34.1805C71.3682 33.9244 71.0208 33.7805 70.6585 33.7805H29.6829C29.3208 33.7807 28.9735 33.9247 28.7174 34.1808C28.4613 34.4369 28.3173 34.7842 28.3171 35.1463V67.9269C28.3171 68.2891 28.461 68.6365 28.7172 68.8927C28.9733 69.1488 29.3207 69.2927 29.6829 69.2927C30.0452 69.2927 30.3926 69.1488 30.6488 68.8927C30.9049 68.6365 31.0488 68.2891 31.0488 67.9269Z"
                                    fill="white" stroke="#171717" stroke-width="2" />
                            </svg>

                            <h3 class="service_title">
                                E-Commerce
                            </h3>
                            <p class="service_desc">
                                Helps businesses create an effective online presence and optimize their sales operations
                                to succeed in the digital age.
                            </p>
                        </div>
                    </div>
                    <img src="img/hero_illustr.svg" alt="" id="illustration"
                        class="animate__animated animate__fadeIn animate__slow animate__delay-1s">

                </div>
            </div>

            <section id="mission" class="relative">
                <div>
                    <h2 class="section-title m-b-8">We are transforming the future of business by leading the way in
                        technology, AI and e-commerce
                    </h2>
                    <p class="text-xl color-l-gray m-b-8">
                        With a seasoned team of experts in the complex fields of technology, artificial intelligence,
                        and e-commerce, we offer you a wealth of knowledge, experience, and resources.
                    </p>
                    <a href="#contact_us" class="btn relative z-5 desktop">
                        Grow with Us
                        <img src="img/arrow_right.svg" alt="">
                    </a>
                </div>
                <div class="what_we_do">
                    <h3 class="text-3xl color-dark line-height-m m-b-6">We buy majority stakes in businesses that have
                        these characteristics:</h3>
                    <ul>
                        <li class="flex-centered text-xl color-dark" style="gap:8px;">
                            <img src="img/icon_task.svg" alt="">
                            <span>Great margins</span>
                        </li>
                        <li class="flex-centered text-xl color-dark" style="gap:8px;">
                            <img src="img/icon_task.svg" alt="">
                            <span>High cash flow (from $1M to $10M)</span>
                        </li>
                        <li class="flex-centered text-xl color-dark" style="gap:8px;">
                            <img src="img/icon_task.svg" alt="">
                            <span>A defensible moat - product, brand, community</span>
                        </li>
                        <li class="flex-centered text-xl color-dark" style="gap:8px;">
                            <img src="img/icon_task.svg" alt="">
                            <span>Easy to understand in 1 sentence</span>
                        </li>
                        <li class="flex-centered text-xl color-dark" style="gap:8px;">
                            <img src="img/icon_task.svg" alt="">
                            <span>Track record or success for 3+ year</span>
                        </li>
                        <li class="flex-centered text-xl color-dark" style="gap:8px;">
                            <img src="img/icon_task.svg" alt="">
                            <span>Strong growth</span>
                        </li>
                    </ul>
                </div>
                <a href="#contact_us" class="btn relative z-5 hidden">
                    Grow with Us
                    <img src="img/arrow_right.svg" alt="">
                </a>
                <img src="img/vec.svg" alt="" class="texture">
            </section>
        </div>
        <section class="bg-dark" id="our_approach">
            <div class="container">
                <div class="grid-cols-2">
                    <div>
                        <img src="img/approach.svg" class="m-b-8">
                        <h2 class="section-title m-b-8 color-white">Our approach is rooted in a few key principles
                        </h2>
                        <a href="#contact_us" class="btn desktop">
                            Grow with Us
                            <img src="img/arrow_right.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <div class="keys_container">
                            <div class="key_container ">
                                <div class="key text-xl color-white">
                                    <span>Visionary Leadership</span>
                                    <img class="accordion_open" src="img/plus.svg" alt="">
                                    <img class="accordion_close" src="img/minus.svg" alt="">
                                </div>
                                <div class="value_container">
                                    <div class="value_content">
                                        <p class="color-white-opacity">
                                            We believe in the power of visionary leadership. We work alongside founders
                                            and
                                            entrepreneurs who are driven by a bold vision. With our support, they can
                                            turn
                                            their dreams into reality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="key_container ">
                                <div class="key text-xl  color-white">
                                    <span>Strategic Expertise</span>
                                    <img class="accordion_open" src="img/plus.svg" alt="">
                                    <img class="accordion_close" src="img/minus.svg" alt="">
                                </div>
                                <div class="value_container">
                                    <div class="value_content">
                                        <p class="color-white-opacity">
                                            We believe in the power of visionary leadership. We work alongside founders
                                            and
                                            entrepreneurs who are driven by a bold vision. With our support, they can
                                            turn
                                            their dreams into reality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="key_container ">
                                <div class="key text-xl color-white">
                                    <span>Innovation and Transformation</span>
                                    <img class="accordion_open" src="img/plus.svg" alt="">
                                    <img class="accordion_close" src="img/minus.svg" alt="">
                                </div>
                                <div class="value_container">
                                    <div class="value_content">
                                        <p class="color-white-opacity">
                                            We believe in the power of visionary leadership. We work alongside founders
                                            and
                                            entrepreneurs who are driven by a bold vision. With our support, they can
                                            turn
                                            their dreams into reality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="key_container ">
                                <div class="key text-xl color-white">
                                    <span>Long-term Partnership</span>
                                    <img class="accordion_open" src="img/plus.svg" alt="">
                                    <img class="accordion_close" src="img/minus.svg" alt="">
                                </div>
                                <div class="value_container">
                                    <div class="value_content">
                                        <p class="color-white-opacity">
                                            We believe in the power of visionary leadership. We work alongside founders
                                            and
                                            entrepreneurs who are driven by a bold vision. With our support, they can
                                            turn
                                            their dreams into reality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="key_container ">
                                <div class="key text-xl color-white">
                                    <span>Commitment to Excellence</span>
                                    <img class="accordion_open" src="img/plus.svg" alt="">
                                    <img class="accordion_close" src="img/minus.svg" alt="">
                                </div>
                                <div class="value_container">
                                    <div class="value_content">
                                        <p class="color-white-opacity">
                                            We believe in the power of visionary leadership. We work alongside founders
                                            and
                                            entrepreneurs who are driven by a bold vision. With our support, they can
                                            turn
                                            their dreams into reality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#contact_us" class="btn hidden">
                        Grow with Us
                        <img src="img/arrow_right.svg" alt="">
                    </a>
                </div>
            </div>
        </section>

        <section class="bg-gray-100 z-999" id="portfolio">
            <div class="container">
                <div class="grid-cols-2 m-b-23">
                    <h2 class="section-title">Driving Success Stories in
                        Tech, AI, and Ecommerce
                    </h2>
                    <p class="text-xl color-l-gray">
                        Our portfolio is a testament to our commitment to innovation and growth. We have had the
                        privilege of partnering with exceptional companies, helping them achieve their goals and
                        milestones.
                    </p>
                </div>
                <div class="projects grid-cols-3">
                    <div class="project flex flex-column text-center">
                        <img src="img/amazon_logo.svg" alt="Amazon" class="m-b-5 m-inline-auto" width="200">
                        <a href="#" class="m-b display-inline-b colored-accent text-3xl text-underline">Zellix</a>
                        <span class="text-xl color-dark display-inline-b">Buy anything on Amazon with Bitcoin</span>
                    </div>
                    <div class="project flex flex-column text-center">
                        <img src="img/icon_money.svg" alt="Money" class="m-b-5 m-inline-auto" width="200">
                        <a href="#" class="m-b display-inline-b colored-accent text-3xl text-underline">Morning
                            Download</a>
                        <span class="text-xl color-dark display-inline-b">Personal finance newsletter ready by 50,000
                            daily</span>
                    </div>
                    <div class="project flex flex-column text-center">
                        <img src="img/chatenger_logo.svg" alt="Chatenger" class="m-b-5 m-inline-auto" width="200">
                        <a href="#" class="m-b display-inline-b colored-accent text-3xl text-underline">Chatenger AI
                            Companion</a>
                        <span class="text-xl color-dark display-inline-b">Have a fun, entertaining conversation with one
                            of our chatbots</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark" id="our_team">
            <div class="container relative">
                <div class="grid-cols-2 m-b-23">
                    <h2 class="section-title color-white">Meet Our Team
                    </h2>
                    <p class="text-xl color-white-opacity">
                        Onward and upward, productize the deliverables and focus on the bottom line drop-dead date
                        translating our vision of having a market leading platfrom drop-dead date.
                    </p>
                </div>
                <div class="team grid-cols-3 gap-6">
                    <div class="team_member">
                        <div class="pic_container m-b-3 ">
                            <img src="img/member.png" alt="" class="radius-2" width="402">
                        </div>
                        <div class="m-b-2 flex-centered gap-2">
                            <h3 class="member_name text-3xl color-white">Simon</h3>
                            <span class="member_position text-xl color-white-opacity text-light">CEO</span>
                        </div>
                        <p class="color-white-opacity m-b-3">
                            We believe in the power of visionary leadership. We work alongside founders and
                            entrepreneurs who are driven by a bold vision. With our support, they can turn their dreams
                            into reality.
                        </p>
                        <div class="socials flex gap-3 p-t-3">
                            <a href="#"><img src="img/icon_facebook.svg" alt=""></a>
                            <a href="#"><img src="img/icon_x.svg" alt=""></a>
                            <a href="#"><img src="img/icon_linkedin.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="team_member">
                        <div class="pic_container m-b-3 ">
                            <img src="img/member.png" alt="" class="radius-2" width="402">
                        </div>
                        <div class="m-b-2 flex-centered gap-2">
                            <h3 class="member_name text-3xl color-white">Trajan</h3>
                            <span class="member_position text-xl color-white-opacity text-light">CFO</span>
                        </div>
                        <p class="color-white-opacity m-b-3">
                            As the financial architect of SquidSociety, Trajan brings a wealth of expertise in financial
                            strategy and stewardship, with a keen eye for fiscal responsibility and a deep understanding
                            of the intricacies of private equity.
                        </p>
                        <div class="socials flex gap-3 p-t-3">
                            <a href="#"><img src="img/icon_facebook.svg" alt=""></a>
                            <a href="#"><img src="img/icon_x.svg" alt=""></a>
                            <a href="#"><img src="img/icon_linkedin.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="team_member">
                        <div class="pic_container m-b-3 ">
                            <img src="img/member.png" alt="" class="radius-2" width="402">
                        </div>
                        <div class="m-b-2 flex-centered gap-2">
                            <h3 class="member_name text-3xl color-white">Dylan</h3>
                            <span class="member_position text-xl color-white-opacity text-light">CTO</span>
                        </div>
                        <p class="color-white-opacity m-b-3">
                            With over two decades in software engineering and experience spanning the entire development
                            process, Dylan knows intuitively how to achieve any technical goal SquidSociety is aiming
                            for. </p>
                        <div class="socials flex gap-3 p-t-3">
                            <a href="#"><img src="img/icon_facebook.svg" alt=""></a>
                            <a href="#"><img src="img/icon_x.svg" alt=""></a>
                            <a href="#"><img src="img/icon_linkedin.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <img src="img/team_vec.svg" alt="" class="texture">
                <img src="img/team_vec.svg" alt="" class="bottom_texture">
            </div>

        </section>
    </main>
    <footer class="p-block-23 relative z-999"><!-- -->
        <div class="container">
            <div class="grid-cols-2 m-b-8">
                <div>
                    <h2>Squidsociety</h2>
                    <div class="flex flex-column gap-2 "><!-- color-white -->
                        <span>25 W 27rd St. New York, NY 10015</span>
                        <span>+1 (222) 555 47 100</span>
                    </div>
                </div>
                <div>
                    <ul class="flex flex-column gap-4">
                        <li><a class="text-3xl " href="#our_approach">Our Approach</a></li>
                        <li><a class="text-3xl " href="#portfolio">Portfolio</a></li>
                        <li><a class="text-3xl " href="#our_team">Team</a></li>
                    </ul>
                </div>
            </div>
            <div class="separator m-b-8"></div>
            <div class="grid-cols-2 m-b-8 ">
                <div class="copyright">
                    © 2023
                </div>
                <div class="socials flex gap-3 p-t-3">
                    <a href="#">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="black"
                                stroke-opacity="0.3" />
                            <path
                                d="M29 15.5001C29 15.3674 28.9473 15.2403 28.8536 15.1465C28.7598 15.0527 28.6326 15.0001 28.5 15.0001H26C24.7411 14.9373 23.5086 15.3754 22.5717 16.2186C21.6348 17.0618 21.0698 18.2415 21 19.5001V22.2001H18.5C18.3674 22.2001 18.2402 22.2527 18.1464 22.3465C18.0527 22.4403 18 22.5674 18 22.7001V25.3001C18 25.4327 18.0527 25.5598 18.1464 25.6536C18.2402 25.7474 18.3674 25.8001 18.5 25.8001H21V32.5001C21 32.6327 21.0527 32.7598 21.1464 32.8536C21.2402 32.9474 21.3674 33.0001 21.5 33.0001H24.5C24.6326 33.0001 24.7598 32.9474 24.8536 32.8536C24.9473 32.7598 25 32.6327 25 32.5001V25.8001H27.62C27.7312 25.8017 27.8397 25.7661 27.9285 25.6991C28.0172 25.6321 28.0811 25.5374 28.11 25.4301L28.83 22.8301C28.8499 22.7562 28.8526 22.6787 28.8378 22.6036C28.8231 22.5286 28.7913 22.4579 28.7449 22.397C28.6985 22.3362 28.6388 22.2868 28.5704 22.2526C28.5019 22.2185 28.4265 22.2005 28.35 22.2001H25V19.5001C25.0249 19.2525 25.1411 19.0232 25.326 18.8567C25.5109 18.6903 25.7512 18.5988 26 18.6001H28.5C28.6326 18.6001 28.7598 18.5474 28.8536 18.4536C28.9473 18.3598 29 18.2327 29 18.1001V15.5001Z"
                                fill="black" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="black"
                                stroke-opacity="0.3" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M33.5859 33.375L26.0885 22.4471L26.1013 22.4574L32.8613 14.625H30.6023L25.0954 21L20.7223 14.625H14.7977L21.7972 24.8276L21.7964 24.8267L14.4141 33.375H16.6731L22.7955 26.2824L27.6613 33.375H33.5859ZM19.8272 16.3295L30.3466 31.6705H28.5564L18.0285 16.3295H19.8272Z"
                                fill="black" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="black"
                                stroke-opacity="0.3" />
                            <path
                                d="M18.94 17C18.9397 17.5305 18.7288 18.0391 18.3535 18.4139C17.9782 18.7888 17.4694 18.9993 16.939 18.999C16.4086 18.9988 15.9 18.7878 15.5251 18.4125C15.1502 18.0373 14.9397 17.5285 14.94 16.998C14.9403 16.4676 15.1512 15.959 15.5265 15.5841C15.9018 15.2092 16.4106 14.9988 16.941 14.999C17.4714 14.9993 17.98 15.2103 18.3549 15.5855C18.7298 15.9608 18.9403 16.4696 18.94 17ZM19 20.48H15V33H19V20.48ZM25.32 20.48H21.34V33H25.28V26.43C25.28 22.77 30.05 22.43 30.05 26.43V33H34V25.07C34 18.9 26.94 19.13 25.28 22.16L25.32 20.48Z"
                                fill="black" />
                        </svg>

                    </a>
                </div>
            </div>
        </div>

    </footer>
    <script>
        window.addEventListener('load', function () {
            const hamburgerMenuBtn = document.querySelector('.hamburger_menu')
            const menu = document.querySelector('.menu')
            const header = document.querySelector('header')
            const closeMenu = document.querySelector('.close_menu')

            hamburgerMenuBtn.addEventListener('click', () => {
                menu.classList.add('open')
                header.classList.add('open')
                closeMenu.style.display = "flex"
                hamburgerMenuBtn.style.display = "none"
            })

            closeMenu.addEventListener('click', () => {
                menu.classList.remove('open')
                header.classList.remove('open')
                closeMenu.style.display = "none"
                hamburgerMenuBtn.style.display = "flex"
            })
            /* -------------------------------------- */
            /* -------------------------------------- */
            const key = document.querySelectorAll(".key");
            let firstkey = document.querySelector(".key");
            if (typeof (firstkey) != 'undefined' && firstkey != null) {

                let firstvalue_content = firstkey.nextElementSibling;
                firstkey.classList.add('active')
                firstvalue_content.style.maxHeight = firstvalue_content.scrollHeight + "px";
                firstkey.style.paddingBottom = "0";
                firstkey.parentElement.style.paddingBottom = "20px"
                key.forEach(key => {
                    key.addEventListener("click", event => {
                        const active = document.querySelector(".key.active");
                        if (active && active !== key) {
                            active.classList.toggle("active");
                            active.nextElementSibling.style.maxHeight = 0;
                        }
                        key.classList.toggle("active");
                        const value_content = key.nextElementSibling;
                        if (key.classList.contains("active")) {
                            value_content.style.maxHeight = value_content.scrollHeight + "px";
                            key.style.paddingBottom = "0";
                            key.parentElement.style.paddingBottom = "20px"
                        } else {
                            value_content.style.maxHeight = 0;
                            /* key.style.paddingBottom = "20px"; */
                            /* key.parentElement.style.paddingBottom = "0" */
                        }
                    })
                })
            }

            window.addEventListener("scroll", (event) => {
                let scroll = this.scrollY;
                if (scroll > 10) {
                    document.querySelector("header").classList.add("shadow");
                } else {
                    document.querySelector("header").classList.remove("shadow");
                }
            });
        })
    </script>

</body>

</html>