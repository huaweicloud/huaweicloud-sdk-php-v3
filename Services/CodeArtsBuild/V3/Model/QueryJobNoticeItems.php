<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryJobNoticeItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryJobNoticeItems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * noticeType  通知类型
    * enableMap  通知品种开启详情的表
    * paramConfig  参数配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'noticeType' => 'string',
            'enableMap' => 'map[string,bool]',
            'paramConfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * noticeType  通知类型
    * enableMap  通知品种开启详情的表
    * paramConfig  参数配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'noticeType' => null,
        'enableMap' => null,
        'paramConfig' => null
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
    * noticeType  通知类型
    * enableMap  通知品种开启详情的表
    * paramConfig  参数配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'noticeType' => 'notice_type',
            'enableMap' => 'enable_map',
            'paramConfig' => 'param_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * noticeType  通知类型
    * enableMap  通知品种开启详情的表
    * paramConfig  参数配置
    *
    * @var string[]
    */
    protected static $setters = [
            'noticeType' => 'setNoticeType',
            'enableMap' => 'setEnableMap',
            'paramConfig' => 'setParamConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * noticeType  通知类型
    * enableMap  通知品种开启详情的表
    * paramConfig  参数配置
    *
    * @var string[]
    */
    protected static $getters = [
            'noticeType' => 'getNoticeType',
            'enableMap' => 'getEnableMap',
            'paramConfig' => 'getParamConfig'
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
        $this->container['noticeType'] = isset($data['noticeType']) ? $data['noticeType'] : null;
        $this->container['enableMap'] = isset($data['enableMap']) ? $data['enableMap'] : null;
        $this->container['paramConfig'] = isset($data['paramConfig']) ? $data['paramConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets noticeType
    *  通知类型
    *
    * @return string|null
    */
    public function getNoticeType()
    {
        return $this->container['noticeType'];
    }

    /**
    * Sets noticeType
    *
    * @param string|null $noticeType 通知类型
    *
    * @return $this
    */
    public function setNoticeType($noticeType)
    {
        $this->container['noticeType'] = $noticeType;
        return $this;
    }

    /**
    * Gets enableMap
    *  通知品种开启详情的表
    *
    * @return map[string,bool]|null
    */
    public function getEnableMap()
    {
        return $this->container['enableMap'];
    }

    /**
    * Sets enableMap
    *
    * @param map[string,bool]|null $enableMap 通知品种开启详情的表
    *
    * @return $this
    */
    public function setEnableMap($enableMap)
    {
        $this->container['enableMap'] = $enableMap;
        return $this;
    }

    /**
    * Gets paramConfig
    *  参数配置
    *
    * @return string|null
    */
    public function getParamConfig()
    {
        return $this->container['paramConfig'];
    }

    /**
    * Sets paramConfig
    *
    * @param string|null $paramConfig 参数配置
    *
    * @return $this
    */
    public function setParamConfig($paramConfig)
    {
        $this->container['paramConfig'] = $paramConfig;
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

