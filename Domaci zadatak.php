<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table ,td,<tr>
{
   border-collapse:collapse;
   border:2px solid green;
   <border-style:solid;
   padding:0px auto;
   0px auto;
   monospace;
   font-style:italic;

}
{
   background-color:green;
   color:red;
   text-allign:center;
   padding:0px auto;
   0px auto;
   arial;
   font-style:Georgia;

}


</style>
<body>
<table>
<tr>
 <td style="text-allign: center;"bgcolor="blue">
 <b>Ime</b>
 </td>
 <td style="text-allign:right;"bgcolor="yellow">
 <b>Prezime</b>
 <td style="text-allign:left;"bgcolor="green">
 <b>JMBG</b>
 </td>
 </tr>
 <td bgcolor="blue">Pera</td>
 <td bgcolor="yellow">Peric</td>
 <td bgcolor="green">516952342254</td>
 </tr>
 <tr id="treca_kolona">
 <td>Jovan</td>
 <td style="text-allign:rigt;">Jovanovic</td>
 <td>534512353677</td>
 </tr>
 <tr>
 <td style="text-allign:center;"bgcolor="blue">Milos</td>
 <td style="text-allign:right;"bgcolor="yellow">Milosevic</td>
 <td bgcolor="green">345123123473</td>
 </tr>
</tr>
</table>
<form action="domaci zad.css" method="POST">
<label for="Ime">Ime</label>
        <input type="text" name="Ime" placeholder="Unesite vase ime" minlength="3"> <br>
        <label for="Prezime">Prezime</label>
        <input type="text" name="Prezime" placeholder="Unesite vase prezime" minlength="3"> <br>
        <label for="JMBG">JMBG</label>
        <input type="text"name="Index" placeholder="Unesite vas JMBG" minlength="3"><br>
        <input type="submit" value="Posalji">

</body>
</html>