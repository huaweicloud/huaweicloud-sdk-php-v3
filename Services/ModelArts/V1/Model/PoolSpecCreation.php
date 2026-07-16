<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolSpecCreation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolSpecCreation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    * scope  **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    * resources  **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    * network  network
    * jobFlavors  **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    * driver  driver
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'scope' => 'string[]',
            'resources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavor[]',
            'network' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecCreationNetwork',
            'jobFlavors' => 'string[]',
            'driver' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriver'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    * scope  **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    * resources  **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    * network  network
    * jobFlavors  **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    * driver  driver
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'scope' => null,
        'resources' => null,
        'network' => null,
        'jobFlavors' => null,
        'driver' => null
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
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    * scope  **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    * resources  **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    * network  network
    * jobFlavors  **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    * driver  driver
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'scope' => 'scope',
            'resources' => 'resources',
            'network' => 'network',
            'jobFlavors' => 'jobFlavors',
            'driver' => 'driver'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    * scope  **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    * resources  **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    * network  network
    * jobFlavors  **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    * driver  driver
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'scope' => 'setScope',
            'resources' => 'setResources',
            'network' => 'setNetwork',
            'jobFlavors' => 'setJobFlavors',
            'driver' => 'setDriver'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    * scope  **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    * resources  **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    * network  network
    * jobFlavors  **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    * driver  driver
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'scope' => 'getScope',
            'resources' => 'getResources',
            'network' => 'getNetwork',
            'jobFlavors' => 'getJobFlavors',
            'driver' => 'getDriver'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['jobFlavors'] = isset($data['jobFlavors']) ? $data['jobFlavors'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
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
    * Gets type
    *  **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：资源池类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - Dedicate：物理资源池，独立的网络，支持网络打通，定制驱动，定制作业类型 - Logical：逻辑资源池。没有独立的网络，不支持网络打通，资源池创建和扩缩容相较物理资源池更快。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    *
    * @return string[]
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string[] $scope **参数解释**：资源池支持的作业类型。 **约束限制**：不涉及。 **取值范围**：用户创建标准资源池时至少选择一种，物理资源池支持全部选择。可选值如下： - Train：训练作业 - Infer：推理作业 - Notebook：Notebook作业 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavor[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolResourceFlavor[] $resources **参数解释**：资源池中的资源规格信列表，包括资源规格和相应规格的资源数量。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecCreationNetwork
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolSpecCreationNetwork $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets jobFlavors
    *  **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    *
    * @return string[]|null
    */
    public function getJobFlavors()
    {
        return $this->container['jobFlavors'];
    }

    /**
    * Sets jobFlavors
    *
    * @param string[]|null $jobFlavors **参数解释**：资源池支持的作业规格信息列表，内容为作业规格名称。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setJobFlavors($jobFlavors)
    {
        $this->container['jobFlavors'] = $jobFlavors;
        return $this;
    }

    /**
    * Gets driver
    *  driver
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriver|null
    */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
    * Sets driver
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriver|null $driver driver
    *
    * @return $this
    */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;
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

