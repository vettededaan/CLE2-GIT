<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="css/animate.css" type="text/css" rel="stylesheet"/>
        <link rel="shortcut icon" type="image/png" href="images/favi_dg.png"/>
        <title>DG | Digital Creative Agency | Prototype-sessie</title>
    </head>
    <body>
        <div id="container">

            <div class="header-wrap">
                <div class="header">
                    <div class="logo">
                        <img src="images/logo-dg.png">
                        <p class="intro">Creative Digital Agency</p>
                        <p class="outro">Full Service Bureau voor Digitale Groei</p>
                    </div>
                </div>
            </div>

            <div class="information-wrap">
                <div class="information">
                    <p class="bold">Eerst zien, dan geloven! Wij laten vooraf – vrijblijvend – zien wat we kunnen betekenen.</p>
                    <p class="bold">In Prototype Sessie presenteren we onze visie en een werkend prototype van uw website of -applicatie.</p>

                    <div class="left-info">
                        <p class="bold">Waarom een Prototype Sessie?</p>
                        <div class="separator"></div>
                        <p>Het selecteren van een business partner voor de ontwikkeling en implementatie
                            van uw Digitale Strategie is lastig. Zelfs met een zorgvuldig samengestelde
                            shortlist en een helder geformuleerd ‘Request for Proposal’ blijkt er in de praktijk
                            toch nog te vaak op onderbuikgevoel geselecteerd te worden.</p><br>

                        <p>Bij DG denken we dat dit anders kan – en moet! Om die reden laten wij u
                            graag <span class="bold">vooraf</span> zien wat we kunnen betekenen. In het DG|Creative Lab nodigen we u daarom
                            graag uit voor een Prototype Sessie.</p>

                    </div>

                    <div class="right-info">
                        <p class="bold">Wat is een Prototype Sessie?</p>
                        <div class="separator"></div>
                        <p>Op basis van een intake inventariseren we uw project. We vragen naar doelstellingen,
                            doelgroep, positionering, grafische richtlijnen en beschikbare referentie-projecten.
                            Vervolgens gaan onze designers, developers en marketeers aan de slag. Het resultaat
                            is een werkend Prototype van uw website/applicatie of campagne.</p><br>

                        <p>Tijdens de 2-uur durende Prototype Sessie presenteren we de visie van DG op het project
                            en de roadmap die we hebben gevolgd om te komen van Digitale Strategie naar Prototype.</p>

                    </div>
                </div>
            </div>

            <div class="form-wrap">
                <div class="form">
                    <form action="reservation.php" method="post">
                        <div class="left">
                            <label>Voor- en achternaam</label><br>
                            <input type="text" name="fullname"/>
                        </div>
                        <div class="right">
                            <label>E-mailadres</label><br>
                            <input type="email" name="email"/>
                        </div>
                        <div class="left">
                            <label>Bedrijfsnaam</label><br>
                            <input type="text" name="company"/>
                        </div>
                        <div class="right">
                            <label>Telefoonnummer</label><br>
                            <input type="number" name="phone"/>
                        </div>
                        <div class="left">
                            <label>Datum</label><br>
                            <input type="date" name="date"/>
                        </div>
                        <div class="right timestamp">
                            <label>Tijdsblok</label><br>
                                <select>
                                    <option value="12:00">12:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="16:00">16:00</option>
                                </select>
                        </div>
                        <div class="left">
                            <label>Website bedrijf</label><br>
                            <input type="text" name="website"/>
                        </div>
                        <div class="agreed">
                            <label>Toestemming gegevensverwerking</label><p></p>
                            <input type="checkbox" name="checkbox" value="akkoord" class="inner-agreed">Ja, ik ga geef toestemming.<br/>
                            <p class="info-agreed">Met het invullen van deze gegevens geef ik toestemming aan DG Inernetbureau om mijn gegevens te verwerken,
                                op de manier zoals beschreven is in de privacyverklaring.</p>
                        </div>
                        <div class="button left">
                            <input type="submit" value="Verzenden"/>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>