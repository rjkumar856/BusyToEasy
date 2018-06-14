<section class="kw-page-content cat-container">
<main>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
                <h1>My Bookings</h1>
                <div class="row orders">
                    <?php
                    if(isset($ongoing_order) and is_array($ongoing_order)){
                        foreach($ongoing_order as $value){ ?>
                            <div class="order-list col-xs-12 col-sm-6 col-md-4">
                                <div class="order-box">
                                    <h2><?php echo $value['title']; ?></h2>
                                    <span class="date"><?php echo date("F d,Y", strtotime($value['order_date'])) ?></span>
                                    <span class="status <?php if(strtolower($value['orderStatus']) == "completed" || strtolower($value['orderStatus']) == "not allocated" || strtolower($value['orderStatus']) == "progress"){ echo "success"; }else{ echo "error";} ?>">REQUEST <?php echo $value['orderStatus']; ?></span>
                                    <div class="order-inner">
                                        <p>The request was cancelled by the customer.</p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>
                    
                    <div class="order-list col-xs-12 col-sm-6 col-md-4">
                        <div class="order-box">
                            <h2>AC Service and Repair</h2>
                            <span class="date">May 17, 2018</span>
                            <span class="status error">REQUEST CANCELLED</span>
                            <div class="order-inner">
                                <p>The request was cancelled by the customer.</p>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
    </div>
  </div>
</main>

</section>

</div>
</div>

<?php
$this->load->view('common/footer');
?>
</body>
</html>