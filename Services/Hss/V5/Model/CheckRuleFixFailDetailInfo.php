<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleFixFailDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleFixFailDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixFailReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixFailReason' => 'string',
            'hostName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixFailReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixFailReason' => null,
        'hostName' => null
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
    * fixFailReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixFailReason' => 'fix_fail_reason',
            'hostName' => 'host_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixFailReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'fixFailReason' => 'setFixFailReason',
            'hostName' => 'setHostName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixFailReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'fixFailReason' => 'getFixFailReason',
            'hostName' => 'getHostName'
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
        $this->container['fixFailReason'] = isset($data['fixFailReason']) ? $data['fixFailReason'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fixFailReason']) && (mb_strlen($this->container['fixFailReason']) > 65534)) {
                $invalidProperties[] = "invalid value for 'fixFailReason', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['fixFailReason']) && (mb_strlen($this->container['fixFailReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'fixFailReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
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
    * Gets fixFailReason
    *  **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    *
    * @return string|null
    */
    public function getFixFailReason()
    {
        return $this->container['fixFailReason'];
    }

    /**
    * Sets fixFailReason
    *
    * @param string|null $fixFailReason **参数解释**: 修复失败原因 **取值范围**: 字符长度0-65534位
    *
    * @return $this
    */
    public function setFixFailReason($fixFailReason)
    {
        $this->container['fixFailReason'] = $fixFailReason;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
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

