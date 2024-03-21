<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecuritySecrecyLevelResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecuritySecrecyLevelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secrecyLevelId  密级id
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级等级
    * description  密级描述
    * createdBy  创建者
    * createdAt  创建时间
    * updatedBy  更新者
    * updatedAt  更新时间
    * instanceId  DataArts实例ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secrecyLevelId' => 'string',
            'secrecyLevelName' => 'string',
            'secrecyLevelNumber' => 'int',
            'description' => 'string',
            'createdBy' => 'string',
            'createdAt' => 'int',
            'updatedBy' => 'string',
            'updatedAt' => 'int',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secrecyLevelId  密级id
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级等级
    * description  密级描述
    * createdBy  创建者
    * createdAt  创建时间
    * updatedBy  更新者
    * updatedAt  更新时间
    * instanceId  DataArts实例ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secrecyLevelId' => null,
        'secrecyLevelName' => null,
        'secrecyLevelNumber' => null,
        'description' => null,
        'createdBy' => null,
        'createdAt' => 'int64',
        'updatedBy' => null,
        'updatedAt' => 'int64',
        'instanceId' => null
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
    * secrecyLevelId  密级id
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级等级
    * description  密级描述
    * createdBy  创建者
    * createdAt  创建时间
    * updatedBy  更新者
    * updatedAt  更新时间
    * instanceId  DataArts实例ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secrecyLevelId' => 'secrecy_level_id',
            'secrecyLevelName' => 'secrecy_level_name',
            'secrecyLevelNumber' => 'secrecy_level_number',
            'description' => 'description',
            'createdBy' => 'created_by',
            'createdAt' => 'created_at',
            'updatedBy' => 'updated_by',
            'updatedAt' => 'updated_at',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secrecyLevelId  密级id
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级等级
    * description  密级描述
    * createdBy  创建者
    * createdAt  创建时间
    * updatedBy  更新者
    * updatedAt  更新时间
    * instanceId  DataArts实例ID
    *
    * @var string[]
    */
    protected static $setters = [
            'secrecyLevelId' => 'setSecrecyLevelId',
            'secrecyLevelName' => 'setSecrecyLevelName',
            'secrecyLevelNumber' => 'setSecrecyLevelNumber',
            'description' => 'setDescription',
            'createdBy' => 'setCreatedBy',
            'createdAt' => 'setCreatedAt',
            'updatedBy' => 'setUpdatedBy',
            'updatedAt' => 'setUpdatedAt',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secrecyLevelId  密级id
    * secrecyLevelName  密级名称
    * secrecyLevelNumber  密级等级
    * description  密级描述
    * createdBy  创建者
    * createdAt  创建时间
    * updatedBy  更新者
    * updatedAt  更新时间
    * instanceId  DataArts实例ID
    *
    * @var string[]
    */
    protected static $getters = [
            'secrecyLevelId' => 'getSecrecyLevelId',
            'secrecyLevelName' => 'getSecrecyLevelName',
            'secrecyLevelNumber' => 'getSecrecyLevelNumber',
            'description' => 'getDescription',
            'createdBy' => 'getCreatedBy',
            'createdAt' => 'getCreatedAt',
            'updatedBy' => 'getUpdatedBy',
            'updatedAt' => 'getUpdatedAt',
            'instanceId' => 'getInstanceId'
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
        $this->container['secrecyLevelId'] = isset($data['secrecyLevelId']) ? $data['secrecyLevelId'] : null;
        $this->container['secrecyLevelName'] = isset($data['secrecyLevelName']) ? $data['secrecyLevelName'] : null;
        $this->container['secrecyLevelNumber'] = isset($data['secrecyLevelNumber']) ? $data['secrecyLevelNumber'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevelName']) && (mb_strlen($this->container['secrecyLevelName']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelName']) && (mb_strlen($this->container['secrecyLevelName']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevelNumber']) && ($this->container['secrecyLevelNumber'] > 10)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelNumber', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['secrecyLevelNumber']) && ($this->container['secrecyLevelNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelNumber', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) > 128)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['updatedBy']) && (mb_strlen($this->container['updatedBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updatedAt']) && ($this->container['updatedAt'] < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
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
    * Gets secrecyLevelId
    *  密级id
    *
    * @return string|null
    */
    public function getSecrecyLevelId()
    {
        return $this->container['secrecyLevelId'];
    }

    /**
    * Sets secrecyLevelId
    *
    * @param string|null $secrecyLevelId 密级id
    *
    * @return $this
    */
    public function setSecrecyLevelId($secrecyLevelId)
    {
        $this->container['secrecyLevelId'] = $secrecyLevelId;
        return $this;
    }

    /**
    * Gets secrecyLevelName
    *  密级名称
    *
    * @return string|null
    */
    public function getSecrecyLevelName()
    {
        return $this->container['secrecyLevelName'];
    }

    /**
    * Sets secrecyLevelName
    *
    * @param string|null $secrecyLevelName 密级名称
    *
    * @return $this
    */
    public function setSecrecyLevelName($secrecyLevelName)
    {
        $this->container['secrecyLevelName'] = $secrecyLevelName;
        return $this;
    }

    /**
    * Gets secrecyLevelNumber
    *  密级等级
    *
    * @return int|null
    */
    public function getSecrecyLevelNumber()
    {
        return $this->container['secrecyLevelNumber'];
    }

    /**
    * Sets secrecyLevelNumber
    *
    * @param int|null $secrecyLevelNumber 密级等级
    *
    * @return $this
    */
    public function setSecrecyLevelNumber($secrecyLevelNumber)
    {
        $this->container['secrecyLevelNumber'] = $secrecyLevelNumber;
        return $this;
    }

    /**
    * Gets description
    *  密级描述
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
    * @param string|null $description 密级描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建者
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedBy
    *  更新者
    *
    * @return string|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string|null $updatedBy 更新者
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets instanceId
    *  DataArts实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId DataArts实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

