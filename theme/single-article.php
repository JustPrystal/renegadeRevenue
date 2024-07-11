<?php 
    get_header();
    global $post;
    $article_heading = get_field("article_cta_heading",'options');
    $article_description = get_field("article_cta_description",'options');
    $article_button = get_field("book_a_call_button",'options');
?>

<section class="single-article">
    <div class="breadcrumbs">
        <a href="/articles">Articles</a> <span><?php if(get_the_category()){echo " / " . (get_the_category()[0]->name);} ?></span>
    </div>
    <div class="container">
        <h2 class="heading">
            <?php echo $post->post_title?>
        </h2>
        <div class="image"><?php the_post_thumbnail(); ?></div>
        <div class="author-info">
            <div class="author-image">
                <?php echo get_avatar($post->post_author) ?>
            </div>
            <div class="text-wrap">
                <div class="author-name">
                    <span class="bold">Written by:</span> <?php echo get_author_name($post->post_author) ?>
                </div>
                <div class="creation-date">
                    <span class="bold">Created:</span> <?php echo $post->post_date?> 
                </div>
            </div>

        </div>
        <div class="description">
            <?php echo $post->post_content?>
        </div>
        <div class="article-cta-wrap">
            <div class="article-cta">
                <div class="image-wrap">
                    <div class="image">
                        <svg id="article-svg" viewBox="0 0 885 794" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                            <g id="bottom-circle">
                            <path id="article-circle-text" fill-rule="evenodd" clip-rule="evenodd" d="M499.325 186.873C495.215 185.885 491.087 184.989 486.946 184.187C486.632 185.807 486.318 187.427 486.005 189.047C489.771 189.776 493.527 190.584 497.268 191.471C496.98 192.687 496.692 193.903 496.404 195.12C492.712 194.245 489.007 193.448 485.291 192.728C484.932 194.583 484.572 196.439 484.213 198.294C488.332 199.092 492.438 199.987 496.525 200.979C496.23 202.194 495.936 203.409 495.641 204.623C490.079 203.274 484.485 202.106 478.866 201.12C480.126 193.94 481.385 186.76 482.645 179.58C488.524 180.612 494.38 181.827 500.202 183.227C499.91 184.442 499.618 185.658 499.325 186.873ZM475.739 200.591C470.587 199.751 465.416 199.063 460.232 198.527C460.981 191.276 461.73 184.025 462.479 176.774C464.165 176.948 465.85 177.137 467.534 177.341C466.807 183.337 466.081 189.333 465.354 195.329C469.025 195.773 472.689 196.294 476.343 196.89C476.142 198.124 475.94 199.358 475.739 200.591ZM450.626 189.894C448.622 189.764 446.616 189.656 444.61 189.57C444.499 192.168 444.388 194.765 444.277 197.363C442.713 197.296 441.149 197.243 439.585 197.203C439.768 189.916 439.952 182.629 440.135 175.341C443.769 175.433 447.401 175.593 451.03 175.822C456.184 176.154 458.767 178.832 458.355 183.185C457.936 187.609 454.918 190.175 450.626 189.894ZM449.726 179.499C448.168 179.406 446.61 179.327 445.052 179.26C444.958 181.448 444.864 183.636 444.771 185.824C446.293 185.889 447.815 185.967 449.337 186.057C451.942 186.214 453.224 185.264 453.389 183.048C453.556 180.807 452.399 179.66 449.726 179.499ZM425.42 197.585C418.779 197.777 414.172 193.369 413.676 186.838C413.199 180.598 417.449 175.221 424.75 175.006C432.017 174.807 436.665 179.756 436.535 186.344C436.409 192.742 431.999 197.404 425.42 197.585ZM424.892 178.843C420.829 178.959 418.312 182.142 418.557 186.542C418.81 191.128 421.493 193.855 425.312 193.746C429.1 193.641 431.655 190.766 431.65 186.293C431.646 181.737 429.022 178.729 424.892 178.843ZM392.077 178.159C397.982 177.313 403.907 176.652 409.842 176.175C409.942 177.421 410.042 178.667 410.142 179.913C405.951 180.25 401.766 180.68 397.59 181.203C397.795 182.84 398 184.477 398.205 186.114C402.004 185.638 405.81 185.241 409.621 184.922C409.725 186.168 409.83 187.413 409.934 188.659C406.174 188.973 402.419 189.365 398.671 189.835C398.906 191.71 399.141 193.585 399.376 195.461C403.53 194.94 407.694 194.517 411.863 194.191C411.96 195.437 412.058 196.683 412.155 197.93C406.483 198.373 400.821 198.999 395.178 199.807C394.145 192.591 393.111 185.375 392.077 178.159ZM383.768 193.764C381.784 194.125 379.803 194.509 377.826 194.915C378.349 197.462 378.871 200.009 379.394 202.556C377.853 202.872 376.314 203.202 374.778 203.546C373.185 196.433 371.593 189.319 370 182.205C373.57 181.406 377.151 180.676 380.741 180.015C385.842 179.082 389.002 181.053 389.659 185.375C390.326 189.769 388.016 192.991 383.768 193.764ZM384.794 186.451C384.412 184.236 383.008 183.404 380.364 183.899C378.824 184.189 377.286 184.491 375.75 184.807C376.191 186.952 376.631 189.097 377.071 191.242C378.572 190.934 380.075 190.638 381.579 190.355C384.155 189.873 385.171 188.641 384.794 186.451Z" fill="black"/>
                            <path id="article-circle-heading" fill-rule="evenodd" clip-rule="evenodd" d="M557.857 740.809C558.803 742.636 559.75 744.464 560.696 746.291C550.601 751.592 540.26 756.213 529.737 760.153C525.601 748.875 521.464 737.596 517.328 726.318C526.139 723.019 534.802 719.17 543.268 714.769C544.207 716.601 545.146 718.432 546.085 720.264C539.868 723.496 533.547 726.438 527.141 729.091C528.165 731.609 529.188 734.127 530.212 736.645C536.345 734.106 542.402 731.309 548.368 728.257C549.295 730.094 550.222 731.932 551.149 733.77C545.033 736.899 538.825 739.765 532.539 742.368C533.711 745.253 534.884 748.137 536.056 751.022C543.433 747.967 550.708 744.562 557.857 740.809ZM497.566 738.679C491.403 740.329 488.573 745.467 490.212 753.276C491.828 760.962 496.746 764.441 503.52 762.639C508.929 761.185 511.739 758.116 510.907 753.567C513.638 752.727 516.359 751.84 519.067 750.907C521.269 758.857 515.671 765.831 504.852 768.734C492.667 771.954 483.742 766.285 481.812 754.903C479.852 743.352 485.276 735.399 495.708 732.622C504.044 730.396 511.822 732.424 515.231 740.044C512.697 740.915 510.152 741.744 507.597 742.529C505.073 738.439 501.816 737.532 497.566 738.679ZM465.098 739.256C467.713 738.922 470.325 738.542 472.932 738.118C474.775 750.006 476.618 761.894 478.462 773.781C475.451 774.271 472.435 774.709 469.414 775.095C467.975 763.149 466.537 751.203 465.098 739.256ZM441.533 777.198C436.361 765.273 431.856 753.195 428.022 741.018C430.668 741.104 433.314 741.144 435.961 741.139C438.751 750.204 441.873 759.216 445.325 768.158C448.155 758.975 450.658 749.749 452.835 740.497C455.478 740.3 458.118 740.058 460.755 739.77C457.604 752.219 453.766 764.617 449.244 776.908C446.675 777.041 444.104 777.138 441.533 777.198ZM417.249 759.167C422.375 761.506 422.604 761.968 422.231 772.635C422.141 774.218 422.637 774.99 423.994 775.694C423.972 776.139 423.95 776.585 423.928 777.031C420.672 776.893 417.418 776.696 414.169 776.439C413.168 774.619 413.034 773.51 413.339 770.152C413.494 768.888 413.648 767.624 413.802 766.359C414.07 763.341 412.58 761.944 408.866 761.56C405.586 761.216 402.311 760.807 399.044 760.335C398.329 765.06 397.614 769.786 396.899 774.512C393.89 774.076 390.887 773.59 387.891 773.052C390.098 761.197 392.304 749.342 394.511 737.487C401.272 738.701 408.077 739.613 414.905 740.222C421.624 740.807 424.94 745.051 424.684 750.663C424.465 755.063 422.029 757.915 417.249 759.167ZM411.087 746.083C407.845 745.75 404.61 745.349 401.383 744.883C400.912 747.989 400.442 751.096 399.972 754.203C403.327 754.688 406.689 755.104 410.058 755.451C414.813 755.925 416.124 754.398 416.393 751.196C416.654 748.074 415.485 746.524 411.087 746.083ZM366.08 736.995C365.27 739.603 364.46 742.211 363.649 744.819C369.912 746.73 376.234 748.385 382.601 749.783C382.146 751.801 381.69 753.818 381.234 755.835C374.708 754.402 368.227 752.705 361.808 750.747C360.88 753.734 359.952 756.722 359.023 759.709C366.557 762.008 374.172 763.958 381.845 765.559C381.41 767.581 380.976 769.603 380.541 771.625C369.705 769.363 358.981 766.422 348.435 762.802C352.406 751.406 356.377 740.009 360.348 728.612C369.178 731.643 378.151 734.124 387.218 736.056C386.775 738.076 386.332 740.096 385.889 742.116C379.231 740.698 372.621 738.99 366.08 736.995ZM342.173 733.5C343.588 730.099 341.422 727.084 336.699 724.921C332.872 723.16 329.687 723.496 328.455 725.941C327.285 728.281 328.357 730.049 333.457 733.545C335.273 734.774 337.108 735.979 338.96 737.161C345.535 741.328 347.754 744.917 345.745 750.287C343.222 757.153 335.298 758.788 324.606 753.972C314.043 749.153 309.733 741.828 313.495 735.087C316.053 736.472 318.629 737.811 321.222 739.103C319.469 742.549 321.876 746.19 327.53 748.751C332.574 751.022 336.329 750.805 337.477 748.009C338.604 745.288 336.967 743.547 332.039 740.265C330.362 739.15 328.7 738.015 327.053 736.861C319.885 731.801 318.29 727.816 320.987 722.867C324.405 716.662 331.094 715.779 339.546 719.667C348.156 723.585 352.133 729.205 349.44 736.394C347.006 735.47 344.583 734.505 342.173 733.5Z" fill="black"/>
                            <path id="article-Vector" fill-rule="evenodd" clip-rule="evenodd" d="M432.778 202.666C594.229 202.666 725.111 333.549 725.111 494.999C725.111 656.451 594.229 787.332 432.778 787.332C271.327 787.332 140.445 656.451 140.445 494.999C140.445 333.549 271.327 202.666 432.778 202.666Z" stroke="black" stroke-width="4"/>
                            </g>
                            <g id="right-circle">
                            <path id="article-circle-heading" fill-rule="evenodd" clip-rule="evenodd" d="M826.817 250.406C834.262 243.514 841.398 236.054 848.164 228.057C840.01 229.856 831.856 231.654 823.702 233.453C823.062 230.593 822.367 227.752 821.618 224.93C833.301 221.878 844.985 218.826 856.668 215.774C857.56 219.131 858.385 222.511 859.143 225.914C852.54 234.061 845.567 241.69 838.284 248.772C846.42 247.612 854.556 246.452 862.693 245.292C863.181 248.681 863.603 252.088 863.958 255.512C851.942 256.75 839.926 257.988 827.91 259.226C827.603 256.272 827.239 253.331 826.817 250.406ZM816.808 209.174C828.237 205.289 839.666 201.404 851.096 197.518C852.195 200.698 853.235 203.903 854.213 207.132C842.641 210.578 831.07 214.025 819.499 217.471C818.654 214.684 817.757 211.918 816.808 209.174ZM838.363 181.86C829.159 185.762 819.955 189.665 810.751 193.568C809.605 190.913 808.409 188.282 807.164 185.677C816.211 181.428 825.258 177.18 834.305 172.931C832.23 168.589 830.034 164.309 827.722 160.097C829.542 159.115 831.361 158.133 833.181 157.151C839.438 168.548 844.861 180.431 849.379 192.709C847.433 193.412 845.486 194.116 843.54 194.82C841.931 190.447 840.204 186.125 838.363 181.86ZM812.106 135.151C809.869 136.711 807.633 138.271 805.396 139.832C809.637 145.817 813.615 151.989 817.315 158.331C815.522 159.36 813.729 160.389 811.936 161.418C808.328 155.233 804.449 149.214 800.313 143.378C797.751 145.165 795.189 146.952 792.627 148.739C797.128 155.091 801.312 161.667 805.161 168.444C803.356 169.452 801.551 170.46 799.746 171.468C794.576 162.366 788.784 153.634 782.42 145.337C792.031 138.076 801.642 130.815 811.253 123.554C818.383 132.85 824.893 142.617 830.731 152.788C828.931 153.804 827.13 154.82 825.33 155.836C821.251 148.731 816.837 141.828 812.106 135.151ZM779.439 141.535C777.292 138.854 775.083 136.221 772.815 133.639C773.808 126.71 774.483 119.629 774.823 112.42C772.816 112.224 770.816 112.055 768.822 111.914C765.996 114.783 763.17 117.653 760.344 120.522C758.274 118.511 756.165 116.538 754.018 114.604C762.127 105.718 770.235 96.8317 778.344 87.9457C780.832 90.1857 783.276 92.4717 785.674 94.8027C781.968 98.5657 778.262 102.329 774.555 106.092C782.544 106.49 790.652 107.304 798.841 108.55C801.461 111.49 804.015 114.488 806.499 117.54C798.368 115.768 790.292 114.439 782.313 113.539C781.929 123.114 780.957 132.465 779.439 141.535ZM753.77 91.6047C757.055 96.7617 756.865 97.3217 750.198 105.597C749.176 106.808 749.105 107.711 749.708 109.064C749.418 109.402 749.128 109.74 748.838 110.078C746.468 108.07 744.055 106.109 741.6 104.195C741.803 102.158 742.28 101.155 744.35 98.5017C745.163 97.5247 745.976 96.5477 746.79 95.5717C748.65 93.2017 748.091 91.1137 744.854 88.7297C741.1 86.6347 739.096 84.5997 736.144 82.6267C733.472 86.5717 730.8 90.5167 728.128 94.4617C725.706 92.8427 723.249 91.2677 720.759 89.7387C727.109 79.5377 733.459 69.3367 739.809 59.1357C747.33 63.7547 754.587 68.7307 761.561 74.0397C768.484 79.3407 769.144 85.4727 765.497 89.6827C762.623 93.0327 758.761 93.5457 753.77 91.6047ZM754.629 76.5737C751.438 74.2207 748.187 71.9367 744.88 69.7267C743.124 72.3207 741.367 74.9137 739.611 77.5077C742.797 79.6377 745.928 81.8367 749.003 84.1047C753.316 87.3067 755.315 86.9207 757.322 84.3907C759.252 81.9577 758.963 79.7897 754.629 76.5737ZM707.882 82.3977C708.193 79.8237 708.474 77.2397 708.726 74.6477C703.804 72.1287 698.776 69.7747 693.647 67.5927C691.766 69.4237 689.91 71.2717 688.079 73.1367C685.274 71.9857 682.439 70.8887 679.574 69.8447C688.596 60.3577 698.303 51.3077 708.649 42.7597C712.122 44.2987 715.552 45.9077 718.938 47.5857C718.681 60.8617 717.619 73.9477 715.788 86.7727C713.187 85.2647 710.551 83.8067 707.882 82.3977ZM698.52 62.9707C702.161 64.5667 705.752 66.2477 709.29 68.0117C709.641 62.9407 709.875 57.8387 709.991 52.7097C706.075 56.0597 702.25 59.4807 698.52 62.9707ZM666.292 65.4627C668.995 56.5147 671.699 47.5657 674.402 38.6177C668.903 46.7377 663.689 54.9937 658.769 63.3717C655.831 62.6097 652.868 61.9017 649.879 61.2517C649.297 51.5617 648.373 41.8447 647.102 32.1177C645.4 41.3047 643.697 50.4907 641.995 59.6777C638.964 59.1277 635.91 58.6347 632.834 58.2017C634.534 46.3327 636.235 34.4647 637.935 22.5957C643.258 23.3447 648.523 24.2477 653.726 25.2977C654.865 35.2617 655.649 45.2097 656.083 55.1237C660.952 46.4747 666.121 37.9447 671.582 29.5467C676.679 30.9467 681.708 32.4917 686.664 34.1757C682.74 45.5157 678.815 56.8557 674.891 68.1967C672.052 67.2317 669.185 66.3197 666.292 65.4627ZM833.387 300.166C829.833 296.381 828.356 292.314 828.472 286.395C828.686 274.65 835.625 265.564 846.599 264.596C857.793 263.618 866.165 272.919 865.88 287.856C865.604 300.325 859.854 308.608 852.341 308.97C852.681 305.776 852.959 302.589 853.177 299.411C857.524 297.74 859.397 293.44 859.518 287.8C859.688 279.023 854.991 273.951 847.214 274.269C839.752 274.589 834.979 280.099 834.812 287.556C834.702 293.056 837.293 298.626 841.751 299.626C842.01 296.05 842.188 292.485 842.286 288.933C844.356 288.987 846.427 289.041 848.497 289.095C848.32 295.503 847.891 301.953 847.2 308.433C840.741 307.757 834.282 307.081 827.823 306.406C828.019 304.565 828.193 302.728 828.343 300.893C830.025 300.659 831.706 300.416 833.387 300.166Z" fill="black"/>
                            <path id="article-circle-text" fill-rule="evenodd" clip-rule="evenodd" d="M370.806 536.906C367.993 534.439 365.229 531.925 362.516 529.368C358.669 525.732 358.345 521.981 361.437 518.889C364.581 515.748 368.592 515.746 371.807 518.79C373.308 520.21 374.826 521.616 376.36 523.008C378.107 521.082 379.854 519.156 381.601 517.231C382.799 518.318 384.007 519.395 385.226 520.464C380.419 525.945 375.613 531.425 370.806 536.906ZM370.379 522.595C368.421 520.759 366.805 520.65 365.263 522.25C363.704 523.869 363.884 525.511 365.889 527.391C367.059 528.486 368.238 529.573 369.426 530.651C370.898 529.029 372.369 527.407 373.84 525.785C372.677 524.73 371.524 523.667 370.379 522.595ZM341.769 507.828C342.71 507.005 343.651 506.183 344.592 505.36C347.407 508.58 350.294 511.746 353.252 514.855C354.447 513.718 355.643 512.581 356.838 511.444C354.145 508.612 351.51 505.732 348.936 502.807C349.875 501.981 350.813 501.155 351.751 500.33C354.294 503.219 356.895 506.063 359.556 508.859C360.925 507.557 362.294 506.254 363.664 504.952C360.71 501.847 357.83 498.682 355.025 495.461C355.968 494.641 356.91 493.82 357.853 492.999C361.674 497.386 365.635 501.667 369.734 505.834C364.537 510.946 359.339 516.057 354.142 521.169C349.878 516.834 345.753 512.384 341.769 507.828ZM330.349 493.98C327.628 490.471 328.301 487.112 331.024 485.102C333.17 483.51 335.399 483.558 337.805 485.128C336.899 481.956 337.076 481.67 342.162 477.707C342.931 477.133 343.118 476.632 342.993 475.81C343.21 475.649 343.427 475.488 343.644 475.327C344.663 476.701 345.694 478.067 346.738 479.424C346.276 480.545 345.834 481.051 344.22 482.299C343.598 482.753 342.975 483.207 342.353 483.661C340.905 484.778 340.846 485.986 342.17 487.666C343.338 489.146 344.521 490.615 345.719 492.074C347.952 490.241 350.186 488.407 352.42 486.573C353.434 487.809 354.459 489.036 355.494 490.256C349.937 494.974 344.38 499.692 338.823 504.41C335.92 500.991 333.095 497.513 330.349 493.98ZM339.041 489.754C337.294 487.531 336.116 487.555 334.567 488.744C333.07 489.894 332.844 491.093 334.564 493.282C335.831 494.89 337.114 496.486 338.415 498.07C339.883 496.864 341.352 495.659 342.82 494.453C341.544 492.899 340.284 491.332 339.041 489.754ZM314.009 470.851C315.061 470.177 316.114 469.503 317.167 468.829C319.364 472.262 321.632 475.653 323.968 479C325.321 478.056 326.674 477.112 328.027 476.167C326.001 473.265 324.028 470.329 322.109 467.362C323.158 466.683 324.208 466.004 325.257 465.325C327.153 468.256 329.101 471.155 331.102 474.021C333.677 472.224 336.251 470.427 338.826 468.63C339.737 469.935 340.659 471.233 341.592 472.524C335.684 476.794 329.776 481.065 323.869 485.336C320.443 480.596 317.155 475.765 314.009 470.851ZM322.495 463.849C317.231 467.235 310.461 466.017 306.755 459.657C303.079 453.32 305.167 446.836 311.007 443.783C316.678 440.818 322.914 442.498 326.268 448.276C329.661 454.105 328.006 460.309 322.495 463.849ZM322.948 450.206C321.019 446.884 317.254 445.991 313.331 448.14C309.335 450.329 307.965 454.092 310.057 457.698C312.12 461.243 316.129 461.961 319.881 459.65C323.793 457.242 324.895 453.554 322.948 450.206ZM293.692 433.782C291.843 429.775 293.259 426.664 296.365 425.318C298.815 424.251 300.973 424.793 302.957 426.852C302.796 423.573 303.033 423.334 308.881 420.62C309.76 420.233 310.056 419.789 310.121 418.963C310.369 418.855 310.616 418.748 310.864 418.64C311.543 420.2 312.237 421.755 312.944 423.303C312.239 424.288 311.694 424.681 309.84 425.533C309.132 425.835 308.423 426.137 307.715 426.439C306.052 427.2 305.72 428.36 306.625 430.282C307.425 431.976 308.24 433.662 309.071 435.341C311.661 434.059 314.251 432.776 316.84 431.494C317.544 432.915 318.26 434.33 318.987 435.74C312.508 439.082 306.03 442.424 299.551 445.766C297.512 441.813 295.559 437.818 293.692 433.782ZM305.711 437.005C304.825 435.216 303.957 433.419 303.107 431.613C301.915 429.07 300.763 428.831 298.986 429.64C297.268 430.423 296.775 431.536 297.95 434.04C298.816 435.88 299.7 437.712 300.603 439.534C302.306 438.691 304.008 437.848 305.711 437.005ZM286.567 417.125C291.414 413.604 296.302 410.156 301.228 406.784C295.316 407.543 289.384 408.222 283.435 408.821C282.561 406.402 281.717 403.971 280.904 401.529C287.82 399.225 294.736 396.921 301.652 394.617C302.154 396.123 302.668 397.626 303.195 399.123C297.836 401.007 292.478 402.891 287.12 404.774C292.958 404.255 298.778 403.655 304.58 402.976C305.128 404.466 305.688 405.951 306.26 407.43C301.461 410.77 296.701 414.182 291.982 417.666C297.25 415.543 302.518 413.42 307.786 411.296C308.379 412.768 308.984 414.234 309.601 415.695C302.885 418.531 296.17 421.367 289.454 424.203C288.463 421.856 287.501 419.497 286.567 417.125ZM275.966 385.233C282.24 380.538 288.605 376.026 295.055 371.701C295.442 373.289 295.842 374.874 296.256 376.455C294.963 377.32 293.673 378.192 292.386 379.071C293.146 381.911 293.948 384.739 294.791 387.552C296.351 387.635 297.909 387.709 299.467 387.776C299.941 389.326 300.428 390.872 300.927 392.413C293.147 392.052 285.34 391.481 277.513 390.697C276.981 388.881 276.465 387.059 275.966 385.233ZM290.808 387.313C290.223 385.327 289.658 383.334 289.113 381.335C286.636 383.083 284.171 384.858 281.72 386.661C284.752 386.908 287.782 387.126 290.808 387.313ZM272.03 369.158C276.177 364.876 280.408 360.736 284.717 356.74C279.839 357.635 274.961 358.531 270.082 359.426C269.772 357.736 269.476 356.042 269.193 354.345C276.384 353.148 283.575 351.951 290.766 350.754C291.028 352.332 291.304 353.907 291.592 355.478C287.199 359.458 282.884 363.585 278.655 367.859C283.58 366.789 288.505 365.719 293.43 364.649C293.768 366.208 294.12 367.762 294.484 369.314C287.387 370.979 280.29 372.644 273.193 374.309C272.791 372.596 272.403 370.879 272.03 369.158ZM279.442 349.103C272.461 350.218 267.554 346.512 266.716 339.404C266.056 333.754 268.431 329.122 273.417 328.293C273.55 329.899 273.695 331.502 273.853 333.104C271.12 334.117 270.192 336.039 270.511 338.789C270.98 342.804 274.002 344.831 278.781 344.161C283.508 343.498 285.837 340.953 285.399 337.223C285.05 334.227 283.616 332.444 280.809 332.418C280.651 330.82 280.507 329.221 280.375 327.619C285.4 327.525 288.498 331.169 289.168 336.912C289.927 343.34 286.383 347.994 279.442 349.103ZM265 306.829C266.25 306.815 267.5 306.801 268.75 306.787C268.798 311.117 268.938 315.436 269.168 319.741C270.816 319.652 272.463 319.564 274.111 319.476C273.901 315.555 273.768 311.623 273.711 307.681C274.961 307.663 276.211 307.645 277.461 307.627C277.517 311.52 277.648 315.404 277.855 319.276C279.743 319.175 281.63 319.074 283.517 318.973C283.287 314.674 283.152 310.36 283.112 306.035C284.362 306.023 285.612 306.012 286.862 306C286.916 311.892 287.15 317.761 287.56 323.601C280.288 324.113 273.017 324.624 265.745 325.135C265.318 319.06 265.069 312.956 265 306.829Z" fill="black"/>
                            <path id="article-Vector" fill-rule="evenodd" clip-rule="evenodd" d="M585.778 6.66699C747.229 6.66699 878.111 137.548 878.111 298.1C878.111 460.451 747.229 591.332 585.778 591.332C424.327 591.332 293.445 460.451 293.445 298.1C293.445 137.548 424.327 6.66699 585.778 6.66699Z" stroke="black" stroke-width="4"/>
                            </g>
                            <g id="center-shield">
                            <path id="article-colored-shield" d="M439.501 205C355.501 203.499 302.501 236 302.501 236C302.501 236 292.446 275.5 296.001 322C298.065 349 303.957 381 321.501 419.5C339.044 457.999 361.299 485.651 381 505C409 532.5 436.748 549.5 439.501 549.5C442.254 549.5 477.501 527.5 499.501 505C534.701 469 548.001 445 560.001 419.5C572 393.999 582.953 358.19 586.001 321.5C589.324 281.5 583.001 246.5 583.001 246.5C583.001 246.5 523.501 206.5 439.501 205Z" fill="#CFDE00"/>
                            <path id="Vector_8" fill-rule="evenodd" clip-rule="evenodd" d="M530.963 369.001V376.283H510.163V342.077H530.529V349.359H519.118V355.204H529.807V362.198H519.118V369.001H530.963ZM494.658 376.954C487.146 376.954 483.006 374.08 483.006 364.498V342.077H491.961V366.75C491.961 370.055 492.972 370.918 494.658 370.918C496.343 370.918 497.354 370.055 497.354 366.75V342.077H506.31V364.498C506.31 374.08 502.169 376.954 494.658 376.954ZM463.36 355.156H463.264V376.283H454.886V342.077H464.901L470.678 363.157H470.775V342.077H479.153V376.283H469.33L463.36 355.156ZM430.811 342.077H451.177V349.359H439.766V355.204H450.455V362.198H439.766V369.001H451.611V376.283H430.811V342.077ZM410.394 376.283L402.98 342.077H412.513L416.124 367.852H416.221L419.832 342.077H429.365L421.95 376.283H410.394ZM381.697 342.077H402.064V349.359H390.653V355.204H401.342V362.198H390.653V369.001H402.497V376.283H381.697V342.077ZM368.311 369.768V367.468C368.311 363.588 367.54 362.582 365.374 362.582H363.014V376.283H354.059V342.077H368.07C374.907 342.077 377.507 345.91 377.507 351.18C377.507 355.731 375.725 358.701 371.633 359.324V359.42C375.966 359.803 377.266 362.534 377.266 367.085V370.007C377.266 371.78 377.266 374.08 377.7 374.75C377.94 375.134 378.133 375.517 378.711 375.804V376.283H369.177C368.311 374.463 368.311 371.205 368.311 369.768ZM364.748 348.497H363.014V356.545H364.796C367.348 356.545 368.551 354.917 368.551 352.473C368.551 349.695 367.444 348.497 364.748 348.497Z" fill="white"/>
                            <path id="Vector_9" fill-rule="evenodd" clip-rule="evenodd" d="M530.905 332.685V338.929H513.071V309.601H530.534V315.844H520.75V320.855H529.914V326.852H520.75V332.685H530.905ZM500.52 338.929H489.374V309.601H500.52C509.396 309.601 509.85 316.583 509.85 324.265C509.85 331.946 509.396 338.929 500.52 338.929ZM498.58 315.105H497.053V333.425H498.58C501.552 333.425 501.924 332.192 501.924 324.265C501.924 316.337 501.552 315.105 498.58 315.105ZM479.135 333.794H473.025L472.241 338.929H464.067L471.25 309.601H480.91L488.093 338.929H479.919L479.135 333.794ZM476.121 315.598H476.039L473.934 328.044H478.227L476.121 315.598ZM457.915 336.341H457.832C456.8 338.847 454.076 339.504 451.475 339.504C443.673 339.504 442.971 333.958 442.971 324.265C442.971 314.447 444.87 309.025 453.952 309.025C459.401 309.025 463.282 311.777 463.282 318.884H455.851C455.851 317.405 455.727 316.255 455.438 315.474C455.149 314.653 454.571 314.201 453.663 314.201C451.145 314.201 450.897 316.337 450.897 324.265C450.897 332.192 451.145 334.328 453.498 334.328C455.108 334.328 456.057 333.301 456.099 328.167H453.374V322.991H463.282V338.929H458.08L457.915 336.341ZM422.824 309.601H440.287V315.844H430.503V320.855H439.667V326.852H430.503V332.685H440.658V338.929H422.824V309.601ZM405.65 320.814H405.567V338.929H398.384V309.601H406.971L411.925 327.674H412.007V309.601H419.19V338.929H410.769L405.65 320.814ZM377.742 309.601H395.204V315.844H385.421V320.855H394.585V326.852H385.421V332.685H395.576V338.929H377.742V309.601ZM366.265 333.342V331.371C366.265 328.044 365.604 327.181 363.746 327.181H361.723V338.929H354.045V309.601H366.058C371.92 309.601 374.149 312.887 374.149 317.405C374.149 321.307 372.622 323.854 369.113 324.388V324.47C372.828 324.799 373.943 327.14 373.943 331.042V333.548C373.943 335.068 373.943 337.039 374.315 337.614C374.521 337.943 374.686 338.271 375.181 338.518V338.929H367.008C366.265 337.368 366.265 334.575 366.265 333.342ZM363.21 315.105H361.723V322.005H363.251C365.439 322.005 366.471 320.609 366.471 318.514C366.471 316.132 365.521 315.105 363.21 315.105Z" fill="white"/>
                            </g>
                            <g id="left-circle">
                            <path id="article-circle-heading" fill-rule="evenodd" clip-rule="evenodd" d="M200.163 76.3177C189.728 78.9287 182.09 77.5007 179.319 70.2107C182.152 69.1667 185.019 68.1947 187.917 67.2987C189.084 71.0117 193.244 71.8807 199.215 70.4097C204.554 69.1127 207.64 66.9777 207.102 63.9817C206.578 61.1207 204.053 60.4337 197.583 60.9367C195.388 61.1247 193.195 61.3527 191.006 61.6227C181.515 62.8507 177.197 61.8367 175.247 56.4667C172.8 49.9147 178.079 43.3587 190.354 40.1997C202.876 37.0837 211.342 40.1747 212.29 47.7137C209.118 48.1667 205.97 48.7007 202.848 49.3127C202.179 45.7117 197.774 44.4717 191.326 46.1057C186.109 47.4447 183.377 50.1487 184.18 52.7497C184.952 55.2987 187.216 55.5767 194.351 54.8227C196.887 54.5627 199.428 54.3567 201.971 54.2037C211.045 53.6997 215.224 56.0327 215.931 61.6617C216.808 69.0177 210.736 73.7337 200.163 76.3177ZM155.649 86.9807C162.446 83.0627 169.538 79.6167 176.88 76.6807C177.64 78.6057 178.4 80.5307 179.159 82.4557C169.404 86.3567 160.107 91.1937 151.382 96.8667C144.878 86.7147 138.374 76.5637 131.87 66.4127C142.195 59.6987 153.177 53.9417 164.687 49.2517C165.459 51.1717 166.231 53.0917 167.003 55.0117C159.027 58.2617 151.314 62.0407 143.907 66.3087C145.255 68.6827 146.604 71.0557 147.952 73.4297C154.515 69.6467 161.33 66.2657 168.363 63.3167C169.154 65.2287 169.946 67.1417 170.737 69.0537C163.942 71.9027 157.357 75.1697 151.016 78.8237C152.561 81.5427 154.105 84.2617 155.649 86.9807ZM146.127 100.434C138.357 105.935 131.087 112.12 124.405 118.91C115.887 110.405 107.368 101.899 98.8505 93.3937C101.308 90.8957 103.832 88.4637 106.417 86.1017C113.093 93.5177 119.768 100.933 126.443 108.349C131.547 103.687 136.936 99.3437 142.579 95.3487C143.762 97.0437 144.944 98.7387 146.127 100.434ZM114.709 129.694C112.262 128.852 109.794 128.047 107.307 127.28C103.91 131.565 100.714 136.025 97.7335 140.647C99.2265 142.804 100.748 144.931 102.3 147.026C100.744 149.536 99.2535 152.093 97.8305 154.696C89.7365 144.456 82.3775 133.359 75.8685 121.509C78.0555 118.267 80.3335 115.095 82.6995 111.999C95.7955 114.668 108.436 118.371 120.501 123.021C118.511 125.19 116.58 127.415 114.709 129.694ZM85.9765 121.878C88.5325 126.381 91.2095 130.777 94.0025 135.06C96.2015 131.761 98.5065 128.544 100.914 125.415C96.0045 124.086 91.0225 122.906 85.9765 121.878ZM60.4435 162.468C58.4835 167.532 59.0585 171.4 61.6255 172.258C64.1275 173.12 65.6865 171.375 69.2345 165.079C70.5015 162.849 71.8085 160.658 73.1555 158.508C77.9875 150.873 82.2295 148.935 87.1905 151.624C93.6365 155.201 94.0225 162.711 89.9545 172.866C85.9825 182.937 80.3215 188.596 72.8315 186.614C73.6555 183.604 74.5575 180.63 75.5335 177.693C79.2055 178.906 82.3495 175.939 84.6375 170.194C86.6955 165.072 86.7415 161.355 84.0125 160.045C81.3965 158.811 79.3975 160.427 76.0465 166.002C74.9215 167.905 73.8285 169.84 72.7675 171.805C68.2075 180.373 64.8405 183.465 59.3755 181.924C52.6585 180.128 50.5075 171.735 55.1145 159.817C59.8915 147.744 67.1925 142.844 73.8355 146.444C72.3925 149.238 71.0175 152.075 69.7115 154.954C66.4165 153.405 62.8805 156.227 60.4435 162.468Z" fill="black"/>
                            <path id="article-circle-text" fill-rule="evenodd" clip-rule="evenodd" d="M608.041 371.306C607.02 376.499 604.005 378.76 599.746 377.775C595.417 376.771 593.287 373.395 594.138 369.094C594.534 367.085 594.906 365.069 595.254 363.047C592.691 362.606 590.129 362.166 587.567 361.725C587.837 360.154 588.092 358.578 588.331 357C595.539 358.093 602.746 359.186 609.953 360.279C609.393 363.974 608.755 367.65 608.041 371.306ZM598.949 363.682C598.685 365.218 598.407 366.751 598.115 368.281C597.613 370.898 598.381 372.316 600.557 372.77C602.757 373.228 604.052 372.205 604.569 369.513C604.868 367.944 605.153 366.371 605.424 364.795C603.266 364.424 601.108 364.053 598.949 363.682ZM602.025 395.837C600.749 400.119 597.613 401.529 594.398 400.473C591.857 399.645 590.607 397.8 590.485 394.932C588.431 397.511 588.093 397.53 581.917 395.683C581.003 395.389 580.487 395.526 579.89 396.099C579.634 396.016 579.377 395.932 579.12 395.848C579.647 394.233 580.156 392.613 580.649 390.986C581.828 390.714 582.497 390.779 584.451 391.365C585.182 391.606 585.914 391.848 586.645 392.09C588.396 392.617 589.413 391.963 590.004 389.911C590.523 388.102 591.021 386.287 591.499 384.465C588.704 383.731 585.909 382.997 583.114 382.263C583.517 380.729 583.905 379.19 584.278 377.647C591.364 379.359 598.449 381.072 605.535 382.785C604.475 387.17 603.304 391.522 602.025 395.837ZM595.126 385.417C594.615 387.363 594.082 389.302 593.526 391.233C592.738 393.949 593.441 394.893 595.31 395.462C597.115 396.011 598.225 395.495 599.003 392.81C599.571 390.836 600.117 388.854 600.639 386.865C598.802 386.382 596.964 385.9 595.126 385.417ZM588.803 401.44C594.749 403.388 598.065 409.456 595.388 416.391C592.707 423.285 586.295 425.691 580.288 422.988C574.45 420.363 571.909 414.446 574.314 408.257C576.732 402.004 582.578 399.396 588.803 401.44ZM577.894 409.645C576.509 413.214 578.148 416.712 582.268 418.454C586.465 420.228 590.275 418.948 591.795 415.035C593.287 411.182 591.332 407.592 587.178 406.124C582.847 404.592 579.289 406.044 577.894 409.645ZM579.455 425.147C585.912 428.019 588.005 433.81 584.792 440.188C582.234 445.252 577.692 447.757 573.092 445.667C573.867 444.273 574.629 442.872 575.378 441.464C578.211 442.141 580.044 441.063 581.289 438.607C583.103 435.017 581.683 431.669 577.318 429.61C573.001 427.572 569.672 428.4 568.006 431.703C566.664 434.355 566.883 436.606 569.208 438.181C568.464 439.579 567.706 440.971 566.936 442.355C562.707 439.637 562.126 434.956 564.689 429.885C567.549 424.206 573.032 422.288 579.455 425.147ZM568.137 467.957C567.099 467.261 566.06 466.565 565.022 465.87C567.4 462.32 569.69 458.714 571.888 455.057C570.474 454.207 569.06 453.357 567.646 452.507C565.649 455.828 563.576 459.106 561.428 462.338C560.387 461.646 559.346 460.954 558.305 460.262C560.422 457.078 562.464 453.848 564.432 450.575C562.812 449.601 561.192 448.628 559.572 447.654C557.396 451.275 555.125 454.842 552.762 458.352C551.725 457.654 550.688 456.955 549.651 456.257C552.862 451.489 555.9 446.612 558.76 441.637C565.08 445.27 571.4 448.903 577.72 452.536C574.705 457.78 571.51 462.923 568.137 467.957ZM554.16 461.845C553.264 463.151 552.356 464.449 551.434 465.739C549.524 464.383 547.33 465.261 545.374 467.883C543.626 470.221 543.269 472.225 544.713 473.353C546.106 474.438 547.36 473.881 549.816 471.611C550.646 470.836 551.472 470.055 552.293 469.267C555.856 465.835 558.21 465.152 561.037 467.092C564.549 469.485 564.637 473.781 561.022 478.664C557.331 483.621 553.075 485.014 549.493 482.111C550.479 480.883 551.453 479.646 552.415 478.4C554.166 479.761 556.338 478.934 558.274 476.326C559.841 474.21 559.953 472.235 558.611 471.279C557.314 470.35 556.21 470.845 553.577 473.343C552.643 474.23 551.703 475.11 550.757 475.981C547.388 479.077 544.897 479.533 542.223 477.365C538.775 474.551 539.092 470.276 542.641 465.526C546.142 460.819 550.279 459.213 554.16 461.845ZM538.238 482.636C536.451 481.121 534.184 481.814 532 484.27C530.047 486.46 529.513 488.434 530.854 489.682C532.149 490.882 533.451 490.429 536.104 488.367C537.001 487.662 537.895 486.95 538.784 486.232C542.643 483.101 545.051 482.616 547.702 484.792C550.996 487.477 550.707 491.775 546.667 496.352C542.543 500.997 538.167 502.034 534.849 498.834C535.943 497.688 537.026 496.533 538.097 495.369C539.724 496.875 541.967 496.23 544.13 493.785C545.881 491.803 546.167 489.839 544.912 488.771C543.699 487.735 542.555 488.137 539.705 490.412C538.694 491.22 537.678 492.021 536.656 492.813C533.017 495.626 530.487 495.874 528.01 493.484C524.817 490.384 525.516 486.136 529.48 481.686C533.391 477.276 537.659 476.019 541.3 478.973C540.292 480.203 539.271 481.424 538.238 482.636Z" fill="black"/>
                            <path id="article-Vector" fill-rule="evenodd" clip-rule="evenodd" d="M296.778 4.66699C458.229 4.66699 589.111 135.548 589.111 296.1C589.111 458.451 458.229 589.333 296.778 589.333C135.327 589.333 4.44531 458.451 4.44531 296.1C4.44531 135.548 135.327 4.66699 296.778 4.66699Z" stroke="black" stroke-width="4"/>
                            </g>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="content-wrap">
                    <div class="content">
                        <h3 class="article-heading"><?php echo $article_heading?></h3>
                        <p class="article-description"><?php echo $article_description?></p>
                        <div class="article-button-wrap">
                        <a class="calendly-trigger" ><?php echo $article_button ?> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


            <?php
                $category = get_the_category();
                if ($category) {
                    $category = $category[0];
                    $recommended_args = [
                        'post_type' => 'article',
                        'posts_per_page' => 2, 
                        'post__not_in' => array( $post->ID ),
                        'tax_query' => array(
                            array(
                                'taxonomy' => $category->taxonomy,
                                'field'    => 'slug',
                                'terms'    => $category->slug,
                            )
                        )
                    ];
                    $recommended_query = new WP_Query($recommended_args);
                    if($recommended_query->have_posts()){
                        ?>
                        <div class="recommended">
                            <div class="recommended_query-heading">
                                Recommended Reading:
                            </div>
                            <div class="recommended-articles">
                                <?php
                                    foreach($recommended_query->posts as $recommended_article){?>
                                        <a class="recommended-articles-article" href="<?php echo $recommended_article->guid?>">
                                            <div class="image-wrap">
                                                <?php echo get_the_post_thumbnail($recommended_article->ID);?>
                                            </div>
                                            <div class="content">
                                                <div class="categories-assigned">
                                                    <?php foreach (wp_get_post_categories($recommended_article->ID) as $cat_id){ ?>
                                                        <div class="category-tag"><?php echo get_cat_name($cat_id); ?></div>
                                                    <?php } ?>
                                                </div>
                                                <div class="title">
                                                    <?php echo $recommended_article->post_title ?>
                                                </div>
                                                <div class="short-description">
                                                    <?php echo $recommended_article->post_excerpt ?>
                                                </div>
                                            </div>
                                        </a>
                                    <?php }
                                ?>
                            </div>
                        </div>
                    <?php }
                }
            ?>
    </div>
</section>

<?php get_footer(); ?>