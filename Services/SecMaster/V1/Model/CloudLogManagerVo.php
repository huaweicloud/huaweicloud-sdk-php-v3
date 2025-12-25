<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudLogManagerVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudLogManagerVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantManagedDomainId  租户行管id
    * platformManagedDomainId  平台行管id
    * dwRegion  regionId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantManagedDomainId' => 'string',
            'platformManagedDomainId' => 'string',
            'dwRegion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantManagedDomainId  租户行管id
    * platformManagedDomainId  平台行管id
    * dwRegion  regionId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantManagedDomainId' => null,
        'platformManagedDomainId' => null,
        'dwRegion' => null
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
    * tenantManagedDomainId  租户行管id
    * platformManagedDomainId  平台行管id
    * dwRegion  regionId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantManagedDomainId' => 'tenant_managed_domain_id',
            'platformManagedDomainId' => 'platform_managed_domain_id',
            'dwRegion' => 'dw_region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantManagedDomainId  租户行管id
    * platformManagedDomainId  平台行管id
    * dwRegion  regionId
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantManagedDomainId' => 'setTenantManagedDomainId',
            'platformManagedDomainId' => 'setPlatformManagedDomainId',
            'dwRegion' => 'setDwRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantManagedDomainId  租户行管id
    * platformManagedDomainId  平台行管id
    * dwRegion  regionId
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantManagedDomainId' => 'getTenantManagedDomainId',
            'platformManagedDomainId' => 'getPlatformManagedDomainId',
            'dwRegion' => 'getDwRegion'
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
        $this->container['tenantManagedDomainId'] = isset($data['tenantManagedDomainId']) ? $data['tenantManagedDomainId'] : null;
        $this->container['platformManagedDomainId'] = isset($data['platformManagedDomainId']) ? $data['platformManagedDomainId'] : null;
        $this->container['dwRegion'] = isset($data['dwRegion']) ? $data['dwRegion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantManagedDomainId']) && (mb_strlen($this->container['tenantManagedDomainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantManagedDomainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tenantManagedDomainId']) && (mb_strlen($this->container['tenantManagedDomainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantManagedDomainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['platformManagedDomainId']) && (mb_strlen($this->container['platformManagedDomainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'platformManagedDomainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['platformManagedDomainId']) && (mb_strlen($this->container['platformManagedDomainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'platformManagedDomainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dwRegion']) && (mb_strlen($this->container['dwRegion']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwRegion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwRegion']) && (mb_strlen($this->container['dwRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'dwRegion', the character length must be bigger than or equal to 0.";
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
    * Gets tenantManagedDomainId
    *  租户行管id
    *
    * @return string|null
    */
    public function getTenantManagedDomainId()
    {
        return $this->container['tenantManagedDomainId'];
    }

    /**
    * Sets tenantManagedDomainId
    *
    * @param string|null $tenantManagedDomainId 租户行管id
    *
    * @return $this
    */
    public function setTenantManagedDomainId($tenantManagedDomainId)
    {
        $this->container['tenantManagedDomainId'] = $tenantManagedDomainId;
        return $this;
    }

    /**
    * Gets platformManagedDomainId
    *  平台行管id
    *
    * @return string|null
    */
    public function getPlatformManagedDomainId()
    {
        return $this->container['platformManagedDomainId'];
    }

    /**
    * Sets platformManagedDomainId
    *
    * @param string|null $platformManagedDomainId 平台行管id
    *
    * @return $this
    */
    public function setPlatformManagedDomainId($platformManagedDomainId)
    {
        $this->container['platformManagedDomainId'] = $platformManagedDomainId;
        return $this;
    }

    /**
    * Gets dwRegion
    *  regionId
    *
    * @return string|null
    */
    public function getDwRegion()
    {
        return $this->container['dwRegion'];
    }

    /**
    * Sets dwRegion
    *
    * @param string|null $dwRegion regionId
    *
    * @return $this
    */
    public function setDwRegion($dwRegion)
    {
        $this->container['dwRegion'] = $dwRegion;
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

