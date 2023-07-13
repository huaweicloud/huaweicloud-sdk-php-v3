<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CircuitBreaker implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CircuitBreaker';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switch  熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    * deadNum  502/504数量阈值，每30s累加的502/504数量阈值
    * deadRatio  502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    * blockTime  初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    * superpositionNum  连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    * suspendNum  读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    * susBlockTime  读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switch' => 'bool',
            'deadNum' => 'int',
            'deadRatio' => 'float',
            'blockTime' => 'int',
            'superpositionNum' => 'int',
            'suspendNum' => 'int',
            'susBlockTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switch  熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    * deadNum  502/504数量阈值，每30s累加的502/504数量阈值
    * deadRatio  502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    * blockTime  初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    * superpositionNum  连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    * suspendNum  读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    * susBlockTime  读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switch' => null,
        'deadNum' => 'int32',
        'deadRatio' => null,
        'blockTime' => 'int32',
        'superpositionNum' => 'int32',
        'suspendNum' => 'int32',
        'susBlockTime' => 'int32'
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
    * switch  熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    * deadNum  502/504数量阈值，每30s累加的502/504数量阈值
    * deadRatio  502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    * blockTime  初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    * superpositionNum  连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    * suspendNum  读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    * susBlockTime  读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switch' => 'switch',
            'deadNum' => 'dead_num',
            'deadRatio' => 'dead_ratio',
            'blockTime' => 'block_time',
            'superpositionNum' => 'superposition_num',
            'suspendNum' => 'suspend_num',
            'susBlockTime' => 'sus_block_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switch  熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    * deadNum  502/504数量阈值，每30s累加的502/504数量阈值
    * deadRatio  502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    * blockTime  初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    * superpositionNum  连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    * suspendNum  读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    * susBlockTime  读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'switch' => 'setSwitch',
            'deadNum' => 'setDeadNum',
            'deadRatio' => 'setDeadRatio',
            'blockTime' => 'setBlockTime',
            'superpositionNum' => 'setSuperpositionNum',
            'suspendNum' => 'setSuspendNum',
            'susBlockTime' => 'setSusBlockTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switch  熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    * deadNum  502/504数量阈值，每30s累加的502/504数量阈值
    * deadRatio  502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    * blockTime  初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    * superpositionNum  连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    * suspendNum  读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    * susBlockTime  读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'switch' => 'getSwitch',
            'deadNum' => 'getDeadNum',
            'deadRatio' => 'getDeadRatio',
            'blockTime' => 'getBlockTime',
            'superpositionNum' => 'getSuperpositionNum',
            'suspendNum' => 'getSuspendNum',
            'susBlockTime' => 'getSusBlockTime'
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
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['deadNum'] = isset($data['deadNum']) ? $data['deadNum'] : null;
        $this->container['deadRatio'] = isset($data['deadRatio']) ? $data['deadRatio'] : null;
        $this->container['blockTime'] = isset($data['blockTime']) ? $data['blockTime'] : null;
        $this->container['superpositionNum'] = isset($data['superpositionNum']) ? $data['superpositionNum'] : null;
        $this->container['suspendNum'] = isset($data['suspendNum']) ? $data['suspendNum'] : null;
        $this->container['susBlockTime'] = isset($data['susBlockTime']) ? $data['susBlockTime'] : null;
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
    * Gets switch
    *  熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    *
    * @return bool|null
    */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
    * Sets switch
    *
    * @param bool|null $switch 熔断开关，是否开启连接保护   - true：开启连接保护   - false: 关闭连接保护
    *
    * @return $this
    */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;
        return $this;
    }

    /**
    * Gets deadNum
    *  502/504数量阈值，每30s累加的502/504数量阈值
    *
    * @return int|null
    */
    public function getDeadNum()
    {
        return $this->container['deadNum'];
    }

    /**
    * Sets deadNum
    *
    * @param int|null $deadNum 502/504数量阈值，每30s累加的502/504数量阈值
    *
    * @return $this
    */
    public function setDeadNum($deadNum)
    {
        $this->container['deadNum'] = $deadNum;
        return $this;
    }

    /**
    * Gets deadRatio
    *  502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    *
    * @return float|null
    */
    public function getDeadRatio()
    {
        return $this->container['deadRatio'];
    }

    /**
    * Sets deadRatio
    *
    * @param float|null $deadRatio 502/504数量占比(%)，总请求数量中502/504数量占比达到所设定值，并且与数量阈值同时满足时触发宕机保护
    *
    * @return $this
    */
    public function setDeadRatio($deadRatio)
    {
        $this->container['deadRatio'] = $deadRatio;
        return $this;
    }

    /**
    * Gets blockTime
    *  初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @return int|null
    */
    public function getBlockTime()
    {
        return $this->container['blockTime'];
    }

    /**
    * Sets blockTime
    *
    * @param int|null $blockTime 初次触发宕机的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @return $this
    */
    public function setBlockTime($blockTime)
    {
        $this->container['blockTime'] = $blockTime;
        return $this;
    }

    /**
    * Gets superpositionNum
    *  连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    *
    * @return int|null
    */
    public function getSuperpositionNum()
    {
        return $this->container['superpositionNum'];
    }

    /**
    * Sets superpositionNum
    *
    * @param int|null $superpositionNum 连续触发时，保护时间延长最大倍数，叠加周期为3600s。例如，“初次保护时间”设置为180s，“连续触发叠加系数”设置为3。   - 当触发次数为2（即小于3）时，保护时间为360s。   - 当次数大于等于3时，保护时间为540s。   - 当累计保护时间超过1小时（3600s），叠加次数会从头计数。
    *
    * @return $this
    */
    public function setSuperpositionNum($superpositionNum)
    {
        $this->container['superpositionNum'] = $superpositionNum;
        return $this;
    }

    /**
    * Gets suspendNum
    *  读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    *
    * @return int|null
    */
    public function getSuspendNum()
    {
        return $this->container['suspendNum'];
    }

    /**
    * Sets suspendNum
    *
    * @param int|null $suspendNum 读等待URL请求数量阈值，读等待URL请求数量到达设定值即触发连接保护
    *
    * @return $this
    */
    public function setSuspendNum($suspendNum)
    {
        $this->container['suspendNum'] = $suspendNum;
        return $this;
    }

    /**
    * Gets susBlockTime
    *  读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @return int|null
    */
    public function getSusBlockTime()
    {
        return $this->container['susBlockTime'];
    }

    /**
    * Sets susBlockTime
    *
    * @param int|null $susBlockTime 读等待URL请求数量超过阈值后的熔断时间，达到数量阈值所触发的保护时间，即WAF将停止转发用户请求的时间。
    *
    * @return $this
    */
    public function setSusBlockTime($susBlockTime)
    {
        $this->container['susBlockTime'] = $susBlockTime;
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

