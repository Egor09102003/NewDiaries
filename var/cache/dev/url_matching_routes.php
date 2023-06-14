<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'blind', '_controller' => 'App\\Controller\\BlindController::index'], null, null, null, false, false, null]],
        '/api/v1/carrier/list' => [[['_route' => 'api_v1_carriers_list', '_controller' => 'App\\Controller\\Api\\V1\\CarrierInfoController::getCarriersList', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/carrier/sync' => [[['_route' => 'api_v1_carriers_sync', '_controller' => 'App\\Controller\\Api\\V1\\CarrierInfoController::loadCarriersList', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/comments/linked' => [[['_route' => 'api_v1_linked', '_controller' => 'App\\Controller\\Api\\V1\\CommentsController::linked', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/comments/list' => [[['_route' => 'api_v1_list', '_controller' => 'App\\Controller\\Api\\V1\\CommentsController::list', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/epicker' => [[['_route' => 'api_v1_e_picker', '_controller' => 'App\\Controller\\Api\\V1\\EPickerController::index', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/memory' => [[['_route' => 'api_v1_memory', '_controller' => 'App\\Controller\\Api\\V1\\MemoriesController::listMemories', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/techniques' => [[['_route' => 'api_v1_techniques', '_controller' => 'App\\Controller\\Api\\V1\\MemoriesController::listTechniques', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/practice_info' => [[['_route' => 'api_v1_practice_info', '_controller' => 'App\\Controller\\Api\\V1\\MemoriesController::getPractice', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/memory/add' => [[['_route' => 'api_v1_memories_add', '_controller' => 'App\\Controller\\Api\\V1\\MemoriesController::addMemory', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/memory/update' => [[['_route' => 'api_v1_memories_update', '_controller' => 'App\\Controller\\Api\\V1\\MemoriesController::updateMemory', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/memory/delete' => [[['_route' => 'api_v1_memories_delete', '_controller' => 'App\\Controller\\Api\\V1\\MemoriesController::deleteMemory', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/success/notes' => [[['_route' => 'api_v1_notes_dairy_of_success', '_controller' => 'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::list', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/success/notes/add' => [[['_route' => 'api_v1_success_notes_add', '_controller' => 'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::addNote', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/success/notes/update' => [[['_route' => 'api_v1_success_notes_update', '_controller' => 'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::updateNote', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/success/notes/delete' => [[['_route' => 'api_v1_success_notes_delete', '_controller' => 'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::deleteNote', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/gratitude/notes' => [[['_route' => 'api_v1_gratitude_notes', '_controller' => 'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::list', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/gratitude/notes/add' => [[['_route' => 'api_v1_gratitude_notes_add', '_controller' => 'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::addNote', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/gratitude/notes/update' => [[['_route' => 'api_v1_gratitude_notes_update', '_controller' => 'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::updateNote', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/dairies/gratitude/notes/delete' => [[['_route' => 'api_v1_gratitude_notes_delete', '_controller' => 'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::deleteNote', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/place/autocomplete' => [[['_route' => 'api_v1_place_autocomplete', '_controller' => 'App\\Controller\\Api\\V1\\PlaceController::autocomplete', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/place/details' => [[['_route' => 'api_v1_place_get_by_id', '_controller' => 'App\\Controller\\Api\\V1\\PlaceController::getPlace', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/place/address' => [[['_route' => 'api_v1_place_get_by_address', '_controller' => 'App\\Controller\\Api\\V1\\PlaceController::getPlaceByAddress', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/place/coordinates' => [[['_route' => 'api_v1_place_get_by_coordinates', '_controller' => 'App\\Controller\\Api\\V1\\PlaceController::getPlaceByCoordinates', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/place/parseIATA' => [[['_route' => 'api_v1_parse_iata', '_controller' => 'App\\Controller\\Api\\V1\\PlaceController::parseIATA', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/search/trips' => [[['_route' => 'trips_search', '_controller' => 'App\\Controller\\Api\\V1\\SearchController::searchTrip', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/search/users' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\Api\\V1\\SearchController::search', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/skills/list' => [[['_route' => 'app_skills', '_controller' => 'App\\Controller\\Api\\V1\\SkillsController::index', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/sync' => [[['_route' => 'api_v1_app_sync', '_controller' => 'App\\Controller\\Api\\V1\\SyncController::sync', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/trip/details' => [[['_route' => 'api_v1_trip_details', '_controller' => 'App\\Controller\\Api\\V1\\TripDetailsController::index', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/trips/list' => [[['_route' => 'api_v1_trips_list', '_controller' => 'App\\Controller\\Api\\V1\\TripsListController::index', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/user/register' => [[['_route' => 'api_v1_user_register', '_controller' => 'App\\Controller\\Api\\V1\\UserController::register', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/user/login' => [[['_route' => 'api_v1_user_login', '_controller' => 'App\\Controller\\Api\\V1\\UserController::login', '_format' => 'json'], null, ['GET' => 0], null, false, false, null]],
        '/api/v1/user/profile' => [[['_route' => 'api_v1_user_profile', '_controller' => 'App\\Controller\\Api\\V1\\UserProfileController::userProfile', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/user/profile/recover' => [[['_route' => 'api_v1_user_profile_recover', '_controller' => 'App\\Controller\\Api\\V1\\UserProfileController::userProfileRecover', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/user/profile/check' => [[['_route' => 'api_v1_user_profile_check', '_controller' => 'App\\Controller\\Api\\V1\\UserProfileController::userProfileCheck', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/user/profile/update' => [[['_route' => 'api_v1_user_profile_update', '_controller' => 'App\\Controller\\Api\\V1\\UserProfileController::userProfileUpdate', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/user/profile/update/avatar' => [[['_route' => 'api_v1_user_profile_update_avatar', '_controller' => 'App\\Controller\\Api\\V1\\UserProfileController::userProfileUpdateAvatar', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/user/profile/delete' => [[['_route' => 'api_v1_user_delete', '_controller' => 'App\\Controller\\Api\\V1\\UserProfileController::deleteUser', '_format' => 'json'], null, null, null, false, false, null]],
        '/api/v1/users/list' => [[['_route' => 'api_v1_users_list', '_controller' => 'App\\Controller\\Api\\V1\\UsersListController::index', '_format' => 'json'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/v1/image/([^/]++)(*:64)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [
            [['_route' => 'api_v1_get_image', '_controller' => 'App\\Controller\\Api\\V1\\FileManagerController::getImage', '_format' => 'json'], ['img'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
