<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckpointCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckpointCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * id  还原点ID
    * projectId  项目ID
    * status  状态:available,deleting,protecting,deleted,error-deleting,error
    * vault  vault
    * extraInfo  extraInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'id' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'vault' => '\HuaweiCloud\SDK\Cbr\V1\Model\CheckpointPlanCreate',
            'extraInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\CheckpointExtraInfoResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * id  还原点ID
    * projectId  项目ID
    * status  状态:available,deleting,protecting,deleted,error-deleting,error
    * vault  vault
    * extraInfo  extraInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'id' => null,
        'projectId' => null,
        'status' => null,
        'vault' => null,
        'extraInfo' => null
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
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * id  还原点ID
    * projectId  项目ID
    * status  状态:available,deleting,protecting,deleted,error-deleting,error
    * vault  vault
    * extraInfo  extraInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'id' => 'id',
            'projectId' => 'project_id',
            'status' => 'status',
            'vault' => 'vault',
            'extraInfo' => 'extra_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * id  还原点ID
    * projectId  项目ID
    * status  状态:available,deleting,protecting,deleted,error-deleting,error
    * vault  vault
    * extraInfo  extraInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'vault' => 'setVault',
            'extraInfo' => 'setExtraInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    * id  还原点ID
    * projectId  项目ID
    * status  状态:available,deleting,protecting,deleted,error-deleting,error
    * vault  vault
    * extraInfo  extraInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'vault' => 'getVault',
            'extraInfo' => 'getExtraInfo'
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
    const STATUS_AVAILABLE = 'available';
    const STATUS_DELETING = 'deleting';
    const STATUS_PROTECTING = 'protecting';
    const STATUS_DELETED = 'deleted';
    const STATUS_ERROR_DELETING = 'error-deleting';
    const STATUS_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AVAILABLE,
            self::STATUS_DELETING,
            self::STATUS_PROTECTING,
            self::STATUS_DELETED,
            self::STATUS_ERROR_DELETING,
            self::STATUS_ERROR,
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vault'] = isset($data['vault']) ? $data['vault'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
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
    * Gets createdAt
    *  创建时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间，例如:\"2020-02-05T10:38:34.209782\"
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets id
    *  还原点ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 还原点ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  状态:available,deleting,protecting,deleted,error-deleting,error
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
    * @param string $status 状态:available,deleting,protecting,deleted,error-deleting,error
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vault
    *  vault
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\CheckpointPlanCreate|null
    */
    public function getVault()
    {
        return $this->container['vault'];
    }

    /**
    * Sets vault
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\CheckpointPlanCreate|null $vault vault
    *
    * @return $this
    */
    public function setVault($vault)
    {
        $this->container['vault'] = $vault;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\CheckpointExtraInfoResp|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\CheckpointExtraInfoResp|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
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

