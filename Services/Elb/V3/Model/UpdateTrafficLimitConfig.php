<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTrafficLimitConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTrafficLimitConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * qps  参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * perSourceIpQps  参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * burst  参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'qps' => 'int',
            'perSourceIpQps' => 'int',
            'burst' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * qps  参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * perSourceIpQps  参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * burst  参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'qps' => 'int32',
        'perSourceIpQps' => 'int32',
        'burst' => 'int32'
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
    * qps  参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * perSourceIpQps  参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * burst  参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'qps' => 'qps',
            'perSourceIpQps' => 'per_source_ip_qps',
            'burst' => 'burst'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * qps  参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * perSourceIpQps  参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * burst  参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'qps' => 'setQps',
            'perSourceIpQps' => 'setPerSourceIpQps',
            'burst' => 'setBurst'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * qps  参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * perSourceIpQps  参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    * burst  参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'qps' => 'getQps',
            'perSourceIpQps' => 'getPerSourceIpQps',
            'burst' => 'getBurst'
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
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['perSourceIpQps'] = isset($data['perSourceIpQps']) ? $data['perSourceIpQps'] : null;
        $this->container['burst'] = isset($data['burst']) ? $data['burst'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['qps']) && ($this->container['qps'] > 100000)) {
                $invalidProperties[] = "invalid value for 'qps', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['qps']) && ($this->container['qps'] < 0)) {
                $invalidProperties[] = "invalid value for 'qps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['perSourceIpQps']) && ($this->container['perSourceIpQps'] > 100000)) {
                $invalidProperties[] = "invalid value for 'perSourceIpQps', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['perSourceIpQps']) && ($this->container['perSourceIpQps'] < 0)) {
                $invalidProperties[] = "invalid value for 'perSourceIpQps', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['burst']) && ($this->container['burst'] > 100000)) {
                $invalidProperties[] = "invalid value for 'burst', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['burst']) && ($this->container['burst'] < 0)) {
                $invalidProperties[] = "invalid value for 'burst', must be bigger than or equal to 0.";
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
    * Gets qps
    *  参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    *
    * @return int|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param int|null $qps 参数解释：转发策略qps限速。  取值范围：0-100000，单位：个/秒。0表示不限速。
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets perSourceIpQps
    *  参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    *
    * @return int|null
    */
    public function getPerSourceIpQps()
    {
        return $this->container['perSourceIpQps'];
    }

    /**
    * Sets perSourceIpQps
    *
    * @param int|null $perSourceIpQps 参数解释：对转发策略单源(单个客户端IP)进行限速。  约束限制： - quic监听器下转发策略不支持配置单源限速。 - 指定该字段时，赋值可以为0或者为null。 - 如果qps不为0，per_source_ip_qps需要小于qps。  取值范围：0-100000，单位：个/秒。0表示不限速。
    *
    * @return $this
    */
    public function setPerSourceIpQps($perSourceIpQps)
    {
        $this->container['perSourceIpQps'] = $perSourceIpQps;
        return $this;
    }

    /**
    * Gets burst
    *  参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @return int|null
    */
    public function getBurst()
    {
        return $this->container['burst'];
    }

    /**
    * Sets burst
    *
    * @param int|null $burst 参数解释：设置当单源qps超限时，允许的局部突增请求数量。超出该限制的请求将返回503。  取值范围：0-100000，单位：个/秒。
    *
    * @return $this
    */
    public function setBurst($burst)
    {
        $this->container['burst'] = $burst;
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

