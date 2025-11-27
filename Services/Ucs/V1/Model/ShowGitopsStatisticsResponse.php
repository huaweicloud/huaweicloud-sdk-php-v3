<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGitopsStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGitopsStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * overviewStatus  overviewStatus
    * items  每个集群的配置集合状态
    * total  所有页的结果的总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'overviewStatus' => '\HuaweiCloud\SDK\Ucs\V1\Model\OverviewReconcileStatus',
            'items' => '\HuaweiCloud\SDK\Ucs\V1\Model\ClusterReconcileStatus[]',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * overviewStatus  overviewStatus
    * items  每个集群的配置集合状态
    * total  所有页的结果的总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'overviewStatus' => null,
        'items' => null,
        'total' => 'int32'
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
    * overviewStatus  overviewStatus
    * items  每个集群的配置集合状态
    * total  所有页的结果的总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'overviewStatus' => 'overviewStatus',
            'items' => 'items',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * overviewStatus  overviewStatus
    * items  每个集群的配置集合状态
    * total  所有页的结果的总数
    *
    * @var string[]
    */
    protected static $setters = [
            'overviewStatus' => 'setOverviewStatus',
            'items' => 'setItems',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * overviewStatus  overviewStatus
    * items  每个集群的配置集合状态
    * total  所有页的结果的总数
    *
    * @var string[]
    */
    protected static $getters = [
            'overviewStatus' => 'getOverviewStatus',
            'items' => 'getItems',
            'total' => 'getTotal'
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
        $this->container['overviewStatus'] = isset($data['overviewStatus']) ? $data['overviewStatus'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets overviewStatus
    *  overviewStatus
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\OverviewReconcileStatus|null
    */
    public function getOverviewStatus()
    {
        return $this->container['overviewStatus'];
    }

    /**
    * Sets overviewStatus
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\OverviewReconcileStatus|null $overviewStatus overviewStatus
    *
    * @return $this
    */
    public function setOverviewStatus($overviewStatus)
    {
        $this->container['overviewStatus'] = $overviewStatus;
        return $this;
    }

    /**
    * Gets items
    *  每个集群的配置集合状态
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\ClusterReconcileStatus[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\ClusterReconcileStatus[]|null $items 每个集群的配置集合状态
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
        return $this;
    }

    /**
    * Gets total
    *  所有页的结果的总数
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
    * @param int|null $total 所有页的结果的总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

