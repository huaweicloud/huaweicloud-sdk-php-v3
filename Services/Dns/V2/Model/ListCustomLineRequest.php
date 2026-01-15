<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomLineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomLineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    * status  **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
    * ip  IP地址范围。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineId' => 'string',
            'name' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'showDetail' => 'bool',
            'status' => 'string',
            'ip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    * status  **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
    * ip  IP地址范围。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineId' => null,
        'name' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'showDetail' => null,
        'status' => null,
        'ip' => null
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
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    * status  **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
    * ip  IP地址范围。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineId' => 'line_id',
            'name' => 'name',
            'limit' => 'limit',
            'offset' => 'offset',
            'showDetail' => 'show_detail',
            'status' => 'status',
            'ip' => 'ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    * status  **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
    * ip  IP地址范围。
    *
    * @var string[]
    */
    protected static $setters = [
            'lineId' => 'setLineId',
            'name' => 'setName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'showDetail' => 'setShowDetail',
            'status' => 'setStatus',
            'ip' => 'setIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineId  解析线路ID。
    * name  解析线路名称。
    * limit  分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
    * offset  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
    * showDetail  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    * status  **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
    * ip  IP地址范围。
    *
    * @var string[]
    */
    protected static $getters = [
            'lineId' => 'getLineId',
            'name' => 'getName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'showDetail' => 'getShowDetail',
            'status' => 'getStatus',
            'ip' => 'getIp'
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
        $this->container['lineId'] = isset($data['lineId']) ? $data['lineId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['showDetail'] = isset($data['showDetail']) ? $data['showDetail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lineId']) && !preg_match("/[0-9a-zA-Z_]{0,50}/", $this->container['lineId'])) {
                $invalidProperties[] = "invalid value for 'lineId', must be conform to the pattern /[0-9a-zA-Z_]{0,50}/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[\\w\\u4e00-\\u9fa5\\._-]{0,80}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\w\\u4e00-\\u9fa5\\._-]{0,80}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 3000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 3000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/|DOWN|ACTIVE|ERROR|PENDING_CREATE|PENDING_UPDATE|PENDING_DELETE|FREEZE|DELETED|DISABLE|ENABLE|PENDING_DISABLE|POLICE|POLICE_ACTIVE|ILLEGAL|ILLEGAL_ACTIVE|PENDING_TRANSFER|PENDING_FREEZE|PENDING_POLICE|PENDING_ILLEGAL|PENDING_ACTIVE/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /|DOWN|ACTIVE|ERROR|PENDING_CREATE|PENDING_UPDATE|PENDING_DELETE|FREEZE|DELETED|DISABLE|ENABLE|PENDING_DISABLE|POLICE|POLICE_ACTIVE|ILLEGAL|ILLEGAL_ACTIVE|PENDING_TRANSFER|PENDING_FREEZE|PENDING_POLICE|PENDING_ILLEGAL|PENDING_ACTIVE/.";
            }
            if (!is_null($this->container['ip']) && !preg_match("/[0-9.]{0,15}/", $this->container['ip'])) {
                $invalidProperties[] = "invalid value for 'ip', must be conform to the pattern /[0-9.]{0,15}/.";
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
    * Gets lineId
    *  解析线路ID。
    *
    * @return string|null
    */
    public function getLineId()
    {
        return $this->container['lineId'];
    }

    /**
    * Sets lineId
    *
    * @param string|null $lineId 解析线路ID。
    *
    * @return $this
    */
    public function setLineId($lineId)
    {
        $this->container['lineId'] = $lineId;
        return $this;
    }

    /**
    * Gets name
    *  解析线路名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 解析线路名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
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
    * @param int|null $limit 分页查询时配置每页返回的资源个数。 当查询详细信息时：取值范围：0~100取值一般为10，20，50默认为100。 当查询概要信息时：取值范围：0~3000默认为3000。
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
    *  分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
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
    * @param int|null $offset 分页查询起始偏移量，表示从偏移量的下一个资源开始查询。  取值范围：0~2147483647  默认值为0。  当设置marker不为空时，以marker为分页起始标识，offset不生效。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets showDetail
    *  是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @return bool|null
    */
    public function getShowDetail()
    {
        return $this->container['showDetail'];
    }

    /**
    * Sets showDetail
    *
    * @param bool|null $showDetail 是否查询详细信息。  取值范围：  true：是，查询详细信息。 false：否，不查询详细信息。 默认为true。
    *
    * @return $this
    */
    public function setShowDetail($showDetail)
    {
        $this->container['showDetail'] = $showDetail;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
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
    * @param string|null $status **参数解释：** 资源状态。 **约束限制：** 不涉及。 **取值范围：** - ACTIVE：正常 - PENDING_CREATE：创建中 - PENDING_UPDATE：更新中 - PENDING_DELETE：删除中 - PENDING_FREEZE：冻结中 - FREEZE：冻结 - ERROR：失败  **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ip
    *  IP地址范围。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip IP地址范围。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
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

