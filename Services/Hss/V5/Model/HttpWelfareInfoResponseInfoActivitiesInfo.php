<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpWelfareInfoResponseInfoActivitiesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpWelfareInfoResponseInfo_activities_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    * urlJson  **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'urlJson' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    * urlJson  **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'urlJson' => null
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
    * title  **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    * urlJson  **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'urlJson' => 'url_json'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    * urlJson  **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'urlJson' => 'setUrlJson'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    * urlJson  **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'urlJson' => 'getUrlJson'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['urlJson'] = isset($data['urlJson']) ? $data['urlJson'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 1)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['title']) && !preg_match("/^.*$/", $this->container['title'])) {
                $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['urlJson']) && (mb_strlen($this->container['urlJson']) > 65535)) {
                $invalidProperties[] = "invalid value for 'urlJson', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['urlJson']) && (mb_strlen($this->container['urlJson']) < 0)) {
                $invalidProperties[] = "invalid value for 'urlJson', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['urlJson']) && !preg_match("/^.*$/", $this->container['urlJson'])) {
                $invalidProperties[] = "invalid value for 'urlJson', must be conform to the pattern /^.*$/.";
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
    * Gets title
    *  **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释**: 活动大促标题 **取值范围**: 字符长度1-256
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets urlJson
    *  **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @return string|null
    */
    public function getUrlJson()
    {
        return $this->container['urlJson'];
    }

    /**
    * Sets urlJson
    *
    * @param string|null $urlJson **参数解释**: 活动大促链接，包括中国站，国际站欧洲站，由console根据不同的场景选择跳转 **取值范围**: 字符长度0-65535
    *
    * @return $this
    */
    public function setUrlJson($urlJson)
    {
        $this->container['urlJson'] = $urlJson;
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

