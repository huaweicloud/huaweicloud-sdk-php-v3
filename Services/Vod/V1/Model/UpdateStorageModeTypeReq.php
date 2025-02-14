<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStorageModeTypeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStorageModeTypeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storageModeType  降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storageModeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storageModeType  降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storageModeType' => null
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
    * storageModeType  降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storageModeType' => 'storage_mode_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storageModeType  降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @var string[]
    */
    protected static $setters = [
            'storageModeType' => 'setStorageModeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storageModeType  降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @var string[]
    */
    protected static $getters = [
            'storageModeType' => 'getStorageModeType'
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
    const STORAGE_MODE_TYPE_WHOLE = 'WHOLE';
    const STORAGE_MODE_TYPE_ORIGIN = 'ORIGIN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageModeTypeAllowableValues()
    {
        return [
            self::STORAGE_MODE_TYPE_WHOLE,
            self::STORAGE_MODE_TYPE_ORIGIN,
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
        $this->container['storageModeType'] = isset($data['storageModeType']) ? $data['storageModeType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStorageModeTypeAllowableValues();
                if (!is_null($this->container['storageModeType']) && !in_array($this->container['storageModeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageModeType', must be one of '%s'",
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
    * Gets storageModeType
    *  降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @return string|null
    */
    public function getStorageModeType()
    {
        return $this->container['storageModeType'];
    }

    /**
    * Sets storageModeType
    *
    * @param string|null $storageModeType 降冷模式。 取值如下： - WHOLE：整个媒资粒度。 - ORIGIN：原文件粒度。
    *
    * @return $this
    */
    public function setStorageModeType($storageModeType)
    {
        $this->container['storageModeType'] = $storageModeType;
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

