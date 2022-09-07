<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />


	<title>Data Produk</title>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1 class="text-center">Data Produk</h1>
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

                                    <!-- Kode -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" class="form-control" id="kode_produk" placeholder="Kode Produk" aria-label="Kode produk" aria-describedby="basic-addon1">
									</div>


									<!-- Nama -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
										<input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk" aria-label="Nama produk" aria-describedby="basic-addon1">
									</div>

									<!-- Stok -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-envelope"></i></span>
										</div>
										<input type="text" class="form-control" id="stok" placeholder="Stok Produk">
									</div>

									<!-- Harga -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
										</div>
										<input type="text" class="form-control" id="harga" placeholder="Harga Produk">
									</div>

									<!-- Gambar -->
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="gambar">
										<label class="custom-file-label" for="customFile">Choose file</label>
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

												<!-- Kode -->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
													</div>
													<input type="text" class="form-control" id="edit_kode_produk" placeholder="Edit Kode Produk" aria-label="Edit Kode Produk" aria-describedby="basic-addon1">
												</div>

												<!-- Nama -->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-envelope"></i></span>
													</div>
													<input type="text" class="form-control" id="edit_nama_produk" placeholder="Nama produk">
												</div>

												<!-- Stok -->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
													</div>
													<input type="text" class="form-control" id="edit_stok" placeholder=" Edit Stok">
												</div>

                                                	<!-- Harga -->
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
													</div>
													<input type="text" class="form-control" id="edit_harga" placeholder=" Edit Harga">
												</div>

												<!-- Gambar -->
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="edit_gambar">
													<label class="custom-file-label" for="customFile">Choose file</label>
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
                            <th>Kode</th>
							<th>Nama</th>
							<th>Stok</th>
							<th>Harga</th>
							<th>Gambar</th>
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

    var kode_produk = $("#kode_produk").val();
    var nama_produk = $("#nama_produk").val();
    var stok = $("#stok").val();
    var harga = $("#harga").val();
    var gambar = $("#gambar")[0].files[0];

    if (kode_produk == "" || nama_produk == "" || stok == "" || harga == "" ) {
        alert("All field are required");
    } else {
        var fd = new FormData();

        fd.append("kode_produk", kode_produk);
        fd.append("nama_produk", nama_produk);
        fd.append("stok", stok);
        fd.append("harga", harga);
        fd.append("gambar", gambar);
      
        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/produk/insert",
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
        url: "<?php echo base_url(); ?>index.php/produk/fetch",
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
                        data: "kode_produk",
                    },
                    {
                        data: "nama_produk",
                    },
                    {
                        data: "stok",
                    },
                    {
                        data: "harga"
                    },
                    {
                        data: "gambar",
                        render: function(data, type, row, meta) {
                            var a = `
                                <img src="<?php echo base_url(); ?>assets/produk_images/${row.gambar}" width="150" height="150" />
                            `;
                            return a;
                        },
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
                url: "<?php echo base_url(); ?>index.php/produk/delete",
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
        url: "<?php echo base_url(); ?>index.php/produk/edit",
        type: "get",
        dataType: "JSON",
        data: {
            edit_id: edit_id,
        },
        success: function(data) {
            if (data.res === "success") {
                $("#editRecords").modal("show");
                $("#edit_record_id").val(data.post.id);
                $("#edit_kode_produk").val(data.post.kode_produk);
                $("#edit_nama_produk").val(data.post.nama_produk);
                $("#edit_stok").val(data.post.stok);
                $("#edit_harga").val(data.post.harga);
                $("#show_img").html(`
                    <img src="<?php echo base_url(); ?>assets/produk_images/${data.post.gambar}" width="150" height="150" class="rounded img-thumbnail">
                `);
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
    var edit_kode_produk = $("#edit_kode_produk").val();
    var edit_nama_produk = $("#edit_nama_produk").val();
    var edit_stok = $("#edit_stok").val();
    var edit_harga = $("#edit_harga").val();
    var edit_gambar = $("#edit_gambar")[0].files[0];

    if (edit_kode_produk == "" || edit_nama_produk == "" || edit_stok == "" || edit_harga === "" ) {
        alert("All field are required");
    } else {
        var fd = new FormData();

        fd.append("edit_id", edit_id);
        fd.append("kode_produk", edit_kode_produk);
        fd.append("nama_produk", edit_nama_produk);
        fd.append("stok", edit_stok);
        fd.append("harga", edit_harga);
        if ($("#edit_gambar")[0].files.length > 0) {
            fd.append("edit_gambar", edit_gambar);
        }

        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/produk/update",
            data: fd,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                if (response.res == "success") {
                    toastr["success"](response.message);
                    $("#editRecords").modal("hide");
                    $("#editForm")[0].reset();
                    $(".edit-file-label").html("Choose file");
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