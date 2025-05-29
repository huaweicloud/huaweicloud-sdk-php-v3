<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDocumentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDocumentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页参数：每页返回记录个数限制
    * offset  偏移量
    * nameLike  作业名（模糊）
    * creator  创建人
    * enterpriseProjectId  企业项目ID
    * documentType  执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'string',
            'nameLike' => 'string',
            'creator' => 'string',
            'enterpriseProjectId' => 'string',
            'documentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页参数：每页返回记录个数限制
    * offset  偏移量
    * nameLike  作业名（模糊）
    * creator  创建人
    * enterpriseProjectId  企业项目ID
    * documentType  执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => null,
        'nameLike' => null,
        'creator' => null,
        'enterpriseProjectId' => null,
        'documentType' => null
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
    * limit  分页参数：每页返回记录个数限制
    * offset  偏移量
    * nameLike  作业名（模糊）
    * creator  创建人
    * enterpriseProjectId  企业项目ID
    * documentType  执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'nameLike' => 'name_like',
            'creator' => 'creator',
            'enterpriseProjectId' => 'enterprise_project_id',
            'documentType' => 'document_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页参数：每页返回记录个数限制
    * offset  偏移量
    * nameLike  作业名（模糊）
    * creator  创建人
    * enterpriseProjectId  企业项目ID
    * documentType  执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'nameLike' => 'setNameLike',
            'creator' => 'setCreator',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'documentType' => 'setDocumentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页参数：每页返回记录个数限制
    * offset  偏移量
    * nameLike  作业名（模糊）
    * creator  创建人
    * enterpriseProjectId  企业项目ID
    * documentType  执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'nameLike' => 'getNameLike',
            'creator' => 'getCreator',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'documentType' => 'getDocumentType'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['documentType'] = isset($data['documentType']) ? $data['documentType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['documentType']) && (mb_strlen($this->container['documentType']) > 32)) {
                $invalidProperties[] = "invalid value for 'documentType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['documentType']) && (mb_strlen($this->container['documentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'documentType', the character length must be bigger than or equal to 0.";
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
    * Gets limit
    *  分页参数：每页返回记录个数限制
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
    * @param int|null $limit 分页参数：每页返回记录个数限制
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets nameLike
    *  作业名（模糊）
    *
    * @return string|null
    */
    public function getNameLike()
    {
        return $this->container['nameLike'];
    }

    /**
    * Sets nameLike
    *
    * @param string|null $nameLike 作业名（模糊）
    *
    * @return $this
    */
    public function setNameLike($nameLike)
    {
        $this->container['nameLike'] = $nameLike;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets documentType
    *  执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @return string|null
    */
    public function getDocumentType()
    {
        return $this->container['documentType'];
    }

    /**
    * Sets documentType
    *
    * @param string|null $documentType 执行的作业类型 枚举：PUBLIC/NORMAL 默认NORMAL
    *
    * @return $this
    */
    public function setDocumentType($documentType)
    {
        $this->container['documentType'] = $documentType;
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

