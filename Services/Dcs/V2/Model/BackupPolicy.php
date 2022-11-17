<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupType  备份类型。 - auto：自动备份 - manual：手动备份
    * saveDays  当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    * periodicalBackupPlan  periodicalBackupPlan
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupType' => 'string',
            'saveDays' => 'int',
            'periodicalBackupPlan' => '\HuaweiCloud\SDK\Dcs\V2\Model\BackupPlan'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupType  备份类型。 - auto：自动备份 - manual：手动备份
    * saveDays  当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    * periodicalBackupPlan  periodicalBackupPlan
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupType' => null,
        'saveDays' => 'int32',
        'periodicalBackupPlan' => null
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
    * backupType  备份类型。 - auto：自动备份 - manual：手动备份
    * saveDays  当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    * periodicalBackupPlan  periodicalBackupPlan
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupType' => 'backup_type',
            'saveDays' => 'save_days',
            'periodicalBackupPlan' => 'periodical_backup_plan'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupType  备份类型。 - auto：自动备份 - manual：手动备份
    * saveDays  当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    * periodicalBackupPlan  periodicalBackupPlan
    *
    * @var string[]
    */
    protected static $setters = [
            'backupType' => 'setBackupType',
            'saveDays' => 'setSaveDays',
            'periodicalBackupPlan' => 'setPeriodicalBackupPlan'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupType  备份类型。 - auto：自动备份 - manual：手动备份
    * saveDays  当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    * periodicalBackupPlan  periodicalBackupPlan
    *
    * @var string[]
    */
    protected static $getters = [
            'backupType' => 'getBackupType',
            'saveDays' => 'getSaveDays',
            'periodicalBackupPlan' => 'getPeriodicalBackupPlan'
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
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['saveDays'] = isset($data['saveDays']) ? $data['saveDays'] : null;
        $this->container['periodicalBackupPlan'] = isset($data['periodicalBackupPlan']) ? $data['periodicalBackupPlan'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backupType'] === null) {
            $invalidProperties[] = "'backupType' can't be null";
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
    * Gets backupType
    *  备份类型。 - auto：自动备份 - manual：手动备份
    *
    * @return string
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string $backupType 备份类型。 - auto：自动备份 - manual：手动备份
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets saveDays
    *  当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    *
    * @return int|null
    */
    public function getSaveDays()
    {
        return $this->container['saveDays'];
    }

    /**
    * Sets saveDays
    *
    * @param int|null $saveDays 当backup_type设置为auto时，该参数为必填。 保留天数，单位：天，取值范围：1-7。
    *
    * @return $this
    */
    public function setSaveDays($saveDays)
    {
        $this->container['saveDays'] = $saveDays;
        return $this;
    }

    /**
    * Gets periodicalBackupPlan
    *  periodicalBackupPlan
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BackupPlan|null
    */
    public function getPeriodicalBackupPlan()
    {
        return $this->container['periodicalBackupPlan'];
    }

    /**
    * Sets periodicalBackupPlan
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BackupPlan|null $periodicalBackupPlan periodicalBackupPlan
    *
    * @return $this
    */
    public function setPeriodicalBackupPlan($periodicalBackupPlan)
    {
        $this->container['periodicalBackupPlan'] = $periodicalBackupPlan;
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

