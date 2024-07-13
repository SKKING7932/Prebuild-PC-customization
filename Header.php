<header class="nk-header nk-header-opaque">
    <!--START: Navbar
      Additional Classes:
          .nk-navbar-sticky
          .nk-navbar-transparent
          .nk-navbar-autohide
          .nk-navbar-light
          .nk-navbar-no-link-effect-->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-autohide">
        <div class="container-fluid">
            <div class="nk-nav-table">

                <a target="_self" href="index.php" class="nk-nav-logo">
                    <img src="images/dm2.png" alt=""  height="10" style="  margin-left: 100px;margin-bottom: 30px;" width="100">
                </a>


                <ul class="nk-nav nk-nav-right d-none d-lg-block" data-nav-mobile="#nk-nav-mobile">
                    <li class="active  nk-drop-item">
                        <a target="_self"  href="index.php">Home</a>
                        <ul class="dropdown"></ul>
                    </li>
                    <li class="active  nk-drop-item">
                        <a target="_self" data-toggle="modal" data-target="#myModal">Customization</a>
                        <ul class="dropdown"></ul>
                    </li>
                    <li class="active  nk-drop-item">
                        <a target="_self" data-toggle="modal" data-target="#RecommendationModal">Recommendation</a>
                        <ul class="dropdown"></ul>
                    </li>
                    <li class="active  nk-drop-item">
                        <a target="_self" href="Pre-Built-PC.php">Pre-Built PC's</a>
                        <ul class="dropdown"></ul>
                    </li>

                    <?php if (isset($_SESSION['userId'])) { ?><li class="active  nk-drop-item">

                            <a target="_self" href="Profile.php">
                                Profile</a>
                            <ul class="dropdown">
                                <li class="link-effect-1">
                                    <a target="_self" href="Profile.php">Profile</a>
                                </li>
                                <li class="link-effect-1">
                                    <a target="_self" href="Profile-updatebasicdetails.php">Update Basic Details</a>
                                </li>

                                <li class="link-effect-1">
                                    <a target="_self" href="Profile-updatepassword.php">Update Password</a>
                                </li>
                                <li class="link-effect-1">
                                    <a target="_self" href="Profile-forgotpassword.php">Forgot Password</a>
                                </li>
                                <li class="link-effect-1">
                                    <a target="_self" href="logout.php">Log Out</a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                    <li class="active  nk-drop-item">
                        <a target="_self" href="products.php">Store</a><ul class="dropdown">
                        </ul>
                    </li>
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon d-lg-none">
                        <a target="_self" href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                    <li class="single-icon">
                        <a target="_self" href="#" class="no-link-effect">
                            <span class="nk-icon-search search-icon" onclick="expandSearch(), toggleMic()"></span>
                            <span class="nk-icon-close search-icon-close" onclick="collapseSearch(), toggleMicup()" style="display: none;" ></span>
                        </a>
                    </li>
                    <li class="">
                        <span class="input-group search-box">
                            <form id="search-form">
                                <input type="text" id="searchInput" name="searchInput" placeholder="Search for products">
                                <button type="submit">Search</button>
                                <button type="submit" id="submit" style="display: none;"></button>

                            </form>
                        </span>
                    </li>
                    <li class="single-icon microphone-box">
                        <a target="_self" href="#" class="no-link-effect">
                            <span class="microphone-icon" onclick="" ></span>
                            <button class="microphone-icon-close nk-btn nk-btn-xs nk-btn-color-white link-effect-4" id="voiceSearchBtn" style="display: none;" onclick=""><i class="fa fa-microphone"></i></button>
                        </a>
                    </li>
                    <li class="single-icon">
                        <a target="_self" href="cart.php" class="link-effect-1">
                            <span class="nk-icon-toggle">
                                <span class="nk-icon-toggle-front">
                                    <span class="ion-android-cart"></span>
                                </span>
                                <span class="nk-icon-toggle-back">
                                    <span class="nk-icon-close"></span>
                                </span>
                            </span>
                        </a>
                    </li>
                    <?php if (!isset($_SESSION['userId'])) { ?>
                        <li class="single-icon">
                            <a target="_self" href="#" class="nk-sign-toggle no-link-effect">
                                <span class="nk-icon-toggle">
                                    <span class="nk-icon-toggle-front">
                                        <span class="fa fa-sign-in"></span>
                                    </span>
                                    <span class="nk-icon-toggle-back">
                                        <span class="nk-icon-close"></span>
                                    </span>
                                </span>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->
    <script>
        function expandSearch() {
            const searchBox = document.querySelector('.search-box');
            searchBox.classList.add('search-box-expanded');
            const searchIcon = document.querySelector('.search-icon');
            searchIcon.style.display = 'none';
            const searchIconClose = document.querySelector('.search-icon-close');
            searchIconClose.style.display = 'block';
            toggleMic();
        }

        function collapseSearch() {
            const searchBox = document.querySelector('.search-box');
            searchBox.classList.remove('search-box-expanded');
            const searchIcon = document.querySelector('.search-icon');
            searchIcon.style.display = 'block';
            const searchIconClose = document.querySelector('.search-icon-close');
            searchIconClose.style.display = 'none';

            toggleMicup();

        }

        function toggleMic() {

            const microphoneBox = document.querySelector('.microphone-box');
            microphoneBox.classList.toggle('microphone-expanded');


            const microphoneIconClose = document.querySelector('.microphone-icon-close');
            microphoneIconClose.style.display = 'block';

        }
        function toggleMicup() {

            const microphoneBox = document.querySelector('.microphone-box');
            microphoneBox.classList.toggle('microphone-expanded');

            const microphoneIcon = document.querySelector('.microphone-icon');
            microphoneIcon.style.display = 'none'


        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const startButton = document.getElementById('voiceSearchBtn');
        const outputText = document.getElementById('searchInput');
        const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition || window.msSpeechRecognition)();

        recognition.lang = 'en-US';
        recognition.lang = 'en-IN';


        recognition.onresult = (event) => {
            const result = event.results[0][0].transcript;
            outputText.value = result;
            $("#submit").trigger("click");
        };


        startButton.addEventListener('click', () => {
            if (recognition.running) {
                recognition.stop();
            } else {
                recognition.start();
            }
        });
    </script>
    <!-- END: Search -->
    <!-- START: Shopping Cart Additional Classes: .nk-cart-light -->
    <!-- END: Shopping Cart -->
    <!-- START: Sign Form Additional Classes:.nk-sign-form-light-->
    <?php include './SignInForm.php'; ?>
    <!-- END: Sign Form -->
    <?php include './ShopingCart.php'; ?>
    <?php include './Scripts.php'; ?>
    <?php include './fetch_data.php'; ?>
</header>
<!-- START: Modal -->
<div id="myModal" class="modal nk-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  aria-hidden="true">
    <div class="nk-gap-3"></div>
    <div class="nk-gap-2"></div>

    <div class="modal-dialog modal-lg"   role="document" >
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title ml-200 nk-title" id="myModalLabel">Choose Your Processor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="nk-gap-2"></div>

                <h5 class="text-lg-center">Please Choose Processor Which You Want</h5 >
                <div class="nk-gap-3"></div>
                <div class="p-10 container-fluid">
                    <form method="post" action="customization.php">
                        <center>
                            <table>
                                <tr>
                                    <td>
                                        <button  type="submit" class="nk-btn nk-btn-color-main-1" id="intel" name="intel"  onclick="setProcessor('intel')"><div class="card custom-card">
                                                <img src="https://dreampc.com.au/wp-content/uploads/2018/03/intel-team-blue.png" class="card-img-top" alt="Your Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">Intel</h5>
                                                    <p class="card-text">Build a Custom Intel Computer</p>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 " id="intel" name="intel"  onclick="setProcessor('intel')">Intel</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="submit" class="nk-btn nk-btn-color-main-1 nk-" id="ryzen" name="ryzen" onclick="setProcessor('ryzen')">
                                            <div class="card custom-card" >
                                                <img src="https://dreampc.com.au/wp-content/uploads/2018/03/amd-team-red.jpg" class="card-img-top" alt="Your Image">
                                                <div class="card-body">
                                                    <h5 class="card-title">Ryzen</h5>
                                                    <p class="card-text">Build a Custom AMD Computer</p>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 " id="ryzen" name="ryzen" onclick="setProcessor('ryzen')" >Ryzen</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </form>
                </div>



            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- END: Modal -->
<!-- START: Recomendation Modal -->
<div id="RecommendationModal" class="modal nk-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="RecommendationModalLabel"  aria-hidden="true">
    <div class="nk-gap-3"></div>
    <div class="nk-gap-2"></div>

    <div class="modal-dialog modal-lg"   role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ml-200 nk-title" id="RecommendationModalLabel">Recomendations For You</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="nk-gap-2"></div>
                <h5 class="text-lg-center">Please Choose Profession Type Which You Want</h5 >
                <div class="nk-gap-3"></div>
                <div class="p-10 container-fluid">
                    <form method="post" action="customization.php">
                        <center>
                            <table>
                                <tr>
                                    <td>
                                        <button style="width:344.85px;height:226.883px;"  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Gaming'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Gaming</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Gaming</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                    <td>
                                        <button style="width:344.85px;height:226.883px;"  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Editing'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Editing</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Editing</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button style="width:344.85px;height:226.883px;"  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Education'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Education</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Education</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                    <td>
                                        <button style="width:344.85px;height:226.883px;"  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Office'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Office</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Office</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button style="width:344.85px;height:226.883px;"  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Business'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Business</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Business</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                    <td>
                                        <button style="width:344.85px;height:226.883px;"  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Animation'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Animation</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Animation</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        <button style="width:344.85px;height:226.883px;" type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Developer'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Developer</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Developer</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                    <td>
                                        <button  type="submit" class="nk-btn nk-btn-color-main-1" formaction="Recomendation.php?Recomendation_For='Scientists and Engineers'">
                                            <div class="card custom-card">
                                                <div class="card-body">
                                                    <h5 class="card-title ">Scientists &AMP; Engineers</h5>
                                                    <div class="nk-gap-3"></div>
                                                    <span class="nk-btn nk-btn-lg nk-btn-color-main-1 link-effect-4 ">Scientists &AMP; Engineers</span>
                                                </div>
                                            </div>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </center>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- END: Recomendation Modal -->