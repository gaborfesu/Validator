<h1>Töltse ki a mezőket!</h1>
<form action="submit-student" method="post">

{{@csrf_field()}}

<p>
    Név: <input type="text" name="name" placeholder="Név" > 
</p>

<p>
    Ár: <input type="text" name="email" placeholder="ár" > 
</p>

<p>
    Cikkszám: <input type="text" name="phone" placeholder="Cikkszám" > 
</p>

<p>
    <button type="submit">Küldés</button>
</p>

</form>