<?php 
    $faq= [
      [
          'Come state implementando la recente decisione della Corte di giustizia dellUnione europea (CGUE) relativa al diritto alloblio?' => 'La recente decisione della Corte di giustizia dellUnione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.

          Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dellindividuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
          
          Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei daccordo con la nostra valutazione, puoi rivolgerti all autorità garante per la protezione dei dati personali nel tuo paese.
          
          Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
          
          Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.
          '
          
      ]    
    ];
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Google FAQ</title>
</head>
<body>

<header>
    <div class="header-container">
        <div class="privacy">
            <div class="privacy-logo">
                <h4>Google Privacy e termini</h4>
            </div>
            <div class="icone">
                <div class="menu-icona"><i class="fas fa-bars"></i></div>
                <div class="account-icona">
                    <img src="img/account.png" alt="img#1">
                </div>
            </div>
        </div>
        <nav>
               <ul>
                   <li>
                       <a href="#">Introduzione</a>
                   </li>
                   <li>
                       <a href="#">Norme sulla privacy</a>
                   </li>
                   <li>
                       <a href="#">Termini di servizio</a>
                   </li>
                   <li>
                       <a href="#">Tecnologie</a>
                   </li>
                   <li>
                       <a class="active" href="#">Domande Frequenti</a>
                   </li>
               </ul>
           </nav>

    </div>
</header>
<main>
    <div class="main-container">
        <div class="single-faq">
            <?php foreach($faq as $single_faq){ ?>
                  <?php foreach($single_faq as $question => $answer){ ?>
            <h3><?php echo $question; ?></h3>
            <p><?php echo $answer; ?></p>

<?php }?>
<?php }?>

        </div>
</main>

<footer>
    <div class="footer-container">
      
    </div>
</footer>



</body>
</html>





