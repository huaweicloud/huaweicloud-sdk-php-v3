<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BugStatisticResponseV4 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BugStatisticResponseV4';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * criticalNum  重要程度为关键的缺陷数
    * defectIndex  DI
    * module  模块
    * normalNum  重要程度为一般的缺陷数
    * seriousNum  重要程度为严重的缺陷数
    * tipNum  重要程度为提示的缺陷数
    * total  总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'criticalNum' => 'int',
            'defectIndex' => 'double',
            'module' => 'string',
            'normalNum' => 'int',
            'seriousNum' => 'int',
            'tipNum' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * criticalNum  重要程度为关键的缺陷数
    * defectIndex  DI
    * module  模块
    * normalNum  重要程度为一般的缺陷数
    * seriousNum  重要程度为严重的缺陷数
    * tipNum  重要程度为提示的缺陷数
    * total  总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'criticalNum' => 'int32',
        'defectIndex' => 'double',
        'module' => null,
        'normalNum' => 'int32',
        'seriousNum' => 'int32',
        'tipNum' => 'int32',
        'total' => 'int32'
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
    * criticalNum  重要程度为关键的缺陷数
    * defectIndex  DI
    * module  模块
    * normalNum  重要程度为一般的缺陷数
    * seriousNum  重要程度为严重的缺陷数
    * tipNum  重要程度为提示的缺陷数
    * total  总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'criticalNum' => 'critical_num',
            'defectIndex' => 'defect_index',
            'module' => 'module',
            'normalNum' => 'normal_num',
            'seriousNum' => 'serious_num',
            'tipNum' => 'tip_num',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * criticalNum  重要程度为关键的缺陷数
    * defectIndex  DI
    * module  模块
    * normalNum  重要程度为一般的缺陷数
    * seriousNum  重要程度为严重的缺陷数
    * tipNum  重要程度为提示的缺陷数
    * total  总数
    *
    * @var string[]
    */
    protected static $setters = [
            'criticalNum' => 'setCriticalNum',
            'defectIndex' => 'setDefectIndex',
            'module' => 'setModule',
            'normalNum' => 'setNormalNum',
            'seriousNum' => 'setSeriousNum',
            'tipNum' => 'setTipNum',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * criticalNum  重要程度为关键的缺陷数
    * defectIndex  DI
    * module  模块
    * normalNum  重要程度为一般的缺陷数
    * seriousNum  重要程度为严重的缺陷数
    * tipNum  重要程度为提示的缺陷数
    * total  总数
    *
    * @var string[]
    */
    protected static $getters = [
            'criticalNum' => 'getCriticalNum',
            'defectIndex' => 'getDefectIndex',
            'module' => 'getModule',
            'normalNum' => 'getNormalNum',
            'seriousNum' => 'getSeriousNum',
            'tipNum' => 'getTipNum',
            'total' => 'getTotal'
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
        $this->container['criticalNum'] = isset($data['criticalNum']) ? $data['criticalNum'] : null;
        $this->container['defectIndex'] = isset($data['defectIndex']) ? $data['defectIndex'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['normalNum'] = isset($data['normalNum']) ? $data['normalNum'] : null;
        $this->container['seriousNum'] = isset($data['seriousNum']) ? $data['seriousNum'] : null;
        $this->container['tipNum'] = isset($data['tipNum']) ? $data['tipNum'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets criticalNum
    *  重要程度为关键的缺陷数
    *
    * @return int|null
    */
    public function getCriticalNum()
    {
        return $this->container['criticalNum'];
    }

    /**
    * Sets criticalNum
    *
    * @param int|null $criticalNum 重要程度为关键的缺陷数
    *
    * @return $this
    */
    public function setCriticalNum($criticalNum)
    {
        $this->container['criticalNum'] = $criticalNum;
        return $this;
    }

    /**
    * Gets defectIndex
    *  DI
    *
    * @return double|null
    */
    public function getDefectIndex()
    {
        return $this->container['defectIndex'];
    }

    /**
    * Sets defectIndex
    *
    * @param double|null $defectIndex DI
    *
    * @return $this
    */
    public function setDefectIndex($defectIndex)
    {
        $this->container['defectIndex'] = $defectIndex;
        return $this;
    }

    /**
    * Gets module
    *  模块
    *
    * @return string|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param string|null $module 模块
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets normalNum
    *  重要程度为一般的缺陷数
    *
    * @return int|null
    */
    public function getNormalNum()
    {
        return $this->container['normalNum'];
    }

    /**
    * Sets normalNum
    *
    * @param int|null $normalNum 重要程度为一般的缺陷数
    *
    * @return $this
    */
    public function setNormalNum($normalNum)
    {
        $this->container['normalNum'] = $normalNum;
        return $this;
    }

    /**
    * Gets seriousNum
    *  重要程度为严重的缺陷数
    *
    * @return int|null
    */
    public function getSeriousNum()
    {
        return $this->container['seriousNum'];
    }

    /**
    * Sets seriousNum
    *
    * @param int|null $seriousNum 重要程度为严重的缺陷数
    *
    * @return $this
    */
    public function setSeriousNum($seriousNum)
    {
        $this->container['seriousNum'] = $seriousNum;
        return $this;
    }

    /**
    * Gets tipNum
    *  重要程度为提示的缺陷数
    *
    * @return int|null
    */
    public function getTipNum()
    {
        return $this->container['tipNum'];
    }

    /**
    * Sets tipNum
    *
    * @param int|null $tipNum 重要程度为提示的缺陷数
    *
    * @return $this
    */
    public function setTipNum($tipNum)
    {
        $this->container['tipNum'] = $tipNum;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

