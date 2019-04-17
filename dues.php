<!DOCTYPE html>
<html>
    <head>
        <?php
            require('common/head-includes.php');
        ?>
        <title>Pay Dues | Association for Computing Machinery UTSA</title>
        <script type="text/javascript">
            //redirect if not secure and not on local dev machine
            if(location.protocol.toLowerCase().indexOf("s") < 0 && location.hostname != 'localhost' && location.hostname != '127.0.0.1'){
                window.location.href = 'https://' + location.hostname + location.pathname;
            }
        </script>
    </head>
    <body>
        <?php
            require('common/menu.php');
        ?>
        <div id="content" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- content here! -->
                    <h1 class="content-title">
                        Dues
                    </h1>
                    <?php
                        require_once('./config.php');
                        $month = date('n', time());
                        $year = date('Y', time());
                        $current_semester;
                        if($month < 6){
                            $current_semester = 'Spring ' . $year;
                        }
                        else{
                            $current_semester = 'Fall ' . $year;
                        }
                    ?>
                    <div id="stripe-button-container">
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $("#fake-stripe-button").on('click',function(){
                                    $(".stripe-button-el").click();
                                });
                            });
                        </script>
                        <div style="display:none;">
                            <form action="process_dues.php" method="post">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="<?php echo $stripe['publishable_key']; ?>"
                                    data-description="Dues for <?php echo($current_semester); ?>"
                                    data-amount="2000"
                                    data-locale="auto"
                                    data-label="Pay with Card or Bitcoin"
                                    data-currency="usd"
                                    data-bitcoin="true"
                                    >
                                </script>
                            </form>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="row section-container" style="margin-top:50px;">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-7" style="font-size:24px;">
                            <p>
                                We think it's awesome to have snacks at meetings. Prizes, travel reimbursements, t-shirts,
                                and other cool benefits for ACM members are all funded by dues. Dues are just $15 per semester. We spend all of our funds giving back to members and doing cool stuff.
                            </p>
                        </div>
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-3" style="padding-top:60px;text-align:center;">
                            <!--
                                <h3>
                                    Coming Soon
                                </h3>
                                <div style="background-color:grey;color:white;padding:5px;border-radius:3px;display:inline-block;cursor:default;">
                                    Pay Dues
                                </div>
                            -->
                            <input type="button" value="Pay Dues" id="fake-stripe-button" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require('common/footer.php');
        ?>
    </body>
</html>
