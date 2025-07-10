<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommonConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommonConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * homeRegion  主区域名。
    * cloudTrailType  CTS配置状态。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'homeRegion' => 'string',
            'cloudTrailType' => 'bool',
            'identityCenterStatus' => 'string',
            'organizationStructureType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * homeRegion  主区域名。
    * cloudTrailType  CTS配置状态。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'homeRegion' => null,
        'cloudTrailType' => null,
        'identityCenterStatus' => null,
        'organizationStructureType' => null
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
    * homeRegion  主区域名。
    * cloudTrailType  CTS配置状态。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'homeRegion' => 'home_region',
            'cloudTrailType' => 'cloud_trail_type',
            'identityCenterStatus' => 'identity_center_status',
            'organizationStructureType' => 'organization_structure_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * homeRegion  主区域名。
    * cloudTrailType  CTS配置状态。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @var string[]
    */
    protected static $setters = [
            'homeRegion' => 'setHomeRegion',
            'cloudTrailType' => 'setCloudTrailType',
            'identityCenterStatus' => 'setIdentityCenterStatus',
            'organizationStructureType' => 'setOrganizationStructureType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * homeRegion  主区域名。
    * cloudTrailType  CTS配置状态。
    * identityCenterStatus  是否设置Landing Zone的identity center。
    * organizationStructureType  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @var string[]
    */
    protected static $getters = [
            'homeRegion' => 'getHomeRegion',
            'cloudTrailType' => 'getCloudTrailType',
            'identityCenterStatus' => 'getIdentityCenterStatus',
            'organizationStructureType' => 'getOrganizationStructureType'
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
        $this->container['homeRegion'] = isset($data['homeRegion']) ? $data['homeRegion'] : null;
        $this->container['cloudTrailType'] = isset($data['cloudTrailType']) ? $data['cloudTrailType'] : null;
        $this->container['identityCenterStatus'] = isset($data['identityCenterStatus']) ? $data['identityCenterStatus'] : null;
        $this->container['organizationStructureType'] = isset($data['organizationStructureType']) ? $data['organizationStructureType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['homeRegion']) && (mb_strlen($this->container['homeRegion']) > 64)) {
                $invalidProperties[] = "invalid value for 'homeRegion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['homeRegion']) && (mb_strlen($this->container['homeRegion']) < 1)) {
                $invalidProperties[] = "invalid value for 'homeRegion', the character length must be bigger than or equal to 1.";
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
    * Gets homeRegion
    *  主区域名。
    *
    * @return string|null
    */
    public function getHomeRegion()
    {
        return $this->container['homeRegion'];
    }

    /**
    * Sets homeRegion
    *
    * @param string|null $homeRegion 主区域名。
    *
    * @return $this
    */
    public function setHomeRegion($homeRegion)
    {
        $this->container['homeRegion'] = $homeRegion;
        return $this;
    }

    /**
    * Gets cloudTrailType
    *  CTS配置状态。
    *
    * @return bool|null
    */
    public function getCloudTrailType()
    {
        return $this->container['cloudTrailType'];
    }

    /**
    * Sets cloudTrailType
    *
    * @param bool|null $cloudTrailType CTS配置状态。
    *
    * @return $this
    */
    public function setCloudTrailType($cloudTrailType)
    {
        $this->container['cloudTrailType'] = $cloudTrailType;
        return $this;
    }

    /**
    * Gets identityCenterStatus
    *  是否设置Landing Zone的identity center。
    *
    * @return string|null
    */
    public function getIdentityCenterStatus()
    {
        return $this->container['identityCenterStatus'];
    }

    /**
    * Sets identityCenterStatus
    *
    * @param string|null $identityCenterStatus 是否设置Landing Zone的identity center。
    *
    * @return $this
    */
    public function setIdentityCenterStatus($identityCenterStatus)
    {
        $this->container['identityCenterStatus'] = $identityCenterStatus;
        return $this;
    }

    /**
    * Gets organizationStructureType
    *  设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @return string|null
    */
    public function getOrganizationStructureType()
    {
        return $this->container['organizationStructureType'];
    }

    /**
    * Sets organizationStructureType
    *
    * @param string|null $organizationStructureType 设置organization的类型。STANDARD和NON_STANDARD。
    *
    * @return $this
    */
    public function setOrganizationStructureType($organizationStructureType)
    {
        $this->container['organizationStructureType'] = $organizationStructureType;
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

