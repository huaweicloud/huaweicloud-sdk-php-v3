<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEnterpriseRouter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEnterpriseRouter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * asn  企业路由器实例的BGP AS号
    * enterpriseProjectId  企业项目ID
    * chargeMode  计费模式 按需
    * tags  标签信息
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * availabilityZoneIds  企业路由器所在的可用区列表
    * autoAcceptSharedAttachments  是否开启自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'asn' => 'int',
            'enterpriseProjectId' => 'string',
            'chargeMode' => 'string',
            'tags' => '\HuaweiCloud\SDK\Er\V3\Model\Tag[]',
            'enableDefaultPropagation' => 'bool',
            'enableDefaultAssociation' => 'bool',
            'availabilityZoneIds' => 'string[]',
            'autoAcceptSharedAttachments' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * asn  企业路由器实例的BGP AS号
    * enterpriseProjectId  企业项目ID
    * chargeMode  计费模式 按需
    * tags  标签信息
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * availabilityZoneIds  企业路由器所在的可用区列表
    * autoAcceptSharedAttachments  是否开启自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'asn' => 'int64',
        'enterpriseProjectId' => null,
        'chargeMode' => null,
        'tags' => null,
        'enableDefaultPropagation' => null,
        'enableDefaultAssociation' => null,
        'availabilityZoneIds' => null,
        'autoAcceptSharedAttachments' => null
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
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * asn  企业路由器实例的BGP AS号
    * enterpriseProjectId  企业项目ID
    * chargeMode  计费模式 按需
    * tags  标签信息
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * availabilityZoneIds  企业路由器所在的可用区列表
    * autoAcceptSharedAttachments  是否开启自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'asn' => 'asn',
            'enterpriseProjectId' => 'enterprise_project_id',
            'chargeMode' => 'charge_mode',
            'tags' => 'tags',
            'enableDefaultPropagation' => 'enable_default_propagation',
            'enableDefaultAssociation' => 'enable_default_association',
            'availabilityZoneIds' => 'availability_zone_ids',
            'autoAcceptSharedAttachments' => 'auto_accept_shared_attachments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * asn  企业路由器实例的BGP AS号
    * enterpriseProjectId  企业项目ID
    * chargeMode  计费模式 按需
    * tags  标签信息
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * availabilityZoneIds  企业路由器所在的可用区列表
    * autoAcceptSharedAttachments  是否开启自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'asn' => 'setAsn',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'chargeMode' => 'setChargeMode',
            'tags' => 'setTags',
            'enableDefaultPropagation' => 'setEnableDefaultPropagation',
            'enableDefaultAssociation' => 'setEnableDefaultAssociation',
            'availabilityZoneIds' => 'setAvailabilityZoneIds',
            'autoAcceptSharedAttachments' => 'setAutoAcceptSharedAttachments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * asn  企业路由器实例的BGP AS号
    * enterpriseProjectId  企业项目ID
    * chargeMode  计费模式 按需
    * tags  标签信息
    * enableDefaultPropagation  是否开启默认路由表传播，默认false不开启
    * enableDefaultAssociation  是否开启默认路由表关联，默认false不开启
    * availabilityZoneIds  企业路由器所在的可用区列表
    * autoAcceptSharedAttachments  是否开启自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'asn' => 'getAsn',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'chargeMode' => 'getChargeMode',
            'tags' => 'getTags',
            'enableDefaultPropagation' => 'getEnableDefaultPropagation',
            'enableDefaultAssociation' => 'getEnableDefaultAssociation',
            'availabilityZoneIds' => 'getAvailabilityZoneIds',
            'autoAcceptSharedAttachments' => 'getAutoAcceptSharedAttachments'
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
    const CHARGE_MODE_POST_PAID = 'postPaid';
    const CHARGE_MODE_PRE_PAID = 'prePaid';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_POST_PAID,
            self::CHARGE_MODE_PRE_PAID,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['asn'] = isset($data['asn']) ? $data['asn'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : 'postPaid';
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enableDefaultPropagation'] = isset($data['enableDefaultPropagation']) ? $data['enableDefaultPropagation'] : false;
        $this->container['enableDefaultAssociation'] = isset($data['enableDefaultAssociation']) ? $data['enableDefaultAssociation'] : false;
        $this->container['availabilityZoneIds'] = isset($data['availabilityZoneIds']) ? $data['availabilityZoneIds'] : null;
        $this->container['autoAcceptSharedAttachments'] = isset($data['autoAcceptSharedAttachments']) ? $data['autoAcceptSharedAttachments'] : false;
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
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[一-龥a-zA-Z0-9-_.]*/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[一-龥a-zA-Z0-9-_.]*/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*/.";
            }
        if ($this->container['asn'] === null) {
            $invalidProperties[] = "'asn' can't be null";
        }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|0/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|0/.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['availabilityZoneIds'] === null) {
            $invalidProperties[] = "'availabilityZoneIds' can't be null";
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
    *  企业路由器实例名称
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
    * @param string $name 企业路由器实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  企业路由器实例描述信息
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
    * @param string|null $description 企业路由器实例描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets asn
    *  企业路由器实例的BGP AS号
    *
    * @return int
    */
    public function getAsn()
    {
        return $this->container['asn'];
    }

    /**
    * Sets asn
    *
    * @param int $asn 企业路由器实例的BGP AS号
    *
    * @return $this
    */
    public function setAsn($asn)
    {
        $this->container['asn'] = $asn;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式 按需
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费模式 按需
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enableDefaultPropagation
    *  是否开启默认路由表传播，默认false不开启
    *
    * @return bool|null
    */
    public function getEnableDefaultPropagation()
    {
        return $this->container['enableDefaultPropagation'];
    }

    /**
    * Sets enableDefaultPropagation
    *
    * @param bool|null $enableDefaultPropagation 是否开启默认路由表传播，默认false不开启
    *
    * @return $this
    */
    public function setEnableDefaultPropagation($enableDefaultPropagation)
    {
        $this->container['enableDefaultPropagation'] = $enableDefaultPropagation;
        return $this;
    }

    /**
    * Gets enableDefaultAssociation
    *  是否开启默认路由表关联，默认false不开启
    *
    * @return bool|null
    */
    public function getEnableDefaultAssociation()
    {
        return $this->container['enableDefaultAssociation'];
    }

    /**
    * Sets enableDefaultAssociation
    *
    * @param bool|null $enableDefaultAssociation 是否开启默认路由表关联，默认false不开启
    *
    * @return $this
    */
    public function setEnableDefaultAssociation($enableDefaultAssociation)
    {
        $this->container['enableDefaultAssociation'] = $enableDefaultAssociation;
        return $this;
    }

    /**
    * Gets availabilityZoneIds
    *  企业路由器所在的可用区列表
    *
    * @return string[]
    */
    public function getAvailabilityZoneIds()
    {
        return $this->container['availabilityZoneIds'];
    }

    /**
    * Sets availabilityZoneIds
    *
    * @param string[] $availabilityZoneIds 企业路由器所在的可用区列表
    *
    * @return $this
    */
    public function setAvailabilityZoneIds($availabilityZoneIds)
    {
        $this->container['availabilityZoneIds'] = $availabilityZoneIds;
        return $this;
    }

    /**
    * Gets autoAcceptSharedAttachments
    *  是否开启自动接受共享连接创建，默认false不开启
    *
    * @return bool|null
    */
    public function getAutoAcceptSharedAttachments()
    {
        return $this->container['autoAcceptSharedAttachments'];
    }

    /**
    * Sets autoAcceptSharedAttachments
    *
    * @param bool|null $autoAcceptSharedAttachments 是否开启自动接受共享连接创建，默认false不开启
    *
    * @return $this
    */
    public function setAutoAcceptSharedAttachments($autoAcceptSharedAttachments)
    {
        $this->container['autoAcceptSharedAttachments'] = $autoAcceptSharedAttachments;
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

