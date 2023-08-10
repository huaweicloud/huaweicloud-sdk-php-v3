<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupEncryptRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupEncryptRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    * kmsKeyId  kms加密ID。加密时必传，关闭加密时候不传。
    * encryptionStatus  开启或关闭加密。不区分大小写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'kmsKeyId' => 'string',
            'encryptionStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    * kmsKeyId  kms加密ID。加密时必传，关闭加密时候不传。
    * encryptionStatus  开启或关闭加密。不区分大小写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'kmsKeyId' => null,
        'encryptionStatus' => null
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
    * type  加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    * kmsKeyId  kms加密ID。加密时必传，关闭加密时候不传。
    * encryptionStatus  开启或关闭加密。不区分大小写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'kmsKeyId' => 'kms_key_id',
            'encryptionStatus' => 'encryption_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    * kmsKeyId  kms加密ID。加密时必传，关闭加密时候不传。
    * encryptionStatus  开启或关闭加密。不区分大小写。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'kmsKeyId' => 'setKmsKeyId',
            'encryptionStatus' => 'setEncryptionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    * kmsKeyId  kms加密ID。加密时必传，关闭加密时候不传。
    * encryptionStatus  开启或关闭加密。不区分大小写。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'kmsKeyId' => 'getKmsKeyId',
            'encryptionStatus' => 'getEncryptionStatus'
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
    const TYPE_KMS = 'kms';
    const ENCRYPTION_STATUS_ON = 'on';
    const ENCRYPTION_STATUS_OFF = 'off';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_KMS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEncryptionStatusAllowableValues()
    {
        return [
            self::ENCRYPTION_STATUS_ON,
            self::ENCRYPTION_STATUS_OFF,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['encryptionStatus'] = isset($data['encryptionStatus']) ? $data['encryptionStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['encryptionStatus'] === null) {
            $invalidProperties[] = "'encryptionStatus' can't be null";
        }
            $allowedValues = $this->getEncryptionStatusAllowableValues();
                if (!is_null($this->container['encryptionStatus']) && !in_array($this->container['encryptionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'encryptionStatus', must be one of '%s'",
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
    * Gets type
    *  加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 加密类型。当前只支持kms。 开启加密时必传，关闭加密时不传。 不区分大小写。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  kms加密ID。加密时必传，关闭加密时候不传。
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId kms加密ID。加密时必传，关闭加密时候不传。
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
        return $this;
    }

    /**
    * Gets encryptionStatus
    *  开启或关闭加密。不区分大小写。
    *
    * @return string
    */
    public function getEncryptionStatus()
    {
        return $this->container['encryptionStatus'];
    }

    /**
    * Sets encryptionStatus
    *
    * @param string $encryptionStatus 开启或关闭加密。不区分大小写。
    *
    * @return $this
    */
    public function setEncryptionStatus($encryptionStatus)
    {
        $this->container['encryptionStatus'] = $encryptionStatus;
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

