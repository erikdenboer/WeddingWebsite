/* Scripts written by EdB, 2024
Scripts in this file: 
 - name: Script used to generate HTML form question for one person to enter their name
 - food: Script used to generate HTML form question for one person to enter their food preference
 - extraRSVP: Script used to populate additional entry fields when user wants to RSVP for multiple guests
To do:
 - Read value 'guests' as soon as user enters it and feed it into extraRSVP() --> use <... onchange = "extraRSVP()">?
 - Generate appropriate number of div elements when extraRSVP() is called
 - Nest name() and food() into extraRSVP() to populate each div with its question
*/


//Redirect to mobile subdomain if on mobile device
if (screen.width <= 699) {
    window.location = "http://m.eandzgethitched.com";
}

//Populate form or just express regrets?
//First clean up all existing elements in classes 'RSVPyesorno' and 'RSVPquestion', then generate new elements as required by the answer
function didTheySayYes() {
    let cleanup = document.getElementsByClassName('RSVPyesorno');                   //Clean up form before repopulating
    while (cleanup.length > 0) {cleanup[0].parentNode.removeChild(cleanup[0]);}
    cleanup = document.getElementsByClassName('RSVPquestion');
    while (cleanup.length > 0) {cleanup[0].parentNode.removeChild(cleanup[0]);}
    let x = document.getElementById('rsvp').value;                                  //Extract answer value
    if (x == 'null') {                                                              //Don't respond to empty option
        return
    }
    if(x == 0){                                                                     //Response to 'not joining'
        let name1 = document.createElement('div');
        name1.id = 'rsvp_no';
        name1.className = 'RSVPyesorno';
        document.getElementById('rsvp').insertAdjacentElement('afterend', name1);
        name1.innerHTML = `<br>We're sorry you won't be there!<br>Heel jammer dat we je/jullie zullen moeten missen!<br>
        <br><label for="name1">Name/Naam:<br></label>
        <input type="text" id="name1" name="name1" placeholder="Zaneera den Boer" required>`;
        let submit = document.createElement('div');
        submit.id = 'submit';
        submit.className = 'RSVPyesorno';
        document.getElementById('emaildiv').insertAdjacentElement('afterend', submit);
        submit.innerHTML = '<input type="submit">';
    }else if(x == 1){                                                               //Response to 'will join'
        let some = document.createElement('div');
        some.className = 'RSVPyesorno';
        document.getElementById('rsvp').insertAdjacentElement('afterend', some);
        some.innerHTML =`<br><label for="groupsize">With how many people? Met hoeveel gasten?<br></label>
                        <select id="groupsize" name="groupsize" onchange="RSVPsize()" required>
                            <option value="null"></option>
                            <option value="gs1">1</option>
                            <option value="gs2">2</option>
                            <option value="gs3">3</option>
                            <option value="gs4">4 or more</option>
                        </select>`;
    } else {
        alert('Error! Please refresh the page and try again, and if you keep having issues, contact the groom. \n' + 
        'Sorry, er is iets fout gegaan! Probeer het nog eens of neem anders contact op met de bruidegom.');
    }
}

//Create the 'food' question once in an element called 'foodX'
function food(i) {
    let foodX = "food" + i;
    document.getElementById(foodX).innerHTML = 
    '<br><label for="' + foodX + `">What would you like to eat? Wat wil je graag eten?<br></label>
    <select id="` + foodX + '" name="' + foodX + `" required>
        <option value="Meat">Meat/vlees</option>
        <option value="Fish">Fish/vis</option>
        <option value="Vegetarian">Vegetarian/Vegetarisch</option>
        <option value="Other">Other - please specify below/Iets anders - vul het commentaarveld in</option>
    </select>`;
    return;
}

//Create the 'name' question once in an element called 'nameX'
function guestname(i) {
    let nameX = "name" + i;
    document.getElementById(nameX).innerHTML = 
    '<br><label for="' + nameX + '">Name/Naam:<br></label>' +
    '<input type="text" id="' + nameX + '" name="' + nameX + '" placeholder="Zaneera den Boer" required>';
    return;
}

//Create matching number of name and food preference entry fields, as soon as user enters number of guests in their party
//First clean up all existing elements in class 'RSVPquestion', then generate new elements as required by the answer
function RSVPsize() {
    let cleanup = document.getElementsByClassName('RSVPquestion');
    while (cleanup.length > 0) {cleanup[0].parentNode.removeChild(cleanup[0]);}
    let x = document.getElementById('groupsize').value;     //Extract group size value
    if (x == 'null') {                                      //Don't respond to empty option
        return
    }    
    else {
    	x = Number(x.charAt(2));                            //Strip var name and convert to number for following steps
        switch(x) {
        case 1: //Fallthrough for x = 1 || 2 || 3
        case 2: //Fallthrough for x = 1 || 2 || 3
        case 3:
        	for (let i=1; i <= x; i++) {
                let namei = document.createElement('div');
                namei.id = 'name' + i;
                namei.className = 'RSVPquestion';
                document.getElementById('groupsize').insertAdjacentElement('afterend', namei);
                //First element appends to question 'groupsize', otherwise append after most recent foodi element
                if (i == 1) {
                    document.getElementById('groupsize').insertAdjacentElement('afterend', namei);
                }
                else {
                    y = i-1;
                    y = 'food' + y;
                    document.getElementById(y).insertAdjacentElement('afterend', namei);
                }
                guestname(i);
                let foodi = document.createElement('div');
                foodi.id = 'food' + i;
                foodi.className = 'RSVPquestion';
                document.getElementById(namei.id).insertAdjacentElement('afterend', foodi);
                food(i);                
            }
            let comments = document.createElement('div');
            comments.id = 'comments';
            comments.className = 'RSVPquestion';
            document.getElementById('food' + x).insertAdjacentElement('afterend', comments);
            document.getElementById('comments').innerHTML = 
            `<br><textarea name="message" id="message" cols=50 rows=6 
            placeholder="Please let us know if you have any allergy info or other dietary requests and we'll do our best to accommodate you! \n` +
            `Laat ons hier weten of je allergieën hebt of andere dieetwensen, dan doen we onze best om hiermee rekening te houden!"></textarea>`;
            let submit = document.createElement('div');
            submit.id = 'submit';
            submit.className = 'RSVPyesorno';
            document.getElementById('emaildiv').insertAdjacentElement('afterend', submit);
            submit.innerHTML = '<input type="submit">';
        break;
        case 4:
            alert("We're not expecting anyone to bring this many guests. Either correct your entry if you miss-clicked, or please check with the bride/groom that we have enough space. \n" +
            "We verwachten niet dat iemand zo'n grote groep meeneemt. Als je verkeerd geklikt hebt, corrigeer dit dan even, en neem anders contact met ons op om er zeker van te zijn dat er genoeg plek is.");
        break;
        default:
        	alert('Error! Please refresh the page and try again, and if you keep having issues, contact the groom. \n' +
            'Er is iets misgegaan! Ververs even de pagina en probeer het nogmaals. Blijf je problemen hebben, neem dan contact op met de bruidegom.')
        break;
        }
    }
}

function showpass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}