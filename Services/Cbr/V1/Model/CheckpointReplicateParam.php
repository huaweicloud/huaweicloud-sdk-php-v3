<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckpointReplicateParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckpointReplicateParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoTrigger  本次复制是否自动触发，默认为false，代表手动触发
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域id
    * destinationVaultId  目标区域存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    * vaultId  存储库ID: uuid
    * crossAccountUrn  跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoTrigger' => 'bool',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'destinationVaultId' => 'string',
            'enableAcceleration' => 'bool',
            'vaultId' => 'string',
            'crossAccountUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoTrigger  本次复制是否自动触发，默认为false，代表手动触发
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域id
    * destinationVaultId  目标区域存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    * vaultId  存储库ID: uuid
    * crossAccountUrn  跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoTrigger' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'destinationVaultId' => null,
        'enableAcceleration' => null,
        'vaultId' => null,
        'crossAccountUrn' => null
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
    * autoTrigger  本次复制是否自动触发，默认为false，代表手动触发
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域id
    * destinationVaultId  目标区域存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    * vaultId  存储库ID: uuid
    * crossAccountUrn  跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoTrigger' => 'auto_trigger',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'destinationVaultId' => 'destination_vault_id',
            'enableAcceleration' => 'enable_acceleration',
            'vaultId' => 'vault_id',
            'crossAccountUrn' => 'cross_account_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoTrigger  本次复制是否自动触发，默认为false，代表手动触发
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域id
    * destinationVaultId  目标区域存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    * vaultId  存储库ID: uuid
    * crossAccountUrn  跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @var string[]
    */
    protected static $setters = [
            'autoTrigger' => 'setAutoTrigger',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'destinationVaultId' => 'setDestinationVaultId',
            'enableAcceleration' => 'setEnableAcceleration',
            'vaultId' => 'setVaultId',
            'crossAccountUrn' => 'setCrossAccountUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoTrigger  本次复制是否自动触发，默认为false，代表手动触发
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域id
    * destinationVaultId  目标区域存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    * vaultId  存储库ID: uuid
    * crossAccountUrn  跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @var string[]
    */
    protected static $getters = [
            'autoTrigger' => 'getAutoTrigger',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'destinationVaultId' => 'getDestinationVaultId',
            'enableAcceleration' => 'getEnableAcceleration',
            'vaultId' => 'getVaultId',
            'crossAccountUrn' => 'getCrossAccountUrn'
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
        $this->container['autoTrigger'] = isset($data['autoTrigger']) ? $data['autoTrigger'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['enableAcceleration'] = isset($data['enableAcceleration']) ? $data['enableAcceleration'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['crossAccountUrn'] = isset($data['crossAccountUrn']) ? $data['crossAccountUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destinationProjectId'] === null) {
            $invalidProperties[] = "'destinationProjectId' can't be null";
        }
        if ($this->container['destinationRegion'] === null) {
            $invalidProperties[] = "'destinationRegion' can't be null";
        }
            if ((mb_strlen($this->container['destinationRegion']) > 255)) {
                $invalidProperties[] = "invalid value for 'destinationRegion', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['destinationRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'destinationRegion', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-zA-Z0-9._\\-]*$/", $this->container['destinationRegion'])) {
                $invalidProperties[] = "invalid value for 'destinationRegion', must be conform to the pattern /^[a-zA-Z0-9._\\-]*$/.";
            }
        if ($this->container['destinationVaultId'] === null) {
            $invalidProperties[] = "'destinationVaultId' can't be null";
        }
        if ($this->container['vaultId'] === null) {
            $invalidProperties[] = "'vaultId' can't be null";
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
    * Gets autoTrigger
    *  本次复制是否自动触发，默认为false，代表手动触发
    *
    * @return bool|null
    */
    public function getAutoTrigger()
    {
        return $this->container['autoTrigger'];
    }

    /**
    * Sets autoTrigger
    *
    * @param bool|null $autoTrigger 本次复制是否自动触发，默认为false，代表手动触发
    *
    * @return $this
    */
    public function setAutoTrigger($autoTrigger)
    {
        $this->container['autoTrigger'] = $autoTrigger;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  复制的目标项目ID
    *
    * @return string
    */
    public function getDestinationProjectId()
    {
        return $this->container['destinationProjectId'];
    }

    /**
    * Sets destinationProjectId
    *
    * @param string $destinationProjectId 复制的目标项目ID
    *
    * @return $this
    */
    public function setDestinationProjectId($destinationProjectId)
    {
        $this->container['destinationProjectId'] = $destinationProjectId;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  复制的目标区域id
    *
    * @return string
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string $destinationRegion 复制的目标区域id
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets destinationVaultId
    *  目标区域存储库ID
    *
    * @return string
    */
    public function getDestinationVaultId()
    {
        return $this->container['destinationVaultId'];
    }

    /**
    * Sets destinationVaultId
    *
    * @param string $destinationVaultId 目标区域存储库ID
    *
    * @return $this
    */
    public function setDestinationVaultId($destinationVaultId)
    {
        $this->container['destinationVaultId'] = $destinationVaultId;
        return $this;
    }

    /**
    * Gets enableAcceleration
    *  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    *
    * @return bool|null
    */
    public function getEnableAcceleration()
    {
        return $this->container['enableAcceleration'];
    }

    /**
    * Sets enableAcceleration
    *
    * @param bool|null $enableAcceleration 跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速，如果启用加速，会额外收取加速的费用。
    *
    * @return $this
    */
    public function setEnableAcceleration($enableAcceleration)
    {
        $this->container['enableAcceleration'] = $enableAcceleration;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库ID: uuid
    *
    * @return string
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string $vaultId 存储库ID: uuid
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets crossAccountUrn
    *  跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @return string|null
    */
    public function getCrossAccountUrn()
    {
        return $this->container['crossAccountUrn'];
    }

    /**
    * Sets crossAccountUrn
    *
    * @param string|null $crossAccountUrn 跨账户复制所需的目标账户的跨账户复制存储库标识
    *
    * @return $this
    */
    public function setCrossAccountUrn($crossAccountUrn)
    {
        $this->container['crossAccountUrn'] = $crossAccountUrn;
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

