<?php
    $ouvrage=[
        ["codeO"=>"A00", "titre"=>"JJBA", "date_edition"=>"1987", "auteur"=>"Araki"],
        ["codeO"=>"A01", "titre"=>"JJBA-BT", "date_edition"=>"1990", "auteur"=>"Araki"],
        ["codeO"=>"A02", "titre"=>"JJBA-SC", "date_edition"=>"1995", "auteur"=>"Araki"]
    ];

    $auteur=[
        ["nom_auteur"=>"Araki", "prenom_auteur"=>"Hirohiko", "profession"=>"mangaka", "nbre_ouvrage"=>8],
        ["nom_auteur"=>"Oda", "prenom_auteur"=>"Eichiro", "profession"=>"mangaka", "nbre_ouvrage"=>10],
        ["nom_auteur"=>"Kurumada", "prenom_auteur"=>"Masami", "profession"=>"mangaka", "nbre_ouvrage"=>4]
    ];

    $exemplaire=[
        ["codeEx"=>"A00-001", "nom"=>"JJBA", "date_enr"=>"1987", "etat"=>"bon", "disponibilite"=>"oui"],
        ["codeEx"=>"A00-002", "nom"=>"JJBA", "date_enr"=>"1987", "etat"=>"bon", "disponibilite"=>"oui"],
        ["codeEx"=>"A01-001", "nom"=>"JJBA-BT", "date_enr"=>"1990", "etat"=>"deteriore", "disponibilite"=>"non"]
    ];

    $demande=[
        ["codeO"=>"DE001", "titre"=>"JJBA-SC", "nom_adherent"=>"Wan", "auteur"=>"Araki", "date"=>"2020", "status"=>"accepte"],
        ["codeO"=>"DE002", "titre"=>"One Piece", "nom_adherent"=>"MarcO", "auteur"=>"Oda", "date"=>"2020", "status"=>"refuse"],
        ["codeO"=>"DE003", "titre"=>"Pkmn", "nom_adherent"=>"Wan", "auteur"=>"Satoshi", "date"=>"2021", "status"=>"accepte"]
    ];

    $pret=[
        ["nom_adherent"=>"Wan", "codeEx"=>"DE005", "titre"=>"Pkmn-XYZ", "auteur"=>"Satoshi", "date_retour_prevu"=>"2022", "date_retour_reel"=>"2021", "status"=>"a l'heure"],
        ["nom_adherent"=>"MarcO", "codeEx"=>"DE015", "titre"=>"JJBA-SBR", "auteur"=>"Araki", "date_retour_prevu"=>"2021", "date_retour_reel"=>"2021", "status"=>"a l'heure"]
    ]

    $rayon=[
        ["codeR"=>"RA001", "nom_rayon"=>"Manga"],
        ["codeR"=>"RA002", "nom_rayon"=>"Manwha"],
        ["codeR"=>"RA003", "nom_rayon"=>"BD-US"]
    ]

?>