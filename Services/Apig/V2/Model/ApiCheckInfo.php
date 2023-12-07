<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiCheckInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiCheckInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  API名称。  type = name时必填
    * reqMethod  请求方式。  type = path时必填
    * reqUri  API的访问地址。  type = path时必填
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
    * groupId  分组ID。  校验分组下API定义是否重复时必填
    * romaAppId  集成应用ID  暂不支持
    * apiId  需要对比的API ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'reqMethod' => 'string',
            'reqUri' => 'string',
            'matchMode' => 'string',
            'groupId' => 'string',
            'romaAppId' => 'string',
            'apiId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  API名称。  type = name时必填
    * reqMethod  请求方式。  type = path时必填
    * reqUri  API的访问地址。  type = path时必填
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
    * groupId  分组ID。  校验分组下API定义是否重复时必填
    * romaAppId  集成应用ID  暂不支持
    * apiId  需要对比的API ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'reqMethod' => null,
        'reqUri' => null,
        'matchMode' => null,
        'groupId' => null,
        'romaAppId' => null,
        'apiId' => null
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
    * name  API名称。  type = name时必填
    * reqMethod  请求方式。  type = path时必填
    * reqUri  API的访问地址。  type = path时必填
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
    * groupId  分组ID。  校验分组下API定义是否重复时必填
    * romaAppId  集成应用ID  暂不支持
    * apiId  需要对比的API ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'reqMethod' => 'req_method',
            'reqUri' => 'req_uri',
            'matchMode' => 'match_mode',
            'groupId' => 'group_id',
            'romaAppId' => 'roma_app_id',
            'apiId' => 'api_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  API名称。  type = name时必填
    * reqMethod  请求方式。  type = path时必填
    * reqUri  API的访问地址。  type = path时必填
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
    * groupId  分组ID。  校验分组下API定义是否重复时必填
    * romaAppId  集成应用ID  暂不支持
    * apiId  需要对比的API ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'reqMethod' => 'setReqMethod',
            'reqUri' => 'setReqUri',
            'matchMode' => 'setMatchMode',
            'groupId' => 'setGroupId',
            'romaAppId' => 'setRomaAppId',
            'apiId' => 'setApiId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  API名称。  type = name时必填
    * reqMethod  请求方式。  type = path时必填
    * reqUri  API的访问地址。  type = path时必填
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
    * groupId  分组ID。  校验分组下API定义是否重复时必填
    * romaAppId  集成应用ID  暂不支持
    * apiId  需要对比的API ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'reqMethod' => 'getReqMethod',
            'reqUri' => 'getReqUri',
            'matchMode' => 'getMatchMode',
            'groupId' => 'getGroupId',
            'romaAppId' => 'getRomaAppId',
            'apiId' => 'getApiId'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['romaAppId'] = isset($data['romaAppId']) ? $data['romaAppId'] : null;
        $this->container['apiId'] = isset($data['apiId']) ? $data['apiId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  API名称。  type = name时必填
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
    * @param string|null $name API名称。  type = name时必填
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
    *  请求方式。  type = path时必填
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
    * @param string|null $reqMethod 请求方式。  type = path时必填
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
    *  API的访问地址。  type = path时必填
    *
    * @return string|null
    */
    public function getReqUri()
    {
        return $this->container['reqUri'];
    }

    /**
    * Sets reqUri
    *
    * @param string|null $reqUri API的访问地址。  type = path时必填
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
    *  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
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
    * @param string|null $matchMode API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）  type = path时必填
    *
    * @return $this
    */
    public function setMatchMode($matchMode)
    {
        $this->container['matchMode'] = $matchMode;
        return $this;
    }

    /**
    * Gets groupId
    *  分组ID。  校验分组下API定义是否重复时必填
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分组ID。  校验分组下API定义是否重复时必填
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets romaAppId
    *  集成应用ID  暂不支持
    *
    * @return string|null
    */
    public function getRomaAppId()
    {
        return $this->container['romaAppId'];
    }

    /**
    * Sets romaAppId
    *
    * @param string|null $romaAppId 集成应用ID  暂不支持
    *
    * @return $this
    */
    public function setRomaAppId($romaAppId)
    {
        $this->container['romaAppId'] = $romaAppId;
        return $this;
    }

    /**
    * Gets apiId
    *  需要对比的API ID
    *
    * @return string|null
    */
    public function getApiId()
    {
        return $this->container['apiId'];
    }

    /**
    * Sets apiId
    *
    * @param string|null $apiId 需要对比的API ID
    *
    * @return $this
    */
    public function setApiId($apiId)
    {
        $this->container['apiId'] = $apiId;
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

