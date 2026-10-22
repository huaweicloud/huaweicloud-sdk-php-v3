<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHyperinstanceGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHyperinstanceGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * name  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * npuCountLimit  **参数解释**：npu数量限制。 **默认取值**：不涉及。
    * npuCount  **参数解释**：npu数量。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * createdAt  **参数解释**：创建时间。 **默认取值**：不涉及。
    * updatedAt  **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'npuCountLimit' => 'string',
            'npuCount' => 'string',
            'hyperinstanceClusterId' => 'string',
            'createdAt' => 'int',
            'updatedAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * name  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * npuCountLimit  **参数解释**：npu数量限制。 **默认取值**：不涉及。
    * npuCount  **参数解释**：npu数量。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * createdAt  **参数解释**：创建时间。 **默认取值**：不涉及。
    * updatedAt  **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'npuCountLimit' => null,
        'npuCount' => null,
        'hyperinstanceClusterId' => null,
        'createdAt' => 'int64',
        'updatedAt' => 'int64'
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
    * id  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * name  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * npuCountLimit  **参数解释**：npu数量限制。 **默认取值**：不涉及。
    * npuCount  **参数解释**：npu数量。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * createdAt  **参数解释**：创建时间。 **默认取值**：不涉及。
    * updatedAt  **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'npuCountLimit' => 'npu_count_limit',
            'npuCount' => 'npu_count',
            'hyperinstanceClusterId' => 'hyperinstance_cluster_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * name  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * npuCountLimit  **参数解释**：npu数量限制。 **默认取值**：不涉及。
    * npuCount  **参数解释**：npu数量。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * createdAt  **参数解释**：创建时间。 **默认取值**：不涉及。
    * updatedAt  **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'npuCountLimit' => 'setNpuCountLimit',
            'npuCount' => 'setNpuCount',
            'hyperinstanceClusterId' => 'setHyperinstanceClusterId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    * name  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    * npuCountLimit  **参数解释**：npu数量限制。 **默认取值**：不涉及。
    * npuCount  **参数解释**：npu数量。 **默认取值**：不涉及。
    * hyperinstanceClusterId  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    * createdAt  **参数解释**：创建时间。 **默认取值**：不涉及。
    * updatedAt  **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'npuCountLimit' => 'getNpuCountLimit',
            'npuCount' => 'getNpuCount',
            'hyperinstanceClusterId' => 'getHyperinstanceClusterId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['npuCountLimit'] = isset($data['npuCountLimit']) ? $data['npuCountLimit'] : null;
        $this->container['npuCount'] = isset($data['npuCount']) ? $data['npuCount'] : null;
        $this->container['hyperinstanceClusterId'] = isset($data['hyperinstanceClusterId']) ? $data['hyperinstanceClusterId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets id
    *  **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：hyperinstance-group ID。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**：hyperinstance-group名称。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets npuCountLimit
    *  **参数解释**：npu数量限制。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getNpuCountLimit()
    {
        return $this->container['npuCountLimit'];
    }

    /**
    * Sets npuCountLimit
    *
    * @param string|null $npuCountLimit **参数解释**：npu数量限制。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNpuCountLimit($npuCountLimit)
    {
        $this->container['npuCountLimit'] = $npuCountLimit;
        return $this;
    }

    /**
    * Gets npuCount
    *  **参数解释**：npu数量。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getNpuCount()
    {
        return $this->container['npuCount'];
    }

    /**
    * Sets npuCount
    *
    * @param string|null $npuCount **参数解释**：npu数量。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNpuCount($npuCount)
    {
        $this->container['npuCount'] = $npuCount;
        return $this;
    }

    /**
    * Gets hyperinstanceClusterId
    *  **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHyperinstanceClusterId()
    {
        return $this->container['hyperinstanceClusterId'];
    }

    /**
    * Sets hyperinstanceClusterId
    *
    * @param string|null $hyperinstanceClusterId **参数解释**：超节点集群ID。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHyperinstanceClusterId($hyperinstanceClusterId)
    {
        $this->container['hyperinstanceClusterId'] = $hyperinstanceClusterId;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：创建时间。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt **参数解释**：创建时间。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt **参数解释**：更新时间。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

