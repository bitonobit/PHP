
function Login() {
    window.location.href = "../Aplicacion/PHP/Login.php";
}

function SingIn() {
    window.location.href = "../Aplicacion/PHP/Registro.php";
}

function HacerCalendario(agno, mes) {
    $(document).ready(function () {

        mes = mes - 1;
        diastotales = 0;
        switch (mes) {
            case 0:
                diastotales = 31;
                break;
            case 2:
                diastotales = 31;
                break;
            case 4:
                diastotales = 31;
                break;
            case 6:
                diastotales = 31;
                break;
            case 7:
                diastotales = 31;
                break;
            case 9:
                diastotales = 31;
                break;
            case 11:
                diastotales = 31;
                break;
            case 3:
                diastotales = 30;
                break;
            case 5:
                diastotales = 30;
                break;
            case 8:
                diastotales = 30;
                break;
            case 10:
                diastotales = 30;
                break;

            case 1:
                if ((agno % 4 == 0) && (agno % 100 != 0) || (agno % 400 == 0)) {

                    diastotales = 29;
                }
                else {
                    diastotales = 28;
                }
                break;
        }
        var d = new Date(agno, mes, 1, 0, 0, 0, 0);
        var calendario = document.getElementById("calendario");
        $("#calendario").empty();
        calendario = $("#calendario");
        var cont = 0;
        var string = "";
        mes=mes+1;
        for (var i = 1; i <= diastotales; i++) {

            if (cont == 0) {
                string += "<div class='row'> <div class='col-md-2'> </div>";
            }
            if (cont != 7) {
                if(cont==5 || cont == 6){
                    string += "<div class='col-md-1 finde' id='" + i + "'> " + i + " </div>";
                }
                else{
                    string += "<div class='col-md-1 dias' id='" + i + "' onclick='verFechas("+agno+" , "+mes+" , this.id)'> " + i + " </div>";
                }
                cont++;
            }
            else {
                i--;
                string += "<div class='col-md-2'> </div> </div>";
                cont = 0;
            }

        }
        string += "<div>";
        $("#calendario").append(string);
        $("#calendario").append("<span> Clica en cualquiera de los dias del calendario para ver la disponibilidad");
    });


}

function verFechas(agno, mes, dia){

    $( document ).ready(function() {
        
        
        $(".botonfecha").remove();
        $("#calendario").append("<form class='botonfecha' action='' method='post'> <form>");
        $(".botonfecha").append("<input type='hidden'  value='"+dia+"' name='dia'>");
        $(".botonfecha").append("<input type='hidden'  value='"+mes+"' name='mes'>");
        $(".botonfecha").append("<input type='hidden'  value='"+agno+"' name='agno'>");
        $(".botonfecha").append("<input type='submit' class='btn btn-primary' value='Comprobar fecha: "+dia+"/"+mes+"/"+agno+"'>");
    });
}
