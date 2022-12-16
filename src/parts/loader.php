<style id="loader_style">
    :root {
        --ani-time: 4s;
    }

    @keyframes looking_back {
        0% {
            transform: translate(0%);
        }

        10% {
            transform: translate(-2%);
        }

        30% {
            transform: translate(7%);
        }

        50% {
            transform: translate(0);
        }

        100% {
            transform: translate(0);
        }
    }

    @keyframes lb_eyes {
        0% {
            transform: translate(0%, 0);
        }

        4% {
            transform: translateY(0);
        }

        10% {
            transform: translate(-2%, -0.5%);
        }

        20% {
            transform: translateY(0.5%);
        }

        30% {
            transform: translate(3%, -1%);
        }

        50% {
            transform: translate(0, 0);
        }

        67% {
            clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }

        70% {
            clip-path: polygon(0% 50%, 100% 50%, 100% 50%, 0% 50%);
        }

        73% {
            clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%);
        }

        100% {
            transform: translate(0, 0);
        }
    }

    @keyframes lb_nose {
        0% {
            transform: translate(0%, 0);
        }

        8% {
            transform: translate(-1%, 0);
        }

        19% {
            transform: translateY(0.5%);
        }

        30% {
            transform: translate(1.5%, -0.5%);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(0, 0);
        }
    }

    @keyframes lb_inner_tail {
        0% {
            transform: scale(1, 1);
        }

        8% {
            transform: scale(1.03, 1);
        }

        30% {
            transform: scale(0.87, 1);
        }

        50% {
            transform: scale(1, 1);
        }

        100% {
            transform: scale(1, 1);
        }
    }

    @keyframes loading {
        0% {
            transform: translate(0) scale(1);
        }

        50% {
            transform: translate(0, -3rem) scale(1.2);
        }

        70% {
            transform: translate(0, 0.5rem) scale(1);
        }

        82% {
            transform: translate(0) scale(1);
        }

        100% {
            transform: translate(0) scale(1);
        }
    }

    body {
        overflow: hidden;
    }

    .loader_wrapper {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 132580612856129578;
        width: 100%;
        height: 100vh;
        background-color: var(--bg-main);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 500ms;
    }

    .loader_content {
        max-width: 30%;
    }

    svg {
        width: 100%;
        max-height: 100%;
    }

    #face {
        animation: var(--ani-time) ease-in-out infinite looking_back;
    }

    #eyes {
        animation: var(--ani-time) ease-in-out infinite lb_eyes;
    }


    #nose {
        animation: var(--ani-time) ease-in-out infinite lb_nose;
    }

    #inner_tail {
        transform-origin: center right;
        animation: var(--ani-time) ease-in-out infinite lb_inner_tail;
    }

    .loading_anim_wrapper {
        margin-top: 1rem;
        height: 5rem;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .loading_anim,
    .loading_anim_wrapper::before,
    .loading_anim_wrapper::after {
        content: "";
        display: block;
        min-width: 1rem;
        min-height: 1rem;
        margin: 0 1rem;
        border-radius: 50%;
        background-color: var(--txt-secondary);
    }

    .loading_anim_wrapper::before {
        animation: 2s ease-in-out infinite loading;
    }

    .loading_anim {
        animation: 2s ease-in-out 0.3s infinite loading;
    }

    .loading_anim_wrapper::after {
        animation: 2s ease-in-out 0.6s infinite loading;
    }

    .loader_txt {
        font-family: 'K2D';
        color: var(--txt-secondary);
        text-align: center;
        font-size: 1.5rem;
        font-weight: 600;
    }
</style>
<div class="loader_wrapper">
    <div class="loader_content">
        <div class="loader_icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #ecc3ff;
                        }
                    </style>
                </defs>
                <g id="logo">
                    <polygon class="cls-1" id="tail" points="300 299.99 226.31 270.68 271.11 222.98 300 299.99" />
                    <path class="cls-1" id="inner_tail" d="M278.81,197a150.44,150.44,0,0,1-90,84.93c-.16-2-.23-4-.23-6v-.94a79.55,79.55,0,0,1,79.63-78.69c1.33,0,2.7,0,4,.09Q275.56,196.5,278.81,197Z" />
                    <path class="cls-1" d="M150,0A150.08,150.08,0,1,0,300,150,150,150,0,0,0,150,0Zm88.39,238.39a124.34,124.34,0,1,1,22.31-30.22A124.67,124.67,0,0,1,238.39,238.39Z" />
                    <g id="face">
                        <g id="teeth">
                            <rect class="cls-1" x="72.03" y="229.62" width="18.66" height="45.62" />
                            <rect class="cls-1" x="105.12" y="229.62" width="18.66" height="54.75" />
                            <rect class="cls-1" x="138.21" y="229.62" width="18.66" height="60.14" />
                        </g>
                        <polygon class="cls-1" id="nose" points="114.54 186.49 94.84 205.98 133.82 205.98 114.54 186.49" />
                        <g id="eyes">
                            <circle class="cls-1" cx="67.47" cy="149.99" r="36.91" />
                            <circle class="cls-1" cx="165.35" cy="149.99" r="36.91" />
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="loading_anim_wrapper">
            <div class="loading_anim"></div>
        </div>
        <p class="loader_txt">Loading...</p>
    </div>
</div>

<script src="/assets/js/loader.js"></script>