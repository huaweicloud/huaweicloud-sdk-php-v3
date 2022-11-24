<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResolveRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResolveRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的endpoint_id。
    * region  当前规则所在的region。
    * ipaddresses  规则关联的目标ip地址。
    * routers  规则关联的目标ip地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'domainName' => 'string',
            'endpointId' => 'string',
            'region' => 'string',
            'ipaddresses' => '\HuaweiCloud\SDK\Dns\V2\Model\IpInfo[]',
            'routers' => '\HuaweiCloud\SDK\Dns\V2\Model\Router[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的endpoint_id。
    * region  当前规则所在的region。
    * ipaddresses  规则关联的目标ip地址。
    * routers  规则关联的目标ip地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'domainName' => null,
        'endpointId' => null,
        'region' => null,
        'ipaddresses' => null,
        'routers' => null
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
    * endpointId  当前规则所属的endpoint_id。
    * region  当前规则所在的region。
    * ipaddresses  规则关联的目标ip地址。
    * routers  规则关联的目标ip地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'domainName' => 'domain_name',
            'endpointId' => 'endpoint_id',
            'region' => 'region',
            'ipaddresses' => 'ipaddresses',
            'routers' => 'routers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的endpoint_id。
    * region  当前规则所在的region。
    * ipaddresses  规则关联的目标ip地址。
    * routers  规则关联的目标ip地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'domainName' => 'setDomainName',
            'endpointId' => 'setEndpointId',
            'region' => 'setRegion',
            'ipaddresses' => 'setIpaddresses',
            'routers' => 'setRouters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称。 取值范围：1-64个字符，支持数字、字母、中文、_（下划线）、-（中划线）、.（点）。
    * domainName  域名。
    * endpointId  当前规则所属的endpoint_id。
    * region  当前规则所在的region。
    * ipaddresses  规则关联的目标ip地址。
    * routers  规则关联的目标ip地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'domainName' => 'getDomainName',
            'endpointId' => 'getEndpointId',
            'region' => 'getRegion',
            'ipaddresses' => 'getIpaddresses',
            'routers' => 'getRouters'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['ipaddresses'] = isset($data['ipaddresses']) ? $data['ipaddresses'] : null;
        $this->container['routers'] = isset($data['routers']) ? $data['routers'] : null;
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
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
        if ($this->container['endpointId'] === null) {
            $invalidProperties[] = "'endpointId' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['ipaddresses'] === null) {
            $invalidProperties[] = "'ipaddresses' can't be null";
        }
        if ($this->container['routers'] === null) {
            $invalidProperties[] = "'routers' can't be null";
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
    *  当前规则所属的endpoint_id。
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
    * @param string $endpointId 当前规则所属的endpoint_id。
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets region
    *  当前规则所在的region。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 当前规则所在的region。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets ipaddresses
    *  规则关联的目标ip地址。
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
    * @param \HuaweiCloud\SDK\Dns\V2\Model\IpInfo[] $ipaddresses 规则关联的目标ip地址。
    *
    * @return $this
    */
    public function setIpaddresses($ipaddresses)
    {
        $this->container['ipaddresses'] = $ipaddresses;
        return $this;
    }

    /**
    * Gets routers
    *  规则关联的目标ip地址。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Router[]
    */
    public function getRouters()
    {
        return $this->container['routers'];
    }

    /**
    * Sets routers
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Router[] $routers 规则关联的目标ip地址。
    *
    * @return $this
    */
    public function setRouters($routers)
    {
        $this->container['routers'] = $routers;
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

