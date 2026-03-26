<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 备份描述。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 备份名称。 **取值范围**： 不涉及。
    * size  **参数解释**： 备份大小。 **取值范围**： 不涉及。
    * sizeUnit  **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    * status  **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    * backupMethod  **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * useDetail  **参数解释**： 使用详情。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'name' => 'string',
            'size' => 'string',
            'sizeUnit' => 'string',
            'status' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'backupType' => 'string',
            'backupLevel' => 'string',
            'backupMethod' => 'string',
            'useDetail' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 备份描述。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 备份名称。 **取值范围**： 不涉及。
    * size  **参数解释**： 备份大小。 **取值范围**： 不涉及。
    * sizeUnit  **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    * status  **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    * backupMethod  **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * useDetail  **参数解释**： 使用详情。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'instanceId' => null,
        'instanceName' => null,
        'name' => null,
        'size' => null,
        'sizeUnit' => null,
        'status' => null,
        'created' => null,
        'updated' => null,
        'backupType' => null,
        'backupLevel' => null,
        'backupMethod' => null,
        'useDetail' => null,
        'timeZone' => null
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
    * id  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 备份描述。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 备份名称。 **取值范围**： 不涉及。
    * size  **参数解释**： 备份大小。 **取值范围**： 不涉及。
    * sizeUnit  **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    * status  **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    * backupMethod  **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * useDetail  **参数解释**： 使用详情。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'name' => 'name',
            'size' => 'size',
            'sizeUnit' => 'size_unit',
            'status' => 'status',
            'created' => 'created',
            'updated' => 'updated',
            'backupType' => 'backup_type',
            'backupLevel' => 'backup_level',
            'backupMethod' => 'backup_method',
            'useDetail' => 'use_detail',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 备份描述。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 备份名称。 **取值范围**： 不涉及。
    * size  **参数解释**： 备份大小。 **取值范围**： 不涉及。
    * sizeUnit  **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    * status  **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    * backupMethod  **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * useDetail  **参数解释**： 使用详情。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'name' => 'setName',
            'size' => 'setSize',
            'sizeUnit' => 'setSizeUnit',
            'status' => 'setStatus',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'backupType' => 'setBackupType',
            'backupLevel' => 'setBackupLevel',
            'backupMethod' => 'setBackupMethod',
            'useDetail' => 'setUseDetail',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 备份ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 备份描述。 **取值范围**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 不涉及。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * name  **参数解释**： 备份名称。 **取值范围**： 不涉及。
    * size  **参数解释**： 备份大小。 **取值范围**： 不涉及。
    * sizeUnit  **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    * status  **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
    * created  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * backupType  **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * backupLevel  **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    * backupMethod  **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    * useDetail  **参数解释**： 使用详情。 **取值范围**： 不涉及。
    * timeZone  **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'name' => 'getName',
            'size' => 'getSize',
            'sizeUnit' => 'getSizeUnit',
            'status' => 'getStatus',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'backupType' => 'getBackupType',
            'backupLevel' => 'getBackupLevel',
            'backupMethod' => 'getBackupMethod',
            'useDetail' => 'getUseDetail',
            'timeZone' => 'getTimeZone'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['sizeUnit'] = isset($data['sizeUnit']) ? $data['sizeUnit'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
        $this->container['backupMethod'] = isset($data['backupMethod']) ? $data['backupMethod'] : null;
        $this->container['useDetail'] = isset($data['useDetail']) ? $data['useDetail'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
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
    *  **参数解释**： 备份ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 备份ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 备份描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 备份描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 实例ID。 **取值范围**： 不涉及。
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
    * @param string|null $instanceId **参数解释**： 实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 备份名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 备份名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**： 备份大小。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size **参数解释**： 备份大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets sizeUnit
    *  **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSizeUnit()
    {
        return $this->container['sizeUnit'];
    }

    /**
    * Sets sizeUnit
    *
    * @param string|null $sizeUnit **参数解释**： 大小单位（KB）。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSizeUnit($sizeUnit)
    {
        $this->container['sizeUnit'] = $sizeUnit;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
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
    * @param string|null $status **参数解释**： 备份状态。 **取值范围**： - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DELETING：备份删除中。
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
    *  **参数解释**： 创建时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created **参数解释**： 创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets backupType
    *  **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType **参数解释**： 备份类型。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets backupLevel
    *  **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    *
    * @return string|null
    */
    public function getBackupLevel()
    {
        return $this->container['backupLevel'];
    }

    /**
    * Sets backupLevel
    *
    * @param string|null $backupLevel **参数解释**： 备份级别。 **取值范围**： - 1：一级备份。 - 2：二级备份。
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
        return $this;
    }

    /**
    * Gets backupMethod
    *  **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    *
    * @return string|null
    */
    public function getBackupMethod()
    {
        return $this->container['backupMethod'];
    }

    /**
    * Sets backupMethod
    *
    * @param string|null $backupMethod **参数解释**： 备份方法。 **取值范围**： - Db：物理备份。 - Snapshot：快照备份。
    *
    * @return $this
    */
    public function setBackupMethod($backupMethod)
    {
        $this->container['backupMethod'] = $backupMethod;
        return $this;
    }

    /**
    * Gets useDetail
    *  **参数解释**： 使用详情。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUseDetail()
    {
        return $this->container['useDetail'];
    }

    /**
    * Sets useDetail
    *
    * @param string|null $useDetail **参数解释**： 使用详情。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUseDetail($useDetail)
    {
        $this->container['useDetail'] = $useDetail;
        return $this;
    }

    /**
    * Gets timeZone
    *  **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone **参数解释**： UTC时区。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

