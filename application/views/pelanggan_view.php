<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />


	<title>Data pelanggan</title>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1 class="text-center">Data pelanggan</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addRecords">
					Tambah Data
				</button>

				<!-- Add Records Modal -->
				<div class="modal fade" id="addRecords" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">

								<!-- Add Record Form -->
								<form id="addRecordForm">

                                 

									<!-- Nama -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
                                        <div class="col">
										    <input type="text" class="form-control" id="nama" placeholder="Nama pelanggan" aria-label="Nama pelanggan" aria-describedby="basic-addon1">
                                        </div>
									</div>

									<!-- Jenis Kelamin -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
										</div>
                                        <div class="col">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_l" value="L">
                                                <label class="form-check-label" for="jenis_kelamin_l">Laki laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_p" value="P">
                                                <label class="form-check-label" for="jenis_kelamin_p">Perempuan</label>
                                            </div>
                                        </div>
									</div>

									<!-- No Hp -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
										</div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="no_hp" placeholder="Nomor Hp pelanggan">
                                        </div>
									</div>

								

								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

								<!-- Insert Button -->
								<button type="button" class="btn btn-primary" id="add">Add Record</button>
							</div>
						</div>
					</div>
				</div>

				<!-- Edit Records Modal -->
				<!-- Modal -->
				<div class="modal fade" id="editRecords" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Edit Record</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<div class="row text-center">
										<div class="col-md-12 my-3">
											<div id="show_img"></div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">

											<!-- Edit Record Form -->
											<form id="editForm">

												<!-- ID -->
												<input type="hidden" id="edit_record_id">

												<!-- Nama -->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-envelope"></i></span>
													</div>
													<input type="text" class="form-control" id="edit_nama" placeholder="Edit Nama pelanggan">
												</div>

												<!-- Jenis Kelamin-->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
													</div>
													<div class="col">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="edit_jenis_kelamin" id="edit_jenis_kelamin_l" value="L">
                                                            <label class="form-check-label" for="edit_jenis_kelamin_l">Laki laki</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="edit_jenis_kelamin" id="edit_jenis_kelamin_p" value="P">
                                                            <label class="form-check-label" for="edit_jenis_kelamin_p">Perempuan</label>
                                                        </div>
                                                    </div>
												</div>

                                                	<!-- No Hp -->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
													</div>
													<input type="text" class="form-control" id="edit_no_hp" placeholder=" Edit No Hp">
												</div>

											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

								<!-- Update Button -->
								<button type="button" class="btn btn-primary" id="update">Update Record</button>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row my-4">
			<div class="col-md-12 mx-auto">
				<table class="table table-borderless" id="recordTable" style="width:100%">
					<thead>
						<tr>
							<th>ID</th>
                            <th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>No Hp</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
							<th>Action</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

	

	
	<!-- Main JS -->
	<script>
		/* -------------------- Bootstrap Custom File Input Label ------------------- */

$(".custom-file-input").on("change", function() {
    let fileName = $(this).val().split("\\").pop();
    let label = $(this).siblings(".custom-file-label");

    if (label.data("default-title") === undefined) {
        label.data("default-title", label.html());
    }

    if (fileName === "") {
        label.removeClass("selected").html(label.data("default-title"));
    } else {
        label.addClass("selected").html(fileName);
    }
});

/* ---------------------------- Add Records Modal --------------------------- */

$("#addRecords").on("hide.bs.modal", function(e) {
    // do something...
    $("#addRecordForm")[0].reset();
    $(".custom-file-label").html("Choose file");
});

/* ---------------------------- Edit Record Modal --------------------------- */

$("#editRecords").on("hide.bs.modal", function(e) {
    // do something...
    $("#editForm")[0].reset();
    $(".custom-file-label").html("Choose file");
});

/* --------------------------------- Baseurl -------------------------------- */
var base_url = $("#base_url").val();


/* -------------------------------------------------------------------------- */
/*                               Insert Records                               */
/* -------------------------------------------------------------------------- */

$(document).on("click", "#add", function(e) {
    e.preventDefault();

    var nama = $("#nama").val();
    var jenis_kelamin= $('input[name="jenis_kelamin"]:checked').val();
    var no_hp = $("#no_hp").val();


    if (nama == "" || jenis_kelamin == "" || no_hp == "" ) {
        alert("All field are required");
    } else {
        var fd = new FormData();

        fd.append("nama", nama);
        fd.append("jenis_kelamin", jenis_kelamin);
        fd.append("no_hp", no_hp);

        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/pelanggan/insert",
            data: fd,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                if (response.res == "success") {
                    toastr["success"](response.message);
                    $("#addRecords").modal("hide");
                    $("#addRecordForm")[0].reset();
                    $(".add-file-label").html("Choose file");
                    $("#recordTable").DataTable().destroy();
                    fetch();
                } else {
                    toastr["error"](response.message);
                }
            },
        });
    }
});

