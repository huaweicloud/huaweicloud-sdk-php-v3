<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTagStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTagStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  标签处理状态
    * defaultTagsEnable  默认标签是否已开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'defaultTagsEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  标签处理状态
    * defaultTagsEnable  默认标签是否已开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'defaultTagsEnable' => null
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
    * status  标签处理状态
    * defaultTagsEnable  默认标签是否已开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'defaultTagsEnable' => 'default_tags_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  标签处理状态
    * defaultTagsEnable  默认标签是否已开启
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'defaultTagsEnable' => 'setDefaultTagsEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  标签处理状态
    * defaultTagsEnable  默认标签是否已开启
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'defaultTagsEnable' => 'getDefaultTagsEnable'
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
    const STATUS_PROCESSING = 'processing';
    const STATUS_SUCCEED = 'succeed';
    const STATUS_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCESSING,
            self::STATUS_SUCCEED,
            self::STATUS_FAILED,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['defaultTagsEnable'] = isset($data['defaultTagsEnable']) ? $data['defaultTagsEnable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets status
    *  标签处理状态
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
    * @param string|null $status 标签处理状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets defaultTagsEnable
    *  默认标签是否已开启
    *
    * @return bool|null
    */
    public function getDefaultTagsEnable()
    {
        return $this->container['defaultTagsEnable'];
    }

    /**
    * Sets defaultTagsEnable
    *
    * @param bool|null $defaultTagsEnable 默认标签是否已开启
    *
    * @return $this
    */
    public function setDefaultTagsEnable($defaultTagsEnable)
    {
        $this->container['defaultTagsEnable'] = $defaultTagsEnable;
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

