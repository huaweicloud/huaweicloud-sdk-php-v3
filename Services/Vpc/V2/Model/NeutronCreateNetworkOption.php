<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronCreateNetworkOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronCreateNetworkOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享 取值范围：true、false
    * providernetworkType  功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'adminStateUp' => 'bool',
            'shared' => 'bool',
            'providernetworkType' => 'string',
            'portSecurityEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享 取值范围：true、false
    * providernetworkType  功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'adminStateUp' => null,
        'shared' => null,
        'providernetworkType' => null,
        'portSecurityEnabled' => null
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
    * name  功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享 取值范围：true、false
    * providernetworkType  功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'shared' => 'shared',
            'providernetworkType' => 'provider:network_type',
            'portSecurityEnabled' => 'port_security_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享 取值范围：true、false
    * providernetworkType  功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'shared' => 'setShared',
            'providernetworkType' => 'setProvidernetworkType',
            'portSecurityEnabled' => 'setPortSecurityEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
    * adminStateUp  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    * shared  功能说明：是否支持跨租户共享 取值范围：true、false
    * providernetworkType  功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    * portSecurityEnabled  功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'shared' => 'getShared',
            'providernetworkType' => 'getProvidernetworkType',
            'portSecurityEnabled' => 'getPortSecurityEnabled'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : true;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : false;
        $this->container['providernetworkType'] = isset($data['providernetworkType']) ? $data['providernetworkType'] : null;
        $this->container['portSecurityEnabled'] = isset($data['portSecurityEnabled']) ? $data['portSecurityEnabled'] : true;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['providernetworkType']) && (mb_strlen($this->container['providernetworkType']) > 32)) {
                $invalidProperties[] = "invalid value for 'providernetworkType', the character length must be smaller than or equal to 32.";
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
    * Gets name
    *  功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
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
    * @param string|null $name 功能说明：网络名称 取值范围：0-255个字符 约束：不能为admin_external_net
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 功能说明：资源的管理状态 取值范围：true、false 约束：只支持true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets shared
    *  功能说明：是否支持跨租户共享 取值范围：true、false
    *
    * @return bool|null
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool|null $shared 功能说明：是否支持跨租户共享 取值范围：true、false
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets providernetworkType
    *  功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    *
    * @return string|null
    */
    public function getProvidernetworkType()
    {
        return $this->container['providernetworkType'];
    }

    /**
    * Sets providernetworkType
    *
    * @param string|null $providernetworkType 功能说明：扩展属性：网络类型。管理员属性，普通租户不可见，允许 geneve类型租户执行操作。 取值范围：vxlan, geneve
    *
    * @return $this
    */
    public function setProvidernetworkType($providernetworkType)
    {
        $this->container['providernetworkType'] = $providernetworkType;
        return $this;
    }

    /**
    * Gets portSecurityEnabled
    *  功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @return bool|null
    */
    public function getPortSecurityEnabled()
    {
        return $this->container['portSecurityEnabled'];
    }

    /**
    * Sets portSecurityEnabled
    *
    * @param bool|null $portSecurityEnabled 功能说明：端口安全使能标记 取值范围：true(启用)、false(禁用) 约束：如果不使能，则network下所有虚机的安全组和dhcp防欺骗不生效
    *
    * @return $this
    */
    public function setPortSecurityEnabled($portSecurityEnabled)
    {
        $this->container['portSecurityEnabled'] = $portSecurityEnabled;
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

