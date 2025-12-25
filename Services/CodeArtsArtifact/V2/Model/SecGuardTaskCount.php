<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecGuardTaskCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecGuardTaskCount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * task  **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    * artifact  **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * total  **参数解释**: 扫描总数。 **取值范围**: 不涉及。
    * list  **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'task' => 'int',
            'artifact' => 'int',
            'opensource' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\OpensourceCount',
            'virus' => 'int',
            'malware' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\MalwareCount',
            'total' => 'int',
            'list' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SecGuardTaskDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * task  **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    * artifact  **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * total  **参数解释**: 扫描总数。 **取值范围**: 不涉及。
    * list  **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'task' => 'int32',
        'artifact' => 'int32',
        'opensource' => null,
        'virus' => 'int32',
        'malware' => null,
        'total' => 'int32',
        'list' => null
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
    * task  **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    * artifact  **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * total  **参数解释**: 扫描总数。 **取值范围**: 不涉及。
    * list  **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'task' => 'task',
            'artifact' => 'artifact',
            'opensource' => 'opensource',
            'virus' => 'virus',
            'malware' => 'malware',
            'total' => 'total',
            'list' => 'list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * task  **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    * artifact  **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * total  **参数解释**: 扫描总数。 **取值范围**: 不涉及。
    * list  **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'task' => 'setTask',
            'artifact' => 'setArtifact',
            'opensource' => 'setOpensource',
            'virus' => 'setVirus',
            'malware' => 'setMalware',
            'total' => 'setTotal',
            'list' => 'setList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * task  **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    * artifact  **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * total  **参数解释**: 扫描总数。 **取值范围**: 不涉及。
    * list  **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'task' => 'getTask',
            'artifact' => 'getArtifact',
            'opensource' => 'getOpensource',
            'virus' => 'getVirus',
            'malware' => 'getMalware',
            'total' => 'getTotal',
            'list' => 'getList'
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
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['artifact'] = isset($data['artifact']) ? $data['artifact'] : null;
        $this->container['opensource'] = isset($data['opensource']) ? $data['opensource'] : null;
        $this->container['virus'] = isset($data['virus']) ? $data['virus'] : null;
        $this->container['malware'] = isset($data['malware']) ? $data['malware'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
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
    * Gets task
    *  **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param int|null $task **参数解释**: 扫描次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets artifact
    *  **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getArtifact()
    {
        return $this->container['artifact'];
    }

    /**
    * Sets artifact
    *
    * @param int|null $artifact **参数解释**: 扫描制品数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setArtifact($artifact)
    {
        $this->container['artifact'] = $artifact;
        return $this;
    }

    /**
    * Gets opensource
    *  opensource
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\OpensourceCount|null
    */
    public function getOpensource()
    {
        return $this->container['opensource'];
    }

    /**
    * Sets opensource
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\OpensourceCount|null $opensource opensource
    *
    * @return $this
    */
    public function setOpensource($opensource)
    {
        $this->container['opensource'] = $opensource;
        return $this;
    }

    /**
    * Gets virus
    *  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getVirus()
    {
        return $this->container['virus'];
    }

    /**
    * Sets virus
    *
    * @param int|null $virus **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setVirus($virus)
    {
        $this->container['virus'] = $virus;
        return $this;
    }

    /**
    * Gets malware
    *  malware
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\MalwareCount|null
    */
    public function getMalware()
    {
        return $this->container['malware'];
    }

    /**
    * Sets malware
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\MalwareCount|null $malware malware
    *
    * @return $this
    */
    public function setMalware($malware)
    {
        $this->container['malware'] = $malware;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**: 扫描总数。 **取值范围**: 不涉及。
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
    * @param int|null $total **参数解释**: 扫描总数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets list
    *  **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SecGuardTaskDetail[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\SecGuardTaskDetail[]|null $list **参数解释**: 扫描任务列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
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

