<?php

$apiKey = 'zULNq5xxHmH1bzvcL2yPSjFrlA1dD2XPJLwrYBvpvaW2HI8eUuo';          // Ключ доступа к API
$offer_id = 4627;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = 'EZyFvDYw';     // id потока
$landKey = '7fe8f6f78e94e9a30a48b6178045f54f';

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"22985":{"id":22985,"currency":{"code":"RUB","name":"\u0440\u0443\u0431"},"name":"Fugicar FC8 \u0437\u0435\u0440\u043a\u0430\u043b\u043e \u0431\u043e\u0440\u0442\u043e\u0432\u043e\u0439 \u043a\u043e\u043c\u043f\u044c\u044e\u0442\u0435\u0440","price2":"3980","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"price":"1990"}}';
$dataOffer = '{"id":22985,"currency":{"code":"RUB","name":"\u0440\u0443\u0431"},"name":"Fugicar FC8 \u0437\u0435\u0440\u043a\u0430\u043b\u043e \u0431\u043e\u0440\u0442\u043e\u0432\u043e\u0439 \u043a\u043e\u043c\u043f\u044c\u044e\u0442\u0435\u0440","price2":"3980","country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"price":"1990"}';
$is_geo_detect = '';
$productName = 'Fugicar FC8 зеркало бортовой компьютер';
$invoice = 'index.php';
$push_link = '';
$language = 'ru';
$companyInfo = array('address' => '443016, САМАРСКАЯ ОБЛАСТЬ, г. САМАРА, ул. 22 ПАРТСЪЕЗДА, д. 45, пом. 527', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ТРЕЙД" ОГРН: 1206300013480 ИНН: 6319245278 КПП: 631901001');
$companyInfoEN = array('address' => '129090, Moscow, pereulok Zhivarev, house 8, stroenie 3, flat 16 email: ostrov.prodazh@mail.com Skype: ostrov.prodazh@mail.com', 'detail' => 'OOO "OSTROV PRODAZH" OGRN: 1197746695530 VAT: 7708365555');

$_debug = False; // установите True для вывода дополнительной информации для отладки и поиска ошибок
$pixels = [
    'fb_pixel', 'google_pixel', 'google_adw_pixel', 'tiktok_pixel', 'topmail_pixel', 'vk_pixel', 'yandex_metrika'
];

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
