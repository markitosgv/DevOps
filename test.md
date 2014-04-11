# Expedition #

## /{country}/api/v1/expeditions ##

### `GET` /{country}/api/v1/expeditions ###

_List Expeditions_

List Expeditions

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Filters ####

number:

  * Requirement: \d+
  * Description: Expedition unique number.

status:

  * Requirement: null
  * Description: Expedition status.

site_from:

  * Requirement: \d+
  * Description: Expedition origin site.

site_target:

  * Requirement: \d+
  * Description: Expedition destiny site.

sort_field:

  * Requirement: id_expedition|number|as400|site_from|site_target|status_expedition
  * Description: Sort field property.

sort_direction:

  * Requirement: ASC|DESC
  * Description: Sort direction.

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing expeditions.

limit:

  * Requirement: \d+
  * Description: How many expeditions to return.
  * Default: 5

#### Response ####

number:

  * type: integer
  * description: Expedition unique number

site_from:

  * type: object (Site)
  * description: Site from expedition is send

site_from[id_site]:

  * type: integer
  * description: Site id

site_from[name]:

  * type: string
  * description: Site name

site_from[number]:

  * type: integer
  * description: Site unique number

site_from[zip]:

  * type: integer
  * description: Zip code

site_from[address]:

  * type: string
  * description: Site address

site_target:

  * type: object (Site)
  * description: Site target expedition arrives

status_expedition:

  * type: object (StatusExpedition)
  * description: Expedition status

status_expedition[id_status_expedition]:

  * type: integer
  * description: Status expedition id

status_expedition[key]:

  * type: string
  * description: Status expedition key

status_expedition[description]:

  * type: string
  * description: Status expedition description

profile:

  * type: object (Profile)
  * description: Profile

id_expedition:

  * type: integer
  * description: Expedition id

as400:

  * type: string
  * description: AS400 Number


### `POST` /{country}/api/v1/expeditions ###

_Create a Expedition from the submitted data and track initial status_

Create a Expedition from the submitted data and track initial status

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Parameters ####

as400:

  * type: string
  * required: true
  * description: AS400 expedition number

site_from:

  * type: string
  * required: true
  * description: Site from expedition send

site_target:

  * type: string
  * required: true
  * description: Site target expedition arrives

profile:

  * type: string
  * required: true
  * description: Profile name


## /{country}/api/v1/expeditions/{number} ##

### `GET` /{country}/api/v1/expeditions/{number} ###

_Get a single Expedition_

Get a single Expedition

#### Requirements ####

**number**

  - Requirement: \d+
  - Type: int
  - Description: Expedition unique number
**country**

  - Requirement: es|it|ru|gb|de

#### Response ####

number:

  * type: integer
  * description: Expedition unique number

site_from:

  * type: object (Site)
  * description: Site from expedition is send

site_from[id_site]:

  * type: integer
  * description: Site id

site_from[name]:

  * type: string
  * description: Site name

site_from[number]:

  * type: integer
  * description: Site unique number

site_from[zip]:

  * type: integer
  * description: Zip code

site_from[address]:

  * type: string
  * description: Site address

site_target:

  * type: object (Site)
  * description: Site target expedition arrives

status_expedition:

  * type: object (StatusExpedition)
  * description: Expedition status

status_expedition[id_status_expedition]:

  * type: integer
  * description: Status expedition id

status_expedition[key]:

  * type: string
  * description: Status expedition key

status_expedition[description]:

  * type: string
  * description: Status expedition description

profile:

  * type: object (Profile)
  * description: Profile

profile[id_profile]:

  * type: integer
  * description: Profile id

profile[profile]:

  * type: string
  * description: Profile name

id_expedition:

  * type: integer
  * description: Expedition id

as400:

  * type: string
  * description: AS400 Number


### `PATCH` /{country}/api/v1/expeditions/{number} ###

_Partially update existing expedition from the submitted data_

