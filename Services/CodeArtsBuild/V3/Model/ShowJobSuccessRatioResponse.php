<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobSuccessRatioResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobSuccessRatioResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * successCount  任务成功构建次数
    * totalCount  任务构建总次数
    * successRatio  任务成功率,精确到小数点后两位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'successCount' => 'int',
            'totalCount' => 'int',
            'successRatio' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * successCount  任务成功构建次数
    * totalCount  任务构建总次数
    * successRatio  任务成功率,精确到小数点后两位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'successCount' => 'int32',
        'totalCount' => 'int32',
        'successRatio' => 'double'
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
    * successCount  任务成功构建次数
    * totalCount  任务构建总次数
    * successRatio  任务成功率,精确到小数点后两位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'successCount' => 'success_count',
            'totalCount' => 'total_count',
            'successRatio' => 'success_ratio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * successCount  任务成功构建次数
    * totalCount  任务构建总次数
    * successRatio  任务成功率,精确到小数点后两位
    *
    * @var string[]
    */
    protected static $setters = [
            'successCount' => 'setSuccessCount',
            'totalCount' => 'setTotalCount',
            'successRatio' => 'setSuccessRatio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * successCount  任务成功构建次数
    * totalCount  任务构建总次数
    * successRatio  任务成功率,精确到小数点后两位
    *
    * @var string[]
    */
    protected static $getters = [
            'successCount' => 'getSuccessCount',
            'totalCount' => 'getTotalCount',
            'successRatio' => 'getSuccessRatio'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['successRatio'] = isset($data['successRatio']) ? $data['successRatio'] : null;
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
    *  任务成功构建次数
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
    * @param int|null $successCount 任务成功构建次数
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
    *  任务构建总次数
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
    * @param int|null $totalCount 任务构建总次数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets successRatio
    *  任务成功率,精确到小数点后两位
    *
    * @return double|null
    */
    public function getSuccessRatio()
    {
        return $this->container['successRatio'];
    }

    /**
    * Sets successRatio
    *
    * @param double|null $successRatio 任务成功率,精确到小数点后两位
    *
    * @return $this
    */
    public function setSuccessRatio($successRatio)
    {
        $this->container['successRatio'] = $successRatio;
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

