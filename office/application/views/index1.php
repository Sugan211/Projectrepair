<div class="data-table-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="data-table-list">
					<div class="basic-tb-hd">
						<h2>ตารางแจ้งซ่อม</h2>
						<br>
						<p>ตรวจสอบสถานะการแจ้งซ่อม</p>


						<br>
					</div>
					<div class="table-responsive">
						<table id="data-table-basic" class="table table-striped">
							<thead>
								<tr>
									<th>รหัสการแจ้งซ่อม</th>
									<th>ชื่อวัสดุ</th>
									<th>รายละเอียดแจ้งซ่อม</th>
									<th>วันที่แจ้ง</th>
									<th>สถานะ</th>
									<th>พนักงานแจ้งซ่อม</th>
									<th>Ex</th>
								</tr>
							</thead>
							<tbody>

								<?php

								foreach ($data as $filter) {
								?>

									<tr>
										<td><?php echo $filter['repair_id']; ?></td>
										<td><?php echo $filter['EsName']; ?></td>
										<td><?php echo $filter['repairdetail']; ?></td>
										<td><?php echo $filter['repair_date']; ?></td>
										<td>

											<?php
											if ($filter['repair_status'] == 1) {

												echo "<font color = blue>กำลังดำเนินการ</font>";
											}
											if ($filter['repair_status'] == 2) {

												echo "<font color = green>เสร็จสิ้น</font>";
											}
											if ($filter['repair_status'] == 0) {

												echo "<font color = red>ยกเลิก</font>";
											}
											?>
										</td>
										<td><?php echo $filter['office_name']; ?></td>
										<td>
											<?php if($filter['repair_status']==1){
												?>
											
											<a href="<?php echo site_url('office/Welcome/editstatus/' . $filter['repair_id']); ?>" class="btn btn-primary">ปรับสถานะ</a>
											<?php
											}
											?>	
										</td>
									</tr>
								<?php
								}
								?>


							</tbody>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
