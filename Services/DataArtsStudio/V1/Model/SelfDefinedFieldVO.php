<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SelfDefinedFieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SelfDefinedFieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fdNameCh  自定义项中文名。
    * fdNameEn  自定义项英文名。
    * notNull  是否必填。
    * fdValue  属性值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fdNameCh' => 'string',
            'fdNameEn' => 'string',
            'notNull' => 'bool',
            'fdValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fdNameCh  自定义项中文名。
    * fdNameEn  自定义项英文名。
    * notNull  是否必填。
    * fdValue  属性值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fdNameCh' => null,
        'fdNameEn' => null,
        'notNull' => null,
        'fdValue' => null
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
    * fdNameCh  自定义项中文名。
    * fdNameEn  自定义项英文名。
    * notNull  是否必填。
    * fdValue  属性值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fdNameCh' => 'fd_name_ch',
            'fdNameEn' => 'fd_name_en',
            'notNull' => 'not_null',
            'fdValue' => 'fd_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fdNameCh  自定义项中文名。
    * fdNameEn  自定义项英文名。
    * notNull  是否必填。
    * fdValue  属性值。
    *
    * @var string[]
    */
    protected static $setters = [
            'fdNameCh' => 'setFdNameCh',
            'fdNameEn' => 'setFdNameEn',
            'notNull' => 'setNotNull',
            'fdValue' => 'setFdValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fdNameCh  自定义项中文名。
    * fdNameEn  自定义项英文名。
    * notNull  是否必填。
    * fdValue  属性值。
    *
    * @var string[]
    */
    protected static $getters = [
            'fdNameCh' => 'getFdNameCh',
            'fdNameEn' => 'getFdNameEn',
            'notNull' => 'getNotNull',
            'fdValue' => 'getFdValue'
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
        $this->container['fdNameCh'] = isset($data['fdNameCh']) ? $data['fdNameCh'] : null;
        $this->container['fdNameEn'] = isset($data['fdNameEn']) ? $data['fdNameEn'] : null;
        $this->container['notNull'] = isset($data['notNull']) ? $data['notNull'] : null;
        $this->container['fdValue'] = isset($data['fdValue']) ? $data['fdValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fdNameCh']) && (mb_strlen($this->container['fdNameCh']) > 200)) {
                $invalidProperties[] = "invalid value for 'fdNameCh', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['fdNameEn']) && (mb_strlen($this->container['fdNameEn']) > 200)) {
                $invalidProperties[] = "invalid value for 'fdNameEn', the character length must be smaller than or equal to 200.";
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
    * Gets fdNameCh
    *  自定义项中文名。
    *
    * @return string|null
    */
    public function getFdNameCh()
    {
        return $this->container['fdNameCh'];
    }

    /**
    * Sets fdNameCh
    *
    * @param string|null $fdNameCh 自定义项中文名。
    *
    * @return $this
    */
    public function setFdNameCh($fdNameCh)
    {
        $this->container['fdNameCh'] = $fdNameCh;
        return $this;
    }

    /**
    * Gets fdNameEn
    *  自定义项英文名。
    *
    * @return string|null
    */
    public function getFdNameEn()
    {
        return $this->container['fdNameEn'];
    }

    /**
    * Sets fdNameEn
    *
    * @param string|null $fdNameEn 自定义项英文名。
    *
    * @return $this
    */
    public function setFdNameEn($fdNameEn)
    {
        $this->container['fdNameEn'] = $fdNameEn;
        return $this;
    }

    /**
    * Gets notNull
    *  是否必填。
    *
    * @return bool|null
    */
    public function getNotNull()
    {
        return $this->container['notNull'];
    }

    /**
    * Sets notNull
    *
    * @param bool|null $notNull 是否必填。
    *
    * @return $this
    */
    public function setNotNull($notNull)
    {
        $this->container['notNull'] = $notNull;
        return $this;
    }

    /**
    * Gets fdValue
    *  属性值。
    *
    * @return string|null
    */
    public function getFdValue()
    {
        return $this->container['fdValue'];
    }

    /**
    * Sets fdValue
    *
    * @param string|null $fdValue 属性值。
    *
    * @return $this
    */
    public function setFdValue($fdValue)
    {
        $this->container['fdValue'] = $fdValue;
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

