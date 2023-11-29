<?php
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Verifica se la query è "rana"
    if (strtolower($search_query) == "rana") {
        // Reindirizza l'utente a una pagina specifica quando la query è "rana"
        header("Location: schedarana.html");
        exit;
    }
    // Verifica se la query è "dorso"
 if (strtolower($search_query) == "dorso") {
        // Reindirizza l'utente a una pagina specifica quando la query è "dorso"
        header("Location: schedadorso.html");
        exit;
    } else {
        // Altrimenti, mostra un messaggio di nessun risultato
        echo "Nessun risultato trovato per la query: " . $search_query;
    }
if (strtolower($search_query) == "stile") {
        // Reindirizza l'utente a una pagina specifica quando la query è "dorso"
        header("Location: schedaperlostile.html");
        exit;
    } else {
        // Altrimenti, mostra un messaggio di nessun risultato
        echo "Nessun risultato trovato per la query: " . $search_query;
    }
if (strtolower($search_query) == "resistenza") {
        // Reindirizza l'utente a una pagina specifica quando la query è "dorso"
        header("Location: schedaresistenza.html");
        exit;
    } else {
        // Altrimenti, mostra un messaggio di nessun risultato
        echo "Nessun risultato trovato per la query: " . $search_query;
    }
   if (strtolower($search_query) == "velocità") {
        // Reindirizza l'utente a una pagina specifica quando la query è "dorso"
        header("Location: schedavelocità.html");
        exit;
    } else {
        // Altrimenti, mostra un messaggio di nessun risultato
        echo "Nessun risultato trovato per la query: " . $search_query;
    }
} else {
    echo "Nessuna query di ricerca specificata.";
}
?>