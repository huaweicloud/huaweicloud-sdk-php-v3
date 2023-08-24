<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupResources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vaultId  选择需要绑定的存储库ID，不为空
    * resourceList  需要开启备份功能的主机情况列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vaultId' => 'string',
            'resourceList' => '\HuaweiCloud\SDK\Hss\V5\Model\ResourceInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vaultId  选择需要绑定的存储库ID，不为空
    * resourceList  需要开启备份功能的主机情况列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vaultId' => null,
        'resourceList' => null
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
    * vaultId  选择需要绑定的存储库ID，不为空
    * resourceList  需要开启备份功能的主机情况列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vaultId' => 'vault_id',
            'resourceList' => 'resource_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vaultId  选择需要绑定的存储库ID，不为空
    * resourceList  需要开启备份功能的主机情况列表
    *
    * @var string[]
    */
    protected static $setters = [
            'vaultId' => 'setVaultId',
            'resourceList' => 'setResourceList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vaultId  选择需要绑定的存储库ID，不为空
    * resourceList  需要开启备份功能的主机情况列表
    *
    * @var string[]
    */
    protected static $getters = [
            'vaultId' => 'getVaultId',
            'resourceList' => 'getResourceList'
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
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['resourceList'] = isset($data['resourceList']) ? $data['resourceList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 0.";
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
    * Gets vaultId
    *  选择需要绑定的存储库ID，不为空
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
    * @param string|null $vaultId 选择需要绑定的存储库ID，不为空
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets resourceList
    *  需要开启备份功能的主机情况列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ResourceInfo[]|null
    */
    public function getResourceList()
    {
        return $this->container['resourceList'];
    }

    /**
    * Sets resourceList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ResourceInfo[]|null $resourceList 需要开启备份功能的主机情况列表
    *
    * @return $this
    */
    public function setResourceList($resourceList)
    {
        $this->container['resourceList'] = $resourceList;
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

