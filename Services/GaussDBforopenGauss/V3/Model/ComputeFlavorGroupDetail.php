<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComputeFlavorGroupDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComputeFlavorGroupDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupType  **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    * computeFlavors  **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupType' => 'string',
            'computeFlavors' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ComputeFlavorItemDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupType  **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    * computeFlavors  **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupType' => null,
        'computeFlavors' => null
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
    * groupType  **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    * computeFlavors  **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupType' => 'group_type',
            'computeFlavors' => 'compute_flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupType  **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    * computeFlavors  **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupType' => 'setGroupType',
            'computeFlavors' => 'setComputeFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupType  **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    * computeFlavors  **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupType' => 'getGroupType',
            'computeFlavors' => 'getComputeFlavors'
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
    const GROUP_TYPE_NORMAL = 'normal';
    const GROUP_TYPE_NORMAL2 = 'normal2';
    const GROUP_TYPE_ARM_FLAVORS = 'armFlavors';
    const GROUP_TYPE_EXCLUSIVE = 'exclusive';
    const GROUP_TYPE_ARM_EXCLUSIVE = 'armExclusive';
    const GROUP_TYPE_ECONOMICAL = 'economical';
    const GROUP_TYPE_ECONOMICAL2 = 'economical2';
    const GROUP_TYPE_ARM_FLAVORS2 = 'armFlavors2';
    const GROUP_TYPE_GENERAL = 'general';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGroupTypeAllowableValues()
    {
        return [
            self::GROUP_TYPE_NORMAL,
            self::GROUP_TYPE_NORMAL2,
            self::GROUP_TYPE_ARM_FLAVORS,
            self::GROUP_TYPE_EXCLUSIVE,
            self::GROUP_TYPE_ARM_EXCLUSIVE,
            self::GROUP_TYPE_ECONOMICAL,
            self::GROUP_TYPE_ECONOMICAL2,
            self::GROUP_TYPE_ARM_FLAVORS2,
            self::GROUP_TYPE_GENERAL,
        ];
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
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['computeFlavors'] = isset($data['computeFlavors']) ? $data['computeFlavors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getGroupTypeAllowableValues();
                if (!is_null($this->container['groupType']) && !in_array($this->container['groupType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'groupType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets groupType
    *  **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType **参数解释**: 性能规格。 **取值范围**: - normal：独享型（1:8）。 - normal2：独享型（1:4）。 - armFlavors：鲲鹏独享型（1:8）。 - exclusive：独享型（1:4），仅基础版集中式实例支持。 - armExclusive：鲲鹏独享型（1:4），仅基础版集中式实例支持。 - economical：惠选型（1:4）。 - economical2：惠选型（1:8）。 - armFlavors2：鲲鹏独享型（1:4）。 - general：通用型（1:4）。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets computeFlavors
    *  **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ComputeFlavorItemDetail[]|null
    */
    public function getComputeFlavors()
    {
        return $this->container['computeFlavors'];
    }

    /**
    * Sets computeFlavors
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ComputeFlavorItemDetail[]|null $computeFlavors **参数解释**: 计算规格列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setComputeFlavors($computeFlavors)
    {
        $this->container['computeFlavors'] = $computeFlavors;
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

