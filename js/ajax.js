var ajaxcall;

  function bukaModal(id){ //FUNGSI UNTUK MEMANGGIL MODAL SUPAYA DAPAT DIJALANKAN
  $("#editnama").val($("#nama"+id).html());
  $("#editharga").val($("#harga"+id).html());

  $('#myModal').modal('show');


    //EDIT
   	$("#edit").click(function(){
      var enama = $("#editnama").val();
      var eharga = $("#editharga").val();

      $.ajax({
        type: "POST",
        url: "edit.php",
        data: ({ id:id, nama:enama ,harga:eharga }),
        dataType: "text",
        success: function(data) {
           if($.isEmptyObject(enama)||$.isEmptyObject(eharga)){ //cek inputan kosong
            alert("INPUT YANG ANDA MASUKKAN KURANG");
          }else{
          refreshData();
          $('#myModal').modal('hide');
          alert("SUKSES MENGUPDATE DATA");
          }	
        },
        error: function() {
            alert('Error occured');
        }
      }); //end of function ajax

    }); //end of function button edit

  } //end of function bukaModal

  function del(id){
      $.ajax({
        type: "POST",
        url: "delete.php",
        data: ({ id:id }),
        dataType: "text",
        success: function(data) {
          refreshData();
          alert("SUKSES MENGHAPUS DATA");	
        },
        error: function() {
            alert('Error occured');
        }
      });
  }

  function refreshData(){
    $("#data").html("Loading data..");
    if(ajaxcall!=null){
      ajaxcall.abort(); 
    }

    // GET DATA
        $.ajax({
        url: "output.php",
        type: "get",
        data: {
        },
        dataType: "json",
        success: function(result){
          var data = result;
          var dataDiv = $("#data");
          var str = "<table class=\"table table-dark\"> <thead> <tr>";
          str+= "<th>#</th> <th>Nama Menu</th> <th>Harga</th> <th>Action</th> </tr> </thead>";
          for(var i=0;i<data.length;i++){
            var d=data[i];
            str+="<tr>";
            str+="<td>"+d.id+"</td>";
            str+="<td id='nama"+d.id+"'>"+d.nama+"</td>";
			      str+="<td id='harga"+d.id+"'>"+d.harga+"</td>";
            str+="<td> <button type=\"button\" class=\"btn btn-warning\" onclick=bukaModal("+d.id+") id=\"editbutton\" data-toggle=\"modal\" data-target=\"#myModal\">Edit</button> <button type=\"button\" onclick=del("+d.id+") id=\"delbutton\" class=\"btn btn-danger\">Delete</button> </td>"
            str+="</tr>";
          }
          str+="</table>";
          dataDiv.html(str);
        },
        error: function(result){
          alert("ERROR");
        }
    });
  }

window.onload = function(){ 
    refreshData();

    // INPUT DATA
   	$("#tambah").click(function(){
      var nama = $("#nama").val();
      var harga = $("#harga").val();

      $.ajax({
        url: "input.php",
        type: "post",
        data: {
          nama:nama,
          harga:harga
        },
        success: function(res){
          if($.isEmptyObject(nama)||$.isEmptyObject(harga)){
            alert("INPUT YANG ANDA MASUKKAN KURANG");
          }else{
          alert("SUKSES MENAMBAH DATA");
          refreshData();
          $("#nama").val("");
          $("#harga").val("");
          }
        }
      });
    });

}

