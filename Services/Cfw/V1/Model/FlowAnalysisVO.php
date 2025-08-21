<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowAnalysisVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowAnalysisVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appCount  **参数解释**： 应用统计 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP计数 **取值范围**： 不涉及
    * dstPortCount  **参数**： 目的端口计数 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： TOP会话详情 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话次数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP计数 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appCount' => 'int',
            'bytes' => 'double',
            'dstIpCount' => 'int',
            'dstPortCount' => 'int',
            'endTime' => 'int',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\SessionVO[]',
            'requestByte' => 'double',
            'responseByte' => 'double',
            'sessions' => 'int',
            'srcIpCount' => 'int',
            'startTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appCount  **参数解释**： 应用统计 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP计数 **取值范围**： 不涉及
    * dstPortCount  **参数**： 目的端口计数 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： TOP会话详情 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话次数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP计数 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appCount' => 'int64',
        'bytes' => 'double',
        'dstIpCount' => 'int64',
        'dstPortCount' => 'int64',
        'endTime' => 'int64',
        'records' => null,
        'requestByte' => 'double',
        'responseByte' => 'double',
        'sessions' => 'int64',
        'srcIpCount' => 'int64',
        'startTime' => 'int64'
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
    * appCount  **参数解释**： 应用统计 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP计数 **取值范围**： 不涉及
    * dstPortCount  **参数**： 目的端口计数 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： TOP会话详情 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话次数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP计数 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appCount' => 'app_count',
            'bytes' => 'bytes',
            'dstIpCount' => 'dst_ip_count',
            'dstPortCount' => 'dst_port_count',
            'endTime' => 'end_time',
            'records' => 'records',
            'requestByte' => 'request_byte',
            'responseByte' => 'response_byte',
            'sessions' => 'sessions',
            'srcIpCount' => 'src_ip_count',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appCount  **参数解释**： 应用统计 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP计数 **取值范围**： 不涉及
    * dstPortCount  **参数**： 目的端口计数 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： TOP会话详情 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话次数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP计数 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'appCount' => 'setAppCount',
            'bytes' => 'setBytes',
            'dstIpCount' => 'setDstIpCount',
            'dstPortCount' => 'setDstPortCount',
            'endTime' => 'setEndTime',
            'records' => 'setRecords',
            'requestByte' => 'setRequestByte',
            'responseByte' => 'setResponseByte',
            'sessions' => 'setSessions',
            'srcIpCount' => 'setSrcIpCount',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appCount  **参数解释**： 应用统计 **取值范围**： 不涉及
    * bytes  **参数解释**： 字节数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP计数 **取值范围**： 不涉及
    * dstPortCount  **参数**： 目的端口计数 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： TOP会话详情 **取值范围**： 不涉及
    * requestByte  **参数解释**： 请求字节数 **取值范围**： 不涉及
    * responseByte  **参数解释**： 响应字节数 **取值范围**： 不涉及
    * sessions  **参数解释**： 会话次数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP计数 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'appCount' => 'getAppCount',
            'bytes' => 'getBytes',
            'dstIpCount' => 'getDstIpCount',
            'dstPortCount' => 'getDstPortCount',
            'endTime' => 'getEndTime',
            'records' => 'getRecords',
            'requestByte' => 'getRequestByte',
            'responseByte' => 'getResponseByte',
            'sessions' => 'getSessions',
            'srcIpCount' => 'getSrcIpCount',
            'startTime' => 'getStartTime'
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
        $this->container['appCount'] = isset($data['appCount']) ? $data['appCount'] : null;
        $this->container['bytes'] = isset($data['bytes']) ? $data['bytes'] : null;
        $this->container['dstIpCount'] = isset($data['dstIpCount']) ? $data['dstIpCount'] : null;
        $this->container['dstPortCount'] = isset($data['dstPortCount']) ? $data['dstPortCount'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['requestByte'] = isset($data['requestByte']) ? $data['requestByte'] : null;
        $this->container['responseByte'] = isset($data['responseByte']) ? $data['responseByte'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['srcIpCount'] = isset($data['srcIpCount']) ? $data['srcIpCount'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    * Gets appCount
    *  **参数解释**： 应用统计 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAppCount()
    {
        return $this->container['appCount'];
    }

    /**
    * Sets appCount
    *
    * @param int|null $appCount **参数解释**： 应用统计 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppCount($appCount)
    {
        $this->container['appCount'] = $appCount;
        return $this;
    }

    /**
    * Gets bytes
    *  **参数解释**： 字节数 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getBytes()
    {
        return $this->container['bytes'];
    }

    /**
    * Sets bytes
    *
    * @param double|null $bytes **参数解释**： 字节数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setBytes($bytes)
    {
        $this->container['bytes'] = $bytes;
        return $this;
    }

    /**
    * Gets dstIpCount
    *  **参数解释**： 目的IP计数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDstIpCount()
    {
        return $this->container['dstIpCount'];
    }

    /**
    * Sets dstIpCount
    *
    * @param int|null $dstIpCount **参数解释**： 目的IP计数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIpCount($dstIpCount)
    {
        $this->container['dstIpCount'] = $dstIpCount;
        return $this;
    }

    /**
    * Gets dstPortCount
    *  **参数**： 目的端口计数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDstPortCount()
    {
        return $this->container['dstPortCount'];
    }

    /**
    * Sets dstPortCount
    *
    * @param int|null $dstPortCount **参数**： 目的端口计数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPortCount($dstPortCount)
    {
        $this->container['dstPortCount'] = $dstPortCount;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释**： TOP会话详情 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\SessionVO[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\SessionVO[]|null $records **参数解释**： TOP会话详情 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
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
    *  **参数解释**： 会话次数 **取值范围**： 不涉及
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
    * @param int|null $sessions **参数解释**： 会话次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;
        return $this;
    }

    /**
    * Gets srcIpCount
    *  **参数解释**： 源IP计数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSrcIpCount()
    {
        return $this->container['srcIpCount'];
    }

    /**
    * Sets srcIpCount
    *
    * @param int|null $srcIpCount **参数解释**： 源IP计数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIpCount($srcIpCount)
    {
        $this->container['srcIpCount'] = $srcIpCount;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

