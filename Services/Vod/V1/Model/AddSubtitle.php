<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddSubtitle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddSubtitle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  字幕类型，字幕封装当前仅支持VTT和SRT
    * language  字幕语言
    * obsInfo  obsInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'language' => 'string',
            'obsInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  字幕类型，字幕封装当前仅支持VTT和SRT
    * language  字幕语言
    * obsInfo  obsInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'language' => null,
        'obsInfo' => null
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
    * type  字幕类型，字幕封装当前仅支持VTT和SRT
    * language  字幕语言
    * obsInfo  obsInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'language' => 'language',
            'obsInfo' => 'obs_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  字幕类型，字幕封装当前仅支持VTT和SRT
    * language  字幕语言
    * obsInfo  obsInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'language' => 'setLanguage',
            'obsInfo' => 'setObsInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  字幕类型，字幕封装当前仅支持VTT和SRT
    * language  字幕语言
    * obsInfo  obsInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'language' => 'getLanguage',
            'obsInfo' => 'getObsInfo'
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
    const TYPE_VTT = 'VTT';
    const TYPE_SRT = 'SRT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VTT,
            self::TYPE_SRT,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['obsInfo'] = isset($data['obsInfo']) ? $data['obsInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 32)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 32.";
            }
        if ($this->container['obsInfo'] === null) {
            $invalidProperties[] = "'obsInfo' can't be null";
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
    * Gets type
    *  字幕类型，字幕封装当前仅支持VTT和SRT
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 字幕类型，字幕封装当前仅支持VTT和SRT
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets language
    *  字幕语言
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 字幕语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets obsInfo
    *  obsInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getObsInfo()
    {
        return $this->container['obsInfo'];
    }

    /**
    * Sets obsInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $obsInfo obsInfo
    *
    * @return $this
    */
    public function setObsInfo($obsInfo)
    {
        $this->container['obsInfo'] = $obsInfo;
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

