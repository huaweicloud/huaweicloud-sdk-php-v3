<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiagnosisDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiagnosisDimension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  诊断维度名称
    * abnormalNum  诊断结果为异常的诊断项总数
    * failedNum  诊断失败的诊断项总数
    * diagnosisItemList  诊断项列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'abnormalNum' => 'int',
            'failedNum' => 'int',
            'diagnosisItemList' => '\HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  诊断维度名称
    * abnormalNum  诊断结果为异常的诊断项总数
    * failedNum  诊断失败的诊断项总数
    * diagnosisItemList  诊断项列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'abnormalNum' => 'int32',
        'failedNum' => 'int32',
        'diagnosisItemList' => null
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
    * name  诊断维度名称
    * abnormalNum  诊断结果为异常的诊断项总数
    * failedNum  诊断失败的诊断项总数
    * diagnosisItemList  诊断项列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'abnormalNum' => 'abnormal_num',
            'failedNum' => 'failed_num',
            'diagnosisItemList' => 'diagnosis_item_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  诊断维度名称
    * abnormalNum  诊断结果为异常的诊断项总数
    * failedNum  诊断失败的诊断项总数
    * diagnosisItemList  诊断项列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'abnormalNum' => 'setAbnormalNum',
            'failedNum' => 'setFailedNum',
            'diagnosisItemList' => 'setDiagnosisItemList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  诊断维度名称
    * abnormalNum  诊断结果为异常的诊断项总数
    * failedNum  诊断失败的诊断项总数
    * diagnosisItemList  诊断项列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'abnormalNum' => 'getAbnormalNum',
            'failedNum' => 'getFailedNum',
            'diagnosisItemList' => 'getDiagnosisItemList'
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
    const NAME_NETWORK = 'network';
    const NAME_STORAGE = 'storage';
    const NAME_LOAD = 'load';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNameAllowableValues()
    {
        return [
            self::NAME_NETWORK,
            self::NAME_STORAGE,
            self::NAME_LOAD,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['abnormalNum'] = isset($data['abnormalNum']) ? $data['abnormalNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['diagnosisItemList'] = isset($data['diagnosisItemList']) ? $data['diagnosisItemList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            $allowedValues = $this->getNameAllowableValues();
                if (!is_null($this->container['name']) && !in_array($this->container['name'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'name', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['abnormalNum'] === null) {
            $invalidProperties[] = "'abnormalNum' can't be null";
        }
        if ($this->container['failedNum'] === null) {
            $invalidProperties[] = "'failedNum' can't be null";
        }
        if ($this->container['diagnosisItemList'] === null) {
            $invalidProperties[] = "'diagnosisItemList' can't be null";
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
    * Gets name
    *  诊断维度名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 诊断维度名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets abnormalNum
    *  诊断结果为异常的诊断项总数
    *
    * @return int
    */
    public function getAbnormalNum()
    {
        return $this->container['abnormalNum'];
    }

    /**
    * Sets abnormalNum
    *
    * @param int $abnormalNum 诊断结果为异常的诊断项总数
    *
    * @return $this
    */
    public function setAbnormalNum($abnormalNum)
    {
        $this->container['abnormalNum'] = $abnormalNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  诊断失败的诊断项总数
    *
    * @return int
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int $failedNum 诊断失败的诊断项总数
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets diagnosisItemList
    *  诊断项列表
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisItem[]
    */
    public function getDiagnosisItemList()
    {
        return $this->container['diagnosisItemList'];
    }

    /**
    * Sets diagnosisItemList
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\DiagnosisItem[] $diagnosisItemList 诊断项列表
    *
    * @return $this
    */
    public function setDiagnosisItemList($diagnosisItemList)
    {
        $this->container['diagnosisItemList'] = $diagnosisItemList;
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

