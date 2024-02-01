<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConnectionBandwidthLineLevelsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConnectionBandwidthLineLevelsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * localArea  线路规格本端接入点编码信息。
    * remoteArea  线路规格远端接入点编码信息。
    * levels  带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'localArea' => 'string',
            'remoteArea' => 'string',
            'levels' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * localArea  线路规格本端接入点编码信息。
    * remoteArea  线路规格远端接入点编码信息。
    * levels  带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'localArea' => null,
        'remoteArea' => null,
        'levels' => null
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
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * localArea  线路规格本端接入点编码信息。
    * remoteArea  线路规格远端接入点编码信息。
    * levels  带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'localArea' => 'local_area',
            'remoteArea' => 'remote_area',
            'levels' => 'levels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * localArea  线路规格本端接入点编码信息。
    * remoteArea  线路规格远端接入点编码信息。
    * levels  带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'localArea' => 'setLocalArea',
            'remoteArea' => 'setRemoteArea',
            'levels' => 'setLevels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * localArea  线路规格本端接入点编码信息。
    * remoteArea  线路规格远端接入点编码信息。
    * levels  带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'localArea' => 'getLocalArea',
            'remoteArea' => 'getRemoteArea',
            'levels' => 'getLevels'
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
    const LEVELS_PT = 'Pt';
    const LEVELS_AG = 'Ag';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelsAllowableValues()
    {
        return [
            self::LEVELS_PT,
            self::LEVELS_AG,
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['localArea'] = isset($data['localArea']) ? $data['localArea'] : null;
        $this->container['remoteArea'] = isset($data['remoteArea']) ? $data['remoteArea'] : null;
        $this->container['levels'] = isset($data['levels']) ? $data['levels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 4096)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) > 64)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) > 64)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be bigger than or equal to 1.";
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
    *  每页返回的个数。 取值范围：1~1000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~1000。
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
    *  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
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
    * @param string|null $marker 翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  根据id查询，可查询多个id。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 根据id查询，可查询多个id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets localArea
    *  线路规格本端接入点编码信息。
    *
    * @return string|null
    */
    public function getLocalArea()
    {
        return $this->container['localArea'];
    }

    /**
    * Sets localArea
    *
    * @param string|null $localArea 线路规格本端接入点编码信息。
    *
    * @return $this
    */
    public function setLocalArea($localArea)
    {
        $this->container['localArea'] = $localArea;
        return $this;
    }

    /**
    * Gets remoteArea
    *  线路规格远端接入点编码信息。
    *
    * @return string|null
    */
    public function getRemoteArea()
    {
        return $this->container['remoteArea'];
    }

    /**
    * Sets remoteArea
    *
    * @param string|null $remoteArea 线路规格远端接入点编码信息。
    *
    * @return $this
    */
    public function setRemoteArea($remoteArea)
    {
        $this->container['remoteArea'] = $remoteArea;
        return $this;
    }

    /**
    * Gets levels
    *  带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @return string[]|null
    */
    public function getLevels()
    {
        return $this->container['levels'];
    }

    /**
    * Sets levels
    *
    * @param string[]|null $levels 带宽等级信息： - Pt: 铂金 - Ag: 银
    *
    * @return $this
    */
    public function setLevels($levels)
    {
        $this->container['levels'] = $levels;
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

