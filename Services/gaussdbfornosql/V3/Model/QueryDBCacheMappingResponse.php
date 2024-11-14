<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDBCacheMappingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDBCacheMappingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  内存加速映射ID。
    * name  内存加速映射名称。
    * sourceInstanceId  源实例ID。
    * sourceInstanceName  源实例名称。
    * targetInstanceId  目标实例ID。
    * targetInstanceName  目标实例名称。
    * status  内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
    * created  内存加速映射创建时间。
    * updated  内存加速映射最新变更的时间。
    * ruleCount  该内存加速映射下的规则数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'sourceInstanceId' => 'string',
            'sourceInstanceName' => 'string',
            'targetInstanceId' => 'string',
            'targetInstanceName' => 'string',
            'status' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'ruleCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  内存加速映射ID。
    * name  内存加速映射名称。
    * sourceInstanceId  源实例ID。
    * sourceInstanceName  源实例名称。
    * targetInstanceId  目标实例ID。
    * targetInstanceName  目标实例名称。
    * status  内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
    * created  内存加速映射创建时间。
    * updated  内存加速映射最新变更的时间。
    * ruleCount  该内存加速映射下的规则数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'sourceInstanceId' => null,
        'sourceInstanceName' => null,
        'targetInstanceId' => null,
        'targetInstanceName' => null,
        'status' => null,
        'created' => null,
        'updated' => null,
        'ruleCount' => 'int32'
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
    * id  内存加速映射ID。
    * name  内存加速映射名称。
    * sourceInstanceId  源实例ID。
    * sourceInstanceName  源实例名称。
    * targetInstanceId  目标实例ID。
    * targetInstanceName  目标实例名称。
    * status  内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
    * created  内存加速映射创建时间。
    * updated  内存加速映射最新变更的时间。
    * ruleCount  该内存加速映射下的规则数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'sourceInstanceId' => 'source_instance_id',
            'sourceInstanceName' => 'source_instance_name',
            'targetInstanceId' => 'target_instance_id',
            'targetInstanceName' => 'target_instance_name',
            'status' => 'status',
            'created' => 'created',
            'updated' => 'updated',
            'ruleCount' => 'rule_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  内存加速映射ID。
    * name  内存加速映射名称。
    * sourceInstanceId  源实例ID。
    * sourceInstanceName  源实例名称。
    * targetInstanceId  目标实例ID。
    * targetInstanceName  目标实例名称。
    * status  内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
    * created  内存加速映射创建时间。
    * updated  内存加速映射最新变更的时间。
    * ruleCount  该内存加速映射下的规则数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'sourceInstanceId' => 'setSourceInstanceId',
            'sourceInstanceName' => 'setSourceInstanceName',
            'targetInstanceId' => 'setTargetInstanceId',
            'targetInstanceName' => 'setTargetInstanceName',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'ruleCount' => 'setRuleCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  内存加速映射ID。
    * name  内存加速映射名称。
    * sourceInstanceId  源实例ID。
    * sourceInstanceName  源实例名称。
    * targetInstanceId  目标实例ID。
    * targetInstanceName  目标实例名称。
    * status  内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
    * created  内存加速映射创建时间。
    * updated  内存加速映射最新变更的时间。
    * ruleCount  该内存加速映射下的规则数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'sourceInstanceId' => 'getSourceInstanceId',
            'sourceInstanceName' => 'getSourceInstanceName',
            'targetInstanceId' => 'getTargetInstanceId',
            'targetInstanceName' => 'getTargetInstanceName',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'ruleCount' => 'getRuleCount'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['sourceInstanceName'] = isset($data['sourceInstanceName']) ? $data['sourceInstanceName'] : null;
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['targetInstanceName'] = isset($data['targetInstanceName']) ? $data['targetInstanceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['ruleCount'] = isset($data['ruleCount']) ? $data['ruleCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
        }
        if ($this->container['sourceInstanceName'] === null) {
            $invalidProperties[] = "'sourceInstanceName' can't be null";
        }
        if ($this->container['targetInstanceId'] === null) {
            $invalidProperties[] = "'targetInstanceId' can't be null";
        }
        if ($this->container['targetInstanceName'] === null) {
            $invalidProperties[] = "'targetInstanceName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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
    * Gets id
    *  内存加速映射ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 内存加速映射ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  内存加速映射名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 内存加速映射名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sourceInstanceId
    *  源实例ID。
    *
    * @return string
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string $sourceInstanceId 源实例ID。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets sourceInstanceName
    *  源实例名称。
    *
    * @return string
    */
    public function getSourceInstanceName()
    {
        return $this->container['sourceInstanceName'];
    }

    /**
    * Sets sourceInstanceName
    *
    * @param string $sourceInstanceName 源实例名称。
    *
    * @return $this
    */
    public function setSourceInstanceName($sourceInstanceName)
    {
        $this->container['sourceInstanceName'] = $sourceInstanceName;
        return $this;
    }

    /**
    * Gets targetInstanceId
    *  目标实例ID。
    *
    * @return string
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string $targetInstanceId 目标实例ID。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets targetInstanceName
    *  目标实例名称。
    *
    * @return string
    */
    public function getTargetInstanceName()
    {
        return $this->container['targetInstanceName'];
    }

    /**
    * Sets targetInstanceName
    *
    * @param string $targetInstanceName 目标实例名称。
    *
    * @return $this
    */
    public function setTargetInstanceName($targetInstanceName)
    {
        $this->container['targetInstanceName'] = $targetInstanceName;
        return $this;
    }

    /**
    * Gets status
    *  内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
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
    * @param string $status 内存加速映射关系。  - normal： 表示内存加速映射正常。  - creating： 表示内存加速映射创建中。  - createfail： 表示内存加速映射创建失败。  - deleting： 表示内存加速映射解除中。  - stopped： 表示内存加速映射停止。  - deleted： 表示内存加速映射已解除。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets created
    *  内存加速映射创建时间。
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 内存加速映射创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  内存加速映射最新变更的时间。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 内存加速映射最新变更的时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets ruleCount
    *  该内存加速映射下的规则数量。
    *
    * @return int|null
    */
    public function getRuleCount()
    {
        return $this->container['ruleCount'];
    }

    /**
    * Sets ruleCount
    *
    * @param int|null $ruleCount 该内存加速映射下的规则数量。
    *
    * @return $this
    */
    public function setRuleCount($ruleCount)
    {
        $this->container['ruleCount'] = $ruleCount;
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

