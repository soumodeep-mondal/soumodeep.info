$(document).ready(function () {
    $('.delete_btn_ajax').click(function(e){
      e.preventDefault();
      
        var deleteid = $(this).closest("tr").find('.delete_id_value').val();
          swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type:"POST",
                    url:"motion-delete.php",
                    data:{
                    "delete_btn_set": 1,
                    "delete_id":deleteid,
                    },
                    success: function (response) {
                        swal("Data delete successfully", {
                            icon: "success",
                        }).then((result) => {
                            location.reload();
                        });
                    }
                });
            }  
        });
    });
});