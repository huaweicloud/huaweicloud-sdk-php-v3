<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupReplicateReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupReplicateReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  复制的描述
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域的存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
    * name  复制名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'destinationVaultId' => 'string',
            'enableAcceleration' => 'bool',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  复制的描述
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域的存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
    * name  复制名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'destinationVaultId' => null,
        'enableAcceleration' => null,
        'name' => null
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
    * description  复制的描述
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域的存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
    * name  复制名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'destinationVaultId' => 'destination_vault_id',
            'enableAcceleration' => 'enable_acceleration',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  复制的描述
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域的存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
    * name  复制名称
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'destinationVaultId' => 'setDestinationVaultId',
            'enableAcceleration' => 'setEnableAcceleration',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  复制的描述
    * destinationProjectId  复制的目标项目ID
    * destinationRegion  复制的目标区域
    * destinationVaultId  复制的目标区域的存储库ID
    * enableAcceleration  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
    * name  复制名称
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'destinationVaultId' => 'getDestinationVaultId',
            'enableAcceleration' => 'getEnableAcceleration',
            'name' => 'getName'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['destinationVaultId'] = isset($data['destinationVaultId']) ? $data['destinationVaultId'] : null;
        $this->container['enableAcceleration'] = isset($data['enableAcceleration']) ? $data['enableAcceleration'] : false;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4E00-\\u9FA5\\uf900-\\ufa2da-zA-Z0-9_\\-]*$/.";
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
    * Gets description
    *  复制的描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 复制的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    *  复制的目标区域
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
    * @param string $destinationRegion 复制的目标区域
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
    *  复制的目标区域的存储库ID
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
    * @param string $destinationVaultId 复制的目标区域的存储库ID
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
    *  跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
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
    * @param bool|null $enableAcceleration 跨区域复制时，是否启用加速从而缩短复制的时间，如果不指定，默认不启用加速。
    *
    * @return $this
    */
    public function setEnableAcceleration($enableAcceleration)
    {
        $this->container['enableAcceleration'] = $enableAcceleration;
        return $this;
    }

    /**
    * Gets name
    *  复制名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 复制名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

