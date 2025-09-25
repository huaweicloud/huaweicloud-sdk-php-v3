<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlockedIpRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlockedIpRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * srcIp  攻击源IP
    * loginType  **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'srcIp' => 'string',
            'loginType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * srcIp  攻击源IP
    * loginType  **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'srcIp' => null,
        'loginType' => null
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
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * srcIp  攻击源IP
    * loginType  **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'srcIp' => 'src_ip',
            'loginType' => 'login_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * srcIp  攻击源IP
    * loginType  **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'srcIp' => 'setSrcIp',
            'loginType' => 'setLoginType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * srcIp  攻击源IP
    * loginType  **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'srcIp' => 'getSrcIp',
            'loginType' => 'getLoginType'
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
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['loginType'] = isset($data['loginType']) ? $data['loginType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['srcIp'] === null) {
            $invalidProperties[] = "'srcIp' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['srcIp'])) {
                $invalidProperties[] = "invalid value for 'srcIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['loginType'] === null) {
            $invalidProperties[] = "'loginType' can't be null";
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
    *  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets srcIp
    *  攻击源IP
    *
    * @return string
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string $srcIp 攻击源IP
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets loginType
    *  **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getLoginType()
    {
        return $this->container['loginType'];
    }

    /**
    * Sets loginType
    *
    * @param string $loginType **参数解释**： 登录类型 **约束限制**: 不涉及 **取值范围**: - mysql：mysql服务。 - rdp：rdp服务。 - ssh：ssh服务。 - vsftp：vsftp服务。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLoginType($loginType)
    {
        $this->container['loginType'] = $loginType;
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

