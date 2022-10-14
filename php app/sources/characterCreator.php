<section id="createCharacter">
    <div id="characterBuilder">
        <h1>Character Builder</h1>
        <p>Build your character with this handy tool!</p>
        <form action="action/createCharacter.act.php">
        <div id="formSec">
            <h3>Character Name</h3>
            <p>(People call you this)</p>
            <input type="text" name="charName" />
            
            <h3>Character Title</h3>
            <p>(Royalty? Nickname?)</p>
            <input type="text" name="charTitle" />

            <h3>Age</h3>
            <p>(In "whatever" years)</p>
            <input type="text" name="charAge" />
            
        </div>
        <div id="formSec2">
        
            <h3>Character Origin Planet</h3>
            <p>(Where were you born?)</p>
           <select name="charPlanet">
                    <option value="earth">Earth</option>
                    <option value="fillory">Fillory</option>
            </select>
            
            <h3>Character Race</h3>
            <p>(Select the SUPREME choice!)</p>
            <select name="charRace">
                    <option value="human">Human</option>
                    <option value="vampire">Vampire</option>
                    <option value="werewolf">Werewolf</option>
                    <option value="librarian">Librarian</option>
                    <option value="fillorian">Fillorian</option>
                    <option value="fairie">Fairie</option>
                    <option value="talking_animal">Talking Animal</option>
                    <option value="tradesman">Tradesman</option>
            </select>
            
            <h3>Flaws</h3>
            <p>(This is kind of important)</p>
            <input type="text" name="charFlaw" />
        </div>
        <div id="formSec3">
            <h3>Magical Aptitude</h3>
            <p>(Do you got moxy, kid?!)</p>
            <select name="charAptitude">
                <option value="magician">Magician</option>
                <option value="hedge_witch">Hedge Witch</option>
                <option value="muggle">Muggle</option>
                <option value="magic_train">With Magical Training</option>
                <option value="magic_born">Born With Magic</option>
            </select>
            
            <h3>Character Class</h3>
            <p>(This is kind of important)</p>
            <input type="text" name="characterTitle" />
            
            <h3>Character Class</h3>
            <p>(This is kind of important)</p>
            <input type="text" name="characterDiscipline" />
        </div>
        <div id="stats">
            <h1>STATS</h1>
            <section>
                <div id="hpBlock">
                    <div id="tempHpBlock">
                        <h4>Max HP: 30</h4>
                        <p>Temporary HP: 0</p>
                        <p>Max MP: 12</p>
                        <p>Temporary MP: 0</p>
                    </div>
                    <div id="statBlock">
                        <h3>CHA: <?php echo "datass" ?></h3>
                        <h3>DEX: 19</h3>
                        <h3>INT: 19</h3>
                        <h3>STR: 19</h3>
                        <h3>WIS: 19</h3>
                    </div>

                    <div id="skillBlock">
                        <div id="skills">
                            <h4>Acrobatics</h4>
                            <h4>Animal Handling</h4>
                            <h4>Athletic</h4>
                            <h4>Bluff</h4>
                            <h4>Histor</h4>
                            <h4>Insight</h4>
                            <h4>Intimidation</h4>
                            <h4>Investigation</h4>
                        </div>
                        <div id="skills">
                            <h4>Library Use</h4>
                            <h4>Medicine</h4>
                            <h4>Nature</h4>
                            <h4>Perception</h4>
                            <h4>Religion</h4>
                            <h4>Sleight of Hand</h4>
                            <h4>Stealth</h4>
                            <h4>Street Smarts</h4>
                        </div>
                    </div>
                    <button type="submit" name="character_create_submit">Create!</button>
                </div>
                
            </section>
            
        </div>

        </form>
    </div>

</section>