Partially update existing expedition from the submitted data

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Expedition unique number

#### Parameters ####

as400:

  * type: string
  * required: true
  * description: AS400 expedition number

site_from:

  * type: string
  * required: true
  * description: Site from expedition send

site_target:

  * type: string
  * required: true
  * description: Site target expedition arrives

status_expedition:

  * type: string
  * required: true
  * description: Expedition status

profile:

  * type: string
  * required: true
  * description: Profile name


### `PUT` /{country}/api/v1/expeditions/{number} ###

_Update existing expedition from the submitted data or create a new expedition at a specific location_

Update existing expedition from the submitted data or create a new expedition at a specific location

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Expedition unique number

#### Parameters ####

as400:

  * type: string
  * required: true
  * description: AS400 expedition number

site_from:

  * type: string
  * required: true
  * description: Site from expedition send

site_target:

  * type: string
  * required: true
  * description: Site target expedition arrives

status_expedition:

  * type: string
  * required: true
  * description: Expedition status

profile:

  * type: string
  * required: true
  * description: Profile name


### `DELETE` /{country}/api/v1/expeditions/{number} ###

_Delete existing expedition_

Delete existing expedition

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Expedition unique number


### `GET` /{country}/api/v1/expeditions/{number}/orders ###

_Get single Expedition with his associated orders_

Get single Expedition with his associated orders

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Expedition unique number

#### Response ####

number:

  * type: integer
  * description: Expedition unique number

site_from:

  * type: object (Site)
  * description: Site from expedition is send

site_from[id_site]:

  * type: integer
  * description: Site id

site_from[name]:

  * type: string
  * description: Site name

site_from[number]:

  * type: integer
  * description: Site unique number

site_from[zip]:

  * type: integer
  * description: Zip code

site_from[address]:

  * type: string
  * description: Site address

site_target:

  * type: object (Site)
  * description: Site target expedition arrives

status_expedition:

  * type: object (StatusExpedition)
  * description: Expedition status

status_expedition[id_status_expedition]:

  * type: integer
  * description: Status expedition id

status_expedition[key]:

  * type: string
  * description: Status expedition key

status_expedition[description]:

  * type: string
  * description: Status expedition description

profile:

  * type: object (Profile)
  * description: Profile

profile[id_profile]:

  * type: integer
  * description: Profile id

profile[profile]:

  * type: string
  * description: Profile name

id_expedition:

  * type: integer
  * description: Expedition id

as400:

  * type: string
  * description: AS400 Number

order[]:

  * type: array of objects (Order)

order[][id_order]:

  * type: integer
  * description: Order id

order[][number]:

  * type: string
  * description: Order unique number

order[][site]:

  * type: object (Site)
  * description: Order target end site

order[][site][id_site]:

  * type: integer
  * description: Site id

order[][site][name]:

  * type: string
  * description: Site name

order[][site][number]:

  * type: integer
  * description: Site unique number

order[][site][zip]:

  * type: integer
  * description: Zip code

order[][site][address]:

  * type: string
  * description: Site address

order[][customer]:

  * type: object (Customer)
  * description: Customer

order[][customer][id_customer]:

  * type: integer
  * description: Customer id

order[][customer][email]:

  * type: string
  * description: Customer email

order[][status_order]:

  * type: object (StatusOrder)
  * description: Order status

order[][status_order][id_status_order]:

  * type: integer
  * description: Status order id

order[][status_order][key]:

  * type: string
  * description: Status order key

order[][status_order][description]:

  * type: string
  * description: Status order description

order[][profile]:

  * type: object (Profile)
  * description: Profile

order[][profile][id_profile]:

  * type: integer
  * description: Profile id

order[][profile][profile]:

  * type: string
  * description: Profile name


### `GET` /{country}/api/v1/expeditions/{number}/tracks ###

_Get single Expedition with track history_

Get single Expedition with track history

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Expedition unique number

#### Response ####