/* -------------------------------------------------------------------------- */
/*                                Fetch Records                               */
/* -------------------------------------------------------------------------- */
function fetch() {
    $.ajax({
        type: "get",
        url: "<?php echo base_url(); ?>index.php/pelanggan/fetch",
        dataType: "json",
        success: function(response) {
            var i = "1";
            $("#recordTable").DataTable({
                data: response,
                responsive: true,
                columns: [{
                        data: "id",
                        render: function(data, type, row, meta) {
                            return i++;
                        },
                    },
                    {
                        data: "nama",
                    },
                    {
                        data: "jenis_kelamin",
                    },
                    {
                        data: "no_hp",
                    },   
                    {
                        data: "created_at",
                    },
                    {
                        data: "updated_at",
                    },
                    {
                        orderable: false,
                        searchable: false,
                        data: function(row, type, set) {
                            return `
                                <a href="#" id="del" class="btn btn-sm btn-outline-danger" value="${row.id}"><i class="fas fa-trash-alt"></i></a>
                                <a href="#" id="edit" class="btn btn-sm btn-outline-info" value="${row.id}"><i class="fas fa-edit"></i></a>
                            `;
                        },
                    },
                ],
            });
        },
    });
}

fetch();


/* -------------------------------------------------------------------------- */
/*                               Delete Records                               */
/* -------------------------------------------------------------------------- */

$(document).on("click", "#del", function(e) {
    e.preventDefault();

    var del_id = $(this).attr("value");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url: "<?php echo base_url(); ?>index.php/pelanggan/delete",
                data: {
                    del_id: del_id,
                },
                dataType: "json",
                success: function(response) {
                    if (response.res == "success") {
                        Swal.fire(
                            "Deleted!",
                            "Your file has been deleted.",
                            "success"
                        );
                        $("#recordTable").DataTable().destroy();
                        fetch();
                    }
                },
            });
        }
    });
});
     
/* -------------------------------------------------------------------------- */
/*                                Edit Records                                */
/* -------------------------------------------------------------------------- */

$(document).on("click", "#edit", function(e) {
    e.preventDefault();

    var edit_id = $(this).attr("value");

    $.ajax({
        url: "<?php echo base_url(); ?>index.php/pelanggan/edit",
        type: "get",
        dataType: "JSON",
        data: {
            edit_id: edit_id,
        },
        success: function(data) {
            if(data.post.jenis_kelamin == 'P'){
                    // console.log("Perempuan");
                    $("#edit_jenis_kelamin_p").prop('checked', true);
                   
                } else if (data.post.jenis_kelamin == 'L'){
                    // console.log("laki-laki");
                    $("#edit_jenis_kelamin_l").prop('checked', true);
                    
                }
            if (data.res === "success") {
                $("#editRecords").modal("show");
                $("#edit_record_id").val(data.post.id);
                $("#edit_nama").val(data.post.nama);
                $("#edit_jenis_kelamin").val(data.post.jenis_kelamin);
                $("#edit_no_hp").val(data.post.no_hp);
             
            } else {
                toastr["error"](data.message, "Error");
            }
        },
    });
});

/* -------------------------------------------------------------------------- */
/*                               Update Records                               */
/* -------------------------------------------------------------------------- */

$(document).on("click", "#update", function(e) {
    e.preventDefault();

    var edit_id = $("#edit_record_id").val();
    var edit_nama = $("#edit_nama").val();
    var edit_jenis_kelamin = $('input[name="edit_jenis_kelamin"]:checked').val();
    var edit_no_hp = $("#edit_no_hp").val();

    if (edit_nama == "" || edit_jenis_kelamin == "" || edit_no_hp == ""  ) {
        alert("All field are required");
    } else {
        var fd = new FormData();

        fd.append("edit_id", edit_id);
        fd.append("nama", edit_nama);
        fd.append("jenis_kelamin", edit_jenis_kelamin);
        fd.append("no_hp", edit_no_hp);
       

        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/pelanggan/update",
            data: fd,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                if (response.res == "success") {
                    toastr["success"](response.message);
                    $("#editRecords").modal("hide");
                    $("#editForm")[0].reset();
                    $("#recordTable").DataTable().destroy();
                    fetch();
                } else {
                    toastr["error"](response.message);
                }
            },
        });
    }
});
	</script>

	
</body>

</html>