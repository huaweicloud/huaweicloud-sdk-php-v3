<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionSubItemVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionSubItemVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
    * detail  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * subItemName  **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    * estimatedTime  **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'detail' => 'string',
            'subItemName' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'estimatedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
    * detail  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * subItemName  **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    * estimatedTime  **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'detail' => null,
        'subItemName' => null,
        'beginTime' => null,
        'endTime' => null,
        'estimatedTime' => 'int32'
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
    * status  **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
    * detail  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * subItemName  **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    * estimatedTime  **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'detail' => 'detail',
            'subItemName' => 'sub_item_name',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'estimatedTime' => 'estimated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
    * detail  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * subItemName  **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    * estimatedTime  **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'detail' => 'setDetail',
            'subItemName' => 'setSubItemName',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'estimatedTime' => 'setEstimatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
    * detail  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * subItemName  **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    * endTime  **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    * estimatedTime  **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'detail' => 'getDetail',
            'subItemName' => 'getSubItemName',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'estimatedTime' => 'getEstimatedTime'
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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['subItemName'] = isset($data['subItemName']) ? $data['subItemName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['estimatedTime'] = isset($data['estimatedTime']) ? $data['estimatedTime'] : null;
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
    *  **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
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
    * @param string|null $status **参数解释**： 状态。 **取值范围**： - SUCCESS：成功。 - RUNNING：运行中。 - WAITING：等待中。 - FAILED：失败。 - ROLLBACK_RUNNING：回滚运行中。 - ROLLBACK_SUCCESS：回滚成功。 - ROLLBACK_FAIL：回滚失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets detail
    *  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets subItemName
    *  **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSubItemName()
    {
        return $this->container['subItemName'];
    }

    /**
    * Sets subItemName
    *
    * @param string|null $subItemName **参数解释**： 子项名称，根据请求header中的x-language字段返回对应的中/英文名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubItemName($subItemName)
    {
        $this->container['subItemName'] = $subItemName;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime **参数解释**： 开始时间。 **取值范围**： 时间格式，或null值。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 结束时间。 **取值范围**： 时间格式，或null值。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets estimatedTime
    *  **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @return int|null
    */
    public function getEstimatedTime()
    {
        return $this->container['estimatedTime'];
    }

    /**
    * Sets estimatedTime
    *
    * @param int|null $estimatedTime **参数解释**： 预估时间。 **取值范围**： 整数。
    *
    * @return $this
    */
    public function setEstimatedTime($estimatedTime)
    {
        $this->container['estimatedTime'] = $estimatedTime;
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

