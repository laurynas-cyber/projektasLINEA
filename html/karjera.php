



<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karjera</title>
    <link rel="stylesheet" href="../css/headnfoot.css">
    <link rel="stylesheet" href="../css/karjera.css">

    
    <link rel="stylesheet" href="../fontawesome-free-5.11.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('../src/header.php');
    
    ?>
    
     <div id="white">
        <div id="go">
            <h1>Karjera</h1>
            <div id="line"></div>
            <p>Mes nuolat ieškome darbuotojų, siekiančių realizuoti save juos dominančiose srityse. Norite dirbti profesionalioje komandoje? Norite dirbti su stipriausiais Europos apdailos medžiagų gamintojais?</p>
            <p>Atsiųskite savo gyvenimo aprašymą bei motyvacijos laišką el. paštu arba užpildykite žemiau pateiktą anketą ir užsiregistruokite mūsų duomenų bazėje – rengiant atranką darbo vietai, atitinkančiai Jūsų reikalavimus, mes būtinai su jumis susisieksime!</p>
            <form class="forma" action="karjera.php" method="post">
                            
                                <p class="name">Vardas*</p>
                                <input type="text" name="vardas" placeholder="" required/>
                           
                    
                                <p class="name">Pavardė*</p>
                                <input type="text" name="pavarde" placeholder="" required/>
            
                                    
                                <p class="name">Gimimo metai*</p>
                                <input type="text" name="metai" placeholder="" required/>
                                    
                        
                                <p class="name">Kontaktinis tel. nr.*</p>
                                <input type="tel" name="telefonas" placeholder="" required/>
                                    
                
                                <p class="name">Adresas</p>
                                <input type="" name="adress" placeholder=""/>
                                
                            
                                <p class="name">El. pašto adresas*</p>
                                <input type="mail" name="email" placeholder="" required/>
                                
                            
                                <p class="name">Išsilavinimas (įrašyti įstaigos pavadinimą, baigimo metus bei įgytą kvalifikaciją)*</p>
                                <textarea name="message2" rows="10" cols="30" required></textarea>
                                    
                                    
                                <p class="name">Turima darbo patirtis (įrašyti įmonės pavadinimą, darbo laiką, pareigas)*</p>
                                 <textarea type="text2" name="message" rows="10" cols="30" required></textarea>

                
                                <p class="name">Kodėl norėtumėte dirbti Linea?</p>
                                 <textarea type="" name="" rows="10" cols="30"></textarea>
                                
                               <!-- <input type="file" name="failas"> -->
                            <button name="submit" type="submit" id="contact-submit">Siųsti</button>
                        </form>
     
        </div>
    </div>
            <?php include('../src/footer.php');
    ?>
    <?php
    require __DIR__ . '/../app/src/app.php';
?>
</body>
</html>
