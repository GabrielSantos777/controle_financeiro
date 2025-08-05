<?php

$recepcao = [
  [
    "user" => "Usuário",
    "mensagem" => "bom ver você de volta!",
    "foto" => "/img/foto_perfil.png"
  ],
];

$cards = [
  "card" =>
  [
    "0" =>
    [
      "titulo" => "Saldo",
      "valor" => "$ 5.000,00",
      "porcentagem" => "+50%",
      "color_porcent" => "#0ab948",
      "icone" => "account_balance_wallet",
    ],
    "1" =>
    [
      "titulo" => "Despesas",
      "valor" => "$ 500,00",
      "porcentagem" => "+30%",
      "color_porcent" => "#0ab948",
      "icone" => "query_stats",
    ],
    "2" =>
    [
      "titulo" => "Gastos",
      "valor" => "$ 1.200,00",
      "porcentagem" => "-30%",
      "color_porcent" => "#dc3545",
      "icone" => "trending_down",
    ],
    "3" =>
    [
      "titulo" => "Investimentos",
      "valor" => "$ 2.500,00",
      "porcentagem" => "+20%",
      "color_porcent" => "#0ab948",
      "icone" => "assessment",
    ]
  ],
  "gastos" =>
  [
    "obrigatorio" => "$ 2.500,00",
    "extra" => "$ 1.000,00"
  ]
];

$gastos = [

  [
    "icone" => "cottage",
    "color_porcent" => "#a844ff",
    "porcentagem" => "22",
    "title" => "Moradia",
  ],

  [
    "icone" => "local_grocery_store",
    "color_porcent" => "#e6f518ff",
    "porcentagem" => "0",
    "title" => "Supermercado",
  ],

  [
    "icone" => "water_drop",
    "color_porcent" => "#157aecff",
    "porcentagem" => "2",
    "title" => "Água",
  ],
  [
    "icone" => "flash_on",
    "color_porcent" => "#27ec15ff",
    "porcentagem" => "4",
    "title" => "Luz",
  ],

  [
    "icone" => "propane_tank",
    "color_porcent" => "#757575ff",
    "porcentagem" => "2",
    "title" => "Gás",
  ],
  [
    "icone" => "receipt_long",
    "color_porcent" => "#149660ff",
    "porcentagem" => "0",
    "title" => "IPTU",
  ],

  [
    "icone" => "child_friendly",
    "color_porcent" => "#15d5dbff",
    "porcentagem" => "3",
    "title" => "Ravi",
  ],

  [
    "icone" => "baby_changing_station",
    "color_porcent" => "#ac14daff",
    "porcentagem" => "8",
    "title" => "Babá",
  ],

  [
    "icone" => "auto_stories",
    "color_porcent" => "#da3c14ff",
    "porcentagem" => "3",
    "title" => "Auto escola",
  ],

  [
    "icone" => "auto_stories",
    "color_porcent" => "#da3c14ff",
    "porcentagem" => "3",
    "title" => "Faculdade",
  ],

  [
    "icone" => "attach_money",
    "color_porcent" => "#dacd14ff",
    "porcentagem" => "8",
    "title" => "Investimento Mensal",
  ],

  [
    "icone" => "credit_card",
    "color_porcent" => "#14da1eff",
    "porcentagem" => "28",
    "title" => "Cartão de Crédito",
  ],

  [
    "icone" => "network_wifi",
    "color_porcent" => "#059985ff",
    "porcentagem" => "2",
    "title" => "Internet",
  ],

  [
    "icone" => "live_tv",
    "color_porcent" => "#990505ff",
    "porcentagem" => "2",
    "title" => "Netflix",
  ],

  [
    "icone" => "headphones",
    "color_porcent" => "#055199ff",
    "porcentagem" => "1",
    "title" => "Spotify",
  ],

  [
    "icone" => "security",
    "color_porcent" => "#250599ff",
    "porcentagem" => "1",
    "title" => "Preservativo",
  ],

  [
    "icone" => "favorite",
    "color_porcent" => "#993b05ff",
    "porcentagem" => "0",
    "title" => "Remedio Ansiedade",
  ],

  [
    "icone" => "content_cut",
    "color_porcent" => "#990505ff",
    "porcentagem" => "2",
    "title" => "Barbearia",
  ],

  [
    "icone" => "face_3",
    "color_porcent" => "#990580ff",
    "porcentagem" => "1",
    "title" => "Sombrancelha",
  ],

  [
    "icone" => "back_hand",
    "color_porcent" => "#8d1b2eff",
    "porcentagem" => "1",
    "title" => "Pedicure",
  ],

  [
    "icone" => "bakery_dining",
    "color_porcent" => "#daa636ff",
    "porcentagem" => "1",
    "title" => "Padaria",
  ],

  [
    "icone" => "wifi_calling",
    "color_porcent" => "#760599ff",
    "porcentagem" => "1",
    "title" => "Internet (Natália)",
  ],

  [
    "icone" => "face_2",
    "color_porcent" => "#990505ff",
    "porcentagem" => "4",
    "title" => "Gastos (Natália)",
  ],

  [
    "icone" => "face",
    "color_porcent" => "#0d9fb9ff",
    "porcentagem" => "4",
    "title" => "Gastos (Gabriel)",
  ],

  [
    "icone" => "hardware",
    "color_porcent" => "#b9430dff",
    "porcentagem" => "4",
    "title" => "Muro",
  ],

];

usort($gastos, function ($a, $b) {
  return $b['porcentagem'] - $a['porcentagem'];
});
