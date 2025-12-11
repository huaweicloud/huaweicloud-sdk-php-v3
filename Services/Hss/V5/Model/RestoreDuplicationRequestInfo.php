<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreDuplicationRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreDuplicationRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * powerOn  **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    * mappings  **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'powerOn' => 'bool',
            'mappings' => '\HuaweiCloud\SDK\Hss\V5\Model\BackupRestoreServerMappingInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * powerOn  **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    * mappings  **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'powerOn' => null,
        'mappings' => null
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
    * serverId  **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * powerOn  **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    * mappings  **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'powerOn' => 'power_on',
            'mappings' => 'mappings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * powerOn  **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    * mappings  **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'powerOn' => 'setPowerOn',
            'mappings' => 'setMappings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * powerOn  **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    * mappings  **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'powerOn' => 'getPowerOn',
            'mappings' => 'getMappings'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['powerOn'] = isset($data['powerOn']) ? $data['powerOn'] : null;
        $this->container['mappings'] = isset($data['mappings']) ? $data['mappings'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serverId']) && (mb_strlen($this->container['serverId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 1.";
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
    * Gets serverId
    *  **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId **参数解释**: 恢复的目标虚拟机ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets powerOn
    *  **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    *
    * @return bool|null
    */
    public function getPowerOn()
    {
        return $this->container['powerOn'];
    }

    /**
    * Sets powerOn
    *
    * @param bool|null $powerOn **参数解释**： 恢复后是否开机, 默认开机。 **约束限制**: 不涉及 **取值范围**: - true：开机 - false: 不开机 **默认取值**: true
    *
    * @return $this
    */
    public function setPowerOn($powerOn)
    {
        $this->container['powerOn'] = $powerOn;
        return $this;
    }

    /**
    * Gets mappings
    *  **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\BackupRestoreServerMappingInfo[]|null
    */
    public function getMappings()
    {
        return $this->container['mappings'];
    }

    /**
    * Sets mappings
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\BackupRestoreServerMappingInfo[]|null $mappings **参数解释**： 恢复的映射关系（整机恢复时必填，卷恢复时可选但是不会用到填写的值） **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setMappings($mappings)
    {
        $this->container['mappings'] = $mappings;
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

