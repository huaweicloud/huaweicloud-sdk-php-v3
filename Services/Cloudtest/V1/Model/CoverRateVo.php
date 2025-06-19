<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CoverRateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CoverRateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testing  统计测试中的需求
    * finished  统计已完成的需求
    * notTested  统计未测试的需求
    * totalNumber  计算需求总数
    * coverRate  需求覆盖率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testing' => 'int',
            'finished' => 'int',
            'notTested' => 'int',
            'totalNumber' => 'int',
            'coverRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testing  统计测试中的需求
    * finished  统计已完成的需求
    * notTested  统计未测试的需求
    * totalNumber  计算需求总数
    * coverRate  需求覆盖率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testing' => 'int32',
        'finished' => 'int32',
        'notTested' => 'int32',
        'totalNumber' => 'int32',
        'coverRate' => null
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
    * testing  统计测试中的需求
    * finished  统计已完成的需求
    * notTested  统计未测试的需求
    * totalNumber  计算需求总数
    * coverRate  需求覆盖率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testing' => 'testing',
            'finished' => 'finished',
            'notTested' => 'not_tested',
            'totalNumber' => 'total_number',
            'coverRate' => 'cover_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testing  统计测试中的需求
    * finished  统计已完成的需求
    * notTested  统计未测试的需求
    * totalNumber  计算需求总数
    * coverRate  需求覆盖率
    *
    * @var string[]
    */
    protected static $setters = [
            'testing' => 'setTesting',
            'finished' => 'setFinished',
            'notTested' => 'setNotTested',
            'totalNumber' => 'setTotalNumber',
            'coverRate' => 'setCoverRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testing  统计测试中的需求
    * finished  统计已完成的需求
    * notTested  统计未测试的需求
    * totalNumber  计算需求总数
    * coverRate  需求覆盖率
    *
    * @var string[]
    */
    protected static $getters = [
            'testing' => 'getTesting',
            'finished' => 'getFinished',
            'notTested' => 'getNotTested',
            'totalNumber' => 'getTotalNumber',
            'coverRate' => 'getCoverRate'
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
        $this->container['testing'] = isset($data['testing']) ? $data['testing'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['notTested'] = isset($data['notTested']) ? $data['notTested'] : null;
        $this->container['totalNumber'] = isset($data['totalNumber']) ? $data['totalNumber'] : null;
        $this->container['coverRate'] = isset($data['coverRate']) ? $data['coverRate'] : null;
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
    * Gets testing
    *  统计测试中的需求
    *
    * @return int|null
    */
    public function getTesting()
    {
        return $this->container['testing'];
    }

    /**
    * Sets testing
    *
    * @param int|null $testing 统计测试中的需求
    *
    * @return $this
    */
    public function setTesting($testing)
    {
        $this->container['testing'] = $testing;
        return $this;
    }

    /**
    * Gets finished
    *  统计已完成的需求
    *
    * @return int|null
    */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
    * Sets finished
    *
    * @param int|null $finished 统计已完成的需求
    *
    * @return $this
    */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;
        return $this;
    }

    /**
    * Gets notTested
    *  统计未测试的需求
    *
    * @return int|null
    */
    public function getNotTested()
    {
        return $this->container['notTested'];
    }

    /**
    * Sets notTested
    *
    * @param int|null $notTested 统计未测试的需求
    *
    * @return $this
    */
    public function setNotTested($notTested)
    {
        $this->container['notTested'] = $notTested;
        return $this;
    }

    /**
    * Gets totalNumber
    *  计算需求总数
    *
    * @return int|null
    */
    public function getTotalNumber()
    {
        return $this->container['totalNumber'];
    }

    /**
    * Sets totalNumber
    *
    * @param int|null $totalNumber 计算需求总数
    *
    * @return $this
    */
    public function setTotalNumber($totalNumber)
    {
        $this->container['totalNumber'] = $totalNumber;
        return $this;
    }

    /**
    * Gets coverRate
    *  需求覆盖率
    *
    * @return string|null
    */
    public function getCoverRate()
    {
        return $this->container['coverRate'];
    }

    /**
    * Sets coverRate
    *
    * @param string|null $coverRate 需求覆盖率
    *
    * @return $this
    */
    public function setCoverRate($coverRate)
    {
        $this->container['coverRate'] = $coverRate;
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

