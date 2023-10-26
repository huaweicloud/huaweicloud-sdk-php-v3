<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmCreateClusterReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmCreateClusterReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cluster  cluster
    * autoRemind  选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    * phoneNum  接收消息通知的手机号码
    * email  接收消息通知的邮箱
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cluster' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmCreateClusterReqCluster',
            'autoRemind' => 'bool',
            'phoneNum' => 'string',
            'email' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cluster  cluster
    * autoRemind  选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    * phoneNum  接收消息通知的手机号码
    * email  接收消息通知的邮箱
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cluster' => null,
        'autoRemind' => null,
        'phoneNum' => null,
        'email' => null
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
    * cluster  cluster
    * autoRemind  选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    * phoneNum  接收消息通知的手机号码
    * email  接收消息通知的邮箱
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cluster' => 'cluster',
            'autoRemind' => 'auto_remind',
            'phoneNum' => 'phone_num',
            'email' => 'email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cluster  cluster
    * autoRemind  选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    * phoneNum  接收消息通知的手机号码
    * email  接收消息通知的邮箱
    *
    * @var string[]
    */
    protected static $setters = [
            'cluster' => 'setCluster',
            'autoRemind' => 'setAutoRemind',
            'phoneNum' => 'setPhoneNum',
            'email' => 'setEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cluster  cluster
    * autoRemind  选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    * phoneNum  接收消息通知的手机号码
    * email  接收消息通知的邮箱
    *
    * @var string[]
    */
    protected static $getters = [
            'cluster' => 'getCluster',
            'autoRemind' => 'getAutoRemind',
            'phoneNum' => 'getPhoneNum',
            'email' => 'getEmail'
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
        $this->container['cluster'] = isset($data['cluster']) ? $data['cluster'] : null;
        $this->container['autoRemind'] = isset($data['autoRemind']) ? $data['autoRemind'] : null;
        $this->container['phoneNum'] = isset($data['phoneNum']) ? $data['phoneNum'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cluster'] === null) {
            $invalidProperties[] = "'cluster' can't be null";
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
    * Gets cluster
    *  cluster
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmCreateClusterReqCluster
    */
    public function getCluster()
    {
        return $this->container['cluster'];
    }

    /**
    * Sets cluster
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmCreateClusterReqCluster $cluster cluster
    *
    * @return $this
    */
    public function setCluster($cluster)
    {
        $this->container['cluster'] = $cluster;
        return $this;
    }

    /**
    * Gets autoRemind
    *  选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    *
    * @return bool|null
    */
    public function getAutoRemind()
    {
        return $this->container['autoRemind'];
    }

    /**
    * Sets autoRemind
    *
    * @param bool|null $autoRemind 选择是否开启消息通知。开启后，支持配置5个手机号码或邮箱，作业（目前仅支持表/文件迁移的作业）失败时、EIP异常时会发送短信或邮件通知用户
    *
    * @return $this
    */
    public function setAutoRemind($autoRemind)
    {
        $this->container['autoRemind'] = $autoRemind;
        return $this;
    }

    /**
    * Gets phoneNum
    *  接收消息通知的手机号码
    *
    * @return string|null
    */
    public function getPhoneNum()
    {
        return $this->container['phoneNum'];
    }

    /**
    * Sets phoneNum
    *
    * @param string|null $phoneNum 接收消息通知的手机号码
    *
    * @return $this
    */
    public function setPhoneNum($phoneNum)
    {
        $this->container['phoneNum'] = $phoneNum;
        return $this;
    }

    /**
    * Gets email
    *  接收消息通知的邮箱
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
    * @param string|null $email 接收消息通知的邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
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

