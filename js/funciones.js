function mostrar(sel) {
    if (sel.value=="vacio"){

        div_Financieros = document.getElementById("div_Financieros");
        div_Financieros.style.display = "none";

        div_Liquidez = document.getElementById("div_Liquidez");
        div_Liquidez.style.display = "none";

        div_Endeudamiento = document.getElementById("div_Endeudamiento");
        div_Endeudamiento.style.display = "none";

        div_Rantabilidad = document.getElementById("div_Rantabilidad");
        div_Rantabilidad.style.display = "none";

        div_Cobertura = document.getElementById("div_Cobertura");
        div_Cobertura.style.display = "none";

    }else if (sel.value=="estados_financieros"){

        div_Financieros = document.getElementById("div_Financieros");
        div_Financieros.style.display = "";

        div_Liquidez = document.getElementById("div_Liquidez");
        div_Liquidez.style.display = "none";

        div_Endeudamiento = document.getElementById("div_Endeudamiento");
        div_Endeudamiento.style.display = "none";

        div_Rantabilidad = document.getElementById("div_Rantabilidad");
        div_Rantabilidad.style.display = "none";

        div_Cobertura = document.getElementById("div_Cobertura");
        div_Cobertura.style.display = "none";

    }else if(sel.value=="razon_liquidez"){

        div_Financieros = document.getElementById("div_Financieros");
        div_Financieros.style.display="none";

        div_Liquidez = document.getElementById("div_Liquidez");
        div_Liquidez.style.display = "";

        div_Endeudamiento = document.getElementById("div_Endeudamiento");
        div_Endeudamiento.style.display = "none";

        div_Rantabilidad = document.getElementById("div_Rantabilidad");
        div_Rantabilidad.style.display = "none";

        div_Cobertura = document.getElementById("div_Cobertura");
        div_Cobertura.style.display = "none";

    }else if(sel.value=="razon_endeudamiento"){

        div_Financieros = document.getElementById("div_Financieros");
        div_Financieros.style.display="none";

        div_Liquidez = document.getElementById("div_Liquidez");
        div_Liquidez.style.display = "none";

        div_Endeudamiento = document.getElementById("div_Endeudamiento");
        div_Endeudamiento.style.display = "";

        div_Rantabilidad = document.getElementById("div_Rantabilidad");
        div_Rantabilidad.style.display = "none";

        div_Cobertura = document.getElementById("div_Cobertura");
        div_Cobertura.style.display = "none";

    }else if(sel.value=="razon_rentabilidad"){

        div_Financieros = document.getElementById("div_Financieros");
        div_Financieros.style.display="none";

        div_Liquidez = document.getElementById("div_Liquidez");
        div_Liquidez.style.display = "none";

        div_Endeudamiento = document.getElementById("div_Endeudamiento");
        div_Endeudamiento.style.display = "none";

        div_Rantabilidad = document.getElementById("div_Rantabilidad");
        div_Rantabilidad.style.display = "";

        div_Cobertura = document.getElementById("div_Cobertura");
        div_Cobertura.style.display = "none";

    }else if(sel.value=="razon_cobertura"){

        div_Financieros = document.getElementById("div_Financieros");
        div_Financieros.style.display="none";

        div_Liquidez = document.getElementById("div_Liquidez");
        div_Liquidez.style.display = "none";

        div_Endeudamiento = document.getElementById("div_Endeudamiento");
        div_Endeudamiento.style.display = "none";

        div_Rantabilidad = document.getElementById("div_Rantabilidad");
        div_Rantabilidad.style.display = "none";

        div_Cobertura = document.getElementById("div_Cobertura");
        div_Cobertura.style.display = "";
    }
}