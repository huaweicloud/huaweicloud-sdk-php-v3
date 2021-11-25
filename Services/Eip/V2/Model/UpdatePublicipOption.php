<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePublicipOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePublicipOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portId  功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    * ipVersion  功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    * alias  功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portId' => 'string',
            'ipVersion' => 'int',
            'alias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portId  功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    * ipVersion  功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    * alias  功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portId' => null,
        'ipVersion' => 'int32',
        'alias' => null
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
    * portId  功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    * ipVersion  功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    * alias  功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portId' => 'port_id',
            'ipVersion' => 'ip_version',
            'alias' => 'alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portId  功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    * ipVersion  功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    * alias  功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @var string[]
    */
    protected static $setters = [
            'portId' => 'setPortId',
            'ipVersion' => 'setIpVersion',
            'alias' => 'setAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portId  功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    * ipVersion  功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    * alias  功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @var string[]
    */
    protected static $getters = [
            'portId' => 'getPortId',
            'ipVersion' => 'getIpVersion',
            'alias' => 'getAlias'
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
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 64)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 64.";
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
    * Gets portId
    *  功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 功能说明：端口id  约束：必须是存在的端口id，如果不带该参数或者值为空时为解除绑定弹性公网IP，如果该端口不存在或端口已绑定弹性公网IP则会提示出错。  和ip_version字段互斥，不能同时更新。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion 功能说明：IP版本信息  取值范围：4和6  4：IPv4  6：IPv6  约束：必须是系统支持的IP版本类型，和port_id互斥，不能同时更新。
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets alias
    *  功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 功能说明：弹性公网IP名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
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

