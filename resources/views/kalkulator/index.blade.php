<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<font color="red" > <h1><center>KALKULATOR SEDERHANA</center></h1></font>
   
</form>
<center>
<br>
<form action="{{ route('proses.store') }}" method="post">
        @csrf
<table border=1 width=400>
<tr>
    <td colspan=2><input type="number" name="a" id=""></td>
   
    <td colspan=2 rowspan=2><input type="submit" value="Reset" name="op"></td>
   
</tr>    
<tr>
    <td colspan=2><input type="number" name="b" id=""></td>
  
   
</tr>    
<tr>
    
    <td colspan=4>HASIL </td>
    
  
   
</tr>    
<tr>
    <td> <input type="submit" value="+" name="op"></td>
    <td>  <input type="submit" value="-" name="op"></td>
    <td><input type="submit" value="x" name="op"></td>
    <td> <input type="submit" value=":" name="op"></td>
</tr>    
<tr>
    <td colspan=4>
        Nama : Haggie Auberta <br>
        Kelas : XII PPLG 2
    </td>
   
</tr>    

</table>
</br>
</center>
</body>
<body>
    <center>
<font color="blue" ><h1>MENYALA ABANGKUHHHH!!!</h1></font>
</center>
</body>
</html>