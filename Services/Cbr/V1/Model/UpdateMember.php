<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMember';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  备份共享状态
    * vaultId  共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'vaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  备份共享状态
    * vaultId  共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'vaultId' => null
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
    * status  备份共享状态
    * vaultId  共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'vaultId' => 'vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  备份共享状态
    * vaultId  共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'vaultId' => 'setVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  备份共享状态
    * vaultId  共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'vaultId' => 'getVaultId'
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
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_PENDING = 'pending';
    const STATUS_REJECTED = 'rejected';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_PENDING,
            self::STATUS_REJECTED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets status
    *  备份共享状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 备份共享状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vaultId
    *  共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 共享的备份将存入的存储库，仅支持uuid 更新member状态的时候，如果是接受，必须传入vault_id，如果是拒绝，则无需
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
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

