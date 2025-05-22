<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterActionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterActionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    * actionName  **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * submitTime  **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    * items  **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'actionName' => 'string',
            'status' => 'string',
            'clusterName' => 'string',
            'submitTime' => 'string',
            'items' => '\HuaweiCloud\SDK\Dws\V2\Model\ActionItemVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    * actionName  **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * submitTime  **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    * items  **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'actionName' => null,
        'status' => null,
        'clusterName' => null,
        'submitTime' => null,
        'items' => null
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
    * id  **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    * actionName  **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * submitTime  **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    * items  **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'actionName' => 'action_name',
            'status' => 'status',
            'clusterName' => 'cluster_name',
            'submitTime' => 'submit_time',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    * actionName  **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * submitTime  **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    * items  **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'actionName' => 'setActionName',
            'status' => 'setStatus',
            'clusterName' => 'setClusterName',
            'submitTime' => 'setSubmitTime',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    * actionName  **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： 不涉及。
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * submitTime  **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    * items  **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'actionName' => 'getActionName',
            'status' => 'getStatus',
            'clusterName' => 'getClusterName',
            'submitTime' => 'getSubmitTime',
            'items' => 'getItems'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets id
    *  **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 任务详情响应体。 **取值范围**： 随机生成的UUID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets actionName
    *  **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string|null $actionName **参数解释**： 任务名称，同入参字段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 任务状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 任务状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName **参数解释**： 集群名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets submitTime
    *  **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSubmitTime()
    {
        return $this->container['submitTime'];
    }

    /**
    * Sets submitTime
    *
    * @param string|null $submitTime **参数解释**： 任务提交时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ActionItemVo[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ActionItemVo[]|null $items **参数解释**： 任务详情子项。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

