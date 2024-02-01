<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyMySqlProxyRouteModeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyMySqlProxyRouteModeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterWeight  数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    * readonlyInstances  数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterWeight' => 'int',
            'readonlyInstances' => '\HuaweiCloud\SDK\Rds\V3\Model\InstancesWeight[]',
            'routeMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterWeight  数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    * readonlyInstances  数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterWeight' => 'int32',
        'readonlyInstances' => null,
        'routeMode' => 'int32'
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
    * masterWeight  数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    * readonlyInstances  数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterWeight' => 'master_weight',
            'readonlyInstances' => 'readonly_instances',
            'routeMode' => 'route_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterWeight  数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    * readonlyInstances  数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @var string[]
    */
    protected static $setters = [
            'masterWeight' => 'setMasterWeight',
            'readonlyInstances' => 'setReadonlyInstances',
            'routeMode' => 'setRouteMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterWeight  数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    * readonlyInstances  数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    * routeMode  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @var string[]
    */
    protected static $getters = [
            'masterWeight' => 'getMasterWeight',
            'readonlyInstances' => 'getReadonlyInstances',
            'routeMode' => 'getRouteMode'
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
        $this->container['masterWeight'] = isset($data['masterWeight']) ? $data['masterWeight'] : null;
        $this->container['readonlyInstances'] = isset($data['readonlyInstances']) ? $data['readonlyInstances'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['masterWeight'] === null) {
            $invalidProperties[] = "'masterWeight' can't be null";
        }
        if ($this->container['readonlyInstances'] === null) {
            $invalidProperties[] = "'readonlyInstances' can't be null";
        }
        if ($this->container['routeMode'] === null) {
            $invalidProperties[] = "'routeMode' can't be null";
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
    * Gets masterWeight
    *  数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    *
    * @return int
    */
    public function getMasterWeight()
    {
        return $this->container['masterWeight'];
    }

    /**
    * Sets masterWeight
    *
    * @param int $masterWeight 数据库主实例读权重。     - 当route_mode选择0（权重负载）时，该字段取值范围为0~1000。     - 当route_mode选择1或2（负载均衡）时，该字段不生效。
    *
    * @return $this
    */
    public function setMasterWeight($masterWeight)
    {
        $this->container['masterWeight'] = $masterWeight;
        return $this;
    }

    /**
    * Gets readonlyInstances
    *  数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\InstancesWeight[]
    */
    public function getReadonlyInstances()
    {
        return $this->container['readonlyInstances'];
    }

    /**
    * Sets readonlyInstances
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\InstancesWeight[] $readonlyInstances 数据库节点的读权重设置。      - 只能为只读实例选择权重。     - 该列表可以为空列表。
    *
    * @return $this
    */
    public function setReadonlyInstances($readonlyInstances)
    {
        $this->container['readonlyInstances'] = $readonlyInstances;
        return $this;
    }

    /**
    * Gets routeMode
    *  数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @return int
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param int $routeMode 数据库代理路由模式。 取值范围:     0：表示权重负载模式。     1：表示负载均衡模式（数据库主实例不接受读请求）。     2：表示负载均衡模式（数据库主实例接受读请求）。      - 如需使用负载均衡模式，请联系客服申请
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
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

