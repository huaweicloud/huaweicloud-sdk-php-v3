<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublishTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublishTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  回调地址
    * authSignKey  鉴权密钥
    * callBackArea  接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'authSignKey' => 'string',
            'callBackArea' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  回调地址
    * authSignKey  鉴权密钥
    * callBackArea  接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'authSignKey' => null,
        'callBackArea' => null
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
    * url  回调地址
    * authSignKey  鉴权密钥
    * callBackArea  接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'authSignKey' => 'auth_sign_key',
            'callBackArea' => 'call_back_area'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  回调地址
    * authSignKey  鉴权密钥
    * callBackArea  接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'authSignKey' => 'setAuthSignKey',
            'callBackArea' => 'setCallBackArea'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  回调地址
    * authSignKey  鉴权密钥
    * callBackArea  接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'authSignKey' => 'getAuthSignKey',
            'callBackArea' => 'getCallBackArea'
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
    const CALL_BACK_AREA_MAINLAND_CHINA = 'mainland_china';
    const CALL_BACK_AREA_OUTSIDE_MAINLAND_CHINA = 'outside_mainland_china';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCallBackAreaAllowableValues()
    {
        return [
            self::CALL_BACK_AREA_MAINLAND_CHINA,
            self::CALL_BACK_AREA_OUTSIDE_MAINLAND_CHINA,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['authSignKey'] = isset($data['authSignKey']) ? $data['authSignKey'] : null;
        $this->container['callBackArea'] = isset($data['callBackArea']) ? $data['callBackArea'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authSignKey']) && (mb_strlen($this->container['authSignKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'authSignKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['authSignKey']) && (mb_strlen($this->container['authSignKey']) < 32)) {
                $invalidProperties[] = "invalid value for 'authSignKey', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getCallBackAreaAllowableValues();
                if (!is_null($this->container['callBackArea']) && !in_array($this->container['callBackArea'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'callBackArea', must be one of '%s'",
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
    * Gets url
    *  回调地址
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 回调地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets authSignKey
    *  鉴权密钥
    *
    * @return string|null
    */
    public function getAuthSignKey()
    {
        return $this->container['authSignKey'];
    }

    /**
    * Sets authSignKey
    *
    * @param string|null $authSignKey 鉴权密钥
    *
    * @return $this
    */
    public function setAuthSignKey($authSignKey)
    {
        $this->container['authSignKey'] = $authSignKey;
        return $this;
    }

    /**
    * Gets callBackArea
    *  接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @return string|null
    */
    public function getCallBackArea()
    {
        return $this->container['callBackArea'];
    }

    /**
    * Sets callBackArea
    *
    * @param string|null $callBackArea 接收回调通知服务器所在区域。 包含如下取值： - mainland_china：中国大陆区域。 - outside_mainland_china：中国大陆以外区域。
    *
    * @return $this
    */
    public function setCallBackArea($callBackArea)
    {
        $this->container['callBackArea'] = $callBackArea;
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

