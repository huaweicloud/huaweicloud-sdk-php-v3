<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListShareBandwidthTypesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListShareBandwidthTypesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
    * id  支持带宽类型的id
    * bandwidthType  带宽支持类型
    * nameEn  带宽类型英文表述
    * nameZh  带宽类型中文表述
    * publicBorderGroup  带宽类型所处位置，中心站点or边缘站点
    * sortKey  排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string[]',
            'id' => 'string',
            'bandwidthType' => 'string',
            'nameEn' => 'string',
            'nameZh' => 'string',
            'publicBorderGroup' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
    * id  支持带宽类型的id
    * bandwidthType  带宽支持类型
    * nameEn  带宽类型英文表述
    * nameZh  带宽类型中文表述
    * publicBorderGroup  带宽类型所处位置，中心站点or边缘站点
    * sortKey  排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'id' => null,
        'bandwidthType' => null,
        'nameEn' => null,
        'nameZh' => null,
        'publicBorderGroup' => null,
        'sortKey' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'marker' => null,
        'offset' => null
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
    * fields  形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
    * id  支持带宽类型的id
    * bandwidthType  带宽支持类型
    * nameEn  带宽类型英文表述
    * nameZh  带宽类型中文表述
    * publicBorderGroup  带宽类型所处位置，中心站点or边缘站点
    * sortKey  排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'id' => 'id',
            'bandwidthType' => 'bandwidth_type',
            'nameEn' => 'name_en',
            'nameZh' => 'name_zh',
            'publicBorderGroup' => 'public_border_group',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'marker' => 'marker',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
    * id  支持带宽类型的id
    * bandwidthType  带宽支持类型
    * nameEn  带宽类型英文表述
    * nameZh  带宽类型中文表述
    * publicBorderGroup  带宽类型所处位置，中心站点or边缘站点
    * sortKey  排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'id' => 'setId',
            'bandwidthType' => 'setBandwidthType',
            'nameEn' => 'setNameEn',
            'nameZh' => 'setNameZh',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
    * id  支持带宽类型的id
    * bandwidthType  带宽支持类型
    * nameEn  带宽类型英文表述
    * nameZh  带宽类型中文表述
    * publicBorderGroup  带宽类型所处位置，中心站点or边缘站点
    * sortKey  排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'id' => 'getId',
            'bandwidthType' => 'getBandwidthType',
            'nameEn' => 'getNameEn',
            'nameZh' => 'getNameZh',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'offset' => 'getOffset'
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
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 256)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
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
    * Gets fields
    *  形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 形式为\\\"fields=id&fields=bandwidth_type&...\\\"，支持字段：id/bandwidth_type/name_en/name_zh/created_at/update_at/public_border_group/description
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
    *  支持带宽类型的id
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
    * @param string|null $id 支持带宽类型的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  带宽支持类型
    *
    * @return string|null
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param string|null $bandwidthType 带宽支持类型
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets nameEn
    *  带宽类型英文表述
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 带宽类型英文表述
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameZh
    *  带宽类型中文表述
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh 带宽类型中文表述
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  带宽类型所处位置，中心站点or边缘站点
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
    * @param string|null $publicBorderGroup 带宽类型所处位置，中心站点or边缘站点
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
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
    * @param string|null $sortKey 排序，形式为\"sort_key=id&sort_dir=asc\"  支持字段：id/bandwidth_type/public_border_group
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
    * Gets marker
    *  分页查询起始的资源ID，为空时为查询第一页
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
    * @param string|null $marker 分页查询起始的资源ID，为空时为查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始的资源序号
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
    * @param int|null $offset 分页查询起始的资源序号
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

