<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFirewallReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFirewallReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * tags  服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    * flavor  flavor
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqTags[]',
            'flavor' => '\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqFlavor',
            'chargeInfo' => '\HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqChargeInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * tags  服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    * flavor  flavor
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'flavor' => null,
        'chargeInfo' => null
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
    * name  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * tags  服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    * flavor  flavor
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'flavor' => 'flavor',
            'chargeInfo' => 'charge_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * tags  服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    * flavor  flavor
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'flavor' => 'setFlavor',
            'chargeInfo' => 'setChargeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  防火墙名称
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * tags  服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    * flavor  flavor
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'flavor' => 'getFlavor',
            'chargeInfo' => 'getChargeInfo'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
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
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['chargeInfo'] === null) {
            $invalidProperties[] = "'chargeInfo' can't be null";
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
    *  防火墙名称
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
    * @param string $name 防火墙名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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
    * @param string|null $enterpriseProjectId 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqTags[]|null $tags 服务资源标签列表，防火墙资源添加标签后，可根据键、值组合查询资源，同时可根据键、值组合进行话单合并统计。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqFlavor
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqFlavor $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqChargeInfo
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\CreateFirewallReqChargeInfo $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
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

