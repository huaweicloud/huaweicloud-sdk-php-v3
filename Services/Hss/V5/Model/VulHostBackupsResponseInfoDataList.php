<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostBackupsResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostBackupsResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupTime  **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    * backupId  **参数解释**: 备份id **取值范围**: 字符长度1-128位
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupTime' => 'int',
            'backupId' => 'string',
            'backupName' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupTime  **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    * backupId  **参数解释**: 备份id **取值范围**: 字符长度1-128位
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupTime' => 'int64',
        'backupId' => null,
        'backupName' => null,
        'status' => null
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
    * backupTime  **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    * backupId  **参数解释**: 备份id **取值范围**: 字符长度1-128位
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupTime' => 'backup_time',
            'backupId' => 'backup_id',
            'backupName' => 'backup_name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupTime  **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    * backupId  **参数解释**: 备份id **取值范围**: 字符长度1-128位
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
    *
    * @var string[]
    */
    protected static $setters = [
            'backupTime' => 'setBackupTime',
            'backupId' => 'setBackupId',
            'backupName' => 'setBackupName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupTime  **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    * backupId  **参数解释**: 备份id **取值范围**: 字符长度1-128位
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
    *
    * @var string[]
    */
    protected static $getters = [
            'backupTime' => 'getBackupTime',
            'backupId' => 'getBackupId',
            'backupName' => 'getBackupName',
            'status' => 'getStatus'
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
        $this->container['backupTime'] = isset($data['backupTime']) ? $data['backupTime'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['backupTime']) && ($this->container['backupTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'backupTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['backupTime']) && ($this->container['backupTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'backupTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backupId']) && (mb_strlen($this->container['backupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupId']) && (mb_strlen($this->container['backupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^available|protecting|deleting|restoring|error|waiting_protect|waiting_delete|waiting_restore$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^available|protecting|deleting|restoring|error|waiting_protect|waiting_delete|waiting_restore$/.";
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
    * Gets backupTime
    *  **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getBackupTime()
    {
        return $this->container['backupTime'];
    }

    /**
    * Sets backupTime
    *
    * @param int|null $backupTime **参数解释**: 备份时间（时间戳，单位为毫秒） **取值范围**: 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setBackupTime($backupTime)
    {
        $this->container['backupTime'] = $backupTime;
        return $this;
    }

    /**
    * Gets backupId
    *  **参数解释**: 备份id **取值范围**: 字符长度1-128位
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
    * @param string|null $backupId **参数解释**: 备份id **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backupName
    *  **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName **参数解释**: 备份名称 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
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
    * @param string|null $status **参数解释**: 备份状态 **取值范围**: - available：可用 - protecting：备份中 - deleting：删除中 - restoring：恢复中 - error：错误 - waiting_protect：待备份 - waiting_delete：待删除 - waiting_restore：待恢复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

