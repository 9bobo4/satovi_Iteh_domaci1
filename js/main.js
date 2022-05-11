function obrisiSat(deleteid){
    console.log(deleteid)
    $.ajax({
        url: 'handler/delete.php',
        type: 'post',
        data: { deletesend: deleteid  },
        
        success: function(data, status){
           // console.log(data)
            location.reload(true);
            alert("Uspesno obrisano!");
        }
        
    });
 
 
 



}