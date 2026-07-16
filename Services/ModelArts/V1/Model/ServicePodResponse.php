<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServicePodResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServicePodResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * podId  **参数解释：** od ID。 **取值范围：** 不涉及。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    * podRole  **参数解释：** pod角色。 **取值范围：** 不涉及。
    * status  **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
    * updateTime  **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'podId' => 'string',
            'podName' => 'string',
            'podNodeIp' => 'string',
            'podNodeName' => 'string',
            'podRole' => 'string',
            'status' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * podId  **参数解释：** od ID。 **取值范围：** 不涉及。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    * podRole  **参数解释：** pod角色。 **取值范围：** 不涉及。
    * status  **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
    * updateTime  **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'podId' => null,
        'podName' => null,
        'podNodeIp' => null,
        'podNodeName' => null,
        'podRole' => null,
        'status' => null,
        'updateTime' => 'int64'
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
    * podId  **参数解释：** od ID。 **取值范围：** 不涉及。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    * podRole  **参数解释：** pod角色。 **取值范围：** 不涉及。
    * status  **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
    * updateTime  **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'podId' => 'pod_id',
            'podName' => 'pod_name',
            'podNodeIp' => 'pod_node_ip',
            'podNodeName' => 'pod_node_name',
            'podRole' => 'pod_role',
            'status' => 'status',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * podId  **参数解释：** od ID。 **取值范围：** 不涉及。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    * podRole  **参数解释：** pod角色。 **取值范围：** 不涉及。
    * status  **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
    * updateTime  **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'podId' => 'setPodId',
            'podName' => 'setPodName',
            'podNodeIp' => 'setPodNodeIp',
            'podNodeName' => 'setPodNodeName',
            'podRole' => 'setPodRole',
            'status' => 'setStatus',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * podId  **参数解释：** od ID。 **取值范围：** 不涉及。
    * podName  **参数解释：** pod名字。 **取值范围：** 不涉及。
    * podNodeIp  **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    * podNodeName  **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    * podRole  **参数解释：** pod角色。 **取值范围：** 不涉及。
    * status  **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
    * updateTime  **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'podId' => 'getPodId',
            'podName' => 'getPodName',
            'podNodeIp' => 'getPodNodeIp',
            'podNodeName' => 'getPodNodeName',
            'podRole' => 'getPodRole',
            'status' => 'getStatus',
            'updateTime' => 'getUpdateTime'
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
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podNodeIp'] = isset($data['podNodeIp']) ? $data['podNodeIp'] : null;
        $this->container['podNodeName'] = isset($data['podNodeName']) ? $data['podNodeName'] : null;
        $this->container['podRole'] = isset($data['podRole']) ? $data['podRole'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets podId
    *  **参数解释：** od ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId **参数解释：** od ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释：** pod名字。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName **参数解释：** pod名字。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets podNodeIp
    *  **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodNodeIp()
    {
        return $this->container['podNodeIp'];
    }

    /**
    * Sets podNodeIp
    *
    * @param string|null $podNodeIp **参数解释：** pod所在node的IP。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodNodeIp($podNodeIp)
    {
        $this->container['podNodeIp'] = $podNodeIp;
        return $this;
    }

    /**
    * Gets podNodeName
    *  **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodNodeName()
    {
        return $this->container['podNodeName'];
    }

    /**
    * Sets podNodeName
    *
    * @param string|null $podNodeName **参数解释：** pod所在node的名字。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodNodeName($podNodeName)
    {
        $this->container['podNodeName'] = $podNodeName;
        return $this;
    }

    /**
    * Gets podRole
    *  **参数解释：** pod角色。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPodRole()
    {
        return $this->container['podRole'];
    }

    /**
    * Sets podRole
    *
    * @param string|null $podRole **参数解释：** pod角色。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPodRole($podRole)
    {
        $this->container['podRole'] = $podRole;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
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
    * @param string|null $status **参数解释：** pod服务状态。 **取值范围：** 有7种状态。RUNNING（运行中）、PENDING（未就绪）、SUCCEEDED（成功）、FAILED（失败）、ABNORMAL（异常）、UNKNOWN（未知）、DELETED（已删除）。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释：** 最近更新时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

