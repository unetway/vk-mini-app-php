<?php

namespace Unetway\VkMiniApp;

class Messages
{

    const VK_IS_APP_USER = [
        '0' => 'приложение не установлено',
        '1' => 'приложение установлено',
    ];

    const VK_ARE_NOTIFICATIONS_ENABLED = [
        '0' => 'отправка уведомлений запрещена',
        '1' => 'отправка уведомлений разрешена',
    ];

    const VK_LANGUAGE = [
        'ru' => 'русский',
        'ua' => 'украинский',
        'en' => 'английский',
        'be' => 'белорусский',
        'kz' => 'казахский',
        'pt' => 'португальский',
        'es' => 'испанский',
    ];

    const VK_REF = [
        'catalog_recent' => 'категория недавних',
        'catalog_favourites' => 'категория избранных',
        'catalog_recommendation' => 'категория рекомендуемых',
        'catalog_top_dau' => 'категория популярных',
        'catalog_entertainment' => 'категория развлечений',
        'catalog_communication' => 'категория общение',
        'catalog_tools' => 'категория инструментов',
        'catalog_shopping' => 'категория покупок',
        'catalog_events' => 'категория мероприятий',
        'catalog_education' => 'категория образование',
        'catalog_payments' => 'категория оплаты услуг',
        'catalog_finance' => 'категория финансов',
        'catalog_food' => 'категория еды и напитков',
        'catalog_health' => 'категория красоты и здоровья',
        'catalog_travel' => 'категория путешествий',
        'catalog_taxi' => 'категория такси',
        'catalog_jobs' => 'категория работы в каталоге',
        'catalog_realty' => 'категория недвижимости',
        'catalog_business' => 'категория бизнеса',
        'catalog_lifestyle' => 'категория образа жизни',
        'catalog_admin' => 'категория созданных',

        'board_topic_all' => 'превью обсуждения',
        'board_topic_view' => 'внутренний экран',

        'feed' => 'первый таб с лентой',
        'feed_post' => 'по ссылке без сниппета внутри поста',
        'feed_comments' => 'из комментариев',

        'featuring_discover' => 'дискавери выдача',
        'featuring_menu' => 'дискавери меню',
        'featuring_new' => 'фичеринг во втором табе',

        'fave' => 'общий список',
        'fave_links' => 'список ссылок',
        'fave_posts' => 'список постов',

        'group' => 'со стены сообщества',
        'group_menu' => 'из меню сообщества [Android]',
        'group_messages' => 'из сообщений',
        'group_addresses' => 'адрес сообщества',

        'snippet_post' => 'переход из сниппета поста',
        'snippet_im' => 'переход из сниппета в личных сообщениях',

        'clips' => 'из экрана клипов [iOS]',
        'comments_list_clip' => 'из комментариев к клипу [Android]',

        'im' => 'превью чата',
        'im_chat' => 'внутри чата',

        'notifications' => 'внешний экран уведомлений',
        'notifications_grouped' => 'экран сгрупированных уведомлений',

        'profile' => 'из профиля',
        'article_read' => 'из статьи',
        'music_playlist' => 'из музыкального плейлиста',
        'video_carousel' => 'из видео [iOS]',
        'photo_browser' => 'из поста после нативного просмотрщика [iOS]',
        'shopping_center' => 'из ленты товаров [iOS]',
        'market_item' => 'из экрана товара',
        'story${user_id}_${params}' => 'переход из стикера истории',
        'widget' => 'переход из второй вкладки приложения',
        'home_screen' => 'запуск с главного экрана устройства (Android)',
        'left_nav' => 'переход из левого меню на вебе',
        'quick_search' => 'результаты быстрого поиска',
        'menu' => 'переход из недавних через пятый таб в мобильном вебе',
        'other' => 'прочие переходы',

    ];
    
    const VK_VIEWER_GROUP_ROLE = [
        'admin' => 'администратор или создатель сообщества',
        'editor' => 'редактор сообщества',
        'member' => 'участник сообщества',
        'moder' => 'модератор сообщества',
        'none' => 'не состоит в сообществе',
    ];
	
    const VK_PLATFORM = [
        'desktop_web' => 'браузерная (десктопная) версия',
        'mobile_android' => 'официальное приложение для Android',
        'mobile_android_messenger' => 'мобильный мессенджер для Android',
        'mobile_ipad' => 'официальное приложение для iPad',
        'mobile_iphone' => 'официальное приложение для iPhone',
        'mobile_iphone_messenger' => 'мобильный мессенджер для iPhone',
        'mobile_web' => 'браузерная (мобильная) версия',
    ];

    const VK_IS_FAVORITE = [
        '0' => 'приложение не добавлено в избранное',
        '1' => 'приложение добавлено в избранное',
    ];

}