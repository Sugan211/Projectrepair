
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
										<h2>แก้ไขข้อมูลส่วนตัว</h2>
										<p>กรุณาตรวจสอบการ <span class="bread-ntd">ข้อมูลให้ถูกต้อง</span></p>
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
                            <h2>แก้ไขข้อมูล</h2>
                          
						</div>
						<form action ="<?php echo site_url('Welcome/submit_edit');?>"  method ="post">
                      

						<div class="form-example-int">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm"  value ="<?php echo $logged_in_user_info['member_name'];?>"require ="" name ="member_name" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

						<div class="form-example-int">
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <div class="nk-int-st">
                                    <input type="text" value ="<?php echo $logged_in_user_info['member_lname'];?>" class="form-control input-sm" require ="" name ="member_lname" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

						<div class="form-example-int">
                            <div class="form-group">
                                <label>Password</label>
                                <div class="nk-int-st">
                                    <input type="text" class="form-control input-sm"  value ="<?php echo $logged_in_user_info['member_password'];?>" require ="" name ="member_password" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type ="submit">แก้ไขข้อมูล</button>
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
