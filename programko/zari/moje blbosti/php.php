<?php
session_start();

$cards = [["Kdo napsal román Na cestě?", "Jack Kerouac"], ["Které dílo patří Sartrovi?", "Nevolnost"], ["Kdo je hlavní postavou Kdo chytá v žitě?", "Holden Caulfield"], ["Který autor napsal Cizince?", "Albert Camus"], ["Co je absurdita v existencialismu?", "Pocit nesmyslnosti světa a života"], ["Kdo napsal Hlava XXII?", "Joseph Heller"], ["Který autor je spojen s dirty realism?", "Charles Bukowski"], ["Co je personifikace?", "Přenesení lidských vlastností na neživé věci"], ["Které dílo napsal Kurt Vonnegut?", "Jatka č. 5"], ["Co je oxymóron?", "Spojení významově protikladných slov"], ["Kdo napsal Sophiinu volbu?", "William Styron"], ["Co je typické pro Beat Generation?", "Odmítání konvencí a hledání svobody"], ["Které dílo patří Johnu Updikovi?", "Čarodějky z Eastwicku"], ["Co je mezní situace?", "Situace ohrožení, smrti nebo zásadní volby"], ["Kdo napsal Mor?", "Albert Camus"], ["Co je metafora?", "Přenesené pojmenování na základě podobnosti"], ["Kdo napsal Svět podle Garpa?", "John Irving"], ["Co znamená autenticita?", "Žít podle sebe a vlastních rozhodnutí"], ["Které dílo patří Jacquesi Prévertovi?", "Slova"], ["Co je hyperbola?", "Zveličení"], ["Kdo napsal Mouchy?", "Jean-Paul Sartre"], ["Které dílo patří Sartrovi?", "Zeď"], ["Která trojice děl patří Camusovi?", "Cizinec, Mor, Caligula"], ["Co je hlavním tématem existencialismu?", "Svoboda, odpovědnost a existence člověka"], ["Co znamená věta „Člověk je odsouzen k svobodě“?", "Člověk se musí rozhodovat a nést odpovědnost"], ["Kde byl existencialismus výrazně rozšířen?", "Ve Francii"], ["Kdy se existencialismus výrazně rozvíjel?", "30.–60. léta 20. století"], ["Co je typické pro existencialistickou postavu?", "Prožívá úzkost a řeší vlastní svobodu"], ["Co znamená odcizení?", "Pocit izolace a oddělenosti od světa či společnosti"], ["Kdo byl hlavním představitelem existencialismu?", "Jean-Paul Sartre"], ["Který autor je silně spojen s tématem absurdity?", "Albert Camus"], ["Jak se jmenuje hlavní postava Cizince?", "Meursault"], ["Co symbolizuje mor v Camusově románu Mor?", "Zlo, utrpení a absurditu"], ["Kdo je Sal Paradise?", "Postava z Na cestě"], ["Kdo je Dean Moriarty?", "Salův přítel z Na cestě"], ["Kde se odehrává putování v Na cestě?", "Napříč USA"], ["Který autor je považován za mluvčího Beat Generation?", "Jack Kerouac"], ["Čím byla Beat Generation ovlivněna?", "Jazzem a zenovým buddhismem"], ["Co chtěli beatnici?", "Žít naplno, být svobodní a odmítat konvence"], ["Které hnutí Beat Generation později ovlivnila?", "Hippies a kontrakulturu 60. let"], ["Jaké téma je typické pro Salingera?", "Dospívání a odcizení"], ["Kolik let je Holdenovi Caulfieldovi?", "16"], ["Proč Holden opouští školu?", "Je vyloučen"], ["Jaký jazyk používá Kdo chytá v žitě?", "Hovorový jazyk, slang a vulgarismy"], ["Co je typické pro Bukowského tvorbu?", "Alkohol, sex, vulgarity a drsná realita"], ["Co znamená dirty realism?", "Drsný realismus zaměřený na obyčejný život"], ["Které dílo napsal Bukowski?", "Všechny řitě světa i ta má"], ["Který autor napsal Čarodějky z Eastwicku?", "John Updike"], ["Kolik hlavních žen je v Čarodějkách z Eastwicku?", "Tři"], ["Jak se jmenuje tajemný muž v Čarodějkách z Eastwicku?", "Darryl Van Horne"], ["Které téma řeší Čarodějky z Eastwicku?", "Svobodu, sexualitu a morálku"], ["Co je nový žurnalismus?", "Styl reportáže kombinující publicistiku s literárními postupy"], ["Kdo je spojen s novým žurnalismem?", "Norman Mailer"], ["Který autor napsal Americký sen?", "Norman Mailer"], ["Co je hlavním tématem Sophiiny volby?", "Válka, trauma a tragická volba"], ["Které dílo napsal John Irving?", "Pravidla moštárny"], ["Které dílo napsal Kurt Vonnegut?", "Mechanické piano"], ["Jaké prvky jsou typické pro Vonneguta?", "Černý humor, absurdita a protiválečné motivy"], ["Co znamená Hlava XXII?", "Absurdní začarovaný kruh, ze kterého není úniku"], ["Kdo je Yossarian?", "Hlavní postava Hlava XXII"], ["Kde se odehrává děj Hlava XXII?", "Na italské frontě za 2. světové války"], ["Co je přirovnání?", "Porovnání pomocí slov jako, jak apod."], ["Co je ironie?", "Výrok často znamená opak doslovného významu"], ["Co je eufemismus?", "Zjemnění nepříjemného výrazu"], ["Co je slang?", "Výrazy typické pro určitou skupinu"], ["Co je vulgarismus?", "Hrubý nebo sprostý výraz"], ["Co je ich-forma?", "Vyprávění v 1. osobě"], ["Co je er-forma?", "Vyprávění ve 3. osobě"], ["Co je proud vědomí?", "Zachycení toku myšlenek a pocitů postavy"], ["Co je autobiografický prvek?", "Prvek založený na autorových vlastních zkušenostech"], ["Co je kontrast?", "Postavení protikladů vedle sebe"], ["Co je symbol?", "Obraz nebo předmět s hlubším významem"], ["Který autor napsal dílo Slova?", "Jacques Prévert"], ["Jaký byl vztah Préverta k literárním směrům?", "Byl ovlivněn surrealismem a existencialismem"], ["Který autor odmítl Nobelovu cenu za literaturu?", "Jean-Paul Sartre"], ["Které tvrzení nejlépe vystihuje existencialismus?", "Člověk si svou podstatu vytváří svými volbami"]];

