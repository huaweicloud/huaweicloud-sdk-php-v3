<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserVmrDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserVmrDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * vmrPkgLength  云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vmrId' => 'string',
            'vmrName' => 'string',
            'vmrMode' => 'int',
            'vmrPkgId' => 'string',
            'vmrPkgName' => 'string',
            'vmrPkgParties' => 'int',
            'vmrPkgLength' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * vmrPkgLength  云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vmrId' => null,
        'vmrName' => null,
        'vmrMode' => null,
        'vmrPkgId' => null,
        'vmrPkgName' => null,
        'vmrPkgParties' => null,
        'vmrPkgLength' => null,
        'status' => 'int32'
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
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * vmrPkgLength  云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vmrId' => 'vmrId',
            'vmrName' => 'vmrName',
            'vmrMode' => 'vmrMode',
            'vmrPkgId' => 'vmrPkgId',
            'vmrPkgName' => 'vmrPkgName',
            'vmrPkgParties' => 'vmrPkgParties',
            'vmrPkgLength' => 'vmrPkgLength',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * vmrPkgLength  云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vmrId' => 'setVmrId',
            'vmrName' => 'setVmrName',
            'vmrMode' => 'setVmrMode',
            'vmrPkgId' => 'setVmrPkgId',
            'vmrPkgName' => 'setVmrPkgName',
            'vmrPkgParties' => 'setVmrPkgParties',
            'vmrPkgLength' => 'setVmrPkgLength',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
    * vmrName  云会议室名称。
    * vmrMode  VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * vmrPkgLength  云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vmrId' => 'getVmrId',
            'vmrName' => 'getVmrName',
            'vmrMode' => 'getVmrMode',
            'vmrPkgId' => 'getVmrPkgId',
            'vmrPkgName' => 'getVmrPkgName',
            'vmrPkgParties' => 'getVmrPkgParties',
            'vmrPkgLength' => 'getVmrPkgLength',
            'status' => 'getStatus'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
            self::STATUS_2,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['vmrId'] = isset($data['vmrId']) ? $data['vmrId'] : null;
        $this->container['vmrName'] = isset($data['vmrName']) ? $data['vmrName'] : null;
        $this->container['vmrMode'] = isset($data['vmrMode']) ? $data['vmrMode'] : null;
        $this->container['vmrPkgId'] = isset($data['vmrPkgId']) ? $data['vmrPkgId'] : null;
        $this->container['vmrPkgName'] = isset($data['vmrPkgName']) ? $data['vmrPkgName'] : null;
        $this->container['vmrPkgParties'] = isset($data['vmrPkgParties']) ? $data['vmrPkgParties'] : null;
        $this->container['vmrPkgLength'] = isset($data['vmrPkgLength']) ? $data['vmrPkgLength'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
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
    * @param string|null $vmrId 云会议室的固定会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口返回数据的vmrConferenceID。
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
    * Gets vmrMode
    *  VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    *
    * @return int|null
    */
    public function getVmrMode()
    {
        return $this->container['vmrMode'];
    }

    /**
    * Sets vmrMode
    *
    * @param int|null $vmrMode VMR模式。 - 0：个人会议ID - 1: 云会议室 - 2: 网络研讨会
    *
    * @return $this
    */
    public function setVmrMode($vmrMode)
    {
        $this->container['vmrMode'] = $vmrMode;
        return $this;
    }

    /**
    * Gets vmrPkgId
    *  云会议室套餐包的id，仅云会议室返回。
    *
    * @return string|null
    */
    public function getVmrPkgId()
    {
        return $this->container['vmrPkgId'];
    }

    /**
    * Sets vmrPkgId
    *
    * @param string|null $vmrPkgId 云会议室套餐包的id，仅云会议室返回。
    *
    * @return $this
    */
    public function setVmrPkgId($vmrPkgId)
    {
        $this->container['vmrPkgId'] = $vmrPkgId;
        return $this;
    }

    /**
    * Gets vmrPkgName
    *  云会议室套餐包的名称，仅云会议室返回。
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
    * @param string|null $vmrPkgName 云会议室套餐包的名称，仅云会议室返回。
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
    *  云会议室套餐包的会议并发方数，仅云会议室返回。
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
    * @param int|null $vmrPkgParties 云会议室套餐包的会议并发方数，仅云会议室返回。
    *
    * @return $this
    */
    public function setVmrPkgParties($vmrPkgParties)
    {
        $this->container['vmrPkgParties'] = $vmrPkgParties;
        return $this;
    }

    /**
    * Gets vmrPkgLength
    *  云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    *
    * @return int|null
    */
    public function getVmrPkgLength()
    {
        return $this->container['vmrPkgLength'];
    }

    /**
    * Sets vmrPkgLength
    *
    * @param int|null $vmrPkgLength 云会议室套餐包的与会时间，若为0则代表无限时长，仅云会议室返回。
    *
    * @return $this
    */
    public function setVmrPkgLength($vmrPkgLength)
    {
        $this->container['vmrPkgLength'] = $vmrPkgLength;
        return $this;
    }

    /**
    * Gets status
    *  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
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
    * @param int|null $status 云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

