<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestartStarrocksNodeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestartStarrocksNodeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * starrocksNodeId  StarRocks节点ID
    * starrocksInstanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'starrocksNodeId' => 'string',
            'starrocksInstanceId' => 'string',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * starrocksNodeId  StarRocks节点ID
    * starrocksInstanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'starrocksNodeId' => null,
        'starrocksInstanceId' => null,
        'xLanguage' => null
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
    * starrocksNodeId  StarRocks节点ID
    * starrocksInstanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'starrocksNodeId' => 'starrocks_node_id',
            'starrocksInstanceId' => 'starrocks_instance_id',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * starrocksNodeId  StarRocks节点ID
    * starrocksInstanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @var string[]
    */
    protected static $setters = [
            'starrocksNodeId' => 'setStarrocksNodeId',
            'starrocksInstanceId' => 'setStarrocksInstanceId',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * starrocksNodeId  StarRocks节点ID
    * starrocksInstanceId  StarRocks实例ID，严格匹配UUID规则。
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @var string[]
    */
    protected static $getters = [
            'starrocksNodeId' => 'getStarrocksNodeId',
            'starrocksInstanceId' => 'getStarrocksInstanceId',
            'xLanguage' => 'getXLanguage'
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
        $this->container['starrocksNodeId'] = isset($data['starrocksNodeId']) ? $data['starrocksNodeId'] : null;
        $this->container['starrocksInstanceId'] = isset($data['starrocksInstanceId']) ? $data['starrocksInstanceId'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['starrocksNodeId'] === null) {
            $invalidProperties[] = "'starrocksNodeId' can't be null";
        }
        if ($this->container['starrocksInstanceId'] === null) {
            $invalidProperties[] = "'starrocksInstanceId' can't be null";
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
    * Gets starrocksNodeId
    *  StarRocks节点ID
    *
    * @return string
    */
    public function getStarrocksNodeId()
    {
        return $this->container['starrocksNodeId'];
    }

    /**
    * Sets starrocksNodeId
    *
    * @param string $starrocksNodeId StarRocks节点ID
    *
    * @return $this
    */
    public function setStarrocksNodeId($starrocksNodeId)
    {
        $this->container['starrocksNodeId'] = $starrocksNodeId;
        return $this;
    }

    /**
    * Gets starrocksInstanceId
    *  StarRocks实例ID，严格匹配UUID规则。
    *
    * @return string
    */
    public function getStarrocksInstanceId()
    {
        return $this->container['starrocksInstanceId'];
    }

    /**
    * Sets starrocksInstanceId
    *
    * @param string $starrocksInstanceId StarRocks实例ID，严格匹配UUID规则。
    *
    * @return $this
    */
    public function setStarrocksInstanceId($starrocksInstanceId)
    {
        $this->container['starrocksInstanceId'] = $starrocksInstanceId;
        return $this;
    }

    /**
    * Gets xLanguage
    *  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
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

