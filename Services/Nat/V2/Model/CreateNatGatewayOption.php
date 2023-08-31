<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNatGatewayOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNatGatewayOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * enterpriseProjectId  企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * sessionConf  sessionConf
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'routerId' => 'string',
            'internalNetworkId' => 'string',
            'description' => 'string',
            'spec' => 'string',
            'enterpriseProjectId' => 'string',
            'sessionConf' => '\HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * enterpriseProjectId  企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * sessionConf  sessionConf
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'routerId' => null,
        'internalNetworkId' => null,
        'description' => null,
        'spec' => null,
        'enterpriseProjectId' => null,
        'sessionConf' => null
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
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * enterpriseProjectId  企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * sessionConf  sessionConf
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'routerId' => 'router_id',
            'internalNetworkId' => 'internal_network_id',
            'description' => 'description',
            'spec' => 'spec',
            'enterpriseProjectId' => 'enterprise_project_id',
            'sessionConf' => 'session_conf'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * enterpriseProjectId  企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * sessionConf  sessionConf
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'routerId' => 'setRouterId',
            'internalNetworkId' => 'setInternalNetworkId',
            'description' => 'setDescription',
            'spec' => 'setSpec',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'sessionConf' => 'setSessionConf'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    * routerId  VPC的id。
    * internalNetworkId  公网NAT网关下行口（DVR的下一跳）所属的network id。
    * description  公网NAT网关实例的描述，长度限制为255。
    * spec  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    * enterpriseProjectId  企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * sessionConf  sessionConf
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'routerId' => 'getRouterId',
            'internalNetworkId' => 'getInternalNetworkId',
            'description' => 'getDescription',
            'spec' => 'getSpec',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'sessionConf' => 'getSessionConf'
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
    const SPEC__1 = '1';
    const SPEC__2 = '2';
    const SPEC__3 = '3';
    const SPEC__4 = '4';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC__1,
            self::SPEC__2,
            self::SPEC__3,
            self::SPEC__4,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['internalNetworkId'] = isset($data['internalNetworkId']) ? $data['internalNetworkId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['sessionConf'] = isset($data['sessionConf']) ? $data['sessionConf'] : null;
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
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['routerId'] === null) {
            $invalidProperties[] = "'routerId' can't be null";
        }
        if ($this->container['internalNetworkId'] === null) {
            $invalidProperties[] = "'internalNetworkId' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['spec'] === null) {
            $invalidProperties[] = "'spec' can't be null";
        }
            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
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
    *  公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
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
    * @param string $name 公网NAT网关实例的名字，长度限制为64。 公网NAT网关实例的名字仅支持数字、字母、_（下划线）、-（中划线）、中文。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets routerId
    *  VPC的id。
    *
    * @return string
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string $routerId VPC的id。
    *
    * @return $this
    */
    public function setRouterId($routerId)
    {
        $this->container['routerId'] = $routerId;
        return $this;
    }

    /**
    * Gets internalNetworkId
    *  公网NAT网关下行口（DVR的下一跳）所属的network id。
    *
    * @return string
    */
    public function getInternalNetworkId()
    {
        return $this->container['internalNetworkId'];
    }

    /**
    * Sets internalNetworkId
    *
    * @param string $internalNetworkId 公网NAT网关下行口（DVR的下一跳）所属的network id。
    *
    * @return $this
    */
    public function setInternalNetworkId($internalNetworkId)
    {
        $this->container['internalNetworkId'] = $internalNetworkId;
        return $this;
    }

    /**
    * Gets description
    *  公网NAT网关实例的描述，长度限制为255。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 公网NAT网关实例的描述，长度限制为255。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets spec
    *  公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    *
    * @return string
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string $spec 公网NAT网关的规格。 取值为： “1”：小型，SNAT最大连接数10000 “2”：中型，SNAT最大连接数50000 “3”：大型，SNAT最大连接数200000 “4”：超大型，SNAT最大连接数1000000
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID 创建公网NAT网关实例时，关联的企业项目ID。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets sessionConf
    *  sessionConf
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration|null
    */
    public function getSessionConf()
    {
        return $this->container['sessionConf'];
    }

    /**
    * Sets sessionConf
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\SessionConfiguration|null $sessionConf sessionConf
    *
    * @return $this
    */
    public function setSessionConf($sessionConf)
    {
        $this->container['sessionConf'] = $sessionConf;
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

