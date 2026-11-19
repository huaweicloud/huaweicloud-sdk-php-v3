<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMigrateInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMigrateInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rdsInstanceId  **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    * rdsStatus  **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    * rdsInstanceName  **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    * drsJobId  **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    * drsStatus  **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    * rdsReadwriteMode  **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * taurusReadwriteMode  **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * migrationDirection  **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rdsInstanceId' => 'string',
            'rdsStatus' => 'string',
            'rdsInstanceName' => 'string',
            'drsJobId' => 'string',
            'drsStatus' => 'string',
            'rdsReadwriteMode' => 'string',
            'taurusReadwriteMode' => 'string',
            'migrationDirection' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rdsInstanceId  **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    * rdsStatus  **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    * rdsInstanceName  **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    * drsJobId  **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    * drsStatus  **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    * rdsReadwriteMode  **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * taurusReadwriteMode  **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * migrationDirection  **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rdsInstanceId' => null,
        'rdsStatus' => null,
        'rdsInstanceName' => null,
        'drsJobId' => null,
        'drsStatus' => null,
        'rdsReadwriteMode' => null,
        'taurusReadwriteMode' => null,
        'migrationDirection' => null
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
    * rdsInstanceId  **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    * rdsStatus  **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    * rdsInstanceName  **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    * drsJobId  **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    * drsStatus  **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    * rdsReadwriteMode  **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * taurusReadwriteMode  **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * migrationDirection  **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rdsInstanceId' => 'rds_instance_id',
            'rdsStatus' => 'rds_status',
            'rdsInstanceName' => 'rds_instance_name',
            'drsJobId' => 'drs_job_id',
            'drsStatus' => 'drs_status',
            'rdsReadwriteMode' => 'rds_readwrite_mode',
            'taurusReadwriteMode' => 'taurus_readwrite_mode',
            'migrationDirection' => 'migration_direction'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rdsInstanceId  **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    * rdsStatus  **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    * rdsInstanceName  **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    * drsJobId  **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    * drsStatus  **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    * rdsReadwriteMode  **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * taurusReadwriteMode  **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * migrationDirection  **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'rdsInstanceId' => 'setRdsInstanceId',
            'rdsStatus' => 'setRdsStatus',
            'rdsInstanceName' => 'setRdsInstanceName',
            'drsJobId' => 'setDrsJobId',
            'drsStatus' => 'setDrsStatus',
            'rdsReadwriteMode' => 'setRdsReadwriteMode',
            'taurusReadwriteMode' => 'setTaurusReadwriteMode',
            'migrationDirection' => 'setMigrationDirection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rdsInstanceId  **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    * rdsStatus  **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    * rdsInstanceName  **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    * drsJobId  **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    * drsStatus  **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    * rdsReadwriteMode  **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * taurusReadwriteMode  **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    * migrationDirection  **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'rdsInstanceId' => 'getRdsInstanceId',
            'rdsStatus' => 'getRdsStatus',
            'rdsInstanceName' => 'getRdsInstanceName',
            'drsJobId' => 'getDrsJobId',
            'drsStatus' => 'getDrsStatus',
            'rdsReadwriteMode' => 'getRdsReadwriteMode',
            'taurusReadwriteMode' => 'getTaurusReadwriteMode',
            'migrationDirection' => 'getMigrationDirection'
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
        $this->container['rdsInstanceId'] = isset($data['rdsInstanceId']) ? $data['rdsInstanceId'] : null;
        $this->container['rdsStatus'] = isset($data['rdsStatus']) ? $data['rdsStatus'] : null;
        $this->container['rdsInstanceName'] = isset($data['rdsInstanceName']) ? $data['rdsInstanceName'] : null;
        $this->container['drsJobId'] = isset($data['drsJobId']) ? $data['drsJobId'] : null;
        $this->container['drsStatus'] = isset($data['drsStatus']) ? $data['drsStatus'] : null;
        $this->container['rdsReadwriteMode'] = isset($data['rdsReadwriteMode']) ? $data['rdsReadwriteMode'] : null;
        $this->container['taurusReadwriteMode'] = isset($data['taurusReadwriteMode']) ? $data['taurusReadwriteMode'] : null;
        $this->container['migrationDirection'] = isset($data['migrationDirection']) ? $data['migrationDirection'] : null;
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
    * Gets rdsInstanceId
    *  **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    *
    * @return string|null
    */
    public function getRdsInstanceId()
    {
        return $this->container['rdsInstanceId'];
    }

    /**
    * Sets rdsInstanceId
    *
    * @param string|null $rdsInstanceId **参数解释**：  源实例ID。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。
    *
    * @return $this
    */
    public function setRdsInstanceId($rdsInstanceId)
    {
        $this->container['rdsInstanceId'] = $rdsInstanceId;
        return $this;
    }

    /**
    * Gets rdsStatus
    *  **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getRdsStatus()
    {
        return $this->container['rdsStatus'];
    }

    /**
    * Sets rdsStatus
    *
    * @param string|null $rdsStatus **参数解释**：  源实例状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setRdsStatus($rdsStatus)
    {
        $this->container['rdsStatus'] = $rdsStatus;
        return $this;
    }

    /**
    * Gets rdsInstanceName
    *  **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getRdsInstanceName()
    {
        return $this->container['rdsInstanceName'];
    }

    /**
    * Sets rdsInstanceName
    *
    * @param string|null $rdsInstanceName **参数解释**：  源实例名称。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setRdsInstanceName($rdsInstanceName)
    {
        $this->container['rdsInstanceName'] = $rdsInstanceName;
        return $this;
    }

    /**
    * Gets drsJobId
    *  **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDrsJobId()
    {
        return $this->container['drsJobId'];
    }

    /**
    * Sets drsJobId
    *
    * @param string|null $drsJobId **参数解释**：  迁移任务ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDrsJobId($drsJobId)
    {
        $this->container['drsJobId'] = $drsJobId;
        return $this;
    }

    /**
    * Gets drsStatus
    *  **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDrsStatus()
    {
        return $this->container['drsStatus'];
    }

    /**
    * Sets drsStatus
    *
    * @param string|null $drsStatus **参数解释**：  迁移任务状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDrsStatus($drsStatus)
    {
        $this->container['drsStatus'] = $drsStatus;
        return $this;
    }

    /**
    * Gets rdsReadwriteMode
    *  **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    *
    * @return string|null
    */
    public function getRdsReadwriteMode()
    {
        return $this->container['rdsReadwriteMode'];
    }

    /**
    * Sets rdsReadwriteMode
    *
    * @param string|null $rdsReadwriteMode **参数解释**：  源实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    *
    * @return $this
    */
    public function setRdsReadwriteMode($rdsReadwriteMode)
    {
        $this->container['rdsReadwriteMode'] = $rdsReadwriteMode;
        return $this;
    }

    /**
    * Gets taurusReadwriteMode
    *  **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    *
    * @return string|null
    */
    public function getTaurusReadwriteMode()
    {
        return $this->container['taurusReadwriteMode'];
    }

    /**
    * Sets taurusReadwriteMode
    *
    * @param string|null $taurusReadwriteMode **参数解释**：  目标实例读写状态。  **取值范围**：  - ON：读写状态。 - OFF：只读状态。
    *
    * @return $this
    */
    public function setTaurusReadwriteMode($taurusReadwriteMode)
    {
        $this->container['taurusReadwriteMode'] = $taurusReadwriteMode;
        return $this;
    }

    /**
    * Gets migrationDirection
    *  **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @return string|null
    */
    public function getMigrationDirection()
    {
        return $this->container['migrationDirection'];
    }

    /**
    * Sets migrationDirection
    *
    * @param string|null $migrationDirection **参数解释**：G  迁移方向。  **取值范围**：  - up：源实例到TaurusDB实例。 - down：TaurusDB实例到源实例。
    *
    * @return $this
    */
    public function setMigrationDirection($migrationDirection)
    {
        $this->container['migrationDirection'] = $migrationDirection;
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

