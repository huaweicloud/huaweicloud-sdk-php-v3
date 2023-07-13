<?php

namespace HuaweiCloud\SDK\Eps\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEnterpriseProjectRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEnterpriseProjectRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  企业项目ID，0表示默认企业项目
    * limit  查询记录数默认为1000，limit最多为1000, 最小值为1
    * name  企业项目名称，支持模糊搜索
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    * sortDir  降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
    * sortKey  返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
    * status  企业项目状态。 1--启用，2--停用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'limit' => 'int',
            'name' => 'string',
            'offset' => 'int',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  企业项目ID，0表示默认企业项目
    * limit  查询记录数默认为1000，limit最多为1000, 最小值为1
    * name  企业项目名称，支持模糊搜索
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    * sortDir  降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
    * sortKey  返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
    * status  企业项目状态。 1--启用，2--停用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'limit' => 'int32',
        'name' => null,
        'offset' => 'int32',
        'sortDir' => null,
        'sortKey' => null,
        'status' => 'int32'
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
    * id  企业项目ID，0表示默认企业项目
    * limit  查询记录数默认为1000，limit最多为1000, 最小值为1
    * name  企业项目名称，支持模糊搜索
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    * sortDir  降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
    * sortKey  返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
    * status  企业项目状态。 1--启用，2--停用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'limit' => 'limit',
            'name' => 'name',
            'offset' => 'offset',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  企业项目ID，0表示默认企业项目
    * limit  查询记录数默认为1000，limit最多为1000, 最小值为1
    * name  企业项目名称，支持模糊搜索
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    * sortDir  降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
    * sortKey  返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
    * status  企业项目状态。 1--启用，2--停用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'limit' => 'setLimit',
            'name' => 'setName',
            'offset' => 'setOffset',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  企业项目ID，0表示默认企业项目
    * limit  查询记录数默认为1000，limit最多为1000, 最小值为1
    * name  企业项目名称，支持模糊搜索
    * offset  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    * sortDir  降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
    * sortKey  返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
    * status  企业项目状态。 1--启用，2--停用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'limit' => 'getLimit',
            'name' => 'getName',
            'offset' => 'getOffset',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'status' => 'getStatus'
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
    const SORT_DIR_DESC = 'desc';
    const SORT_DIR_ASC = 'asc';
    const SORT_KEY_CREATED_AT = 'created_at';
    const SORT_KEY_UPDATED_AT = 'updated_at';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_DESC,
            self::SORT_DIR_ASC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_CREATED_AT,
            self::SORT_KEY_UPDATED_AT,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
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
    *  企业项目ID，0表示默认企业项目
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
    * @param string|null $id 企业项目ID，0表示默认企业项目
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数默认为1000，limit最多为1000, 最小值为1
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
    * @param int|null $limit 查询记录数默认为1000，limit最多为1000, 最小值为1
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  企业项目名称，支持模糊搜索
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
    * @param string|null $name 企业项目名称，支持模糊搜索
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
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
    * @param string|null $sortDir 降序或升序,默认为“desc” 。desc表示降序 。asc 表示升序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
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
    * @param string|null $sortKey 返回结果按该关键字排序（支持updated_at等关键字，默认为“created_at”）
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets status
    *  企业项目状态。 1--启用，2--停用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 企业项目状态。 1--启用，2--停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

