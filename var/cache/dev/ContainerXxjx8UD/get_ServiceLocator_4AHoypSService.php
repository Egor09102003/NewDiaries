<?php

namespace ContainerXxjx8UD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4AHoypSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4AHoypS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4AHoypS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Api\\V1\\CommentsController::linked' => ['privates', '.service_locator.qlPge05', 'get_ServiceLocator_QlPge05Service', true],
            'App\\Controller\\Api\\V1\\CommentsController::list' => ['privates', '.service_locator.qlPge05', 'get_ServiceLocator_QlPge05Service', true],
            'App\\Controller\\Api\\V1\\EPickerController::index' => ['privates', '.service_locator.nDN9v99', 'get_ServiceLocator_NDN9v99Service', true],
            'App\\Controller\\Api\\V1\\MemoriesController::addMemory' => ['privates', '.service_locator.phRtbWN', 'get_ServiceLocator_PhRtbWNService', true],
            'App\\Controller\\Api\\V1\\MemoriesController::deleteMemory' => ['privates', '.service_locator.phRtbWN', 'get_ServiceLocator_PhRtbWNService', true],
            'App\\Controller\\Api\\V1\\MemoriesController::getPractice' => ['privates', '.service_locator.cG4CzQV', 'get_ServiceLocator_CG4CzQVService', true],
            'App\\Controller\\Api\\V1\\MemoriesController::listMemories' => ['privates', '.service_locator.cG4CzQV', 'get_ServiceLocator_CG4CzQVService', true],
            'App\\Controller\\Api\\V1\\MemoriesController::listTechniques' => ['privates', '.service_locator.cG4CzQV', 'get_ServiceLocator_CG4CzQVService', true],
            'App\\Controller\\Api\\V1\\MemoriesController::updateMemory' => ['privates', '.service_locator.phRtbWN', 'get_ServiceLocator_PhRtbWNService', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::addNote' => ['privates', '.service_locator.WnRVdSB', 'get_ServiceLocator_WnRVdSBService', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::deleteNote' => ['privates', '.service_locator.WnRVdSB', 'get_ServiceLocator_WnRVdSBService', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::list' => ['privates', '.service_locator.52EypX.', 'get_ServiceLocator_52EypX_Service', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::updateNote' => ['privates', '.service_locator.WnRVdSB', 'get_ServiceLocator_WnRVdSBService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::addNote' => ['privates', '.service_locator.vac2xkV', 'get_ServiceLocator_Vac2xkVService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::deleteNote' => ['privates', '.service_locator.ga9MdyX', 'get_ServiceLocator_Ga9MdyXService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::list' => ['privates', '.service_locator.FAv419z', 'get_ServiceLocator_FAv419zService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::updateNote' => ['privates', '.service_locator.ga9MdyX', 'get_ServiceLocator_Ga9MdyXService', true],
            'App\\Controller\\Api\\V1\\PlaceController::autocomplete' => ['privates', '.service_locator.7sFStOy', 'get_ServiceLocator_7sFStOyService', true],
            'App\\Controller\\Api\\V1\\PlaceController::getPlace' => ['privates', '.service_locator.77HBTzz', 'get_ServiceLocator_77HBTzzService', true],
            'App\\Controller\\Api\\V1\\PlaceController::getPlaceByAddress' => ['privates', '.service_locator.77HBTzz', 'get_ServiceLocator_77HBTzzService', true],
            'App\\Controller\\Api\\V1\\PlaceController::getPlaceByCoordinates' => ['privates', '.service_locator.77HBTzz', 'get_ServiceLocator_77HBTzzService', true],
            'App\\Controller\\Api\\V1\\PlaceController::parseIATA' => ['privates', '.service_locator.57ntt_G', 'get_ServiceLocator_57nttGService', true],
            'App\\Controller\\Api\\V1\\SearchController::search' => ['privates', '.service_locator.klyv6ER', 'get_ServiceLocator_Klyv6ERService', true],
            'App\\Controller\\Api\\V1\\SearchController::searchTrip' => ['privates', '.service_locator.klyv6ER', 'get_ServiceLocator_Klyv6ERService', true],
            'App\\Controller\\Api\\V1\\SkillsController::index' => ['privates', '.service_locator.ojsoGK2', 'get_ServiceLocator_OjsoGK2Service', true],
            'App\\Controller\\Api\\V1\\SyncController::sync' => ['privates', '.service_locator.CVQEb.g', 'get_ServiceLocator_CVQEb_GService', true],
            'App\\Controller\\Api\\V1\\TripDetailsController::index' => ['privates', '.service_locator.vfl2W.J', 'get_ServiceLocator_Vfl2W_JService', true],
            'App\\Controller\\Api\\V1\\TripsListController::index' => ['privates', '.service_locator.nAyOYtz', 'get_ServiceLocator_NAyOYtzService', true],
            'App\\Controller\\Api\\V1\\UserController::login' => ['privates', '.service_locator.5ZAmtr.', 'get_ServiceLocator_5ZAmtr_Service', true],
            'App\\Controller\\Api\\V1\\UserController::register' => ['privates', '.service_locator..aWpzqZ', 'get_ServiceLocator__AWpzqZService', true],
            'App\\Controller\\Api\\V1\\UserProfileController::deleteUser' => ['privates', '.service_locator.dY9IPtv', 'get_ServiceLocator_DY9IPtvService', true],
            'App\\Controller\\Api\\V1\\UserProfileController::userProfile' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileCheck' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileRecover' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileUpdate' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileUpdateAvatar' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UsersListController::index' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Api\\V1\\CommentsController:linked' => ['privates', '.service_locator.qlPge05', 'get_ServiceLocator_QlPge05Service', true],
            'App\\Controller\\Api\\V1\\CommentsController:list' => ['privates', '.service_locator.qlPge05', 'get_ServiceLocator_QlPge05Service', true],
            'App\\Controller\\Api\\V1\\EPickerController:index' => ['privates', '.service_locator.nDN9v99', 'get_ServiceLocator_NDN9v99Service', true],
            'App\\Controller\\Api\\V1\\MemoriesController:addMemory' => ['privates', '.service_locator.phRtbWN', 'get_ServiceLocator_PhRtbWNService', true],
            'App\\Controller\\Api\\V1\\MemoriesController:deleteMemory' => ['privates', '.service_locator.phRtbWN', 'get_ServiceLocator_PhRtbWNService', true],
            'App\\Controller\\Api\\V1\\MemoriesController:getPractice' => ['privates', '.service_locator.cG4CzQV', 'get_ServiceLocator_CG4CzQVService', true],
            'App\\Controller\\Api\\V1\\MemoriesController:listMemories' => ['privates', '.service_locator.cG4CzQV', 'get_ServiceLocator_CG4CzQVService', true],
            'App\\Controller\\Api\\V1\\MemoriesController:listTechniques' => ['privates', '.service_locator.cG4CzQV', 'get_ServiceLocator_CG4CzQVService', true],
            'App\\Controller\\Api\\V1\\MemoriesController:updateMemory' => ['privates', '.service_locator.phRtbWN', 'get_ServiceLocator_PhRtbWNService', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:addNote' => ['privates', '.service_locator.WnRVdSB', 'get_ServiceLocator_WnRVdSBService', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:deleteNote' => ['privates', '.service_locator.WnRVdSB', 'get_ServiceLocator_WnRVdSBService', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:list' => ['privates', '.service_locator.52EypX.', 'get_ServiceLocator_52EypX_Service', true],
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:updateNote' => ['privates', '.service_locator.WnRVdSB', 'get_ServiceLocator_WnRVdSBService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:addNote' => ['privates', '.service_locator.vac2xkV', 'get_ServiceLocator_Vac2xkVService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:deleteNote' => ['privates', '.service_locator.ga9MdyX', 'get_ServiceLocator_Ga9MdyXService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:list' => ['privates', '.service_locator.FAv419z', 'get_ServiceLocator_FAv419zService', true],
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:updateNote' => ['privates', '.service_locator.ga9MdyX', 'get_ServiceLocator_Ga9MdyXService', true],
            'App\\Controller\\Api\\V1\\PlaceController:autocomplete' => ['privates', '.service_locator.7sFStOy', 'get_ServiceLocator_7sFStOyService', true],
            'App\\Controller\\Api\\V1\\PlaceController:getPlace' => ['privates', '.service_locator.77HBTzz', 'get_ServiceLocator_77HBTzzService', true],
            'App\\Controller\\Api\\V1\\PlaceController:getPlaceByAddress' => ['privates', '.service_locator.77HBTzz', 'get_ServiceLocator_77HBTzzService', true],
            'App\\Controller\\Api\\V1\\PlaceController:getPlaceByCoordinates' => ['privates', '.service_locator.77HBTzz', 'get_ServiceLocator_77HBTzzService', true],
            'App\\Controller\\Api\\V1\\PlaceController:parseIATA' => ['privates', '.service_locator.57ntt_G', 'get_ServiceLocator_57nttGService', true],
            'App\\Controller\\Api\\V1\\SearchController:search' => ['privates', '.service_locator.klyv6ER', 'get_ServiceLocator_Klyv6ERService', true],
            'App\\Controller\\Api\\V1\\SearchController:searchTrip' => ['privates', '.service_locator.klyv6ER', 'get_ServiceLocator_Klyv6ERService', true],
            'App\\Controller\\Api\\V1\\SkillsController:index' => ['privates', '.service_locator.ojsoGK2', 'get_ServiceLocator_OjsoGK2Service', true],
            'App\\Controller\\Api\\V1\\SyncController:sync' => ['privates', '.service_locator.CVQEb.g', 'get_ServiceLocator_CVQEb_GService', true],
            'App\\Controller\\Api\\V1\\TripDetailsController:index' => ['privates', '.service_locator.vfl2W.J', 'get_ServiceLocator_Vfl2W_JService', true],
            'App\\Controller\\Api\\V1\\TripsListController:index' => ['privates', '.service_locator.nAyOYtz', 'get_ServiceLocator_NAyOYtzService', true],
            'App\\Controller\\Api\\V1\\UserController:login' => ['privates', '.service_locator.5ZAmtr.', 'get_ServiceLocator_5ZAmtr_Service', true],
            'App\\Controller\\Api\\V1\\UserController:register' => ['privates', '.service_locator..aWpzqZ', 'get_ServiceLocator__AWpzqZService', true],
            'App\\Controller\\Api\\V1\\UserProfileController:deleteUser' => ['privates', '.service_locator.dY9IPtv', 'get_ServiceLocator_DY9IPtvService', true],
            'App\\Controller\\Api\\V1\\UserProfileController:userProfile' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileCheck' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileRecover' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileUpdate' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileUpdateAvatar' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\Api\\V1\\UsersListController:index' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Api\\V1\\CommentsController::linked' => '?',
            'App\\Controller\\Api\\V1\\CommentsController::list' => '?',
            'App\\Controller\\Api\\V1\\EPickerController::index' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController::addMemory' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController::deleteMemory' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController::getPractice' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController::listMemories' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController::listTechniques' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController::updateMemory' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::addNote' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::deleteNote' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::list' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController::updateNote' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::addNote' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::deleteNote' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::list' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController::updateNote' => '?',
            'App\\Controller\\Api\\V1\\PlaceController::autocomplete' => '?',
            'App\\Controller\\Api\\V1\\PlaceController::getPlace' => '?',
            'App\\Controller\\Api\\V1\\PlaceController::getPlaceByAddress' => '?',
            'App\\Controller\\Api\\V1\\PlaceController::getPlaceByCoordinates' => '?',
            'App\\Controller\\Api\\V1\\PlaceController::parseIATA' => '?',
            'App\\Controller\\Api\\V1\\SearchController::search' => '?',
            'App\\Controller\\Api\\V1\\SearchController::searchTrip' => '?',
            'App\\Controller\\Api\\V1\\SkillsController::index' => '?',
            'App\\Controller\\Api\\V1\\SyncController::sync' => '?',
            'App\\Controller\\Api\\V1\\TripDetailsController::index' => '?',
            'App\\Controller\\Api\\V1\\TripsListController::index' => '?',
            'App\\Controller\\Api\\V1\\UserController::login' => '?',
            'App\\Controller\\Api\\V1\\UserController::register' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController::deleteUser' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController::userProfile' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileCheck' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileRecover' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileUpdate' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController::userProfileUpdateAvatar' => '?',
            'App\\Controller\\Api\\V1\\UsersListController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Api\\V1\\CommentsController:linked' => '?',
            'App\\Controller\\Api\\V1\\CommentsController:list' => '?',
            'App\\Controller\\Api\\V1\\EPickerController:index' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController:addMemory' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController:deleteMemory' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController:getPractice' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController:listMemories' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController:listTechniques' => '?',
            'App\\Controller\\Api\\V1\\MemoriesController:updateMemory' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:addNote' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:deleteNote' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:list' => '?',
            'App\\Controller\\Api\\V1\\NotesDairyOfSuccessController:updateNote' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:addNote' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:deleteNote' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:list' => '?',
            'App\\Controller\\Api\\V1\\NotesGratitudeDiaryController:updateNote' => '?',
            'App\\Controller\\Api\\V1\\PlaceController:autocomplete' => '?',
            'App\\Controller\\Api\\V1\\PlaceController:getPlace' => '?',
            'App\\Controller\\Api\\V1\\PlaceController:getPlaceByAddress' => '?',
            'App\\Controller\\Api\\V1\\PlaceController:getPlaceByCoordinates' => '?',
            'App\\Controller\\Api\\V1\\PlaceController:parseIATA' => '?',
            'App\\Controller\\Api\\V1\\SearchController:search' => '?',
            'App\\Controller\\Api\\V1\\SearchController:searchTrip' => '?',
            'App\\Controller\\Api\\V1\\SkillsController:index' => '?',
            'App\\Controller\\Api\\V1\\SyncController:sync' => '?',
            'App\\Controller\\Api\\V1\\TripDetailsController:index' => '?',
            'App\\Controller\\Api\\V1\\TripsListController:index' => '?',
            'App\\Controller\\Api\\V1\\UserController:login' => '?',
            'App\\Controller\\Api\\V1\\UserController:register' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController:deleteUser' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController:userProfile' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileCheck' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileRecover' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileUpdate' => '?',
            'App\\Controller\\Api\\V1\\UserProfileController:userProfileUpdateAvatar' => '?',
            'App\\Controller\\Api\\V1\\UsersListController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
