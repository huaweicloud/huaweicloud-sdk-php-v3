<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMessageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMessageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间id
    * dlmType  dlm版本类型
    * contentType  资源类型
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据
    * apiName  api名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'dlmType' => 'string',
            'contentType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'apiName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间id
    * dlmType  dlm版本类型
    * contentType  资源类型
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据
    * apiName  api名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'dlmType' => null,
        'contentType' => null,
        'offset' => null,
        'limit' => null,
        'apiName' => null
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
    * workspace  工作空间id
    * dlmType  dlm版本类型
    * contentType  资源类型
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据
    * apiName  api名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'dlmType' => 'Dlm-Type',
            'contentType' => 'Content-Type',
            'offset' => 'offset',
            'limit' => 'limit',
            'apiName' => 'api_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间id
    * dlmType  dlm版本类型
    * contentType  资源类型
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据
    * apiName  api名称
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'dlmType' => 'setDlmType',
            'contentType' => 'setContentType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'apiName' => 'setApiName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间id
    * dlmType  dlm版本类型
    * contentType  资源类型
    * offset  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    * limit  查询条数, 即查询Y条数据
    * apiName  api名称
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'dlmType' => 'getDlmType',
            'contentType' => 'getContentType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'apiName' => 'getApiName'
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
    const DLM_TYPE_SHARED = 'SHARED';
    const DLM_TYPE_EXCLUSIVE = 'EXCLUSIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDlmTypeAllowableValues()
    {
        return [
            self::DLM_TYPE_SHARED,
            self::DLM_TYPE_EXCLUSIVE,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['dlmType'] = isset($data['dlmType']) ? $data['dlmType'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['dlmType'] === null) {
            $invalidProperties[] = "'dlmType' can't be null";
        }
            $allowedValues = $this->getDlmTypeAllowableValues();
                if (!is_null($this->container['dlmType']) && !in_array($this->container['dlmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dlmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
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
    * Gets workspace
    *  工作空间id
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间id
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets dlmType
    *  dlm版本类型
    *
    * @return string
    */
    public function getDlmType()
    {
        return $this->container['dlmType'];
    }

    /**
    * Sets dlmType
    *
    * @param string $dlmType dlm版本类型
    *
    * @return $this
    */
    public function setDlmType($dlmType)
    {
        $this->container['dlmType'] = $dlmType;
        return $this;
    }

    /**
    * Gets contentType
    *  资源类型
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 资源类型
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets offset
    *  查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
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
    * @param int|null $offset 查询起始坐标, 即跳过前X条数据。仅支持0或limit的整数倍，不满足则向下取整。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询条数, 即查询Y条数据
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
    * @param int|null $limit 查询条数, 即查询Y条数据
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets apiName
    *  api名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName api名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
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
