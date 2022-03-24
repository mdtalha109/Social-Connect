
    <!--   ////////.........start header tob bar................//////-->
<?php include 'include/header.php'; ?>
    <!--   ////////.........end header tob bar................//////-->


    <!--   ////////.........start main area................//////-->
    <main>
        <div class="main_area" style="margin-top: 0; padding-top: 12px;">
           
            <div class="first-section">
                <div class="news-feed">
                    <a href="index.php" class="active-wrap-2">
                        <div class="right-nav-icon">
                            <img src="assets/image/newsfeed.JPG" alt="">
                        </div>
                        <div class="right-nav-text">News Feed</div>
                    </a>
                </div>
            </div>
          

            <div class="second-section">
                <!--                ............ Start Status write part................-->
<?php include 'include/status.php'; ?>
                <!--                ............ end Status write part................-->

              

                <div class="news-feed-comp">
               <?php $loadFromPost->homePosts($userid, $profileId, 20) ?>

                </div>
                <div class="loader-wrap align-middle " style="width: 100%;">

                </div>
            
            </div>
            <div class="third-section">
                <div class="story-wrap">
                    <div class="story-head">
                        Stories
                    </div>
                    <div class="add-story">
                        <div class="add-circle">
                            +
                        </div>
                        <div class="add-your-story-wrap">
                            <div class="add-your-story">
                                Add to Your Story
                            </div>
                            <div class="add-story-details">
                                Share a photo, video or write something
                            </div>
                        </div>
                    </div>
                    
                </div>
               
                <div class="friend-request-wrap">
                    <div class="friend-request-text-wrap">
                        <div class="friend-request-text">Friend Request</div>
                        <div class="friend-request-seeAll">See All</div>
                    </div>


                </div>
            </div>
           
        </div>
        <div class="top-box-show"></div>
            <div id="adv_dem"></div>

    </main>

 <script src="assets/js/jquery.js "></script>
        <script src="assets/dist/emojionearea.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>
