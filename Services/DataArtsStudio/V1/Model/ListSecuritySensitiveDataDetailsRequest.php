<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecuritySensitiveDataDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecuritySensitiveDataDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  limit
    * offset  offset
    * marker  用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
    * databaseName  数据库名称。
    * findStartTime  敏感数据发现开始时间。
    * findEndTime  敏感数据发现结束时间。
    * orderBy  排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    * orderByAsc  是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string',
            'databaseName' => 'string',
            'findStartTime' => 'int',
            'findEndTime' => 'int',
            'orderBy' => 'string',
            'orderByAsc' => 'bool',
            'workspace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  limit
    * offset  offset
    * marker  用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
    * databaseName  数据库名称。
    * findStartTime  敏感数据发现开始时间。
    * findEndTime  敏感数据发现结束时间。
    * orderBy  排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    * orderByAsc  是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'offset' => null,
        'marker' => null,
        'databaseName' => null,
        'findStartTime' => 'int64',
        'findEndTime' => 'int64',
        'orderBy' => null,
        'orderByAsc' => null,
        'workspace' => null
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
    * limit  limit
    * offset  offset
    * marker  用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
    * databaseName  数据库名称。
    * findStartTime  敏感数据发现开始时间。
    * findEndTime  敏感数据发现结束时间。
    * orderBy  排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    * orderByAsc  是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker',
            'databaseName' => 'database_name',
            'findStartTime' => 'find_start_time',
            'findEndTime' => 'find_end_time',
            'orderBy' => 'order_by',
            'orderByAsc' => 'order_by_asc',
            'workspace' => 'workspace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  limit
    * offset  offset
    * marker  用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
    * databaseName  数据库名称。
    * findStartTime  敏感数据发现开始时间。
    * findEndTime  敏感数据发现结束时间。
    * orderBy  排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    * orderByAsc  是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker',
            'databaseName' => 'setDatabaseName',
            'findStartTime' => 'setFindStartTime',
            'findEndTime' => 'setFindEndTime',
            'orderBy' => 'setOrderBy',
            'orderByAsc' => 'setOrderByAsc',
            'workspace' => 'setWorkspace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  limit
    * offset  offset
    * marker  用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
    * databaseName  数据库名称。
    * findStartTime  敏感数据发现开始时间。
    * findEndTime  敏感数据发现结束时间。
    * orderBy  排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    * orderByAsc  是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker',
            'databaseName' => 'getDatabaseName',
            'findStartTime' => 'getFindStartTime',
            'findEndTime' => 'getFindEndTime',
            'orderBy' => 'getOrderBy',
            'orderByAsc' => 'getOrderByAsc',
            'workspace' => 'getWorkspace'
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
    const ORDER_BY_FIND_TIME = 'FIND_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_FIND_TIME,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['findStartTime'] = isset($data['findStartTime']) ? $data['findStartTime'] : null;
        $this->container['findEndTime'] = isset($data['findEndTime']) ? $data['findEndTime'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['orderByAsc'] = isset($data['orderByAsc']) ? $data['orderByAsc'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 128)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['findStartTime']) && ($this->container['findStartTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'findStartTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['findStartTime']) && ($this->container['findStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'findStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['findEndTime']) && ($this->container['findEndTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'findEndTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['findEndTime']) && ($this->container['findEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'findEndTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) > 20)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
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
    *  limit
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
    * @param int|null $limit limit
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
    *  offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets marker
    *  用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
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
    * @param string|null $marker 用于游标分页，表示查询ID大于该值的记录（不包含该ID），仅支持向前翻页，且不可与offset参数同时使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名称。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets findStartTime
    *  敏感数据发现开始时间。
    *
    * @return int|null
    */
    public function getFindStartTime()
    {
        return $this->container['findStartTime'];
    }

    /**
    * Sets findStartTime
    *
    * @param int|null $findStartTime 敏感数据发现开始时间。
    *
    * @return $this
    */
    public function setFindStartTime($findStartTime)
    {
        $this->container['findStartTime'] = $findStartTime;
        return $this;
    }

    /**
    * Gets findEndTime
    *  敏感数据发现结束时间。
    *
    * @return int|null
    */
    public function getFindEndTime()
    {
        return $this->container['findEndTime'];
    }

    /**
    * Sets findEndTime
    *
    * @param int|null $findEndTime 敏感数据发现结束时间。
    *
    * @return $this
    */
    public function setFindEndTime($findEndTime)
    {
        $this->container['findEndTime'] = $findEndTime;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序字段，FIND_TIME（仅使用limit、offset分页时有效）。
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets orderByAsc
    *  是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    *
    * @return bool|null
    */
    public function getOrderByAsc()
    {
        return $this->container['orderByAsc'];
    }

    /**
    * Sets orderByAsc
    *
    * @param bool|null $orderByAsc 是否升序（仅指定排序参数，且使用limit、offset分页时有效）。
    *
    * @return $this
    */
    public function setOrderByAsc($orderByAsc)
    {
        $this->container['orderByAsc'] = $orderByAsc;
        return $this;
    }

    /**
    * Gets workspace
    *  DataArts Studio工作空间ID
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
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
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

