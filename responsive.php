<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre compte</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <head class="text-5xl text-center mt-10">BANQUE <span class="text-red-600 font-bold"> HSBC</span></head>
    <head class="text-5xl text-center mt-10">BIENVENUE<span class="text-red-600 font-bold"> MARIE LAMBERT</span></head>
    <a href="responsive.php">site</a>
    <body>
        <section>
            <button> 
                <a href="index.html"> Déconnexion</a>
            </button>
        </section>
    </body>
<body>
    <style type="text/css">
        body{
            background-image: url("back2.jpeg"
                 );
            background-size: cover;    
        }        
    </style>
    <header>
        <h1 class="text-5xl text-center mt-5">VOTRE PORTEFEUILLE </h1>
    </header>

    </header>
    <h1 class="texte-black text-center mb-2">vous etes sur un compte bloqué veuillez vous acquitter des frais de conservation s'élevant maintenant a <span class="text-red-600 font-bold">15000$</span></h1>
    <main>
        <section class="mt-12">
            <div class="grid grid-cols-2 gap-4 w-9/12 mx-auto text-white">
                <div class="bg-red-500 p-10 rounded-2xl ">
                    <h3 class="text-2xl mb-2">NOM: LAMBERT</h3>
                    <h3 class="text-2xl mb-2">PRENOM: Marie</h3>
                    <h3 class="text-2xl mb-2">Numero de compte: 1086754639</h3>
                    <h3 class="text-2xl mb-2">Iban: CAN7 0ES87 043 143864Y</h3>
                </div>
        </section>
    </main>
    <main>
        <section class="mt-12">
            <div class="grid grid-cols-2 gap-4 w-9/12 mx-auto text-white">
                <div class="bg-red-500 p-10 rounded-2xl ">
                    <h3 class="text-2xl mb-2">CODE BANQUE: 2309</h3>
                    <h3 class="text-2xl mb-2">CODE AGENCE: 5643</h3>
                    <h3 class="text-2xl mb-2">CODE SWIFT: HSBCYTOOBBB</h3>
                    <h3 class="text-2xl mb-2">CLE RIB: 56</h3>
                </div>
        </section>
    </main>
    <main>
        <section class="mt-10">
            <div class="grid grid-cols-3 gap-4 w-9/12 mx-auto text-white">
                <div class="bg-yellow-500 p-10 rounded-2xl ">
                    <h1 class="text-2xl">RETRAITS</h1>
                    <h1 class="text-4xl>$<span id="withdraw-balance">0000000</span> </h1>
                 </div>
                <div class="bg-green-500 p-10 rounded-2xl ">
                    <h1 class="text-2xl">DEPOT</h1>
                    <h1 class="text-4xl>$<span id="deposit-balance">1900000</span></h1>
                </div>
                
                 <div class="bg-teal-500 p-10 rounded-2xl ">
                    <h1 class="text-2xl">SOLDE</h1>
                    <h1 class="text-4xl">$<span id="total-balance">1898000</span> </h1>
                 </div>
                
            </div>
        </section>
        <section class="mt-12">
            <div class="grid grid-cols-2 gap-4 w-9/12 mx-auto text-white">
                <div class="bg-red-500 p-10 rounded-2xl ">
                    <h3 class="text-2xl mb-2">Veuillez retirer</h3>
                        <input id="withdraw-amount" class="w-9/12 px-2 block mb-3 rounded text-black" type="text" placeholder="$ retirer votre montant">
                        <button id="btn-retirer" class="bg-yellow-400 px-8 py-2 text-white rounded hover:bg-sky-700">retirer</button>
                </div>
                <div class="bg-blue-500 p-10 rounded-2xl ">
                    <h3 class="text-2xl mb-2">Veuille deposer</h3>
                        <input id="deposit-amount" class="w-9/12 px-2 block mb-3 rounded text-black" type="text" placeholder="$ deposer votre montant">
                        <button id="btn-deposer" class="bg-yellow-400 px-8 py-2 text-white rounded hover:bg-red-700">Deposer</button>
                </div>
                 </div>
                
            </div>
        </section>
    </main>
    <script src="js/bank.js"></script>
    <body>
        <marquee behavior="alternate" direction="right">
        <head> 
            <div id="heure"> </div>
        </head>
        <script src="date.js"></script>
        </marquee>
       
    </body>
 </body> 
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>