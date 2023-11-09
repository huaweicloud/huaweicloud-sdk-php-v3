<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroserviceApiCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroserviceApiCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string',
            'matchMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'reqMethod' => null,
        'reqUri' => null,
        'matchMode' => null
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
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri',
            'matchMode' => 'match_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri',
            'matchMode' => 'setMatchMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    * reqMethod  API的请求方式
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri',
            'matchMode' => 'getMatchMode'
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
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    const MATCH_MODE_SWA = 'SWA';
    const MATCH_MODE_NORMAL = 'NORMAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchModeAllowableValues()
    {
        return [
            self::MATCH_MODE_SWA,
            self::MATCH_MODE_NORMAL,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['matchMode'] = isset($data['matchMode']) ? $data['matchMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^([a-zA-Z0-9]|[\\u4e00-\\u9fa5])([a-zA-Z0-9:._()\\\/\/-]|[\\u4e00-\\u9fa5\\uff08\\uff09\\uff1a\\u3001]){2,254}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-zA-Z0-9]|[\\u4e00-\\u9fa5])([a-zA-Z0-9:._()\\\/\/-]|[\\u4e00-\\u9fa5\\uff08\\uff09\\uff1a\\u3001]){2,254}$/.";
            }
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reqUri'] === null) {
            $invalidProperties[] = "'reqUri' can't be null";
        }
            if ((mb_strlen($this->container['reqUri']) > 512)) {
                $invalidProperties[] = "invalid value for 'reqUri', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['reqUri']) < 1)) {
                $invalidProperties[] = "invalid value for 'reqUri', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMatchModeAllowableValues();
                if (!is_null($this->container['matchMode']) && !in_array($this->container['matchMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'matchMode', must be one of '%s'",
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
    * Gets name
    *  API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name API名称。  支持汉字、英文、数字、中划线、下划线、点、斜杠、中英文格式下的小括号和冒号、中文格式下的顿号，且只能以英文、汉字和数字开头。 > 中文字符必须为UTF-8或者unicode编码。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API的请求方式
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod API的请求方式
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets reqUri
    *  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    *
    * @return string
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string $reqUri 请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512，且满足URI规范。  /apic/health_check为APIG预置的健康检查路径，当req_method=GET时不支持req_uri=/apic/health_check。  > 需要服从URI规范。
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets matchMode
    *  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @return string|null
    */
    public function getMatchMode()
    {
        return $this->container['matchMode'];
    }

    /**
    * Sets matchMode
    *
    * @param string|null $matchMode API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：NORMAL
    *
    * @return $this
    */
    public function setMatchMode($matchMode)
    {
        $this->container['matchMode'] = $matchMode;
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

