# TRACCIA
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

## Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php.

## Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale

## Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.

## Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

# Flow
- Creare una form su index.php
- Chiedere a utente lunghezza della password e inviare dato tramite GET
- Creare sullo stesso file una funzione per generare una password casuale
    - Scrivere una variabile stringa con valore stringa vuota per la password
    - Scrivere una variabile stringa con tutti i caratteri (lettere minuscole, maiuscole, numeri e simboli vari)
    - Ciclare per tutta la lunghezza - scelta dall'utente - della password
        - A ogni iterazione, concatenare un elemento random appartenente alla stringa con tutti i caratteri