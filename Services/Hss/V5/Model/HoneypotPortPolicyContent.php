<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HoneypotPortPolicyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HoneypotPortPolicyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * policyName  策略名称
    * portsList  端口与协议
    * whiteIp  ip白名单
    * hostId  主机列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osType' => 'string',
            'policyName' => 'string',
            'portsList' => '\HuaweiCloud\SDK\Hss\V5\Model\HoneypotPortPolicyContentPortsList[]',
            'whiteIp' => 'string[]',
            'hostId' => 'string[]',
            'groupList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * policyName  策略名称
    * portsList  端口与协议
    * whiteIp  ip白名单
    * hostId  主机列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osType' => null,
        'policyName' => null,
        'portsList' => null,
        'whiteIp' => null,
        'hostId' => null,
        'groupList' => null
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
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * policyName  策略名称
    * portsList  端口与协议
    * whiteIp  ip白名单
    * hostId  主机列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osType' => 'os_type',
            'policyName' => 'policy_name',
            'portsList' => 'ports_list',
            'whiteIp' => 'white_ip',
            'hostId' => 'host_id',
            'groupList' => 'group_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * policyName  策略名称
    * portsList  端口与协议
    * whiteIp  ip白名单
    * hostId  主机列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'osType' => 'setOsType',
            'policyName' => 'setPolicyName',
            'portsList' => 'setPortsList',
            'whiteIp' => 'setWhiteIp',
            'hostId' => 'setHostId',
            'groupList' => 'setGroupList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * policyName  策略名称
    * portsList  端口与协议
    * whiteIp  ip白名单
    * hostId  主机列表
    * groupList  分组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'osType' => 'getOsType',
            'policyName' => 'getPolicyName',
            'portsList' => 'getPortsList',
            'whiteIp' => 'getWhiteIp',
            'hostId' => 'getHostId',
            'groupList' => 'getGroupList'
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
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['portsList'] = isset($data['portsList']) ? $data['portsList'] : null;
        $this->container['whiteIp'] = isset($data['whiteIp']) ? $data['whiteIp'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['groupList'] = isset($data['groupList']) ? $data['groupList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
        }
            if ((mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['policyName'])) {
                $invalidProperties[] = "invalid value for 'policyName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['portsList'] === null) {
            $invalidProperties[] = "'portsList' can't be null";
        }
        if ($this->container['whiteIp'] === null) {
            $invalidProperties[] = "'whiteIp' can't be null";
        }
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
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
    * Gets osType
    *  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType 操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets policyName
    *  策略名称
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets portsList
    *  端口与协议
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HoneypotPortPolicyContentPortsList[]
    */
    public function getPortsList()
    {
        return $this->container['portsList'];
    }

    /**
    * Sets portsList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HoneypotPortPolicyContentPortsList[] $portsList 端口与协议
    *
    * @return $this
    */
    public function setPortsList($portsList)
    {
        $this->container['portsList'] = $portsList;
        return $this;
    }

    /**
    * Gets whiteIp
    *  ip白名单
    *
    * @return string[]
    */
    public function getWhiteIp()
    {
        return $this->container['whiteIp'];
    }

    /**
    * Sets whiteIp
    *
    * @param string[] $whiteIp ip白名单
    *
    * @return $this
    */
    public function setWhiteIp($whiteIp)
    {
        $this->container['whiteIp'] = $whiteIp;
        return $this;
    }

    /**
    * Gets hostId
    *  主机列表
    *
    * @return string[]
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string[] $hostId 主机列表
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets groupList
    *  分组列表
    *
    * @return string[]|null
    */
    public function getGroupList()
    {
        return $this->container['groupList'];
    }

    /**
    * Sets groupList
    *
    * @param string[]|null $groupList 分组列表
    *
    * @return $this
    */
    public function setGroupList($groupList)
    {
        $this->container['groupList'] = $groupList;
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