number:

  * type: integer
  * description: Expedition unique number

site_from:

  * type: object (Site)
  * description: Site from expedition is send

site_from[id_site]:

  * type: integer
  * description: Site id

site_from[name]:

  * type: string
  * description: Site name

site_from[number]:

  * type: integer
  * description: Site unique number

site_from[zip]:

  * type: integer
  * description: Zip code

site_from[address]:

  * type: string
  * description: Site address

site_target:

  * type: object (Site)
  * description: Site target expedition arrives

status_expedition:

  * type: object (StatusExpedition)
  * description: Expedition status

status_expedition[id_status_expedition]:

  * type: integer
  * description: Status expedition id

status_expedition[key]:

  * type: string
  * description: Status expedition key

status_expedition[description]:

  * type: string
  * description: Status expedition description

profile:

  * type: object (Profile)
  * description: Profile

profile[id_profile]:

  * type: integer
  * description: Profile id

profile[profile]:

  * type: string
  * description: Profile name

id_expedition:

  * type: integer
  * description: Expedition id

as400:

  * type: string
  * description: AS400 Number

order[]:

  * type: array of objects (Order)

order[][id_order]:

  * type: integer
  * description: Order id

order[][number]:

  * type: string
  * description: Order unique number

order[][site]:

  * type: object (Site)
  * description: Order target end site

order[][site][id_site]:

  * type: integer
  * description: Site id

order[][site][name]:

  * type: string
  * description: Site name

order[][site][number]:

  * type: integer
  * description: Site unique number

order[][site][zip]:

  * type: integer
  * description: Zip code

order[][site][address]:

  * type: string
  * description: Site address

order[][customer]:

  * type: object (Customer)
  * description: Customer

order[][customer][id_customer]:

  * type: integer
  * description: Customer id

order[][customer][email]:

  * type: string
  * description: Customer email

order[][status_order]:

  * type: object (StatusOrder)
  * description: Order status

order[][status_order][id_status_order]:

  * type: integer
  * description: Status order id

order[][status_order][key]:

  * type: string
  * description: Status order key

order[][status_order][description]:

  * type: string
  * description: Status order description

order[][profile]:

  * type: object (Profile)
  * description: Profile

order[][profile][id_profile]:

  * type: integer
  * description: Profile id

order[][profile][profile]:

  * type: string
  * description: Profile name



# Order #

## /{country}/api/v1/orders ##

### `GET` /{country}/api/v1/orders ###

_List Orders_

List Orders

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Filters ####

customer:

  * Requirement: null
  * Description: Customer email.

status:

  * Requirement: null
  * Description: Order status.

site_target:

  * Requirement: \d+
  * Description: Order destiny site number.

sort_field:

  * Requirement: number
  * Description: Sort field property.

sort_direction:

  * Requirement: ASC|DESC
  * Description: Sort direction.

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing orders.

limit:

  * Requirement: \d+
  * Description: How many orders to return.
  * Default: 5

#### Response ####

number:

  * type: string
  * description: Order unique number

site:

  * type: object (Site)
  * description: Order target end site

site[id_site]:

  * type: integer
  * description: Site id

site[name]:

  * type: string
  * description: Site name

site[number]:

  * type: integer
  * description: Site unique number

site[zip]:

  * type: integer
  * description: Zip code

site[address]:

  * type: string
  * description: Site address

expedition:

  * type: object (Expedition)
  * description: Expedition order belong

customer:

  * type: object (Customer)
  * description: Customer

status_order:

  * type: object (StatusOrder)
  * description: Order status

status_order[id_status_order]:

  * type: integer
  * description: Status order id

status_order[key]:

  * type: string
  * description: Status order key

status_order[description]:

  * type: string
  * description: Status order description

profile:

  * type: object (Profile)
  * description: Profile

id_order:

  * type: integer
  * description: Order id


### `POST` /{country}/api/v1/orders ###

