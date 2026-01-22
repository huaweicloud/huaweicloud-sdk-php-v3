<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DnsServersResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DnsServersResponseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 域名服务器id **取值范围**： 不涉及
    * isApplied  **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    * isCustomized  **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    * serverIp  **参数解释**： DNS服务器IP **取值范围**： 不涉及
    * status  **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    * healthCheckDomainName  **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'isApplied' => 'int',
            'isCustomized' => 'int',
            'serverIp' => 'string',
            'status' => 'int',
            'healthCheckDomainName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 域名服务器id **取值范围**： 不涉及
    * isApplied  **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    * isCustomized  **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    * serverIp  **参数解释**： DNS服务器IP **取值范围**： 不涉及
    * status  **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    * healthCheckDomainName  **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'isApplied' => 'int32',
        'isCustomized' => 'int32',
        'serverIp' => null,
        'status' => 'int32',
        'healthCheckDomainName' => null
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
    * id  **参数解释**： 域名服务器id **取值范围**： 不涉及
    * isApplied  **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    * isCustomized  **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    * serverIp  **参数解释**： DNS服务器IP **取值范围**： 不涉及
    * status  **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    * healthCheckDomainName  **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'isApplied' => 'is_applied',
            'isCustomized' => 'is_customized',
            'serverIp' => 'server_ip',
            'status' => 'status',
            'healthCheckDomainName' => 'health_check_domain_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 域名服务器id **取值范围**： 不涉及
    * isApplied  **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    * isCustomized  **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    * serverIp  **参数解释**： DNS服务器IP **取值范围**： 不涉及
    * status  **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    * healthCheckDomainName  **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'isApplied' => 'setIsApplied',
            'isCustomized' => 'setIsCustomized',
            'serverIp' => 'setServerIp',
            'status' => 'setStatus',
            'healthCheckDomainName' => 'setHealthCheckDomainName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 域名服务器id **取值范围**： 不涉及
    * isApplied  **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    * isCustomized  **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    * serverIp  **参数解释**： DNS服务器IP **取值范围**： 不涉及
    * status  **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    * healthCheckDomainName  **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'isApplied' => 'getIsApplied',
            'isCustomized' => 'getIsCustomized',
            'serverIp' => 'getServerIp',
            'status' => 'getStatus',
            'healthCheckDomainName' => 'getHealthCheckDomainName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isApplied'] = isset($data['isApplied']) ? $data['isApplied'] : null;
        $this->container['isCustomized'] = isset($data['isCustomized']) ? $data['isCustomized'] : null;
        $this->container['serverIp'] = isset($data['serverIp']) ? $data['serverIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['healthCheckDomainName'] = isset($data['healthCheckDomainName']) ? $data['healthCheckDomainName'] : null;
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
    * Gets id
    *  **参数解释**： 域名服务器id **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释**： 域名服务器id **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isApplied
    *  **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    *
    * @return int|null
    */
    public function getIsApplied()
    {
        return $this->container['isApplied'];
    }

    /**
    * Sets isApplied
    *
    * @param int|null $isApplied **参数解释**： 域名服务器是否应用 **取值范围**： - 0：否 - 1：是
    *
    * @return $this
    */
    public function setIsApplied($isApplied)
    {
        $this->container['isApplied'] = $isApplied;
        return $this;
    }

    /**
    * Gets isCustomized
    *  **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    *
    * @return int|null
    */
    public function getIsCustomized()
    {
        return $this->container['isCustomized'];
    }

    /**
    * Sets isCustomized
    *
    * @param int|null $isCustomized **参数解释**： 域名服务器是否是用户自定义的dns服务器 **取值范围**： - 0：否 - 1：是
    *
    * @return $this
    */
    public function setIsCustomized($isCustomized)
    {
        $this->container['isCustomized'] = $isCustomized;
        return $this;
    }

    /**
    * Gets serverIp
    *  **参数解释**： DNS服务器IP **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getServerIp()
    {
        return $this->container['serverIp'];
    }

    /**
    * Sets serverIp
    *
    * @param string|null $serverIp **参数解释**： DNS服务器IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setServerIp($serverIp)
    {
        $this->container['serverIp'] = $serverIp;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： dns服务器解析状态 **取值范围**： 0：解析域名的频率正常 1：解析域名的频率缓慢 2：解析域名异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets healthCheckDomainName
    *  **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getHealthCheckDomainName()
    {
        return $this->container['healthCheckDomainName'];
    }

    /**
    * Sets healthCheckDomainName
    *
    * @param string|null $healthCheckDomainName **参数解释**： 健康检查域名 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHealthCheckDomainName($healthCheckDomainName)
    {
        $this->container['healthCheckDomainName'] = $healthCheckDomainName;
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

