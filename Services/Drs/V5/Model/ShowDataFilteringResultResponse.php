<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDataFilteringResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDataFilteringResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successCount  数据过滤规则校验成功的数量
    * failedCount  数据过滤规则校验失败的数量
    * dbObjectFilteringResult  库表过滤规则校验结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successCount' => 'int',
            'failedCount' => 'int',
            'dbObjectFilteringResult' => '\HuaweiCloud\SDK\Drs\V5\Model\DbObjectFilteringResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successCount  数据过滤规则校验成功的数量
    * failedCount  数据过滤规则校验失败的数量
    * dbObjectFilteringResult  库表过滤规则校验结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successCount' => 'int64',
        'failedCount' => 'int64',
        'dbObjectFilteringResult' => null
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
    * successCount  数据过滤规则校验成功的数量
    * failedCount  数据过滤规则校验失败的数量
    * dbObjectFilteringResult  库表过滤规则校验结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successCount' => 'success_count',
            'failedCount' => 'failed_count',
            'dbObjectFilteringResult' => 'db_object_filtering_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successCount  数据过滤规则校验成功的数量
    * failedCount  数据过滤规则校验失败的数量
    * dbObjectFilteringResult  库表过滤规则校验结果
    *
    * @var string[]
    */
    protected static $setters = [
            'successCount' => 'setSuccessCount',
            'failedCount' => 'setFailedCount',
            'dbObjectFilteringResult' => 'setDbObjectFilteringResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successCount  数据过滤规则校验成功的数量
    * failedCount  数据过滤规则校验失败的数量
    * dbObjectFilteringResult  库表过滤规则校验结果
    *
    * @var string[]
    */
    protected static $getters = [
            'successCount' => 'getSuccessCount',
            'failedCount' => 'getFailedCount',
            'dbObjectFilteringResult' => 'getDbObjectFilteringResult'
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
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['failedCount'] = isset($data['failedCount']) ? $data['failedCount'] : null;
        $this->container['dbObjectFilteringResult'] = isset($data['dbObjectFilteringResult']) ? $data['dbObjectFilteringResult'] : null;
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
    * Gets successCount
    *  数据过滤规则校验成功的数量
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
    * @param int|null $successCount 数据过滤规则校验成功的数量
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets failedCount
    *  数据过滤规则校验失败的数量
    *
    * @return int|null
    */
    public function getFailedCount()
    {
        return $this->container['failedCount'];
    }

    /**
    * Sets failedCount
    *
    * @param int|null $failedCount 数据过滤规则校验失败的数量
    *
    * @return $this
    */
    public function setFailedCount($failedCount)
    {
        $this->container['failedCount'] = $failedCount;
        return $this;
    }

    /**
    * Gets dbObjectFilteringResult
    *  库表过滤规则校验结果
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbObjectFilteringResult[]|null
    */
    public function getDbObjectFilteringResult()
    {
        return $this->container['dbObjectFilteringResult'];
    }

    /**
    * Sets dbObjectFilteringResult
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbObjectFilteringResult[]|null $dbObjectFilteringResult 库表过滤规则校验结果
    *
    * @return $this
    */
    public function setDbObjectFilteringResult($dbObjectFilteringResult)
    {
        $this->container['dbObjectFilteringResult'] = $dbObjectFilteringResult;
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

