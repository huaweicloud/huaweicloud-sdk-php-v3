<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机id
    * historyBackupStatus  历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'historyBackupStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机id
    * historyBackupStatus  历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'historyBackupStatus' => null
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
    * hostId  主机id
    * historyBackupStatus  历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'historyBackupStatus' => 'history_backup_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机id
    * historyBackupStatus  历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'historyBackupStatus' => 'setHistoryBackupStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机id
    * historyBackupStatus  历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'historyBackupStatus' => 'getHistoryBackupStatus'
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
    const HISTORY_BACKUP_STATUS_OPENED = 'opened';
    const HISTORY_BACKUP_STATUS_CLOSED = 'closed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHistoryBackupStatusAllowableValues()
    {
        return [
            self::HISTORY_BACKUP_STATUS_OPENED,
            self::HISTORY_BACKUP_STATUS_CLOSED,
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['historyBackupStatus'] = isset($data['historyBackupStatus']) ? $data['historyBackupStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getHistoryBackupStatusAllowableValues();
                if (!is_null($this->container['historyBackupStatus']) && !in_array($this->container['historyBackupStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'historyBackupStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['historyBackupStatus']) && (mb_strlen($this->container['historyBackupStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'historyBackupStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['historyBackupStatus']) && (mb_strlen($this->container['historyBackupStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'historyBackupStatus', the character length must be bigger than or equal to 0.";
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
    * Gets hostId
    *  主机id
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 主机id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets historyBackupStatus
    *  历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @return string|null
    */
    public function getHistoryBackupStatus()
    {
        return $this->container['historyBackupStatus'];
    }

    /**
    * Sets historyBackupStatus
    *
    * @param string|null $historyBackupStatus 历史开启备份状态，通过筛选可用服务器的error_message或者status判断，如果error_message为空，则没有开启备份，该字段为closed；若不为空，则为opened
    *
    * @return $this
    */
    public function setHistoryBackupStatus($historyBackupStatus)
    {
        $this->container['historyBackupStatus'] = $historyBackupStatus;
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

