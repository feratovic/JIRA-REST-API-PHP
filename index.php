
<!DOCTYPE html>
<html>
    <head>
        <style>


input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1.5px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 10%;
  background-color: #2A6190;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #19386D;
}

input[type=date] {
    width: 11%;
  padding: 8px 14px;
  margin: 8px 0;
  display: inline-block;
  border: 1.5px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=file] {
    width: 21%;
  padding: 8px 14px;
  margin: 8px 0;
  display: inline-block;
  border: 1.5px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
span{
    font-size: 20px;
}
img{
float : right;
width : 500px;
border: 1.5px solid #ccc;
  border-radius: 4px;
}
</style>
    <head>
<body>
<h1>KREIRANJE ISSUEA</h1>
<img src="visol.gif" alt="visol-logo">

<form method="post" action="jir.php">
 <span> Summary : </span><br> <input  type="text" name="summary"><br><br>
<span> Description : </span> <br> <input type="text" name="description"> <br><br>
<span> Priority : </span>  <br>  <Select name="priority">
  <option value="Highest">Highest</option>
  <option value="High">High</option>
  <option value="Medium">Medium</option>
  <option value="Low">Low</option>
  </select> <br><br>
  <span> Due date </span><br> <input type="date" name="date"> <br><br>
  <span> Attach file : </span><br> <input type="file" name="file"><br><br>
  <input type="submit" name='submit' value="Dodaj">
</form>

</body>
</html>