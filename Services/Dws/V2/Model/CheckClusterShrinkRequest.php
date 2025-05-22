<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckClusterShrinkRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckClusterShrinkRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * checkItem  **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    * shrinkCount  **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'checkItem' => 'string',
            'shrinkCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * checkItem  **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    * shrinkCount  **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'checkItem' => null,
        'shrinkCount' => 'int32'
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
    * clusterId  **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * checkItem  **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    * shrinkCount  **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'checkItem' => 'check_item',
            'shrinkCount' => 'shrink_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * checkItem  **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    * shrinkCount  **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'checkItem' => 'setCheckItem',
            'shrinkCount' => 'setShrinkCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * checkItem  **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    * shrinkCount  **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'checkItem' => 'getCheckItem',
            'shrinkCount' => 'getShrinkCount'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['checkItem'] = isset($data['checkItem']) ? $data['checkItem'] : null;
        $this->container['shrinkCount'] = isset($data['shrinkCount']) ? $data['shrinkCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['checkItem'] === null) {
            $invalidProperties[] = "'checkItem' can't be null";
        }
        if ($this->container['shrinkCount'] === null) {
            $invalidProperties[] = "'shrinkCount' can't be null";
        }
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
    * Gets clusterId
    *  **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 集群ID。获取方式方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets checkItem
    *  **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getCheckItem()
    {
        return $this->container['checkItem'];
    }

    /**
    * Sets checkItem
    *
    * @param string $checkItem **参数解释**： 检查项，取值当前仅包含3种。 **约束限制**： 不涉及。 **取值范围**： guc：检查当前guc参数是否满足缩容条件； schema：检查所有schema下有无影响缩容的表； disk：检查缩容后磁盘容量是否满足要求。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCheckItem($checkItem)
    {
        $this->container['checkItem'] = $checkItem;
        return $this;
    }

    /**
    * Gets shrinkCount
    *  **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getShrinkCount()
    {
        return $this->container['shrinkCount'];
    }

    /**
    * Sets shrinkCount
    *
    * @param int $shrinkCount **参数解释**： 待缩容节点数。 **约束限制**： 不涉及。 **取值范围**： 最小值为3，最大值为当前节点总数减3。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setShrinkCount($shrinkCount)
    {
        $this->container['shrinkCount'] = $shrinkCount;
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

