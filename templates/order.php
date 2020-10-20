<section id="section-order">
    <div class="container container-order">
        <h1>ORDER</h1>
        <form action="index.php?location=orderTreatment" method="POST">
            <h4>CHOOSE YOUR MEAL</h4>
            <div class="row">
                <select name="meal">
                    <option value="1">CHEF'S LASAGNA</option>
                </select>
            </div>
            <h4>WRITE YOUR DETAILS</h4>
            <div class="row">
                <input type="text" name="name" placeholder="YOUR NAME">
                <input type="text" name="phone" placeholder="YOUR PHONE">
            </div>
            <h4>CHOOSE YOUR SCHEDULE</h4>
            <div class="row">
                <input type="date" name="date">
                <input type="time" min="11:00" max="21:30" step="300" name="hour" value="19:00">
            </div>
            <input class="button" type="submit" value="ORDER">
        </form>
    </div>
</section>