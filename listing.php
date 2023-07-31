<?php 
include('../../database/db_conn.php');
$query = "SELECT * FROM `revise_1`";
$row = mysqli_query($connect,$query);

// print_r($fetch);die;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Listing</title>
    </head>
    <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        <div class="card mb-5 mb-xl-8">
			<!--begin::Header-->
            <div class="card-header border-0 pt-5">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bold fs-3 mb-1">Condidate List</span>
				</h3> 
				<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add new">
					<a href="#" class="btn btn-sm btn-light btn-active-primary">
					<span class="svg-icon svg-icon-3">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
							<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->logout</a>
				</div>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add new">
					<a href="#" class="btn btn-sm btn-light btn-active-primary">
					<span class="svg-icon svg-icon-3">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
							<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->Test</a>
				</div>
                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add new">
					<a href="index.php" class="btn btn-sm btn-light btn-active-primary">
					<span class="svg-icon svg-icon-3">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
							<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->ADD NEW DATA</a>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body py-3">
				<!--begin::Table container-->
				<div class="table-responsive">
					<!--begin::Table-->
					<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
						<!--begin::Table head-->
						<thead>
							<tr class="fw-bold text-muted">
								<th class="min-w-50px">S.No.</th>
								<th class="min-w-150px">First Name</th>
								<th class="min-w-150px">Last Name</th>
								<th class="min-w-150px">Company</th>
								<th class="min-w-150px">Email</th>
								<th class="min-w-150px">Phone</th>
								<th class="min-w-150px">Profile Picture</th>
								<th class="min-w-150px">Status</th>
								<th class="min-w-100px text-end">Actions</th>
							</tr>
						</thead>
						<!--end::Table head-->
						<!--begin::Table body-->
						<tbody>
                            <?php $count_row = 1; while($fetch = mysqli_fetch_assoc($row)){?>
							<tr>
								<td><?php echo $count_row++;?></td>
								<td><?php echo $fetch['first_name']?></td> 
								<td><?php echo $fetch['last_name']?></td> 
								<td><?php echo $fetch['company']?></td> 
								<td><?php echo $fetch['email']?></td> 
								<td><?php echo $fetch['contact']?></td> 
								<td><?php echo $fetch['picture']?>
                                    <img src="../assets/images/test/<?php echo $fetch['picture'];?>" alt="picture" width="60" height="60"/></td> 
								<td><?php echo $fetch['status']?></td> 
								<td>
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        <!-- edit list  for database -->
										<a href='edit.php?edit_id=<?php echo $fetch['id']?>'>
											<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true" style="font-size: 25px;"></i> 
										</a>
									    <!-- delete list for database -->
										<a href='delete.php?del_id=<?php echo $fetch['id']?>'>
											<i class="fa fa-trash fa-fw" aria-hidden="true" style="font-size: 25px;">
                                            </i>
										</a>   
									</div>
								</td> 
							</tr>
                            <?php }?>
						</tbody>
						<!--end::Table body-->
					</table>
					<!--end::Table-->
				</div>
				<!--end::Table container-->
			</div>
		</div>
    </body>
 </html>