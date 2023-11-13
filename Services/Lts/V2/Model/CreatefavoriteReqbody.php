<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatefavoriteReqbody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatefavoriteReqbody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * isGlobal  是否支持全局化，必填true，否则创建不了收藏
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'epsId' => 'string',
            'favoriteResourceId' => 'string',
            'favoriteResourceType' => 'string',
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'logStreamId' => 'string',
            'logStreamName' => 'string',
            'isGlobal' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * isGlobal  是否支持全局化，必填true，否则创建不了收藏
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'epsId' => null,
        'favoriteResourceId' => null,
        'favoriteResourceType' => null,
        'logGroupId' => null,
        'logGroupName' => null,
        'logStreamId' => null,
        'logStreamName' => null,
        'isGlobal' => null
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
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * isGlobal  是否支持全局化，必填true，否则创建不了收藏
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'epsId' => 'eps_id',
            'favoriteResourceId' => 'favorite_resource_id',
            'favoriteResourceType' => 'favorite_resource_type',
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'logStreamId' => 'log_stream_id',
            'logStreamName' => 'log_stream_name',
            'isGlobal' => 'is_global'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * isGlobal  是否支持全局化，必填true，否则创建不了收藏
    *
    * @var string[]
    */
    protected static $setters = [
            'epsId' => 'setEpsId',
            'favoriteResourceId' => 'setFavoriteResourceId',
            'favoriteResourceType' => 'setFavoriteResourceType',
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'logStreamId' => 'setLogStreamId',
            'logStreamName' => 'setLogStreamName',
            'isGlobal' => 'setIsGlobal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * epsId  企业项目id
    * favoriteResourceId  收藏资源id
    * favoriteResourceType  收藏资源类型
    * logGroupId  日志组id
    * logGroupName  日志组名称
    * logStreamId  日志流id
    * logStreamName  日志流名称
    * isGlobal  是否支持全局化，必填true，否则创建不了收藏
    *
    * @var string[]
    */
    protected static $getters = [
            'epsId' => 'getEpsId',
            'favoriteResourceId' => 'getFavoriteResourceId',
            'favoriteResourceType' => 'getFavoriteResourceType',
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'logStreamId' => 'getLogStreamId',
            'logStreamName' => 'getLogStreamName',
            'isGlobal' => 'getIsGlobal'
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
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['favoriteResourceId'] = isset($data['favoriteResourceId']) ? $data['favoriteResourceId'] : null;
        $this->container['favoriteResourceType'] = isset($data['favoriteResourceType']) ? $data['favoriteResourceType'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStreamName'] = isset($data['logStreamName']) ? $data['logStreamName'] : null;
        $this->container['isGlobal'] = isset($data['isGlobal']) ? $data['isGlobal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['favoriteResourceId'] === null) {
            $invalidProperties[] = "'favoriteResourceId' can't be null";
        }
        if ($this->container['favoriteResourceType'] === null) {
            $invalidProperties[] = "'favoriteResourceType' can't be null";
        }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
        if ($this->container['isGlobal'] === null) {
            $invalidProperties[] = "'isGlobal' can't be null";
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
    * Gets epsId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 企业项目id
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets favoriteResourceId
    *  收藏资源id
    *
    * @return string
    */
    public function getFavoriteResourceId()
    {
        return $this->container['favoriteResourceId'];
    }

    /**
    * Sets favoriteResourceId
    *
    * @param string $favoriteResourceId 收藏资源id
    *
    * @return $this
    */
    public function setFavoriteResourceId($favoriteResourceId)
    {
        $this->container['favoriteResourceId'] = $favoriteResourceId;
        return $this;
    }

    /**
    * Gets favoriteResourceType
    *  收藏资源类型
    *
    * @return string
    */
    public function getFavoriteResourceType()
    {
        return $this->container['favoriteResourceType'];
    }

    /**
    * Sets favoriteResourceType
    *
    * @param string $favoriteResourceType 收藏资源类型
    *
    * @return $this
    */
    public function setFavoriteResourceType($favoriteResourceType)
    {
        $this->container['favoriteResourceType'] = $favoriteResourceType;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组id
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  日志组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 日志组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流id
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 日志流id
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStreamName
    *  日志流名称
    *
    * @return string|null
    */
    public function getLogStreamName()
    {
        return $this->container['logStreamName'];
    }

    /**
    * Sets logStreamName
    *
    * @param string|null $logStreamName 日志流名称
    *
    * @return $this
    */
    public function setLogStreamName($logStreamName)
    {
        $this->container['logStreamName'] = $logStreamName;
        return $this;
    }

    /**
    * Gets isGlobal
    *  是否支持全局化，必填true，否则创建不了收藏
    *
    * @return bool
    */
    public function getIsGlobal()
    {
        return $this->container['isGlobal'];
    }

    /**
    * Sets isGlobal
    *
    * @param bool $isGlobal 是否支持全局化，必填true，否则创建不了收藏
    *
    * @return $this
    */
    public function setIsGlobal($isGlobal)
    {
        $this->container['isGlobal'] = $isGlobal;
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