_Create a Order from the submitted data and track initial status_

Create a Order from the submitted data and track initial status

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Parameters ####

number:

  * type: string
  * required: true
  * description: Order unique Number

customer:

  * type: string
  * required: true
  * description: Customer email

site:

  * type: string
  * required: true
  * description: Site end target order arrives

profile:

  * type: string
  * required: true
  * description: Profile name


## /{country}/api/v1/orders/{number} ##

### `GET` /{country}/api/v1/orders/{number} ###

_Get a single Order_

Get a single Order

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: string
  - Description: Order number

#### Response ####

number:

  * type: string
  * description: Order unique number

site:

  * type: object (Site)
  * description: Order target end site

site[id_site]:

  * type: integer
  * description: Site id

site[name]:

  * type: string
  * description: Site name

site[number]:

  * type: integer
  * description: Site unique number

site[zip]:

  * type: integer
  * description: Zip code

site[address]:

  * type: string
  * description: Site address

expedition:

  * type: object (Expedition)
  * description: Expedition order belong

expedition[id_expedition]:

  * type: integer
  * description: Expedition id

expedition[number]:

  * type: integer
  * description: Expedition unique number

expedition[as400]:

  * type: string
  * description: AS400 Number

expedition[site_from]:

  * type: object (Site)
  * description: Site from expedition is send

expedition[site_target]:

  * type: object (Site)
  * description: Site target expedition arrives

expedition[status_expedition]:

  * type: object (StatusExpedition)
  * description: Expedition status

expedition[status_expedition][id_status_expedition]:

  * type: integer
  * description: Status expedition id

expedition[status_expedition][key]:

  * type: string
  * description: Status expedition key

expedition[status_expedition][description]:

  * type: string
  * description: Status expedition description

expedition[profile]:

  * type: object (Profile)
  * description: Profile

expedition[profile][id_profile]:

  * type: integer
  * description: Profile id

expedition[profile][profile]:

  * type: string
  * description: Profile name

customer:

  * type: object (Customer)
  * description: Customer

customer[id_customer]:

  * type: integer
  * description: Customer id

customer[email]:

  * type: string
  * description: Customer email

status_order:

  * type: object (StatusOrder)
  * description: Order status

status_order[id_status_order]:

  * type: integer
  * description: Status order id

status_order[key]:

  * type: string
  * description: Status order key

status_order[description]:

  * type: string
  * description: Status order description

profile:

  * type: object (Profile)
  * description: Profile

profile[id_profile]:

  * type: integer
  * description: Profile id

profile[profile]:

  * type: string
  * description: Profile name

id_order:

  * type: integer
  * description: Order id


### `PATCH` /{country}/api/v1/orders/{number} ###

_Partially update existing Order from the submitted data_

Partially update existing Order from the submitted data

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: string
  - Description: Order number

#### Parameters ####

expedition:

  * type: string
  * required: true
  * description: Expedition order belongs

customer:

  * type: string
  * required: true
  * description: Customer email

site:

  * type: string
  * required: true
  * description: Site end target order arrives

status_order:

  * type: string
  * required: true
  * description: Order status

profile:

  * type: string
  * required: true
  * description: Profile name


### `PUT` /{country}/api/v1/orders/{number} ###

_Update existing Order from the submitted data or create a new Order at a specific location_

Update existing Order from the submitted data or create a new Order at a specific location

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: string
  - Description: Order number

#### Parameters ####

expedition:

  * type: string
  * required: true
  * description: Expedition order belongs

customer:

  * type: string
  * required: true
  * description: Customer email

site:

  * type: string
  * required: true
  * description: Site end target order arrives

status_order:

  * type: string
  * required: true
  * description: Order status

profile:

  * type: string
  * required: true
  * description: Profile name


### `DELETE` /{country}/api/v1/orders/{number} ###

_Delete existing Order_

Delete existing Order

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: string
  - Description: Order number


