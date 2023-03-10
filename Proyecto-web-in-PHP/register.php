<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./CSS (1)/MasterLogin.css">
        <title>Register | XD</title>
    </head>
    <body>
    <div class="form-register">
        <h1>Register Here</h1>
        <form>
            <input class="controls" type="text" name="paternal last name" id="paternal last name" placeholder="Enter your paternal last name">
            <input class="controls" type="text" name="maternal last name" id="maternal last name" placeholder="Enter your maternal last name">

            <input class="controls" type="text" name="name" id="name" placeholder="Enter your name(s)">

            <input class="controls" type="email" name="email" id="email" placeholder="Enter your email">

            <input class="controls" type="password" name="password" id="password" placeholder="Enter your password">

            <input class="controls" type="tel" name="phone" id="phone" placeholder="Enter your phone number">

            <div class="message"><label for="age">Enter your age</label></div>
            <input class="date" type="date">

            <div class="messages"><label for="country">Enter your country</label></div>
            <select class="controls" name="pais">
                <option value="México"selected>México</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Canadá">Canadá</option>
            </select>

            <div class="messages"><label for="country">Enter your state</label></div>
            <select class="controls" name="estado">
                <option value="Aguascalientes">Aguascalientes</option>
                <option value="Baja California">Baja California</option>
                <option value="Baja California Sur">Baja California Sur</option>
                <option value="Campeche">Campeche</option>
                <option value="Chiapas">Chiapas</option>
                <option value="Chihuahua">Chihuahua</option>
                <option value="CDMX">Ciudad de México</option>
                <option value="Coahuila">Coahuila</option>
                <option value="Colima">Colima</option>
                <option value="Durango">Durango</option>
                <option value="Estado de México">Estado de México</option>
                <option value="Guanajuato">Guanajuato</option>
                <option value="Guerrero">Guerrero</option>
                <option value="Hidalgo">Hidalgo</option>
                <option value="Jalisco">Jalisco</option>
                <option value="Michoacán">Michoacán</option>
                <option value="Morelos">Morelos</option>
                <option value="Nayarit">Nayarit</option>
                <option value="Nuevo León">Nuevo León</option>
                <option value="Oaxaca">Oaxaca</option>
                <option value="Puebla">Puebla</option>
                <option value="Querétaro">Querétaro</option>
                <option value="Quintana Roo">Quintana Roo</option>
                <option value="San Luis Potosí">San Luis Potosí</option>
                <option value="Sinaloa">Sinaloa</option>
                <option value="Sonora">Sonora</option>
                <option value="Tabasco">Tabasco</option>
                <option value="Tamaulipas">Tamaulipas</option>
                <option value="Tlaxcala">Tlaxcala</option>
                <option value="Veracruz">Veracruz</option>
                <option value="Yucatán">Yucatán</option>
                <option value="Zacatecas">Zacatecas</option>
            </select>

            <p>I agree with <a href="#">Terms and Conditions</a></p>

            <input class="botons" type="submit" value="Register">

            <p><a href="../Login/login.html">I already have an account!</a></p>
        </form>
    </div>

    </body>
</html>