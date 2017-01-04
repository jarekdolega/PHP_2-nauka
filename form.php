        <form method="post" action="userdata.php">
            <input type="radio" name="sex" value="m" required>Pan</input> <input type="radio" name="sex" value="k">Pani</input>*<br/>
            <input  type="text" name="firstname" placeholder="Imię" required></input>*<br/>
            <input  type="text" name="lastname" placeholder="Nazwisko" required></input>*<br/>
            <input  type="email" name="email" placeholder="E-mail" required></input>*<br/>
            <input  type="password" name="password" placeholder="Hasło" required></input>*<br/>
            <input  type="password" name="repeatpassword" placeholder="Powtórz hasło" required></input>*<br/>
            <input  type="text" name="city" placeholder="Miasto"></input><br/>
            <input  type="tel" name="phone" placeholder="Telefon"></input><br/>
            <input  type="text" name="url" placeholder="Strona WWW"></input><br/>
            <p>* - pole wymagane</p>
            <input  type="submit" value="Zapisz"></input>
            <input  type="reset" value="Wyczyść"></input><br/>
        </form>
