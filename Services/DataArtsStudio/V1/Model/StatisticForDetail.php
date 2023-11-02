<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticForDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticForDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  统计对象编号
    * name  统计对象名称
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    * costTimeAvg  请求平均时长
    * successCostTimeAvg  成功请求平均时长
    * failCostTimeAvg  失败请求平均时长
    * successRate  成功率
    * failRate  失败率
    * legalRate  合法率
    * illegalRate  非法率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'callNum' => 'int',
            'successNum' => 'int',
            'failNum' => 'int',
            'legalNum' => 'int',
            'illegalNum' => 'int',
            'costTimeAvg' => 'float',
            'successCostTimeAvg' => 'float',
            'failCostTimeAvg' => 'float',
            'successRate' => 'float',
            'failRate' => 'float',
            'legalRate' => 'float',
            'illegalRate' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  统计对象编号
    * name  统计对象名称
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    * costTimeAvg  请求平均时长
    * successCostTimeAvg  成功请求平均时长
    * failCostTimeAvg  失败请求平均时长
    * successRate  成功率
    * failRate  失败率
    * legalRate  合法率
    * illegalRate  非法率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'callNum' => null,
        'successNum' => null,
        'failNum' => null,
        'legalNum' => null,
        'illegalNum' => null,
        'costTimeAvg' => null,
        'successCostTimeAvg' => null,
        'failCostTimeAvg' => null,
        'successRate' => null,
        'failRate' => null,
        'legalRate' => null,
        'illegalRate' => null
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
    * id  统计对象编号
    * name  统计对象名称
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    * costTimeAvg  请求平均时长
    * successCostTimeAvg  成功请求平均时长
    * failCostTimeAvg  失败请求平均时长
    * successRate  成功率
    * failRate  失败率
    * legalRate  合法率
    * illegalRate  非法率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'callNum' => 'call_num',
            'successNum' => 'success_num',
            'failNum' => 'fail_num',
            'legalNum' => 'legal_num',
            'illegalNum' => 'illegal_num',
            'costTimeAvg' => 'cost_time_avg',
            'successCostTimeAvg' => 'success_cost_time_avg',
            'failCostTimeAvg' => 'fail_cost_time_avg',
            'successRate' => 'success_rate',
            'failRate' => 'fail_rate',
            'legalRate' => 'legal_rate',
            'illegalRate' => 'illegal_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  统计对象编号
    * name  统计对象名称
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    * costTimeAvg  请求平均时长
    * successCostTimeAvg  成功请求平均时长
    * failCostTimeAvg  失败请求平均时长
    * successRate  成功率
    * failRate  失败率
    * legalRate  合法率
    * illegalRate  非法率
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'callNum' => 'setCallNum',
            'successNum' => 'setSuccessNum',
            'failNum' => 'setFailNum',
            'legalNum' => 'setLegalNum',
            'illegalNum' => 'setIllegalNum',
            'costTimeAvg' => 'setCostTimeAvg',
            'successCostTimeAvg' => 'setSuccessCostTimeAvg',
            'failCostTimeAvg' => 'setFailCostTimeAvg',
            'successRate' => 'setSuccessRate',
            'failRate' => 'setFailRate',
            'legalRate' => 'setLegalRate',
            'illegalRate' => 'setIllegalRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  统计对象编号
    * name  统计对象名称
    * callNum  调用总量
    * successNum  成功调用量(取数成功)
    * failNum  失败调用量(取数失败)
    * legalNum  合法调用量(通过校验)
    * illegalNum  非法调用量(无法通过校验)
    * costTimeAvg  请求平均时长
    * successCostTimeAvg  成功请求平均时长
    * failCostTimeAvg  失败请求平均时长
    * successRate  成功率
    * failRate  失败率
    * legalRate  合法率
    * illegalRate  非法率
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'callNum' => 'getCallNum',
            'successNum' => 'getSuccessNum',
            'failNum' => 'getFailNum',
            'legalNum' => 'getLegalNum',
            'illegalNum' => 'getIllegalNum',
            'costTimeAvg' => 'getCostTimeAvg',
            'successCostTimeAvg' => 'getSuccessCostTimeAvg',
            'failCostTimeAvg' => 'getFailCostTimeAvg',
            'successRate' => 'getSuccessRate',
            'failRate' => 'getFailRate',
            'legalRate' => 'getLegalRate',
            'illegalRate' => 'getIllegalRate'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['callNum'] = isset($data['callNum']) ? $data['callNum'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failNum'] = isset($data['failNum']) ? $data['failNum'] : null;
        $this->container['legalNum'] = isset($data['legalNum']) ? $data['legalNum'] : null;
        $this->container['illegalNum'] = isset($data['illegalNum']) ? $data['illegalNum'] : null;
        $this->container['costTimeAvg'] = isset($data['costTimeAvg']) ? $data['costTimeAvg'] : null;
        $this->container['successCostTimeAvg'] = isset($data['successCostTimeAvg']) ? $data['successCostTimeAvg'] : null;
        $this->container['failCostTimeAvg'] = isset($data['failCostTimeAvg']) ? $data['failCostTimeAvg'] : null;
        $this->container['successRate'] = isset($data['successRate']) ? $data['successRate'] : null;
        $this->container['failRate'] = isset($data['failRate']) ? $data['failRate'] : null;
        $this->container['legalRate'] = isset($data['legalRate']) ? $data['legalRate'] : null;
        $this->container['illegalRate'] = isset($data['illegalRate']) ? $data['illegalRate'] : null;
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
    * Gets id
    *  统计对象编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 统计对象编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  统计对象名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 统计对象名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets callNum
    *  调用总量
    *
    * @return int|null
    */
    public function getCallNum()
    {
        return $this->container['callNum'];
    }

    /**
    * Sets callNum
    *
    * @param int|null $callNum 调用总量
    *
    * @return $this
    */
    public function setCallNum($callNum)
    {
        $this->container['callNum'] = $callNum;
        return $this;
    }

    /**
    * Gets successNum
    *  成功调用量(取数成功)
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum 成功调用量(取数成功)
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failNum
    *  失败调用量(取数失败)
    *
    * @return int|null
    */
    public function getFailNum()
    {
        return $this->container['failNum'];
    }

    /**
    * Sets failNum
    *
    * @param int|null $failNum 失败调用量(取数失败)
    *
    * @return $this
    */
    public function setFailNum($failNum)
    {
        $this->container['failNum'] = $failNum;
        return $this;
    }

    /**
    * Gets legalNum
    *  合法调用量(通过校验)
    *
    * @return int|null
    */
    public function getLegalNum()
    {
        return $this->container['legalNum'];
    }

    /**
    * Sets legalNum
    *
    * @param int|null $legalNum 合法调用量(通过校验)
    *
    * @return $this
    */
    public function setLegalNum($legalNum)
    {
        $this->container['legalNum'] = $legalNum;
        return $this;
    }

    /**
    * Gets illegalNum
    *  非法调用量(无法通过校验)
    *
    * @return int|null
    */
    public function getIllegalNum()
    {
        return $this->container['illegalNum'];
    }

    /**
    * Sets illegalNum
    *
    * @param int|null $illegalNum 非法调用量(无法通过校验)
    *
    * @return $this
    */
    public function setIllegalNum($illegalNum)
    {
        $this->container['illegalNum'] = $illegalNum;
        return $this;
    }

    /**
    * Gets costTimeAvg
    *  请求平均时长
    *
    * @return float|null
    */
    public function getCostTimeAvg()
    {
        return $this->container['costTimeAvg'];
    }

    /**
    * Sets costTimeAvg
    *
    * @param float|null $costTimeAvg 请求平均时长
    *
    * @return $this
    */
    public function setCostTimeAvg($costTimeAvg)
    {
        $this->container['costTimeAvg'] = $costTimeAvg;
        return $this;
    }

    /**
    * Gets successCostTimeAvg
    *  成功请求平均时长
    *
    * @return float|null
    */
    public function getSuccessCostTimeAvg()
    {
        return $this->container['successCostTimeAvg'];
    }

    /**
    * Sets successCostTimeAvg
    *
    * @param float|null $successCostTimeAvg 成功请求平均时长
    *
    * @return $this
    */
    public function setSuccessCostTimeAvg($successCostTimeAvg)
    {
        $this->container['successCostTimeAvg'] = $successCostTimeAvg;
        return $this;
    }

    /**
    * Gets failCostTimeAvg
    *  失败请求平均时长
    *
    * @return float|null
    */
    public function getFailCostTimeAvg()
    {
        return $this->container['failCostTimeAvg'];
    }

    /**
    * Sets failCostTimeAvg
    *
    * @param float|null $failCostTimeAvg 失败请求平均时长
    *
    * @return $this
    */
    public function setFailCostTimeAvg($failCostTimeAvg)
    {
        $this->container['failCostTimeAvg'] = $failCostTimeAvg;
        return $this;
    }

    /**
    * Gets successRate
    *  成功率
    *
    * @return float|null
    */
    public function getSuccessRate()
    {
        return $this->container['successRate'];
    }

    /**
    * Sets successRate
    *
    * @param float|null $successRate 成功率
    *
    * @return $this
    */
    public function setSuccessRate($successRate)
    {
        $this->container['successRate'] = $successRate;
        return $this;
    }

    /**
    * Gets failRate
    *  失败率
    *
    * @return float|null
    */
    public function getFailRate()
    {
        return $this->container['failRate'];
    }

    /**
    * Sets failRate
    *
    * @param float|null $failRate 失败率
    *
    * @return $this
    */
    public function setFailRate($failRate)
    {
        $this->container['failRate'] = $failRate;
        return $this;
    }

    /**
    * Gets legalRate
    *  合法率
    *
    * @return float|null
    */
    public function getLegalRate()
    {
        return $this->container['legalRate'];
    }

    /**
    * Sets legalRate
    *
    * @param float|null $legalRate 合法率
    *
    * @return $this
    */
    public function setLegalRate($legalRate)
    {
        $this->container['legalRate'] = $legalRate;
        return $this;
    }

    /**
    * Gets illegalRate
    *  非法率
    *
    * @return float|null
    */
    public function getIllegalRate()
    {
        return $this->container['illegalRate'];
    }

    /**
    * Sets illegalRate
    *
    * @param float|null $illegalRate 非法率
    *
    * @return $this
    */
    public function setIllegalRate($illegalRate)
    {
        $this->container['illegalRate'] = $illegalRate;
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

