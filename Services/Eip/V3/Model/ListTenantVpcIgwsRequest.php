<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTenantVpcIgwsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTenantVpcIgwsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * id  虚拟IGW的uuid
    * vpcId  虚拟igw所在的vpcid
    * name  虚拟igw的名称
    * sortKey  排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string',
            'id' => 'string',
            'vpcId' => 'string',
            'name' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * id  虚拟IGW的uuid
    * vpcId  虚拟igw所在的vpcid
    * name  虚拟igw的名称
    * sortKey  排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'id' => null,
        'vpcId' => null,
        'name' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32'
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
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * id  虚拟IGW的uuid
    * vpcId  虚拟igw所在的vpcid
    * name  虚拟igw的名称
    * sortKey  排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'id' => 'id',
            'vpcId' => 'vpc_id',
            'name' => 'name',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * id  虚拟IGW的uuid
    * vpcId  虚拟igw所在的vpcid
    * name  虚拟igw的名称
    * sortKey  排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'id' => 'setId',
            'vpcId' => 'setVpcId',
            'name' => 'setName',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * id  虚拟IGW的uuid
    * vpcId  虚拟igw所在的vpcid
    * name  虚拟igw的名称
    * sortKey  排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'id' => 'getId',
            'vpcId' => 'getVpcId',
            'name' => 'getName',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) < 0)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets fields
    *  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    *
    * @return string|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string|null $fields 形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets id
    *  虚拟IGW的uuid
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
    * @param string|null $id 虚拟IGW的uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟igw所在的vpcid
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟igw所在的vpcid
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets name
    *  虚拟igw的名称
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
    * @param string|null $name 虚拟igw的名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序，形式为\"sort_key=i2a_id&sort_dir=asc\"  支持字段：id/created_at/updated_at
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方向  取值范围：asc、desc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方向  取值范围：asc、desc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

