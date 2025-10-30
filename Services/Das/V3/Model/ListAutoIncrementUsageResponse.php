<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAutoIncrementUsageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAutoIncrementUsageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
    * total  数量
    * autoIncrementUsageList  自增 ID 使用数据列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'total' => 'int',
            'autoIncrementUsageList' => '\HuaweiCloud\SDK\Das\V3\Model\AutoIncrementUsageRespAutoIncrementUsageList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
    * total  数量
    * autoIncrementUsageList  自增 ID 使用数据列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'total' => 'int32',
        'autoIncrementUsageList' => null
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
    * status  任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
    * total  数量
    * autoIncrementUsageList  自增 ID 使用数据列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'total' => 'total',
            'autoIncrementUsageList' => 'auto_increment_usage_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
    * total  数量
    * autoIncrementUsageList  自增 ID 使用数据列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'total' => 'setTotal',
            'autoIncrementUsageList' => 'setAutoIncrementUsageList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
    * total  数量
    * autoIncrementUsageList  自增 ID 使用数据列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'total' => 'getTotal',
            'autoIncrementUsageList' => 'getAutoIncrementUsageList'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['autoIncrementUsageList'] = isset($data['autoIncrementUsageList']) ? $data['autoIncrementUsageList'] : null;
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
    * Gets status
    *  任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
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
    * @param string|null $status 任务执行状态。 取值：  值为“Running”，表示任务正在执行。  值为“Completed”，表示任务执行成功。  值为“Failed”，表示任务执行失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets total
    *  数量
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
    * @param int|null $total 数量
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets autoIncrementUsageList
    *  自增 ID 使用数据列表。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\AutoIncrementUsageRespAutoIncrementUsageList[]|null
    */
    public function getAutoIncrementUsageList()
    {
        return $this->container['autoIncrementUsageList'];
    }

    /**
    * Sets autoIncrementUsageList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\AutoIncrementUsageRespAutoIncrementUsageList[]|null $autoIncrementUsageList 自增 ID 使用数据列表。
    *
    * @return $this
    */
    public function setAutoIncrementUsageList($autoIncrementUsageList)
    {
        $this->container['autoIncrementUsageList'] = $autoIncrementUsageList;
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

