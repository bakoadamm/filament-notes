<?php

return [
    "title" => "Jegyzetek",
    "single" => "Jegyzet",
    "group" => "",
    "pages" => [
        "groups" => "Jegyzet csoportok kezelése",
        "status" => "Jegyzet státuszok kezelése"
    ],
    "columns" => [
        "title" => "Cím",
        "body" => "Tartalom",
        "date" => "Dátum",
        "time" => "Idő",
        "is_pined" => "Kitűzött",
        "is_public" => "Publikus",
        "icon" => "Ikon",
        "background" => "Háttér",
        "border" => "Keret",
        "color" => "Szín",
        "font_size" => "Betűszín",
        "font" => "Betű típus",
        "group" => "Csoport",
        "status" => "Státusz",
        "user_id" => "Felhasználó ID",
        "user_type" => "Felhasználó típus",
        "model_id" => "Model ID",
        "model_type" => "Model Típus",
        "created_at" => "Létrehozva",
        "updated_at" => "Szerkesztve"
    ],
    "tabs" => [
        "general" => "Általános",
        "style" => "Stílus"
    ],
    "actions" => [
        "view" => "Megtekintés",
        "edit" => "Szerkesztés",
        "delete" => "Törlés",
        "notify" => [
            "label" => "Felhasználó értesítése",
            "notification" => [
                "title" => "Értesítés kiküldve",
                "body" => "Az értesítés sikeresen kiküldésre került."
            ]
        ],
        "share" => [
            "label" => "Jegyzet megosztása",
            "notification" => [
                "title" => "Jegyzet megosztó link létrehozva",
                "body" => "A jegyzet megosztásához a link létrejött és a vágólapra másolásra került"
            ]
        ],
        "user_access" => [
            "label" => "Felhasználó hozzáférés",
            "form" => [
                "model_id" => "Felhasználók",
                "model_type" => "Felhasználó típus",
            ],
            "notification" => [
                "title" => "Felhasználó hozzáférése mentve",
                "body" => "A felhasználó hozzáférését sikeresen mentetted."
            ]
        ],
        "checklist"=> [
            "label" => "Teendőlista hozzáadása",
            "form" => [
                "checklist"=> "Teendőlista"
            ],
            "state" => [
                "done" => "Kész",
                "pending" => "Folyamatban"
            ],
            "notification" => [
                "title" => "Checklist Updated",
                "body" => "The checklist has been updated.",
                "updated" => [
                    "title" => "Checklist Item Updated",
                    "body" => "The checklist item has been updated."
                ],
            ]
        ]
    ],
    "notifications" => [
        "edit" => [
            "title" => "Jegyzet frissítve",
            "body" => "A jegyzetet sikeresen frissítetted."
        ],
        "delete" => [
            "title" => "Jegyzet törölve",
            "body" => "A jegyzetet sikeresen törölted."
        ]
    ]
];