### `GET` /{country}/api/v1/orders/{number}/tracks ###

_Get single Order with track history_

Get single Order with track history

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: string
  - Description: Order number

#### Response ####

number:

  * type: string
  * description: Order unique number

site:

  * type: object (Site)
  * description: Order target end site

site[id_site]:

  * type: integer
  * description: Site id

site[name]:

  * type: string
  * description: Site name

site[number]:

  * type: integer
  * description: Site unique number

site[zip]:

  * type: integer
  * description: Zip code

site[address]:

  * type: string
  * description: Site address

expedition:

  * type: object (Expedition)
  * description: Expedition order belong

expedition[id_expedition]:

  * type: integer
  * description: Expedition id

expedition[number]:

  * type: integer
  * description: Expedition unique number

expedition[as400]:

  * type: string
  * description: AS400 Number

expedition[site_from]:

  * type: object (Site)
  * description: Site from expedition is send

expedition[site_target]:

  * type: object (Site)
  * description: Site target expedition arrives

expedition[status_expedition]:

  * type: object (StatusExpedition)
  * description: Expedition status

expedition[profile]:

  * type: object (Profile)
  * description: Profile

expedition[profile][id_profile]:

  * type: integer
  * description: Profile id

expedition[profile][profile]:

  * type: string
  * description: Profile name

customer:

  * type: object (Customer)
  * description: Customer

customer[id_customer]:

  * type: integer
  * description: Customer id

customer[email]:

  * type: string
  * description: Customer email

status_order:

  * type: object (StatusOrder)
  * description: Order status

status_order[id_status_order]:

  * type: integer
  * description: Status order id

status_order[key]:

  * type: string
  * description: Status order key

status_order[description]:

  * type: string
  * description: Status order description

profile:

  * type: object (Profile)
  * description: Profile

profile[id_profile]:

  * type: integer
  * description: Profile id

profile[profile]:

  * type: string
  * description: Profile name

id_order:

  * type: integer
  * description: Order id

track_order[]:

  * type: array of objects (TrackOrder)

track_order[][id_track_order]:

  * type: integer

track_order[][comment][]:

  * type: array of objects (Comment)

track_order[][status]:

  * type: object (StatusOrder)

track_order[][status][id_status_order]:

  * type: integer
  * description: Status order id

track_order[][status][key]:

  * type: string
  * description: Status order key

track_order[][status][description]:

  * type: string
  * description: Status order description

track_order[][profile]:

  * type: object (Profile)

track_order[][profile][id_profile]:

  * type: integer
  * description: Profile id

track_order[][profile][profile]:

  * type: string
  * description: Profile name



# Site #

## /{country}/api/v1/sites ##

### `GET` /{country}/api/v1/sites ###

_List Sites_

List Sites

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Filters ####

name:

  * Requirement: null
  * Description: Site name.

zip:

  * Requirement: null
  * Description: Site zip.

address:

  * Requirement: null
  * Description: Site address.

site_type:

  * Requirement: null
  * Description: Site type.

sort_field:

  * Requirement: name|number|zip|address|site_type
  * Description: Sort field property.

sort_direction:

  * Requirement: ASC|DESC
  * Description: Sort direction.

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing sites.

limit:

  * Requirement: \d+
  * Description: How many sites to return.
  * Default: 5

#### Response ####

name:

  * type: string
  * description: Site name

number:

  * type: integer
  * description: Site unique number

zip:

  * type: integer
  * description: Zip code

address:

  * type: string
  * description: Site address

site_type:

  * type: 

id_site:

  * type: integer
  * description: Site id


### `POST` /{country}/api/v1/sites ###

_Create a Site from the submitted data_

Create a Site from the submitted data

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Parameters ####

name:

  * type: string
  * required: true
  * description: Site name

number:

  * type: int
  * required: true
  * description: Site unique number

zip:

  * type: int
  * required: true
  * description: Zip code

address:

  * type: string
  * required: true
  * description: Site address

