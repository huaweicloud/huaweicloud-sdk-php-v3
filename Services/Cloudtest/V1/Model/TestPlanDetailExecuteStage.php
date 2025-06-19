<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanDetailExecuteStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanDetail_execute_stage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defectCount  缺陷个数
    * completedDefectCount  已完成缺陷个数
    * casePassRate  用例通过率,按用例结果计算
    * executedCaseCount  已执行用例数, 按用例状态统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defectCount' => 'int',
            'completedDefectCount' => 'int',
            'casePassRate' => 'string',
            'executedCaseCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defectCount  缺陷个数
    * completedDefectCount  已完成缺陷个数
    * casePassRate  用例通过率,按用例结果计算
    * executedCaseCount  已执行用例数, 按用例状态统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defectCount' => 'int32',
        'completedDefectCount' => 'int32',
        'casePassRate' => null,
        'executedCaseCount' => 'int32'
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
    * defectCount  缺陷个数
    * completedDefectCount  已完成缺陷个数
    * casePassRate  用例通过率,按用例结果计算
    * executedCaseCount  已执行用例数, 按用例状态统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defectCount' => 'defect_count',
            'completedDefectCount' => 'completed_defect_count',
            'casePassRate' => 'case_pass_rate',
            'executedCaseCount' => 'executed_case_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defectCount  缺陷个数
    * completedDefectCount  已完成缺陷个数
    * casePassRate  用例通过率,按用例结果计算
    * executedCaseCount  已执行用例数, 按用例状态统计
    *
    * @var string[]
    */
    protected static $setters = [
            'defectCount' => 'setDefectCount',
            'completedDefectCount' => 'setCompletedDefectCount',
            'casePassRate' => 'setCasePassRate',
            'executedCaseCount' => 'setExecutedCaseCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defectCount  缺陷个数
    * completedDefectCount  已完成缺陷个数
    * casePassRate  用例通过率,按用例结果计算
    * executedCaseCount  已执行用例数, 按用例状态统计
    *
    * @var string[]
    */
    protected static $getters = [
            'defectCount' => 'getDefectCount',
            'completedDefectCount' => 'getCompletedDefectCount',
            'casePassRate' => 'getCasePassRate',
            'executedCaseCount' => 'getExecutedCaseCount'
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
        $this->container['defectCount'] = isset($data['defectCount']) ? $data['defectCount'] : null;
        $this->container['completedDefectCount'] = isset($data['completedDefectCount']) ? $data['completedDefectCount'] : null;
        $this->container['casePassRate'] = isset($data['casePassRate']) ? $data['casePassRate'] : null;
        $this->container['executedCaseCount'] = isset($data['executedCaseCount']) ? $data['executedCaseCount'] : null;
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
    * Gets defectCount
    *  缺陷个数
    *
    * @return int|null
    */
    public function getDefectCount()
    {
        return $this->container['defectCount'];
    }

    /**
    * Sets defectCount
    *
    * @param int|null $defectCount 缺陷个数
    *
    * @return $this
    */
    public function setDefectCount($defectCount)
    {
        $this->container['defectCount'] = $defectCount;
        return $this;
    }

    /**
    * Gets completedDefectCount
    *  已完成缺陷个数
    *
    * @return int|null
    */
    public function getCompletedDefectCount()
    {
        return $this->container['completedDefectCount'];
    }

    /**
    * Sets completedDefectCount
    *
    * @param int|null $completedDefectCount 已完成缺陷个数
    *
    * @return $this
    */
    public function setCompletedDefectCount($completedDefectCount)
    {
        $this->container['completedDefectCount'] = $completedDefectCount;
        return $this;
    }

    /**
    * Gets casePassRate
    *  用例通过率,按用例结果计算
    *
    * @return string|null
    */
    public function getCasePassRate()
    {
        return $this->container['casePassRate'];
    }

    /**
    * Sets casePassRate
    *
    * @param string|null $casePassRate 用例通过率,按用例结果计算
    *
    * @return $this
    */
    public function setCasePassRate($casePassRate)
    {
        $this->container['casePassRate'] = $casePassRate;
        return $this;
    }

    /**
    * Gets executedCaseCount
    *  已执行用例数, 按用例状态统计
    *
    * @return int|null
    */
    public function getExecutedCaseCount()
    {
        return $this->container['executedCaseCount'];
    }

    /**
    * Sets executedCaseCount
    *
    * @param int|null $executedCaseCount 已执行用例数, 按用例状态统计
    *
    * @return $this
    */
    public function setExecutedCaseCount($executedCaseCount)
    {
        $this->container['executedCaseCount'] = $executedCaseCount;
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

