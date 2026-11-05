<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventId  **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    * isFaultNode  **参数解释**：是否故障节点。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称。 **取值范围**：不涉及。
    * instanceId  **参数解释**：节点ID。 **取值范围**：不涉及。
    * instanceType  **参数解释**：实例类型。 **取值范围**：不涉及。
    * underLyingInstanceId  **参数解释**：底层实例Id。 **取值范围**：不涉及。
    * flavorSupportRedeploy  **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    * state  **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    * publishTime  **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    * startTime  **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    * finishTime  **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    * jobProgress  **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventId' => 'string',
            'isFaultNode' => 'bool',
            'nodeName' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'underLyingInstanceId' => 'string',
            'flavorSupportRedeploy' => 'bool',
            'poolName' => 'string',
            'poolDisplayName' => 'string',
            'state' => 'string',
            'publishTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'jobProgress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventId  **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    * isFaultNode  **参数解释**：是否故障节点。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称。 **取值范围**：不涉及。
    * instanceId  **参数解释**：节点ID。 **取值范围**：不涉及。
    * instanceType  **参数解释**：实例类型。 **取值范围**：不涉及。
    * underLyingInstanceId  **参数解释**：底层实例Id。 **取值范围**：不涉及。
    * flavorSupportRedeploy  **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    * state  **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    * publishTime  **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    * startTime  **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    * finishTime  **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    * jobProgress  **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventId' => null,
        'isFaultNode' => null,
        'nodeName' => null,
        'instanceId' => null,
        'instanceType' => null,
        'underLyingInstanceId' => null,
        'flavorSupportRedeploy' => null,
        'poolName' => null,
        'poolDisplayName' => null,
        'state' => null,
        'publishTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'jobProgress' => null
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
    * eventId  **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    * isFaultNode  **参数解释**：是否故障节点。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称。 **取值范围**：不涉及。
    * instanceId  **参数解释**：节点ID。 **取值范围**：不涉及。
    * instanceType  **参数解释**：实例类型。 **取值范围**：不涉及。
    * underLyingInstanceId  **参数解释**：底层实例Id。 **取值范围**：不涉及。
    * flavorSupportRedeploy  **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    * state  **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    * publishTime  **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    * startTime  **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    * finishTime  **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    * jobProgress  **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventId' => 'eventId',
            'isFaultNode' => 'isFaultNode',
            'nodeName' => 'nodeName',
            'instanceId' => 'instanceId',
            'instanceType' => 'instanceType',
            'underLyingInstanceId' => 'underLyingInstanceId',
            'flavorSupportRedeploy' => 'flavorSupportRedeploy',
            'poolName' => 'poolName',
            'poolDisplayName' => 'poolDisplayName',
            'state' => 'state',
            'publishTime' => 'publishTime',
            'startTime' => 'startTime',
            'finishTime' => 'finishTime',
            'jobProgress' => 'jobProgress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventId  **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    * isFaultNode  **参数解释**：是否故障节点。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称。 **取值范围**：不涉及。
    * instanceId  **参数解释**：节点ID。 **取值范围**：不涉及。
    * instanceType  **参数解释**：实例类型。 **取值范围**：不涉及。
    * underLyingInstanceId  **参数解释**：底层实例Id。 **取值范围**：不涉及。
    * flavorSupportRedeploy  **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    * state  **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    * publishTime  **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    * startTime  **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    * finishTime  **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    * jobProgress  **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventId' => 'setEventId',
            'isFaultNode' => 'setIsFaultNode',
            'nodeName' => 'setNodeName',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'underLyingInstanceId' => 'setUnderLyingInstanceId',
            'flavorSupportRedeploy' => 'setFlavorSupportRedeploy',
            'poolName' => 'setPoolName',
            'poolDisplayName' => 'setPoolDisplayName',
            'state' => 'setState',
            'publishTime' => 'setPublishTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'jobProgress' => 'setJobProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventId  **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    * isFaultNode  **参数解释**：是否故障节点。 **取值范围**：不涉及。
    * nodeName  **参数解释**：节点名称。 **取值范围**：不涉及。
    * instanceId  **参数解释**：节点ID。 **取值范围**：不涉及。
    * instanceType  **参数解释**：实例类型。 **取值范围**：不涉及。
    * underLyingInstanceId  **参数解释**：底层实例Id。 **取值范围**：不涉及。
    * flavorSupportRedeploy  **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    * poolName  **参数解释**：资源池名称。 **取值范围**：不涉及。
    * poolDisplayName  **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    * state  **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    * publishTime  **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    * startTime  **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    * finishTime  **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    * jobProgress  **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventId' => 'getEventId',
            'isFaultNode' => 'getIsFaultNode',
            'nodeName' => 'getNodeName',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'underLyingInstanceId' => 'getUnderLyingInstanceId',
            'flavorSupportRedeploy' => 'getFlavorSupportRedeploy',
            'poolName' => 'getPoolName',
            'poolDisplayName' => 'getPoolDisplayName',
            'state' => 'getState',
            'publishTime' => 'getPublishTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'jobProgress' => 'getJobProgress'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['isFaultNode'] = isset($data['isFaultNode']) ? $data['isFaultNode'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['underLyingInstanceId'] = isset($data['underLyingInstanceId']) ? $data['underLyingInstanceId'] : null;
        $this->container['flavorSupportRedeploy'] = isset($data['flavorSupportRedeploy']) ? $data['flavorSupportRedeploy'] : null;
        $this->container['poolName'] = isset($data['poolName']) ? $data['poolName'] : null;
        $this->container['poolDisplayName'] = isset($data['poolDisplayName']) ? $data['poolDisplayName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['jobProgress'] = isset($data['jobProgress']) ? $data['jobProgress'] : null;
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
    * Gets eventId
    *  **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId **参数解释**：Iaas计划事件Id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets isFaultNode
    *  **参数解释**：是否故障节点。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getIsFaultNode()
    {
        return $this->container['isFaultNode'];
    }

    /**
    * Sets isFaultNode
    *
    * @param bool|null $isFaultNode **参数解释**：是否故障节点。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIsFaultNode($isFaultNode)
    {
        $this->container['isFaultNode'] = $isFaultNode;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**：节点名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName **参数解释**：节点名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：节点ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**：节点ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  **参数解释**：实例类型。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType **参数解释**：实例类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets underLyingInstanceId
    *  **参数解释**：底层实例Id。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUnderLyingInstanceId()
    {
        return $this->container['underLyingInstanceId'];
    }

    /**
    * Sets underLyingInstanceId
    *
    * @param string|null $underLyingInstanceId **参数解释**：底层实例Id。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUnderLyingInstanceId($underLyingInstanceId)
    {
        $this->container['underLyingInstanceId'] = $underLyingInstanceId;
        return $this;
    }

    /**
    * Gets flavorSupportRedeploy
    *  **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getFlavorSupportRedeploy()
    {
        return $this->container['flavorSupportRedeploy'];
    }

    /**
    * Sets flavorSupportRedeploy
    *
    * @param bool|null $flavorSupportRedeploy **参数解释**：节点规格是否支持重部署。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFlavorSupportRedeploy($flavorSupportRedeploy)
    {
        $this->container['flavorSupportRedeploy'] = $flavorSupportRedeploy;
        return $this;
    }

    /**
    * Gets poolName
    *  **参数解释**：资源池名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPoolName()
    {
        return $this->container['poolName'];
    }

    /**
    * Sets poolName
    *
    * @param string|null $poolName **参数解释**：资源池名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolName($poolName)
    {
        $this->container['poolName'] = $poolName;
        return $this;
    }

    /**
    * Gets poolDisplayName
    *  **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPoolDisplayName()
    {
        return $this->container['poolDisplayName'];
    }

    /**
    * Sets poolDisplayName
    *
    * @param string|null $poolDisplayName **参数解释**：资源池显示名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolDisplayName($poolDisplayName)
    {
        $this->container['poolDisplayName'] = $poolDisplayName;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state **参数解释**：Iaas计划事件状态。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets publishTime
    *  **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param string|null $publishTime **参数解释**：Iaas事件发布时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**：Iaas事件开始时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime **参数解释**：Iaas事件完成时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets jobProgress
    *  **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getJobProgress()
    {
        return $this->container['jobProgress'];
    }

    /**
    * Sets jobProgress
    *
    * @param string|null $jobProgress **参数解释**：重部署进度。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setJobProgress($jobProgress)
    {
        $this->container['jobProgress'] = $jobProgress;
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

