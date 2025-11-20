<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterUid  **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceId  **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceName  **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extendParam  **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subJobs  **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'clusterUid' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'extendParam' => 'map[string,string]',
            'subJobs' => '\HuaweiCloud\SDK\Cce\V3\Model\Job[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterUid  **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceId  **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceName  **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extendParam  **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subJobs  **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'clusterUid' => null,
        'resourceId' => null,
        'resourceName' => null,
        'extendParam' => null,
        'subJobs' => null
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
    * type  **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterUid  **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceId  **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceName  **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extendParam  **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subJobs  **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'clusterUid' => 'clusterUID',
            'resourceId' => 'resourceID',
            'resourceName' => 'resourceName',
            'extendParam' => 'extendParam',
            'subJobs' => 'subJobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterUid  **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceId  **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceName  **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extendParam  **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subJobs  **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'clusterUid' => 'setClusterUid',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'extendParam' => 'setExtendParam',
            'subJobs' => 'setSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * clusterUid  **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceId  **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * resourceName  **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * extendParam  **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * subJobs  **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'clusterUid' => 'getClusterUid',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'extendParam' => 'getExtendParam',
            'subJobs' => 'getSubJobs'
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
        $this->container['clusterUid'] = isset($data['clusterUid']) ? $data['clusterUid'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['subJobs'] = isset($data['subJobs']) ? $data['subJobs'] : null;
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
    * Gets type
    *  **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 任务的类型。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets clusterUid
    *  **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterUid()
    {
        return $this->container['clusterUid'];
    }

    /**
    * Sets clusterUid
    *
    * @param string|null $clusterUid **参数解释**： 任务所在的集群的ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterUid($clusterUid)
    {
        $this->container['clusterUid'] = $clusterUid;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释**： 任务操作的资源ID。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释**： 任务操作的资源名称。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets extendParam
    *  **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return map[string,string]|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param map[string,string]|null $extendParam **参数解释**： 扩展参数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets subJobs
    *  **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Job[]|null
    */
    public function getSubJobs()
    {
        return $this->container['subJobs'];
    }

    /**
    * Sets subJobs
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Job[]|null $subJobs **参数解释**： 子任务的列表。 - 包含了所有子任务的详细信息 - 在创建集群、节点等场景下，通常会由多个子任务共同组成创建任务，在子任务都完成后，任务才会完成  **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setSubJobs($subJobs)
    {
        $this->container['subJobs'] = $subJobs;
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

