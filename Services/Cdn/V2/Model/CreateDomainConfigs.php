<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDomainConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDomainConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * ipFilter  ipFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorCodeCache' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]',
            'ipFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFilter',
            'flowLimitStrategy' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]',
            'bandwidthAlarmStrategy' => '\HuaweiCloud\SDK\Cdn\V2\Model\BandwidthAlarmStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * ipFilter  ipFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorCodeCache' => null,
        'ipFilter' => null,
        'flowLimitStrategy' => null,
        'bandwidthAlarmStrategy' => null
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
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * ipFilter  ipFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorCodeCache' => 'error_code_cache',
            'ipFilter' => 'ip_filter',
            'flowLimitStrategy' => 'flow_limit_strategy',
            'bandwidthAlarmStrategy' => 'bandwidth_alarm_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * ipFilter  ipFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'errorCodeCache' => 'setErrorCodeCache',
            'ipFilter' => 'setIpFilter',
            'flowLimitStrategy' => 'setFlowLimitStrategy',
            'bandwidthAlarmStrategy' => 'setBandwidthAlarmStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorCodeCache  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    * ipFilter  ipFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * bandwidthAlarmStrategy  bandwidthAlarmStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'errorCodeCache' => 'getErrorCodeCache',
            'ipFilter' => 'getIpFilter',
            'flowLimitStrategy' => 'getFlowLimitStrategy',
            'bandwidthAlarmStrategy' => 'getBandwidthAlarmStrategy'
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
        $this->container['errorCodeCache'] = isset($data['errorCodeCache']) ? $data['errorCodeCache'] : null;
        $this->container['ipFilter'] = isset($data['ipFilter']) ? $data['ipFilter'] : null;
        $this->container['flowLimitStrategy'] = isset($data['flowLimitStrategy']) ? $data['flowLimitStrategy'] : null;
        $this->container['bandwidthAlarmStrategy'] = isset($data['bandwidthAlarmStrategy']) ? $data['bandwidthAlarmStrategy'] : null;
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
    * Gets errorCodeCache
    *  **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null
    */
    public function getErrorCodeCache()
    {
        return $this->container['errorCodeCache'];
    }

    /**
    * Sets errorCodeCache
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null $errorCodeCache **参数解释：** 将源站返回的错误状态码缓存到CDN节点，用户再次请求时由CDN直接响应给用户错误码 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setErrorCodeCache($errorCodeCache)
    {
        $this->container['errorCodeCache'] = $errorCodeCache;
        return $this;
    }

    /**
    * Gets ipFilter
    *  ipFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null
    */
    public function getIpFilter()
    {
        return $this->container['ipFilter'];
    }

    /**
    * Sets ipFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null $ipFilter ipFilter
    *
    * @return $this
    */
    public function setIpFilter($ipFilter)
    {
        $this->container['ipFilter'] = $ipFilter;
        return $this;
    }

    /**
    * Gets flowLimitStrategy
    *  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null
    */
    public function getFlowLimitStrategy()
    {
        return $this->container['flowLimitStrategy'];
    }

    /**
    * Sets flowLimitStrategy
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null $flowLimitStrategy **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setFlowLimitStrategy($flowLimitStrategy)
    {
        $this->container['flowLimitStrategy'] = $flowLimitStrategy;
        return $this;
    }

    /**
    * Gets bandwidthAlarmStrategy
    *  bandwidthAlarmStrategy
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\BandwidthAlarmStrategy|null
    */
    public function getBandwidthAlarmStrategy()
    {
        return $this->container['bandwidthAlarmStrategy'];
    }

    /**
    * Sets bandwidthAlarmStrategy
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\BandwidthAlarmStrategy|null $bandwidthAlarmStrategy bandwidthAlarmStrategy
    *
    * @return $this
    */
    public function setBandwidthAlarmStrategy($bandwidthAlarmStrategy)
    {
        $this->container['bandwidthAlarmStrategy'] = $bandwidthAlarmStrategy;
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

