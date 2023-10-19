<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudConnectionQuota implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudConnectionQuota';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  实例所属帐号ID。
    * cloudConnectionId  资源ID标识符。
    * regionId  RegionID。
    * quotaType  配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    * quotaNumber  配额数量。
    * quotaUsed  配额使用数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'cloudConnectionId' => 'string',
            'regionId' => 'string',
            'quotaType' => 'string',
            'quotaNumber' => 'int',
            'quotaUsed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  实例所属帐号ID。
    * cloudConnectionId  资源ID标识符。
    * regionId  RegionID。
    * quotaType  配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    * quotaNumber  配额数量。
    * quotaUsed  配额使用数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'cloudConnectionId' => null,
        'regionId' => null,
        'quotaType' => null,
        'quotaNumber' => 'int32',
        'quotaUsed' => 'int32'
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
    * domainId  实例所属帐号ID。
    * cloudConnectionId  资源ID标识符。
    * regionId  RegionID。
    * quotaType  配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    * quotaNumber  配额数量。
    * quotaUsed  配额使用数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'cloudConnectionId' => 'cloud_connection_id',
            'regionId' => 'region_id',
            'quotaType' => 'quota_type',
            'quotaNumber' => 'quota_number',
            'quotaUsed' => 'quota_used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  实例所属帐号ID。
    * cloudConnectionId  资源ID标识符。
    * regionId  RegionID。
    * quotaType  配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    * quotaNumber  配额数量。
    * quotaUsed  配额使用数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'cloudConnectionId' => 'setCloudConnectionId',
            'regionId' => 'setRegionId',
            'quotaType' => 'setQuotaType',
            'quotaNumber' => 'setQuotaNumber',
            'quotaUsed' => 'setQuotaUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  实例所属帐号ID。
    * cloudConnectionId  资源ID标识符。
    * regionId  RegionID。
    * quotaType  配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    * quotaNumber  配额数量。
    * quotaUsed  配额使用数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'cloudConnectionId' => 'getCloudConnectionId',
            'regionId' => 'getRegionId',
            'quotaType' => 'getQuotaType',
            'quotaNumber' => 'getQuotaNumber',
            'quotaUsed' => 'getQuotaUsed'
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
    const QUOTA_TYPE_CLOUD_CONNECTION = 'cloud_connection';
    const QUOTA_TYPE_CLOUD_CONNECTION_REGION = 'cloud_connection_region';
    const QUOTA_TYPE_CLOUD_CONNECTION_ROUTE = 'cloud_connection_route';
    const QUOTA_TYPE_REGION_NETWORK_INSTANCE = 'region_network_instance';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQuotaTypeAllowableValues()
    {
        return [
            self::QUOTA_TYPE_CLOUD_CONNECTION,
            self::QUOTA_TYPE_CLOUD_CONNECTION_REGION,
            self::QUOTA_TYPE_CLOUD_CONNECTION_ROUTE,
            self::QUOTA_TYPE_REGION_NETWORK_INSTANCE,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['quotaType'] = isset($data['quotaType']) ? $data['quotaType'] : null;
        $this->container['quotaNumber'] = isset($data['quotaNumber']) ? $data['quotaNumber'] : null;
        $this->container['quotaUsed'] = isset($data['quotaUsed']) ? $data['quotaUsed'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['cloudConnectionId'] === null) {
            $invalidProperties[] = "'cloudConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['cloudConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cloudConnectionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['cloudConnectionId'])) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getQuotaTypeAllowableValues();
                if (!is_null($this->container['quotaType']) && !in_array($this->container['quotaType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'quotaType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['quotaNumber']) && ($this->container['quotaNumber'] > 102400)) {
                $invalidProperties[] = "invalid value for 'quotaNumber', must be smaller than or equal to 102400.";
            }
            if (!is_null($this->container['quotaNumber']) && ($this->container['quotaNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'quotaNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['quotaUsed']) && ($this->container['quotaUsed'] > 102400)) {
                $invalidProperties[] = "invalid value for 'quotaUsed', must be smaller than or equal to 102400.";
            }
            if (!is_null($this->container['quotaUsed']) && ($this->container['quotaUsed'] < 0)) {
                $invalidProperties[] = "invalid value for 'quotaUsed', must be bigger than or equal to 0.";
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
    * Gets domainId
    *  实例所属帐号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string $cloudConnectionId 资源ID标识符。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets regionId
    *  RegionID。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId RegionID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets quotaType
    *  配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    *
    * @return string|null
    */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
    * Sets quotaType
    *
    * @param string|null $quotaType 配额类型： - cloud_connection: 可加载的云连接实例数 - cloud_connection_region: 某云连接实例下可加载的Region数 - cloud_connection_route: 某云连接实例下可加载的路由数 - region_network_instance: 某云连接实例下某个Region下可加载的网络实例数
    *
    * @return $this
    */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;
        return $this;
    }

    /**
    * Gets quotaNumber
    *  配额数量。
    *
    * @return int|null
    */
    public function getQuotaNumber()
    {
        return $this->container['quotaNumber'];
    }

    /**
    * Sets quotaNumber
    *
    * @param int|null $quotaNumber 配额数量。
    *
    * @return $this
    */
    public function setQuotaNumber($quotaNumber)
    {
        $this->container['quotaNumber'] = $quotaNumber;
        return $this;
    }

    /**
    * Gets quotaUsed
    *  配额使用数量。
    *
    * @return int|null
    */
    public function getQuotaUsed()
    {
        return $this->container['quotaUsed'];
    }

    /**
    * Sets quotaUsed
    *
    * @param int|null $quotaUsed 配额使用数量。
    *
    * @return $this
    */
    public function setQuotaUsed($quotaUsed)
    {
        $this->container['quotaUsed'] = $quotaUsed;
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

