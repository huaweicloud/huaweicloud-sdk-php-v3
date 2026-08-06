<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKeyPolicyResponseBodyPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKeyPolicyResponseBody_policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  密钥策略版本
    * validityPeriod  validityPeriod
    * allowedAccessPoint  允许访问的接入点ID列表
    * allowedDataSecurityZone  允许访问的数据安全专区ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'validityPeriod' => '\HuaweiCloud\SDK\Kms\V2\Model\UpdateKeyPolicyResponseBodyPolicyValidityPeriod',
            'allowedAccessPoint' => 'string[]',
            'allowedDataSecurityZone' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  密钥策略版本
    * validityPeriod  validityPeriod
    * allowedAccessPoint  允许访问的接入点ID列表
    * allowedDataSecurityZone  允许访问的数据安全专区ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'validityPeriod' => null,
        'allowedAccessPoint' => null,
        'allowedDataSecurityZone' => null
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
    * version  密钥策略版本
    * validityPeriod  validityPeriod
    * allowedAccessPoint  允许访问的接入点ID列表
    * allowedDataSecurityZone  允许访问的数据安全专区ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'validityPeriod' => 'validity_period',
            'allowedAccessPoint' => 'allowed_access_point',
            'allowedDataSecurityZone' => 'allowed_data_security_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  密钥策略版本
    * validityPeriod  validityPeriod
    * allowedAccessPoint  允许访问的接入点ID列表
    * allowedDataSecurityZone  允许访问的数据安全专区ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'validityPeriod' => 'setValidityPeriod',
            'allowedAccessPoint' => 'setAllowedAccessPoint',
            'allowedDataSecurityZone' => 'setAllowedDataSecurityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  密钥策略版本
    * validityPeriod  validityPeriod
    * allowedAccessPoint  允许访问的接入点ID列表
    * allowedDataSecurityZone  允许访问的数据安全专区ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'validityPeriod' => 'getValidityPeriod',
            'allowedAccessPoint' => 'getAllowedAccessPoint',
            'allowedDataSecurityZone' => 'getAllowedDataSecurityZone'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['validityPeriod'] = isset($data['validityPeriod']) ? $data['validityPeriod'] : null;
        $this->container['allowedAccessPoint'] = isset($data['allowedAccessPoint']) ? $data['allowedAccessPoint'] : null;
        $this->container['allowedDataSecurityZone'] = isset($data['allowedDataSecurityZone']) ? $data['allowedDataSecurityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets version
    *  密钥策略版本
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 密钥策略版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets validityPeriod
    *  validityPeriod
    *
    * @return \HuaweiCloud\SDK\Kms\V2\Model\UpdateKeyPolicyResponseBodyPolicyValidityPeriod|null
    */
    public function getValidityPeriod()
    {
        return $this->container['validityPeriod'];
    }

    /**
    * Sets validityPeriod
    *
    * @param \HuaweiCloud\SDK\Kms\V2\Model\UpdateKeyPolicyResponseBodyPolicyValidityPeriod|null $validityPeriod validityPeriod
    *
    * @return $this
    */
    public function setValidityPeriod($validityPeriod)
    {
        $this->container['validityPeriod'] = $validityPeriod;
        return $this;
    }

    /**
    * Gets allowedAccessPoint
    *  允许访问的接入点ID列表
    *
    * @return string[]|null
    */
    public function getAllowedAccessPoint()
    {
        return $this->container['allowedAccessPoint'];
    }

    /**
    * Sets allowedAccessPoint
    *
    * @param string[]|null $allowedAccessPoint 允许访问的接入点ID列表
    *
    * @return $this
    */
    public function setAllowedAccessPoint($allowedAccessPoint)
    {
        $this->container['allowedAccessPoint'] = $allowedAccessPoint;
        return $this;
    }

    /**
    * Gets allowedDataSecurityZone
    *  允许访问的数据安全专区ID列表
    *
    * @return string[]|null
    */
    public function getAllowedDataSecurityZone()
    {
        return $this->container['allowedDataSecurityZone'];
    }

    /**
    * Sets allowedDataSecurityZone
    *
    * @param string[]|null $allowedDataSecurityZone 允许访问的数据安全专区ID列表
    *
    * @return $this
    */
    public function setAllowedDataSecurityZone($allowedDataSecurityZone)
    {
        $this->container['allowedDataSecurityZone'] = $allowedDataSecurityZone;
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

