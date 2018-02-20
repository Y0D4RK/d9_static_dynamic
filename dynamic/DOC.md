### `POST` /api/announcement ###

_Create a new announcement_

#### Parameters ####

appbundle_announcement:

  * type: object (AnnouncementType)
  * required: true

appbundle_announcement[label]:

  * type: string
  * required: true

appbundle_announcement[pricePerHourPerUser]:

  * type: float
  * required: true

appbundle_announcement[description]:

  * type: string
  * required: true

appbundle_announcement[enabled]:

  * type: boolean
  * required: true

appbundle_announcement[addressOut]:

  * type: string
  * required: true

appbundle_announcement[elevatorOut]:

  * type: boolean
  * required: false

appbundle_announcement[volumeOut]:

  * type: float
  * required: true

appbundle_announcement[volumeScaleOut]:

  * type: string
  * required: true

appbundle_announcement[parkingOut]:

  * type: boolean
  * required: false

appbundle_announcement[addressIn]:

  * type: string
  * required: true

appbundle_announcement[elevatorIn]:

  * type: boolean
  * required: false

appbundle_announcement[volumeIn]:

  * type: float
  * required: true

appbundle_announcement[volumeScaleIn]:

  * type: string
  * required: true

appbundle_announcement[parkingIn]:

  * type: boolean
  * required: false

appbundle_announcement[dealDays]:

  * type: string
  * required: true

appbundle_announcement[user]:

  * type: choice
  * required: true


### `DELETE` /api/announcement/{id} ###

_Remove a single announcement_

#### Requirements ####

**id**



### `GET` /api/announcement/{id} ###

_Get a single announcement by id_

#### Requirements ####

**id**


#### Filters ####

id:

  * DataType: integer


### `GET` /api/announcements ###

_Get all announcements_
