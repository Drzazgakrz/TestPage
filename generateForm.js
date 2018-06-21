formFields = [
    {"label":"imie", "formName" : "name","type":"text"},
    {"label":"nazwisko", "formName" : "surname","type":"text"},
    {"label":"adres", "formName" : "address","type":"text"},
    {"label":"miejscowość", "formName" : "city","type":"text"},
    {"label":"numer telefonu", "formName" : "phoneNumber","type":"number"}
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
    var submit = document.createElement("input");
    submit.setAttribute("type","submit");
    submit.setAttribute("id","submitButton");
    submit.setAttribute("class", "btn btn-success");
    form.append(submit);
}

function createLabel (i) {

    var label = document.createElement("label");
    label.setAttribute("for", formFields[i]["formID"]);
    label.innerHTML = formFields[i]["label"];

    var div = document.createElement("div");
    div.setAttribute("class", "col-3");
    div.append(label);

    return div;
}

function createInput(i) {

    var input = document.createElement("input");
    input.setAttribute("type", formFields[i]["type"]);
    input.setAttribute("name",formFields[i]["formName"]);
    var formDiv = document.createElement("div");
    formDiv.setAttribute("class", "col-5");
    formDiv.append(input);

    return formDiv;
}