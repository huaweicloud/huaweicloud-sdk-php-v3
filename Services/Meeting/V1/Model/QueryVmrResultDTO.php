<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryVmrResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryVmrResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * gustPwd  来宾密码。
    * gustJoinUrl  来宾与会链接。
    * chairPwd  主持人密码。
    * chairJoinUrl  主持人与会链接。
    * allowGustFirst  允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    * vmrMode  VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vmrId' => 'string',
            'vmrName' => 'string',
            'gustPwd' => 'string',
            'gustJoinUrl' => 'string',
            'chairPwd' => 'string',
            'chairJoinUrl' => 'string',
            'allowGustFirst' => 'bool',
            'gustFirstNotice' => 'bool',
            'vmrMode' => 'int',
            'vmrPkgId' => 'string',
            'vmrPkgName' => 'string',
            'vmrPkgParties' => 'int',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * gustPwd  来宾密码。
    * gustJoinUrl  来宾与会链接。
    * chairPwd  主持人密码。
    * chairJoinUrl  主持人与会链接。
    * allowGustFirst  允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    * vmrMode  VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vmrId' => null,
        'vmrName' => null,
        'gustPwd' => null,
        'gustJoinUrl' => null,
        'chairPwd' => null,
        'chairJoinUrl' => null,
        'allowGustFirst' => null,
        'gustFirstNotice' => null,
        'vmrMode' => null,
        'vmrPkgId' => null,
        'vmrPkgName' => null,
        'vmrPkgParties' => null,
        'status' => null
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
    * vmrId  云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * gustPwd  来宾密码。
    * gustJoinUrl  来宾与会链接。
    * chairPwd  主持人密码。
    * chairJoinUrl  主持人与会链接。
    * allowGustFirst  允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    * vmrMode  VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vmrId' => 'vmrId',
            'vmrName' => 'vmrName',
            'gustPwd' => 'gustPwd',
            'gustJoinUrl' => 'gustJoinUrl',
            'chairPwd' => 'chairPwd',
            'chairJoinUrl' => 'chairJoinUrl',
            'allowGustFirst' => 'allowGustFirst',
            'gustFirstNotice' => 'gustFirstNotice',
            'vmrMode' => 'vmrMode',
            'vmrPkgId' => 'vmrPkgId',
            'vmrPkgName' => 'vmrPkgName',
            'vmrPkgParties' => 'vmrPkgParties',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * gustPwd  来宾密码。
    * gustJoinUrl  来宾与会链接。
    * chairPwd  主持人密码。
    * chairJoinUrl  主持人与会链接。
    * allowGustFirst  允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    * vmrMode  VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vmrId' => 'setVmrId',
            'vmrName' => 'setVmrName',
            'gustPwd' => 'setGustPwd',
            'gustJoinUrl' => 'setGustJoinUrl',
            'chairPwd' => 'setChairPwd',
            'chairJoinUrl' => 'setChairJoinUrl',
            'allowGustFirst' => 'setAllowGustFirst',
            'gustFirstNotice' => 'setGustFirstNotice',
            'vmrMode' => 'setVmrMode',
            'vmrPkgId' => 'setVmrPkgId',
            'vmrPkgName' => 'setVmrPkgName',
            'vmrPkgParties' => 'setVmrPkgParties',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云会议室的ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrID。
    * vmrId  云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
    * vmrName  云会议室名称。
    * gustPwd  来宾密码。
    * gustJoinUrl  来宾与会链接。
    * chairPwd  主持人密码。
    * chairJoinUrl  主持人与会链接。
    * allowGustFirst  允许来宾先入会。
    * gustFirstNotice  云会议室被使用后是否通知会议室所有者。
    * vmrMode  VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
    * vmrPkgId  云会议室套餐包的id，仅云会议室返回。
    * vmrPkgName  云会议室套餐包的名称，仅云会议室返回。
    * vmrPkgParties  云会议室套餐包的会议并发方数，仅云会议室返回。
    * status  云会议室状态。 * 0：正常 * 1：停用 * 2：未分配
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vmrId' => 'getVmrId',
            'vmrName' => 'getVmrName',
            'gustPwd' => 'getGustPwd',
            'gustJoinUrl' => 'getGustJoinUrl',
            'chairPwd' => 'getChairPwd',
            'chairJoinUrl' => 'getChairJoinUrl',
            'allowGustFirst' => 'getAllowGustFirst',
            'gustFirstNotice' => 'getGustFirstNotice',
            'vmrMode' => 'getVmrMode',
            'vmrPkgId' => 'getVmrPkgId',
            'vmrPkgName' => 'getVmrPkgName',
            'vmrPkgParties' => 'getVmrPkgParties',
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
        $this->container['gustPwd'] = isset($data['gustPwd']) ? $data['gustPwd'] : null;
        $this->container['gustJoinUrl'] = isset($data['gustJoinUrl']) ? $data['gustJoinUrl'] : null;
        $this->container['chairPwd'] = isset($data['chairPwd']) ? $data['chairPwd'] : null;
        $this->container['chairJoinUrl'] = isset($data['chairJoinUrl']) ? $data['chairJoinUrl'] : null;
        $this->container['allowGustFirst'] = isset($data['allowGustFirst']) ? $data['allowGustFirst'] : null;
        $this->container['gustFirstNotice'] = isset($data['gustFirstNotice']) ? $data['gustFirstNotice'] : null;
        $this->container['vmrMode'] = isset($data['vmrMode']) ? $data['vmrMode'] : null;
        $this->container['vmrPkgId'] = isset($data['vmrPkgId']) ? $data['vmrPkgId'] : null;
        $this->container['vmrPkgName'] = isset($data['vmrPkgName']) ? $data['vmrPkgName'] : null;
        $this->container['vmrPkgParties'] = isset($data['vmrPkgParties']) ? $data['vmrPkgParties'] : null;
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
    *  云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
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
    * @param string|null $vmrId 云会议室的固定会议ID或者个人会议ID。 > 对应[[创建会议](https://support.huaweicloud.com/api-meeting/meeting_21_0014.html)](tag:hws)[[创建会议](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0014.html)](tag:hk)接口中的vmrConferenceID。
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
    * Gets gustPwd
    *  来宾密码。
    *
    * @return string|null
    */
    public function getGustPwd()
    {
        return $this->container['gustPwd'];
    }

    /**
    * Sets gustPwd
    *
    * @param string|null $gustPwd 来宾密码。
    *
    * @return $this
    */
    public function setGustPwd($gustPwd)
    {
        $this->container['gustPwd'] = $gustPwd;
        return $this;
    }

    /**
    * Gets gustJoinUrl
    *  来宾与会链接。
    *
    * @return string|null
    */
    public function getGustJoinUrl()
    {
        return $this->container['gustJoinUrl'];
    }

    /**
    * Sets gustJoinUrl
    *
    * @param string|null $gustJoinUrl 来宾与会链接。
    *
    * @return $this
    */
    public function setGustJoinUrl($gustJoinUrl)
    {
        $this->container['gustJoinUrl'] = $gustJoinUrl;
        return $this;
    }

    /**
    * Gets chairPwd
    *  主持人密码。
    *
    * @return string|null
    */
    public function getChairPwd()
    {
        return $this->container['chairPwd'];
    }

    /**
    * Sets chairPwd
    *
    * @param string|null $chairPwd 主持人密码。
    *
    * @return $this
    */
    public function setChairPwd($chairPwd)
    {
        $this->container['chairPwd'] = $chairPwd;
        return $this;
    }

    /**
    * Gets chairJoinUrl
    *  主持人与会链接。
    *
    * @return string|null
    */
    public function getChairJoinUrl()
    {
        return $this->container['chairJoinUrl'];
    }

    /**
    * Sets chairJoinUrl
    *
    * @param string|null $chairJoinUrl 主持人与会链接。
    *
    * @return $this
    */
    public function setChairJoinUrl($chairJoinUrl)
    {
        $this->container['chairJoinUrl'] = $chairJoinUrl;
        return $this;
    }

    /**
    * Gets allowGustFirst
    *  允许来宾先入会。
    *
    * @return bool|null
    */
    public function getAllowGustFirst()
    {
        return $this->container['allowGustFirst'];
    }

    /**
    * Sets allowGustFirst
    *
    * @param bool|null $allowGustFirst 允许来宾先入会。
    *
    * @return $this
    */
    public function setAllowGustFirst($allowGustFirst)
    {
        $this->container['allowGustFirst'] = $allowGustFirst;
        return $this;
    }

    /**
    * Gets gustFirstNotice
    *  云会议室被使用后是否通知会议室所有者。
    *
    * @return bool|null
    */
    public function getGustFirstNotice()
    {
        return $this->container['gustFirstNotice'];
    }

    /**
    * Sets gustFirstNotice
    *
    * @param bool|null $gustFirstNotice 云会议室被使用后是否通知会议室所有者。
    *
    * @return $this
    */
    public function setGustFirstNotice($gustFirstNotice)
    {
        $this->container['gustFirstNotice'] = $gustFirstNotice;
        return $this;
    }

    /**
    * Gets vmrMode
    *  VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
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
    * @param int|null $vmrMode VMR模式。 * 0: 个人会议ID * 1: 云会议室 * 2: 网络研讨会
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

