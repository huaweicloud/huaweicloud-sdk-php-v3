<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResolverRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResolverRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'domainName' => 'string',
            'endpointId' => 'string',
            'ipaddresses' => '\HuaweiCloud\SDK\Dns\V2\Model\IpInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'domainName' => null,
        'endpointId' => null,
        'ipaddresses' => null
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
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'domainName' => 'domain_name',
            'endpointId' => 'endpoint_id',
            'ipaddresses' => 'ipaddresses'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'domainName' => 'setDomainName',
            'endpointId' => 'setEndpointId',
            'ipaddresses' => 'setIpaddresses'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * ipaddresses  规则的目标IP地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'domainName' => 'getDomainName',
            'endpointId' => 'getEndpointId',
            'ipaddresses' => 'getIpaddresses'
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['ipaddresses'] = isset($data['ipaddresses']) ? $data['ipaddresses'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/[\\w\\u4e00-\\u9fa5\\._-]{1,64}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\w\\u4e00-\\u9fa5\\._-]{1,64}/.";
            }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['endpointId'] === null) {
            $invalidProperties[] = "'endpointId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['endpointId'])) {
                $invalidProperties[] = "invalid value for 'endpointId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['ipaddresses'] === null) {
            $invalidProperties[] = "'ipaddresses' can't be null";
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
    *  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domainName
    *  域名。
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets endpointId
    *  当前规则所属的终端节点ID。
    *
    * @return string
    */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
    * Sets endpointId
    *
    * @param string $endpointId 当前规则所属的终端节点ID。
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets ipaddresses
    *  规则的目标IP地址。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\IpInfo[]
    */
    public function getIpaddresses()
    {
        return $this->container['ipaddresses'];
    }

    /**
    * Sets ipaddresses
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\IpInfo[] $ipaddresses 规则的目标IP地址。
    *
    * @return $this
    */
    public function setIpaddresses($ipaddresses)
    {
        $this->container['ipaddresses'] = $ipaddresses;
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

