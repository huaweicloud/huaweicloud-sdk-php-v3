<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppBindApiInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppBindApiInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  API ID
    * name  API名称
    * description  API描述
    * approvalTime  审核时间
    * manager  API 审核人名称
    * deadline  使用截止时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'approvalTime' => 'int',
            'manager' => 'string',
            'deadline' => 'int',
            'relationshipType' => 'string',
            'staticParams' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StaticParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  API ID
    * name  API名称
    * description  API描述
    * approvalTime  审核时间
    * manager  API 审核人名称
    * deadline  使用截止时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'approvalTime' => 'int64',
        'manager' => null,
        'deadline' => 'int64',
        'relationshipType' => null,
        'staticParams' => null
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
    * id  API ID
    * name  API名称
    * description  API描述
    * approvalTime  审核时间
    * manager  API 审核人名称
    * deadline  使用截止时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'approvalTime' => 'approval_time',
            'manager' => 'manager',
            'deadline' => 'deadline',
            'relationshipType' => 'relationship_type',
            'staticParams' => 'static_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  API ID
    * name  API名称
    * description  API描述
    * approvalTime  审核时间
    * manager  API 审核人名称
    * deadline  使用截止时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'approvalTime' => 'setApprovalTime',
            'manager' => 'setManager',
            'deadline' => 'setDeadline',
            'relationshipType' => 'setRelationshipType',
            'staticParams' => 'setStaticParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  API ID
    * name  API名称
    * description  API描述
    * approvalTime  审核时间
    * manager  API 审核人名称
    * deadline  使用截止时间
    * relationshipType  绑定关系
    * staticParams  静态参数列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'approvalTime' => 'getApprovalTime',
            'manager' => 'getManager',
            'deadline' => 'getDeadline',
            'relationshipType' => 'getRelationshipType',
            'staticParams' => 'getStaticParams'
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
    const RELATIONSHIP_TYPE_LINK_WAITING_CHECK = 'LINK_WAITING_CHECK';
    const RELATIONSHIP_TYPE_LINKED = 'LINKED';
    const RELATIONSHIP_TYPE_OFFLINE_WAITING_CHECK = 'OFFLINE_WAITING_CHECK';
    const RELATIONSHIP_TYPE_RENEW_WAITING_CHECK = 'RENEW_WAITING_CHECK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRelationshipTypeAllowableValues()
    {
        return [
            self::RELATIONSHIP_TYPE_LINK_WAITING_CHECK,
            self::RELATIONSHIP_TYPE_LINKED,
            self::RELATIONSHIP_TYPE_OFFLINE_WAITING_CHECK,
            self::RELATIONSHIP_TYPE_RENEW_WAITING_CHECK,
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
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['manager'] = isset($data['manager']) ? $data['manager'] : null;
        $this->container['deadline'] = isset($data['deadline']) ? $data['deadline'] : null;
        $this->container['relationshipType'] = isset($data['relationshipType']) ? $data['relationshipType'] : null;
        $this->container['staticParams'] = isset($data['staticParams']) ? $data['staticParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRelationshipTypeAllowableValues();
                if (!is_null($this->container['relationshipType']) && !in_array($this->container['relationshipType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'relationshipType', must be one of '%s'",
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
    * Gets id
    *  API ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id API ID
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
    *  API名称
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
    * @param string|null $name API名称
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
    *  API描述
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
    * @param string|null $description API描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets approvalTime
    *  审核时间
    *
    * @return int|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param int|null $approvalTime 审核时间
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets manager
    *  API 审核人名称
    *
    * @return string|null
    */
    public function getManager()
    {
        return $this->container['manager'];
    }

    /**
    * Sets manager
    *
    * @param string|null $manager API 审核人名称
    *
    * @return $this
    */
    public function setManager($manager)
    {
        $this->container['manager'] = $manager;
        return $this;
    }

    /**
    * Gets deadline
    *  使用截止时间
    *
    * @return int|null
    */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
    * Sets deadline
    *
    * @param int|null $deadline 使用截止时间
    *
    * @return $this
    */
    public function setDeadline($deadline)
    {
        $this->container['deadline'] = $deadline;
        return $this;
    }

    /**
    * Gets relationshipType
    *  绑定关系
    *
    * @return string|null
    */
    public function getRelationshipType()
    {
        return $this->container['relationshipType'];
    }

    /**
    * Sets relationshipType
    *
    * @param string|null $relationshipType 绑定关系
    *
    * @return $this
    */
    public function setRelationshipType($relationshipType)
    {
        $this->container['relationshipType'] = $relationshipType;
        return $this;
    }

    /**
    * Gets staticParams
    *  静态参数列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StaticParam[]|null
    */
    public function getStaticParams()
    {
        return $this->container['staticParams'];
    }

    /**
    * Sets staticParams
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StaticParam[]|null $staticParams 静态参数列表
    *
    * @return $this
    */
    public function setStaticParams($staticParams)
    {
        $this->container['staticParams'] = $staticParams;
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

