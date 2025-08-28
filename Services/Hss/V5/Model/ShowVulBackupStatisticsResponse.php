<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulBackupStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulBackupStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupInfoId  **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    * backupHostNum  **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    * unableBackupHostNum  **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupInfoId' => 'string',
            'backupHostNum' => 'int',
            'unableBackupHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupInfoId  **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    * backupHostNum  **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    * unableBackupHostNum  **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupInfoId' => null,
        'backupHostNum' => 'int32',
        'unableBackupHostNum' => 'int32'
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
    * backupInfoId  **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    * backupHostNum  **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    * unableBackupHostNum  **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupInfoId' => 'backup_info_id',
            'backupHostNum' => 'backup_host_num',
            'unableBackupHostNum' => 'unable_backup_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupInfoId  **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    * backupHostNum  **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    * unableBackupHostNum  **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @var string[]
    */
    protected static $setters = [
            'backupInfoId' => 'setBackupInfoId',
            'backupHostNum' => 'setBackupHostNum',
            'unableBackupHostNum' => 'setUnableBackupHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupInfoId  **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    * backupHostNum  **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    * unableBackupHostNum  **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @var string[]
    */
    protected static $getters = [
            'backupInfoId' => 'getBackupInfoId',
            'backupHostNum' => 'getBackupHostNum',
            'unableBackupHostNum' => 'getUnableBackupHostNum'
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
        $this->container['backupInfoId'] = isset($data['backupInfoId']) ? $data['backupInfoId'] : null;
        $this->container['backupHostNum'] = isset($data['backupHostNum']) ? $data['backupHostNum'] : null;
        $this->container['unableBackupHostNum'] = isset($data['unableBackupHostNum']) ? $data['unableBackupHostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['backupInfoId']) && (mb_strlen($this->container['backupInfoId']) > 128)) {
                $invalidProperties[] = "invalid value for 'backupInfoId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backupInfoId']) && (mb_strlen($this->container['backupInfoId']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupInfoId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupHostNum']) && ($this->container['backupHostNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'backupHostNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['backupHostNum']) && ($this->container['backupHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'backupHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unableBackupHostNum']) && ($this->container['unableBackupHostNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'unableBackupHostNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['unableBackupHostNum']) && ($this->container['unableBackupHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unableBackupHostNum', must be bigger than or equal to 0.";
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
    * Gets backupInfoId
    *  **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getBackupInfoId()
    {
        return $this->container['backupInfoId'];
    }

    /**
    * Sets backupInfoId
    *
    * @param string|null $backupInfoId **参数解释**: 本次漏洞处理的备份信息id **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setBackupInfoId($backupInfoId)
    {
        $this->container['backupInfoId'] = $backupInfoId;
        return $this;
    }

    /**
    * Gets backupHostNum
    *  **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @return int|null
    */
    public function getBackupHostNum()
    {
        return $this->container['backupHostNum'];
    }

    /**
    * Sets backupHostNum
    *
    * @param int|null $backupHostNum **参数解释**: 本次漏洞处理可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @return $this
    */
    public function setBackupHostNum($backupHostNum)
    {
        $this->container['backupHostNum'] = $backupHostNum;
        return $this;
    }

    /**
    * Gets unableBackupHostNum
    *  **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @return int|null
    */
    public function getUnableBackupHostNum()
    {
        return $this->container['unableBackupHostNum'];
    }

    /**
    * Sets unableBackupHostNum
    *
    * @param int|null $unableBackupHostNum **参数解释**: 本次漏洞处理不可进行备份的主机数量 **取值范围**: 字符长度0-1000000位
    *
    * @return $this
    */
    public function setUnableBackupHostNum($unableBackupHostNum)
    {
        $this->container['unableBackupHostNum'] = $unableBackupHostNum;
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

