<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Task implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Task';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * role  **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * algorithm  algorithm
    * taskResource  taskResource
    * logExportPath  logExportPath
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'role' => 'string',
            'algorithm' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithm',
            'taskResource' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskTaskResource',
            'logExportPath' => '\HuaweiCloud\SDK\ModelArts\V1\Model\TaskLogExportPath'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * role  **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * algorithm  algorithm
    * taskResource  taskResource
    * logExportPath  logExportPath
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'role' => null,
        'algorithm' => null,
        'taskResource' => null,
        'logExportPath' => null
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
    * role  **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * algorithm  algorithm
    * taskResource  taskResource
    * logExportPath  logExportPath
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'role' => 'role',
            'algorithm' => 'algorithm',
            'taskResource' => 'task_resource',
            'logExportPath' => 'log_export_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * role  **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * algorithm  algorithm
    * taskResource  taskResource
    * logExportPath  logExportPath
    *
    * @var string[]
    */
    protected static $setters = [
            'role' => 'setRole',
            'algorithm' => 'setAlgorithm',
            'taskResource' => 'setTaskResource',
            'logExportPath' => 'setLogExportPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * role  **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * algorithm  algorithm
    * taskResource  taskResource
    * logExportPath  logExportPath
    *
    * @var string[]
    */
    protected static $getters = [
            'role' => 'getRole',
            'algorithm' => 'getAlgorithm',
            'taskResource' => 'getTaskResource',
            'logExportPath' => 'getLogExportPath'
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
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['taskResource'] = isset($data['taskResource']) ? $data['taskResource'] : null;
        $this->container['logExportPath'] = isset($data['logExportPath']) ? $data['logExportPath'] : null;
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
    * Gets role
    *  **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role **参数解释**：任务角色，该功能暂未支持。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets algorithm
    *  algorithm
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithm|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskAlgorithm|null $algorithm algorithm
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets taskResource
    *  taskResource
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskTaskResource|null
    */
    public function getTaskResource()
    {
        return $this->container['taskResource'];
    }

    /**
    * Sets taskResource
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskTaskResource|null $taskResource taskResource
    *
    * @return $this
    */
    public function setTaskResource($taskResource)
    {
        $this->container['taskResource'] = $taskResource;
        return $this;
    }

    /**
    * Gets logExportPath
    *  logExportPath
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\TaskLogExportPath|null
    */
    public function getLogExportPath()
    {
        return $this->container['logExportPath'];
    }

    /**
    * Sets logExportPath
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\TaskLogExportPath|null $logExportPath logExportPath
    *
    * @return $this
    */
    public function setLogExportPath($logExportPath)
    {
        $this->container['logExportPath'] = $logExportPath;
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