$questions = [
["Kdo napsal román Na cestě?", ["Jack Kerouac","J. D. Salinger","Albert Camus","Joseph Heller"], 0],
["Které dílo patří Sartrovi?", ["Cizinec","Nevolnost","Na cestě","Hlava XXII"], 1],
["Kdo je hlavní postavou Kdo chytá v žitě?", ["Yossarian","Sal Paradise","Holden Caulfield","Meursault"], 2],
["Který autor napsal Cizince?", ["Albert Camus","Jean-Paul Sartre","Charles Bukowski","Kurt Vonnegut"], 0],
["Co je absurdita v existencialismu?", ["Zveličení","Pocit nesmyslnosti světa a života","Druh rýmu","Vyprávění v 1. osobě"], 1],
["Kdo napsal Hlava XXII?", ["Joseph Heller","Kurt Vonnegut","Norman Mailer","John Irving"], 0],
["Který autor je spojen s dirty realism?", ["Charles Bukowski","Jacques Prévert","Jean-Paul Sartre","William Styron"], 0],
["Co je personifikace?", ["Zveličení","Přenesení lidských vlastností na neživé věci","Protiklad","Zjemnění"], 1],
["Které dílo napsal Kurt Vonnegut?", ["Jatka č. 5","Sophiina volba","Čarodějky z Eastwicku","Mouchy"], 0],
["Co je oxymóron?", ["Spojení významově protikladných slov","Zveličení","Slang","Proud myšlenek"], 0],
["Kdo napsal Sophiinu volbu?", ["William Styron","John Updike","Norman Mailer","John Irving"], 0],
["Co je typické pro Beat Generation?", ["Odmítání konvencí a hledání svobody","Návrat k rytířským románům","Pouze náboženská literatura","Výhradně historické romány"], 0],
["Které dílo patří Johnu Updikovi?", ["Čarodějky z Eastwicku","Slova","Zeď","Mor"], 0],
["Co je mezní situace?", ["Běžný školní den","Situace ohrožení, smrti nebo zásadní volby","Druh metafory","Literární forma"], 1],
["Kdo napsal Mor?", ["Albert Camus","Jean-Paul Sartre","Jack Kerouac","Charles Bukowski"], 0],
["Co je metafora?", ["Přenesené pojmenování na základě podobnosti","Hrubé slovo","Zjemnění","Protiklad"], 0],
["Kdo napsal Svět podle Garpa?", ["John Irving","Norman Mailer","Joseph Heller","William Styron"], 0],
["Co znamená autenticita?", ["Žít podle sebe a vlastních rozhodnutí","Mluvit pouze spisovně","Používat vulgarismy","Přehánět"], 0],
["Které dílo patří Jacquesi Prévertovi?", ["Slova","Nevolnost","Na cestě","Jatka č. 5"], 0],
["Co je hyperbola?", ["Zveličení","Protiklad","Lidská vlastnost věci","Zjemnění"], 0],
["Kdo napsal Mouchy?", ["Jean-Paul Sartre","Albert Camus","Jack Kerouac","Joseph Heller"], 0],
["Které dílo patří Sartrovi?", ["Zeď","Mor","Slova","Sophiina volba"], 0],
["Která trojice děl patří Camusovi?", ["Cizinec, Mor, Caligula","Nevolnost, Zeď, Mouchy","Na cestě, Slova, Mor","Hlava XXII, Mor, Cizinec"], 0],
["Co je hlavním tématem existencialismu?", ["Svoboda, odpovědnost a existence člověka","Příroda a romantická láska","Historie antického Řecka","Pouze sociální satira"], 0],
["Co znamená věta „Člověk je odsouzen k svobodě“?", ["Člověk si nemůže vybrat nic","Člověk se musí rozhodovat a nést odpovědnost","Člověk je bez odpovědnosti","Člověk je předem určen osudem"], 1],
["Kde byl existencialismus výrazně rozšířen?", ["Ve Francii","V Japonsku","V Austrálii","V Brazílii"], 0],
["Kdy se existencialismus výrazně rozvíjel?", ["30.–60. léta 20. století","18. století","70.–90. léta 19. století","21. století"], 0],
["Co je typické pro existencialistickou postavu?", ["Prožívá úzkost a řeší vlastní svobodu","Nikdy se nerozhoduje","Je vždy šťastná","Řídí se výhradně společenskými pravidly"], 0],
["Co znamená odcizení?", ["Pocit izolace a oddělenosti od světa či společnosti","Radost z cestování","Používání nářečí","Zveličování"], 0],
["Kdo byl hlavním představitelem existencialismu?", ["Jean-Paul Sartre","Jack Kerouac","John Irving","Norman Mailer"], 0],
["Který autor je silně spojen s tématem absurdity?", ["Albert Camus","John Updike","J. D. Salinger","William Styron"], 0],
["Jak se jmenuje hlavní postava Cizince?", ["Meursault","Holden Caulfield","Yossarian","Dean Moriarty"], 0],
["Co symbolizuje mor v Camusově románu Mor?", ["Zlo, utrpení a absurditu","Romantickou lásku","Školní život","Americký sen"], 0],
["Kdo je Sal Paradise?", ["Postava z Na cestě","Postava z Cizince","Postava z Hlava XXII","Postava ze Sophiiny volby"], 0],
["Kdo je Dean Moriarty?", ["Salův přítel z Na cestě","Holdenův učitel","Hellerův voják","Camusův lékař"], 0],
["Kde se odehrává putování v Na cestě?", ["Napříč USA","Pouze v Paříži","V Itálii","V Praze"], 0],
["Který autor je považován za mluvčího Beat Generation?", ["Jack Kerouac","Jean-Paul Sartre","William Styron","John Updike"], 0],
["Čím byla Beat Generation ovlivněna?", ["Jazzem a zenovým buddhismem","Gotikou a rytířskými eposy","Barokem","Antickou tragédií"], 0],
["Co chtěli beatnici?", ["Žít naplno, být svobodní a odmítat konvence","Dodržovat všechny společenské konvence","Psát pouze na objednávku","Vyhýbat se cestování"], 0],
["Které hnutí Beat Generation později ovlivnila?", ["Hippies a kontrakulturu 60. let","Romantismus","Klasicismus","Realismus 19. století"], 0],
["Jaké téma je typické pro Salingera?", ["Dospívání a odcizení","Antické války","Přírodní lyrika","Středověká historie"], 0],
["Kolik let je Holdenovi Caulfieldovi?", ["16","25","30","12"], 0],
["Proč Holden opouští školu?", ["Je vyloučen","Dostane stipendium","Odjede na dovolenou","Škola zanikne"], 0],
["Jaký jazyk používá Kdo chytá v žitě?", ["Hovorový jazyk, slang a vulgarismy","Výhradně archaický jazyk","Pouze odborný jazyk","Pouze nářečí"], 0],
["Co je typické pro Bukowského tvorbu?", ["Alkohol, sex, vulgarity a drsná realita","Rytířská čest","Pohádkové světy","Náboženské traktáty"], 0],
["Co znamená dirty realism?", ["Drsný realismus zaměřený na obyčejný život","Surrealistickou poezii","Historický román","Fantasy literaturu"], 0],
["Které dílo napsal Bukowski?", ["Všechny řitě světa i ta má","Na cestě","Caligula","Hlava XXII"], 0],
["Který autor napsal Čarodějky z Eastwicku?", ["John Updike","John Irving","Norman Mailer","Charles Bukowski"], 0],
["Kolik hlavních žen je v Čarodějkách z Eastwicku?", ["Tři","Dvě","Čtyři","Pět"], 0],
["Jak se jmenuje tajemný muž v Čarodějkách z Eastwicku?", ["Darryl Van Horne","Dean Moriarty","Sal Paradise","Yossarian"], 0],
["Které téma řeší Čarodějky z Eastwicku?", ["Svobodu, sexualitu a morálku","Válku v Evropě","Dospívání ve škole","Vojenskou byrokracii"], 0],
["Co je nový žurnalismus?", ["Styl reportáže kombinující publicistiku s literárními postupy","Druh poezie","Fantasy žánr","Typ dramatu"], 0],
["Kdo je spojen s novým žurnalismem?", ["Norman Mailer","Joseph Heller","J. D. Salinger","Jacques Prévert"], 0],
["Který autor napsal Americký sen?", ["Norman Mailer","John Irving","William Styron","Kurt Vonnegut"], 0],
["Co je hlavním tématem Sophiiny volby?", ["Válka, trauma a tragická volba","Jazz a cestování","Maloměšťáctví","Dospívání"], 0],
["Které dílo napsal John Irving?", ["Pravidla moštárny","Mor","Zeď","Slova"], 0],
["Které dílo napsal Kurt Vonnegut?", ["Mechanické piano","Nevolnost","Čarodějky z Eastwicku","Pohádky pro nehodné děti"], 0],
["Jaké prvky jsou typické pro Vonneguta?", ["Černý humor, absurdita a protiválečné motivy","Romantická idyla","Rytířské souboje","Pouze autobiografie"], 0],
["Co znamená Hlava XXII?", ["Absurdní začarovaný kruh, ze kterého není úniku","Druh básnického prostředku","Historickou smlouvu","Romantický vztah"], 0],
["Kdo je Yossarian?", ["Hlavní postava Hlava XXII","Hlavní postava Na cestě","Hlavní postava Cizince","Hlavní postava Sophiiny volby"], 0],
["Kde se odehrává děj Hlava XXII?", ["Na italské frontě za 2. světové války","V Paříži","V San Franciscu","V New Yorku"], 0],
["Co je přirovnání?", ["Porovnání pomocí slov jako, jak apod.","Zveličení","Protiklad","Přenesení lidské vlastnosti"], 0],
["Co je ironie?", ["Výrok často znamená opak doslovného významu","Zjemnění výrazu","Přirovnání","Slangový výraz"], 0],
["Co je eufemismus?", ["Zjemnění nepříjemného výrazu","Zveličení","Spojení protikladů","Proud vědomí"], 0],
["Co je slang?", ["Výrazy typické pro určitou skupinu","Hrubé výrazy","Spisovný jazyk","Básnická forma"], 0],
["Co je vulgarismus?", ["Hrubý nebo sprostý výraz","Přenesené pojmenování","Zjemnění","Protiklad"], 0],
["Co je ich-forma?", ["Vyprávění v 1. osobě","Vyprávění ve 3. osobě","Poezie","Drama"], 0],
["Co je er-forma?", ["Vyprávění ve 3. osobě","Vyprávění v 1. osobě","Proud vědomí","Metafora"], 0],
["Co je proud vědomí?", ["Zachycení toku myšlenek a pocitů postavy","Popis krajiny","Rozhovor dvou postav","Krátká báseň"], 0],
["Co je autobiografický prvek?", ["Prvek založený na autorových vlastních zkušenostech","Fiktivní kouzlo","Historická citace","Přímá řeč"], 0],
["Co je kontrast?", ["Postavení protikladů vedle sebe","Zveličení","Zjemnění","Slang"], 0],
["Co je symbol?", ["Obraz nebo předmět s hlubším významem","Pouze sprosté slovo","Druh rýmu","Chyba v textu"], 0],
["Který autor napsal dílo Slova?", ["Jacques Prévert","Albert Camus","Jean-Paul Sartre","Jack Kerouac"], 0],
["Jaký byl vztah Préverta k literárním směrům?", ["Byl ovlivněn surrealismem a existencialismem","Byl hlavně naturalista","Byl romantikem 19. století","Byl autorem sci-fi"], 0],
["Který autor odmítl Nobelovu cenu za literaturu?", ["Jean-Paul Sartre","Albert Camus","Jack Kerouac","John Irving"], 0],
["Které tvrzení nejlépe vystihuje existencialismus?", ["Člověk si svou podstatu vytváří svými volbami","Člověk je vždy předem určen osudem","Člověk nemá žádnou svobodu","Člověk nemůže nést odpovědnost"], 0],
];

