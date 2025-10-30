<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllRiskConfigCheckRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllRiskConfigCheckRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  **参数解释** 风险总数 **取值范围** 取值0-200000
    * passNum  **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    * failedNum  **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    * processedNum  **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    * dataList  **参数解释** 数据列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'passNum' => 'int',
            'failedNum' => 'int',
            'processedNum' => 'int',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRulesResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  **参数解释** 风险总数 **取值范围** 取值0-200000
    * passNum  **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    * failedNum  **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    * processedNum  **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    * dataList  **参数解释** 数据列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'passNum' => 'int32',
        'failedNum' => 'int32',
        'processedNum' => 'int32',
        'dataList' => null
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
    * totalNum  **参数解释** 风险总数 **取值范围** 取值0-200000
    * passNum  **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    * failedNum  **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    * processedNum  **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    * dataList  **参数解释** 数据列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'passNum' => 'pass_num',
            'failedNum' => 'failed_num',
            'processedNum' => 'processed_num',
            'dataList' => 'data_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  **参数解释** 风险总数 **取值范围** 取值0-200000
    * passNum  **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    * failedNum  **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    * processedNum  **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    * dataList  **参数解释** 数据列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'passNum' => 'setPassNum',
            'failedNum' => 'setFailedNum',
            'processedNum' => 'setProcessedNum',
            'dataList' => 'setDataList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  **参数解释** 风险总数 **取值范围** 取值0-200000
    * passNum  **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    * failedNum  **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    * processedNum  **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    * dataList  **参数解释** 数据列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'passNum' => 'getPassNum',
            'failedNum' => 'getFailedNum',
            'processedNum' => 'getProcessedNum',
            'dataList' => 'getDataList'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['passNum'] = isset($data['passNum']) ? $data['passNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['processedNum'] = isset($data['processedNum']) ? $data['processedNum'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 200000)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passNum']) && ($this->container['passNum'] > 200000)) {
                $invalidProperties[] = "invalid value for 'passNum', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['passNum']) && ($this->container['passNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'passNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 200000)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processedNum']) && ($this->container['processedNum'] > 200000)) {
                $invalidProperties[] = "invalid value for 'processedNum', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['processedNum']) && ($this->container['processedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'processedNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  **参数解释** 风险总数 **取值范围** 取值0-200000
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释** 风险总数 **取值范围** 取值0-200000
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets passNum
    *  **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    *
    * @return int|null
    */
    public function getPassNum()
    {
        return $this->container['passNum'];
    }

    /**
    * Sets passNum
    *
    * @param int|null $passNum **参数解释** 已通过检查项数量 **取值范围** 取值0-200000
    *
    * @return $this
    */
    public function setPassNum($passNum)
    {
        $this->container['passNum'] = $passNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum **参数解释** 未通过检查项数量 **取值范围** 取值0-200000
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets processedNum
    *  **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    *
    * @return int|null
    */
    public function getProcessedNum()
    {
        return $this->container['processedNum'];
    }

    /**
    * Sets processedNum
    *
    * @param int|null $processedNum **参数解释** 已处理检查项数量 **取值范围** 取值0-200000
    *
    * @return $this
    */
    public function setProcessedNum($processedNum)
    {
        $this->container['processedNum'] = $processedNum;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释** 数据列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckRulesResponseInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRulesResponseInfo[]|null $dataList **参数解释** 数据列表
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
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

