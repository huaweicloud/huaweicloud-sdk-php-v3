<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberGroupUrlInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberGroupUrlInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * memberGroupId  后端服务器分组ID。
    * reqProtocol  请求协议。
    * reqMethod  请求方式。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'memberGroupId' => 'string',
            'reqProtocol' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * memberGroupId  后端服务器分组ID。
    * reqProtocol  请求协议。
    * reqMethod  请求方式。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'memberGroupId' => null,
        'reqProtocol' => null,
        'reqMethod' => null,
        'reqUri' => null
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
    * memberGroupId  后端服务器分组ID。
    * reqProtocol  请求协议。
    * reqMethod  请求方式。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'memberGroupId' => 'member_group_id',
            'reqProtocol' => 'req_protocol',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * memberGroupId  后端服务器分组ID。
    * reqProtocol  请求协议。
    * reqMethod  请求方式。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
    *
    * @var string[]
    */
    protected static $setters = [
            'memberGroupId' => 'setMemberGroupId',
            'reqProtocol' => 'setReqProtocol',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * memberGroupId  后端服务器分组ID。
    * reqProtocol  请求协议。
    * reqMethod  请求方式。
    * reqUri  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
    *
    * @var string[]
    */
    protected static $getters = [
            'memberGroupId' => 'getMemberGroupId',
            'reqProtocol' => 'getReqProtocol',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri'
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
    const REQ_PROTOCOL_HTTP = 'HTTP';
    const REQ_PROTOCOL_HTTPS = 'HTTPS';
    const REQ_PROTOCOL_GRPC = 'GRPC';
    const REQ_PROTOCOL_GRPCS = 'GRPCS';
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqProtocolAllowableValues()
    {
        return [
            self::REQ_PROTOCOL_HTTP,
            self::REQ_PROTOCOL_HTTPS,
            self::REQ_PROTOCOL_GRPC,
            self::REQ_PROTOCOL_GRPCS,
        ];
    }

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
        $this->container['memberGroupId'] = isset($data['memberGroupId']) ? $data['memberGroupId'] : null;
        $this->container['reqProtocol'] = isset($data['reqProtocol']) ? $data['reqProtocol'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['memberGroupId'] === null) {
            $invalidProperties[] = "'memberGroupId' can't be null";
        }
            if ((mb_strlen($this->container['memberGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'memberGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['memberGroupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'memberGroupId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['reqProtocol'] === null) {
            $invalidProperties[] = "'reqProtocol' can't be null";
        }
            $allowedValues = $this->getReqProtocolAllowableValues();
                if (!is_null($this->container['reqProtocol']) && !in_array($this->container['reqProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reqMethod'] === null) {
            $invalidProperties[] = "'reqMethod' can't be null";
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
    * Gets memberGroupId
    *  后端服务器分组ID。
    *
    * @return string
    */
    public function getMemberGroupId()
    {
        return $this->container['memberGroupId'];
    }

    /**
    * Sets memberGroupId
    *
    * @param string $memberGroupId 后端服务器分组ID。
    *
    * @return $this
    */
    public function setMemberGroupId($memberGroupId)
    {
        $this->container['memberGroupId'] = $memberGroupId;
        return $this;
    }

    /**
    * Gets reqProtocol
    *  请求协议。
    *
    * @return string
    */
    public function getReqProtocol()
    {
        return $this->container['reqProtocol'];
    }

    /**
    * Sets reqProtocol
    *
    * @param string $reqProtocol 请求协议。
    *
    * @return $this
    */
    public function setReqProtocol($reqProtocol)
    {
        $this->container['reqProtocol'] = $reqProtocol;
        return $this;
    }

    /**
    * Gets reqMethod
    *  请求方式。
    *
    * @return string
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string $reqMethod 请求方式。
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
    *  请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
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
    * @param string $reqUri 请求地址。可以包含请求参数，用{}标识，比如/getUserInfo/{userId}，支持 * % - _ . 等特殊字符，总长度不超过512字符，且满足URI规范。 支持环境变量，使用环境变量时，每个变量名的长度为3~32位的字符串，字符串由英文字母、数字、中划线、下划线组成，且只能以英文开头。 > 需要服从URI规范。
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
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

