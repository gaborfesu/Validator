<h1>Töltse ki a mezőket!</h1>
<form action="submit-student" method="post">

{{@csrf_field()}}

<p>
    Név: <input type="text" name="name" placeholder="Név" > 
</p>

<p>
    Email: <input type="text" name="email" placeholder="Email" > 
</p>

<p>
    Telefon: <input type="text" name="phone" placeholder="Telefonszám" > 
</p>

<p>
    <button type="submit">Küldés</button>
</p>

</form>