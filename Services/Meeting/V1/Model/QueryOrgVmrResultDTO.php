<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryOrgVmrResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryOrgVmrResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrPkgName  云会议室套餐名称。
    * vmrPkgParties  云会议室套餐会议并发方数。
    * maxAudienceParties  最大观众与会方数（仅网络研讨会有效）。
    * member  member
    * device  device
    * status  云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    * expireDate  到期时间的时间戳，单位毫秒。
    * commercialMaxAudienceParties  按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vmrId' => 'string',
            'vmrName' => 'string',
            'vmrPkgName' => 'string',
            'vmrPkgParties' => 'int',
            'maxAudienceParties' => 'int',
            'member' => '\HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO',
            'device' => '\HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO',
            'status' => 'int',
            'expireDate' => 'int',
            'commercialMaxAudienceParties' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrPkgName  云会议室套餐名称。
    * vmrPkgParties  云会议室套餐会议并发方数。
    * maxAudienceParties  最大观众与会方数（仅网络研讨会有效）。
    * member  member
    * device  device
    * status  云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    * expireDate  到期时间的时间戳，单位毫秒。
    * commercialMaxAudienceParties  按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vmrId' => null,
        'vmrName' => null,
        'vmrPkgName' => null,
        'vmrPkgParties' => null,
        'maxAudienceParties' => 'int32',
        'member' => null,
        'device' => null,
        'status' => null,
        'expireDate' => 'int64',
        'commercialMaxAudienceParties' => 'int32'
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
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrPkgName  云会议室套餐名称。
    * vmrPkgParties  云会议室套餐会议并发方数。
    * maxAudienceParties  最大观众与会方数（仅网络研讨会有效）。
    * member  member
    * device  device
    * status  云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    * expireDate  到期时间的时间戳，单位毫秒。
    * commercialMaxAudienceParties  按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vmrId' => 'vmrId',
            'vmrName' => 'vmrName',
            'vmrPkgName' => 'vmrPkgName',
            'vmrPkgParties' => 'vmrPkgParties',
            'maxAudienceParties' => 'maxAudienceParties',
            'member' => 'member',
            'device' => 'device',
            'status' => 'status',
            'expireDate' => 'expireDate',
            'commercialMaxAudienceParties' => 'commercialMaxAudienceParties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrPkgName  云会议室套餐名称。
    * vmrPkgParties  云会议室套餐会议并发方数。
    * maxAudienceParties  最大观众与会方数（仅网络研讨会有效）。
    * member  member
    * device  device
    * status  云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    * expireDate  到期时间的时间戳，单位毫秒。
    * commercialMaxAudienceParties  按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vmrId' => 'setVmrId',
            'vmrName' => 'setVmrName',
            'vmrPkgName' => 'setVmrPkgName',
            'vmrPkgParties' => 'setVmrPkgParties',
            'maxAudienceParties' => 'setMaxAudienceParties',
            'member' => 'setMember',
            'device' => 'setDevice',
            'status' => 'setStatus',
            'expireDate' => 'setExpireDate',
            'commercialMaxAudienceParties' => 'setCommercialMaxAudienceParties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrPkgName  云会议室套餐名称。
    * vmrPkgParties  云会议室套餐会议并发方数。
    * maxAudienceParties  最大观众与会方数（仅网络研讨会有效）。
    * member  member
    * device  device
    * status  云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    * expireDate  到期时间的时间戳，单位毫秒。
    * commercialMaxAudienceParties  按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vmrId' => 'getVmrId',
            'vmrName' => 'getVmrName',
            'vmrPkgName' => 'getVmrPkgName',
            'vmrPkgParties' => 'getVmrPkgParties',
            'maxAudienceParties' => 'getMaxAudienceParties',
            'member' => 'getMember',
            'device' => 'getDevice',
            'status' => 'getStatus',
            'expireDate' => 'getExpireDate',
            'commercialMaxAudienceParties' => 'getCommercialMaxAudienceParties'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['vmrName'] = isset($data['vmrName']) ? $data['vmrName'] : null;
        $this->container['vmrPkgName'] = isset($data['vmrPkgName']) ? $data['vmrPkgName'] : null;
        $this->container['vmrPkgParties'] = isset($data['vmrPkgParties']) ? $data['vmrPkgParties'] : null;
        $this->container['maxAudienceParties'] = isset($data['maxAudienceParties']) ? $data['maxAudienceParties'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
        $this->container['commercialMaxAudienceParties'] = isset($data['commercialMaxAudienceParties']) ? $data['commercialMaxAudienceParties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets id
    *  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
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
    * @param string|null $id 云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vmrId
    *  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    *
    * @return string|null
    */
    public function getVmrId()
    {
        return $this->container['vmrId'];
    }

    /**
    * Sets vmrId
    *
    * @param string|null $vmrId 云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    *
    * @return $this
    */
    public function setVmrId($vmrId)
    {
        $this->container['vmrId'] = $vmrId;
        return $this;
    }

    /**
    * Gets vmrName
    *  云会议室名称。
    *
    * @return string|null
    */
    public function getVmrName()
    {
        return $this->container['vmrName'];
    }

    /**
    * Sets vmrName
    *
    * @param string|null $vmrName 云会议室名称。
    *
    * @return $this
    */
    public function setVmrName($vmrName)
    {
        $this->container['vmrName'] = $vmrName;
        return $this;
    }

    /**
    * Gets vmrPkgName
    *  云会议室套餐名称。
    *
    * @return string|null
    */
    public function getVmrPkgName()
    {
        return $this->container['vmrPkgName'];
    }

    /**
    * Sets vmrPkgName
    *
    * @param string|null $vmrPkgName 云会议室套餐名称。
    *
    * @return $this
    */
    public function setVmrPkgName($vmrPkgName)
    {
        $this->container['vmrPkgName'] = $vmrPkgName;
        return $this;
    }

    /**
    * Gets vmrPkgParties
    *  云会议室套餐会议并发方数。
    *
    * @return int|null
    */
    public function getVmrPkgParties()
    {
        return $this->container['vmrPkgParties'];
    }

    /**
    * Sets vmrPkgParties
    *
    * @param int|null $vmrPkgParties 云会议室套餐会议并发方数。
    *
    * @return $this
    */
    public function setVmrPkgParties($vmrPkgParties)
    {
        $this->container['vmrPkgParties'] = $vmrPkgParties;
        return $this;
    }

    /**
    * Gets maxAudienceParties
    *  最大观众与会方数（仅网络研讨会有效）。
    *
    * @return int|null
    */
    public function getMaxAudienceParties()
    {
        return $this->container['maxAudienceParties'];
    }

    /**
    * Sets maxAudienceParties
    *
    * @param int|null $maxAudienceParties 最大观众与会方数（仅网络研讨会有效）。
    *
    * @return $this
    */
    public function setMaxAudienceParties($maxAudienceParties)
    {
        $this->container['maxAudienceParties'] = $maxAudienceParties;
        return $this;
    }

    /**
    * Gets member
    *  member
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO|null
    */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
    * Sets member
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO|null $member member
    *
    * @return $this
    */
    public function setMember($member)
    {
        $this->container['member'] = $member;
        return $this;
    }

    /**
    * Gets device
    *  device
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO|null
    */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
    * Sets device
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\IdMarkDTO|null $device device
    *
    * @return $this
    */
    public function setDevice($device)
    {
        $this->container['device'] = $device;
        return $this;
    }

    /**
    * Gets status
    *  云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 云会议室状态。 * 0：正常 * 1：冻结 * 2：未分配
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets expireDate
    *  到期时间的时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param int|null $expireDate 到期时间的时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
        return $this;
    }

    /**
    * Gets commercialMaxAudienceParties
    *  按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @return int|null
    */
    public function getCommercialMaxAudienceParties()
    {
        return $this->container['commercialMaxAudienceParties'];
    }

    /**
    * Sets commercialMaxAudienceParties
    *
    * @param int|null $commercialMaxAudienceParties 按次资源转商后，商用规格最大观众与会方数（仅网络研讨会有效）。
    *
    * @return $this
    */
    public function setCommercialMaxAudienceParties($commercialMaxAudienceParties)
    {
        $this->container['commercialMaxAudienceParties'] = $commercialMaxAudienceParties;
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

