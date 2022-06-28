<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&family=Quantico:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}" />
    @if(Route::current()->getName() == 'index')
        <title> BIG BURGER</title>
    @else
    <title>BigBurger | {{ Request::segment(1) }}</title>
    @endif
</head>
@include('layouts.auth-master')
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
       
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav menu">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="#" class="no-border nav-item nav-link">Blog</a>
                <a href="/" class="navbar-brand logo">
                    <span class="logo-container">
                    <svg width="117" height="143" viewBox="0 0 117 143" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M45.1685 10.198C45.1685 10.928 45.0137 11.282 44.3942 11.9678C42.9562 13.5607 39.881 14.5784 33.7748 15.5297C26.9386 16.5696 22.713 17.6536 19.7263 19.0917C14.9697 21.3704 11.0981 25.3526 8.62023 30.5296C7.82378 32.2552 7.75741 32.4986 7.97865 33.2065C8.11139 33.649 8.50962 34.3349 8.88572 34.7331C9.2397 35.1313 9.54943 35.5738 9.54943 35.6844C9.54943 35.8171 8.92997 35.8835 8.11139 35.8393C6.7176 35.795 6.65123 35.8171 5.76628 36.6578C3.59817 38.7375 2.49198 41.3259 2.31499 44.6445L2.18225 46.879L3.26631 47.0338C4.46099 47.1887 5.58929 47.8524 6.07601 48.7152C6.253 49.025 6.47424 49.8657 6.56274 50.5957C6.73972 52.1665 7.49193 55.2417 7.84591 55.9054C8.00077 56.193 8.08927 58.4939 8.11139 62.985C8.13352 69.9982 8.28838 71.5468 9.57155 76.5689C12.4698 87.8962 20.1245 98.7147 29.7926 105.131C30.766 105.772 31.8058 106.458 32.1156 106.657C34.0403 107.962 39.6597 110.484 42.6685 111.414C48.7525 113.294 50.987 113.626 57.779 113.626C63.7524 113.648 65.0577 113.493 70.0798 112.321C75.1682 111.104 81.5619 108.272 85.7654 105.374C91.0751 101.724 95.8538 96.9669 99.283 91.967C102.447 87.3653 105.345 80.8388 106.562 75.6618C106.717 74.9318 106.894 74.3123 106.938 74.2902C106.982 74.2459 107.469 73.9141 108.022 73.538C109.084 72.83 110.278 71.1929 110.544 70.1309C110.632 69.777 110.787 69.5778 110.898 69.6442C111.274 69.8654 113.309 69.0469 113.752 68.4717C114.836 67.0779 114.792 65.1531 113.619 63.7814L113.044 63.0956L113.486 62.3876C113.73 61.9894 113.951 61.3478 113.973 60.9939C114.084 59.3346 113.973 59.047 112.978 58.0735C112.424 57.5426 111.849 57.1222 111.672 57.1222C111.163 57.1222 110.832 56.547 111.186 56.2594C111.628 55.8833 112.048 54.1355 111.916 53.2506C111.827 52.7417 111.539 52.255 111.097 51.901C110.721 51.5692 110.256 51.0161 110.057 50.6179C109.88 50.2418 109.482 49.6665 109.194 49.3568L108.663 48.8037L109.128 47.8524C110.079 45.8613 110.035 43.9808 109.017 42.6312C107.911 41.1711 105.743 41.1268 104.172 42.5206L103.464 43.1401L102.248 40.795C95.7432 28.3172 84.3938 19.2908 70.6107 15.6182C68.5753 15.0873 68.155 14.8882 67.1152 13.9811C65.8099 12.8307 63.0002 11.3484 61.0312 10.7953C57.7126 9.84399 55.0578 9.51213 50.1021 9.40151L45.1685 9.29089V10.198ZM63.1108 18.4279C63.9736 19.0474 64.6373 20.3748 64.6373 21.5253C64.6373 22.2996 64.5046 22.5872 63.7745 23.2951C62.6905 24.3792 62.3365 24.4235 62.7789 23.3836C63.2214 22.3217 63.1772 20.6182 62.6462 19.2908C62.0267 17.72 62.0489 17.6757 63.1108 18.4279ZM74.9248 20.0651C82.6902 23.1403 89.3716 28.0075 94.637 34.4455C96.5175 36.7242 100.035 42.2994 100.035 42.9631C100.035 43.0737 99.5706 43.2286 98.9954 43.2949C98.398 43.3834 97.491 43.5825 96.96 43.7595L95.9866 44.0693L95.0795 43.2286C93.8406 42.0781 90.0795 40.3304 90.0795 40.9056C90.0795 41.0162 90.3229 42.0339 90.6326 43.1843C91.3185 45.7949 91.3185 45.8392 90.6326 45.8392C90.0132 45.8392 88.7521 46.4144 88.7521 46.6799C88.7521 46.7683 88.4203 47.2108 87.9999 47.6312L87.2698 48.4276L86.407 47.9851C83.9734 46.7241 80.5664 48.2728 80.5664 50.6179C80.5664 51.1267 80.8318 51.6356 81.4734 52.3878C83.354 54.6444 84.4601 58.0957 84.8805 62.985C85.1681 66.4363 86.1415 69.777 87.292 71.3477C87.9999 72.299 89.6149 73.2061 91.1415 73.5158C92.3362 73.7371 92.6459 73.892 93.3096 74.6884C93.7521 75.1751 94.283 75.9716 94.5264 76.414C94.7919 76.945 95.1016 77.2548 95.3892 77.2548C96.0529 77.2548 96.5396 78.1839 96.3627 79.1131C96.1857 80.0866 96.5396 80.5733 97.4025 80.5733C98.221 80.5733 98.4202 79.8653 97.9556 78.4937C97.7564 77.9406 97.668 77.3432 97.7343 77.1884C97.8892 76.7902 98.7963 76.3698 99.4821 76.3698C99.9246 76.3698 100.057 76.5247 100.256 77.299C100.389 77.83 100.588 78.5379 100.699 78.914C100.81 79.268 101.009 80.1529 101.119 80.8388C101.318 81.9671 101.296 82.2547 100.854 83.2281C100.588 83.8255 100.301 84.3343 100.234 84.3343C100.146 84.3343 98.6635 83.56 96.9158 82.6087L93.7299 80.9052L88.0442 80.9936C84.9247 81.0379 82.2699 81.0158 82.1593 80.9273C82.0487 80.8609 82.2256 80.0645 82.5796 79.0468C83.5752 76.1928 84.1725 71.6575 83.9734 68.2947C83.8628 66.2814 83.7743 65.9717 83.1327 64.9761C82.2035 63.5381 80.9425 60.5956 80.2788 58.2284C79.5708 55.7727 79.2832 53.4276 79.1283 48.7152C78.9513 43.1401 78.2213 39.3569 76.7169 36.0163C76.0089 34.4897 76.0089 34.4233 76.2744 33.2287C76.7169 31.3703 76.6505 28.8703 76.1416 27.7641C75.6549 26.6579 74.3275 24.888 73.6638 24.4235C73.1549 24.0473 71.1859 24.0252 70.2567 24.4013C69.9249 24.5119 69.6373 24.5783 69.593 24.5341C69.5488 24.4898 69.6594 23.9589 69.8364 23.3615C70.0355 22.7421 70.1682 21.5253 70.1682 20.5076C70.1461 19.5341 70.1461 18.6713 70.1461 18.6049C70.1683 18.4279 72.8673 19.2465 74.9248 20.0651ZM59.0622 21.3925C59.4162 23.0739 58.7746 24.3571 57.1153 25.3526L56.4295 25.7509L56.8719 24.8659C57.4471 23.7376 57.8232 21.4368 57.6463 20.043L57.5135 18.9589L58.1994 19.7332C58.5755 20.1536 58.9516 20.9058 59.0622 21.3925ZM54.1065 21.304C54.4383 22.9633 54.0622 24.3128 52.9339 25.4854C52.1817 26.2818 51.9826 26.3703 51.0534 26.3703C49.8809 26.3703 48.9074 26.7907 47.9118 27.742C47.2039 28.4057 47.2039 28.4057 45.965 28.1402C43.996 27.742 41.8721 28.273 40.1243 29.6004C39.4385 30.1535 39.3057 30.1756 38.2438 29.9544C37.3367 29.7774 37.0049 29.7774 36.6067 30.0429C36.1199 30.3526 33.0005 30.7508 33.0005 30.5075C33.0005 30.419 33.7306 29.9986 34.6155 29.5561C35.4784 29.1358 36.4075 28.5827 36.673 28.3393C36.9606 28.0739 37.4474 27.919 38.0668 27.919C39.1288 27.919 40.3234 27.3659 41.3411 26.3703C42.027 25.7287 42.0933 25.7066 43.5977 25.8394C45.7659 26.0385 46.9827 25.6624 48.2437 24.4013C48.8189 23.8482 49.372 23.1845 49.5048 22.9412C49.726 22.5651 49.8366 22.5429 50.2348 22.7642C51.0977 23.2951 52.1596 23.1182 52.7791 22.366C53.0888 21.9899 53.4206 21.4589 53.487 21.1492C53.664 20.4191 53.9295 20.4854 54.1065 21.304ZM67.7789 28.8924C67.9116 30.4411 68.2656 30.9721 70.2125 32.4101C74.9912 35.9278 76.4071 39.6667 76.8053 49.8657C76.9381 53.4276 77.1151 55.3745 77.4469 56.8789C78.1991 60.308 79.4159 63.4938 80.854 65.8389L81.5619 66.9673L81.5398 70.2858C81.4734 76.1707 80.0797 80.5733 76.9823 84.4892C68.9736 94.6439 47.58 94.5997 37.3367 84.4228C35.1907 82.2768 34.9916 81.8565 34.9253 79.091C34.8589 76.6574 34.6819 75.8167 34.3058 76.3919C34.1952 76.5689 34.1067 76.945 34.1067 77.2548C34.0624 78.8034 32.8014 80.9052 31.3855 81.7016C30.6112 82.1441 30.1687 82.2326 28.5758 82.2326C27.0271 82.2326 26.4961 82.122 25.6112 81.6795C24.2174 80.9715 23.0227 79.4671 22.359 77.5866C21.8944 76.2813 21.6732 75.9716 20.4343 74.9981C18.6865 73.6265 17.8458 72.3433 17.5361 70.5513C17.2485 68.9141 17.6024 67.1 18.3768 65.9938C18.9962 65.131 20.4564 64.2903 21.6068 64.1133C23.5537 63.8257 26.2528 65.1531 28.3324 67.4097C28.9298 68.0734 29.4607 68.538 29.5492 68.4717C29.7926 68.2283 29.682 65.9053 29.3501 63.7593C28.8634 60.839 28.2439 58.87 27.0492 56.5691L26.0316 54.578V50.9276C26.0316 48.0515 26.12 46.9232 26.4519 45.6179C27.2705 42.41 28.4209 40.1312 30.3014 38.0074L31.0757 37.1446L30.5448 36.7242C29.8368 36.1711 28.2218 35.3525 27.2041 35.0207C26.7395 34.8658 26.3634 34.6667 26.3634 34.5561C26.3634 34.3127 28.9076 34.0251 30.6996 34.0472C31.4297 34.0472 33.1111 34.18 34.4164 34.3349C42.8013 35.3304 57.0932 32.7419 64.9249 28.8261C66.2745 28.1402 67.4692 27.5871 67.5355 27.6314C67.624 27.6535 67.7346 28.2287 67.7789 28.8924ZM107.292 43.8923C107.712 44.4232 107.801 45.1533 107.557 46.0383C107.336 46.9011 106.827 47.6091 106.451 47.6091C106.031 47.6091 105.124 46.3701 104.991 45.64C104.858 44.9763 104.925 44.7993 105.544 44.2463C106.296 43.5825 106.916 43.4498 107.292 43.8923ZM94.3715 45.6843C94.6813 46.1931 95.0352 47.1666 95.168 47.8303C96.1414 52.5648 97.4467 57.9629 98.3095 60.662C99.9909 66.0602 101.186 69.246 102.712 72.4982C103.531 74.2681 103.663 75.9495 103.088 77.2548L102.756 78.0291L102.181 76.2592C100.566 71.2814 98.5308 67.4097 95.3228 63.2505L93.8406 61.3257L94.0839 59.8213C94.637 56.3258 94.1945 48.4497 93.2654 45.1091C93.0441 44.3569 93.8184 44.733 94.3715 45.6843ZM100.964 45.6179C101.871 45.8834 104.15 48.2064 104.394 49.1135C104.482 49.4674 104.327 49.9542 103.995 50.5515C103.597 51.2595 103.464 51.7904 103.486 52.8524C103.509 54.4895 104.172 55.6842 105.632 56.6134C106.141 56.9452 106.606 57.2328 106.65 57.2771C106.694 57.3213 106.385 57.7196 105.942 58.162C105.013 59.0691 104.571 60.3523 104.792 61.5248C104.991 62.5646 106.318 63.8699 107.491 64.1797C108.531 64.4673 108.641 64.6664 108.818 66.5248C108.995 68.4717 108.442 70.2637 107.314 71.3256C105.832 72.7415 104.593 72.7415 103.929 71.3477C101.982 67.3655 99.5927 60.0868 98.0441 53.4718C97.7786 52.3656 97.4246 50.8391 97.2476 50.0648C96.7166 47.8524 96.7388 46.8568 97.3582 46.1931C98.0883 45.4188 99.4379 45.1976 100.964 45.6179ZM85.6548 50.0869C86.761 50.8612 87.2256 51.9674 87.4468 54.4231C87.5353 55.5957 87.8893 57.7196 88.199 59.1134C88.8406 62.0779 88.8627 62.3434 88.4203 63.1841C88.022 63.9363 88.1548 64.2018 88.8627 64.2018C89.3052 64.2018 89.438 64.3567 89.6371 65.131C89.7919 65.6619 90.1459 66.923 90.4556 67.9628C91.2078 70.4407 91.2078 70.9274 90.5663 71.0159C90.1902 71.0822 89.8141 70.8389 89.2388 70.2416C88.2654 69.2239 87.5574 67.1885 87.2256 64.5336C86.1858 56.2594 85.7212 54.6444 83.5309 51.5913C82.7124 50.463 82.7124 50.1533 83.5309 49.8214C84.3053 49.4896 84.8805 49.5781 85.6548 50.0869ZM90.2123 51.1488C91.1194 53.7594 92.0707 57.5647 92.0707 58.516C92.0707 59.0249 91.9379 59.9983 91.7831 60.6841L91.4733 61.9231L92.2255 62.7859C94.4821 65.3743 94.637 65.7283 95.8317 70.1752C96.2963 71.9451 96.4069 73.6043 96.0529 73.8256C95.7211 74.0247 94.7476 73.2725 94.3494 72.5203C93.6414 71.1486 92.3362 67.0779 91.4512 63.5381C89.9689 57.5426 89.6371 55.9275 89.6371 54.5338C89.6371 53.8037 89.4822 52.7196 89.3052 52.1223C88.8406 50.5957 88.8627 49.5559 89.3495 49.6444C89.5928 49.6887 89.9025 50.2196 90.2123 51.1488ZM107.889 51.3479C108.132 51.7462 108.663 52.4541 109.062 52.9187C109.88 53.87 109.947 54.4231 109.327 55.0868C108.597 55.8612 107.646 55.6842 106.407 54.5116C105.323 53.5161 105.389 51.6134 106.54 50.817C107.137 50.3745 107.358 50.463 107.889 51.3479ZM111.053 59.3346C112.159 60.131 112.225 60.662 111.362 61.547C110.5 62.3877 109.371 62.5868 108.11 62.1222C106.097 61.3478 106.694 59.3346 109.062 58.87C109.526 58.8036 109.947 58.7151 110.013 58.693C110.079 58.693 110.566 58.9806 111.053 59.3346ZM11.806 63.6045C12.1379 64.1133 12.9786 65.2416 13.7087 66.0823L15.014 67.631L15.1246 69.7548C15.2795 72.7194 15.9432 74.1132 18.1334 76.1707C19.3945 77.3432 19.9254 78.0291 20.3015 78.9583C21.3192 81.4361 23.0891 83.3166 25.2351 84.1352C26.1864 84.5113 26.9829 84.6219 28.5758 84.6441C30.4342 84.6662 30.8324 84.5998 31.9828 84.0467C32.6908 83.7149 33.2881 83.4494 33.3102 83.4494C33.3545 83.4494 33.8855 84.091 34.527 84.8874C35.6111 86.2591 37.6686 88.029 39.9695 89.5776L40.9871 90.2635L38.1553 91.3696C36.6067 91.967 34.4385 92.7192 33.3545 93.0289C30.8988 93.759 29.7483 94.5997 27.6023 97.2767C27.005 98.0067 26.4961 98.6483 26.4519 98.6926C26.2085 98.9802 21.8502 94.2015 19.8369 91.4139C16.0759 86.2812 13.6866 81.0379 12.1158 74.5778C11.1866 70.8389 10.4565 62.631 11.0538 62.6531C11.1423 62.6753 11.4742 63.0956 11.806 63.6045ZM112.07 65.3522C112.513 65.9717 112.513 66.7239 112.093 67.0779C111.827 67.2991 111.694 67.2991 111.451 67.1C110.986 66.7018 110.787 65.5735 111.097 65.1974C111.473 64.7549 111.672 64.777 112.07 65.3522ZM94.9025 84.2458C97.6458 85.7281 99.1502 86.5688 99.1502 86.6794C99.1502 86.7237 98.5972 87.6307 97.8892 88.6927C93.553 95.4404 88.0884 100.684 81.2743 104.666C79.9027 105.462 75.4779 107.564 75.1461 107.564C75.1018 107.564 74.8585 106.9 74.593 106.06C74.3496 105.241 74.062 104.378 73.9514 104.135C73.8408 103.892 73.5089 103.051 73.2213 102.277L72.6682 100.839L74.6151 99.8651C76.8053 98.7811 79.2389 96.7014 80.3451 94.9758L81.031 93.9139L82.646 94.0245C85.146 94.1793 88.1105 93.2502 90.4778 91.5688C90.9866 91.1926 91.3406 90.8166 91.2521 90.7281C91.1415 90.6396 90.5441 90.4626 89.8804 90.3298C88.3539 89.998 87.4911 89.467 85.5442 87.6529C84.6814 86.8564 83.5088 85.883 82.9336 85.5069C81.8717 84.7768 81.6283 84.1795 82.1814 83.6927C82.3805 83.5379 84.1504 83.4272 87.115 83.383C89.6592 83.3609 92.0264 83.3166 92.3583 83.2724C92.7565 83.2503 93.7078 83.6042 94.9025 84.2458ZM84.5265 88.8918C85.0796 89.4449 85.9645 90.2192 86.4734 90.5732C86.9822 90.9493 87.3583 91.3475 87.292 91.436C87.2256 91.5466 86.4734 91.6351 85.6327 91.6351C84.084 91.6351 82.5575 91.1927 82.5575 90.7502C82.5575 90.3962 83.2876 87.8741 83.3982 87.8741C83.4424 87.8741 83.9513 88.3387 84.5265 88.8918ZM80.7876 90.5732C80.7876 91.1705 79.1505 94.0687 78.1991 95.1528C76.8938 96.6351 74.7257 98.1837 72.7788 98.9581C71.9381 99.312 71.1417 99.5996 71.0089 99.5996C70.7213 99.5996 71.0089 98.3828 71.5178 97.343C73.0443 94.3342 75.6107 92.144 79.0841 90.8387C80.6991 90.2413 80.7876 90.2192 80.7876 90.5732ZM44.7703 92.2325C45.611 93.0068 45.1464 98.3165 44.0181 100.573C43.7747 101.082 43.0225 102.055 42.3146 102.763L41.0756 104.046L42.2924 103.914C46.6066 103.405 50.9649 101.746 53.5313 99.666L54.4604 98.8917L56.7392 100.02C59.1285 101.215 60.9869 101.724 63.7966 101.967L65.5223 102.1L66.1639 103.449C66.8497 104.909 67.6019 107.343 67.8453 108.803C67.978 109.71 67.9559 109.732 67.2479 109.976C66.8497 110.108 64.9692 110.374 63.0887 110.573C57.8011 111.126 52.049 110.772 46.9384 109.577C41.2084 108.25 34.704 105.197 29.9696 101.635L28.3767 100.44L28.7085 99.7988C29.2616 98.7147 31.828 96.1484 32.7129 95.7722C33.1775 95.5953 34.4607 95.1528 35.5447 94.8209C37.6907 94.1793 39.9473 93.3165 41.85 92.4316C43.2659 91.7679 44.1951 91.7015 44.7703 92.2325ZM71.3187 91.9891C71.4514 92.0997 68.9736 97.4979 68.5975 97.9182C68.3762 98.1616 62.425 95.1528 62.425 94.7767C62.425 94.4227 62.9781 94.2015 65.5887 93.6263C66.8055 93.3386 68.4869 92.8519 69.3497 92.4979C71.1196 91.8121 71.1417 91.8121 71.3187 91.9891ZM49.0402 93.6263C49.7702 93.9802 50.6552 94.5776 51.0313 94.9537L51.6729 95.6395L51.2525 96.436C50.3455 98.0952 48.0446 100.197 45.8986 101.347C45.4119 101.591 45.4119 101.591 45.6331 100.993C46.3411 99.2235 46.7172 97.166 46.7172 94.9979C46.7172 92.3652 46.5623 92.4537 49.0402 93.6263ZM64.2391 98.0067C66.2302 98.6041 68.4868 99.8209 68.1771 100.131C68.0665 100.241 67.0267 100.396 65.8984 100.44C63.3763 100.551 60.3453 99.9536 58.0445 98.9359C55.5224 97.7855 56.1861 97.343 60.2126 97.4979C61.894 97.5421 63.2657 97.7191 64.2391 98.0067ZM71.7169 102.83C72.093 103.626 72.6461 105.131 72.9558 106.17C73.6195 108.338 73.6859 108.206 71.4735 108.892C68.9736 109.644 68.9957 109.644 68.7966 108.184C68.7081 107.498 68.2435 105.861 67.7346 104.555C67.2479 103.25 66.9161 102.122 66.9824 102.055C67.0931 101.945 69.6594 101.48 70.6771 101.392C70.9647 101.37 71.2523 101.768 71.7169 102.83Z" fill="#E70E02"/>
