<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDeviceResultDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDeviceResultDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  终端名称。
    * type  终端类型，区分自研和第三方终端。
    * model  终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    * sn  终端SN号，仅可包含数字、字母和下划线。
    * account  硬终端对应的内置帐号。
    * number  终端绑定的号码。
    * prjCodeMode  投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码。
    * deptName  部门名称。
    * deptNamePath  部门名称路径。
    * phone  手机号。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0、正常 * 1、停用\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'model' => 'string',
            'sn' => 'string',
            'account' => 'string',
            'number' => 'string',
            'prjCodeMode' => 'int',
            'deptCode' => 'string',
            'deptName' => 'string',
            'deptNamePath' => 'string',
            'phone' => 'string',
            'country' => 'string',
            'email' => 'string',
            'description' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  终端名称。
    * type  终端类型，区分自研和第三方终端。
    * model  终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    * sn  终端SN号，仅可包含数字、字母和下划线。
    * account  硬终端对应的内置帐号。
    * number  终端绑定的号码。
    * prjCodeMode  投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码。
    * deptName  部门名称。
    * deptNamePath  部门名称路径。
    * phone  手机号。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0、正常 * 1、停用\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'model' => null,
        'sn' => null,
        'account' => null,
        'number' => null,
        'prjCodeMode' => null,
        'deptCode' => null,
        'deptName' => null,
        'deptNamePath' => null,
        'phone' => null,
        'country' => null,
        'email' => null,
        'description' => null,
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
    * name  终端名称。
    * type  终端类型，区分自研和第三方终端。
    * model  终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    * sn  终端SN号，仅可包含数字、字母和下划线。
    * account  硬终端对应的内置帐号。
    * number  终端绑定的号码。
    * prjCodeMode  投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码。
    * deptName  部门名称。
    * deptNamePath  部门名称路径。
    * phone  手机号。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0、正常 * 1、停用\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'model' => 'model',
            'sn' => 'sn',
            'account' => 'account',
            'number' => 'number',
            'prjCodeMode' => 'prjCodeMode',
            'deptCode' => 'deptCode',
            'deptName' => 'deptName',
            'deptNamePath' => 'deptNamePath',
            'phone' => 'phone',
            'country' => 'country',
            'email' => 'email',
            'description' => 'description',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  终端名称。
    * type  终端类型，区分自研和第三方终端。
    * model  终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    * sn  终端SN号，仅可包含数字、字母和下划线。
    * account  硬终端对应的内置帐号。
    * number  终端绑定的号码。
    * prjCodeMode  投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码。
    * deptName  部门名称。
    * deptNamePath  部门名称路径。
    * phone  手机号。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0、正常 * 1、停用\"
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'model' => 'setModel',
            'sn' => 'setSn',
            'account' => 'setAccount',
            'number' => 'setNumber',
            'prjCodeMode' => 'setPrjCodeMode',
            'deptCode' => 'setDeptCode',
            'deptName' => 'setDeptName',
            'deptNamePath' => 'setDeptNamePath',
            'phone' => 'setPhone',
            'country' => 'setCountry',
            'email' => 'setEmail',
            'description' => 'setDescription',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  终端名称。
    * type  终端类型，区分自研和第三方终端。
    * model  终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    * sn  终端SN号，仅可包含数字、字母和下划线。
    * account  硬终端对应的内置帐号。
    * number  终端绑定的号码。
    * prjCodeMode  投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    * deptCode  部门编码。
    * deptName  部门名称。
    * deptNamePath  部门名称路径。
    * phone  手机号。
    * country  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    * email  邮箱地址。
    * description  终端描述。
    * status  终端状态。 * 0、正常 * 1、停用\"
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'model' => 'getModel',
            'sn' => 'getSn',
            'account' => 'getAccount',
            'number' => 'getNumber',
            'prjCodeMode' => 'getPrjCodeMode',
            'deptCode' => 'getDeptCode',
            'deptName' => 'getDeptName',
            'deptNamePath' => 'getDeptNamePath',
            'phone' => 'getPhone',
            'country' => 'getCountry',
            'email' => 'getEmail',
            'description' => 'getDescription',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['sn'] = isset($data['sn']) ? $data['sn'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['prjCodeMode'] = isset($data['prjCodeMode']) ? $data['prjCodeMode'] : null;
        $this->container['deptCode'] = isset($data['deptCode']) ? $data['deptCode'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
        $this->container['deptNamePath'] = isset($data['deptNamePath']) ? $data['deptNamePath'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets name
    *  终端名称。
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
    * @param string|null $name 终端名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  终端类型，区分自研和第三方终端。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 终端类型，区分自研和第三方终端。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets model
    *  终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    *
    * @return string|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param string|null $model 终端型号，枚举类型。当前支持TE系列和部分第三方硬件终端，具体的终端类型可以通过[[获取所有终端类型](https://support.huaweicloud.com/api-meeting/meeting_21_0092.html)](tag:hws)[[获取所有终端类型](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0092.html)](tag:hk)接口查询。
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
        return $this;
    }

    /**
    * Gets sn
    *  终端SN号，仅可包含数字、字母和下划线。
    *
    * @return string|null
    */
    public function getSn()
    {
        return $this->container['sn'];
    }

    /**
    * Sets sn
    *
    * @param string|null $sn 终端SN号，仅可包含数字、字母和下划线。
    *
    * @return $this
    */
    public function setSn($sn)
    {
        $this->container['sn'] = $sn;
        return $this;
    }

    /**
    * Gets account
    *  硬终端对应的内置帐号。
    *
    * @return string|null
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string|null $account 硬终端对应的内置帐号。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets number
    *  终端绑定的号码。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 终端绑定的号码。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets prjCodeMode
    *  投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    *
    * @return int|null
    */
    public function getPrjCodeMode()
    {
        return $this->container['prjCodeMode'];
    }

    /**
    * Sets prjCodeMode
    *
    * @param int|null $prjCodeMode 投影码生成模式。 * 0：自动(该模式下根据消息上报的IP地址内部控制复杂度：私网地址配置成简单模式；公网地址配置成复杂模式) * 1：简单 * 2：复杂
    *
    * @return $this
    */
    public function setPrjCodeMode($prjCodeMode)
    {
        $this->container['prjCodeMode'] = $prjCodeMode;
        return $this;
    }

    /**
    * Gets deptCode
    *  部门编码。
    *
    * @return string|null
    */
    public function getDeptCode()
    {
        return $this->container['deptCode'];
    }

    /**
    * Sets deptCode
    *
    * @param string|null $deptCode 部门编码。
    *
    * @return $this
    */
    public function setDeptCode($deptCode)
    {
        $this->container['deptCode'] = $deptCode;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
        return $this;
    }

    /**
    * Gets deptNamePath
    *  部门名称路径。
    *
    * @return string|null
    */
    public function getDeptNamePath()
    {
        return $this->container['deptNamePath'];
    }

    /**
    * Sets deptNamePath
    *
    * @param string|null $deptNamePath 部门名称路径。
    *
    * @return $this
    */
    public function setDeptNamePath($deptNamePath)
    {
        $this->container['deptNamePath'] = $deptNamePath;
        return $this;
    }

    /**
    * Gets phone
    *  手机号。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 手机号。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets country
    *  [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country [[手机号所属的国家](https://support.huaweicloud.com/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hws)[[手机号所属的国家](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0109.html#ZH-CN_TOPIC_0212714591__table19371178135314)](tag:hk) 。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱地址。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets description
    *  终端描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 终端描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  终端状态。 * 0、正常 * 1、停用\"
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
    * @param int|null $status 终端状态。 * 0、正常 * 1、停用\"
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