if (!isset($_SESSION['quiz'])) {
    $quizQuestions = $questions;
shuffle($quizQuestions);
$quizQuestions = array_slice($quizQuestions, 0, 20);
foreach ($quizQuestions as &$qq) {
    $correctText = $qq[1][$qq[2]];
    shuffle($qq[1]);
    $qq[2] = array_search($correctText, $qq[1], true);
}
unset($qq);
$_SESSION['quiz'] = ['score'=>0, 'q'=>0, 'questions'=>$quizQuestions, 'answered'=>false, 'last'=>null];
}

if (isset($_POST['reset'])) {
    $quizQuestions = $questions;
shuffle($quizQuestions);
$quizQuestions = array_slice($quizQuestions, 0, 20);
foreach ($quizQuestions as &$qq) {
    $correctText = $qq[1][$qq[2]];
    shuffle($qq[1]);
    $qq[2] = array_search($correctText, $qq[1], true);
}
unset($qq);
$_SESSION['quiz'] = ['score'=>0, 'q'=>0, 'questions'=>$quizQuestions, 'answered'=>false, 'last'=>null];
    header("Location: ".$_SERVER['PHP_SELF']."?mode=quiz");
    exit;
}

if (isset($_POST['answer']) && !$_SESSION['quiz']['answered']) {
    $answer = (int)$_POST['answer'];
    $q = $_SESSION['quiz']['questions'][$_SESSION['quiz']['q']];
    $_SESSION['quiz']['answered'] = true;
    $_SESSION['quiz']['last'] = ($answer === $q[2]);
    if ($_SESSION['quiz']['last']) $_SESSION['quiz']['score']++;
}

