<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryLanguagesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryLanguagesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * languages  **参数解释：** 语言描述。
    * status  **参数解释：** 返回状态。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'languages' => '\HuaweiCloud\SDK\CodeHub\V4\Model\LanguagesDto[]',
            'status' => 'string',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * languages  **参数解释：** 语言描述。
    * status  **参数解释：** 返回状态。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'languages' => null,
        'status' => null,
        'xTotal' => null
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
    * languages  **参数解释：** 语言描述。
    * status  **参数解释：** 返回状态。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'languages' => 'languages',
            'status' => 'status',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * languages  **参数解释：** 语言描述。
    * status  **参数解释：** 返回状态。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'languages' => 'setLanguages',
            'status' => 'setStatus',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * languages  **参数解释：** 语言描述。
    * status  **参数解释：** 返回状态。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'languages' => 'getLanguages',
            'status' => 'getStatus',
            'xTotal' => 'getXTotal'
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
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
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
    * Gets languages
    *  **参数解释：** 语言描述。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\LanguagesDto[]|null
    */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
    * Sets languages
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\LanguagesDto[]|null $languages **参数解释：** 语言描述。
    *
    * @return $this
    */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 返回状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 返回状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

