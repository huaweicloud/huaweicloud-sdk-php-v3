<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadNodeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadNodeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIp  **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    * npuTopologyPlacement  **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIp' => 'string',
            'npuTopologyPlacement' => 'string',
            'resourceRequirement' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResourceRequirementVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIp  **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    * npuTopologyPlacement  **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIp' => null,
        'npuTopologyPlacement' => null,
        'resourceRequirement' => null
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
    * hostIp  **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    * npuTopologyPlacement  **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIp' => 'hostIp',
            'npuTopologyPlacement' => 'npuTopologyPlacement',
            'resourceRequirement' => 'resourceRequirement'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIp  **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    * npuTopologyPlacement  **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIp' => 'setHostIp',
            'npuTopologyPlacement' => 'setNpuTopologyPlacement',
            'resourceRequirement' => 'setResourceRequirement'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIp  **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    * npuTopologyPlacement  **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    * resourceRequirement  resourceRequirement
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIp' => 'getHostIp',
            'npuTopologyPlacement' => 'getNpuTopologyPlacement',
            'resourceRequirement' => 'getResourceRequirement'
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
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['npuTopologyPlacement'] = isset($data['npuTopologyPlacement']) ? $data['npuTopologyPlacement'] : null;
        $this->container['resourceRequirement'] = isset($data['resourceRequirement']) ? $data['resourceRequirement'] : null;
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
    * Gets hostIp
    *  **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**：作业运行节点的IP地址。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets npuTopologyPlacement
    *  **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNpuTopologyPlacement()
    {
        return $this->container['npuTopologyPlacement'];
    }

    /**
    * Sets npuTopologyPlacement
    *
    * @param string|null $npuTopologyPlacement **参数解释**：NPU卡的资源使用拓扑信息，长度为16的二进制编码，右起第一位编码代表卡1。其中，1表示占用，0表示空闲。例如，16卡的机型中卡1和卡15被占用，值为0100000000000001；8卡的机型中卡1和卡7被占用，返回值为0000000001000001。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNpuTopologyPlacement($npuTopologyPlacement)
    {
        $this->container['npuTopologyPlacement'] = $npuTopologyPlacement;
        return $this;
    }

    /**
    * Gets resourceRequirement
    *  resourceRequirement
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceRequirementVO|null
    */
    public function getResourceRequirement()
    {
        return $this->container['resourceRequirement'];
    }

    /**
    * Sets resourceRequirement
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResourceRequirementVO|null $resourceRequirement resourceRequirement
    *
    * @return $this
    */
    public function setResourceRequirement($resourceRequirement)
    {
        $this->container['resourceRequirement'] = $resourceRequirement;
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