if (isset($_POST['next'])) {
    $_SESSION['quiz']['q']++;
    $_SESSION['quiz']['answered'] = false;
    $_SESSION['quiz']['last'] = null;
}

$mode = $_GET['mode'] ?? 'home';
$qIndex = $_SESSION['quiz']['q'];
$finished = $qIndex >= count($_SESSION['quiz']['questions']);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Literatura Quiz</title>
<style>
*{box-sizing:border-box}
body{margin:0;font-family:Inter,system-ui,-apple-system,BlinkMacSystemFont,"Segoe UI",sans-serif;background:linear-gradient(135deg,#160b2b,#30115c 45%,#11162d);color:#fff;min-height:100vh}
.wrap{max-width:1050px;margin:auto;padding:30px 20px}
header{display:flex;justify-content:space-between;align-items:center;margin-bottom:25px}
.logo{font-size:24px;font-weight:900}.logo span{color:#b995ff}
.score{background:#ffffff12;border:1px solid #ffffff20;padding:10px 15px;border-radius:14px}
.card{background:#ffffff10;border:1px solid #ffffff1c;backdrop-filter:blur(14px);border-radius:26px;padding:35px;box-shadow:0 20px 70px #0004}
h1{font-size:clamp(32px,6vw,64px);margin:0 0 12px;line-height:1}
h2{font-size:32px;margin-top:0}
p{color:#ddd;line-height:1.6}
.buttons{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:15px;margin-top:25px}
button,.btn{border:0;border-radius:16px;padding:16px 20px;font-size:17px;font-weight:800;cursor:pointer;color:white;background:#7c4dff;transition:.15s;text-decoration:none;text-align:center;display:block}
button:hover,.btn:hover{transform:translateY(-2px);filter:brightness(1.1)}
.secondary{background:#ffffff12;border:1px solid #ffffff1d}
.progress{height:8px;background:#ffffff14;border-radius:10px;overflow:hidden;margin:15px 0 25px}
.progress div{height:100%;background:#b995ff}
.answers{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:25px}
.answer{background:#ffffff12;border:2px solid #ffffff18;text-align:left}
.answer.correct{background:#1fa463;border-color:#54e39a}
.answer.wrong{background:#b83250;border-color:#ff708c}
.answer.disabled{pointer-events:none;opacity:.85}
.result{text-align:center;padding:35px}.bigscore{font-size:70px;font-weight:900;color:#b995ff}
.flashcard{min-height:330px;display:flex;align-items:center;justify-content:center;text-align:center;cursor:pointer;perspective:1000px}
.flash-inner{width:100%;min-height:330px;display:flex;align-items:center;justify-content:center;padding:45px;border-radius:25px;background:linear-gradient(135deg,#7146d8,#a45eea);font-size:34px;font-weight:900;transition:.2s}
.flashcard:hover .flash-inner{transform:scale(1.01)}
.small{font-size:14px;color:#bbb}.tag{display:inline-block;background:#ffffff16;padding:7px 11px;border-radius:99px;margin-bottom:15px}
@media(max-width:700px){.answers{grid-template-columns:1fr}.card{padding:23px}.flash-inner{font-size:25px}}
</style>
</head>
<body>
<div class="wrap">
<header>
  <div class="logo">📚 <span>Literatura</span> Quiz</div>
  <?php if($mode==='quiz' && !$finished): ?><div class="score">⭐ <?= $_SESSION['quiz']['score'] ?> bodů</div><?php endif; ?>
</header>

<?php if($mode==='home'): ?>
<div class="card">
  <div class="tag">Existencialismus × Beat Generation</div>
  <h1>Umíš to na písemku?</h1>
  <p>Vyber si režim. Kartičky tě naučí pojmy a autoři, kvíz tě potom pořádně otestuje.</p>
  <div class="buttons">
    <a class="btn" href="?mode=cards">🃏 Kartičky</a>
    <a class="btn" href="?mode=quiz">🎯 Kahoot kvíz</a>
  </div>
</div>

<?php elseif($mode==='cards'): ?>
<div class="card">
  <div class="tag">🃏 Kartičky</div>
  <h2>Procvičování</h2>
  <p>Klikni na kartičku pro odhalení odpovědi. Všechny otázky z kvízu jsou zároveň v kartičkách a při načtení se náhodně zamíchají.</p>
  <div id="fc" class="flashcard" onclick="flipCard()">
    <div id="fcText" class="flash-inner">Načítám…</div>
  </div>
  <div class="buttons">
    <button class="secondary" onclick="prevCard()">← Předchozí</button>
    <button onclick="nextCard()">Další →</button>
  </div>
  <p class="small" id="counter"></p>
  <div class="buttons"><a class="btn secondary" href="?">← Menu</a><a class="btn" href="?mode=quiz">🎯 Jdu na kvíz</a></div>
</div>
<script>
const cards = <?= json_encode($cards, JSON_UNESCAPED_UNICODE) ?>;
cards.sort(() => Math.random() - 0.5);
let ci=0, flipped=false;
function renderCard(){
  flipped=false;
  document.getElementById('fcText').textContent=cards[ci][0];
  document.getElementById('counter').textContent=(ci+1)+" / "+cards.length;
}
function flipCard(){
  flipped=!flipped;
  document.getElementById('fcText').textContent=flipped?cards[ci][1]:cards[ci][0];
}
function nextCard(){ci=(ci+1)%cards.length;renderCard()}
function prevCard(){ci=(ci-1+cards.length)%cards.length;renderCard()}
renderCard();
</script>

<?php elseif($mode==='quiz'): ?>
<?php if($finished): ?>
<div class="card result">
  <div class="tag">🏆 Hotovo!</div>
  <h1>Výsledek</h1>
  <div class="bigscore"><?= $_SESSION['quiz']['score'] ?>/<?= count($_SESSION['quiz']['questions']) ?></div>
  <p>
    <?php
      $pct = $_SESSION['quiz']['score']/count($_SESSION['quiz']['questions'])*100;
      if($pct>=90) echo "🔥 Paráda! Na písemku jsi hodně dobře připravená.";
      elseif($pct>=70) echo "💪 Dobrá práce! Ještě si projdi chyby.";
      elseif($pct>=50) echo "📖 Něco už umíš, ale chce to ještě procvičit.";
      else echo "🧠 Nevadí — dej si kartičky a zkus kvíz znovu.";
    ?>
  </p>
  <div class="buttons">
    <form method="post"><button name="reset" value="1">🔄 Zkusit znovu</button></form>
    <a class="btn secondary" href="?mode=cards">🃏 Procvičit kartičky</a>
  </div>
</div>
<?php else:
$q=$_SESSION['quiz']['questions'][$qIndex];
$answered=$_SESSION['quiz']['answered'];
?>
<div class="card">
  <div class="tag">🎯 Otázka <?= $qIndex+1 ?> / <?= count($_SESSION['quiz']['questions']) ?></div>
  <div class="progress"><div style="width:<?= (($qIndex)/count($_SESSION['quiz']['questions']))*100 ?>%"></div></div>
  <h2><?= htmlspecialchars($q[0]) ?></h2>
  <form method="post" class="answers">
  <?php foreach($q[1] as $i=>$a):
    $cls='';
    if($answered && $i===$q[2]) $cls='correct';
    elseif($answered && isset($_POST['answer']) && $i===(int)$_POST['answer']) $cls='wrong';
    if($answered) $cls.=' disabled';
  ?>
    <button class="answer <?= $cls ?>" name="answer" value="<?= $i ?>" type="submit">
      <?= chr(65+$i) ?>. <?= htmlspecialchars($a) ?>
    </button>
  <?php endforeach; ?>
  </form>

  <?php if($answered): ?>
    <div style="margin-top:25px;text-align:center">
      <?php if($_SESSION['quiz']['last']): ?>
        <p>✅ <strong>Správně!</strong></p>
      <?php else: ?>
        <p>❌ <strong>Špatně.</strong> Správná odpověď je: <strong><?= htmlspecialchars($q[1][$q[2]]) ?></strong></p>
      <?php endif; ?>
      <form method="post"><button name="next" value="1">Další otázka →</button></form>
    </div>
  <?php endif; ?>
  <div class="buttons"><a class="btn secondary" href="?">← Menu</a><a class="btn secondary" href="?mode=cards">🃏 Kartičky</a></div>
</div>
<?php endif; ?>
<?php endif; ?>

</div>
</body>
</html>
