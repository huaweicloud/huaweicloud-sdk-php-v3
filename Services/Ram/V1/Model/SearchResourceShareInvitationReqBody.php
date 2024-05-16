<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchResourceShareInvitationReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchResourceShareInvitationReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareInvitationIds  资源共享邀请的ID列表。
    * status  资源共享邀请的当前状态。
    * limit  分页页面的最大值。
    * marker  分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceShareIds' => 'string[]',
            'resourceShareInvitationIds' => 'string[]',
            'status' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareInvitationIds  资源共享邀请的ID列表。
    * status  资源共享邀请的当前状态。
    * limit  分页页面的最大值。
    * marker  分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceShareIds' => null,
        'resourceShareInvitationIds' => null,
        'status' => null,
        'limit' => 'int32',
        'marker' => null
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
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareInvitationIds  资源共享邀请的ID列表。
    * status  资源共享邀请的当前状态。
    * limit  分页页面的最大值。
    * marker  分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceShareIds' => 'resource_share_ids',
            'resourceShareInvitationIds' => 'resource_share_invitation_ids',
            'status' => 'status',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareInvitationIds  资源共享邀请的ID列表。
    * status  资源共享邀请的当前状态。
    * limit  分页页面的最大值。
    * marker  分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceShareIds' => 'setResourceShareIds',
            'resourceShareInvitationIds' => 'setResourceShareInvitationIds',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceShareIds  资源共享实例的ID列表。
    * resourceShareInvitationIds  资源共享邀请的ID列表。
    * status  资源共享邀请的当前状态。
    * limit  分页页面的最大值。
    * marker  分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceShareIds' => 'getResourceShareIds',
            'resourceShareInvitationIds' => 'getResourceShareInvitationIds',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
        $this->container['resourceShareIds'] = isset($data['resourceShareIds']) ? $data['resourceShareIds'] : null;
        $this->container['resourceShareInvitationIds'] = isset($data['resourceShareInvitationIds']) ? $data['resourceShareInvitationIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 64)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^\\d{1,}$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^\\d{1,}$/.";
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
    * Gets resourceShareIds
    *  资源共享实例的ID列表。
    *
    * @return string[]|null
    */
    public function getResourceShareIds()
    {
        return $this->container['resourceShareIds'];
    }

    /**
    * Sets resourceShareIds
    *
    * @param string[]|null $resourceShareIds 资源共享实例的ID列表。
    *
    * @return $this
    */
    public function setResourceShareIds($resourceShareIds)
    {
        $this->container['resourceShareIds'] = $resourceShareIds;
        return $this;
    }

    /**
    * Gets resourceShareInvitationIds
    *  资源共享邀请的ID列表。
    *
    * @return string[]|null
    */
    public function getResourceShareInvitationIds()
    {
        return $this->container['resourceShareInvitationIds'];
    }

    /**
    * Sets resourceShareInvitationIds
    *
    * @param string[]|null $resourceShareInvitationIds 资源共享邀请的ID列表。
    *
    * @return $this
    */
    public function setResourceShareInvitationIds($resourceShareInvitationIds)
    {
        $this->container['resourceShareInvitationIds'] = $resourceShareInvitationIds;
        return $this;
    }

    /**
    * Gets status
    *  资源共享邀请的当前状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源共享邀请的当前状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  分页页面的最大值。
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
    * @param int|null $limit 分页页面的最大值。
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
    *  分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
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
    * @param string|null $marker 分页位置标识。从marker指定索引的下一条数据开始查询。查询第一页数据时，不需要传入此参数，查询后续页码数据时，将查询前一页数据响应体中marker值配入此参数。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

