<html>
    <head>
        <title>
            Sponsor
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style type="text/css">
            body {
                background-color: #cacaca;
                color: #323232;
                font-family: arial;
            }
            #content {
                padding: 40px;
                margin: 0px;
                position: fixed;
                top: 0px;
                right: 0px;
                bottom: 0px;
                left: 0px;
                text-align: center;
                overflow-y: scroll;
                overflow-x: hidden;
            }
            .sponsor-card {
                background-color: #efefef;
                border-radius: 10px;
                margin: 10px;
                padding: 20px;
                display: inline-block;
                width: 25%;
                box-shadow: 0px 5px 20px -5px #000000;
            }
            .sponsor-banner {
                width: calc(100% + 40px);
                height: 30px;
                position: relative;
                left: -20px;
                margin: 30px 0px 60px 0px;
            }
            input[type="button"], input[type="submit"], button {
                padding: 8px 12px;
                border-radius: 2px;
                position: relative;
                top: 0px;
                box-shadow: 0px 0px 0px 0px #000000;
                -webkit-transition: 0.2s all ease-in-out;
                transition: 0.2s all ease-in-out;
                cursor: pointer;
                /*
                background-color: #0c2340;
                color: #efefef;
                */
                font-size: 16px;
                border-style: none;
                border-width: 0px;
            }
            input[type="button"]:hover, input[type="submit"]:hover, button:hover {
                padding: 8px 12px;
                border-radius: 2px;
                position: relative;
                top: -5px;
                box-shadow: 0px 5px 15px -5px #000000;
            }
            .gold {
                background-color: #d0a326;
                color: #202020;
            }
            .silver {
                background-color: #a5a6af;
                color: #202020;
            }
            .bronze {
                background-color: #8e461c;
                color: #efefef;
            }
            
            @media (max-width: 767px) {
                #content {
                    padding: 30px 0px;
                }
                .sponsor-card{
                    width: 100%;
                    margin: 20px 0px;
                    border-radius: 0px;
                    width: 100vw;
                }
                .sponsor-banner {
                    width: 100%;
                }
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                window.bringingMentors = false;
                $("#sending-sponsors-silver").on("click", function(){
                    if(window.bringingMentors){
                        window.bringingMentors = false;
                        $("#sending-sponsors-silver").prop("checked", false);
                        $("#sending-sponsors-gold").prop("checked", false);
                        $("#silver-dollar").html("$1500");
                        $("#gold-dollar").html("$3000");
                        $("#silver-link").attr("href", "sponsor-silver.php");
                        $("#gold-link").attr("href", "sponsor-gold.php");
                    }
                    else{
                        window.bringingMentors = true;
                        $("#sending-sponsors-silver").prop("checked", true);
                        $("#sending-sponsors-gold").prop("checked", true);
                        $("#silver-dollar").html("$1000");
                        $("#gold-dollar").html("$2500");
                        $("#silver-link").attr("href", "silver-discount.php");
                        $("#gold-link").attr("href", "gold-discount.php");
                    }
                });
                $("#sending-sponsors-gold").on("click", function(){
                    if(window.bringingMentors){
                        window.bringingMentors = false;
                        $("#sending-sponsors-silver").prop("checked", false);
                        $("#sending-sponsors-gold").prop("checked", false);
                        $("#silver-dollar").html("$1500");
                        $("#gold-dollar").html("$3000");
                        $("#silver-link").attr("href", "sponsor-silver.php");
                        $("#gold-link").attr("href", "sponsor-gold.php");
                    }
                    else{
                        window.bringingMentors = true;
                        $("#sending-sponsors-silver").prop("checked", true);
                        $("#sending-sponsors-gold").prop("checked", true);
                        $("#silver-dollar").html("$1000");
                        $("#gold-dollar").html("$2500");
                        $("#silver-link").attr("href", "silver-discount.php");
                        $("#gold-link").attr("href", "gold-discount.php");
                    }
                });
            });
        </script>
    </head>
    <body> 
        <div id="content">
            <h2>
                Sponsor RowdyHacks
            </h2>
            <br />
            <div id="sponsors-container">
                <div class="sponsor-card">
                    <h2>
                        Bronze Sponsor
                    </h2>
                    <div class="sponsor-banner bronze">
                    </div>
                    <h3 id="bronze-dollar">
                        $750
                    </h3>
                    <div style="padding: 20px 0px;height: 30px;">
                        <!--
                        <input type="checkbox" id="sending-sponsors" name="sending-sponsors" style="" />
                        We will send mentors
                        -->
                    </div>
                    <a href="sponsor-bronze.php" id="bronze-link">
                        <input type="button" value="Sponsor" id="bronze-sponsor-button" class="bronze" />
                    </a>
                </div>
                <div class="sponsor-card">
                    <h2>
                        Silver Sponsor
                    </h2>
                    <div class="sponsor-banner silver">
                    </div>
                    <h3 id="silver-dollar">
                        $1500
                    </h3>
                    <div style="padding: 20px 0px;height: 30px;">
                        <input type="checkbox" id="sending-sponsors-silver" name="sending-sponsors" style="" />
                        We will send mentors
                    </div>
                    <a href="sponsor-silver.php" id="silver-link">
                        <input type="button" value="Sponsor" id="silver-sponsor-button" class="silver" />
                    </a>
                </div>
                <div class="sponsor-card">
                    <h2>
                        Gold Sponsor
                    </h2>
                    <div class="sponsor-banner gold">
                    </div>
                    <h3 id="gold-dollar">
                        $3000
                    </h3>
                    <div style="padding: 20px 0px;height: 30px;">
                        <input type="checkbox" id="sending-sponsors-gold" name="sending-sponsors" style="" />
                        We will send mentors
                    </div>
                    <a href="sponsor-gold.php" id="gold-link">
                        <input type="button" value="Sponsor" id="gold-sponsor-button" class="gold" />
                    </a>
                </div>
            </div>
            <div>
                
            </div>
        </div>
    </body>
</html>