<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDecoyPortPolicyDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDecoyPortPolicyDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称
    * portList  端口与协议
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * whiteIp  ip白名单
    * hostList  主机列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'portList' => '\HuaweiCloud\SDK\Hss\V5\Model\PolicyDetailsPortList[]',
            'osType' => 'string',
            'whiteIp' => 'string[]',
            'hostList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称
    * portList  端口与协议
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * whiteIp  ip白名单
    * hostList  主机列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'portList' => null,
        'osType' => null,
        'whiteIp' => null,
        'hostList' => null
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
    * policyName  策略名称
    * portList  端口与协议
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * whiteIp  ip白名单
    * hostList  主机列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'portList' => 'port_list',
            'osType' => 'os_type',
            'whiteIp' => 'white_ip',
            'hostList' => 'host_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称
    * portList  端口与协议
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * whiteIp  ip白名单
    * hostList  主机列表
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'portList' => 'setPortList',
            'osType' => 'setOsType',
            'whiteIp' => 'setWhiteIp',
            'hostList' => 'setHostList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称
    * portList  端口与协议
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * whiteIp  ip白名单
    * hostList  主机列表
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'portList' => 'getPortList',
            'osType' => 'getOsType',
            'whiteIp' => 'getWhiteIp',
            'hostList' => 'getHostList'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['portList'] = isset($data['portList']) ? $data['portList'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['whiteIp'] = isset($data['whiteIp']) ? $data['whiteIp'] : null;
        $this->container['hostList'] = isset($data['hostList']) ? $data['hostList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
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
    * Gets policyName
    *  策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets portList
    *  端口与协议
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PolicyDetailsPortList[]|null
    */
    public function getPortList()
    {
        return $this->container['portList'];
    }

    /**
    * Sets portList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PolicyDetailsPortList[]|null $portList 端口与协议
    *
    * @return $this
    */
    public function setPortList($portList)
    {
        $this->container['portList'] = $portList;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
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
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets whiteIp
    *  ip白名单
    *
    * @return string[]|null
    */
    public function getWhiteIp()
    {
        return $this->container['whiteIp'];
    }

    /**
    * Sets whiteIp
    *
    * @param string[]|null $whiteIp ip白名单
    *
    * @return $this
    */
    public function setWhiteIp($whiteIp)
    {
        $this->container['whiteIp'] = $whiteIp;
        return $this;
    }

    /**
    * Gets hostList
    *  主机列表
    *
    * @return string[]|null
    */
    public function getHostList()
    {
        return $this->container['hostList'];
    }

    /**
    * Sets hostList
    *
    * @param string[]|null $hostList 主机列表
    *
    * @return $this
    */
    public function setHostList($hostList)
    {
        $this->container['hostList'] = $hostList;
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

