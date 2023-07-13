<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExtendInfoBckup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExtendInfoBckup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appConsistencyErrorCode  应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    * appConsistencyErrorMessage  应用一致性备份错误信息
    * appConsistencyStatus  应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    * backupId  备份副本ID
    * backupName  备份名称
    * incremental  是否增备
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appConsistencyErrorCode' => 'string',
            'appConsistencyErrorMessage' => 'string',
            'appConsistencyStatus' => 'string',
            'backupId' => 'string',
            'backupName' => 'string',
            'incremental' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appConsistencyErrorCode  应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    * appConsistencyErrorMessage  应用一致性备份错误信息
    * appConsistencyStatus  应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    * backupId  备份副本ID
    * backupName  备份名称
    * incremental  是否增备
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appConsistencyErrorCode' => null,
        'appConsistencyErrorMessage' => null,
        'appConsistencyStatus' => null,
        'backupId' => null,
        'backupName' => null,
        'incremental' => null
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
    * appConsistencyErrorCode  应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    * appConsistencyErrorMessage  应用一致性备份错误信息
    * appConsistencyStatus  应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    * backupId  备份副本ID
    * backupName  备份名称
    * incremental  是否增备
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appConsistencyErrorCode' => 'app_consistency_error_code',
            'appConsistencyErrorMessage' => 'app_consistency_error_message',
            'appConsistencyStatus' => 'app_consistency_status',
            'backupId' => 'backup_id',
            'backupName' => 'backup_name',
            'incremental' => 'incremental'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appConsistencyErrorCode  应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    * appConsistencyErrorMessage  应用一致性备份错误信息
    * appConsistencyStatus  应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    * backupId  备份副本ID
    * backupName  备份名称
    * incremental  是否增备
    *
    * @var string[]
    */
    protected static $setters = [
            'appConsistencyErrorCode' => 'setAppConsistencyErrorCode',
            'appConsistencyErrorMessage' => 'setAppConsistencyErrorMessage',
            'appConsistencyStatus' => 'setAppConsistencyStatus',
            'backupId' => 'setBackupId',
            'backupName' => 'setBackupName',
            'incremental' => 'setIncremental'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appConsistencyErrorCode  应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    * appConsistencyErrorMessage  应用一致性备份错误信息
    * appConsistencyStatus  应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    * backupId  备份副本ID
    * backupName  备份名称
    * incremental  是否增备
    *
    * @var string[]
    */
    protected static $getters = [
            'appConsistencyErrorCode' => 'getAppConsistencyErrorCode',
            'appConsistencyErrorMessage' => 'getAppConsistencyErrorMessage',
            'appConsistencyStatus' => 'getAppConsistencyStatus',
            'backupId' => 'getBackupId',
            'backupName' => 'getBackupName',
            'incremental' => 'getIncremental'
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
    const APP_CONSISTENCY_STATUS__0 = '0';
    const APP_CONSISTENCY_STATUS__1 = '1';
    const INCREMENTAL_TRUE = '\"true\"';
    const INCREMENTAL_FALSE = '\"false\"';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppConsistencyStatusAllowableValues()
    {
        return [
            self::APP_CONSISTENCY_STATUS__0,
            self::APP_CONSISTENCY_STATUS__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIncrementalAllowableValues()
    {
        return [
            self::INCREMENTAL_TRUE,
            self::INCREMENTAL_FALSE,
        ];
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
        $this->container['appConsistencyErrorCode'] = isset($data['appConsistencyErrorCode']) ? $data['appConsistencyErrorCode'] : null;
        $this->container['appConsistencyErrorMessage'] = isset($data['appConsistencyErrorMessage']) ? $data['appConsistencyErrorMessage'] : null;
        $this->container['appConsistencyStatus'] = isset($data['appConsistencyStatus']) ? $data['appConsistencyStatus'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAppConsistencyStatusAllowableValues();
                if (!is_null($this->container['appConsistencyStatus']) && !in_array($this->container['appConsistencyStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appConsistencyStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['backupId'] === null) {
            $invalidProperties[] = "'backupId' can't be null";
        }
            $allowedValues = $this->getIncrementalAllowableValues();
                if (!is_null($this->container['incremental']) && !in_array($this->container['incremental'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'incremental', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets appConsistencyErrorCode
    *  应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    *
    * @return string|null
    */
    public function getAppConsistencyErrorCode()
    {
        return $this->container['appConsistencyErrorCode'];
    }

    /**
    * Sets appConsistencyErrorCode
    *
    * @param string|null $appConsistencyErrorCode 应用一致性备份失败错误码。请参见[错误码](ErrorCode.xml)。
    *
    * @return $this
    */
    public function setAppConsistencyErrorCode($appConsistencyErrorCode)
    {
        $this->container['appConsistencyErrorCode'] = $appConsistencyErrorCode;
        return $this;
    }

    /**
    * Gets appConsistencyErrorMessage
    *  应用一致性备份错误信息
    *
    * @return string|null
    */
    public function getAppConsistencyErrorMessage()
    {
        return $this->container['appConsistencyErrorMessage'];
    }

    /**
    * Sets appConsistencyErrorMessage
    *
    * @param string|null $appConsistencyErrorMessage 应用一致性备份错误信息
    *
    * @return $this
    */
    public function setAppConsistencyErrorMessage($appConsistencyErrorMessage)
    {
        $this->container['appConsistencyErrorMessage'] = $appConsistencyErrorMessage;
        return $this;
    }

    /**
    * Gets appConsistencyStatus
    *  应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    *
    * @return string|null
    */
    public function getAppConsistencyStatus()
    {
        return $this->container['appConsistencyStatus'];
    }

    /**
    * Sets appConsistencyStatus
    *
    * @param string|null $appConsistencyStatus 应用一致性备份状态；0:非应用一致性，1：应用一致性备份
    *
    * @return $this
    */
    public function setAppConsistencyStatus($appConsistencyStatus)
    {
        $this->container['appConsistencyStatus'] = $appConsistencyStatus;
        return $this;
    }

    /**
    * Gets backupId
    *  备份副本ID
    *
    * @return string
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string $backupId 备份副本ID
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
    *  备份名称
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
    * @param string|null $backupName 备份名称
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets incremental
    *  是否增备
    *
    * @return string|null
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param string|null $incremental 是否增备
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
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

