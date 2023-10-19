<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCentralNetworkConnectionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCentralNetworkConnectionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序(asc为升序，desc为降序)。
    * id  根据id查询，可查询多个id。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * centralNetworkId  中心网络的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * bandwidthType  根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    * connectionType  连接类型，支持。
    * isCrossRegion  是否跨地域。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'sortKey' => 'string',
            'sortDir' => '\HuaweiCloud\SDK\Cc\V3\Model\SortDir',
            'id' => 'string[]',
            'name' => 'string[]',
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum[]',
            'centralNetworkId' => 'string',
            'globalConnectionBandwidthId' => 'string[]',
            'bandwidthType' => '\HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum',
            'connectionType' => '\HuaweiCloud\SDK\Cc\V3\Model\ConnectionTypeEnum',
            'isCrossRegion' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序(asc为升序，desc为降序)。
    * id  根据id查询，可查询多个id。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * centralNetworkId  中心网络的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * bandwidthType  根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    * connectionType  连接类型，支持。
    * isCrossRegion  是否跨地域。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'sortKey' => null,
        'sortDir' => null,
        'id' => null,
        'name' => null,
        'state' => null,
        'centralNetworkId' => null,
        'globalConnectionBandwidthId' => null,
        'bandwidthType' => null,
        'connectionType' => null,
        'isCrossRegion' => null
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
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序(asc为升序，desc为降序)。
    * id  根据id查询，可查询多个id。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * centralNetworkId  中心网络的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * bandwidthType  根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    * connectionType  连接类型，支持。
    * isCrossRegion  是否跨地域。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'id' => 'id',
            'name' => 'name',
            'state' => 'state',
            'centralNetworkId' => 'central_network_id',
            'globalConnectionBandwidthId' => 'global_connection_bandwidth_id',
            'bandwidthType' => 'bandwidth_type',
            'connectionType' => 'connection_type',
            'isCrossRegion' => 'is_cross_region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序(asc为升序，desc为降序)。
    * id  根据id查询，可查询多个id。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * centralNetworkId  中心网络的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * bandwidthType  根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    * connectionType  连接类型，支持。
    * isCrossRegion  是否跨地域。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'id' => 'setId',
            'name' => 'setName',
            'state' => 'setState',
            'centralNetworkId' => 'setCentralNetworkId',
            'globalConnectionBandwidthId' => 'setGlobalConnectionBandwidthId',
            'bandwidthType' => 'setBandwidthType',
            'connectionType' => 'setConnectionType',
            'isCrossRegion' => 'setIsCrossRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序(asc为升序，desc为降序)。
    * id  根据id查询，可查询多个id。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * centralNetworkId  中心网络的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * bandwidthType  根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    * connectionType  连接类型，支持。
    * isCrossRegion  是否跨地域。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'id' => 'getId',
            'name' => 'getName',
            'state' => 'getState',
            'centralNetworkId' => 'getCentralNetworkId',
            'globalConnectionBandwidthId' => 'getGlobalConnectionBandwidthId',
            'bandwidthType' => 'getBandwidthType',
            'connectionType' => 'getConnectionType',
            'isCrossRegion' => 'getIsCrossRegion'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['centralNetworkId'] = isset($data['centralNetworkId']) ? $data['centralNetworkId'] : null;
        $this->container['globalConnectionBandwidthId'] = isset($data['globalConnectionBandwidthId']) ? $data['globalConnectionBandwidthId'] : null;
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['isCrossRegion'] = isset($data['isCrossRegion']) ? $data['isCrossRegion'] : null;
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
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['centralNetworkId'] === null) {
            $invalidProperties[] = "'centralNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['centralNetworkId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets sortKey
    *  排序字段。
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
    * @param string|null $sortKey 排序字段。
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
    *  指定排序是升序还是降序(asc为升序，desc为降序)。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SortDir|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SortDir|null $sortDir 指定排序是升序还是降序(asc为升序，desc为降序)。
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
    * Gets name
    *  根据名字查询，可查询多个名字。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name 根据名字查询，可查询多个名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  根据状态查询，可查询多个状态。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkConnectionStateEnum[]|null $state 根据状态查询，可查询多个状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets centralNetworkId
    *  中心网络的ID。
    *
    * @return string
    */
    public function getCentralNetworkId()
    {
        return $this->container['centralNetworkId'];
    }

    /**
    * Sets centralNetworkId
    *
    * @param string $centralNetworkId 中心网络的ID。
    *
    * @return $this
    */
    public function setCentralNetworkId($centralNetworkId)
    {
        $this->container['centralNetworkId'] = $centralNetworkId;
        return $this;
    }

    /**
    * Gets globalConnectionBandwidthId
    *  根据带宽包ID过滤。
    *
    * @return string[]|null
    */
    public function getGlobalConnectionBandwidthId()
    {
        return $this->container['globalConnectionBandwidthId'];
    }

    /**
    * Sets globalConnectionBandwidthId
    *
    * @param string[]|null $globalConnectionBandwidthId 根据带宽包ID过滤。
    *
    * @return $this
    */
    public function setGlobalConnectionBandwidthId($globalConnectionBandwidthId)
    {
        $this->container['globalConnectionBandwidthId'] = $globalConnectionBandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum|null
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\BandwidthTypeEnum|null $bandwidthType 根据带宽类型查询。带宽类型包括： - BandwidthPackage (按带宽计费，需要绑定全域互联带宽，并指定分配带宽大小) - TestBandwidth (不收费的测试带宽，仅保留最小带宽，用于测试跨地域连通性）
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets connectionType
    *  连接类型，支持。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ConnectionTypeEnum|null
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ConnectionTypeEnum|null $connectionType 连接类型，支持。
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets isCrossRegion
    *  是否跨地域。
    *
    * @return bool|null
    */
    public function getIsCrossRegion()
    {
        return $this->container['isCrossRegion'];
    }

    /**
    * Sets isCrossRegion
    *
    * @param bool|null $isCrossRegion 是否跨地域。
    *
    * @return $this
    */
    public function setIsCrossRegion($isCrossRegion)
    {
        $this->container['isCrossRegion'] = $isCrossRegion;
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

