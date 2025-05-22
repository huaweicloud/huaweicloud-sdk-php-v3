<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterCnResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterCnResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minNum  **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    * maxNum  **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    * instances  **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minNum' => 'int',
            'maxNum' => 'int',
            'instances' => '\HuaweiCloud\SDK\Dws\V2\Model\CoordinatorNode[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minNum  **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    * maxNum  **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    * instances  **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minNum' => null,
        'maxNum' => null,
        'instances' => null
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
    * minNum  **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    * maxNum  **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    * instances  **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minNum' => 'min_num',
            'maxNum' => 'max_num',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minNum  **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    * maxNum  **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    * instances  **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'minNum' => 'setMinNum',
            'maxNum' => 'setMaxNum',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minNum  **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    * maxNum  **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    * instances  **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'minNum' => 'getMinNum',
            'maxNum' => 'getMaxNum',
            'instances' => 'getInstances'
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
        $this->container['minNum'] = isset($data['minNum']) ? $data['minNum'] : null;
        $this->container['maxNum'] = isset($data['maxNum']) ? $data['maxNum'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
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
    * Gets minNum
    *  **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinNum()
    {
        return $this->container['minNum'];
    }

    /**
    * Sets minNum
    *
    * @param int|null $minNum **参数解释**： 集群支持的最小CN节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinNum($minNum)
    {
        $this->container['minNum'] = $minNum;
        return $this;
    }

    /**
    * Gets maxNum
    *  **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxNum()
    {
        return $this->container['maxNum'];
    }

    /**
    * Sets maxNum
    *
    * @param int|null $maxNum **参数解释**： 集群支持的最大CN节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxNum($maxNum)
    {
        $this->container['maxNum'] = $maxNum;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\CoordinatorNode[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\CoordinatorNode[]|null $instances **参数解释**： CN节点详情列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

