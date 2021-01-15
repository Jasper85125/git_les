function InitAJAX() 
{
    var objxml;
    var IEtypes = ["Msxml2.XMLHTTP.6.0", "Msxml2.XMLHTTP.3.0", "Microsoft.XMLHTTP"];

    try 
    {
        // Probeer het eerst op de "moderne" standaardmanier
        objxml = new XMLHttpRequest();
    } 
    catch (e) 
    {
        // De standaardmanier werkte niet, probeer oude IE manieren
        for (var i = 0; i < IEtypes.length; i++) 
        {
            try 
            {
                objxml = new ActiveXObject(IEtypes[i]);
            } 
            catch (e) 
            {
                continue;
            }
        }
    }

    // Lever het XHR object op
    return objxml;
}

function lees()
{
    // Maak een XHR object
    var xmlHttp = InitAJAX();

    // Wat moet er gebeuren bij statuswijzigingen?
    xmlHttp.onreadystatechange = function ()
    {
        // Is het request al helemaal klaar en OK?
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
        {
            // Lees de tekst die is ontvangen
            var result = xmlHttp.responseText;

            // Plaats de tekst in de pagina
            document.getElementById("div1").innerHTML = result;
        }
    }

    // Verstuur het request
    xmlHttp.open("GET", "test.php", true);
    xmlHttp.send(null);
}

function zoeken() {
    //maak een XHR object
    var xmlHttp = InitAJAX();

    // Lees de inhoud van het formulierveld
    var zoektekst = document.getElementById('zoeken').value;

    //maak de URL voor het AJAX request
    var url = 'op2.php?wp=' + zoektekst;

    //wat moet er gebeuren bij statwijzigingen
    xmlHttp.onreadystatechange = function ()
    {
        // Is het request al helemaal klaar en OK?
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {

            //Is het request al helemaal klaar en OK?
            var result = xmlHttp.responseText;

            //Plaats de tekst in de pagina
            document.getElementById("resultaat").innerHTML = result;
        }
    }

    // Verstuur het request
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}

function knop() {
    //maak een XHR object
    var xmlHttp = InitAJAX();

    // Lees de inhoud van het formulierveld
    var zoektekst = document.getElementById('zoeken').value;

    //maak de URL voor het AJAX request
    var url = 'op2_knop.php?wp=' + zoektekst;

    //wat moet er gebeuren bij statwijzigingen
    xmlHttp.onreadystatechange = function ()
    {
        // Is het request al helemaal klaar en OK?
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {

            //Is het request al helemaal klaar en OK?
            var result = xmlHttp.responseText;

            //Plaats de tekst in de pagina
            document.getElementById("resultaat").innerHTML = result;
        }
    }

    // Verstuur het request
    xmlHttp.open("GET", url, true);
    xmlHttp.send(null);

}














