
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
                            <h2>ตรวจสอบสถานะแจ้งซ่อม</h2>
                          
						</div>
						<form action ="<?php echo site_url('office/Welcome/submit_edit');?>"  method ="post">
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>ประเภทสินค้าที่แจ้ง</label>
                                <div class="nk-int-st">
								<div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker form-control"  readonly ="" require ="" name ="equipment_id" id ="equipment_id">
											<option ><?php echo $data11['EsName'];?></option>
									
											
										</select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>รายละเอียด</label>
                                <div class="nk-int-st">
                                    <textarea name ="repair_detail" require ="" placeholder ="กรุณาเพิ่มข้อมูล" class ="form-control input-sm"><?php echo $data11['repairdetail'];?> </textarea>
                                </div>
                            </div>
						</div>
						
						<div class="form-example-int">
                            <div class="form-group">
                                <label>วันที่ลงแจ้ง</label>
                                <div class="nk-int-st">
                                    <input type="date" class="form-control input-sm" require ="" readonly =""  value ="<?php echo $data11['repair_date'];?>" name ="repair_date" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
						<div class="form-example-int">
                            <div class="form-group">
                                <label>ปรับสถานะ</label>
                                <div class="nk-int-st">
								<div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker form-control" require ="" name ="repair_status" id ="equipment_id">
											<option>เลือกสถานะ</option>
											<option value ="2">เสร็จสิ้น</option>
											<option value ="0">ยกเลิก</option>
										</select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
							<input type ="hidden" name ="repair_id" value ="<?php echo $data11['repair_id'];?>">
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
