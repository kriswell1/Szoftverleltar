function gepek() {
    $.post(
        "ajax_model.php",
        {"op" : "gep"},
        function(data) {
            //$("#gepselect").html('<option value="0">Válasszon ...</option>');
            $("<option>").val("0").text("Válasszon ...").appendTo("#gepselect");
            var lista = data.lista;
            for(i=0; i<lista.length; i++)
                //$("#gepselect").append('<option value="'+lista[i].id+'">'+lista[i].nev+'</option>');
                $("<option>").val(lista[i].id).text(lista[i].nev).appendTo("#gepselect");
        },
        "json"                                                    
    );
};

function telepitesek() {
    $("#telepitesselect").html("");
    $("#szoftverselect").html("");
    $(".adat").html("");
    var gepid = $("#gepselect").val();
    if (gepid != 0) {
        $.post(
            "ajax_model.php",
            {"op" : "telepites", "id" : gepid},
            function(data) {
                $("#telepitesselect").html('<option value="0">Válasszon ...</option>');
                var lista = data.lista;
                for(i=0; i<lista.length; i++)
                    $("#telepitesselect").append('<option value="'+lista[i].id+'">'+lista[i].nev+'</option>');
            },
            "json"                                                    
        );
    }
}

function szoftverek() {
    $("#szoftverselect").html("");
    $(".adat").html("");
    var telepitesid = $("#telepitesselect").val();
    if (telepitesid != 0) {
        $.post(
            "ajax_model.php",
            {"op" : "szoftver", "id" : telepitesid},
            function(data) {
                $("#szoftverselect").html('<option value="0">Válasszon ...</option>');
                var lista = data.lista;
                for(i=0; i<lista.length; i++)
                    $("#szoftverselect").append('<option value="'+lista[i].id+'">'+lista[i].nev+'</option>');
            },
            "json"                                                    
        );
    }
}

function szoftver() {
    $(".adat").html("");
    var szoftverid = $("#szoftverselect").val();
    if (szoftverid != 0) {
        $.post(
            "ajax_model.php",
            {"op" : "info", "id" : szoftverid},
            function(data) {
                $("#nev").text(data.nev);
                $("#kategoria").text(data.cim);
            },
            "json"                                                    
        );
    }
}

$(document).ready(function() {
   gepek();
   
   $("#gepselect").change(telepitesek);
   $("#telepitesselect").change(szoftverekek);
   $("#szoftverselect").change(szoftver);
   
   $(".adat").hover(function() {
        $(this).css({"color" : "white", "background-color" : "black"});
    }, function() {
        $(this).css({"color" : "black", "background-color" : "white"});
    });
});