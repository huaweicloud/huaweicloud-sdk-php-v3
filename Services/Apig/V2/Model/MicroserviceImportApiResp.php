<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MicroserviceImportApiResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MicroserviceImportApiResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  API名称
    * reqUri  API请求路径
    * reqMethod  API请求方法
    * id  API编号
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'reqUri' => 'string',
            'reqMethod' => 'string',
            'id' => 'string',
            'matchMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  API名称
    * reqUri  API请求路径
    * reqMethod  API请求方法
    * id  API编号
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'reqUri' => null,
        'reqMethod' => null,
        'id' => null,
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
    * name  API名称
    * reqUri  API请求路径
    * reqMethod  API请求方法
    * id  API编号
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'reqUri' => 'req_uri',
            'reqMethod' => 'req_method',
            'id' => 'id',
            'matchMode' => 'match_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  API名称
    * reqUri  API请求路径
    * reqMethod  API请求方法
    * id  API编号
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'reqUri' => 'setReqUri',
            'reqMethod' => 'setReqMethod',
            'id' => 'setId',
            'matchMode' => 'setMatchMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  API名称
    * reqUri  API请求路径
    * reqMethod  API请求方法
    * id  API编号
    * matchMode  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'reqUri' => 'getReqUri',
            'reqMethod' => 'getReqMethod',
            'id' => 'getId',
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
    const MATCH_MODE_SWA = 'SWA';
    const MATCH_MODE_NORMAL = 'NORMAL';
    

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
        $this->container['reqUri'] = isset($data['reqUri']) ? $data['reqUri'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    *  API名称
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
    * @param string|null $name API名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets reqUri
    *  API请求路径
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
    * @param string|null $reqUri API请求路径
    *
    * @return $this
    */
    public function setReqUri($reqUri)
    {
        $this->container['reqUri'] = $reqUri;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API请求方法
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
    * @param string|null $reqMethod API请求方法
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets id
    *  API编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id API编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets matchMode
    *  API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
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
    * @param string|null $matchMode API的匹配方式 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配） 默认：SWA
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

