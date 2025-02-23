<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Magnus Nystedt - Oxford referenssystem i LaTex på svenska</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="https://magnusnystedt.se">Magnus Nystedt</a>

            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-left mt-5">
                <h1>Oxford referenssystem i LaTex på svenska</h1>
                <p class="lead">Jag är nybörjare till LaTex. Har pysslat med det i bara en månad och skrivit några inlämningsuppgifter i Overleaf. Eftersom jag studerar konstvetenskap använder vi vanligen Oxfordsystemet för referenser.</p>

<p>Det visade sig vara lite pill i LaTex för att få det att fungera. Lägg till det svenska så blev det än lite knepigare. Men nu verkar det fungera, och det här är vad jag har i min preamble som har med referenser att göra.</p>

<pre>
\usepackage[swedish]{babel}
\usepackage[utf8]{inputenc}
\usepackage[style=oxnotes-trad1]{biblatex}
\addbibresource{refs.bib}
\DefineBibliographyStrings{swedish}{%
editor           = {redaktör},
editors          = {redaktörer},
}
</pre>
<p>Första raden gör så du kan skriva åäö som vanligt (tror det är specifikt för rubriker men kan ha fel).</p>

<p>Andra raden anger vilket format filerna har, alltså också för stöd på svenska.</p>

<p>Tredje raden anger vilket referenssystem du använder, här väljer jag Oxnotes och deras traditionella stil. Biblatex ska vara lite modernare än Bibtex.</p>

<p>Fjärde raden anger i vilken fil som mina källor ligger. Den kan heta vad som helst, men oftast heter mina refs.bib eller references.bib.</p>

<p>De sista raderna ser till att det blir svenska på böcker med redaktörer, inte t.ed. “eds” eller “editors”.</p>

<p>Det är viktigt också att göra rätt med dina källor. Här är ett exempel:</p>


<pre>
@incollection{
falkheimerheide,
author={Falkheimer, Jesper and Heide, Mats},
title={Crisis communication in change: from plans to improvisations},
booktitle = {The handbook of crisis communication},
publisher = {Wiley-Blackwell},
editor = {Coombs, W. Timothy and Holladay, Sherry J.},
address={Thousand Oaks, California},
year={2010},
pages = {511-526},
}
</pre>

<p>Notera att du ska skriva “and” mellan författarnamnen, det blir “och” sen i output. Och efternamn, förnamn. Det blir också rätt sen i output.</p>

<p>Det är känsligt för konstiga tecken. En gång felsökte jag output i vad som verkade en evighet, slet mitt hår. Författarnamnen i output var helt fel. Till sist fixade det sig genom att jag kopierade hela blocket till en ren texteditor och klistrade tillbaka. Så någon upprensning skedde tydligen.</p>
<p>Jag gör mina källor oftast för hand direkt i filen, men ett tips är att skapa och hantera källor t.ex. i Zotero. Det går också att <a href="https://www.overleaf.com/learn/how-to/How_to_link_your_Overleaf_account_to_Mendeley_and_Zotero">synka Zotero</a> med Overleaf. För att synka måste du skapa en grupp som du synkar ditt Overleafprojekt med. Jag gör en ny grupp per kurs som jag sedan synkar med de olika skrivprojekt jag skapar för den kursen. Alla referenser i gruppen används ju inte i alla skrivprojekt, men används de inte i ett dokument visas de inte i den källförteckningen. Problem solved!</p>
<p>Sen i texten hänvisar jag så här:</p>
<pre>
\footcite[s.123]{falkheimerheide}
</pre>

<p>Som du ser, sida först och sen källans referens. Då blir det ett snyggt upphöjt nummer där du skrivit detta och en not i foten på sidan. </p>

<p>Och när du väl använt en källa så kommer den med i källförteckningen också.</p>

<p>Upprepad källa blir med “oxnotes-trad1” ibid.</p>

<h2>Namnge källor, filer och utskrifter</h2>
<p>Här kommer ett till tips! Just nu sitter jag med en inlämningsuppgift där jag använder en rad webbartiklar som källor. De ska då naturligtvis in i Zotero och jag synkar till projektet i Overleaf. Det kortnamn en källa får i Overleaf (t.ex. "karlsson_text_2012") är ju den referens du anger i LaTex. Jag sparar om jag kan alla mina källor som PDF-filer och skriver ofta också ut dem, om de inte är alldeles för långa (webbsidor har ju en tendens att ändras och försvinna). Då gör jag så att jag namnger respektive PDF-file samma som kortnamnet och jag skriver även kortnamnet på utskriften. Då är det lätt att senare gå tillbaka och hitta källan.</p>
<p>Gör det från början i ditt projekt. Väntar du till senare kan det bli svårt att få till allt rätt.</p>
</div>
        </div>
    </body>
</html>
