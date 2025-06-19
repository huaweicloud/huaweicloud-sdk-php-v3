<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteSummaryVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteSummaryVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeCaseNum  已执行用例数
    * defectNum  缺陷总数
    * completedDefectNum  已完成缺陷数
    * caseSuccessRate  测试用例通过率
    * caseExecutionRate  用例执行率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeCaseNum' => 'int',
            'defectNum' => 'int',
            'completedDefectNum' => 'int',
            'caseSuccessRate' => 'string',
            'caseExecutionRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeCaseNum  已执行用例数
    * defectNum  缺陷总数
    * completedDefectNum  已完成缺陷数
    * caseSuccessRate  测试用例通过率
    * caseExecutionRate  用例执行率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeCaseNum' => 'int32',
        'defectNum' => 'int32',
        'completedDefectNum' => 'int32',
        'caseSuccessRate' => null,
        'caseExecutionRate' => null
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
    * executeCaseNum  已执行用例数
    * defectNum  缺陷总数
    * completedDefectNum  已完成缺陷数
    * caseSuccessRate  测试用例通过率
    * caseExecutionRate  用例执行率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeCaseNum' => 'execute_case_num',
            'defectNum' => 'defect_num',
            'completedDefectNum' => 'completed_defect_num',
            'caseSuccessRate' => 'case_success_rate',
            'caseExecutionRate' => 'case_execution_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeCaseNum  已执行用例数
    * defectNum  缺陷总数
    * completedDefectNum  已完成缺陷数
    * caseSuccessRate  测试用例通过率
    * caseExecutionRate  用例执行率
    *
    * @var string[]
    */
    protected static $setters = [
            'executeCaseNum' => 'setExecuteCaseNum',
            'defectNum' => 'setDefectNum',
            'completedDefectNum' => 'setCompletedDefectNum',
            'caseSuccessRate' => 'setCaseSuccessRate',
            'caseExecutionRate' => 'setCaseExecutionRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeCaseNum  已执行用例数
    * defectNum  缺陷总数
    * completedDefectNum  已完成缺陷数
    * caseSuccessRate  测试用例通过率
    * caseExecutionRate  用例执行率
    *
    * @var string[]
    */
    protected static $getters = [
            'executeCaseNum' => 'getExecuteCaseNum',
            'defectNum' => 'getDefectNum',
            'completedDefectNum' => 'getCompletedDefectNum',
            'caseSuccessRate' => 'getCaseSuccessRate',
            'caseExecutionRate' => 'getCaseExecutionRate'
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
        $this->container['executeCaseNum'] = isset($data['executeCaseNum']) ? $data['executeCaseNum'] : null;
        $this->container['defectNum'] = isset($data['defectNum']) ? $data['defectNum'] : null;
        $this->container['completedDefectNum'] = isset($data['completedDefectNum']) ? $data['completedDefectNum'] : null;
        $this->container['caseSuccessRate'] = isset($data['caseSuccessRate']) ? $data['caseSuccessRate'] : null;
        $this->container['caseExecutionRate'] = isset($data['caseExecutionRate']) ? $data['caseExecutionRate'] : null;
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
    * Gets executeCaseNum
    *  已执行用例数
    *
    * @return int|null
    */
    public function getExecuteCaseNum()
    {
        return $this->container['executeCaseNum'];
    }

    /**
    * Sets executeCaseNum
    *
    * @param int|null $executeCaseNum 已执行用例数
    *
    * @return $this
    */
    public function setExecuteCaseNum($executeCaseNum)
    {
        $this->container['executeCaseNum'] = $executeCaseNum;
        return $this;
    }

    /**
    * Gets defectNum
    *  缺陷总数
    *
    * @return int|null
    */
    public function getDefectNum()
    {
        return $this->container['defectNum'];
    }

    /**
    * Sets defectNum
    *
    * @param int|null $defectNum 缺陷总数
    *
    * @return $this
    */
    public function setDefectNum($defectNum)
    {
        $this->container['defectNum'] = $defectNum;
        return $this;
    }

    /**
    * Gets completedDefectNum
    *  已完成缺陷数
    *
    * @return int|null
    */
    public function getCompletedDefectNum()
    {
        return $this->container['completedDefectNum'];
    }

    /**
    * Sets completedDefectNum
    *
    * @param int|null $completedDefectNum 已完成缺陷数
    *
    * @return $this
    */
    public function setCompletedDefectNum($completedDefectNum)
    {
        $this->container['completedDefectNum'] = $completedDefectNum;
        return $this;
    }

    /**
    * Gets caseSuccessRate
    *  测试用例通过率
    *
    * @return string|null
    */
    public function getCaseSuccessRate()
    {
        return $this->container['caseSuccessRate'];
    }

    /**
    * Sets caseSuccessRate
    *
    * @param string|null $caseSuccessRate 测试用例通过率
    *
    * @return $this
    */
    public function setCaseSuccessRate($caseSuccessRate)
    {
        $this->container['caseSuccessRate'] = $caseSuccessRate;
        return $this;
    }

    /**
    * Gets caseExecutionRate
    *  用例执行率
    *
    * @return string|null
    */
    public function getCaseExecutionRate()
    {
        return $this->container['caseExecutionRate'];
    }

    /**
    * Sets caseExecutionRate
    *
    * @param string|null $caseExecutionRate 用例执行率
    *
    * @return $this
    */
    public function setCaseExecutionRate($caseExecutionRate)
    {
        $this->container['caseExecutionRate'] = $caseExecutionRate;
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

