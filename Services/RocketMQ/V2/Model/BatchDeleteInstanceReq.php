<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instances  **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * action  **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    * allFailure  **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    * forceDelete  **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instances' => 'string[]',
            'action' => 'string',
            'allFailure' => 'string',
            'forceDelete' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instances  **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * action  **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    * allFailure  **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    * forceDelete  **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instances' => null,
        'action' => null,
        'allFailure' => null,
        'forceDelete' => null
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
    * instances  **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * action  **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    * allFailure  **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    * forceDelete  **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instances' => 'instances',
            'action' => 'action',
            'allFailure' => 'all_failure',
            'forceDelete' => 'force_delete'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instances  **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * action  **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    * allFailure  **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    * forceDelete  **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instances' => 'setInstances',
            'action' => 'setAction',
            'allFailure' => 'setAllFailure',
            'forceDelete' => 'setForceDelete'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instances  **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * action  **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    * allFailure  **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    * forceDelete  **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instances' => 'getInstances',
            'action' => 'getAction',
            'allFailure' => 'getAllFailure',
            'forceDelete' => 'getForceDelete'
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
    const ACTION_DELETE = 'delete';
    const ALL_FAILURE_RELIABILITY = 'reliability';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_DELETE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAllFailureAllowableValues()
    {
        return [
            self::ALL_FAILURE_RELIABILITY,
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
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['allFailure'] = isset($data['allFailure']) ? $data['allFailure'] : null;
        $this->container['forceDelete'] = isset($data['forceDelete']) ? $data['forceDelete'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAllFailureAllowableValues();
                if (!is_null($this->container['allFailure']) && !in_array($this->container['allFailure'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'allFailure', must be one of '%s'",
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
    * Gets instances
    *  **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances **参数解释**： 实例的ID列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**： 对实例的操作：delete。 **约束限制**： 不涉及。 **取值范围**：  - delete **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets allFailure
    *  **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAllFailure()
    {
        return $this->container['allFailure'];
    }

    /**
    * Sets allFailure
    *
    * @param string|null $allFailure **参数解释**： 参数值为reliability，表示删除租户所有创建失败的RocketMQ实例。 **约束限制**： 不涉及。 **取值范围**： - reliability **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAllFailure($allFailure)
    {
        $this->container['allFailure'] = $allFailure;
        return $this;
    }

    /**
    * Gets forceDelete
    *  **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getForceDelete()
    {
        return $this->container['forceDelete'];
    }

    /**
    * Sets forceDelete
    *
    * @param bool|null $forceDelete **参数解释**： 是否强删除。 **约束限制**： 不涉及。 **取值范围**： - true：强删除，强删除实例不进入回收站。 - false：弱删除，开启回收站功能后，实例进入回收站。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setForceDelete($forceDelete)
    {
        $this->container['forceDelete'] = $forceDelete;
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

