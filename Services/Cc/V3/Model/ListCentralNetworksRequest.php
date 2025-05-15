<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCentralNetworksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCentralNetworksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序（asc为升序，desc为降序）。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * enterpriseRouterId  根据ER实例ID过滤列表。
    * attachmentInstanceId  Attachment实例的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * connectionId  连接的ID。
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
            'state' => '\HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkStateEnum[]',
            'enterpriseProjectId' => 'string[]',
            'enterpriseRouterId' => 'string[]',
            'attachmentInstanceId' => 'string[]',
            'globalConnectionBandwidthId' => 'string[]',
            'connectionId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序（asc为升序，desc为降序）。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * enterpriseRouterId  根据ER实例ID过滤列表。
    * attachmentInstanceId  Attachment实例的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * connectionId  连接的ID。
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
        'enterpriseProjectId' => null,
        'enterpriseRouterId' => null,
        'attachmentInstanceId' => null,
        'globalConnectionBandwidthId' => null,
        'connectionId' => null
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
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序（asc为升序，desc为降序）。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * enterpriseRouterId  根据ER实例ID过滤列表。
    * attachmentInstanceId  Attachment实例的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * connectionId  连接的ID。
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
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseRouterId' => 'enterprise_router_id',
            'attachmentInstanceId' => 'attachment_instance_id',
            'globalConnectionBandwidthId' => 'global_connection_bandwidth_id',
            'connectionId' => 'connection_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序（asc为升序，desc为降序）。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * enterpriseRouterId  根据ER实例ID过滤列表。
    * attachmentInstanceId  Attachment实例的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * connectionId  连接的ID。
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
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseRouterId' => 'setEnterpriseRouterId',
            'attachmentInstanceId' => 'setAttachmentInstanceId',
            'globalConnectionBandwidthId' => 'setGlobalConnectionBandwidthId',
            'connectionId' => 'setConnectionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
    * sortKey  排序字段。
    * sortDir  指定排序是升序还是降序（asc为升序，desc为降序）。
    * id  根据ID查询，可查询多个ID。
    * name  根据名字查询，可查询多个名字。
    * state  根据状态查询，可查询多个状态。
    * enterpriseProjectId  根据企业项目ID过滤列表。
    * enterpriseRouterId  根据ER实例ID过滤列表。
    * attachmentInstanceId  Attachment实例的ID。
    * globalConnectionBandwidthId  根据带宽包ID过滤。
    * connectionId  连接的ID。
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
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseRouterId' => 'getEnterpriseRouterId',
            'attachmentInstanceId' => 'getAttachmentInstanceId',
            'globalConnectionBandwidthId' => 'getGlobalConnectionBandwidthId',
            'connectionId' => 'getConnectionId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseRouterId'] = isset($data['enterpriseRouterId']) ? $data['enterpriseRouterId'] : null;
        $this->container['attachmentInstanceId'] = isset($data['attachmentInstanceId']) ? $data['attachmentInstanceId'] : null;
        $this->container['globalConnectionBandwidthId'] = isset($data['globalConnectionBandwidthId']) ? $data['globalConnectionBandwidthId'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
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
    *  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
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
    * @param string|null $marker 翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向后翻页。 翻页过程中，查询条件不能修改，包括过滤条件、排序条件、limit。
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
    *  指定排序是升序还是降序（asc为升序，desc为降序）。
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
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SortDir|null $sortDir 指定排序是升序还是降序（asc为升序，desc为降序）。
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
    *  根据ID查询，可查询多个ID。
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
    * @param string[]|null $id 根据ID查询，可查询多个ID。
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
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkStateEnum[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CentralNetworkStateEnum[]|null $state 根据状态查询，可查询多个状态。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据企业项目ID过滤列表。
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 根据企业项目ID过滤列表。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseRouterId
    *  根据ER实例ID过滤列表。
    *
    * @return string[]|null
    */
    public function getEnterpriseRouterId()
    {
        return $this->container['enterpriseRouterId'];
    }

    /**
    * Sets enterpriseRouterId
    *
    * @param string[]|null $enterpriseRouterId 根据ER实例ID过滤列表。
    *
    * @return $this
    */
    public function setEnterpriseRouterId($enterpriseRouterId)
    {
        $this->container['enterpriseRouterId'] = $enterpriseRouterId;
        return $this;
    }

    /**
    * Gets attachmentInstanceId
    *  Attachment实例的ID。
    *
    * @return string[]|null
    */
    public function getAttachmentInstanceId()
    {
        return $this->container['attachmentInstanceId'];
    }

    /**
    * Sets attachmentInstanceId
    *
    * @param string[]|null $attachmentInstanceId Attachment实例的ID。
    *
    * @return $this
    */
    public function setAttachmentInstanceId($attachmentInstanceId)
    {
        $this->container['attachmentInstanceId'] = $attachmentInstanceId;
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
    * Gets connectionId
    *  连接的ID。
    *
    * @return string[]|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string[]|null $connectionId 连接的ID。
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
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

