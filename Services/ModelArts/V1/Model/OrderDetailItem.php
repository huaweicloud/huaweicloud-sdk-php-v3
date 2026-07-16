<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderDetailItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderDetailItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
    * action  **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
    * status  **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    * beginTimestamp  **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * updateTimestamp  **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * message  **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'action' => 'string',
            'status' => 'string',
            'beginTimestamp' => 'string',
            'updateTimestamp' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
    * action  **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
    * status  **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    * beginTimestamp  **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * updateTimestamp  **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * message  **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'action' => null,
        'status' => null,
        'beginTimestamp' => null,
        'updateTimestamp' => null,
        'message' => null
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
    * resourceName  **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
    * action  **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
    * status  **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    * beginTimestamp  **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * updateTimestamp  **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * message  **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resourceName',
            'action' => 'action',
            'status' => 'status',
            'beginTimestamp' => 'beginTimestamp',
            'updateTimestamp' => 'updateTimestamp',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
    * action  **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
    * status  **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    * beginTimestamp  **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * updateTimestamp  **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * message  **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'action' => 'setAction',
            'status' => 'setStatus',
            'beginTimestamp' => 'setBeginTimestamp',
            'updateTimestamp' => 'setUpdateTimestamp',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
    * action  **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
    * status  **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    * beginTimestamp  **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * updateTimestamp  **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    * message  **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'action' => 'getAction',
            'status' => 'getStatus',
            'beginTimestamp' => 'getBeginTimestamp',
            'updateTimestamp' => 'getUpdateTimestamp',
            'message' => 'getMessage'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTimestamp'] = isset($data['beginTimestamp']) ? $data['beginTimestamp'] : null;
        $this->container['updateTimestamp'] = isset($data['updateTimestamp']) ? $data['updateTimestamp'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets resourceName
    *  **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
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
    * @param string|null $resourceName **参数解释**：资源的ID，取值自资源详情的metadata.name字段。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
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
    * @param string $action **参数解释**：订单关联的资源变更动作类型。 **取值范围**：可选值如下： - createPool：创建资源池。 - deletePool：删除资源池。 - createNode：创建节点。 - deleteNode：删除节点，主要是包周期节点退订场景。 - renew：续费。 - toPeriodic：转包周期。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释**：订单关联资源的变更状态。 **取值范围**：可选值如下： - processing：处理中，资源正在处理中。 - succeed：成功，资源处理成功。 - failed：失败，资源处理失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTimestamp
    *  **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getBeginTimestamp()
    {
        return $this->container['beginTimestamp'];
    }

    /**
    * Sets beginTimestamp
    *
    * @param string|null $beginTimestamp **参数解释**：资源开始变更时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setBeginTimestamp($beginTimestamp)
    {
        $this->container['beginTimestamp'] = $beginTimestamp;
        return $this;
    }

    /**
    * Gets updateTimestamp
    *  **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getUpdateTimestamp()
    {
        return $this->container['updateTimestamp'];
    }

    /**
    * Sets updateTimestamp
    *
    * @param string|null $updateTimestamp **参数解释**：资源变更最后更新时间戳，形如1744285793000，单位毫秒。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setUpdateTimestamp($updateTimestamp)
    {
        $this->container['updateTimestamp'] = $updateTimestamp;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**：资源变更的执行信息，如失败原因。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

