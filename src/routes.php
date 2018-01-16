<?php
$routes = [
    'metadata',
    'getRequestToken',
    'getAccessToken',
    'checkToken',
    'getUserComments',
    'getUserPhotos',
    'getBlogList',
    'getBlogServices',
    'addPhotoToBlog',
    'getCamerasBrandModels',
    'getCamerasBrands',
    'getCollectionInfo',
    'getCollectionsTree',
    'getCommonsInstitutions',
    'getContactsList',
    'getContactsListRecentlyUploaded',
    'getContactPublicList',
    'getContactsTaggingSuggestions',
    'addPhotoToFavoritesList',
    'getContextForFavorites',
    'getFavoritePhotosList',
    'getFavoritePublicPhotosList',
    'removePhotoFromFavoritesList',
    'addPhotoToGallery',
    'createGallery',
    'updateGalleryMetadata',
    'updateCommentForGalleryPhoto',
    'updatePhotosInGallery',
    'getGalleryInfo',
    'getGalleryListForPhoto',
    'getListOfPhotosForGallery',
    'removePhotoFromGallery',
    'browseGroup',
    'getGroupInfo',
    'getGroupInfoByAlias',
    'joinGroup',
    'createRequestJoinGroup',
    'leaveGroup',
    'searchGroup',
    'addReplyToGroupDiscussionTopic',
    'deleteReplyFromGroupDiscussionTopic',
    'editTopicReplay',
    'getGroupTopicReplyInfo',
    'getListOfRepliesFromGroup',
    'addDiscussionTopicToGroup',
    'getGroupDiscussionTopicInfo',
    'getListDiscussionTopicsInGroup',
    'getMembersGroupList',
    'addPhotoToGroupPool',
    'getGroupsPoolsContext',
    'getGroupsPoolsList',
    'getGroupsPoolsPhoto',
    'deletePhotoFromGroupPool',
    'getInterestingPhotosByDate',
    'getMachineTagsNamespaces',
    'getMachineTagsPairs',
    'getMachineTagsPredicates',
    'getMachineTagsRecentValues',
    'getMachineTagsValues',
    'getPandaList',
    'getPandaPhotos',
    'getPeopleByEmail',
    'getPeopleByUsername',
    'getUserGroups',
    'getUserInfo',
    'getPhotoVideoLimits',
    'getUserPhoto',
    'getParticularMemberPhotos',
    'getUserPublicGroups',
    'getUserPublicPhotos',
    'getUploadStatus',
    'addTagsToPhoto',
    'deletePhoto',
    'getAllPhotoContexts',
    'getUserContactsPhotos',
    'getUserContactsPublicPhotos',
    'getPhotoStreamContexts',
    'getPhotosCountsForDateRanges',
    'getExifTagsForPhoto',
    'getPeopleByFavoritePhotoId',
    'getPhotoInfo',
    'getNotInSetPhoto',
    'getPermissionsForPhoto',
    'getPopularPhotos',
    'getRecentPhotos',
    'getPhotoSizes',
    'getUntaggedPhotos',
    'getGeoTaggedPhotos',
    'getPhotosWithoutGeoData',
    'getRecentlyUpdatedPhotos',
    'removeTagFromPhoto',
    'searchPhotos',
    'setContentTypeOfPhoto',
    'setPhotoDates',
    'setMetaInformationForPhoto',
    'setPermissionsForPhoto',
    'setSafetyLevelOfPhoto',
    'setTagsForPhoto',
    'addCommentToPhoto',
    'deleteCommentFromPhoto',
    'getPhotoComments',
    'updatePhotoComment',
    'getPhotoCommentsForContacts',
    'batchCorrectPhotoLocation',
    'correctPhotoGeoLocation',
    'getGeoDataForPhoto',
    'getPermissionsForPhotoGeoData',
    'getPhotosByCoordinates',
    'removePhotoGeoData',
    'setGeoTagForPhoto',
    'setGeoLocationForPhoto',
    'setPermissionForGeoDataPhoto',
    'uploadPhoto',
    'lookupUser',
    'lookupGroup',
    'lookupGallery',
    'getUserProfile',
    'getUserPhotoStats',
    'getGroup',
    'getTestimonialsBy',
    'getTestimonialsAboutBy',
    'getTestimonialsAbout',
    'getPendingTestimonialsBy',
    'getPendingTestimonialsAboutBy',
    'getPendingTestimonialsAbout',
    'getAllTestimonialsBy',
    'getAllTestimonialsAboutBy',
    'getAllTestimonialsAbout',
    'addTestimonial',
    'approveTestimonial',
    'deleteTestimonial',
    'editTestimonial',
    'testEcho',
    'testLogin',
    'testNull',
    'getCollectionDomains',
    'getCollectionReferrers',
    'getCollectionStats',
    'getCSVFiles',
    'getPhotoDomains',
    'getPhotoReferrers',
    'getPhotosetDomains',
    'getPhotosetReferrers',
    'getPhotosetStats',
    'getPhotostreamDomains',
    'getPhotostreamReferrers',
    'getPhotostreamStats',
    'getPopularPhotoStats',
    'getTotalViews',
    'getClusterPhotos',
    'getClusters',
    'getHotList',
    'getListPhoto',
    'getListUser',
    'getListUserPopular',
    'getListUserRaw',
    'getMostFrequentlyUsed',
    'getRelated',
    'getMethodInfo',
    'getMethods',
    'getSubscriptions',
    'getTopics',
    'subscribe',
    'unsubscribe',
    'getProfile',
    'getContentType',
    'getGeoPerms',
    'getHidden',
    'getPrivacy',
    'getSafetyLevel',
    'findPlace',
    'findByLatLon',
    'getChildrenWithPhotosPublicByPlaceId',
    'getChildrenWithPhotosPublicByWoeId',
    'getInfoByPlaceId',
    'getInfoByWoeId',
    'getInfoByUrl',
    'getPlaceTypes',
    'getShapeHistoryByPlaceId',
    'getShapeHistoryByWoeId',
    'getTopPlacesList',
    'placesForBoundingBox',
    'placesForContactsByPlaceId',
    'placesForContactsByWoeId',
    'placesForTagsByPlaceId',
    'placesForTagsByWoeId',
    'placesForMachineTagsByPlaceId',
    'placesForMachineTagsByWoeId',
    'placesForUserByPlaceId',
    'placesForUserByWoeId',
    'resolvePlaceId',
    'resolvePlaceURL',
    'tagsForPlaceByPlaceId',
    'tagsForPlaceByWoeId',
    'addComment',
    'editComment',
    'deleteComment',
    'getPhotosetComments',
    'addPhotoToPhotoset',
    'createPhotoset',
    'deletePhotoset',
    'editPhotosetMeta',
    'editPhotosetPhotos',
    'getPhotosetContext',
    'getUserPhotosets',
    'getUserPhotosInPhotoset',
    'orderSets',
    'removePhotoFromPhotoset',
    'removePhotosFromPhotoset',
    'reorderPhotosInPhotoset',
    'setPrimaryPhoto',
    'checkUploadTickets',
    'rotatePhoto',
    'approveSuggestion',
    'getSuggenstionsList',
    'rejectSuggestion',
    'removeSuggestion',
    'suggestLocation',
    'addPersonToPhoto',
    'deletePersonFromPhoto',
    'deletePersonCoordinatesFromPhoto',
    'addPersonCoordinatesOnPhoto',
    'getPhotoPersons',
    'addNoteToPhoto',
    'editNoteOnPhoto',
    'deleteNoteFromPhoto',
    'getPhotoLicenses',
    'setPhotoLicense',
    'replacePhoto'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

