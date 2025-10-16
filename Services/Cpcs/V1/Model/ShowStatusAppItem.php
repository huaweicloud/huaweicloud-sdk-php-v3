<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatusAppItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatusAppItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successRate  成功率
    * failRate  失败率
    * successCount  成功次数
    * totalCount  总次数
    * averageValue  平均值
    * totalValue  总数
    * appId  应用ID
    * appName  应用名称
    * status  应用状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successRate' => 'double',
            'failRate' => 'double',
            'successCount' => 'int',
            'totalCount' => 'int',
            'averageValue' => 'double',
            'totalValue' => 'double',
            'appId' => 'string',
            'appName' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successRate  成功率
    * failRate  失败率
    * successCount  成功次数
    * totalCount  总次数
    * averageValue  平均值
    * totalValue  总数
    * appId  应用ID
    * appName  应用名称
    * status  应用状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successRate' => 'double',
        'failRate' => 'double',
        'successCount' => 'int64',
        'totalCount' => 'int64',
        'averageValue' => 'double',
        'totalValue' => 'double',
        'appId' => null,
        'appName' => null,
        'status' => null
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
    * successRate  成功率
    * failRate  失败率
    * successCount  成功次数
    * totalCount  总次数
    * averageValue  平均值
    * totalValue  总数
    * appId  应用ID
    * appName  应用名称
    * status  应用状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successRate' => 'success_rate',
            'failRate' => 'fail_rate',
            'successCount' => 'success_count',
            'totalCount' => 'total_count',
            'averageValue' => 'average_value',
            'totalValue' => 'total_value',
            'appId' => 'app_id',
            'appName' => 'app_name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successRate  成功率
    * failRate  失败率
    * successCount  成功次数
    * totalCount  总次数
    * averageValue  平均值
    * totalValue  总数
    * appId  应用ID
    * appName  应用名称
    * status  应用状态
    *
    * @var string[]
    */
    protected static $setters = [
            'successRate' => 'setSuccessRate',
            'failRate' => 'setFailRate',
            'successCount' => 'setSuccessCount',
            'totalCount' => 'setTotalCount',
            'averageValue' => 'setAverageValue',
            'totalValue' => 'setTotalValue',
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successRate  成功率
    * failRate  失败率
    * successCount  成功次数
    * totalCount  总次数
    * averageValue  平均值
    * totalValue  总数
    * appId  应用ID
    * appName  应用名称
    * status  应用状态
    *
    * @var string[]
    */
    protected static $getters = [
            'successRate' => 'getSuccessRate',
            'failRate' => 'getFailRate',
            'successCount' => 'getSuccessCount',
            'totalCount' => 'getTotalCount',
            'averageValue' => 'getAverageValue',
            'totalValue' => 'getTotalValue',
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'status' => 'getStatus'
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
        $this->container['successRate'] = isset($data['successRate']) ? $data['successRate'] : null;
        $this->container['failRate'] = isset($data['failRate']) ? $data['failRate'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['averageValue'] = isset($data['averageValue']) ? $data['averageValue'] : null;
        $this->container['totalValue'] = isset($data['totalValue']) ? $data['totalValue'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets successRate
    *  成功率
    *
    * @return double|null
    */
    public function getSuccessRate()
    {
        return $this->container['successRate'];
    }

    /**
    * Sets successRate
    *
    * @param double|null $successRate 成功率
    *
    * @return $this
    */
    public function setSuccessRate($successRate)
    {
        $this->container['successRate'] = $successRate;
        return $this;
    }

    /**
    * Gets failRate
    *  失败率
    *
    * @return double|null
    */
    public function getFailRate()
    {
        return $this->container['failRate'];
    }

    /**
    * Sets failRate
    *
    * @param double|null $failRate 失败率
    *
    * @return $this
    */
    public function setFailRate($failRate)
    {
        $this->container['failRate'] = $failRate;
        return $this;
    }

    /**
    * Gets successCount
    *  成功次数
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount 成功次数
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets totalCount
    *  总次数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总次数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets averageValue
    *  平均值
    *
    * @return double|null
    */
    public function getAverageValue()
    {
        return $this->container['averageValue'];
    }

    /**
    * Sets averageValue
    *
    * @param double|null $averageValue 平均值
    *
    * @return $this
    */
    public function setAverageValue($averageValue)
    {
        $this->container['averageValue'] = $averageValue;
        return $this;
    }

    /**
    * Gets totalValue
    *  总数
    *
    * @return double|null
    */
    public function getTotalValue()
    {
        return $this->container['totalValue'];
    }

    /**
    * Sets totalValue
    *
    * @param double|null $totalValue 总数
    *
    * @return $this
    */
    public function setTotalValue($totalValue)
    {
        $this->container['totalValue'] = $totalValue;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  应用名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 应用名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets status
    *  应用状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 应用状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

