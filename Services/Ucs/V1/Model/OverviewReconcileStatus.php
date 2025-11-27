<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OverviewReconcileStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OverviewReconcileStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configSetTotalNum  配置集合总数
    * healthStatusNum  健康状态的配置集合数量
    * failedStatusNum  失败状态的配置集合数量
    * unknownStatusNum  未知状态的配置集合数量
    * progressingStatusNum  正在处理中的配置集合数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configSetTotalNum' => 'int',
            'healthStatusNum' => 'int',
            'failedStatusNum' => 'int',
            'unknownStatusNum' => 'int',
            'progressingStatusNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configSetTotalNum  配置集合总数
    * healthStatusNum  健康状态的配置集合数量
    * failedStatusNum  失败状态的配置集合数量
    * unknownStatusNum  未知状态的配置集合数量
    * progressingStatusNum  正在处理中的配置集合数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configSetTotalNum' => 'int32',
        'healthStatusNum' => 'int32',
        'failedStatusNum' => 'int32',
        'unknownStatusNum' => 'int32',
        'progressingStatusNum' => 'int32'
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
    * configSetTotalNum  配置集合总数
    * healthStatusNum  健康状态的配置集合数量
    * failedStatusNum  失败状态的配置集合数量
    * unknownStatusNum  未知状态的配置集合数量
    * progressingStatusNum  正在处理中的配置集合数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configSetTotalNum' => 'configSetTotalNum',
            'healthStatusNum' => 'healthStatusNum',
            'failedStatusNum' => 'failedStatusNum',
            'unknownStatusNum' => 'unknownStatusNum',
            'progressingStatusNum' => 'progressingStatusNum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configSetTotalNum  配置集合总数
    * healthStatusNum  健康状态的配置集合数量
    * failedStatusNum  失败状态的配置集合数量
    * unknownStatusNum  未知状态的配置集合数量
    * progressingStatusNum  正在处理中的配置集合数量
    *
    * @var string[]
    */
    protected static $setters = [
            'configSetTotalNum' => 'setConfigSetTotalNum',
            'healthStatusNum' => 'setHealthStatusNum',
            'failedStatusNum' => 'setFailedStatusNum',
            'unknownStatusNum' => 'setUnknownStatusNum',
            'progressingStatusNum' => 'setProgressingStatusNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configSetTotalNum  配置集合总数
    * healthStatusNum  健康状态的配置集合数量
    * failedStatusNum  失败状态的配置集合数量
    * unknownStatusNum  未知状态的配置集合数量
    * progressingStatusNum  正在处理中的配置集合数量
    *
    * @var string[]
    */
    protected static $getters = [
            'configSetTotalNum' => 'getConfigSetTotalNum',
            'healthStatusNum' => 'getHealthStatusNum',
            'failedStatusNum' => 'getFailedStatusNum',
            'unknownStatusNum' => 'getUnknownStatusNum',
            'progressingStatusNum' => 'getProgressingStatusNum'
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
        $this->container['configSetTotalNum'] = isset($data['configSetTotalNum']) ? $data['configSetTotalNum'] : null;
        $this->container['healthStatusNum'] = isset($data['healthStatusNum']) ? $data['healthStatusNum'] : null;
        $this->container['failedStatusNum'] = isset($data['failedStatusNum']) ? $data['failedStatusNum'] : null;
        $this->container['unknownStatusNum'] = isset($data['unknownStatusNum']) ? $data['unknownStatusNum'] : null;
        $this->container['progressingStatusNum'] = isset($data['progressingStatusNum']) ? $data['progressingStatusNum'] : null;
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
    * Gets configSetTotalNum
    *  配置集合总数
    *
    * @return int|null
    */
    public function getConfigSetTotalNum()
    {
        return $this->container['configSetTotalNum'];
    }

    /**
    * Sets configSetTotalNum
    *
    * @param int|null $configSetTotalNum 配置集合总数
    *
    * @return $this
    */
    public function setConfigSetTotalNum($configSetTotalNum)
    {
        $this->container['configSetTotalNum'] = $configSetTotalNum;
        return $this;
    }

    /**
    * Gets healthStatusNum
    *  健康状态的配置集合数量
    *
    * @return int|null
    */
    public function getHealthStatusNum()
    {
        return $this->container['healthStatusNum'];
    }

    /**
    * Sets healthStatusNum
    *
    * @param int|null $healthStatusNum 健康状态的配置集合数量
    *
    * @return $this
    */
    public function setHealthStatusNum($healthStatusNum)
    {
        $this->container['healthStatusNum'] = $healthStatusNum;
        return $this;
    }

    /**
    * Gets failedStatusNum
    *  失败状态的配置集合数量
    *
    * @return int|null
    */
    public function getFailedStatusNum()
    {
        return $this->container['failedStatusNum'];
    }

    /**
    * Sets failedStatusNum
    *
    * @param int|null $failedStatusNum 失败状态的配置集合数量
    *
    * @return $this
    */
    public function setFailedStatusNum($failedStatusNum)
    {
        $this->container['failedStatusNum'] = $failedStatusNum;
        return $this;
    }

    /**
    * Gets unknownStatusNum
    *  未知状态的配置集合数量
    *
    * @return int|null
    */
    public function getUnknownStatusNum()
    {
        return $this->container['unknownStatusNum'];
    }

    /**
    * Sets unknownStatusNum
    *
    * @param int|null $unknownStatusNum 未知状态的配置集合数量
    *
    * @return $this
    */
    public function setUnknownStatusNum($unknownStatusNum)
    {
        $this->container['unknownStatusNum'] = $unknownStatusNum;
        return $this;
    }

    /**
    * Gets progressingStatusNum
    *  正在处理中的配置集合数量
    *
    * @return int|null
    */
    public function getProgressingStatusNum()
    {
        return $this->container['progressingStatusNum'];
    }

    /**
    * Sets progressingStatusNum
    *
    * @param int|null $progressingStatusNum 正在处理中的配置集合数量
    *
    * @return $this
    */
    public function setProgressingStatusNum($progressingStatusNum)
    {
        $this->container['progressingStatusNum'] = $progressingStatusNum;
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

