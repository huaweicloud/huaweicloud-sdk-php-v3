<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAppIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAppIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * appId  企业应用ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRequestId' => 'string',
            'acceptLanguage' => 'string',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * appId  企业应用ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRequestId' => null,
        'acceptLanguage' => null,
        'appId' => null
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
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * appId  企业应用ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRequestId' => 'X-Request-Id',
            'acceptLanguage' => 'Accept-Language',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * appId  企业应用ID
    *
    * @var string[]
    */
    protected static $setters = [
            'xRequestId' => 'setXRequestId',
            'acceptLanguage' => 'setAcceptLanguage',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * appId  企业应用ID
    *
    * @var string[]
    */
    protected static $getters = [
            'xRequestId' => 'getXRequestId',
            'acceptLanguage' => 'getAcceptLanguage',
            'appId' => 'getAppId'
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
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
        $this->container['acceptLanguage'] = isset($data['acceptLanguage']) ? $data['acceptLanguage'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
            if (!preg_match("/^\\w{1,64}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^\\w{1,64}$/.";
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
    * Gets xRequestId
    *  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId 请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
        return $this;
    }

    /**
    * Gets acceptLanguage
    *  语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return string|null
    */
    public function getAcceptLanguage()
    {
        return $this->container['acceptLanguage'];
    }

    /**
    * Sets acceptLanguage
    *
    * @param string|null $acceptLanguage 语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return $this
    */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->container['acceptLanguage'] = $acceptLanguage;
        return $this;
    }

    /**
    * Gets appId
    *  企业应用ID
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 企业应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

