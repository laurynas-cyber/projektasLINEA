<header>
            <!--<div id="headeris"> --> 
                <div id="container">
                    <a href="../../../html/index.php" class="logo">LINEA</a>
                    <p class="veikla">Interjero ir apdailos medžiagos</p>
                </div>
                <div class="nav" id="alljs">
                    <ul id="navigacija" >
                        <div class="apie">
                            <li class="none" id="apie"><i class="fa fa-plus" aria-hidden="true"></i><a class="new3">APIE MUS</a></li>
                            <ul id="dropdown-menu">
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/apie.php">APIE ĮMONĘ</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/karjera.php">KARJERA</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/partneriai/partneriai.php">PARTNERIAI</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/remiame.php">MES REMIAME</a></li>
                            </ul>
                        </div>
                        <li class="none" id="move"><a class="new3"   href="../../../html/naujienos.php">NAUJIENOS</a></li>
                        <div class="apie" >
                            <li class="none" id="produkcija"><i class="fa fa-plus" aria-hidden="true"></i><a class="new3">PRODUKCIJA</a></li>
                            <ul id="dropdown-menu">
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/plyteles.php">PLYTELĖS</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/xxl.php">XXL PLYTELĖS</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/mozaikos.php">MOZAIKA</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/parketas.php">PARKETLENTĖS</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/kilimai.php">KILIMINĖ DANGA</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/PVC.php">PVC DANGA</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/terasos.php">TERASOS</a></li>
                                            <li><i class="fas fa-chevron-right"></i><a href="../../../html/produkcija/fasadai.php">FASADAI IR FASADO APDAILA</a></li>
                            </ul>
                        </div> 
                        <li class="none"><a class="new3" href="../../../html/produkcija/specialus.php">SPECIALŪS PASIŪLYMAI</a></li>
                        <li class="none"><a class="new3" href="../../../html/partneriai/partneriai.php">PARTNERIAI</a></li>
                        <li class="none"><a class="new3" href="../../../html/kontaktai.php">KONTAKTAI</a></li>
                        
                    </ul>
                    <ul id="responsive_nav">
<!--                        <li><a href=""><i class="fas fa-search"></i></a></li>-->
                        <div id="line3"></div>
                        <li id="meniu">MENIU </li> <!-- pachekint burgeris -->
                        <li><i class="fas fa-bars" id="burger"></i></li>
                    </ul>
                </div>
    </header>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#burger').click(function(){
            $('#navigacija').toggleClass('active')
        })
    })
</script>