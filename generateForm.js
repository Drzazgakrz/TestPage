formFields = [
    {"label":"imie", "formID" : "name","type":"text"},
    {"label":"nazwisko", "formID" : "surname","type":"text"},
    {"label":"adres", "formID" : "address","type":"text"},
    {"label":"miejscowość", "formID" : "city","type":"text"},
    {"label":"numer telefonu", "formID" : "phoneNumber","type":"number"}
];


function generateForm() {
    var form = document.getElementById("myForm");
    for(var i = 0; i<formFields.length;i++){

        var contentDiv = document.createElement("div");
        contentDiv.setAttribute("class","row");
        contentDiv.append(createLabel(i));
        contentDiv.append(createInput(i));

        form.append(contentDiv);
    }
}

function createLabel (i) {

    var label = document.createElement("label");
    label.setAttribute("for", formFields[i]["formID"]);
    label.innerHTML = formFields[i]["label"];

    var div = document.createElement("div");
    div.setAttribute("class", "col-4");
    div.append(label);

    return div;
}

function createInput(i) {

    var input = document.createElement("input");
    input.setAttribute("id",formFields[i]["formID"]);
    input.setAttribute("type", formFields[i]["type"]);

    var formDiv = document.createElement("div");
    formDiv.setAttribute("class", "col-8");
    formDiv.append(input);

    return formDiv;
}