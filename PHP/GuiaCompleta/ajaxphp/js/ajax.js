var btn = document.getElementById('btn_load_user');
var loader = document.getElementById('loader');

btn.addEventListener('click', () => {
    var request = new XMLHttpRequest();
    // request.open('GET', 'http://www.json-generator.com/api/json/get/bVmHGMiEpu?indent=2');
    request.open('GET', 'php/User.php');

    loader.classList.add('active');

    request.onload = function(){
        // console.log(JSON.parse(request.responseText)[0].name);
        var data = JSON.parse(request.responseText);            
            for(var i = 0; i < 5; i++){
                var element = document.createElement('tr');
                    element.innerHTML += ("<td>" +data[i].id +"</td>");
                    element.innerHTML += ("<td>" +data[i].name +"</td>");
                    element.innerHTML += ("<td>" +data[i].age +"</td>");
                    element.innerHTML += ("<td>" +data[i].country +"</td>");
                    element.innerHTML += ("<td>" +data[i].email +"</td>"); 
                document.getElementById('table').appendChild(element); 
            }
                
        /*  data.forEach(people => {
                var element = document.createElement('tr');                
                    element.innerHTML += ("<td>" +people.id +"</td>");
                    element.innerHTML += ("<td>" +people.age +"</td>");
                    element.innerHTML += ("<td>" +people.country +"</td>");
                    element.innerHTML += ("<td>" +people.email +"</td>"); 
            });
        */
        
    }

    request.onreadystatechange = function(){
        // console.log(request.status);
        if(request.readyState == 4 && request.status == 200){
            loader.classList.remove('active');
        }
    }

    request.send();
});
