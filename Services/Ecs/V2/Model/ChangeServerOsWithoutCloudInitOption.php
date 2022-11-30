<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeServerOsWithoutCloudInitOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeServerOsWithoutCloudInitOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminpass  云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    * keyname  密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    * userid  用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    * imageid  切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    * mode  取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminpass' => 'string',
            'keyname' => 'string',
            'userid' => 'string',
            'imageid' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminpass  云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    * keyname  密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    * userid  用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    * imageid  切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    * mode  取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminpass' => null,
        'keyname' => null,
        'userid' => null,
        'imageid' => null,
        'mode' => null
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
    * adminpass  云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    * keyname  密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    * userid  用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    * imageid  切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    * mode  取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminpass' => 'adminpass',
            'keyname' => 'keyname',
            'userid' => 'userid',
            'imageid' => 'imageid',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminpass  云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    * keyname  密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    * userid  用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    * imageid  切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    * mode  取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminpass' => 'setAdminpass',
            'keyname' => 'setKeyname',
            'userid' => 'setUserid',
            'imageid' => 'setImageid',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminpass  云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    * keyname  密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    * userid  用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    * imageid  切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    * mode  取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminpass' => 'getAdminpass',
            'keyname' => 'getKeyname',
            'userid' => 'getUserid',
            'imageid' => 'getImageid',
            'mode' => 'getMode'
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
        $this->container['adminpass'] = isset($data['adminpass']) ? $data['adminpass'] : null;
        $this->container['keyname'] = isset($data['keyname']) ? $data['keyname'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['imageid'] = isset($data['imageid']) ? $data['imageid'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageid'] === null) {
            $invalidProperties[] = "'imageid' can't be null";
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
    * Gets adminpass
    *  云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    *
    * @return string|null
    */
    public function getAdminpass()
    {
        return $this->container['adminpass'];
    }

    /**
    * Sets adminpass
    *
    * @param string|null $adminpass 云服务器管理员帐户的初始登录密码。  其中，Windows管理员帐户的用户名为Administrator。  建议密码复杂度如下：  - 长度为8-26位。 - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。  > 说明： >  - 对于Windows弹性云服务器，密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。 - adminpass和keyname不能同时为空。
    *
    * @return $this
    */
    public function setAdminpass($adminpass)
    {
        $this->container['adminpass'] = $adminpass;
        return $this;
    }

    /**
    * Gets keyname
    *  密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    *
    * @return string|null
    */
    public function getKeyname()
    {
        return $this->container['keyname'];
    }

    /**
    * Sets keyname
    *
    * @param string|null $keyname 密钥名称。  密钥可以通过密钥创建接口进行创建（请参见[创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/ecs_03_1201.html) ）。
    *
    * @return $this
    */
    public function setKeyname($keyname)
    {
        $this->container['keyname'] = $keyname;
        return $this;
    }

    /**
    * Gets userid
    *  用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    *
    * @return string|null
    */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
    * Sets userid
    *
    * @param string|null $userid 用户ID。 说明 如果使用秘钥方式切换操作系统，则该字段为必选字段。
    *
    * @return $this
    */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;
        return $this;
    }

    /**
    * Gets imageid
    *  切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    *
    * @return string
    */
    public function getImageid()
    {
        return $this->container['imageid'];
    }

    /**
    * Sets imageid
    *
    * @param string $imageid 切换系统所使用的新镜像的ID，格式为UUID。  镜像的ID可以从控制台或者参考[《镜像服务API参考》](https://support.huaweicloud.com/api-ims/ims_03_0702.html)的“查询镜像列表”的章节获取。
    *
    * @return $this
    */
    public function setImageid($imageid)
    {
        $this->container['imageid'] = $imageid;
        return $this;
    }

    /**
    * Gets mode
    *  取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 取值为withStopServer ，支持开机状态下切换弹性云服务器操作系统。  mode取值为withStopServer时，对开机状态的  弹性云服务器执行切换操作系统操作，系统自动对云服务器先执行关机，再切换操作系统。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

