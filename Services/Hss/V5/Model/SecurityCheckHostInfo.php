<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**： 服务器名称 **取值范围**： 不涉及
    * hostId  **参数解释**： 服务器ID **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公网IP地址 **取值范围**： 不涉及
    * osType  **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'osType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**： 服务器名称 **取值范围**： 不涉及
    * hostId  **参数解释**： 服务器ID **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公网IP地址 **取值范围**： 不涉及
    * osType  **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'osType' => null
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
    * hostName  **参数解释**： 服务器名称 **取值范围**： 不涉及
    * hostId  **参数解释**： 服务器ID **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公网IP地址 **取值范围**： 不涉及
    * osType  **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'osType' => 'os_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**： 服务器名称 **取值范围**： 不涉及
    * hostId  **参数解释**： 服务器ID **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公网IP地址 **取值范围**： 不涉及
    * osType  **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'osType' => 'setOsType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**： 服务器名称 **取值范围**： 不涉及
    * hostId  **参数解释**： 服务器ID **取值范围**： 不涉及
    * privateIp  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    * publicIp  **参数解释**： 公网IP地址 **取值范围**： 不涉及
    * osType  **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'osType' => 'getOsType'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
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
    * Gets hostName
    *  **参数解释**： 服务器名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**： 服务器名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 私有IP地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**： 私有IP地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 公网IP地址 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 公网IP地址 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**： 系统类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
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

