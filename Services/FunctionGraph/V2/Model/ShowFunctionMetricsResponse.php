<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFunctionMetricsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFunctionMetricsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * concurrencyNum  并发数
    * count  调用次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * functionErrorCount  函数错误次数
    * systemErrorCount  系统错误次数
    * instanceNum  弹性实例数
    * maxDuration  最大时延，单位毫秒
    * minDuration  最小时延，单位毫秒
    * rejectCount  被拒绝次数
    * reservedInstanceNum  预留实例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'concurrencyNum' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'count' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'duration' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'failCount' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'functionErrorCount' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'systemErrorCount' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'instanceNum' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'maxDuration' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'minDuration' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'rejectCount' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]',
            'reservedInstanceNum' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * concurrencyNum  并发数
    * count  调用次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * functionErrorCount  函数错误次数
    * systemErrorCount  系统错误次数
    * instanceNum  弹性实例数
    * maxDuration  最大时延，单位毫秒
    * minDuration  最小时延，单位毫秒
    * rejectCount  被拒绝次数
    * reservedInstanceNum  预留实例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'concurrencyNum' => null,
        'count' => null,
        'duration' => null,
        'failCount' => null,
        'functionErrorCount' => null,
        'systemErrorCount' => null,
        'instanceNum' => null,
        'maxDuration' => null,
        'minDuration' => null,
        'rejectCount' => null,
        'reservedInstanceNum' => null
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
    * concurrencyNum  并发数
    * count  调用次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * functionErrorCount  函数错误次数
    * systemErrorCount  系统错误次数
    * instanceNum  弹性实例数
    * maxDuration  最大时延，单位毫秒
    * minDuration  最小时延，单位毫秒
    * rejectCount  被拒绝次数
    * reservedInstanceNum  预留实例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'concurrencyNum' => 'concurrency_num',
            'count' => 'count',
            'duration' => 'duration',
            'failCount' => 'fail_count',
            'functionErrorCount' => 'function_error_count',
            'systemErrorCount' => 'system_error_count',
            'instanceNum' => 'instance_num',
            'maxDuration' => 'max_duration',
            'minDuration' => 'min_duration',
            'rejectCount' => 'reject_count',
            'reservedInstanceNum' => 'reserved_instance_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * concurrencyNum  并发数
    * count  调用次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * functionErrorCount  函数错误次数
    * systemErrorCount  系统错误次数
    * instanceNum  弹性实例数
    * maxDuration  最大时延，单位毫秒
    * minDuration  最小时延，单位毫秒
    * rejectCount  被拒绝次数
    * reservedInstanceNum  预留实例数
    *
    * @var string[]
    */
    protected static $setters = [
            'concurrencyNum' => 'setConcurrencyNum',
            'count' => 'setCount',
            'duration' => 'setDuration',
            'failCount' => 'setFailCount',
            'functionErrorCount' => 'setFunctionErrorCount',
            'systemErrorCount' => 'setSystemErrorCount',
            'instanceNum' => 'setInstanceNum',
            'maxDuration' => 'setMaxDuration',
            'minDuration' => 'setMinDuration',
            'rejectCount' => 'setRejectCount',
            'reservedInstanceNum' => 'setReservedInstanceNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * concurrencyNum  并发数
    * count  调用次数
    * duration  平均时延，单位毫秒
    * failCount  错误次数
    * functionErrorCount  函数错误次数
    * systemErrorCount  系统错误次数
    * instanceNum  弹性实例数
    * maxDuration  最大时延，单位毫秒
    * minDuration  最小时延，单位毫秒
    * rejectCount  被拒绝次数
    * reservedInstanceNum  预留实例数
    *
    * @var string[]
    */
    protected static $getters = [
            'concurrencyNum' => 'getConcurrencyNum',
            'count' => 'getCount',
            'duration' => 'getDuration',
            'failCount' => 'getFailCount',
            'functionErrorCount' => 'getFunctionErrorCount',
            'systemErrorCount' => 'getSystemErrorCount',
            'instanceNum' => 'getInstanceNum',
            'maxDuration' => 'getMaxDuration',
            'minDuration' => 'getMinDuration',
            'rejectCount' => 'getRejectCount',
            'reservedInstanceNum' => 'getReservedInstanceNum'
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
        $this->container['concurrencyNum'] = isset($data['concurrencyNum']) ? $data['concurrencyNum'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['failCount'] = isset($data['failCount']) ? $data['failCount'] : null;
        $this->container['functionErrorCount'] = isset($data['functionErrorCount']) ? $data['functionErrorCount'] : null;
        $this->container['systemErrorCount'] = isset($data['systemErrorCount']) ? $data['systemErrorCount'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['maxDuration'] = isset($data['maxDuration']) ? $data['maxDuration'] : null;
        $this->container['minDuration'] = isset($data['minDuration']) ? $data['minDuration'] : null;
        $this->container['rejectCount'] = isset($data['rejectCount']) ? $data['rejectCount'] : null;
        $this->container['reservedInstanceNum'] = isset($data['reservedInstanceNum']) ? $data['reservedInstanceNum'] : null;
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
    * Gets concurrencyNum
    *  并发数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getConcurrencyNum()
    {
        return $this->container['concurrencyNum'];
    }

    /**
    * Sets concurrencyNum
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $concurrencyNum 并发数
    *
    * @return $this
    */
    public function setConcurrencyNum($concurrencyNum)
    {
        $this->container['concurrencyNum'] = $concurrencyNum;
        return $this;
    }

    /**
    * Gets count
    *  调用次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $count 调用次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets duration
    *  平均时延，单位毫秒
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $duration 平均时延，单位毫秒
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets failCount
    *  错误次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getFailCount()
    {
        return $this->container['failCount'];
    }

    /**
    * Sets failCount
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $failCount 错误次数
    *
    * @return $this
    */
    public function setFailCount($failCount)
    {
        $this->container['failCount'] = $failCount;
        return $this;
    }

    /**
    * Gets functionErrorCount
    *  函数错误次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getFunctionErrorCount()
    {
        return $this->container['functionErrorCount'];
    }

    /**
    * Sets functionErrorCount
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $functionErrorCount 函数错误次数
    *
    * @return $this
    */
    public function setFunctionErrorCount($functionErrorCount)
    {
        $this->container['functionErrorCount'] = $functionErrorCount;
        return $this;
    }

    /**
    * Gets systemErrorCount
    *  系统错误次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getSystemErrorCount()
    {
        return $this->container['systemErrorCount'];
    }

    /**
    * Sets systemErrorCount
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $systemErrorCount 系统错误次数
    *
    * @return $this
    */
    public function setSystemErrorCount($systemErrorCount)
    {
        $this->container['systemErrorCount'] = $systemErrorCount;
        return $this;
    }

    /**
    * Gets instanceNum
    *  弹性实例数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $instanceNum 弹性实例数
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets maxDuration
    *  最大时延，单位毫秒
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getMaxDuration()
    {
        return $this->container['maxDuration'];
    }

    /**
    * Sets maxDuration
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $maxDuration 最大时延，单位毫秒
    *
    * @return $this
    */
    public function setMaxDuration($maxDuration)
    {
        $this->container['maxDuration'] = $maxDuration;
        return $this;
    }

    /**
    * Gets minDuration
    *  最小时延，单位毫秒
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getMinDuration()
    {
        return $this->container['minDuration'];
    }

    /**
    * Sets minDuration
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $minDuration 最小时延，单位毫秒
    *
    * @return $this
    */
    public function setMinDuration($minDuration)
    {
        $this->container['minDuration'] = $minDuration;
        return $this;
    }

    /**
    * Gets rejectCount
    *  被拒绝次数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getRejectCount()
    {
        return $this->container['rejectCount'];
    }

    /**
    * Sets rejectCount
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $rejectCount 被拒绝次数
    *
    * @return $this
    */
    public function setRejectCount($rejectCount)
    {
        $this->container['rejectCount'] = $rejectCount;
        return $this;
    }

    /**
    * Gets reservedInstanceNum
    *  预留实例数
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null
    */
    public function getReservedInstanceNum()
    {
        return $this->container['reservedInstanceNum'];
    }

    /**
    * Sets reservedInstanceNum
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\SlaReportsValue[]|null $reservedInstanceNum 预留实例数
    *
    * @return $this
    */
    public function setReservedInstanceNum($reservedInstanceNum)
    {
        $this->container['reservedInstanceNum'] = $reservedInstanceNum;
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

