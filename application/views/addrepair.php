
</head>

<body>
   
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-form"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>แจ้งซ่อม</h2>
										<p>กรุณาตรวจสอบการ <span class="bread-ntd">การแจ้งให้ถูกต้อง</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                        <div class="cmp-tb-hd">
                            <h2>เพิ่มข้อมูล</h2>
                          
						</div>
						<form action ="<?php echo site_url('Welcome/add_order_repair');?>"  method ="post">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>ประเภทอุปกรณ์ที่แจ้ง</label>
                                <div class="nk-int-st">
								<div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker form-control" require ="" name ="equipment_id" id ="equipment_id">
											<option>กรุณาเลือกประเภท</option>
									
											<?php foreach($data11  as $pro ) {
												?>
													<option value ="<?php echo $pro['equipment_id'];?>"><?php echo $pro['equipment_name'];?></option>
												<?php
											}
											?>
										</select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>รายละเอียด</label>
                                <div class="nk-int-st">
                                    <textarea name ="repair_detail" require ="" placeholder ="กรุณาเพิ่มข้อมูล" value ="" class ="form-control input-sm"> </textarea>
                                </div>
                            </div>
						</div>
						
						<div class="form-example-int">
                            <div class="form-group">
                                <label>วันที่ลงแจ้ง</label>
                                <div class="nk-int-st">
                                    <input type="date" class="form-control input-sm" require ="" name ="repair_date" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
						<div class="form-example-int">
                            <div class="form-group">
                                <label>พนักงานที่จะลงแจ้ง</label>
                                <div class="nk-int-st">
								<div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker form-control" require ="" name ="office_id" id ="equipment_id">
											<option>เลือกรายชื่อพนักงาน</option>
									
											<?php foreach($emp  as $pro1 ) {
												?>
													<option value ="<?php echo $pro1['member_id'];?>"><?php echo $pro1['member_name'];?> <?php echo $pro1['member_lname'];?></option>
												<?php
											}
											?>
										</select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type ="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>

										</form>
</body>

</html>
