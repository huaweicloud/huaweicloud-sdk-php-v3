<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VaultMigrateResourceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VaultMigrateResourceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * destinationVaultId  目标存储库
    * resourceIds  待迁移的资源ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'destinationVaultId' => 'string',
            'resourceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * destinationVaultId  目标存储库
    * resourceIds  待迁移的资源ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'destinationVaultId' => null,
        'resourceIds' => null
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
    * destinationVaultId  目标存储库
    * resourceIds  待迁移的资源ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'destinationVaultId' => 'destination_vault_id',
            'resourceIds' => 'resource_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * destinationVaultId  目标存储库
    * resourceIds  待迁移的资源ID
    *
    * @var string[]
    */
    protected static $setters = [
            'destinationVaultId' => 'setDestinationVaultId',
            'resourceIds' => 'setResourceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * destinationVaultId  目标存储库
    * resourceIds  待迁移的资源ID
    *
    * @var string[]
    */
    protected static $getters = [
            'destinationVaultId' => 'getDestinationVaultId',
            'resourceIds' => 'getResourceIds'
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
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['destinationVaultId'] === null) {
            $invalidProperties[] = "'destinationVaultId' can't be null";
        }
        if ($this->container['resourceIds'] === null) {
            $invalidProperties[] = "'resourceIds' can't be null";
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
    * Gets destinationVaultId
    *  目标存储库
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
    * @param string $destinationVaultId 目标存储库
    *
    * @return $this
    */
    public function setDestinationVaultId($destinationVaultId)
    {
        $this->container['destinationVaultId'] = $destinationVaultId;
        return $this;
    }

    /**
    * Gets resourceIds
    *  待迁移的资源ID
    *
    * @return string[]
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[] $resourceIds 待迁移的资源ID
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
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

