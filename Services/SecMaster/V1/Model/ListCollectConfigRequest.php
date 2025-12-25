<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域ID
    * offset  第几页
    * limit  每页数量
    * sortKey  排序字段
    * sortDir  排序顺序
    * csvc  云服务
    * domainId  账号ID
    * queryStatistics  是否查询云服务接入指标， 默认为 True
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'csvc' => 'string',
            'domainId' => 'string',
            'queryStatistics' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域ID
    * offset  第几页
    * limit  每页数量
    * sortKey  排序字段
    * sortDir  排序顺序
    * csvc  云服务
    * domainId  账号ID
    * queryStatistics  是否查询云服务接入指标， 默认为 True
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'offset' => 'int64',
        'limit' => 'int64',
        'sortKey' => null,
        'sortDir' => null,
        'csvc' => null,
        'domainId' => null,
        'queryStatistics' => null
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
    * regionId  区域ID
    * offset  第几页
    * limit  每页数量
    * sortKey  排序字段
    * sortDir  排序顺序
    * csvc  云服务
    * domainId  账号ID
    * queryStatistics  是否查询云服务接入指标， 默认为 True
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'csvc' => 'csvc',
            'domainId' => 'domain_id',
            'queryStatistics' => 'query_statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域ID
    * offset  第几页
    * limit  每页数量
    * sortKey  排序字段
    * sortDir  排序顺序
    * csvc  云服务
    * domainId  账号ID
    * queryStatistics  是否查询云服务接入指标， 默认为 True
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'csvc' => 'setCsvc',
            'domainId' => 'setDomainId',
            'queryStatistics' => 'setQueryStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域ID
    * offset  第几页
    * limit  每页数量
    * sortKey  排序字段
    * sortDir  排序顺序
    * csvc  云服务
    * domainId  账号ID
    * queryStatistics  是否查询云服务接入指标， 默认为 True
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'csvc' => 'getCsvc',
            'domainId' => 'getDomainId',
            'queryStatistics' => 'getQueryStatistics'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['csvc'] = isset($data['csvc']) ? $data['csvc'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['queryStatistics'] = isset($data['queryStatistics']) ? $data['queryStatistics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) > 128)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['csvc']) && (mb_strlen($this->container['csvc']) < 1)) {
                $invalidProperties[] = "invalid value for 'csvc', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['domainId']) < 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 36.";
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
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets offset
    *  第几页
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
    * @param int|null $offset 第几页
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
    *  每页数量
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
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段
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
    * @param string|null $sortKey 排序字段
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
    *  排序顺序
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
    * @param string|null $sortDir 排序顺序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets csvc
    *  云服务
    *
    * @return string|null
    */
    public function getCsvc()
    {
        return $this->container['csvc'];
    }

    /**
    * Sets csvc
    *
    * @param string|null $csvc 云服务
    *
    * @return $this
    */
    public function setCsvc($csvc)
    {
        $this->container['csvc'] = $csvc;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets queryStatistics
    *  是否查询云服务接入指标， 默认为 True
    *
    * @return bool|null
    */
    public function getQueryStatistics()
    {
        return $this->container['queryStatistics'];
    }

    /**
    * Sets queryStatistics
    *
    * @param bool|null $queryStatistics 是否查询云服务接入指标， 默认为 True
    *
    * @return $this
    */
    public function setQueryStatistics($queryStatistics)
    {
        $this->container['queryStatistics'] = $queryStatistics;
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

