<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api_landing_page', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'api_quote', '_controller' => 'App\\Controller\\ApiController::quote'], null, null, null, false, false, null]],
        '/books' => [[['_route' => 'book_list', '_controller' => 'App\\Controller\\BookController::list'], null, null, null, false, false, null]],
        '/books/new' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::new'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_start', '_controller' => 'App\\Controller\\DeckController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'show_deck', '_controller' => 'App\\Controller\\DeckController::showDeck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\DeckController::shuffleCards'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_deck_draw', '_controller' => 'App\\Controller\\DeckController::drawCard'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_delete', '_controller' => 'App\\Controller\\DeckController::delete'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session_debug', '_controller' => 'App\\Controller\\DeckController::session'], null, null, null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'App\\Controller\\DiceGameController::home'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'App\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init_post', '_controller' => 'App\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'App\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'App\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'App\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/game' => [[['_route' => 'card_game', '_controller' => 'App\\Controller\\GameController::game'], null, null, null, false, false, null]],
        '/game/info' => [[['_route' => 'card_game_info', '_controller' => 'App\\Controller\\GameController::gameInfo'], null, null, null, false, false, null]],
        '/game/play' => [[['_route' => 'card_game_start', '_controller' => 'App\\Controller\\GameController::play'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/game/draw' => [[['_route' => 'draw_card', '_controller' => 'App\\Controller\\GameController::drawCard'], null, ['POST' => 0], null, false, false, null]],
        '/game/stand' => [[['_route' => 'stand', '_controller' => 'App\\Controller\\GameController::stand'], null, ['POST' => 0], null, false, false, null]],
        '/game/new' => [[['_route' => 'new_game', '_controller' => 'App\\Controller\\GameController::newGame'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'IndexTwig', '_controller' => 'App\\Controller\\IndexTwig::number'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\IndexTwig::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\IndexTwig::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\IndexTwig::lucky'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'landingpage', '_controller' => 'App\\Controller\\LibraryController::libraryLanding'], null, null, null, false, false, null]],
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'product_show_all', '_controller' => 'App\\Controller\\ProductController::showAllProduct'], null, null, null, false, false, null]],
        '/product/view' => [[['_route' => 'product_view_all', '_controller' => 'App\\Controller\\ProductController::viewAllProduct'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/book/([^/]++)(?'
                    .'|(*:219)'
                    .'|/(?'
                        .'|edit(*:235)'
                        .'|delete(*:249)'
                    .')'
                .')'
                .'|/card/deck/draw/([^/]++)(*:283)'
                .'|/game/pig/test/(?'
                    .'|roll/(\\d+)(*:319)'
                    .'|dicehand/(\\d+)(*:341)'
                .')'
                .'|/product/(?'
                    .'|show/(?'
                        .'|([^/]++)(*:378)'
                        .'|min/([^/]++)(*:398)'
                    .')'
                    .'|delete/([^/]++)(*:422)'
                    .'|update/([^/]++)/([^/]++)(*:454)'
                    .'|view/([^/]++)(*:475)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        219 => [[['_route' => 'book_show', '_controller' => 'App\\Controller\\BookController::show'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        283 => [[['_route' => 'draw_cards', '_controller' => 'App\\Controller\\DeckController::drawCards'], ['number'], null, null, false, true, null]],
        319 => [[['_route' => 'test_roll_num_dices', '_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        341 => [[['_route' => 'test_dicehand', '_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num'], null, null, false, true, null]],
        378 => [[['_route' => 'product_by_id', '_controller' => 'App\\Controller\\ProductController::showProductById'], ['id'], null, null, false, true, null]],
        398 => [[['_route' => 'product_by_min_value', '_controller' => 'App\\Controller\\ProductController::showProductByMinimumValue'], ['value'], null, null, false, true, null]],
        422 => [[['_route' => 'product_delete_by_id', '_controller' => 'App\\Controller\\ProductController::deleteProductById'], ['id'], null, null, false, true, null]],
        454 => [[['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id', 'value'], null, null, false, true, null]],
        475 => [
            [['_route' => 'product_view_minimum_value', '_controller' => 'App\\Controller\\ProductController::viewProductWithMinimumValue'], ['value'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
