<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FuncDestinationConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FuncDestinationConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destination  目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    * param  通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destination' => 'string',
            'param' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destination  目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    * param  通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destination' => null,
        'param' => null
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
    * destination  目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    * param  通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destination' => 'destination',
            'param' => 'param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destination  目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    * param  通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @var string[]
    */
    protected static $setters = [
            'destination' => 'setDestination',
            'param' => 'setParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destination  目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    * param  通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @var string[]
    */
    protected static $getters = [
            'destination' => 'getDestination',
            'param' => 'getParam'
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
    const DESTINATION_OBS = 'OBS';
    const DESTINATION_SMN = 'SMN';
    const DESTINATION_DIS = 'DIS';
    const DESTINATION_FUNCTION_GRAPH = 'FunctionGraph';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDestinationAllowableValues()
    {
        return [
            self::DESTINATION_OBS,
            self::DESTINATION_SMN,
            self::DESTINATION_DIS,
            self::DESTINATION_FUNCTION_GRAPH,
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
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDestinationAllowableValues();
                if (!is_null($this->container['destination']) && !in_array($this->container['destination'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'destination', must be one of '%s'",
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
    * Gets destination
    *  目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 目标类型。  - OBS：通知到OBS服务。 - SMN：通知到SMN服务。 - DIS：通知到DIS服务。 - FunctionGraph： 通知到函数服务。
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets param
    *  通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @return string|null
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param string|null $param 通知目标服务对应参数,json字符串。  - OBS：包含bucket桶，对象目录前缀prefix，对象默认expires过期时间[0~365]天，0默认不过期。 - SMN：包含smn 主题topic_urn。 - DIS：包含DIS 通道名stream_name。 - FunctionGraph：包含func_urn，函数urn
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
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

