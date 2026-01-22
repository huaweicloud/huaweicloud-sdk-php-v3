<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowDetailsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowDetailsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apps  **参数解释**： 应用统计 **取值范围**： 不涉及
    * associateInstanceType  **参数解释**： 关联资产类型 **取值范围**： 不涉及
    * deviceName  **参数解释**： 关联资产名称 **取值范围**： 不涉及
    * item  **参数解释**： 聚合项 **取值范围**： 不涉及
    * lastTime  **参数解释**： 最近访问时间 **取值范围**： 不涉及
    * aggStartTime  **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    * aggEndTime  **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    * ports  **参数解释**： 端口统计 **取值范围**： 不涉及
    * region  **参数解释**： 地区 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * tags  **参数解释**： 标签 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apps' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'associateInstanceType' => 'string',
            'deviceName' => 'string',
            'item' => 'string',
            'lastTime' => 'int',
            'aggStartTime' => 'int',
            'aggEndTime' => 'int',
            'ports' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'region' => 'string',
            'requestByte' => 'double',
            'responseByte' => 'double',
            'sessions' => 'int',
            'tags' => 'string',
            'srcIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'dstIp' => '\HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apps  **参数解释**： 应用统计 **取值范围**： 不涉及
    * associateInstanceType  **参数解释**： 关联资产类型 **取值范围**： 不涉及
    * deviceName  **参数解释**： 关联资产名称 **取值范围**： 不涉及
    * item  **参数解释**： 聚合项 **取值范围**： 不涉及
    * lastTime  **参数解释**： 最近访问时间 **取值范围**： 不涉及
    * aggStartTime  **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    * aggEndTime  **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    * ports  **参数解释**： 端口统计 **取值范围**： 不涉及
    * region  **参数解释**： 地区 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * tags  **参数解释**： 标签 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apps' => null,
        'associateInstanceType' => null,
        'deviceName' => null,
        'item' => null,
        'lastTime' => 'int64',
        'aggStartTime' => 'int64',
        'aggEndTime' => 'int64',
        'ports' => null,
        'region' => null,
        'requestByte' => 'double',
        'responseByte' => 'double',
        'sessions' => 'int64',
        'tags' => null,
        'srcIp' => null,
        'dstIp' => null,
        'protocol' => null
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
    * apps  **参数解释**： 应用统计 **取值范围**： 不涉及
    * associateInstanceType  **参数解释**： 关联资产类型 **取值范围**： 不涉及
    * deviceName  **参数解释**： 关联资产名称 **取值范围**： 不涉及
    * item  **参数解释**： 聚合项 **取值范围**： 不涉及
    * lastTime  **参数解释**： 最近访问时间 **取值范围**： 不涉及
    * aggStartTime  **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    * aggEndTime  **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    * ports  **参数解释**： 端口统计 **取值范围**： 不涉及
    * region  **参数解释**： 地区 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * tags  **参数解释**： 标签 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apps' => 'apps',
            'associateInstanceType' => 'associate_instance_type',
            'deviceName' => 'device_name',
            'item' => 'item',
            'lastTime' => 'last_time',
            'aggStartTime' => 'agg_start_time',
            'aggEndTime' => 'agg_end_time',
            'ports' => 'ports',
            'region' => 'region',
            'requestByte' => 'request_byte',
            'responseByte' => 'response_byte',
            'sessions' => 'sessions',
            'tags' => 'tags',
            'srcIp' => 'src_ip',
            'dstIp' => 'dst_ip',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apps  **参数解释**： 应用统计 **取值范围**： 不涉及
    * associateInstanceType  **参数解释**： 关联资产类型 **取值范围**： 不涉及
    * deviceName  **参数解释**： 关联资产名称 **取值范围**： 不涉及
    * item  **参数解释**： 聚合项 **取值范围**： 不涉及
    * lastTime  **参数解释**： 最近访问时间 **取值范围**： 不涉及
    * aggStartTime  **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    * aggEndTime  **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    * ports  **参数解释**： 端口统计 **取值范围**： 不涉及
    * region  **参数解释**： 地区 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * tags  **参数解释**： 标签 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'apps' => 'setApps',
            'associateInstanceType' => 'setAssociateInstanceType',
            'deviceName' => 'setDeviceName',
            'item' => 'setItem',
            'lastTime' => 'setLastTime',
            'aggStartTime' => 'setAggStartTime',
            'aggEndTime' => 'setAggEndTime',
            'ports' => 'setPorts',
            'region' => 'setRegion',
            'requestByte' => 'setRequestByte',
            'responseByte' => 'setResponseByte',
            'sessions' => 'setSessions',
            'tags' => 'setTags',
            'srcIp' => 'setSrcIp',
            'dstIp' => 'setDstIp',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apps  **参数解释**： 应用统计 **取值范围**： 不涉及
    * associateInstanceType  **参数解释**： 关联资产类型 **取值范围**： 不涉及
    * deviceName  **参数解释**： 关联资产名称 **取值范围**： 不涉及
    * item  **参数解释**： 聚合项 **取值范围**： 不涉及
    * lastTime  **参数解释**： 最近访问时间 **取值范围**： 不涉及
    * aggStartTime  **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    * aggEndTime  **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    * ports  **参数解释**： 端口统计 **取值范围**： 不涉及
    * region  **参数解释**： 地区 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话数量 **取值范围**： 不涉及
    * tags  **参数解释**： 标签 **取值范围**： 不涉及
    * srcIp  **参数解释**： 源IP **取值范围**： 不涉及
    * dstIp  **参数解释**： 目的IP **取值范围**： 不涉及
    * protocol  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'apps' => 'getApps',
            'associateInstanceType' => 'getAssociateInstanceType',
            'deviceName' => 'getDeviceName',
            'item' => 'getItem',
            'lastTime' => 'getLastTime',
            'aggStartTime' => 'getAggStartTime',
            'aggEndTime' => 'getAggEndTime',
            'ports' => 'getPorts',
            'region' => 'getRegion',
            'requestByte' => 'getRequestByte',
            'responseByte' => 'getResponseByte',
            'sessions' => 'getSessions',
            'tags' => 'getTags',
            'srcIp' => 'getSrcIp',
            'dstIp' => 'getDstIp',
            'protocol' => 'getProtocol'
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
        $this->container['apps'] = isset($data['apps']) ? $data['apps'] : null;
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['lastTime'] = isset($data['lastTime']) ? $data['lastTime'] : null;
        $this->container['aggStartTime'] = isset($data['aggStartTime']) ? $data['aggStartTime'] : null;
        $this->container['aggEndTime'] = isset($data['aggEndTime']) ? $data['aggEndTime'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['requestByte'] = isset($data['requestByte']) ? $data['requestByte'] : null;
        $this->container['responseByte'] = isset($data['responseByte']) ? $data['responseByte'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
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
    * Gets apps
    *  **参数解释**： 应用统计 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getApps()
    {
        return $this->container['apps'];
    }

    /**
    * Sets apps
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $apps **参数解释**： 应用统计 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;
        return $this;
    }

    /**
    * Gets associateInstanceType
    *  **参数解释**： 关联资产类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAssociateInstanceType()
    {
        return $this->container['associateInstanceType'];
    }

    /**
    * Sets associateInstanceType
    *
    * @param string|null $associateInstanceType **参数解释**： 关联资产类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAssociateInstanceType($associateInstanceType)
    {
        $this->container['associateInstanceType'] = $associateInstanceType;
        return $this;
    }

    /**
    * Gets deviceName
    *  **参数解释**： 关联资产名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName **参数解释**： 关联资产名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets item
    *  **参数解释**： 聚合项 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
    * Sets item
    *
    * @param string|null $item **参数解释**： 聚合项 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setItem($item)
    {
        $this->container['item'] = $item;
        return $this;
    }

    /**
    * Gets lastTime
    *  **参数解释**： 最近访问时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLastTime()
    {
        return $this->container['lastTime'];
    }

    /**
    * Sets lastTime
    *
    * @param int|null $lastTime **参数解释**： 最近访问时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLastTime($lastTime)
    {
        $this->container['lastTime'] = $lastTime;
        return $this;
    }

    /**
    * Gets aggStartTime
    *  **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAggStartTime()
    {
        return $this->container['aggStartTime'];
    }

    /**
    * Sets aggStartTime
    *
    * @param int|null $aggStartTime **参数解释**： 聚合开始时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAggStartTime($aggStartTime)
    {
        $this->container['aggStartTime'] = $aggStartTime;
        return $this;
    }

    /**
    * Gets aggEndTime
    *  **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAggEndTime()
    {
        return $this->container['aggEndTime'];
    }

    /**
    * Sets aggEndTime
    *
    * @param int|null $aggEndTime **参数解释**： 聚合结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAggEndTime($aggEndTime)
    {
        $this->container['aggEndTime'] = $aggEndTime;
        return $this;
    }

    /**
    * Gets ports
    *  **参数解释**： 端口统计 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $ports **参数解释**： 端口统计 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释**： 地区 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**： 地区 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets requestByte
    *  **参数解释**： 请求字节数 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getRequestByte()
    {
        return $this->container['requestByte'];
    }

    /**
    * Sets requestByte
    *
    * @param double|null $requestByte **参数解释**： 请求字节数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRequestByte($requestByte)
    {
        $this->container['requestByte'] = $requestByte;
        return $this;
    }

    /**
    * Gets responseByte
    *  **参数解释**： 响应字节数 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getResponseByte()
    {
        return $this->container['responseByte'];
    }

    /**
    * Sets responseByte
    *
    * @param double|null $responseByte **参数解释**： 响应字节数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setResponseByte($responseByte)
    {
        $this->container['responseByte'] = $responseByte;
        return $this;
    }

    /**
    * Gets sessions
    *  **参数解释**： 会话数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
    * Sets sessions
    *
    * @param int|null $sessions **参数解释**： 会话数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 标签 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags **参数解释**： 标签 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets srcIp
    *  **参数解释**： 源IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $srcIp **参数解释**： 源IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets dstIp
    *  **参数解释**： 目的IP **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ItemVO[]|null $dstIp **参数解释**： 目的IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol **参数解释**： 协议 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

