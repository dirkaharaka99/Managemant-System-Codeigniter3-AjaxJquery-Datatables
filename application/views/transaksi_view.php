<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="Description" content="Enter your description here" />


	<title>Data Transaksi</title>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<h1 class="text-center">Data Transaksi</h1>
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

                                    <!-- Id Produk -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
										<div class="col">
                                            <select id="id_produk" class="custom-select">
                                            <option >-------- Pilih Produk ----------</option>
                                            <?php           
                                                foreach($queryAllProduk as $produk){;
                                            ?>
                                            <option value = "<?php echo $produk->id;?>">  <?php echo $produk->id;?> - <?php  echo $produk->nama_produk?> </option>
                                            <?php } ; ?>
                                            </select>
                                        </div>
									</div>

                                     <!-- Id Pelanggan -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
										<div class="col">
                                            <select id="id_pelanggan" class="custom-select">
                                            <option >-------- Pilih Pelanggan ----------</option>
                                            <?php           
                                                foreach($queryAllPelanggan as $pelanggan){;
                                            ?>
                                            <option value = "<?php echo $pelanggan->id;?>">  <?php echo $pelanggan->id;?> - <?php  echo $pelanggan->nama?> </option>
                                            <?php } ; ?>
                                            </select>
                                        </div>
									</div>

                                        <!-- Id Karyawan -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
										<div class="col">
                                            <select id="id_karyawan" class="custom-select">
                                            <option >-------- Pilih Karyawan ----------</option>
                                            <?php           
                                                foreach($queryAllKaryawan as $karyawan){;
                                            ?>
                                            <option value = "<?php echo $karyawan->id;?>">  <?php echo $karyawan->id;?> - <?php  echo $karyawan->nama?> </option>
                                            <?php } ; ?>
                                            </select>
                                        </div>
									</div>



									<!-- Jumlah Produk -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
										</div>
                                        <div class="col">
										    <input type="text" class="form-control" id="jumlah_produk" placeholder="Jumlah Produk" aria-label="Jumlah Produk" aria-describedby="basic-addon1">

                                        </div>
									</div>

								

									<!-- Harga Total -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
										</div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="harga_total" placeholder="Total Harga">
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

                                                        <!-- Edit Id Produk -->
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <div class="col">
                                                        <select id="edit_id_produk" class="custom-select">
                                                        <?php           
                                                            foreach($queryAllProduk as $produk){;
                                                        ?>
                                                        <option value = "<?php echo $produk->id;?>">  <?php echo $produk->id;?> - <?php  echo $produk->nama_produk?> </option>
                                                        <?php } ; ?>
                                                        </select>
                                                    </div>
                                                </div>

											   <!-- Edit Id Pelanggan -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                </div>
                                                <div class="col">
                                                    <select id="edit_id_pelanggan" class="custom-select">
                                                    <?php           
                                                        foreach($queryAllPelanggan as $pelanggan){;
                                                    ?>
                                                    <option value = "<?php echo $pelanggan->id;?>">  <?php echo $pelanggan->id;?> - <?php  echo $pelanggan->nama?> </option>
                                                    <?php } ; ?>
                                                    </select>
                                                </div>
                                            </div>

											         <!-- Edit Id Karyawan -->
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                        </div>
                                                        <div class="col">
                                                            <select id="edit_id_karyawan" class="custom-select">
                                                            <?php           
                                                                foreach($queryAllKaryawan as $karyawan){;
                                                            ?>
                                                            <option value = "<?php echo $karyawan->id;?>">  <?php echo $karyawan->id;?> - <?php  echo $karyawan->nama?> </option>
                                                            <?php } ; ?>
                                                            </select>
                                                        </div>
                                                    </div>


                                            <!-- Edit Jumlah Produk -->
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="edit_jumlah_produk" placeholder="Jumlah Produk" aria-label="Jumlah Produk" aria-describedby="basic-addon1">

                                                </div>
                                            </div>

                                                
									<!-- Edit Harga Total -->
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-info text-white" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>
										</div>
                                        <div class="col">
                                            <input type="text" class="form-control" id="edit_harga_total" placeholder="Total Harga">
                                        </div>
										
									</div>
												
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
                            <th>Id Produk</th>
							<th>ID Pelanggan</th>
							<th>ID Karyawan</th>
							<th>Jumlah Produk  </th>
							<th>Harga Total</th>
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

    var id_produk = $("#id_produk option:selected").val();
    var id_pelanggan = $("#id_pelanggan option:selected").val();
    var id_karyawan = $("#id_karyawan option:selected").val();
    var jumlah_produk = $("#jumlah_produk").val();
    var harga_total = $("#harga_total").val();
    

    if (id_produk == "" || id_pelanggan == "" || id_karyawan == "" || jumlah_produk == "" || harga_total == "" ) {
        alert("All field are required");
    } else {
        var fd = new FormData();

        fd.append("id_produk", id_produk);
        fd.append("id_pelanggan", id_pelanggan);
        fd.append("id_karyawan", id_karyawan);
        fd.append("jumlah_produk", jumlah_produk);
        fd.append("harga_total", harga_total);
      
        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/transaksi/insert",
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
        url: "<?php echo base_url(); ?>index.php/transaksi/fetch",
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
                        data: "id_produk",
                    },
                    {
                        data: "id_pelanggan",
                    },
                    {
                        data: "id_karyawan",
                    },
                    {
                        data: "jumlah_produk",
                    },
                    {
                        data: "harga_total",
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
                url: "<?php echo base_url(); ?>index.php/transaksi/delete",
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
        url: "<?php echo base_url(); ?>index.php/transaksi/edit",
        type: "get",
        dataType: "JSON",
        data: {
            edit_id: edit_id,
        },
        success: function(data) {
            if (data.res === "success") {
                $("#editRecords").modal("show");
                $("#edit_record_id").val(data.post.id);
                $(`#edit_id_produk`).find(`option[value="${data.id_produk}"]`).prop('selected',true);
                $("#edit_id_produk").val(data.post.id_produk);
                $(`#edit_id_pelanggan`).find(`option[value="${data.id_pelanggan}"]`).prop('selected',true);
                $("#edit_id_pelanggan").val(data.post.id_pelanggan);
                $(`#edit_id_karyawan`).find(`option[value="${data.id_karyawan}"]`).prop('selected',true);
                $("#edit_id_karyawan").val(data.post.id_karyawan);
                $("#edit_jumlah_produk").val(data.post.jumlah_produk);
                $("#edit_harga_total").val(data.post.harga_total);
                
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
    var edit_id_produk = $("#edit_id_produk option:selected").val();
    var edit_id_pelanggan = $("#edit_id_pelanggan option:selected").val();
    var edit_id_karyawan = $("#edit_id_karyawan option:selected").val();
    var edit_jumlah_produk = $("#edit_jumlah_produk").val();
    var edit_harga_total = $("#edit_harga_total").val();
   

    if (edit_id_produk == "" || edit_id_pelanggan == "" || edit_id_karyawan == "" || edit_jumlah_produk === "" || edit_harga_total === "") {
        alert("All field are required");
    } else {
        var fd = new FormData();

        fd.append("edit_id", edit_id);
        fd.append("id_produk", edit_id_produk);
        fd.append("id_pelanggan", edit_id_pelanggan);
        fd.append("id_karyawan", edit_id_karyawan);
        fd.append("jumlah_produk", edit_jumlah_produk);
        fd.append("harga_total", edit_harga_total);
       

        $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>index.php/transaksi/update",
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