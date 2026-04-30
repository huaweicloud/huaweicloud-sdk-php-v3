<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAppAccessKeyListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAppAccessKeyListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  应用ID
    * limit  指定查询返回记录条数，默认值10
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * keyName  访问密钥名称
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'keyName' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  应用ID
    * limit  指定查询返回记录条数，默认值10
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * keyName  访问密钥名称
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'keyName' => null,
        'sortKey' => null,
        'sortDir' => null
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
    * appId  应用ID
    * limit  指定查询返回记录条数，默认值10
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * keyName  访问密钥名称
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'keyName' => 'key_name',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  应用ID
    * limit  指定查询返回记录条数，默认值10
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * keyName  访问密钥名称
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'keyName' => 'setKeyName',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  应用ID
    * limit  指定查询返回记录条数，默认值10
    * offset  索引位置，从offset指定的下一条数据开始查询默认值为0
    * keyName  访问密钥名称
    * sortKey  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
    * sortDir  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'keyName' => 'getKeyName',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appId'] === null) {
            $invalidProperties[] = "'appId' can't be null";
        }
            if ((mb_strlen($this->container['appId']) > 36)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['appId']) < 32)) {
                $invalidProperties[] = "invalid value for 'appId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets appId
    *  应用ID
    *
    * @return string
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string $appId 应用ID
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets limit
    *  指定查询返回记录条数，默认值10
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
    * @param int|null $limit 指定查询返回记录条数，默认值10
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
    *  索引位置，从offset指定的下一条数据开始查询默认值为0
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
    * @param int|null $offset 索引位置，从offset指定的下一条数据开始查询默认值为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets keyName
    *  访问密钥名称
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 访问密钥名称
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
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
    * @param string|null $sortKey 排序属性，目前支持以下属性： - **create_time** : 应用的创建时间（默认）
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
    *  排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
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
    * @param string|null $sortDir 排序方向，支持以下值： - **DESC** : 降序（默认） - **ASC** : 升序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
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

