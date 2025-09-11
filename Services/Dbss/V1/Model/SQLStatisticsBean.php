<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SQLStatisticsBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SQLStatisticsBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleteNum  删除数量
    * insertNum  插入数量
    * otherNum  其他数量
    * period  周期
    * selectNum  查询数量
    * updateNum  更新数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleteNum' => 'int',
            'insertNum' => 'int',
            'otherNum' => 'int',
            'period' => 'string',
            'selectNum' => 'int',
            'updateNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleteNum  删除数量
    * insertNum  插入数量
    * otherNum  其他数量
    * period  周期
    * selectNum  查询数量
    * updateNum  更新数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleteNum' => 'int64',
        'insertNum' => 'int64',
        'otherNum' => 'int64',
        'period' => null,
        'selectNum' => 'int64',
        'updateNum' => 'int64'
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
    * deleteNum  删除数量
    * insertNum  插入数量
    * otherNum  其他数量
    * period  周期
    * selectNum  查询数量
    * updateNum  更新数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleteNum' => 'delete_num',
            'insertNum' => 'insert_num',
            'otherNum' => 'other_num',
            'period' => 'period',
            'selectNum' => 'select_num',
            'updateNum' => 'update_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleteNum  删除数量
    * insertNum  插入数量
    * otherNum  其他数量
    * period  周期
    * selectNum  查询数量
    * updateNum  更新数量
    *
    * @var string[]
    */
    protected static $setters = [
            'deleteNum' => 'setDeleteNum',
            'insertNum' => 'setInsertNum',
            'otherNum' => 'setOtherNum',
            'period' => 'setPeriod',
            'selectNum' => 'setSelectNum',
            'updateNum' => 'setUpdateNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleteNum  删除数量
    * insertNum  插入数量
    * otherNum  其他数量
    * period  周期
    * selectNum  查询数量
    * updateNum  更新数量
    *
    * @var string[]
    */
    protected static $getters = [
            'deleteNum' => 'getDeleteNum',
            'insertNum' => 'getInsertNum',
            'otherNum' => 'getOtherNum',
            'period' => 'getPeriod',
            'selectNum' => 'getSelectNum',
            'updateNum' => 'getUpdateNum'
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
        $this->container['deleteNum'] = isset($data['deleteNum']) ? $data['deleteNum'] : null;
        $this->container['insertNum'] = isset($data['insertNum']) ? $data['insertNum'] : null;
        $this->container['otherNum'] = isset($data['otherNum']) ? $data['otherNum'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['selectNum'] = isset($data['selectNum']) ? $data['selectNum'] : null;
        $this->container['updateNum'] = isset($data['updateNum']) ? $data['updateNum'] : null;
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
    * Gets deleteNum
    *  删除数量
    *
    * @return int|null
    */
    public function getDeleteNum()
    {
        return $this->container['deleteNum'];
    }

    /**
    * Sets deleteNum
    *
    * @param int|null $deleteNum 删除数量
    *
    * @return $this
    */
    public function setDeleteNum($deleteNum)
    {
        $this->container['deleteNum'] = $deleteNum;
        return $this;
    }

    /**
    * Gets insertNum
    *  插入数量
    *
    * @return int|null
    */
    public function getInsertNum()
    {
        return $this->container['insertNum'];
    }

    /**
    * Sets insertNum
    *
    * @param int|null $insertNum 插入数量
    *
    * @return $this
    */
    public function setInsertNum($insertNum)
    {
        $this->container['insertNum'] = $insertNum;
        return $this;
    }

    /**
    * Gets otherNum
    *  其他数量
    *
    * @return int|null
    */
    public function getOtherNum()
    {
        return $this->container['otherNum'];
    }

    /**
    * Sets otherNum
    *
    * @param int|null $otherNum 其他数量
    *
    * @return $this
    */
    public function setOtherNum($otherNum)
    {
        $this->container['otherNum'] = $otherNum;
        return $this;
    }

    /**
    * Gets period
    *  周期
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets selectNum
    *  查询数量
    *
    * @return int|null
    */
    public function getSelectNum()
    {
        return $this->container['selectNum'];
    }

    /**
    * Sets selectNum
    *
    * @param int|null $selectNum 查询数量
    *
    * @return $this
    */
    public function setSelectNum($selectNum)
    {
        $this->container['selectNum'] = $selectNum;
        return $this;
    }

    /**
    * Gets updateNum
    *  更新数量
    *
    * @return int|null
    */
    public function getUpdateNum()
    {
        return $this->container['updateNum'];
    }

    /**
    * Sets updateNum
    *
    * @param int|null $updateNum 更新数量
    *
    * @return $this
    */
    public function setUpdateNum($updateNum)
    {
        $this->container['updateNum'] = $updateNum;
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

