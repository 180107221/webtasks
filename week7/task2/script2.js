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
        if(j.selectedIndex == 0){
            for( let y of option1){
                for(let con = 0; con < 4; con++){
                    y.remove(option1[con]);
                }
                var element1 = document.createElement('option');
                element1.textContent = "Select City";
                select1.appendChild(element1);
            }
        }
        else{
            for( let x of option1){
                for(let con = 0; con <= cities.length; con++){
                    x.remove(cities[con]);
                }
                var element2 = document.createElement('option');
                element2.textContent = "Select City";
                select1.appendChild(element2);
                for(let con1 = 0; con1 < cities.length; con1++){
                    let element3 = document.createElement('option');
                    element3.textContent = cities[con1];
                    element3.value = cities[con1];
                    select1.appendChild(element3);
                }

            }
        }
        
    });
}



