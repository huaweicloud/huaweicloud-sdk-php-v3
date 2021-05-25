<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaListServersDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaListServersDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * changesSince  云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    * flavor  云服务器规格ID。
    * image  镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器数量限制。
    * marker  从marker指定的云服务器ID的下一条数据开始查询。
    * name  云服务器名称。
    * notTags  查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * sortKey  查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    * status  云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    * tags  查询tag字段中包含该值的云服务器。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'changesSince' => 'string',
            'flavor' => 'string',
            'image' => 'string',
            'ip' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'name' => 'string',
            'notTags' => 'string',
            'reservationId' => 'string',
            'sortKey' => 'string',
            'status' => 'string',
            'tags' => 'string',
            'openStackApiVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * changesSince  云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    * flavor  云服务器规格ID。
    * image  镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器数量限制。
    * marker  从marker指定的云服务器ID的下一条数据开始查询。
    * name  云服务器名称。
    * notTags  查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * sortKey  查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    * status  云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    * tags  查询tag字段中包含该值的云服务器。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'changesSince' => null,
        'flavor' => null,
        'image' => null,
        'ip' => null,
        'limit' => 'int32',
        'marker' => null,
        'name' => null,
        'notTags' => null,
        'reservationId' => null,
        'sortKey' => null,
        'status' => null,
        'tags' => null,
        'openStackApiVersion' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * changesSince  云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    * flavor  云服务器规格ID。
    * image  镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器数量限制。
    * marker  从marker指定的云服务器ID的下一条数据开始查询。
    * name  云服务器名称。
    * notTags  查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * sortKey  查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    * status  云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    * tags  查询tag字段中包含该值的云服务器。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'changesSince' => 'changes-since',
            'flavor' => 'flavor',
            'image' => 'image',
            'ip' => 'ip',
            'limit' => 'limit',
            'marker' => 'marker',
            'name' => 'name',
            'notTags' => 'not-tags',
            'reservationId' => 'reservation_id',
            'sortKey' => 'sort_key',
            'status' => 'status',
            'tags' => 'tags',
            'openStackApiVersion' => 'OpenStack-API-Version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * changesSince  云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    * flavor  云服务器规格ID。
    * image  镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器数量限制。
    * marker  从marker指定的云服务器ID的下一条数据开始查询。
    * name  云服务器名称。
    * notTags  查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * sortKey  查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    * status  云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    * tags  查询tag字段中包含该值的云服务器。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $setters = [
            'changesSince' => 'setChangesSince',
            'flavor' => 'setFlavor',
            'image' => 'setImage',
            'ip' => 'setIp',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'name' => 'setName',
            'notTags' => 'setNotTags',
            'reservationId' => 'setReservationId',
            'sortKey' => 'setSortKey',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'openStackApiVersion' => 'setOpenStackApiVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * changesSince  云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    * flavor  云服务器规格ID。
    * image  镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器数量限制。
    * marker  从marker指定的云服务器ID的下一条数据开始查询。
    * name  云服务器名称。
    * notTags  查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * sortKey  查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    * status  云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    * tags  查询tag字段中包含该值的云服务器。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $getters = [
            'changesSince' => 'getChangesSince',
            'flavor' => 'getFlavor',
            'image' => 'getImage',
            'ip' => 'getIp',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'name' => 'getName',
            'notTags' => 'getNotTags',
            'reservationId' => 'getReservationId',
            'sortKey' => 'getSortKey',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'openStackApiVersion' => 'getOpenStackApiVersion'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const SORT_KEY_CREATED_AT = 'created_at';
    const SORT_KEY_AVAILABILITY_ZONE = 'availability_zone';
    const SORT_KEY_DISPLAY_NAME = 'display_name';
    const SORT_KEY_HOST = 'host';
    const SORT_KEY_INSTANCE_TYPE_ID = 'instance_type_id';
    const SORT_KEY_KEY_NAME = 'key_name';
    const SORT_KEY_PROJECT_ID = 'project_id';
    const SORT_KEY_USER_ID = 'user_id';
    const SORT_KEY_UPDATED_AT = 'updated_at';
    const SORT_KEY_UUID = 'uuid';
    const SORT_KEY_VM_STATE = 'vm_state';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_BUILD = 'BUILD';
    const STATUS_DELETED = 'DELETED';
    const STATUS_ERROR = 'ERROR';
    const STATUS_HARD_REBOOT = 'HARD_REBOOT';
    const STATUS_MIGRATING = 'MIGRATING';
    const STATUS_REBOOT = 'REBOOT';
    const STATUS_RESIZE = 'RESIZE';
    const STATUS_REVERT_RESIZE = 'REVERT_RESIZE';
    const STATUS_SHELVED = 'SHELVED';
    const STATUS_SHELVED_OFFLOADED = 'SHELVED_OFFLOADED';
    const STATUS_SHUTOFF = 'SHUTOFF';
    const STATUS_UNKNOWN = 'UNKNOWN';
    const STATUS_VERIFY_RESIZE = 'VERIFY_RESIZE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_CREATED_AT,
            self::SORT_KEY_AVAILABILITY_ZONE,
            self::SORT_KEY_DISPLAY_NAME,
            self::SORT_KEY_HOST,
            self::SORT_KEY_INSTANCE_TYPE_ID,
            self::SORT_KEY_KEY_NAME,
            self::SORT_KEY_PROJECT_ID,
            self::SORT_KEY_USER_ID,
            self::SORT_KEY_UPDATED_AT,
            self::SORT_KEY_UUID,
            self::SORT_KEY_VM_STATE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_BUILD,
            self::STATUS_DELETED,
            self::STATUS_ERROR,
            self::STATUS_HARD_REBOOT,
            self::STATUS_MIGRATING,
            self::STATUS_REBOOT,
            self::STATUS_RESIZE,
            self::STATUS_REVERT_RESIZE,
            self::STATUS_SHELVED,
            self::STATUS_SHELVED_OFFLOADED,
            self::STATUS_SHUTOFF,
            self::STATUS_UNKNOWN,
            self::STATUS_VERIFY_RESIZE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['changesSince'] = isset($data['changesSince']) ? $data['changesSince'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 25;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['reservationId'] = isset($data['reservationId']) ? $data['reservationId'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : 'created_at';
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['openStackApiVersion'] = isset($data['openStackApiVersion']) ? $data['openStackApiVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets changesSince
    *  云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    *
    * @return string|null
    */
    public function getChangesSince()
    {
        return $this->container['changesSince'];
    }

    /**
    * Sets changesSince
    *
    * @param string|null $changesSince 云服务器上次更新状态的时间戳信息。时间戳为UTC格式。
    *
    * @return $this
    */
    public function setChangesSince($changesSince)
    {
        $this->container['changesSince'] = $changesSince;
        return $this;
    }

    /**
    * Gets flavor
    *  云服务器规格ID。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 云服务器规格ID。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets image
    *  镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 镜像ID  在使用image作为条件过滤时，不能同时支持其他过滤条件和分页条件。如果同时指定image及其他条件，则以image条件为准；当条件不含image时，接口功能不受限制。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets ip
    *  IPv4地址过滤结果，匹配规则为模糊匹配。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip IPv4地址过滤结果，匹配规则为模糊匹配。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回云服务器数量限制。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询返回云服务器数量限制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  从marker指定的云服务器ID的下一条数据开始查询。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 从marker指定的云服务器ID的下一条数据开始查询。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets name
    *  云服务器名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 云服务器名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets notTags
    *  查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    *
    * @return string|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param string|null $notTags 查询tag字段中不包含该值的云服务器，值为标签的Key。  > 说明： >  > 系统近期对标签功能进行了升级。如果之前添加的Tag为“Key.Value”的形式，则查询的时候需要使用“Key”来查询。 >  > 例如：之前添加的tag为“a.b”,则升级后，查询时需使用“not-tags=a”。
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets reservationId
    *  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    *
    * @return string|null
    */
    public function getReservationId()
    {
        return $this->container['reservationId'];
    }

    /**
    * Sets reservationId
    *
    * @param string|null $reservationId 批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    *
    * @return $this
    */
    public function setReservationId($reservationId)
    {
        $this->container['reservationId'] = $reservationId;
        return $this;
    }

    /**
    * Gets sortKey
    *  查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 查询结果按弹性云服务器属性排序，默认排序顺序为created_at逆序。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets status
    *  云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 云服务器状态。   取值范围： ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  直到2.37微版本，非上面范围的status字段将返回空列表，2.38之后的微版本，将返回400错误。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  查询tag字段中包含该值的云服务器。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 查询tag字段中包含该值的云服务器。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets openStackApiVersion
    *  微版本头
    *
    * @return string|null
    */
    public function getOpenStackApiVersion()
    {
        return $this->container['openStackApiVersion'];
    }

    /**
    * Sets openStackApiVersion
    *
    * @param string|null $openStackApiVersion 微版本头
    *
    * @return $this
    */
    public function setOpenStackApiVersion($openStackApiVersion)
    {
        $this->container['openStackApiVersion'] = $openStackApiVersion;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

