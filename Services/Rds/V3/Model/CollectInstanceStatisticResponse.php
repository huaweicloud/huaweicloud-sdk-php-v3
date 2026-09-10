<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectInstanceStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectInstanceStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  实例总数
    * abnormalNum  异常实例数
    * diskFullNum  磁盘不足实例数
    * frozenNum  冻结实例数
    * normalNum  运行中实例数
    * waitRebootNum  等待重启实例数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'abnormalNum' => 'int',
            'diskFullNum' => 'int',
            'frozenNum' => 'int',
            'normalNum' => 'int',
            'waitRebootNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  实例总数
    * abnormalNum  异常实例数
    * diskFullNum  磁盘不足实例数
    * frozenNum  冻结实例数
    * normalNum  运行中实例数
    * waitRebootNum  等待重启实例数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'abnormalNum' => 'int32',
        'diskFullNum' => 'int32',
        'frozenNum' => 'int32',
        'normalNum' => 'int32',
        'waitRebootNum' => 'int32'
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
    * totalNum  实例总数
    * abnormalNum  异常实例数
    * diskFullNum  磁盘不足实例数
    * frozenNum  冻结实例数
    * normalNum  运行中实例数
    * waitRebootNum  等待重启实例数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'abnormalNum' => 'abnormal_num',
            'diskFullNum' => 'disk_full_num',
            'frozenNum' => 'frozen_num',
            'normalNum' => 'normal_num',
            'waitRebootNum' => 'wait_reboot_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  实例总数
    * abnormalNum  异常实例数
    * diskFullNum  磁盘不足实例数
    * frozenNum  冻结实例数
    * normalNum  运行中实例数
    * waitRebootNum  等待重启实例数
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'abnormalNum' => 'setAbnormalNum',
            'diskFullNum' => 'setDiskFullNum',
            'frozenNum' => 'setFrozenNum',
            'normalNum' => 'setNormalNum',
            'waitRebootNum' => 'setWaitRebootNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  实例总数
    * abnormalNum  异常实例数
    * diskFullNum  磁盘不足实例数
    * frozenNum  冻结实例数
    * normalNum  运行中实例数
    * waitRebootNum  等待重启实例数
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'abnormalNum' => 'getAbnormalNum',
            'diskFullNum' => 'getDiskFullNum',
            'frozenNum' => 'getFrozenNum',
            'normalNum' => 'getNormalNum',
            'waitRebootNum' => 'getWaitRebootNum'
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
        $this->container['abnormalNum'] = isset($data['abnormalNum']) ? $data['abnormalNum'] : null;
        $this->container['diskFullNum'] = isset($data['diskFullNum']) ? $data['diskFullNum'] : null;
        $this->container['frozenNum'] = isset($data['frozenNum']) ? $data['frozenNum'] : null;
        $this->container['normalNum'] = isset($data['normalNum']) ? $data['normalNum'] : null;
        $this->container['waitRebootNum'] = isset($data['waitRebootNum']) ? $data['waitRebootNum'] : null;
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
    * Gets totalNum
    *  实例总数
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
    * @param int|null $totalNum 实例总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets abnormalNum
    *  异常实例数
    *
    * @return int|null
    */
    public function getAbnormalNum()
    {
        return $this->container['abnormalNum'];
    }

    /**
    * Sets abnormalNum
    *
    * @param int|null $abnormalNum 异常实例数
    *
    * @return $this
    */
    public function setAbnormalNum($abnormalNum)
    {
        $this->container['abnormalNum'] = $abnormalNum;
        return $this;
    }

    /**
    * Gets diskFullNum
    *  磁盘不足实例数
    *
    * @return int|null
    */
    public function getDiskFullNum()
    {
        return $this->container['diskFullNum'];
    }

    /**
    * Sets diskFullNum
    *
    * @param int|null $diskFullNum 磁盘不足实例数
    *
    * @return $this
    */
    public function setDiskFullNum($diskFullNum)
    {
        $this->container['diskFullNum'] = $diskFullNum;
        return $this;
    }

    /**
    * Gets frozenNum
    *  冻结实例数
    *
    * @return int|null
    */
    public function getFrozenNum()
    {
        return $this->container['frozenNum'];
    }

    /**
    * Sets frozenNum
    *
    * @param int|null $frozenNum 冻结实例数
    *
    * @return $this
    */
    public function setFrozenNum($frozenNum)
    {
        $this->container['frozenNum'] = $frozenNum;
        return $this;
    }

    /**
    * Gets normalNum
    *  运行中实例数
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
    * @param int|null $normalNum 运行中实例数
    *
    * @return $this
    */
    public function setNormalNum($normalNum)
    {
        $this->container['normalNum'] = $normalNum;
        return $this;
    }

    /**
    * Gets waitRebootNum
    *  等待重启实例数
    *
    * @return int|null
    */
    public function getWaitRebootNum()
    {
        return $this->container['waitRebootNum'];
    }

    /**
    * Sets waitRebootNum
    *
    * @param int|null $waitRebootNum 等待重启实例数
    *
    * @return $this
    */
    public function setWaitRebootNum($waitRebootNum)
    {
        $this->container['waitRebootNum'] = $waitRebootNum;
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

