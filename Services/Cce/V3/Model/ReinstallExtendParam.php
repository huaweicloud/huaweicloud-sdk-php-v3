<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReinstallExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReinstallExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alphaCceNodeImageId  **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alphaCceNodeImageId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alphaCceNodeImageId  **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alphaCceNodeImageId' => 'uuid'
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
    * alphaCceNodeImageId  **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alphaCceNodeImageId' => 'alpha.cce/NodeImageID'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alphaCceNodeImageId  **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'alphaCceNodeImageId' => 'setAlphaCceNodeImageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alphaCceNodeImageId  **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'alphaCceNodeImageId' => 'getAlphaCceNodeImageId'
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
        $this->container['alphaCceNodeImageId'] = isset($data['alphaCceNodeImageId']) ? $data['alphaCceNodeImageId'] : null;
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
    * Gets alphaCceNodeImageId
    *  **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAlphaCceNodeImageId()
    {
        return $this->container['alphaCceNodeImageId'];
    }

    /**
    * Sets alphaCceNodeImageId
    *
    * @param string|null $alphaCceNodeImageId **参数解释**: 指定待切换目标操作系统所使用的用户镜像ID，已废弃。 指定此参数等价于指定ReinstallVolumeSpec中imageID，原取值将被覆盖。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAlphaCceNodeImageId($alphaCceNodeImageId)
    {
        $this->container['alphaCceNodeImageId'] = $alphaCceNodeImageId;
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

