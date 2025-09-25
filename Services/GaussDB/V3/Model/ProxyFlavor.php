<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specCode  **参数解释**：  规格码。  **取值范围**：  不涉及。
    * vcpus  **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    * ram  **参数解释**：  内存。  **取值范围**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    * azStatus  **参数解释**：  az状态。
    * supportedIpv6  **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specCode' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'dbType' => 'string',
            'azStatus' => 'object',
            'supportedIpv6' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specCode  **参数解释**：  规格码。  **取值范围**：  不涉及。
    * vcpus  **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    * ram  **参数解释**：  内存。  **取值范围**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    * azStatus  **参数解释**：  az状态。
    * supportedIpv6  **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specCode' => null,
        'vcpus' => null,
        'ram' => null,
        'dbType' => null,
        'azStatus' => null,
        'supportedIpv6' => null
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
    * specCode  **参数解释**：  规格码。  **取值范围**：  不涉及。
    * vcpus  **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    * ram  **参数解释**：  内存。  **取值范围**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    * azStatus  **参数解释**：  az状态。
    * supportedIpv6  **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specCode' => 'spec_code',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'dbType' => 'db_type',
            'azStatus' => 'az_status',
            'supportedIpv6' => 'supported_ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specCode  **参数解释**：  规格码。  **取值范围**：  不涉及。
    * vcpus  **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    * ram  **参数解释**：  内存。  **取值范围**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    * azStatus  **参数解释**：  az状态。
    * supportedIpv6  **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @var string[]
    */
    protected static $setters = [
            'specCode' => 'setSpecCode',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'dbType' => 'setDbType',
            'azStatus' => 'setAzStatus',
            'supportedIpv6' => 'setSupportedIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specCode  **参数解释**：  规格码。  **取值范围**：  不涉及。
    * vcpus  **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    * ram  **参数解释**：  内存。  **取值范围**：  不涉及。
    * dbType  **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    * azStatus  **参数解释**：  az状态。
    * supportedIpv6  **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @var string[]
    */
    protected static $getters = [
            'specCode' => 'getSpecCode',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'dbType' => 'getDbType',
            'azStatus' => 'getAzStatus',
            'supportedIpv6' => 'getSupportedIpv6'
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
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['dbType'] = isset($data['dbType']) ? $data['dbType'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['supportedIpv6'] = isset($data['supportedIpv6']) ? $data['supportedIpv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets specCode
    *  **参数解释**：  规格码。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode **参数解释**：  规格码。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets vcpus
    *  **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus **参数解释**：  cpu核数。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  **参数解释**：  内存。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram **参数解释**：  内存。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets dbType
    *  **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDbType()
    {
        return $this->container['dbType'];
    }

    /**
    * Sets dbType
    *
    * @param string|null $dbType **参数解释**：  数据库类型。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDbType($dbType)
    {
        $this->container['dbType'] = $dbType;
        return $this;
    }

    /**
    * Gets azStatus
    *  **参数解释**：  az状态。
    *
    * @return object|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param object|null $azStatus **参数解释**：  az状态。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets supportedIpv6
    *  **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @return bool|null
    */
    public function getSupportedIpv6()
    {
        return $this->container['supportedIpv6'];
    }

    /**
    * Sets supportedIpv6
    *
    * @param bool|null $supportedIpv6 **参数解释**：  是否支持ipv6。  **取值范围**：  - true: 支持ipv6。 - false: 不支持ipv6。
    *
    * @return $this
    */
    public function setSupportedIpv6($supportedIpv6)
    {
        $this->container['supportedIpv6'] = $supportedIpv6;
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

