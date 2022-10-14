<section id="foodWrapper">
    <div id="foodTitle">
        <h1>Create Food Item</h1>
        <p>Generate a food item to be placed in the game world!</p>
        <p>Choose die for effect, and target for effect. when choosing anything other than 1d4, 
            item must have a (-)effect in a die one size smaller. <em>(ex. "Mega Gulp Filled with Red Bull +1d8[buff] MUST have -1d6[debuff])</em>
        </p>
        <p>
            Buff and Debuff effects are active for 1 hour.
            Restorative gains like health and mana are treated as healing.
            Healing does not go away after the 1 hour mark.
        </p> 
    </div>
    <section>
    <form action="action/createfood.act.php" method="POST">
       
        <input type="text" name="foodName" placeholder="Neverending Gobstopper" />
        <input type="text" name="foodFlavorText" placeholder="The candy made by that creepy guy on the Wonka movies" />
        <input type="text" name="foodBuff" placeholder="+1d8 hp" />
        <input type="text" name="foodBuffStat" placeholder="str" />
        <input type="text" name="foodDebuff" placeholder="-1d6" />
        <input type="text" name="foodDebuffStat" placeholder="not req for +1d4 mods!" />
        <br>
        <button type="submit" name="createFood_submit">Create Food!</button>
    </form>
    
</section>