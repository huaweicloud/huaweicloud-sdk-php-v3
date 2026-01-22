<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPublicipPoolTypesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPublicipPoolTypesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * limit  - 功能说明：每页返回的资源个数 - 取值范围：1~2000
    * fields  - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
    * sortKey  - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
    * sortDir  - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
    * id  - 功能说明：根据id过滤
    * name  - 功能说明：根据name过滤
    * size  - 功能说明：根据size过滤
    * status  - 功能说明：根据status过滤
    * type  - 功能说明：根据type过滤
    * description  - 功能说明：根据description过滤
    * publicBorderGroup  - 功能说明：根据public_border_group过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'fields' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'id' => 'string',
            'name' => 'string',
            'size' => 'int',
            'status' => 'string',
            'type' => 'string',
            'description' => 'string',
            'publicBorderGroup' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * limit  - 功能说明：每页返回的资源个数 - 取值范围：1~2000
    * fields  - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
    * sortKey  - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
    * sortDir  - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
    * id  - 功能说明：根据id过滤
    * name  - 功能说明：根据name过滤
    * size  - 功能说明：根据size过滤
    * status  - 功能说明：根据status过滤
    * type  - 功能说明：根据type过滤
    * description  - 功能说明：根据description过滤
    * publicBorderGroup  - 功能说明：根据public_border_group过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'fields' => null,
        'sortKey' => null,
        'sortDir' => null,
        'id' => null,
        'name' => null,
        'size' => null,
        'status' => null,
        'type' => null,
        'description' => null,
        'publicBorderGroup' => null
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
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * limit  - 功能说明：每页返回的资源个数 - 取值范围：1~2000
    * fields  - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
    * sortKey  - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
    * sortDir  - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
    * id  - 功能说明：根据id过滤
    * name  - 功能说明：根据name过滤
    * size  - 功能说明：根据size过滤
    * status  - 功能说明：根据status过滤
    * type  - 功能说明：根据type过滤
    * description  - 功能说明：根据description过滤
    * publicBorderGroup  - 功能说明：根据public_border_group过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'fields' => 'fields',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'id' => 'id',
            'name' => 'name',
            'size' => 'size',
            'status' => 'status',
            'type' => 'type',
            'description' => 'description',
            'publicBorderGroup' => 'public_border_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * limit  - 功能说明：每页返回的资源个数 - 取值范围：1~2000
    * fields  - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
    * sortKey  - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
    * sortDir  - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
    * id  - 功能说明：根据id过滤
    * name  - 功能说明：根据name过滤
    * size  - 功能说明：根据size过滤
    * status  - 功能说明：根据status过滤
    * type  - 功能说明：根据type过滤
    * description  - 功能说明：根据description过滤
    * publicBorderGroup  - 功能说明：根据public_border_group过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'fields' => 'setFields',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'id' => 'setId',
            'name' => 'setName',
            'size' => 'setSize',
            'status' => 'setStatus',
            'type' => 'setType',
            'description' => 'setDescription',
            'publicBorderGroup' => 'setPublicBorderGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    * limit  - 功能说明：每页返回的资源个数 - 取值范围：1~2000
    * fields  - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
    * sortKey  - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
    * sortDir  - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
    * id  - 功能说明：根据id过滤
    * name  - 功能说明：根据name过滤
    * size  - 功能说明：根据size过滤
    * status  - 功能说明：根据status过滤
    * type  - 功能说明：根据type过滤
    * description  - 功能说明：根据description过滤
    * publicBorderGroup  - 功能说明：根据public_border_group过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'fields' => 'getFields',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'id' => 'getId',
            'name' => 'getName',
            'size' => 'getSize',
            'status' => 'getStatus',
            'type' => 'getType',
            'description' => 'getDescription',
            'publicBorderGroup' => 'getPublicBorderGroup'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) < 0)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 16)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 999999)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
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
    * Gets marker
    *  - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker - 功能说明：分页查询起始的资源ID，为空时为查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  - 功能说明：每页返回的资源个数 - 取值范围：1~2000
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
    * @param int|null $limit - 功能说明：每页返回的资源个数 - 取值范围：1~2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets fields
    *  - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
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
    * @param string|null $fields - 功能说明：查询字段，形式为“fields=id&fields=name&...” - 支持字段：id/name/size/used/project_id/status/billing_info/created_at/updated_at/type/shared/is_common/description/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets sortKey
    *  - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
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
    * @param string|null $sortKey - 功能说明：排序字段，形式为“sort_key=id&sort_dir=asc” - 支持字段：id/name/created_at/updated_at/public_border_group
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
    *  - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
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
    * @param string|null $sortDir - 功能说明：排序方向 - 取值范围：   - asc 顺序   - desc 倒序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets id
    *  - 功能说明：根据id过滤
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
    * @param string|null $id - 功能说明：根据id过滤
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
    *  - 功能说明：根据name过滤
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
    * @param string|null $name - 功能说明：根据name过滤
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  - 功能说明：根据size过滤
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size - 功能说明：根据size过滤
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  - 功能说明：根据status过滤
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status - 功能说明：根据status过滤
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  - 功能说明：根据type过滤
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type - 功能说明：根据type过滤
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  - 功能说明：根据description过滤
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
    * @param string|null $description - 功能说明：根据description过滤
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  - 功能说明：根据public_border_group过滤
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup - 功能说明：根据public_border_group过滤
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
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

