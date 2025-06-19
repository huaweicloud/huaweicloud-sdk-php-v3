<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionTestCasesChangeStatisticsVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionTestCasesChangeStatisticsVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addTestcasesNumber  新增用例数
    * reuseTestcasesNumber  复用用例数
    * modifyingTestcasesNumber  修改用例数
    * updateDateTimestamp  修改时间时间戳
    * updateDate  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addTestcasesNumber' => 'int',
            'reuseTestcasesNumber' => 'int',
            'modifyingTestcasesNumber' => 'int',
            'updateDateTimestamp' => 'int',
            'updateDate' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addTestcasesNumber  新增用例数
    * reuseTestcasesNumber  复用用例数
    * modifyingTestcasesNumber  修改用例数
    * updateDateTimestamp  修改时间时间戳
    * updateDate  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addTestcasesNumber' => 'int32',
        'reuseTestcasesNumber' => 'int32',
        'modifyingTestcasesNumber' => 'int32',
        'updateDateTimestamp' => 'int64',
        'updateDate' => 'date-time'
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
    * addTestcasesNumber  新增用例数
    * reuseTestcasesNumber  复用用例数
    * modifyingTestcasesNumber  修改用例数
    * updateDateTimestamp  修改时间时间戳
    * updateDate  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addTestcasesNumber' => 'add_testcases_number',
            'reuseTestcasesNumber' => 'reuse_testcases_number',
            'modifyingTestcasesNumber' => 'modifying_testcases_number',
            'updateDateTimestamp' => 'update_date_timestamp',
            'updateDate' => 'update_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addTestcasesNumber  新增用例数
    * reuseTestcasesNumber  复用用例数
    * modifyingTestcasesNumber  修改用例数
    * updateDateTimestamp  修改时间时间戳
    * updateDate  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'addTestcasesNumber' => 'setAddTestcasesNumber',
            'reuseTestcasesNumber' => 'setReuseTestcasesNumber',
            'modifyingTestcasesNumber' => 'setModifyingTestcasesNumber',
            'updateDateTimestamp' => 'setUpdateDateTimestamp',
            'updateDate' => 'setUpdateDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addTestcasesNumber  新增用例数
    * reuseTestcasesNumber  复用用例数
    * modifyingTestcasesNumber  修改用例数
    * updateDateTimestamp  修改时间时间戳
    * updateDate  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'addTestcasesNumber' => 'getAddTestcasesNumber',
            'reuseTestcasesNumber' => 'getReuseTestcasesNumber',
            'modifyingTestcasesNumber' => 'getModifyingTestcasesNumber',
            'updateDateTimestamp' => 'getUpdateDateTimestamp',
            'updateDate' => 'getUpdateDate'
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
        $this->container['addTestcasesNumber'] = isset($data['addTestcasesNumber']) ? $data['addTestcasesNumber'] : null;
        $this->container['reuseTestcasesNumber'] = isset($data['reuseTestcasesNumber']) ? $data['reuseTestcasesNumber'] : null;
        $this->container['modifyingTestcasesNumber'] = isset($data['modifyingTestcasesNumber']) ? $data['modifyingTestcasesNumber'] : null;
        $this->container['updateDateTimestamp'] = isset($data['updateDateTimestamp']) ? $data['updateDateTimestamp'] : null;
        $this->container['updateDate'] = isset($data['updateDate']) ? $data['updateDate'] : null;
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
    * Gets addTestcasesNumber
    *  新增用例数
    *
    * @return int|null
    */
    public function getAddTestcasesNumber()
    {
        return $this->container['addTestcasesNumber'];
    }

    /**
    * Sets addTestcasesNumber
    *
    * @param int|null $addTestcasesNumber 新增用例数
    *
    * @return $this
    */
    public function setAddTestcasesNumber($addTestcasesNumber)
    {
        $this->container['addTestcasesNumber'] = $addTestcasesNumber;
        return $this;
    }

    /**
    * Gets reuseTestcasesNumber
    *  复用用例数
    *
    * @return int|null
    */
    public function getReuseTestcasesNumber()
    {
        return $this->container['reuseTestcasesNumber'];
    }

    /**
    * Sets reuseTestcasesNumber
    *
    * @param int|null $reuseTestcasesNumber 复用用例数
    *
    * @return $this
    */
    public function setReuseTestcasesNumber($reuseTestcasesNumber)
    {
        $this->container['reuseTestcasesNumber'] = $reuseTestcasesNumber;
        return $this;
    }

    /**
    * Gets modifyingTestcasesNumber
    *  修改用例数
    *
    * @return int|null
    */
    public function getModifyingTestcasesNumber()
    {
        return $this->container['modifyingTestcasesNumber'];
    }

    /**
    * Sets modifyingTestcasesNumber
    *
    * @param int|null $modifyingTestcasesNumber 修改用例数
    *
    * @return $this
    */
    public function setModifyingTestcasesNumber($modifyingTestcasesNumber)
    {
        $this->container['modifyingTestcasesNumber'] = $modifyingTestcasesNumber;
        return $this;
    }

    /**
    * Gets updateDateTimestamp
    *  修改时间时间戳
    *
    * @return int|null
    */
    public function getUpdateDateTimestamp()
    {
        return $this->container['updateDateTimestamp'];
    }

    /**
    * Sets updateDateTimestamp
    *
    * @param int|null $updateDateTimestamp 修改时间时间戳
    *
    * @return $this
    */
    public function setUpdateDateTimestamp($updateDateTimestamp)
    {
        $this->container['updateDateTimestamp'] = $updateDateTimestamp;
        return $this;
    }

    /**
    * Gets updateDate
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getUpdateDate()
    {
        return $this->container['updateDate'];
    }

    /**
    * Sets updateDate
    *
    * @param \DateTime|null $updateDate 修改时间
    *
    * @return $this
    */
    public function setUpdateDate($updateDate)
    {
        $this->container['updateDate'] = $updateDate;
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

