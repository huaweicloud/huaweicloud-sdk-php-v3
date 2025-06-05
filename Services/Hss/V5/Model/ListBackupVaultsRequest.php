<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackupVaultsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackupVaultsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * vaultName  备份存储库名称
    * vaultId  备份存储库id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'vaultName' => 'string',
            'vaultId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * vaultName  备份存储库名称
    * vaultId  备份存储库id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'vaultName' => null,
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
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * vaultName  备份存储库名称
    * vaultId  备份存储库id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'vaultName' => 'vault_name',
            'vaultId' => 'vault_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * vaultName  备份存储库名称
    * vaultId  备份存储库id
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'vaultName' => 'setVaultName',
            'vaultId' => 'setVaultId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  偏移量：指定返回记录的开始位置
    * limit  每页显示个数
    * vaultName  备份存储库名称
    * vaultId  备份存储库id
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'vaultName' => 'getVaultName',
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['vaultName'] = isset($data['vaultName']) ? $data['vaultName'] : null;
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
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['vaultName']) && (mb_strlen($this->container['vaultName']) > 512)) {
                $invalidProperties[] = "invalid value for 'vaultName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vaultName']) && (mb_strlen($this->container['vaultName']) < 1)) {
                $invalidProperties[] = "invalid value for 'vaultName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vaultName']) && !preg_match("/^.*$/", $this->container['vaultName'])) {
                $invalidProperties[] = "invalid value for 'vaultName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vaultId']) && (mb_strlen($this->container['vaultId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vaultId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vaultId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['vaultId'])) {
                $invalidProperties[] = "invalid value for 'vaultId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
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
    * Gets offset
    *  偏移量：指定返回记录的开始位置
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 偏移量：指定返回记录的开始位置
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets vaultName
    *  备份存储库名称
    *
    * @return string|null
    */
    public function getVaultName()
    {
        return $this->container['vaultName'];
    }

    /**
    * Sets vaultName
    *
    * @param string|null $vaultName 备份存储库名称
    *
    * @return $this
    */
    public function setVaultName($vaultName)
    {
        $this->container['vaultName'] = $vaultName;
        return $this;
    }

    /**
    * Gets vaultId
    *  备份存储库id
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
    * @param string|null $vaultId 备份存储库id
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

