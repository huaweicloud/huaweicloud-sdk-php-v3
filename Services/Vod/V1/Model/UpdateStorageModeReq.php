<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStorageModeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStorageModeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  原媒资id
    * storageMode  存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    * restoreMode  归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    * days  从归档转标准存储且选择临时恢复时临时恢复时间。
    * restoreTier  归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'storageMode' => 'string',
            'restoreMode' => 'string',
            'days' => 'int',
            'restoreTier' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  原媒资id
    * storageMode  存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    * restoreMode  归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    * days  从归档转标准存储且选择临时恢复时临时恢复时间。
    * restoreTier  归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'storageMode' => null,
        'restoreMode' => null,
        'days' => 'int32',
        'restoreTier' => null
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
    * assetId  原媒资id
    * storageMode  存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    * restoreMode  归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    * days  从归档转标准存储且选择临时恢复时临时恢复时间。
    * restoreTier  归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'storageMode' => 'storage_mode',
            'restoreMode' => 'restore_mode',
            'days' => 'days',
            'restoreTier' => 'restore_tier'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  原媒资id
    * storageMode  存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    * restoreMode  归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    * days  从归档转标准存储且选择临时恢复时临时恢复时间。
    * restoreTier  归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'storageMode' => 'setStorageMode',
            'restoreMode' => 'setRestoreMode',
            'days' => 'setDays',
            'restoreTier' => 'setRestoreTier'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  原媒资id
    * storageMode  存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    * restoreMode  归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    * days  从归档转标准存储且选择临时恢复时临时恢复时间。
    * restoreTier  归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'storageMode' => 'getStorageMode',
            'restoreMode' => 'getRestoreMode',
            'days' => 'getDays',
            'restoreTier' => 'getRestoreTier'
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
    const STORAGE_MODE_STANDARD = 'STANDARD';
    const STORAGE_MODE_WARM = 'WARM';
    const STORAGE_MODE_COLD = 'COLD';
    const RESTORE_MODE_TEMP = 'TEMP';
    const RESTORE_MODE_FOREVER = 'FOREVER';
    const RESTORE_TIER_EXPEDITED = 'EXPEDITED';
    const RESTORE_TIER_STANDARD = 'STANDARD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageModeAllowableValues()
    {
        return [
            self::STORAGE_MODE_STANDARD,
            self::STORAGE_MODE_WARM,
            self::STORAGE_MODE_COLD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRestoreModeAllowableValues()
    {
        return [
            self::RESTORE_MODE_TEMP,
            self::RESTORE_MODE_FOREVER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRestoreTierAllowableValues()
    {
        return [
            self::RESTORE_TIER_EXPEDITED,
            self::RESTORE_TIER_STANDARD,
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['storageMode'] = isset($data['storageMode']) ? $data['storageMode'] : null;
        $this->container['restoreMode'] = isset($data['restoreMode']) ? $data['restoreMode'] : null;
        $this->container['days'] = isset($data['days']) ? $data['days'] : null;
        $this->container['restoreTier'] = isset($data['restoreTier']) ? $data['restoreTier'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
        if ($this->container['storageMode'] === null) {
            $invalidProperties[] = "'storageMode' can't be null";
        }
            $allowedValues = $this->getStorageModeAllowableValues();
                if (!is_null($this->container['storageMode']) && !in_array($this->container['storageMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRestoreModeAllowableValues();
                if (!is_null($this->container['restoreMode']) && !in_array($this->container['restoreMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'restoreMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['days']) && ($this->container['days'] > 30)) {
                $invalidProperties[] = "invalid value for 'days', must be smaller than or equal to 30.";
            }
            if (!is_null($this->container['days']) && ($this->container['days'] < 1)) {
                $invalidProperties[] = "invalid value for 'days', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getRestoreTierAllowableValues();
                if (!is_null($this->container['restoreTier']) && !in_array($this->container['restoreTier'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'restoreTier', must be one of '%s'",
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
    * Gets assetId
    *  原媒资id
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 原媒资id
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets storageMode
    *  存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    *
    * @return string
    */
    public function getStorageMode()
    {
        return $this->container['storageMode'];
    }

    /**
    * Sets storageMode
    *
    * @param string $storageMode 存储模式。 取值如下： - STANDARD：标准存储。 - WARM：低频存储。 - COLD：归档存储。
    *
    * @return $this
    */
    public function setStorageMode($storageMode)
    {
        $this->container['storageMode'] = $storageMode;
        return $this;
    }

    /**
    * Gets restoreMode
    *  归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    *
    * @return string|null
    */
    public function getRestoreMode()
    {
        return $this->container['restoreMode'];
    }

    /**
    * Sets restoreMode
    *
    * @param string|null $restoreMode 归档恢复方式。 取值如下： - TEMP：临时 - FOREVER：永久
    *
    * @return $this
    */
    public function setRestoreMode($restoreMode)
    {
        $this->container['restoreMode'] = $restoreMode;
        return $this;
    }

    /**
    * Gets days
    *  从归档转标准存储且选择临时恢复时临时恢复时间。
    *
    * @return int|null
    */
    public function getDays()
    {
        return $this->container['days'];
    }

    /**
    * Sets days
    *
    * @param int|null $days 从归档转标准存储且选择临时恢复时临时恢复时间。
    *
    * @return $this
    */
    public function setDays($days)
    {
        $this->container['days'] = $days;
        return $this;
    }

    /**
    * Gets restoreTier
    *  归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @return string|null
    */
    public function getRestoreTier()
    {
        return $this->container['restoreTier'];
    }

    /**
    * Sets restoreTier
    *
    * @param string|null $restoreTier 归档恢复选项，快速恢复EXPEDITED，标准恢复STANDARD，默认快速恢复
    *
    * @return $this
    */
    public function setRestoreTier($restoreTier)
    {
        $this->container['restoreTier'] = $restoreTier;
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

