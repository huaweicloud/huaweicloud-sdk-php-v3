<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecGuardTaskDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecGuardTaskDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**: 任务id。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 任务名。 **取值范围**: 不涉及。
    * scanPath  **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示名称。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * status  **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'scanPath' => 'string',
            'fileName' => 'string',
            'displayName' => 'string',
            'path' => 'string',
            'createdTime' => 'string',
            'opensource' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\OpensourceCount',
            'virus' => 'int',
            'malware' => '\HuaweiCloud\SDK\CodeArtsArtifact\V2\Model\MalwareCount',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**: 任务id。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 任务名。 **取值范围**: 不涉及。
    * scanPath  **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示名称。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * status  **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'scanPath' => null,
        'fileName' => null,
        'displayName' => null,
        'path' => null,
        'createdTime' => null,
        'opensource' => null,
        'virus' => 'int32',
        'malware' => null,
        'status' => null
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
    * taskId  **参数解释**: 任务id。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 任务名。 **取值范围**: 不涉及。
    * scanPath  **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示名称。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * status  **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'scanPath' => 'scan_path',
            'fileName' => 'file_name',
            'displayName' => 'display_name',
            'path' => 'path',
            'createdTime' => 'created_time',
            'opensource' => 'opensource',
            'virus' => 'virus',
            'malware' => 'malware',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**: 任务id。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 任务名。 **取值范围**: 不涉及。
    * scanPath  **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示名称。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * status  **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'scanPath' => 'setScanPath',
            'fileName' => 'setFileName',
            'displayName' => 'setDisplayName',
            'path' => 'setPath',
            'createdTime' => 'setCreatedTime',
            'opensource' => 'setOpensource',
            'virus' => 'setVirus',
            'malware' => 'setMalware',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**: 任务id。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 任务名。 **取值范围**: 不涉及。
    * scanPath  **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    * fileName  **参数解释**: 文件名。 **取值范围**: 不涉及。
    * displayName  **参数解释**: 展示名称。 **取值范围**: 不涉及。
    * path  **参数解释**: 路径。 **取值范围**: 不涉及。
    * createdTime  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    * opensource  opensource
    * virus  **参数解释**: 病毒文件数。 **取值范围**: 不涉及。
    * malware  malware
    * status  **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'scanPath' => 'getScanPath',
            'fileName' => 'getFileName',
            'displayName' => 'getDisplayName',
            'path' => 'getPath',
            'createdTime' => 'getCreatedTime',
            'opensource' => 'getOpensource',
            'virus' => 'getVirus',
            'malware' => 'getMalware',
            'status' => 'getStatus'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['scanPath'] = isset($data['scanPath']) ? $data['scanPath'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['opensource'] = isset($data['opensource']) ? $data['opensource'] : null;
        $this->container['virus'] = isset($data['virus']) ? $data['virus'] : null;
        $this->container['malware'] = isset($data['malware']) ? $data['malware'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets taskId
    *  **参数解释**: 任务id。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**: 任务id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 任务名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**: 任务名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets scanPath
    *  **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getScanPath()
    {
        return $this->container['scanPath'];
    }

    /**
    * Sets scanPath
    *
    * @param string|null $scanPath **参数解释**: 文件扫描路径。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setScanPath($scanPath)
    {
        $this->container['scanPath'] = $scanPath;
        return $this;
    }

    /**
    * Gets fileName
    *  **参数解释**: 文件名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName **参数解释**: 文件名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**: 展示名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**: 展示名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释**: 路径。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释**: 路径。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets createdTime
    *  **参数解释**: 创建时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime **参数解释**: 创建时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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
    * Gets status
    *  **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

