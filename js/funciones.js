function mostrar(sel) {
      if (sel.value=="Inicio"){
           divInicio = document.getElementById("div_Inicio");
           divInicio.style.display = "";

           div_Reservaciones = document.getElementById("div_Reservaciones");
           div_Reservaciones.style.display = "none";

           div_Quienessomos = document.getElementById("div_Quienessomos");
           div_Quienessomos.style.display = "none";

      }else if(sel.value=="Reservaciones"){

           divInicio = document.getElementById("div_Inicio");
           divInicio.style.display="none";

           div_Reservaciones = document.getElementById("div_Reservaciones");
           div_Reservaciones.style.display = "";

           div_Quienessomos = document.getElementById("div_Quienessomos");
           div_Quienessomos.style.display = "none";

      }else if(sel.value=="Quienes_Somos"){

            divInicio = document.getElementById("div_Inicio");
           divInicio.style.display="none";

           div_Reservaciones = document.getElementById("div_Reservaciones");
           div_Reservaciones.style.display = "none";

           div_Quienessomos = document.getElementById("div_Quienessomos");
           div_Quienessomos.style.display = "";
      }
}