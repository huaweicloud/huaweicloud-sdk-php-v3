<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecycleInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * mode  实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    * datastore  datastore
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * enterpriseProjectId  企业项目ID，取值为“0”，表示为default企业项目
    * backupId  备份ID
    * createdAt  创建时间
    * deletedAt  删除时间
    * retainedUntil  保留截止时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'mode' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dds\V3\Model\RecycleDatastore',
            'payMode' => 'string',
            'enterpriseProjectId' => 'string',
            'backupId' => 'string',
            'createdAt' => 'string',
            'deletedAt' => 'string',
            'retainedUntil' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * mode  实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    * datastore  datastore
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * enterpriseProjectId  企业项目ID，取值为“0”，表示为default企业项目
    * backupId  备份ID
    * createdAt  创建时间
    * deletedAt  删除时间
    * retainedUntil  保留截止时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'mode' => null,
        'datastore' => null,
        'payMode' => null,
        'enterpriseProjectId' => null,
        'backupId' => null,
        'createdAt' => null,
        'deletedAt' => null,
        'retainedUntil' => null
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
    * id  实例ID
    * name  实例名称
    * mode  实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    * datastore  datastore
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * enterpriseProjectId  企业项目ID，取值为“0”，表示为default企业项目
    * backupId  备份ID
    * createdAt  创建时间
    * deletedAt  删除时间
    * retainedUntil  保留截止时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'mode' => 'mode',
            'datastore' => 'datastore',
            'payMode' => 'pay_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'backupId' => 'backup_id',
            'createdAt' => 'created_at',
            'deletedAt' => 'deleted_at',
            'retainedUntil' => 'retained_until'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID
    * name  实例名称
    * mode  实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    * datastore  datastore
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * enterpriseProjectId  企业项目ID，取值为“0”，表示为default企业项目
    * backupId  备份ID
    * createdAt  创建时间
    * deletedAt  删除时间
    * retainedUntil  保留截止时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'mode' => 'setMode',
            'datastore' => 'setDatastore',
            'payMode' => 'setPayMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'backupId' => 'setBackupId',
            'createdAt' => 'setCreatedAt',
            'deletedAt' => 'setDeletedAt',
            'retainedUntil' => 'setRetainedUntil'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID
    * name  实例名称
    * mode  实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    * datastore  datastore
    * payMode  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    * enterpriseProjectId  企业项目ID，取值为“0”，表示为default企业项目
    * backupId  备份ID
    * createdAt  创建时间
    * deletedAt  删除时间
    * retainedUntil  保留截止时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'mode' => 'getMode',
            'datastore' => 'getDatastore',
            'payMode' => 'getPayMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'backupId' => 'getBackupId',
            'createdAt' => 'getCreatedAt',
            'deletedAt' => 'getDeletedAt',
            'retainedUntil' => 'getRetainedUntil'
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['payMode'] = isset($data['payMode']) ? $data['payMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['deletedAt'] = isset($data['deletedAt']) ? $data['deletedAt'] : null;
        $this->container['retainedUntil'] = isset($data['retainedUntil']) ? $data['retainedUntil'] : null;
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
    *  实例ID
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
    * @param string|null $id 实例ID
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
    *  实例名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets mode
    *  实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 实例类型。支持集群、副本集、以及单节点。 取值   - Sharding   - ReplicaSet   - Single
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\RecycleDatastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\RecycleDatastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets payMode
    *  计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    *
    * @return string|null
    */
    public function getPayMode()
    {
        return $this->container['payMode'];
    }

    /**
    * Sets payMode
    *
    * @param string|null $payMode 计费方式。 - 取值为“0”，表示按需计费。 - 取值为“1”，表示包年/包月计费。
    *
    * @return $this
    */
    public function setPayMode($payMode)
    {
        $this->container['payMode'] = $payMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，取值为“0”，表示为default企业项目
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，取值为“0”，表示为default企业项目
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets backupId
    *  备份ID
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets deletedAt
    *  删除时间
    *
    * @return string|null
    */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
    * Sets deletedAt
    *
    * @param string|null $deletedAt 删除时间
    *
    * @return $this
    */
    public function setDeletedAt($deletedAt)
    {
        $this->container['deletedAt'] = $deletedAt;
        return $this;
    }

    /**
    * Gets retainedUntil
    *  保留截止时间
    *
    * @return string|null
    */
    public function getRetainedUntil()
    {
        return $this->container['retainedUntil'];
    }

    /**
    * Sets retainedUntil
    *
    * @param string|null $retainedUntil 保留截止时间
    *
    * @return $this
    */
    public function setRetainedUntil($retainedUntil)
    {
        $this->container['retainedUntil'] = $retainedUntil;
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

