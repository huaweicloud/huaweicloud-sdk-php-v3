<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaListServersDetailsRequest implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaListServersDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
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
    * @param string|null $changesSince changesSince
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
    * @param string|null $flavor flavor
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
    * @param string|null $image image
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
    * @param string|null $ip ip
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
    * @param int|null $limit limit
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
    * @param string|null $marker marker
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
    * @param string|null $name name
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
    * @param string|null $notTags notTags
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
    * @param string|null $reservationId reservationId
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
    * @param string|null $sortKey sortKey
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
    * @param string|null $status status
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
    * @param string|null $tags tags
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
    * @param string|null $openStackApiVersion openStackApiVersion
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

