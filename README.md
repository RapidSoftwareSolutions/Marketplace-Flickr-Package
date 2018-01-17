[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Flickr/functions?utm_source=RapidAPIGitHub_FlickrFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Flickr Package
Flickr - almost certainly the best online photo management and sharing application in the world.
* Domain: [Flickr](http://www.flickr.com)
* Credentials: apiKey, apiSecret

## How to get credentials: 
0. Register on the [www.flickr.com](https://www.flickr.com)
1. Create flickr application in console
2. After creation app, you will receive apiKey and apiSecret
3. For getting oauthToken and oauthSecret use getRequestToken endpoint
4. After that,you need to get permission to use your application
5. Use authorize url (`https://www.flickr.com/services/oauth/authorize?oauth_token=xxxx`)
6. After authorization ,use getAccessToken for getting accessToken and accessSecret


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Flickr.getRequestToken
Get request token.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| oauthCallback| String     | The value you specify here will be used as the URL a user is redirected to should they approve your application’s access to their account.

## Flickr.getAccessToken
Get access token.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| oauthToken   | String     | oauthToken from the getAccessToken method.
| oauthSecret  | String     | oauthSecret from the getRequestToken method.
| oauthVerifier| String     | oauthVerifier from the getRequestToken method.

## Flickr.checkToken
Returns the credentials attached to an OAuth authentication token.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| oauthToken  | String     | The OAuth authentication token to check.

## Flickr.getUserComments
Returns a list of recent activity on photos commented on by the calling user. Do not poll this method more than once an hour.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getUserPhotos
Returns a list of recent activity on photos belonging to the calling user. Do not poll this method more than once an hour.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.
| timeframe   | String     | The timeframe in which to return updates for. This can be specified in days ('2d') or hours ('4h'). The default behavoir is to return changes since the beginning of the previous user session.

## Flickr.getBlogList
Get a list of configured blogs for the calling user.This method requires authentication with 'read' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| service     | String     | Optionally only return blogs for a given service id. You can get a list of from getBlogServices method.

## Flickr.getBlogServices
Return a list of Flickr supported blogging services.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.addPhotoToBlog
Get blog post photo.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| blogId      | String     | The id of the blog to post to.
| photoId     | String     | The id of the photo to blog.
| title       | String     | The blog post title.
| description | String     | The blog post body.
| blogPassword| String     | The password for the blog (used when the blog does not have a stored password).
| service     | String     | A Flickr supported blogging service. Instead of passing a blog id you can pass a service id and we'll post to the first blog of that service we find.

## Flickr.getCamerasBrandModels
Retrieve all the models for a given camera brand.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| brand       | String     | The ID of the requested brand (as returned from flickr.cameras.getBrands).

## Flickr.getCamerasBrands
Returns all the brands of cameras that Flickr knows about.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.

## Flickr.getCollectionInfo
Returns information for a single collection. Currently can only be called by the collection owner, this may change.This method requires authentication with 'read' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| collectionId| String     | The ID of the collection to fetch information for.

## Flickr.getCollectionsTree
Returns a tree (or sub tree) of collections belonging to a given user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| collectionId| String     | The ID of the collection to fetch a tree for, or zero to fetch the root collection. Defaults to zero.
| userId      | String     | The ID of the account to fetch the collection tree for. Deafults to the calling user.

## Flickr.getCommonsInstitutions
Retrieves a list of the current Commons institutions.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.

## Flickr.getContactsList
Get a list of contacts for the calling user.This method requires authentication with 'read' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| filter      | Select     | An optional filter of the results.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 1000.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.
| sort        | Select     | The order in which to sort the returned contacts. Defaults to name.

## Flickr.getContactsListRecentlyUploaded
Return a list of contacts for a user who have recently uploaded photos along with the total count of photos uploaded.This method is still considered experimental. We don't plan for it to change or to go away but so long as this notice is present you should write your code accordingly.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| filter        | Select     | Limit the result set to all contacts or only those who are friends or family.ff - family and friends,all - all contacts.
| dateLastupload| DatePicker | Limits the resultset to contacts that have uploaded photos since this date.

## Flickr.getContactPublicList
Get the contact list for a user.This method does not require authentication.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| userId | String     | The NSID of the user to fetch the contact list for.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getContactsTaggingSuggestions
Get suggestions for tagging people in photos based on the calling user's contacts.This method requires authentication with 'read' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.addPhotoToFavoritesList
Adds a photo to a user's favorites list.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to add to the user's favorites.

## Flickr.getContextForFavorites
Returns next and previous favorites for a photo in a user's favorites.This method does not require authentication.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The id of the photo to fetch the context for.
| userId | String     | The user who counts the photo as a favorite.

## Flickr.getFavoritePhotosList
Returns a list of the user's favorite photos. Only photos which the calling user has permission to see are returned.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| ApiKey of the your app.
| userId     | String     | The NSID of the user to fetch the favorites list for. If this argument is omitted, the favorites list for the calling user is returned.
| minFaveDate| DatePicker | Minimum date that a photo was favorited on.
| maxFaveDate| DatePicker | Maximum date that a photo was favorited on.
| extras     | List       | List of extra information to fetch for each returned record.
| perPage    | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page       | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getFavoritePublicPhotosList
Returns a list of favorite public photos for the given user.This method does not require authentication.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| ApiKey of the your app.
| userId     | String     | The NSID of the user to fetch the favorites list for. If this argument is omitted, the favorites list for the calling user is returned.
| minFaveDate| DatePicker | Minimum date that a photo was favorited on.
| maxFaveDate| DatePicker | Maximum date that a photo was favorited on.
| extras     | List       | List of extra information to fetch for each returned record.
| perPage    | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page       | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.removePhotoFromFavoritesList
Removes a photo from a user's favorites list.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to remove from the user's favorites.

## Flickr.addPhotoToGallery
Add a photo to a gallery.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The photo ID to add to the gallery.
| galleryId   | String     | The ID of the gallery to add a photo to. 
| comment     | String     | A short comment or story to accompany the photo.
| fullResponse| String     | If specified, return updated details of the gallery the photo was added to.

## Flickr.createGallery
Create a new gallery for the calling user.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| title         | String     | The name of the gallery.
| description   | String     | A short description for the gallery.
| primaryPhotoId| String     | The first photo to add to your gallery.
| fullResult    | String     | Get the result in the same format as galleries.getList.

## Flickr.updateGalleryMetadata
Modify the meta-data for a gallery.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| title       | String     | The name of the gallery.
| description | String     | A short description for the gallery.
| galleryId   | String     | The gallery ID to update.

## Flickr.updateCommentForGalleryPhoto
Edit the comment for a gallery photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| comment     | String     | The updated comment the photo.
| photoId     | String     | The photo ID to add to the gallery.
| galleryId   | String     | The ID of the gallery to add a photo to.

## Flickr.updatePhotosInGallery
Modify the photos in a gallery. Use this method to add, remove and re-order photos.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| primaryPhotoId| String     | The id of the photo to use as the 'primary' photo for the gallery. This id must also be passed along in photo_ids list argument.
| photoIds      | List       | List of photo ids to include in the gallery. They will appear in the set in the order sent. This list must contain the primary photo id. This list of photos replaces the existing list.
| galleryId     | String     | The ID of the gallery to add a photo to.

## Flickr.getGalleryInfo
Get Gallery info.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| galleryId| String     | The gallery ID you are requesting information for.

## Flickr.getGalleryListForPhoto
Return the list of galleries to which a photo has been added. Galleries are returned sorted by date which the photo was added to the gallery.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The ID of the photo to fetch a list of galleries for.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getListOfPhotosForGallery
Return the list of photos for a gallery.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| galleryId| String     | The ID of the gallery of photos to return.
| perPage  | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page     | Number     | The page of results to return. If this argument is omitted, it defaults to 1.
| extras   | List       | List of extra information to fetch for each returned record.

## Flickr.removePhotoFromGallery
Remove a photo from a gallery.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The ID of the photo to remove from the gallery.
| galleryId   | String     | The ID of the gallery to remove a photo from.
| fullResponse| String     | If specified, return updated details of the gallery the photo was removed from.

## Flickr.browseGroup
Browse the group category tree, finding groups and sub-categories.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| catId       | String     | The category id to fetch a list of groups and sub-categories for. If not specified, it defaults to zero, the root of the category tree.

## Flickr.getGroupInfoByAlias
Get information about a group by path alias of the group.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| groupPathAlias| String     | The path alias of the group.
| lang          | Select     | The language of the group name and description to fetch. If the language is not found, the primary language of the group will be returned.

## Flickr.getGroupInfo
Get information about a group.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| groupId       | String     | The NSID of the group to fetch information for.
| lang          | Select     | The language of the group name and description to fetch. If the language is not found, the primary language of the group will be returned.


## Flickr.joinGroup
Join a public group as a member.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | The NSID of the Group in question.
| acceptRules | String     | If the group has rules, they must be displayed to the user prior to joining. 

## Flickr.createRequestJoinGroup
Request to join a group that is invitation-only.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | The NSID of the Group in question.
| message     | String     | Message to the administrators.
| acceptRules | String     | If the group has rules, they must be displayed to the user prior to joining. 

## Flickr.leaveGroup
Leave a group.If the user is the only administrator left, and there are other members, the oldest member will be promoted to administrator.If the user is the last person in the group, the group will be deleted.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | The NSID of the Group to leave.
| deletePhotos| String     | Delete all photos by this user from the group.

## Flickr.searchGroup
Search for groups.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| text        | String     | The text to search for.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.addReplyToGroupDiscussionTopic
Post a new reply to a group discussion topic.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| topicId     | String     | The ID of the topic to post a comment to.
| message     | String     | The message to post to the topic.

## Flickr.deleteReplyFromGroupDiscussionTopic
Delete a reply from a group topic.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| topicId     | String     | The ID of the topic the post is in.
| replyId     | String     | The ID of the reply to delete.

## Flickr.editTopicReplay
Edit a topic reply.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| topicId     | String     | The ID of the topic the post is in.
| replyId     | String     | The ID of the reply post to edit.
| message     | String     | The message to edit the post with.

## Flickr.getGroupTopicReplyInfo
Get information on a group topic reply.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| topicId     | String     | The ID of the topic the post is in.
| replyId     | String     | The ID of the reply to delete.

## Flickr.getListOfRepliesFromGroup
Get a list of replies from a group discussion topic.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| topicId     | String     | The ID of the topic to fetch replies for.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.addDiscussionTopicToGroup
Post a new discussion topic to a group.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| subject     | String     | The topic subject.
| message     | String     | The topic message.

## Flickr.getGroupDiscussionTopicInfo
Get information about a group discussion topic.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| groupId| String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| topicId| String     | The ID of the topic to fetch replies for.

## Flickr.getListDiscussionTopicsInGroup
Get a list of discussion topics in a group.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| groupId| String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getMembersGroupList
Get a list of the members of a group. The call must be signed on behalf of a Flickr member, and the ability to see the group membership will be determined by the Flickr member's group privileges.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | Pass in the group id to where the topic belongs. Can be NSID or group alias. Making this parameter optional for legacy reasons, but it is highly recommended to pass this in to get faster performance.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.
| memberTypes | List       | List of member types.By default returns all types.2: member. 3: moderator. 4: admin.

## Flickr.addPhotoToGroupPool
Add a photo to a group's pool.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | The NSID of the group who's pool the photo is to be added to.
| photoId     | String     | The id of the photo to add to the group pool. The photo must belong to the calling user.

## Flickr.getGroupsPoolsContext
Returns next and previous photos for a photo in a group pool.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| groupId| String     | The nsid of the group who's pool to fetch the photo's context for.
| photoId| String     | The id of the photo to fetch the context for.

## Flickr.getGroupsPoolsList
Returns a list of groups to which you can add photos.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getGroupsPoolsPhoto
Returns a list of pool photos for a given group, based on the permissions of the group and the user logged in (if any).

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| groupId| String     | The id of the group who's pool you which to get the photo list for.
| tags   | String     | A tag to filter the pool with. At the moment only one tag at a time is supported.
| user_id| String     | The nsid of a user. Specifiying this parameter will retrieve for you only those photos that the user has contributed to the group pool.
| extras | List       | List of extra information to fetch for each returned record.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.deletePhotoFromGroupPool
Remove a photo from a group pool.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| groupId     | String     | The id of the photo to remove from the group pool. The photo must either be owned by the calling user of the calling user must be an administrator of the group. 
| photoId     | String     | The NSID of the group who's pool the photo is to removed from.

## Flickr.getInterestingPhotosByDate
Returns the list of interesting photos for the most recent day or a user-specified date.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| date   | DatePicker | A specific date, formatted as YYYY-MM-DD, to return interesting photos for.
| extras | List       | List of extra information to fetch for each returned record.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getMachineTagsNamespaces
Return a list of unique namespaces, optionally limited by a given predicate, in alphabetical order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| predicate| String     | Limit the list of namespaces returned to those that have the following predicate.
| perPage  | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page     | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getMachineTagsPairs
Return a list of unique namespace and predicate pairs, optionally limited by predicate or namespace, in alphabetical order.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| namespace| String     | Limit the list of pairs returned to those that have the following namespace.
| predicate| String     | Limit the list of namespaces returned to those that have the following predicate.
| perPage  | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page     | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getMachineTagsPredicates
Return a list of unique predicates, optionally limited by a given namespace.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| namespace| String     | Limit the list of predicates returned to those that have the following namespace.
| perPage  | Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page     | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getMachineTagsRecentValues
Fetch recently used (or created) machine tags values.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| ApiKey of the your app.
| addedSince| DatePicker | Only return machine tags values that have been added since this timestamp, in epoch seconds.
| namespace | String     | A namespace that all values should be restricted to.
| predicate | String     | A predicate that all values should be restricted to.

## Flickr.getMachineTagsValues
Return a list of unique values for a namespace and predicate.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| perPage  | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page     | Number     | The page of results to return. If this argument is omitted, it defaults to 1.
| namespace| String     | A namespace that all values should be restricted to.
| predicate| String     | A predicate that all values should be restricted to.

## Flickr.getPandaList
Return a list of Flickr pandas, from whom you can request photos using the flickr.panda.getPhotos API method.More information about the pandas can be found [here](http://code.flickr.com/blog/2009/03/03/panda-tuesday-the-history-of-the-panda-new-apis-explore-and-you/).

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.

## Flickr.getPandaPhotos
Ask the Flickr Pandas for a list of recent public (and `safe`) photos. .More information about the pandas can be found [here](http://code.flickr.com/blog/2009/03/03/panda-tuesday-the-history-of-the-panda-new-apis-explore-and-you/).

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| pandaName| Select     | The name of the panda to ask for photos from.
| extras   | List       | List of extra information to fetch for each returned record.
| perPage  | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page     | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getPeopleByEmail
Return a user's NSID, given their email address.

| Field    | Type       | Description
|----------|------------|----------
| apiKey   | credentials| ApiKey of the your app.
| findEmail| String     | The email address of the user to find (may be primary or secondary).

## Flickr.getPeopleByUsername
Return a user's NSID, given their username.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| ApiKey of the your app.
| username| String     | The username of the user to lookup.

## Flickr.getUserGroups
Returns the list of groups a user is a member of.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | The NSID of the user to fetch groups for.
| extras      | List       | List of extra information to fetch for each returned record.

## Flickr.getUserInfo
Get information about a user.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.
| userId| String     | The NSID of the user to fetch information about.

## Flickr.getPhotoVideoLimits
Returns the photo and video limits that apply to the calling user account.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getUserPhoto
Return photos from the given user's photostream. Only photos visible to the calling user will be returned.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| userId       | String     | The NSID of the user who's photos to return. A value of `me` will return the calling user's photos.
| safeSearch   | Select     | Safe search setting.1 for safe. 2 for moderate. 3 for restricted.
| minUploadDate| DatePicker | Minimum upload date. Photos with an upload date greater than or equal to this value will be returned. 
| maxUploadDate| DatePicker | Maximum upload date. Photos with an upload date less than or equal to this value will be returned. 
| minTakenDate | DatePicker | Minimum taken date. Photos with an taken date greater than or equal to this value will be returned. 
| maxTakenDate | DatePicker | Maximum taken date. Photos with an taken date less than or equal to this value will be returned. 
| contentType  | Select     | Content Type.1 for photos only. 2 for screenshots only. 3 for 'other' only. 4 for photos and screenshots. 5 for screenshots and 'other'. 6 for photos and 'other'. 7 for photos, screenshots, and 'other' (all).
| privacyFilter| Select     | Return photos only matching a certain privacy level. This only applies when making an authenticated call to view photos you own.1 public photos. 2 private photos visible to friends .3 private photos visible to family. 4 private photos visible to friends & family .5 completely private photos.
| extras       | List       | List of extra information to fetch for each returned record.
| perPage      | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page         | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getParticularMemberPhotos
Returns a list of photos containing a particular Flickr member.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| userId | String     | The NSID of the user who's photos to return. A value of `me` will return the calling user's photos.
| ownerId| String     | An NSID of a Flickr member. This will restrict the list of photos to those taken by that member.
| extras | List       | List of extra information to fetch for each returned record.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getUserPublicGroups
Returns the list of public groups a user is a member of.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| userId        | String     | The NSID of the user to fetch groups for.
| invitationOnly| String     | Include public groups that require an invitation or administrator approval to join.

## Flickr.getUserPublicPhotos
Get a list of public photos for the given user.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| ApiKey of the your app.
| userId    | String     | The NSID of the user who's photos to return.
| safeSearch| Select     | Safe search setting.1 for safe. 2 for moderate. 3 for restricted.
| extras    | List       | List of extra information to fetch for each returned record.
| perPage   | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page      | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getUploadStatus
Returns information for the calling user related to photo uploads.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.addTagsToPhoto
Add tags to a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| photoId     | String     | The id of the photo to add tags to.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tags        | List       | The tags to add to the photo.

## Flickr.deletePhoto
Delete a photo from flickr.This method requires authentication with 'delete' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| photoId     | String     | The id of the photo to delete.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getAllPhotoContexts
Returns all visible sets and pools the photo belongs to.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The photo to return information for.

## Flickr.getUserContactsPhotos
Fetch a list of recent photos from the calling users' contacts.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| count       | Number     | Number of photos to return. Defaults to 10, maximum 50. This is only used if single_photo is not passed.
| justFriends | Select     | Set as true to only show photos from friends and family (excluding regular contacts).
| singlePhoto | String     | Only fetch one photo (the latest) per contact, instead of all photos in chronological order.
| includeSelf | Select     | Set to 1 to include photos from the calling user.
| extras      | List       | List of extra information to fetch for each returned record.

## Flickr.getUserContactsPublicPhotos
Fetch a list of recent public photos from a users' contacts.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| ApiKey of the your app.
| userId     | String     | The NSID of the user to fetch photos for.
| count      | Number     | Number of photos to return. Defaults to 10, maximum 50. This is only used if single_photo is not passed.
| justFriends| Select     | Set as true to only show photos from friends and family (excluding regular contacts).
| singlePhoto| String     | Only fetch one photo (the latest) per contact, instead of all photos in chronological order.
| includeSelf| Select     | Set to 1 to include photos from the calling user.
| extras     | List       | List of extra information to fetch for each returned record.

## Flickr.getPhotoStreamContexts
Returns next and previous photos for a photo in a photostream.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The id of the photo to fetch the context for.

## Flickr.getPhotosCountsForDateRanges
Gets a list of photo counts for the given date ranges for the calling user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| dates       | List       | List of dates, denoting the periods to return counts for.They should be specified smallest first.2 dates minimum.

## Flickr.getExifTagsForPhoto
Retrieves a list of EXIF/TIFF/GPS tags for a given photo. The calling user must have permission to view the photo.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The id of the photo to fetch information for.
| secret | String     | The secret for the photo. If the correct secret is passed then permissions checking is skipped. This enables the 'sharing' of individual photos by passing around the id and secret.

## Flickr.getPeopleByFavoritePhotoId
Returns the list of people who have favorited a given photo.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The ID of the photo to fetch the favoriters list for.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 10. The maximum allowed value is 50.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getPhotoInfo
Get information about a photo. The calling user must have permission to view the photo.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The id of the photo to get information for.
| secret | String     | The secret for the photo. If the correct secret is passed then permissions checking is skipped. This enables the 'sharing' of individual photos by passing around the id and secret.

## Flickr.getNotInSetPhoto
Returns a list of your photos that are not part of any sets.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| ApiKey of the your app.
| apiSecret      | credentials| ApiSecret of the your app.
| accessToken    | String     | accessToken from the getAccessToken method.
| accessSecret   | String     | accessSecret from the getAccessToken method.
| maxUploadDate  | DatePicker | Maximum upload date. Photos with an upload date less than or equal to this value will be returned.
| minTakenDate   | DatePicker | Minimum taken date. Photos with an taken date greater than or equal to this value will be returned.
| maxTakenDate   | DatePicker | Maximum taken date. Photos with an taken date less than or equal to this value will be returned. 
| privacyFilter  | Select     | Return photos only matching a certain privacy level. 
| media          | Select     | Filter results by media type.All default.
| min_upload_date| DatePicker | Minimum upload date. Photos with an upload date greater than or equal to this value will be returned.
| extras         | List       | List of extra information to fetch for each returned record.
| perPage        | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page           | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getPermissionsForPhoto
Get permissions for a photo.This method requires authentication with 'read' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to get permissions for.

## Flickr.getPopularPhotos
Returns a list of popular photos.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| userId | String     | The NSID of the user to get a galleries list for. If none is specified, the calling user is assumed.
| sort   | Select     | The sort order.Deafults to interesting.
| extras | List       | List of extra information to fetch for each returned record.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getRecentPhotos
Returns a list of the latest public photos uploaded to flickr.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| extras | List       | List of extra information to fetch for each returned record.
| perPage| Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page   | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getPhotoSizes
Returns the available sizes for a photo. The calling user must have permission to view the photo.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The id of the photo to fetch size information for.

## Flickr.getUntaggedPhotos
Returns a list of your photos with no tags.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| minUploadDate| DatePicker | Minimum upload date. Photos with an upload date greater than or equal to this value will be returned. 
| maxUploadDate| DatePicker | Maximum upload date. Photos with an upload date less than or equal to this value will be returned. 
| minTakenDate | DatePicker | Minimum taken date. Photos with an taken date greater than or equal to this value will be returned. 
| maxTakenDate | DatePicker | Maximum taken date. Photos with an taken date less than or equal to this value will be returned. 
| privacyFilter| Select     | Return photos only matching a certain privacy level.
| media        | Select     | Filter results by media type.All (default).
| extras       | List       | List of extra information to fetch for each returned record.
| perPage      | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page         | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getGeoTaggedPhotos
Returns a list of your geo-tagged photos.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| minUploadDate| DatePicker | Minimum upload date. Photos with an upload date greater than or equal to this value will be returned. 
| maxUploadDate| DatePicker | Maximum upload date. Photos with an upload date less than or equal to this value will be returned. 
| maxTakenDate | DatePicker | Maximum taken date. Photos with an taken date less than or equal to this value will be returned. 
| minTakenDate | DatePicker | Minimum taken date. Photos with an taken date greater than or equal to this value will be returned. 
| privacyFilter| Select     | Return photos only matching a certain privacy level.
| media        | Select     | Filter results by media type.All (default).
| extras       | List       | List of extra information to fetch for each returned record.
| perPage      | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page         | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getPhotosWithoutGeoData
Returns a list of your photos which haven't been geo-tagged.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| minUploadDate| DatePicker | Minimum upload date. Photos with an upload date greater than or equal to this value will be returned. 
| maxUploadDate| DatePicker | Maximum upload date. Photos with an upload date less than or equal to this value will be returned. 
| minTakenDate | DatePicker | Minimum taken date. Photos with an taken date greater than or equal to this value will be returned. 
| maxTakenDate | DatePicker | Maximum taken date. Photos with an taken date less than or equal to this value will be returned. 
| privacyFilter| Select     | Return photos only matching a certain privacy level.
| media        | Select     | Filter results by media type.All (default).
| extras       | List       | List of extra information to fetch for each returned record.
| perPage      | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page         | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.getRecentlyUpdatedPhotos
Return a list of your photos that have been recently created or which have been recently modified.Recently modified may mean that the photo's metadata (title, description, tags) may have been changed or a comment has been added (or just modified somehow :-)

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| minDate     | DatePicker | A Unix timestamp or any English textual datetime description indicating the date from which modifications should be compared.
| extras      | List       | List of extra information to fetch for each returned record.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.removeTagFromPhoto
Remove a tag from a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tagId       | String     | The tag to remove from the photo. This parameter should contain a tag id.

## Flickr.searchPhotos
Return a list of photos matching some criteria. Only photos visible to the calling user will be returned. To return private or semi-private photos, the caller must be authenticated with 'read' permissions, and have permission to view the photos. Unauthenticated calls will only return public photos.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| userId        | String     | The NSID of the user who's photo to search. If this parameter isn't passed then everybody's public photos will be searched. A value of `me` will search against the calling user's photos for authenticated calls.
| tags          | List       | Photos with one or more of the tags listed will be returned.
| tagMode       | Select     | Either 'any' for an OR combination of tags, or 'all' for an AND combination. Defaults to 'any' if not specified.
| text          | String     | A free text search. Photos who's title, description or tags contain the text will be returned. You can exclude results that match a term by prepending it with a - character.
| minUploadDate | DatePicker | Minimum upload date. Photos with an upload date greater than or equal to this value will be returned. 
| maxUploadDate | DatePicker | Maximum upload date. Photos with an upload date less than or equal to this value will be returned. 
| minTakenDate  | DatePicker | Minimum taken date. Photos with an taken date greater than or equal to this value will be returned. 
| maxTakenDate  | DatePicker | Maximum taken date. Photos with an taken date less than or equal to this value will be returned. 
| license       | List     | The license id for photos (for possible values see the flickr.photos.licenses.getInfo method). Multiple licenses may be comma-separated.
| sort          | Select     | The order in which to sort returned photos. Deafults to date-posted-desc (unless you are doing a radial geo query, in which case the default sorting is by ascending distance from the point specified).
| privacyFilter | Select     | Return photos only matching a certain privacy level.
| bbox          | List       | The 4 values represent the bottom-left corner of the box and the top-right corner, minimum_longitude, minimum_latitude, maximum_longitude, maximum_latitude.Longitude has a range of -180 to 180 , latitude of -90 to 90. Defaults to -180, -90, 180, 90 if not specified. Unlike standard photo queries, geo (or bounding box) queries will only return 250 results per page. Geo queries require some sort of limiting agent in order to prevent the database from crying. This is basically like the check against "parameterless searches" for queries without a geo component. A tag, for instance, is considered a limiting agent as are user defined min_date_taken and min_date_upload parameters — If no limiting factor is passed we return only photos added in the last 12 hours (though we may extend the limit in the future).
| accuracy      | Number     | Recorded accuracy level of the location information. Current range is 1-16.World level is 1. Country is ~3. Region is ~6. City is ~11. Street is ~16.
| safeSearch   | Select     | Safe search setting.1 - for safe.2 - for moderate.3 - for restricted.
| contentType   | Select     | Content Type.1 - for photos only. 2 - for screenshots only. 3 - for 'other' only. 4 - for photos and screenshots. 5 - for screenshots and 'other'. 6  - for photos and 'other'. 7 - for photos, screenshots, and 'other' (all).
| machineTags   | String     | Aside from passing in a fully formed machine tag.World level is 1. Country is ~3. Region is ~6. City is ~11. Street is ~16.
| machineTagMode| Select     | Either 'any' for an OR combination of tags, or 'all' for an AND combination. Defaults to 'any' if not specified.
| groupId       | String     | The id of a group who's pool to search. If specified, only matching photos posted to the group's pool will be returned.
| contacts      | Select     | Search your contacts. Either 'all' or 'ff' for just friends and family. (Experimental)
| woeId         | String     | A 32-bit identifier that uniquely represents spatial entities.Geo queries require some sort of limiting agent in order to prevent the database from crying. This is basically like the check against "parameterless searches" for queries without a geo component. A tag, for instance, is considered a limiting agent as are user defined min_date_taken and min_date_upload parameters — If no limiting factor is passed we return only photos added in the last 12 hours (though we may extend the limit in the future).
| placeId       | String     | A Flickr place id. (not used if bbox argument is present).Geo queries require some sort of limiting agent in order to prevent the database from crying. This is basically like the check against "parameterless searches" for queries without a geo component. A tag, for instance, is considered a limiting agent as are user defined min_date_taken and min_date_upload parameters — If no limiting factor is passed we return only photos added in the last 12 hours (though we may extend the limit in the future). 
| media         | Select     | Filter results by media type.All (default).
| hasGeo        | String     | Any photo that has been geotagged, or if the value is `0` any photo that has not been geotagged.Geo queries require some sort of limiting agent in order to prevent the database from crying. This is basically like the check against "parameterless searches" for queries without a geo component. A tag, for instance, is considered a limiting agent as are user defined min_date_taken and min_date_upload parameters — If no limiting factor is passed we return only photos added in the last 12 hours (though we may extend the limit in the future).
| geoContext    | Select     | Geo context is a numeric value representing the photo's geotagginess beyond latitude and longitude. For example, you may wish to search for photos that were taken `indoors` or `outdoors`. 
| coordinates   | Map        | A valid longitude and latitude in decimal format, for doing radial geo queries. 
| radiusUnits   | Select     | The unit of measure when doing radial geo queries. Valid options are `mi` (miles) and `km` (kilometers). The default is `km`.
| isCommons     | Select     | Limit the scope of the search to only photos that are part of the Flickr Commons project. Default is false.
| inGallery     | Select     | Limit the scope of the search to only photos that are in a gallery? Default is false, search all photos.
| isGetty       | Select     | Limit the scope of the search to only photos that are for sale on Getty. Default is false.
| radius        | Number     | A valid radius used for geo queries, greater than zero and less than 20 miles (or 32 kilometers), for use with point-based geo queries. The default value is 5 (km).
| extras        | List       | List of extra information to fetch for each returned record.
| perPage       | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page          | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.setContentTypeOfPhoto
Set the content type of a photo.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to set the adultness of.
| contentType | Select     | The content type of the photo. Must be one of: 1 for Photo, 2 for Screenshot, and 3 for Other.

## Flickr.setPhotoDates
Set one or both of the dates for a photo.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| ApiKey of the your app.
| apiSecret           | credentials| ApiSecret of the your app.
| accessToken         | String     | accessToken from the getAccessToken method.
| accessSecret        | String     | accessSecret from the getAccessToken method.
| photoId             | String     | The id of the photo to edit dates for.
| datePosted          | DatePicker | The date the photo was uploaded to flickr
| dateTaken           | DatePicker | The date the photo was taken.

## Flickr.setMetaInformationForPhoto
Set the meta information for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to set information for.
| title       | String     | The title for the photo. At least one of title or description must be set.
| description | String     | The description for the photo. At least one of title or description must be set.

## Flickr.setPermissionsForPhoto
Set permissions for a photo.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to set information for.
| isPublic    | Select     | 1 to set the photo to public, 0 to set it to private.
| isFriend    | Select     | 1 to make the photo visible to friends when private, 0 to not.
| permComment | Select     | Who can add comments to the photo and it's notes.0: nobody 1: friends & family 2: contacts 3: everybody 
| permAddmeta | Select     | who can add notes and tags to the photo.0: nobody 1: friends & family 2: contacts 3: everybody 
| isFamily    | Select     | 1 to make the photo visible to family when private, 0 to not.

## Flickr.setSafetyLevelOfPhoto
Set the safety level of a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to set information for.
| safetyLevel | Select     | The safety level of the photo. Must be one of: 1 for Safe, 2 for Moderate, and 3 for Restricted.
| hidden      | Select     | Whether or not to additionally hide the photo from public searches. Must be either 1 for Yes or 0 for No.

## Flickr.setTagsForPhoto
Set the tags for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to set information for.
| tags        | List       | All tags for the photo (as a single space-delimited string).

## Flickr.addCommentToPhoto
Add comment to a photo as the currently authenticated user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to add a comment to.
| commentText | String     | Text of the comment.

## Flickr.deleteCommentFromPhoto
Delete a comment as the currently authenticated user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| commentId   | String     | The id of the comment to edit.

## Flickr.getPhotoComments
Returns the comments for a photo.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| photoId       | String     | The id of the photo to fetch comments for.
| minCommentDate| DatePicker | Minimum date that a a comment was added.
| maxCommentDate| DatePicker | Maximum date that a comment was added. 

## Flickr.updatePhotoComment
Edit the text of a comment as the currently authenticated user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| commentId   | String     | The id of the comment to edit.
| commentText | String     | Update the comment to this text.

## Flickr.getPhotoCommentsForContacts
Return the list of photos belonging to your contacts that have been commented on recently.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| ApiKey of the your app.
| apiSecret      | credentials| ApiSecret of the your app.
| accessToken    | String     | accessToken from the getAccessToken method.
| accessSecret   | String     | accessSecret from the getAccessToken method.
| dateLastcomment| DatePicker | Limits the resultset to photos that have been commented on since this date. The date should be in the form of a Unix timestamp.
| contactsFilter | List       | List of contact NSIDs to limit the scope of the query to.
| extras         | List       | List of extra information to fetch for each returned record.
| perPage        | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page           | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.batchCorrectPhotoLocation
Correct the places hierarchy for all the photos for a user at a given latitude, longitude and accuracy.Batch corrections are processed in a delayed queue so it may take a few minutes before the changes are reflected in a user's photos.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| coordinates | Map        | The latitude of the photos to be update whose valid range is -90 to 90.The longitude of the photos to be updated whose valid range is -180 to 180. 
| accuracy    | Number     | Recorded accuracy level of the photos to be updated. World level is 1, Country is ~3, Region ~6, City ~11, Street ~16. Current range is 1-16. Defaults to 16 if not specified.
| placeId     | String     | A Flickr Places ID. (While optional, you must pass either a valid Places ID or a WOE ID.)
| woeId       | String     | A Where On Earth (WOE) ID. (While optional, you must pass either a valid Places ID or a WOE ID.)

## Flickr.correctPhotoGeoLocation
Correct photo geo location.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The ID of the photo whose WOE location is being corrected.
| placeId     | String     | A Flickr Places ID. (While optional, you must pass either a valid Places ID or a WOE ID.)
| woeId       | String     | A Where On Earth (WOE) ID. (While optional, you must pass either a valid Places ID or a WOE ID.)
| foursquareId| String     | The venue ID for a Foursquare location. (If not passed in with correction, any existing foursquare venue will be removed).

## Flickr.getGeoDataForPhoto
Get the geo data (latitude and longitude and the accuracy level) for a photo.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| photoId| String     | The id of the photo you want to retrieve location data for.

## Flickr.getPermissionsForPhotoGeoData
Get permissions for who may view geo data for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to get permissions for.

## Flickr.getPhotosByCoordinates
Return a list of photos for the calling user at a specific latitude, longitude and accuracy.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| coordinates | Map        | The latitude of the photos to be update whose valid range is -90 to 90.The longitude of the photos to be updated whose valid range is -180 to 180. 
| accuracy    | Number     | Recorded accuracy level of the photos to be updated. World level is 1, Country is ~3, Region ~6, City ~11, Street ~16. Current range is 1-16. Defaults to 16 if not specified.
| extras      | List       | List of extra information to fetch for each returned record.
| perPage     | Number     | Number of items to return per page. If this argument is omitted, it defaults to 100. The maximum allowed value is 500.
| page        | Number     | The page of results to return. If this argument is omitted, it defaults to 1.

## Flickr.removePhotoGeoData
Removes the geo data associated with a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo you want to remove location data from.

## Flickr.setGeoTagForPhoto
Indicate the state of a photo's geotagginess beyond latitude and longitude.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo you want to remove location data from.
| context     | Select     | Context is a numeric value representing the photo's geotagginess beyond latitude and longitude. For example, you may wish to indicate that a photo was taken `indoors` or `outdoors`. 

## Flickr.setGeoLocationForPhoto
Sets the geo data (latitude and longitude and, optionally, the accuracy level) for a photo. Before users may assign location data to a photo they must define who, by default, may view that information. Users can edit this preference at http://www.flickr.com/account/geo/privacy/. If a user has not set this preference, the API method will return an error.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| photoId     | String     | The id of the photo to set location data for.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| coordinates | Map        | The latitude of the photos to be update whose valid range is -90 to 90.The longitude of the photos to be updated whose valid range is -180 to 180. 
| accuracy    | Number     | Recorded accuracy level of the photos to be updated. World level is 1, Country is ~3, Region ~6, City ~11, Street ~16. Current range is 1-16. Defaults to 16 if not specified.
| context     | Select     | Context is a numeric value representing the photo's geotagginess beyond latitude and longitude. For example, you may wish to indicate that a photo was taken `indoors` or `outdoors`. 

## Flickr.setPermissionForGeoDataPhoto
Set the permission for who may view the geo data associated with a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| isPublic    | Select     | 1 to set viewing permissions for the photo's location data to public, 0 to set it to private.
| isFriend    | Select     | 1 to set viewing permissions for the photo's location data to friends, 0 to set it to private.
| isContact   | Select     | 1 to set viewing permissions for the photo's location data to contacts, 0 to set it to private.
| isFamily    | Select     | 1 to set viewing permissions for the photo's location data to family, 0 to set it to private.
| photoId     | Select     | The id of the photo to get permissions for.

## Flickr.uploadPhoto
Upload Photo to Flickr.This method requires authentication with 'write' permission.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoUrl    | File       | Url of the photo.
| title       | File       | The title of the photo.
| description | File       | A description of the photo. May contain some limited HTML.
| tags        | List       | The tags to add to the photo.
| isPublic    | Select     | 1 to set viewing permissions for the photo's location data to public, 0 to set it to private.
| isFriend    | Select     | 1 to set viewing permissions for the photo's location data to friends, 0 to set it to private.
| isFamily    | Select     | 1 to set viewing permissions for the photo's location data to family, 0 to set it to private.
| safetyLevel | Select     | Set to 1 for Safe, 2 for Moderate, or 3 for Restricted. If omitted or an invalid value is passed, will be set to user's default
| contentType | Select     | Set to 1 for Photo, 2 for Screenshot, or 3 for Other. If omitted , will be set to user's default
| hidden      | Select     | Set to 1 to keep the photo in global search results, 2 to hide from public searches. If omitted, will be set based to user's default

## Flickr.lookupUser
Returns a user NSID, given the url to a user's photos or profile.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.
| url   | String     | The url to the user's profile or photos page.

## Flickr.lookupGroup
Returns a group NSID, given the url to a group's page or photo pool.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.
| url   | String     | The url to the group's page or photo pool.

## Flickr.lookupGallery
Returns gallery info, by url.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.
| url   | String     | The url to gallery

## Flickr.getUserProfile
Returns the url to a user's profile.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.
| userId| String     | The NSID of the user to fetch the url for. If omitted, the calling user is assumed.          

## Flickr.getUserPhotosUrl
Returns the url to a user's photos.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.
| userId| String     | The NSID of the user to fetch the url for. If omitted, the calling user is assumed.          

## Flickr.getGroup
Returns the url to a group's page.

| Field  | Type       | Description
|--------|------------|----------
| apiKey | credentials| ApiKey of the your app.
| groupId| String     | The NSID of the group to fetch the url for.

## Flickr.getTestimonialsBy
Get approved testimonials written by the given user

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | ID of the user to get testimonials written by
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of testimonials to return per page. Default is 10, maximum is 50

## Flickr.getTestimonialsAboutBy
Get the approved testimonial by the currently logged-in user about the given user. Note that at most 1 testimonial will be returned

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | ID of the user to get testimonials written about

## Flickr.getTestimonialsAbout
Get approved testimonials about the given user

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | ID of the user to get testimonials written about
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of testimonials to return per page. Default is 10, maximum is 50

## Flickr.getPendingTestimonialsBy
Get all pending testimonials written by the given user

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of testimonials to return per page. Default is 10, maximum is 50

## Flickr.getPendingTestimonialsAboutBy
Get the pending testimonial by the currently logged-in user about the given user. Note that at most 1 testimonial will be returned

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | ID of the user to get testimonials written about

## Flickr.getPendingTestimonialsAbout
Get all pending testimonials written about the given user

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of testimonials to return per page. Default is 10, maximum is 50

## Flickr.getAllTestimonialsBy
Get all testimonials (pending and approved) written by the given user

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of testimonials to return per page. Default is 10, maximum is 50

## Flickr.getAllTestimonialsAboutBy
Get the testimonial by the currently logged-in user about the given user, regardless of approval status. Note that at most 1 testimonial will be returned

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | ID of the user to get testimonials written about

## Flickr.getAllTestimonialsAbout
Get all testimonials (pending and approved) written about the given user

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of testimonials to return per page. Default is 10, maximum is 50

## Flickr.addTestimonial
Get all testimonials (pending and approved) written about the given user

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| ApiKey of the your app.
| apiSecret      | credentials| ApiSecret of the your app.
| accessToken    | String     | accessToken from the getAccessToken method.
| accessSecret   | String     | accessSecret from the getAccessToken method.
| userId         | String     | ID of the user the testimonial is about
| testimonialText| String     | The text of the testimonial. HTML/BBCode is not accepted

## Flickr.approveTestimonial
Approve a testimonial that has been written about the currently loggedin user

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| testimonialId| String     | ID of the testimonial to approve

## Flickr.deleteTestimonial
Delete a testimonial that has been written about the currently loggedin user

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| testimonialId| String     | ID of the testimonial to delete

## Flickr.editTestimonial
Change the text of a testimonial. The loggedin user must be the author of the existing testimonial. 

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| ApiKey of the your app.
| apiSecret      | credentials| ApiSecret of the your app.
| accessToken    | String     | accessToken from the getAccessToken method.
| accessSecret   | String     | accessSecret from the getAccessToken method.
| testimonialId  | String     | ID of the testimonial to edit
| userId         | String     | ID of the user the testimonial is about
| testimonialText| String     | The text of the testimonial. HTML/BBCode is not accepted

## Flickr.testEcho
A testing method which echo's all parameters back in the response.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| ApiKey of the your app.

## Flickr.testLogin
A testing method which checks if the caller is logged in then returns their username.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.testNull
Null test

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getCollectionDomains
Get a list of referring domains for a collection

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| collectionId| String     | The id of the collection to get stats for. If not provided, stats for all collections will be returned.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getCollectionReferrers
Get a list of referrers from a given domain to a collection

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| collectionId| String     | The id of the collection to get stats for. If not provided, stats for all collections will be returned.
| domain      | String     | he domain to return referrers for. This should be a hostname (eg: "flickr.com") with no protocol or pathname.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getCollectionStats
Get the number of views on a collection for a given date.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| collectionId| String     | The id of the collection to get stats for. If not provided, stats for all collections will be returned.

## Flickr.getCSVFiles
Returns a list of URLs for text files containing all your stats data (from November 26th 2007 onwards) for the currently auth'd user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getPhotoDomains
Get a list of referring domains for a photo

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| photoId     | String     | The id of the photo to get stats for. If not provided, stats for all photos will be returned.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getPhotoReferrers
Get a list of referrers from a given domain to a photo

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| domain      | String     | he domain to return referrers for. This should be a hostname (eg: "flickr.com") with no protocol or pathname.
| photoId     | String     | The id of the photo to get stats for. If not provided, stats for all photos will be returned.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getPhotosetDomains
Get a list of referring domains for a photoset

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| photosetId  | String     | The id of the photoset to get stats for. If not provided, stats for all photosets will be returned.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getPhotosetReferrers
Get a list of referrers from a given domain to a photoset

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| domain      | String     | The domain to return referrers for. This should be a hostname (eg: "flickr.com") with no protocol or pathname.
| photosetId  | String     | The id of the photoset to get stats for. If not provided, stats for all photosets will be returned.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getPhotosetStats
Get the number of views on a photoset for a given date.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| photosetId  | String     | The id of the photoset to get stats for. If not provided, stats for all photosets will be returned.

## Flickr.getUserPhotoStats
Get the number of views on a photo for a given date.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| photoId     | String     | The id of the photo to get stats for. If not provided, stats for all photos will be returned.

## Flickr.getPhotostreamDomains
Get a list of referring domains for a photostream

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getPhotostreamReferrers
Get a list of referrers from a given domain to a user's photostream

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| domain      | String     | The domain to return referrers for. This should be a hostname (eg: "flickr.com") with no protocol or pathname.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getPhotostreamStats
Get the number of views on a user's photostream for a given date.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD

## Flickr.getPopularPhotoStats
List the photos with the most views, comments or favorites

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| sort        | String     | The order in which to sort returned photos. Defaults to views.
| page        | Number     | Page number. Default is 0
| perPage     | Number     | Number of items to return per page. Default is 10, maximum is 50

## Flickr.getTotalViews
Get the overall view counts for an account

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD

## Flickr.getClusterPhotos
Returns the first 24 photos for a given tag cluster

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tag         | String     | The tag that this cluster belongs to.
| clusterId   | String     | The top three tags for the cluster, separated by dashes (just like the url).

## Flickr.getClusters
Gives you a list of tag clusters for the given tag.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tag         | String     | The tag that this cluster belongs to.

## Flickr.getHotList
Returns a list of hot tags for the given period.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| period      | Select     | The period for which to fetch hot tags. Valid values are day and week (defaults to day).
| count       | Number     | The number of tags to return. Defaults to 20. Maximum allowed value is 200.

## Flickr.getListPhoto
Get the tag list for a given photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The id of the photo to return tags for.

## Flickr.getListUser
Get the tag list for a given user (or the currently logged in user).

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The NSID of the user to fetch the tag list for. If this argument is not specified, the currently logged in user (if any) is assumed.

## Flickr.getListUserPopular
Get the popular tags for a given user (or the currently logged in user).

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | The NSID of the user to fetch the tag list for. If this argument is not specified, the currently logged in user (if any) is assumed.
| count       | Number     | The number of tags to return. Defaults to 20. Maximum allowed value is 200.

## Flickr.getListUserRaw
Get the raw versions of a given tag (or all tags) for the currently logged-in user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tag         | String     | The tag you want to retrieve all raw versions for.

## Flickr.getMostFrequentlyUsed
Returns a list of most frequently used tags for a user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getRelated
Returns a list of tags 'related' to the given tag, based on clustered usage analysis.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tag         | String     | The tag you want to retrieve all related tags for.

## Flickr.getMethodInfo
Returns information for a given flickr API method.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| methodName  | String     | The name of the method to fetch information for.

## Flickr.getMethods
Returns a list of available flickr API methods.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getSubscriptions
Returns a list of the subscriptions for the logged-in user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getTopics
All the different flavours of anteater.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.subscribe
Subscribe to event

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| topic       | String     | The type of subscription.
| callback    | String     | The url for the subscription endpoint.
| verify      | Select     | The verification mode, either sync or async.
| verifyToken | String     | The verification token to be echoed back to the subscriber during the verification callback
| leaseSeconds| Number     | Number of seconds for which the subscription will be valid. Legal values are 60 to 86400
| woeIds      | Number     | A 32-bit integer for a Where on Earth ID. Only valid if topic is geo. 
| placeIds    | List       | A list of Flickr place IDs. Only valid if topic is geo. 
| coordinates | Map        | Defines the coordinates for a radial query centered around (lat, lon).
| radius      | String     | A radius value, in the units defined by radiusUnits. 
| radiusUnits | Select     | Defines the units for the radius parameter. Only valid if topic is geo. Options are mi and km. Default is km. 
| accuracy    | Number     | Defines the minimum accuracy required for photos to be included in a subscription. Only valid if topic is geo Legal values are 1-16, default is 1 (i.e. any accuracy level).
| nsIds       | List       | A list of nsids representing Flickr Commons institutions
| tags        | List       | A list of strings to be used for tag subscriptions. 

## Flickr.unsubscribe
Unsibscribe from event

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| topic       | String     | The type of subscription. 
| callback    | String     | The url for the subscription endpoint (must be the same url as was used when creating the subscription).
| verify      | Select     | The verification mode, either sync or async.
| verifyToken | String     | The verification token to be echoed back to the subscriber during the verification callback

## Flickr.getProfile
Returns specified user's profile info, respecting profile privacy settings

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| userId      | String     | The NSID of the user to fetch the url for. 

## Flickr.getContentType
Returns the default content type preference for the user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getGeoPerms
Returns the default privacy level for geographic information attached to the user's photos

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getHidden
Returns the default hidden preference for the user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getPrivacy
Returns the default privacy level preference for the user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getSafetyLevel
Returns the default safety level preference for the user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.findPlace
Find place by query

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| query       | String     | The query string to use for place ID lookups

## Flickr.findByLatLon
Returns the default safety level preference for the user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| coordinates | Map        | Defines the coordinates for a radial query centered around (lat, lon).
| accuracy    | Number     | Recorded accuracy level of the location information. Legal values are 1-16, default is 1 (i.e. any accuracy level).

## Flickr.getChildrenWithPhotosPublicByPlaceId
Return a list of locations with public photos that are parented by Places ID.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| placeId     | String     | A Flickr Places ID. 

## Flickr.getChildrenWithPhotosPublicByWoeId
Return a list of locations with public photos that are parented by Woe ID.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| woeId       | String     | A Where On Earth (WOE) ID.

## Flickr.getInfoByPlaceId
Get informations about a place.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| placeId     | String     | A Flickr Places ID. 

## Flickr.getInfoByWoeId
Get place info by Woe ID.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| woeId       | String     | A Where On Earth (WOE) ID.

## Flickr.getInfoByUrl
Lookup information about a place, by its flickr.com/places URL.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| url         | String     | A flickr.com/places URL in the form of /country/region/city. For example: /Canada/Quebec/Montreal

## Flickr.getPlaceTypes
Fetches a list of available place types for Flickr.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.getShapeHistoryByPlaceId
Return an historical list of all the shape data generated

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| placeId     | String     | A Flickr Places ID. 

## Flickr.getShapeHistoryByWoeId
Return an historical list of all the shape data generated

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| woeId       | String     | A Where On Earth (WOE) ID.

## Flickr.getTopPlacesList
Return the top 100 most geotagged places for a day.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| woeId       | String     | A Where On Earth (WOE) ID.
| placeId     | String     | A Flickr Places ID. 
| date        | DatePicker | Stats will be returned for this date. This should be in either be in YYYY-MM-DD
| placeTypeId | Select     | The numeric ID for a specific place type to cluster photos by.

## Flickr.placesForBoundingBox
Return all the locations of a matching place type for a bounding box.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| minBBox     | Map        | The bottom-left corner of the box
| maxBBox     | Map        | The top-right corner of the box
| placeTypeId | Select     | The numeric ID for a specific place type to cluster photos by.
| placeType   | Select     | The name of place type to using as the starting point to search for places in a bounding box. 

## Flickr.placesForContactsByPlaceId
Return a list of the top 100 unique places clustered by a given placetype for a user's contacts.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeTypeId  | Select     | The numeric ID for a specific place type to cluster photos by.
| placeType    | Select     | The name of place type to using as the starting point to search for places in a bounding box. 
| placeId      | String     | A Flickr Places ID. 
| threshold    | Number     | The minimum number of photos that a place type must have to be included. 
| contacts     | Select     | Search your contacts. Either 'all' or 'ff' for just friends and family. (Default is all)
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForContactsByWoeId
Return a list of the top 100 unique places clustered by a given placetype for a user's contacts.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeTypeId  | Select     | The numeric ID for a specific place type to cluster photos by.
| placeType    | Select     | The name of place type to using as the starting point to search for places in a bounding box. 
| woeId        | String     | Where on Earth Id
| threshold    | Number     | The minimum number of photos that a place type must have to be included. 
| contacts     | Select     | Search your contacts. Either 'all' or 'ff' for just friends and family. (Default is all)
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForTagsByPlaceId
Return a list of the top 100 unique places clustered by a given placetype for set of tags.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeTypeId  | Select     | The numeric ID for a specific place type to cluster photos by.
| placeId      | String     | A Flickr Places ID. 
| threshold    | Number     | The minimum number of photos that a place type must have to be included. 
| tags         | List       | Photos with one or more of the tags listed will be returned. 
| tagMode      | Select     | Either 'any' for an OR combination of tags, or 'all' for an AND combination. Defaults to 'any' if not specified.
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForTagsByWoeId
Return a list of the top 100 unique places clustered by a given placetype for set of tags.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeTypeId  | Select     | The numeric ID for a specific place type to cluster photos by.
| woeId        | String     | Where on Earth ID. 
| threshold    | Number     | The minimum number of photos that a place type must have to be included. 
| tags         | List       | Photos with one or more of the tags listed will be returned. 
| tagMode      | Select     | Either 'any' for an OR combination of tags, or 'all' for an AND combination. Defaults to 'any' if not specified.
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForMachineTagsByPlaceId
Return a list of the top 100 unique places clustered by a given placetype for set of machine tags.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| placeTypeId   | Select     | The numeric ID for a specific place type to cluster photos by.
| placeId       | String     | A Flickr Places ID. 
| threshold     | Number     | The minimum number of photos that a place type must have to be included. 
| machineTags   | List       | Photos with one or more of the tags listed will be returned. 
| machineTagMode| Select     | Either 'any' for an OR combination of tags, or 'all' for an AND combination. Defaults to 'any' if not specified.
| minUploadDate | DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate | DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate  | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate  | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForMachineTagsByWoeId
Return a list of the top 100 unique places clustered by a given placetype for set of machine tags.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| placeTypeId   | Select     | The numeric ID for a specific place type to cluster photos by.
| woeId         | String     | Where on Earth ID. 
| threshold     | Number     | The minimum number of photos that a place type must have to be included. 
| machineTags   | List       | Photos with one or more of the tags listed will be returned. 
| machineTagMode| Select     | Either 'any' for an OR combination of tags, or 'all' for an AND combination. Defaults to 'any' if not specified.
| minUploadDate | DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate | DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate  | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate  | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForUserByPlaceId
Return a list of the top 100 unique places clustered by a given placetype for a user.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeTypeId  | Select     | The numeric ID for a specific place type to cluster photos by.
| placeType    | Select     | The name of place type to using as the starting point to search for places in a bounding box. 
| placeId      | String     | A Flickr Places ID. 
| threshold    | Number     | The minimum number of photos that a place type must have to be included. 
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.placesForUserByWoeId
Return a list of the top 100 unique places clustered by a given placetype for a user.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeTypeId  | Select     | The numeric ID for a specific place type to cluster photos by.
| placeType    | Select     | The name of place type to using as the starting point to search for places in a bounding box. 
| woeId        | String     | Where on Earth Id
| threshold    | Number     | The minimum number of photos that a place type must have to be included. 
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.resolvePlaceId
Find Flickr Places information by Place ID.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| placeId     | String     | A Flickr Places ID. 

## Flickr.resolvePlaceURL
Find Flickr Places information by Place URL.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| placeUrl    | String     | A Flickr Places URL. 

## Flickr.tagsForPlaceByPlaceId
Return a list of the top 100 unique tags for a Flickr Places

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| placeId      | String     | A Flickr Places ID. 
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.tagsForPlaceByWoeId
Return a list of the top 100 unique tags for a Where on Earth (WOE) ID

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| woeId        | String     | Where on Earth Id
| minUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| maxUploadDate| DatePicker | Minimum upload date. This should be in YYYY-MM-DD
| minTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD
| maxTakenDate | DatePicker | Minimum taken date. This should be in YYYY-MM-DD

## Flickr.addComment
Add a comment to a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | The id of the photoset
| commentText | String     | Text of the comment

## Flickr.editComment
Add a comment to a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| commentId   | String     | Id of the comment
| commentText | String     | Text of the comment

## Flickr.deleteComment
Delete a comment to a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| commentId   | String     | Id of the comment

## Flickr.getPhotosetComments
Returns the comments for a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset

## Flickr.addPhotoToPhotoset
Add a photo to the end of an existing photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| photoId     | String     | Id of the photo

## Flickr.createPhotoset
Create a new photoset for the calling user.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| title         | String     | Title of the photoset
| primaryPhotoId| String     | The id of the photo to represent this set. The photo must belong to the calling user.
| description   | String     | Description of the photoset

## Flickr.deletePhotoset
Delete a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset

## Flickr.editPhotosetMeta
Modify the meta-data for a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| title       | String     | Title of the photoset
| description | String     | Description of the photoset

## Flickr.editPhotosetPhotos
Modify the photos of the photoset.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| ApiKey of the your app.
| apiSecret     | credentials| ApiSecret of the your app.
| accessToken   | String     | accessToken from the getAccessToken method.
| accessSecret  | String     | accessSecret from the getAccessToken method.
| photosetId    | String     | Id of the photoset
| primaryPhotoId| String     | The id of the photo to represent this set. The photo must belong to the calling user.
| photoIds      | List       | Photo ids to include in the set

## Flickr.getPhotosetContext
Returns next and previous photos for a photo in a set.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| photoId     | String     | The id of the photo to fetch the context for.

## Flickr.getUserPhotosets
Returns the photosets belonging to the specified user.

| Field             | Type       | Description
|-------------------|------------|----------
| apiKey            | credentials| ApiKey of the your app.
| apiSecret         | credentials| ApiSecret of the your app.
| accessToken       | String     | accessToken from the getAccessToken method.
| accessSecret      | String     | accessSecret from the getAccessToken method.
| userId            | String     | Id of the user
| page              | Number     | Page number. Default is 0
| perPage           | Number     | Number of items to return per page. Default is 10, maximum is 50
| photoIds          | List       | If specified, each returned set will include a list of these photo ids that are present in the set
| primaryPhotoExtras| List       | Extra information to fetch for the primary photo.

## Flickr.getUserPhotosInPhotoset
Get the list of photos in a set.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| ApiKey of the your app.
| apiSecret    | credentials| ApiSecret of the your app.
| accessToken  | String     | accessToken from the getAccessToken method.
| accessSecret | String     | accessSecret from the getAccessToken method.
| userId       | String     | Id of the user
| photosetId   | String     | Id of the photoset
| page         | Number     | Page number. Default is 0
| perPage      | Number     | Number of items to return per page. Default is 10, maximum is 50
| extras       | List       | Extra information to fetch for each returned record
| privacyFilter| Select     | Return photos only matching a certain privacy level
| media        | Select     | Filter results by media type. Possible values are all (default), photos or videos

## Flickr.orderSets
Set the order of photosets for the calling user.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetIds | List       | List of photoset IDs, ordered with the set to show first, first in the list.

## Flickr.removePhotoFromPhotoset
Remove a photo from a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| photoId     | String     | Id of the photo

## Flickr.removePhotosFromPhotoset
Remove several photos from a photoset.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| photoIds    | List       | Photo ids to remove from the set

## Flickr.reorderPhotosInPhotoset
List of photo ids. Photos that are not in the list will keep their original order

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| photoIds    | List       | Photo ids to remove from the set

## Flickr.setPrimaryPhoto
Set photoset primary photo

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photosetId  | String     | Id of the photoset
| photoId     | String     | Id of the photo

## Flickr.checkUploadTickets
Checks the status of one or more asynchronous photo upload tickets.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| tickets     | List       | List of ticket ids

## Flickr.rotatePhoto
Rotate a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| degrees     | Select     | Degrees to rotate
| photoId     | String     | Id of the photo

## Flickr.approveSuggestion
Approve a suggestion for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| suggestionId| String     | Id of the suggestion

## Flickr.getSuggenstionsList
Return a list of suggestions for a user that are pending approval.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| statusId    | Select     | Only show suggestions with a given status.
| photoId     | String     | Id of the photo

## Flickr.rejectSuggestion
Reject a suggestion for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| suggestionId| String     | Id of the suggestion

## Flickr.removeSuggestion
Remove a suggestion for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| suggestionId| String     | Id of the suggestion


## Flickr.addPersonToPhoto
Add a person to a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| userId      | String     | Id of the user
| personX     | Number     | The left-most pixel co-ordinate of the box around the person.
| personY     | Number     | The top-most pixel co-ordinate of the box around the person.
| personW     | Number     | The width (in pixels) of the box around the person.
| personH     | Number     | The height (in pixels) of the box around the person.

## Flickr.deletePersonFromPhoto
Delete a person from a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| userId      | String     | Id of the user

## Flickr.deletePersonCoordinatesFromPhoto
Remove the bounding box from a person in a photo

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| userId      | String     | Id of the user

## Flickr.addPersonCoordinatesOnPhoto
Edit the bounding box of an existing person on a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| userId      | String     | Id of the user
| personX     | Number     | The left-most pixel co-ordinate of the box around the person.
| personY     | Number     | The top-most pixel co-ordinate of the box around the person.
| personW     | Number     | The width (in pixels) of the box around the person.
| personH     | Number     | The height (in pixels) of the box around the person.

## Flickr.getPhotoPersons
Get a list of people in a given photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo

## Flickr.addNoteToPhoto
Add a note to a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| noteText    | String     | Text of the note
| noteX       | Number     | The left-most pixel co-ordinate of the box around the note.
| noteY       | Number     | The top-most pixel co-ordinate of the box around the note.
| noteW       | Number     | The width (in pixels) of the box around the note.
| noteH       | Number     | The height (in pixels) of the box around the note.

## Flickr.editNoteOnPhoto
Edit a note on a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| noteId      | String     | Id of the note
| noteText    | String     | Text of the note
| noteX       | Number     | The left-most pixel co-ordinate of the box around the note.
| noteY       | Number     | The top-most pixel co-ordinate of the box around the note.
| noteW       | Number     | The width (in pixels) of the box around the note.
| noteH       | Number     | The height (in pixels) of the box around the note.

## Flickr.deleteNoteFromPhoto
Delete a note from a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| noteId      | String     | Id of the note

## Flickr.getPhotoLicenses
Fetches a list of available photo licenses for Flickr.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.

## Flickr.setPhotoLicense
Sets the license for a photo.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| licenseId   | String     | Id of the license

## Flickr.replacePhoto
Replace photo

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| ApiKey of the your app.
| apiSecret   | credentials| ApiSecret of the your app.
| accessToken | String     | accessToken from the getAccessToken method.
| accessSecret| String     | accessSecret from the getAccessToken method.
| photoId     | String     | Id of the photo
| photo       | File       | New photo

