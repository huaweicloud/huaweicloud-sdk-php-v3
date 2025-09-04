<?php

namespace HuaweiCloud\SDK\Eps\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EpDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EpDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  企业项目ID
    * name  企业项目名称
    * description  企业项目描述
    * status  企业项目状态。1启用，2停用
    * createdAt  创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    * updatedAt  修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    * type  项目类型： - prod：商用项目 - poc：测试项目
    * deleteFlag  删除标识，false-未删除；true-已删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'status' => 'int',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'type' => 'string',
            'deleteFlag' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  企业项目ID
    * name  企业项目名称
    * description  企业项目描述
    * status  企业项目状态。1启用，2停用
    * createdAt  创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    * updatedAt  修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    * type  项目类型： - prod：商用项目 - poc：测试项目
    * deleteFlag  删除标识，false-未删除；true-已删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => 'int32',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'type' => null,
        'deleteFlag' => null
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
    * id  企业项目ID
    * name  企业项目名称
    * description  企业项目描述
    * status  企业项目状态。1启用，2停用
    * createdAt  创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    * updatedAt  修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    * type  项目类型： - prod：商用项目 - poc：测试项目
    * deleteFlag  删除标识，false-未删除；true-已删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'type' => 'type',
            'deleteFlag' => 'delete_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  企业项目ID
    * name  企业项目名称
    * description  企业项目描述
    * status  企业项目状态。1启用，2停用
    * createdAt  创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    * updatedAt  修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    * type  项目类型： - prod：商用项目 - poc：测试项目
    * deleteFlag  删除标识，false-未删除；true-已删除
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'type' => 'setType',
            'deleteFlag' => 'setDeleteFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  企业项目ID
    * name  企业项目名称
    * description  企业项目描述
    * status  企业项目状态。1启用，2停用
    * createdAt  创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    * updatedAt  修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    * type  项目类型： - prod：商用项目 - poc：测试项目
    * deleteFlag  删除标识，false-未删除；true-已删除
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'type' => 'getType',
            'deleteFlag' => 'getDeleteFlag'
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
    const TYPE_PROD = 'prod';
    const TYPE_POC = 'poc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PROD,
            self::TYPE_POC,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['deleteFlag'] = isset($data['deleteFlag']) ? $data['deleteFlag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['deleteFlag'] === null) {
            $invalidProperties[] = "'deleteFlag' can't be null";
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
    * Gets id
    *  企业项目ID
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
    * @param string $id 企业项目ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  企业项目名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 企业项目名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  企业项目描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 企业项目描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  企业项目状态。1启用，2停用
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 企业项目状态。1启用，2停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建时间，格式为UTC格式。如：2018-05-18T06:49:06Z。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 修改时间，格式为UTC格式。如：2018-05-28T02:21:36Z。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets type
    *  项目类型： - prod：商用项目 - poc：测试项目
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 项目类型： - prod：商用项目 - poc：测试项目
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets deleteFlag
    *  删除标识，false-未删除；true-已删除
    *
    * @return bool
    */
    public function getDeleteFlag()
    {
        return $this->container['deleteFlag'];
    }

    /**
    * Sets deleteFlag
    *
    * @param bool $deleteFlag 删除标识，false-未删除；true-已删除
    *
    * @return $this
    */
    public function setDeleteFlag($deleteFlag)
    {
        $this->container['deleteFlag'] = $deleteFlag;
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

