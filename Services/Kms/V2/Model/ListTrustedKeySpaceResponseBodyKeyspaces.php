<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrustedKeySpaceResponseBodyKeyspaces implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrustedKeySpaceResponseBody_keyspaces';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * keyspaceName  **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 企业项目ID **取值范围：** 不涉及
    * type  **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    * state  **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    * description  **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyspaceId' => 'string',
            'keyspaceName' => 'string',
            'enterpriseProjectId' => 'string',
            'type' => 'int',
            'state' => 'int',
            'description' => 'string',
            'createdBy' => 'string',
            'createTime' => 'string',
            'lastModifyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * keyspaceName  **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 企业项目ID **取值范围：** 不涉及
    * type  **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    * state  **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    * description  **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyspaceId' => null,
        'keyspaceName' => null,
        'enterpriseProjectId' => null,
        'type' => 'int32',
        'state' => 'int32',
        'description' => null,
        'createdBy' => null,
        'createTime' => null,
        'lastModifyTime' => null
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
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * keyspaceName  **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 企业项目ID **取值范围：** 不涉及
    * type  **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    * state  **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    * description  **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyspaceId' => 'keyspace_id',
            'keyspaceName' => 'keyspace_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'state' => 'state',
            'description' => 'description',
            'createdBy' => 'created_by',
            'createTime' => 'create_time',
            'lastModifyTime' => 'last_modify_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * keyspaceName  **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 企业项目ID **取值范围：** 不涉及
    * type  **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    * state  **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    * description  **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'keyspaceId' => 'setKeyspaceId',
            'keyspaceName' => 'setKeyspaceName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'state' => 'setState',
            'description' => 'setDescription',
            'createdBy' => 'setCreatedBy',
            'createTime' => 'setCreateTime',
            'lastModifyTime' => 'setLastModifyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyspaceId  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    * keyspaceName  **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 企业项目ID **取值范围：** 不涉及
    * type  **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    * state  **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    * description  **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
    * createdBy  **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    * createTime  **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    * lastModifyTime  **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'keyspaceId' => 'getKeyspaceId',
            'keyspaceName' => 'getKeyspaceName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'state' => 'getState',
            'description' => 'getDescription',
            'createdBy' => 'getCreatedBy',
            'createTime' => 'getCreateTime',
            'lastModifyTime' => 'getLastModifyTime'
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
        $this->container['keyspaceId'] = isset($data['keyspaceId']) ? $data['keyspaceId'] : null;
        $this->container['keyspaceName'] = isset($data['keyspaceName']) ? $data['keyspaceName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyspaceId'] === null) {
            $invalidProperties[] = "'keyspaceId' can't be null";
        }
        if ($this->container['keyspaceName'] === null) {
            $invalidProperties[] = "'keyspaceName' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['lastModifyTime'] === null) {
            $invalidProperties[] = "'lastModifyTime' can't be null";
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
    * Gets keyspaceId
    *  **参数解释：** 密钥空间ID **取值范围：** 不涉及
    *
    * @return string
    */
    public function getKeyspaceId()
    {
        return $this->container['keyspaceId'];
    }

    /**
    * Sets keyspaceId
    *
    * @param string $keyspaceId **参数解释：** 密钥空间ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setKeyspaceId($keyspaceId)
    {
        $this->container['keyspaceId'] = $keyspaceId;
        return $this;
    }

    /**
    * Gets keyspaceName
    *  **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getKeyspaceName()
    {
        return $this->container['keyspaceName'];
    }

    /**
    * Sets keyspaceName
    *
    * @param string $keyspaceName **参数解释：** 密钥空间名称 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setKeyspaceName($keyspaceName)
    {
        $this->container['keyspaceName'] = $keyspaceName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目ID **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目ID **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type **参数解释：** 密钥空间类型 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    *
    * @return int
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param int $state **参数解释：** 密钥空间状态 **取值范围：** 1：启用，2：冻结
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
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
    * @param string|null $description **参数解释：** 密钥空间描述信息 **取值范围：** 不涉及
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
    *  **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string $createdBy **参数解释：** 密钥空间创建人 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime **参数解释：** 密钥空间创建时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastModifyTime
    *  **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @return string
    */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
    * Sets lastModifyTime
    *
    * @param string $lastModifyTime **参数解释：** 密钥空间最近更新时间 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;
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

