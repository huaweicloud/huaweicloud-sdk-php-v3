<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulRepoImagesTagInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulRepoImagesTagInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagId  **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    * tagName  **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    * size  **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    * appName  **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagId' => 'string',
            'tagName' => 'string',
            'size' => 'int',
            'appName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagId  **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    * tagName  **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    * size  **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    * appName  **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagId' => null,
        'tagName' => null,
        'size' => 'int32',
        'appName' => null
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
    * tagId  **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    * tagName  **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    * size  **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    * appName  **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagId' => 'tag_id',
            'tagName' => 'tag_name',
            'size' => 'size',
            'appName' => 'app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagId  **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    * tagName  **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    * size  **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    * appName  **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $setters = [
            'tagId' => 'setTagId',
            'tagName' => 'setTagName',
            'size' => 'setSize',
            'appName' => 'setAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagId  **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    * tagName  **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    * size  **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    * appName  **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @var string[]
    */
    protected static $getters = [
            'tagId' => 'getTagId',
            'tagName' => 'getTagName',
            'size' => 'getSize',
            'appName' => 'getAppName'
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
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tagId']) && (mb_strlen($this->container['tagId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'tagId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['tagId']) && (mb_strlen($this->container['tagId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tagId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tagName']) && (mb_strlen($this->container['tagName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'tagName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['tagName']) && (mb_strlen($this->container['tagName']) < 0)) {
                $invalidProperties[] = "invalid value for 'tagName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
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
    * Gets tagId
    *  **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
    * Sets tagId
    *
    * @param string|null $tagId **参数解释**: 版本id **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;
        return $this;
    }

    /**
    * Gets tagName
    *  **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
    * Sets tagName
    *
    * @param string|null $tagName **参数解释**: 版本名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**: \"版本大小\" **取值范围**: 最小值0，最大值2147483547
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 版本app名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
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