<path d="M66.0753 34.7995C64.9027 35.4189 63.8408 36.4366 63.3319 37.4764C62.978 38.2065 62.8895 38.2729 62.6461 37.9853C61.6063 36.7242 60.7877 39.6667 61.6727 41.5251C61.8718 41.9454 62.1151 42.2994 62.2258 42.2994C62.3364 42.2994 62.624 41.9012 62.8673 41.4144C63.9072 39.3791 65.5443 38.3171 67.6682 38.3171C68.9956 38.3171 69.5487 38.5826 71.1195 40.0649C72.8451 41.6578 73.4203 41.879 73.9734 41.1932C74.4601 40.5959 74.4823 40.087 74.0619 40.087C73.7964 40.087 71.7168 37.4322 71.7168 37.1003C71.7168 37.0561 71.8717 36.9897 72.0487 36.9455C72.3584 36.8791 72.3584 36.8127 72.0487 36.3702C71.5177 35.6402 70.4558 35.1756 69.239 35.1534C68.3761 35.1313 68.177 35.0649 68.177 34.7331C68.177 34.18 67.1815 34.2021 66.0753 34.7995Z" fill="#E70E02"/>
<path d="M38.5313 39.357C37.7348 39.5118 37.4472 39.8437 37.934 40.1092C38.5092 40.441 38.3985 40.6622 37.4472 40.9277C36.0534 41.3702 33.8853 43.5383 33.8853 44.5339C33.8853 44.6666 34.0181 44.733 34.1951 44.6666C34.6818 44.4675 34.7924 44.7551 34.4605 45.2861C34.2835 45.5516 34.0181 46.1932 33.8632 46.702C33.642 47.4542 33.465 47.6533 32.934 47.7639C32.3588 47.8746 32.3145 47.9631 32.4252 48.5604C32.6021 49.4675 33.1331 50.2418 33.7747 50.5294C34.1729 50.7064 34.4605 50.6843 35.1021 50.3524C35.9871 49.9099 36.0756 49.7772 37.3366 47.1002C38.1552 45.3525 38.8853 44.6003 40.5224 43.7153C41.1198 43.3835 41.7613 43.295 43.2879 43.295C45.3896 43.295 46.2746 43.6047 47.9781 44.91C48.8852 45.5958 49.2834 45.441 49.4383 44.3569C49.7037 42.7861 49.04 41.3923 47.602 40.441C46.5401 39.7331 46.4958 39.7331 46.4958 40.3968C46.4958 41.0826 46.1861 41.2817 45.81 40.8392C45.6551 40.6401 45.0135 40.2419 44.4162 39.91C43.4649 39.4233 42.956 39.3348 41.1861 39.2906C40.0357 39.2685 38.841 39.2906 38.5313 39.357Z" fill="#E70E02"/>
<path d="M68.686 44.9541C67.6905 45.3524 67.2701 46.4364 67.3365 48.3833L67.4028 50.1532L68.9515 50.3744L70.5002 50.5957L69.571 51.6133C68.5312 52.7417 68.4427 53.0293 68.9736 53.7815C69.3055 54.2461 69.3055 54.2903 68.9294 54.5779C67.9338 55.2638 67.4028 55.7726 67.5356 55.9053C67.6241 55.9717 68.3099 55.8168 69.0842 55.5514C70.0798 55.2195 71.2966 55.0204 73.155 54.9319L75.8098 54.7992L75.0798 54.4009C74.4603 54.0691 74.3497 53.8921 74.4603 53.4496C74.6815 52.5868 74.1948 50.1089 73.4868 48.6488C72.7568 47.078 71.3187 45.4851 70.2568 45.0426C69.4161 44.6886 69.3497 44.6886 68.686 44.9541Z" fill="#E70E02"/>
<path d="M44.9694 49.6444C43.9295 50.1975 43.5313 51.0382 43.4428 52.8302C43.3986 53.7373 43.4207 54.7992 43.4871 55.2196L43.6198 55.9497L45.3897 56.1045C46.3631 56.193 47.1596 56.3258 47.1596 56.3921C47.1596 56.4585 46.7392 57.0337 46.2083 57.6532C44.8366 59.2682 44.8366 59.2682 45.5003 60.2195L46.0977 61.0602L45.0578 62.3213C43.9517 63.6929 43.8853 64.069 44.8809 63.3611C46.4074 62.2991 50.5666 60.662 52.5799 60.3301C54.1949 60.0868 54.4825 59.9983 54.3498 59.7771C54.2834 59.6664 53.7967 59.5116 53.2878 59.4452L52.3365 59.2903L51.9604 57.3213C51.2082 53.2948 48.7304 49.9099 46.2746 49.4896C45.8322 49.4232 45.2791 49.4896 44.9694 49.6444Z" fill="#E70E02"/>
<path d="M65.5223 61.1265C66.363 62.1221 67.071 63.0071 67.071 63.0956C67.071 63.361 66.363 63.8699 64.9692 64.6442C64.2391 65.0424 63.4648 65.5292 63.2657 65.7061C62.3807 66.4583 63.1551 68.184 64.3497 68.184C65.2347 68.184 66.6727 67.299 68.1108 65.861C68.8851 65.0867 69.5046 64.3566 69.5046 64.2239C69.5046 63.4495 65.102 59.3345 64.2391 59.3345C64.0843 59.3345 64.6595 60.1531 65.5223 61.1265Z" fill="#E70E02"/>
<path d="M21.3192 67.3876C20.5006 67.6752 20.5891 67.9628 21.474 67.9628C22.8899 67.9849 24.9032 69.5336 25.8103 71.2813C26.12 71.8787 26.1421 72.1442 25.9209 73.0734C25.5669 74.5335 25.8103 75.7282 26.6067 76.5025C27.1819 77.0556 27.4695 77.1441 28.8633 77.2105L30.4562 77.2768L29.7704 76.8565C28.443 75.9937 28.089 75.0202 28.5978 73.538C28.7748 72.9849 28.7527 72.7194 28.3766 71.9672C27.6686 70.5955 25.3899 68.2946 24.0846 67.6531C22.8457 67.0115 22.4032 66.9894 21.3192 67.3876Z" fill="#E70E02"/>
<path d="M75.6992 68.3389C75.5222 68.4052 74.9691 68.7813 74.4824 69.1796C72.0266 71.1486 68.332 72.8078 65.4338 73.2724C63.7524 73.5379 62.2701 73.6485 57.0932 73.9362C54.018 74.1131 52.6463 74.268 51.695 74.5999C50.2127 75.1087 49.9693 75.2857 49.1065 76.4583C48.5534 77.2326 48.4871 77.5202 48.4871 78.9582V80.6175L49.9915 82.1662C54.372 86.7236 60.5223 88.6041 66.4515 87.2325C71.6063 86.0157 74.7921 83.5821 76.8053 79.3343C78.3097 76.1264 78.8628 70.3742 77.7788 68.9141C77.3142 68.2946 76.4292 68.0513 75.6992 68.3389ZM67.0267 79.4671C68.9957 79.7989 71.0753 80.6839 71.9381 81.5688C72.801 82.4538 72.7125 82.6529 70.9426 83.7812C68.7744 85.1528 65.3453 86.1042 62.5135 86.1042C59.6374 86.1042 55.8542 84.9316 54.925 83.7369C54.3277 83.0068 54.3498 82.9626 55.0357 82.1219C56.7613 80.0644 62.6683 78.7591 67.0267 79.4671Z" fill="#E70E02"/>
<path d="M100.832 48.2506C100.478 48.8037 101.429 49.6223 101.893 49.1577C102.048 49.0028 102.048 48.8037 101.893 48.5382C101.606 48.0958 101.031 47.9409 100.832 48.2506Z" fill="#E70E02"/>
<path d="M100.566 52.8081C100.411 53.2063 100.854 53.8036 101.296 53.8036C101.717 53.8036 101.916 53.2063 101.584 52.8081C101.23 52.3877 100.721 52.3877 100.566 52.8081Z" fill="#E70E02"/>
<path d="M102.779 56.7903C102.69 56.9673 102.756 57.277 102.911 57.454C103.309 57.9186 104.017 57.8744 104.017 57.3876C104.017 56.5912 103.022 56.1266 102.779 56.7903Z" fill="#E70E02"/>
<path d="M101.894 61.193C101.672 61.7682 101.982 62.2549 102.513 62.1664C103.155 62.0779 103.155 61.5912 102.535 61.1708C102.093 60.8611 102.026 60.8611 101.894 61.193Z" fill="#E70E02"/>
<path d="M105.168 65.1088C105.256 65.7725 105.898 66.1708 106.274 65.7947C106.65 65.4186 106.252 64.777 105.588 64.6885C105.19 64.6221 105.101 64.7106 105.168 65.1088Z" fill="#E70E02"/>
<path d="M104.947 68.6708C104.593 69.0248 105.035 69.7327 105.566 69.7327C105.854 69.7327 106.008 69.5779 106.008 69.2903C106.008 68.7593 105.301 68.3168 104.947 68.6708Z" fill="#E70E02"/>
<path d="M69.3275 104.069C68.7302 104.666 69.3054 105.794 70.1682 105.794C70.8098 105.794 71.3629 104.843 71.0532 104.268C70.7877 103.737 69.77 103.626 69.3275 104.069Z" fill="#E70E02"/>
<path d="M116.5 46.511C110.997 33.8567 102.24 22.8863 91.1198 14.7162C79.9996 6.5463 66.9132 1.46859 53.1926 0L51.7534 13.4448C63.0984 14.6592 73.9191 18.8576 83.1141 25.613C92.309 32.3685 99.1801 40.1987 103.73 50.6621L116.5 46.511Z" fill="#E70E02"/>
<path d="M56.5261 10.9658C56.646 10.5457 56.925 9.86562 57.3637 8.92554C57.8438 9.14178 58.4887 9.31914 59.298 9.45766L59.4592 11.4532C59.4798 11.7249 59.6438 11.887 59.9508 11.9395C60.0716 11.9603 60.1805 11.9406 60.2769 11.8804C60.3734 11.8204 60.4311 11.7344 60.4502 11.6229C60.3853 10.4913 60.3179 9.59863 60.2477 8.94501C60.1747 8.25256 60.042 7.54511 59.8495 6.82269C59.6555 6.10955 59.5247 5.67058 59.457 5.5058C59.3758 5.30992 59.2606 5.19923 59.1117 5.17377C58.8234 5.12441 58.4911 5.33091 58.115 5.7933C57.7048 6.28811 57.3252 6.88393 56.9761 7.58075C56.1498 9.16317 55.6889 10.2335 55.5933 10.7917C55.552 11.0337 55.6757 11.1793 55.9639 11.2286C56.2617 11.2795 56.4491 11.1919 56.5261 10.9658ZM58.8502 6.45057C59.023 7.0643 59.1464 7.74144 59.2207 8.48198C58.6626 8.38645 58.1882 8.24785 57.798 8.06615C58.1048 7.4483 58.4555 6.90977 58.8502 6.45057Z" fill="white"/>
<path d="M72.3699 9.6911C73.2042 9.99338 73.6872 9.96258 73.819 9.59871C73.8834 9.42124 73.8053 9.26244 73.5852 9.12237L69.3835 7.75053C69.256 7.71438 69.1198 7.73026 68.9746 7.79818C68.8383 7.86931 68.751 7.95811 68.7125 8.06461C68.6288 8.29534 68.7246 8.46056 68.9996 8.56025C69.4879 8.73713 70.0372 8.91109 70.6478 9.08217C70.3728 9.67524 70.0582 10.4599 69.7047 11.4362C69.4087 12.2526 69.1149 13.105 68.8233 13.9932C68.7333 14.2417 68.8036 14.4078 69.0344 14.4915C69.1673 14.5397 69.3016 14.543 69.4372 14.5019C69.5846 14.4547 69.681 14.3693 69.7259 14.245C69.8417 13.9255 69.9273 13.6753 69.9828 13.4948L70.3312 12.4915L71.5012 9.34613L72.3699 9.6911Z" fill="white"/>
<path d="M74.6484 16.3565C74.8832 15.9881 75.3449 15.4162 76.0338 14.6405C76.4323 14.9848 76.9995 15.339 77.7356 15.7031L77.3201 17.6615C77.2621 17.9277 77.373 18.1299 77.6522 18.2679C77.7621 18.3224 77.8719 18.3345 77.9816 18.3044C78.0911 18.2744 78.171 18.2087 78.2212 18.1071C78.4823 17.0042 78.6725 16.1295 78.7922 15.483C78.9199 14.7985 78.9949 14.0828 79.0168 13.3355C79.0347 12.5965 79.0347 12.1386 79.017 11.9614C78.9951 11.7503 78.9163 11.6114 78.7809 11.5443C78.5185 11.4147 78.1413 11.5178 77.6489 11.8534C77.1144 12.2105 76.5803 12.6729 76.0467 13.241C74.8029 14.5215 74.0553 15.4155 73.8042 15.9233C73.6956 16.1432 73.7723 16.318 74.0345 16.4478C74.3053 16.5817 74.51 16.5511 74.6484 16.3565ZM78.1654 12.6932C78.1557 13.3308 78.0807 14.0151 77.9404 14.7461C77.4327 14.495 77.0177 14.2266 76.6955 13.941C77.1661 13.4366 77.6562 13.0207 78.1654 12.6932Z" fill="white"/>
<path d="M86.8461 17.2187C86.9932 16.9879 86.9627 16.7109 86.7543 16.3879C86.5512 16.0569 86.1789 15.7189 85.6375 15.3738C85.0804 15.0187 84.5285 14.8572 83.9818 14.8895C83.4322 14.9087 83.0384 15.1054 82.7999 15.4795C82.5665 15.8457 82.4873 16.1981 82.5625 16.537C82.6318 16.8499 82.7898 17.1463 83.0364 17.4266L83.4097 17.8158C83.6984 18.1005 83.9154 18.3394 84.0608 18.533C84.2192 18.7235 84.3256 18.9255 84.3796 19.1392C84.4338 19.3527 84.3924 19.5671 84.2554 19.7819C84.0829 20.0525 83.8479 20.2107 83.5504 20.256C83.2608 20.3065 82.9486 20.2253 82.6143 20.012C82.4154 19.8852 82.0395 19.4388 81.4869 18.6724C81.4493 18.6259 81.4185 18.5952 81.3946 18.5799C81.2913 18.514 81.1692 18.5034 81.0287 18.5483C80.8933 18.585 80.7902 18.6591 80.7192 18.7706C80.5619 19.0173 80.617 19.3436 80.8847 19.7492C81.1522 20.1549 81.5446 20.5226 82.0621 20.8522C82.5875 21.187 83.126 21.3343 83.6778 21.2943C84.2424 21.2511 84.7101 20.9392 85.0804 20.358C85.2375 20.1113 85.3402 19.8801 85.3882 19.6642C85.449 19.4456 85.4641 19.2817 85.4331 19.1724C85.4041 19.0421 85.3554 18.8989 85.2866 18.7434C85.2282 18.5717 85.0196 18.2932 84.6608 17.9078C84.2939 17.5173 84.0143 17.1658 83.822 16.8527C83.6108 16.5167 83.5636 16.2572 83.6802 16.074C83.7968 15.891 84.0167 15.8184 84.3395 15.8563C84.6674 15.8861 84.9468 15.9746 85.1778 16.1218C85.4245 16.2791 85.6386 16.5052 85.82 16.7999C86.0176 17.1047 86.18 17.2979 86.3074 17.3791C86.3789 17.4246 86.4669 17.4359 86.5711 17.4129C86.6886 17.3868 86.7802 17.3222 86.8461 17.2187Z" fill="white"/>
<path d="M92.2224 21.2766C92.9155 21.8303 93.383 21.9562 93.6246 21.6538C93.7425 21.5062 93.7195 21.3308 93.5556 21.1275L90.0155 18.481C89.9065 18.406 89.7722 18.3773 89.6131 18.3952C89.4611 18.4188 89.3499 18.475 89.2793 18.5635C89.1262 18.7551 89.1638 18.9425 89.3926 19.125C89.7981 19.4492 90.2627 19.7901 90.7863 20.1478C90.3357 20.6213 89.7861 21.2637 89.1381 22.075C88.5963 22.7535 88.0448 23.4668 87.4835 24.2146C87.3187 24.4212 87.3319 24.6011 87.5238 24.7542C87.6344 24.8427 87.7605 24.8889 87.9021 24.8931C88.0569 24.896 88.1755 24.8458 88.258 24.7427C88.47 24.477 88.6313 24.2677 88.7417 24.1141L89.3934 23.2757L91.5098 20.6713L92.2224 21.2766Z" fill="white"/>
<path d="M95.3197 27.4508C95.4675 27.5966 95.5784 27.7061 95.6522 27.7789C95.7328 27.8453 95.7899 27.8948 95.8233 27.928C95.9173 27.9942 96.0343 28.0234 96.1744 28.0158C96.3144 28.0083 96.4244 27.9641 96.504 27.8835C96.6631 27.7223 96.6518 27.5254 96.4699 27.2931C95.6168 26.4508 95.1062 25.9402 94.9381 25.7612C94.9779 25.7075 95.3093 25.365 95.9328 24.7334C96.1682 25.0055 96.4067 25.261 96.6485 25.4997C97.3137 26.1561 97.7799 26.5236 98.0474 26.6019C98.1812 26.6278 98.3108 26.5769 98.4369 26.4493C98.6027 26.2811 98.5947 26.0743 98.4128 25.8285L98.4027 25.8185L96.669 24.0477L96.387 23.7692C96.0779 23.4776 95.8009 23.4559 95.5556 23.7046C95.131 24.1345 94.6704 24.6214 94.1733 25.1654C94.0266 25.1663 93.91 25.2106 93.8237 25.298C93.7244 25.3986 93.695 25.5157 93.7359 25.6488L92.0848 27.3216C91.8726 27.5366 91.7237 27.7278 91.6381 27.8953C91.5523 28.0627 91.5934 28.2293 91.7614 28.395L93.7565 30.3244C94.0184 30.5831 94.2888 30.5713 94.5673 30.2891C94.7131 30.1413 94.6985 29.9612 94.5237 29.7488L92.7505 28.0583C92.7638 28.0581 92.86 27.9674 93.039 27.786L94.322 26.446L95.3197 27.4508Z" fill="white"/>
<path d="M105.487 34.3903C104.967 33.6598 104.355 33.2319 103.652 33.1069C102.954 32.9897 102.213 33.2103 101.429 33.7687C100.637 34.3326 100.105 35.0182 99.8342 35.8255C99.571 36.627 99.6692 37.3509 100.129 37.9969C100.556 38.5967 101.18 38.8879 102.003 38.8704C102.838 38.8551 103.632 38.5792 104.386 38.0427C105.139 37.5062 105.612 36.9089 105.804 36.2507C106.003 35.5872 105.898 34.9669 105.487 34.3903ZM101.028 37.4781C100.705 37.0244 100.663 36.5098 100.902 35.9339C101.139 35.3713 101.511 34.9094 102.019 34.5481C102.526 34.1868 103.002 34.0333 103.447 34.0877C103.899 34.1366 104.283 34.3841 104.601 34.8302C104.913 35.2684 104.99 35.6773 104.831 36.0567C104.686 36.4383 104.298 36.8536 103.667 37.3027C103.044 37.7461 102.435 37.9483 101.839 37.9089C101.485 37.8832 101.215 37.7394 101.028 37.4781Z" fill="white"/>
<path d="M106.814 43.0564C106.884 43.1794 106.981 43.2549 107.105 43.2821C107.229 43.3095 107.349 43.2907 107.464 43.2255C107.579 43.1604 107.656 43.0675 107.697 42.9471C107.741 42.835 107.741 42.7376 107.694 42.6555L106.787 41.0542L108.117 40.3003C108.353 40.7742 108.552 41.1547 108.715 41.4423C108.953 41.8611 109.111 42.1022 109.19 42.1657C109.237 42.2478 109.317 42.3325 109.432 42.4195C109.539 42.5323 109.695 42.5305 109.901 42.4142C110.164 42.2653 110.16 41.9527 109.89 41.4764C109.35 40.5237 109.016 39.9049 108.887 39.62C108.767 39.3514 108.675 39.1596 108.61 39.0445C108.554 38.9461 108.437 38.8824 108.258 38.8536C108.117 38.8355 108.014 38.8452 107.948 38.8824C107.661 39.0452 107.565 39.2403 107.662 39.468C107.527 39.5551 107.069 39.82 106.289 40.262L104.343 41.3649C103.768 41.6907 103.436 41.8896 103.346 41.962C103.058 42.1799 102.985 42.4162 103.13 42.6708C103.274 42.9252 103.539 42.9432 103.925 42.7246C104.519 42.3555 105.193 41.9569 105.949 41.5288L106.814 43.0564Z" fill="white"/>
<path d="M12.2031 102.666L15.8208 105.141L17.8526 116.081L28.785 114.011L32.4027 116.486L20.1995 134.323L16.5818 131.848L25.3574 119.021L14.6047 120.828L12.3933 110.151L3.61766 122.979L0 120.504L12.2031 102.666Z" fill="#E70E02"/>
<path d="M28.3952 132.083C28.5921 131.324 28.9368 130.676 29.4291 130.137C29.9213 129.598 30.5556 129.191 31.3317 128.917C32.11 128.633 33.0213 128.498 34.0653 128.512C35.1204 128.519 36.304 128.693 37.6155 129.034C38.5881 129.286 39.5911 129.623 40.6248 130.044C41.6672 130.467 42.7212 130.974 43.7869 131.565C43.8721 131.054 43.8395 130.555 43.6898 130.068C43.5422 129.573 43.2758 129.113 42.8907 128.689C42.5168 128.259 42.0261 127.874 41.4188 127.536C40.8203 127.199 40.1108 126.925 39.29 126.712C38.8438 126.596 38.3462 126.495 37.7969 126.41C37.2476 126.324 36.6737 126.261 36.0748 126.219C35.4759 126.178 34.8746 126.165 34.2708 126.18C33.6759 126.197 33.1087 126.254 32.5689 126.352L32.2089 122.787C32.8622 122.728 33.5512 122.698 34.2757 122.695C35.0091 122.695 35.7487 122.725 36.4949 122.786C37.2436 122.837 37.9841 122.92 38.7164 123.034C39.4487 123.148 40.1493 123.292 40.8186 123.466C43.7718 124.232 45.7709 125.556 46.8158 127.437C47.8607 129.318 47.9791 131.815 47.1705 134.929L45.3842 141.808L41.4228 140.78L41.8084 139.294C41.3354 139.428 40.8259 139.539 40.2794 139.626C39.742 139.715 39.167 139.765 38.5542 139.778C37.9416 139.79 37.2934 139.755 36.61 139.673C35.9332 139.602 35.229 139.472 34.4974 139.282C33.2662 138.962 32.2169 138.546 31.3494 138.036C30.491 137.527 29.8109 136.955 29.3092 136.32C28.8074 135.685 28.4782 135.009 28.3216 134.292C28.176 133.569 28.2006 132.832 28.3952 132.083ZM32.6056 133.033C32.5383 133.292 32.5403 133.559 32.6118 133.835C32.6852 134.101 32.845 134.367 33.0908 134.63C33.339 134.885 33.6755 135.13 34.1003 135.364C34.5365 135.592 35.0801 135.79 35.7314 135.959C36.4275 136.14 37.1173 136.252 37.8011 136.296C38.485 136.341 39.1345 136.333 39.7498 136.274C40.3652 136.215 40.9352 136.11 41.4597 135.961C41.9843 135.811 42.4354 135.633 42.8128 135.426L42.9935 134.73C42.4307 134.403 41.8657 134.104 41.298 133.833C40.7391 133.564 40.1958 133.328 39.6677 133.124C39.1509 132.914 38.6551 132.732 38.1803 132.58C37.7144 132.431 37.3029 132.31 36.946 132.217C36.2056 132.025 35.577 131.914 35.0609 131.885C34.5447 131.855 34.1129 131.886 33.7655 131.977C33.4204 132.059 33.1565 132.195 32.9737 132.386C32.7908 132.576 32.6682 132.792 32.6056 133.033Z" fill="#E70E02"/>
<path d="M53.0492 125.966L57.1418 125.999L57.1228 128.35C58.0316 127.684 58.9905 127.111 59.9991 126.631C61.0079 126.15 62.011 125.785 63.0086 125.535L64.1811 129.292C62.6037 129.436 61.2135 129.779 60.0106 130.323C58.8172 130.857 57.8429 131.619 57.0883 132.608L57.0095 142.315L52.9169 142.282L53.0492 125.966Z" fill="#E70E02"/>
<path d="M66.4605 134.297C66.1955 133.128 66.1601 131.993 66.3543 130.89C66.5554 129.776 66.9815 128.758 67.6324 127.836C68.2904 126.902 69.1647 126.089 70.2556 125.398C71.3554 124.704 72.6695 124.184 74.1978 123.837C74.8631 123.687 75.542 123.575 76.2345 123.503C76.9272 123.431 77.6009 123.401 78.2559 123.413C78.9179 123.415 79.5464 123.456 80.1418 123.539C80.7349 123.612 81.2615 123.724 81.721 123.875L80.5553 127.302C79.5916 127.095 78.6973 126.985 77.8723 126.974C77.0564 126.961 76.2484 127.044 75.4482 127.226C74.5312 127.434 73.7361 127.742 73.0631 128.15C72.3879 128.548 71.843 129.022 71.4284 129.569C71.0209 130.106 70.7483 130.697 70.6111 131.343C70.4808 131.977 70.4932 132.636 70.6481 133.319C70.8032 134.003 71.0861 134.605 71.4974 135.126C71.9155 135.636 72.4286 136.044 73.0368 136.351C73.652 136.646 74.3513 136.832 75.1345 136.91C75.9246 136.977 76.7692 136.908 77.6681 136.704C78.6571 136.48 79.5559 136.13 80.3648 135.653C81.1827 135.175 81.9161 134.616 82.5654 133.977L85.0946 136.566C84.6833 136.961 84.2276 137.348 83.7274 137.726C83.2249 138.095 82.6749 138.442 82.0776 138.767C81.4889 139.089 80.8553 139.379 80.1765 139.637C79.5088 139.902 78.8017 140.119 78.0555 140.288C76.5363 140.633 75.1274 140.735 73.829 140.595C72.5306 140.454 71.3808 140.115 70.3797 139.576C69.3764 139.028 68.5368 138.307 67.8612 137.411C67.1943 136.513 66.7275 135.475 66.4605 134.297Z" fill="#E70E02"/>
<path d="M84.6152 113.517C85.0574 113.309 85.4953 113.19 85.9291 113.159C86.3711 113.125 86.7904 113.182 87.1868 113.332C87.5791 113.474 87.9406 113.701 88.2711 114.015C88.6016 114.328 88.8804 114.726 89.1078 115.21C89.6213 116.303 89.7377 117.527 89.4572 118.881C89.1811 120.222 88.5118 121.616 87.4497 123.063L85.1499 121.745C85.4313 121.368 85.6689 121.017 85.8623 120.692C86.0643 120.363 86.2225 120.049 86.3368 119.751C86.4598 119.449 86.5472 119.158 86.5994 118.879C86.6561 118.587 86.6902 118.291 86.7017 117.991C86.2928 118.183 85.8941 118.299 85.5054 118.339C85.1251 118.375 84.7672 118.35 84.4311 118.263C84.0995 118.164 83.8041 118.013 83.5453 117.808C83.2909 117.592 83.0911 117.329 82.9459 117.02C82.801 116.712 82.7282 116.395 82.728 116.069C82.7322 115.731 82.8039 115.407 82.9435 115.097C83.0915 114.783 83.3048 114.489 83.5838 114.215C83.8625 113.942 84.2063 113.709 84.6152 113.517Z" fill="#E70E02"/>
<path d="M101.231 125.231C102.512 125.082 103.774 124.726 105.016 124.164C106.259 123.601 107.432 122.895 108.534 122.045C109.279 121.471 109.86 120.942 110.277 120.457C110.695 119.972 110.992 119.534 111.167 119.142C111.343 118.751 111.414 118.405 111.38 118.105C111.347 117.805 111.248 117.549 111.085 117.337C110.849 117.031 110.511 116.872 110.072 116.861C109.64 116.845 109.118 117.073 108.505 117.546C108.22 117.766 107.927 118.02 107.627 118.31C107.327 118.6 107.011 118.907 106.68 119.232C106.35 119.545 106.002 119.871 105.636 120.211C105.277 120.546 104.897 120.868 104.496 121.178C103.619 121.853 102.798 122.335 102.031 122.624C101.271 122.907 100.572 123.033 99.9314 123.003C99.2911 122.973 98.712 122.802 98.1934 122.492C97.6693 122.175 97.2073 121.757 96.8078 121.238C96.3011 120.581 95.9874 119.857 95.8662 119.066C95.7452 118.275 95.8144 117.459 96.0744 116.618C96.3286 115.77 96.7702 114.924 97.3987 114.078C98.0345 113.227 98.8489 112.419 99.8418 111.654C100.36 111.254 100.926 110.871 101.538 110.503C102.153 110.122 102.773 109.772 103.4 109.452C104.026 109.132 104.645 108.847 105.255 108.598C105.86 108.341 106.415 108.14 106.92 107.995L107.844 111.299C106.782 111.628 105.772 112.023 104.812 112.484C103.853 112.932 102.94 113.491 102.071 114.16C101.465 114.627 100.987 115.072 100.637 115.493C100.288 115.901 100.042 116.284 99.8969 116.639C99.7467 116.988 99.6854 117.309 99.7133 117.602C99.7427 117.882 99.8392 118.127 100.002 118.339C100.121 118.492 100.257 118.608 100.411 118.688C100.572 118.761 100.759 118.792 100.971 118.78C101.184 118.755 101.424 118.681 101.69 118.557C101.957 118.421 102.259 118.223 102.594 117.964C102.901 117.728 103.212 117.459 103.527 117.158C103.842 116.857 104.171 116.545 104.516 116.222C104.854 115.891 105.207 115.555 105.573 115.215C105.946 114.868 106.341 114.535 106.757 114.214C107.531 113.618 108.276 113.188 108.994 112.926C109.718 112.659 110.397 112.543 111.03 112.578C111.663 112.614 112.246 112.782 112.779 113.081C113.312 113.38 113.782 113.792 114.187 114.318C114.71 114.997 115.04 115.749 115.177 116.575C115.313 117.401 115.237 118.269 114.948 119.178C114.654 120.08 114.136 121.009 113.395 121.964C112.661 122.914 111.688 123.857 110.476 124.791C109.731 125.365 108.976 125.872 108.209 126.312C107.448 126.759 106.694 127.148 105.948 127.478C105.196 127.802 104.462 128.071 103.744 128.287C103.033 128.498 102.358 128.657 101.72 128.765L101.231 125.231Z" fill="#E70E02"/>
</svg>
                    </span>
                    <a href="#" class="nav-item nav-link">a propos</a>
                <a href="#" class="no-border nav-item nav-link">contact</a>
            </div>
        </div>
    </div>
</nav>
<div class="svg-background">
    <img src="{{asset('images/svg-border-blanc.svg')}}" style="width:50%" alt="">
    <img src="{{asset('images/svg-border-blanc.svg')}}" style="width:50%;transform: rotateY(180deg);" alt="">
</div>

@auth
    {{auth()->user()->name}}
        <a href='{{route("AdminPanel")}}' class="Connecte">
            <img src="{{asset('images/house-user-solid.svg')}}" alt="">
        </a>
        <a href='/logout' class="Logout">
            <img src="{{asset('images/door-open-solid.svg')}}" alt="">
        </a>

@endauth

