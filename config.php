<?php
// Beveiliging: dit bestand geeft alleen antwoord op een POST-aanvraag
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    $correcteCode = "3772";
    $doelLocatie = "http://10.170.28.142";

    if (isset($input['code']) && $input['code'] === $correcteCode) {
        echo json_encode(['success' => true, 'url' => $doelLocatie]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Code onjuist']);
    }
    exit;
}
?>
