<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAzByInstanceTypeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAzByInstanceTypeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceAz  节点当前所在AZ。
    * targetAz  期望节点最终分布AZ。
    * migrateType  AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * indicesBackupCheck  是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceAz' => 'string',
            'targetAz' => 'string',
            'migrateType' => 'string',
            'agency' => 'string',
            'indicesBackupCheck' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceAz  节点当前所在AZ。
    * targetAz  期望节点最终分布AZ。
    * migrateType  AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * indicesBackupCheck  是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceAz' => null,
        'targetAz' => null,
        'migrateType' => null,
        'agency' => null,
        'indicesBackupCheck' => null
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
    * sourceAz  节点当前所在AZ。
    * targetAz  期望节点最终分布AZ。
    * migrateType  AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * indicesBackupCheck  是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceAz' => 'source_az',
            'targetAz' => 'target_az',
            'migrateType' => 'migrate_type',
            'agency' => 'agency',
            'indicesBackupCheck' => 'indices_backup_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceAz  节点当前所在AZ。
    * targetAz  期望节点最终分布AZ。
    * migrateType  AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * indicesBackupCheck  是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceAz' => 'setSourceAz',
            'targetAz' => 'setTargetAz',
            'migrateType' => 'setMigrateType',
            'agency' => 'setAgency',
            'indicesBackupCheck' => 'setIndicesBackupCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceAz  节点当前所在AZ。
    * targetAz  期望节点最终分布AZ。
    * migrateType  AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * indicesBackupCheck  是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceAz' => 'getSourceAz',
            'targetAz' => 'getTargetAz',
            'migrateType' => 'getMigrateType',
            'agency' => 'getAgency',
            'indicesBackupCheck' => 'getIndicesBackupCheck'
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
        $this->container['sourceAz'] = isset($data['sourceAz']) ? $data['sourceAz'] : null;
        $this->container['targetAz'] = isset($data['targetAz']) ? $data['targetAz'] : null;
        $this->container['migrateType'] = isset($data['migrateType']) ? $data['migrateType'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['indicesBackupCheck'] = isset($data['indicesBackupCheck']) ? $data['indicesBackupCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceAz'] === null) {
            $invalidProperties[] = "'sourceAz' can't be null";
        }
        if ($this->container['targetAz'] === null) {
            $invalidProperties[] = "'targetAz' can't be null";
        }
        if ($this->container['migrateType'] === null) {
            $invalidProperties[] = "'migrateType' can't be null";
        }
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
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
    * Gets sourceAz
    *  节点当前所在AZ。
    *
    * @return string
    */
    public function getSourceAz()
    {
        return $this->container['sourceAz'];
    }

    /**
    * Sets sourceAz
    *
    * @param string $sourceAz 节点当前所在AZ。
    *
    * @return $this
    */
    public function setSourceAz($sourceAz)
    {
        $this->container['sourceAz'] = $sourceAz;
        return $this;
    }

    /**
    * Gets targetAz
    *  期望节点最终分布AZ。
    *
    * @return string
    */
    public function getTargetAz()
    {
        return $this->container['targetAz'];
    }

    /**
    * Sets targetAz
    *
    * @param string $targetAz 期望节点最终分布AZ。
    *
    * @return $this
    */
    public function setTargetAz($targetAz)
    {
        $this->container['targetAz'] = $targetAz;
        return $this;
    }

    /**
    * Gets migrateType
    *  AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    *
    * @return string
    */
    public function getMigrateType()
    {
        return $this->container['migrateType'];
    }

    /**
    * Sets migrateType
    *
    * @param string $migrateType AZ迁移方式： - multi_az_change：高可用改造。 - az_migrate： AZ平移
    *
    * @return $this
    */
    public function setMigrateType($migrateType)
    {
        $this->container['migrateType'] = $migrateType;
        return $this;
    }

    /**
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets indicesBackupCheck
    *  是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @return bool|null
    */
    public function getIndicesBackupCheck()
    {
        return $this->container['indicesBackupCheck'];
    }

    /**
    * Sets indicesBackupCheck
    *
    * @param bool|null $indicesBackupCheck 是否进行全量索引快照备份检测。 true：进行全量索引快照备份检测。 false：不进行全量索引快照备份检测。
    *
    * @return $this
    */
    public function setIndicesBackupCheck($indicesBackupCheck)
    {
        $this->container['indicesBackupCheck'] = $indicesBackupCheck;
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

