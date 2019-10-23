let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

let select = document.getElementById('countries');
let select1 = document.getElementById('cities');
let option = document.querySelectorAll('#countries');
let option1 = document.querySelectorAll('#cities');

for(var i = 0; i < countries.length; i++) {
    var country = countries[i];
    var element = document.createElement("option");
    element.id = 1;
    element.textContent = country;
    element.value = country;
    select.appendChild(element);
}

for(let j of option){
    j.addEventListener('change', ()=>{
        let cities = cities_by_country[j.value];
            for(let q of option1){
                if(q.length > 1){
                    for(let w = 0; w <= cities.length; w++){
                        q.remove(cities[w]);
                    }
                    var element1 = document.createElement('option');
                    element1.textContent = "Select City";
                    select1.appendChild(element1);
                    for(let k = 0; k < cities.length; k++){
                        var city = cities[k];
                        var element1 = document.createElement('option');
                        element1.textContent = city;
                        element1.value = city;
                        select1.appendChild(element1); 
                    }
                }
                else{
                    for(let k = 0; k < cities.length; k++){
                        var city = cities[k];
                        var element1 = document.createElement('option');
                        element1.textContent = city;
                        element1.value = city;
                        select1.appendChild(element1);
                    }
                }
            }
        
    });
}



