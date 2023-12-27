<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LanguageCheckInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LanguageCheckInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetLanguage  目标语言
    * shootScript  用户传来的剧本文本信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetLanguage' => 'string',
            'shootScript' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveShootScriptItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetLanguage  目标语言
    * shootScript  用户传来的剧本文本信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetLanguage' => null,
        'shootScript' => null
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
    * targetLanguage  目标语言
    * shootScript  用户传来的剧本文本信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetLanguage' => 'target_language',
            'shootScript' => 'shoot_script'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetLanguage  目标语言
    * shootScript  用户传来的剧本文本信息
    *
    * @var string[]
    */
    protected static $setters = [
            'targetLanguage' => 'setTargetLanguage',
            'shootScript' => 'setShootScript'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetLanguage  目标语言
    * shootScript  用户传来的剧本文本信息
    *
    * @var string[]
    */
    protected static $getters = [
            'targetLanguage' => 'getTargetLanguage',
            'shootScript' => 'getShootScript'
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
        $this->container['targetLanguage'] = isset($data['targetLanguage']) ? $data['targetLanguage'] : null;
        $this->container['shootScript'] = isset($data['shootScript']) ? $data['shootScript'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetLanguage'] === null) {
            $invalidProperties[] = "'targetLanguage' can't be null";
        }
        if ($this->container['shootScript'] === null) {
            $invalidProperties[] = "'shootScript' can't be null";
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
    * Gets targetLanguage
    *  目标语言
    *
    * @return string
    */
    public function getTargetLanguage()
    {
        return $this->container['targetLanguage'];
    }

    /**
    * Sets targetLanguage
    *
    * @param string $targetLanguage 目标语言
    *
    * @return $this
    */
    public function setTargetLanguage($targetLanguage)
    {
        $this->container['targetLanguage'] = $targetLanguage;
        return $this;
    }

    /**
    * Gets shootScript
    *  用户传来的剧本文本信息
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveShootScriptItem[]
    */
    public function getShootScript()
    {
        return $this->container['shootScript'];
    }

    /**
    * Sets shootScript
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveShootScriptItem[] $shootScript 用户传来的剧本文本信息
    *
    * @return $this
    */
    public function setShootScript($shootScript)
    {
        $this->container['shootScript'] = $shootScript;
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

