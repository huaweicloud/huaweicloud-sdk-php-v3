<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TwoFactorLoginHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TwoFactorLoginHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机id
    * hostName  主机名称
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * authSwitch  是否开启双因子认证
    * authType  认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题唯一资源标识
    * outsideHost  是否为外部（非华为云）机器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'osType' => 'string',
            'authSwitch' => 'bool',
            'authType' => 'string',
            'topicDisplayName' => 'string',
            'topicUrn' => 'string',
            'outsideHost' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机id
    * hostName  主机名称
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * authSwitch  是否开启双因子认证
    * authType  认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题唯一资源标识
    * outsideHost  是否为外部（非华为云）机器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'osType' => null,
        'authSwitch' => null,
        'authType' => null,
        'topicDisplayName' => null,
        'topicUrn' => null,
        'outsideHost' => null
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
    * hostId  主机id
    * hostName  主机名称
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * authSwitch  是否开启双因子认证
    * authType  认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题唯一资源标识
    * outsideHost  是否为外部（非华为云）机器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'osType' => 'os_type',
            'authSwitch' => 'auth_switch',
            'authType' => 'auth_type',
            'topicDisplayName' => 'topic_display_name',
            'topicUrn' => 'topic_urn',
            'outsideHost' => 'outside_host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机id
    * hostName  主机名称
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * authSwitch  是否开启双因子认证
    * authType  认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题唯一资源标识
    * outsideHost  是否为外部（非华为云）机器
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'osType' => 'setOsType',
            'authSwitch' => 'setAuthSwitch',
            'authType' => 'setAuthType',
            'topicDisplayName' => 'setTopicDisplayName',
            'topicUrn' => 'setTopicUrn',
            'outsideHost' => 'setOutsideHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机id
    * hostName  主机名称
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * authSwitch  是否开启双因子认证
    * authType  认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    * topicDisplayName  主题别名
    * topicUrn  主题唯一资源标识
    * outsideHost  是否为外部（非华为云）机器
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'osType' => 'getOsType',
            'authSwitch' => 'getAuthSwitch',
            'authType' => 'getAuthType',
            'topicDisplayName' => 'getTopicDisplayName',
            'topicUrn' => 'getTopicUrn',
            'outsideHost' => 'getOutsideHost'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['authSwitch'] = isset($data['authSwitch']) ? $data['authSwitch'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['topicDisplayName'] = isset($data['topicDisplayName']) ? $data['topicDisplayName'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authType']) && (mb_strlen($this->container['authType']) > 16)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['authType']) && (mb_strlen($this->container['authType']) < 1)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be bigger than or equal to 1.";
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
    * Gets hostId
    *  主机id
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 主机id
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets authSwitch
    *  是否开启双因子认证
    *
    * @return bool|null
    */
    public function getAuthSwitch()
    {
        return $this->container['authSwitch'];
    }

    /**
    * Sets authSwitch
    *
    * @param bool|null $authSwitch 是否开启双因子认证
    *
    * @return $this
    */
    public function setAuthSwitch($authSwitch)
    {
        $this->container['authSwitch'] = $authSwitch;
        return $this;
    }

    /**
    * Gets authType
    *  认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 认证类型 - sms ： 短信邮件验证 - code ： 验证码验证
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets topicDisplayName
    *  主题别名
    *
    * @return string|null
    */
    public function getTopicDisplayName()
    {
        return $this->container['topicDisplayName'];
    }

    /**
    * Sets topicDisplayName
    *
    * @param string|null $topicDisplayName 主题别名
    *
    * @return $this
    */
    public function setTopicDisplayName($topicDisplayName)
    {
        $this->container['topicDisplayName'] = $topicDisplayName;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题唯一资源标识
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题唯一资源标识
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets outsideHost
    *  是否为外部（非华为云）机器
    *
    * @return bool|null
    */
    public function getOutsideHost()
    {
        return $this->container['outsideHost'];
    }

    /**
    * Sets outsideHost
    *
    * @param bool|null $outsideHost 是否为外部（非华为云）机器
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
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