site_type:

  * type: string
  * required: true
  * description: Site type key


## /{country}/api/v1/sites/{number} ##

### `GET` /{country}/api/v1/sites/{number} ###

_Get a single site_

Get a single site

#### Requirements ####

**number**

  - Requirement: \d+
  - Type: int
  - Description: Site number
**country**

  - Requirement: es|it|ru|gb|de

#### Response ####

name:

  * type: string
  * description: Site name

number:

  * type: integer
  * description: Site unique number

zip:

  * type: integer
  * description: Zip code

address:

  * type: string
  * description: Site address

site_type:

  * type: 

id_site:

  * type: integer
  * description: Site id


### `PATCH` /{country}/api/v1/sites/{number} ###

_Partially update existing site from the submitted data_

Partially update existing site from the submitted data

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Site number

#### Parameters ####

name:

  * type: string
  * required: true
  * description: Site name

zip:

  * type: int
  * required: true
  * description: Zip code

address:

  * type: string
  * required: true
  * description: Site address

site_type:

  * type: string
  * required: true
  * description: Site type key


### `PUT` /{country}/api/v1/sites/{number} ###

_Update existing site from the submitted data or create a new site at a specific location_

Update existing site from the submitted data or create a new site at a specific location

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Site number

#### Parameters ####

name:

  * type: string
  * required: true
  * description: Site name

zip:

  * type: int
  * required: true
  * description: Zip code

address:

  * type: string
  * required: true
  * description: Site address

site_type:

  * type: string
  * required: true
  * description: Site type key


### `DELETE` /{country}/api/v1/sites/{number} ###

_Delete existing site_

Delete existing site

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**number**

  - Type: int
  - Description: Site number


## /{country}/api/v1/sites/{number}/children ##

### `GET` /{country}/api/v1/sites/{number}/children ###

_Get single Site with his children_

Get single Site with his children

#### Requirements ####

**number**

  - Requirement: \d+
  - Type: int
  - Description: Site number
**country**

  - Requirement: es|it|ru|gb|de

#### Response ####

name:

  * type: string
  * description: Site name

number:

  * type: integer
  * description: Site unique number

zip:

  * type: integer
  * description: Zip code

address:

  * type: string
  * description: Site address

site_type:

  * type: 

id_site:

  * type: integer
  * description: Site id

site_hierachy_parent[]:

  * type: array of objects (SiteHierachy)
  * description: Site hierachy

site_hierachy_parent[][id_hierachy]:

  * type: integer
  * description: Site hireachy id

site_hierachy_parent[][site_child]:

  * type: object (Site)
  * description: Site child

site_hierachy_parent[][site_child][id_site]:

  * type: integer
  * description: Site id

site_hierachy_parent[][site_child][name]:

  * type: string
  * description: Site name

site_hierachy_parent[][site_child][number]:

  * type: integer
  * description: Site unique number

site_hierachy_parent[][site_child][zip]:

  * type: integer
  * description: Zip code

site_hierachy_parent[][site_child][address]:

  * type: string
  * description: Site address

site_hierachy_parent[][site_child][site_hierachy_parent][]:

  * type: array of objects (SiteHierachy)
  * description: Site hierachy



# SiteHierachy #

## /{country}/api/v1/sitehierachies ##

### `GET` /{country}/api/v1/sitehierachies ###

_List all SiteHierachies._

List all SiteHierachies.

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de

#### Filters ####

offset:

  * Requirement: \d+
  * Description: Offset from which to start listing sites.

limit:

  * Requirement: \d+
  * Description: How many sites to return.
  * Default: 5


## /{country}/api/v1/sitehierachies/{id} ##

### `GET` /{country}/api/v1/sitehierachies/{id} ###

_Gets a SiteHierachy for a given id_

#### Requirements ####

**country**

  - Requirement: es|it|ru|gb|de
**id**

  - Type: int
  - Description: Site Id
