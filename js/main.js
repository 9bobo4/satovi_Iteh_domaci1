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

 function dodaj () {

    var form = $('#addform')[0];
    var formData = new FormData(form);
    event.preventDefault();  
    console.log(formData);


    request = $.ajax({  
        url: 'handler/add.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });

    request.done(function (response, textStatus, jqXHR) {
        


            alert("Sat dodat ");
            console.log("Uspesno dodavanje");
            location.reload(true);
        
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
};

function azurirajSat(updateid){

    $.post("handler/get.php",{updateid:updateid},function(data,status){

        var sat = JSON.parse(data);

        $('#modelU').val(sat.model);
        $('#brendU').val(sat.brend);
        $('#cenaU').val(sat.cena);
        $('#materijalU').val(sat.materijalNarukvice);
        $('#vrsteU').val(sat.mehanizamVrsta);




    });




}