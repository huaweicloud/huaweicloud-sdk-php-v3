<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownLoadPathReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownLoadPathReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * expires  **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    * path  **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'expires' => 'int',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * expires  **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    * path  **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'expires' => 'int64',
        'path' => null
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
    * expires  **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    * path  **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'expires' => 'expires',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * expires  **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    * path  **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'expires' => 'setExpires',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * expires  **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    * path  **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'expires' => 'getExpires',
            'path' => 'getPath'
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
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['expires']) && ($this->container['expires'] > 86400)) {
                $invalidProperties[] = "invalid value for 'expires', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['expires']) && ($this->container['expires'] < 0)) {
                $invalidProperties[] = "invalid value for 'expires', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1024)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 0)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 0.";
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
    * Gets expires
    *  **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    *
    * @return int|null
    */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
    * Sets expires
    *
    * @param int|null $expires **参数解释**：带授权信息的URL的过期时间。 **约束限制**：0-86400。 **取值范围**：不涉及。 **默认取值**：3000。
    *
    * @return $this
    */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**：要下载文件的对象名。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

