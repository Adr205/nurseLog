 $(document).ready(function(){

    $.ajax({
        url: '../back/dashboard.php',
        type: 'GET', 
    })
    .done(function(res){

        console.log('RES: '+res);
        if (res == "fail")
            console.log("Error in query (back/getPatientInfo.php)");
        else {

            var patientInfo = res;
            
            var entradasJS = JSON.parse(res); 
            var cantEntradas = entradasJS.length;

            $("#departamento").html(entradasJS[0]["departamento"]);

            for(var i = 0; i < cantEntradas; i++){

               

                var newEntry = document.createElement("div");
                newEntry.setAttribute("class", "entry");

                var newEntryHeader = document.createElement("div");
                newEntryHeader.setAttribute("class", "entry-header");


                /* Creando despliegue de fecha y hora */

                var newEntryTime = document.createElement("div");
                newEntryTime.setAttribute("class", "entry-time");

                var newEntryDate = document.createElement("p");
                newEntryDate.setAttribute("class", "entry-date");

                newEntryDate.innerText = entradasJS[i]["fecha"];

                newEntryTime.appendChild(newEntryDate)

                /* Creando despliegue de nombres de enfermer@ */

                var newEntryNurse = document.createElement("div");
                newEntryNurse.setAttribute("class", "entry-nurse");

                var newEntryNurseName = document.createElement("p");
                newEntryNurseName.setAttribute("class", "nurse-name");

                var newEntryNurseLName = document.createElement("p");
                newEntryNurseLName.setAttribute("class", "nurse-lname");

                newEntryNurseName.innerText = entradasJS[i]["nombres"];
                newEntryNurseLName.innerText = entradasJS[i]["apellidos"];

                newEntryNurse.appendChild(newEntryNurseName);
                newEntryNurse.appendChild(newEntryNurseLName);
                
                /* Creando despliegue del cuerpo de text */

                var newEntryDesc = document.createElement("div");
                newEntryDesc.setAttribute("class", "entry-description");

                var newEntryDescText = document.createElement("p");
                newEntryDescText.setAttribute("class", "entry-description-text");

                newEntryDescText.innerText = entradasJS[i]["cuerpo"];

                newEntryDesc.appendChild(newEntryDescText);

                /* appends */

                newEntryHeader.appendChild(newEntryTime);
                newEntryHeader.appendChild(newEntryNurse);

                newEntry.appendChild(newEntryHeader);
                newEntry.appendChild(newEntryDesc);

                document.getElementById("container").appendChild(newEntry); 

            
            }
        }
    
    })
    .fail(function(){
        console.log("error");
    })
    .always(function(){
        console.log("complete");
    });


});